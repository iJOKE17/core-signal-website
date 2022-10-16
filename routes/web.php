<?php

use Illuminate\Support\Facades\Route;
use BigBlueButton\BigBlueButton;
use GuzzleHttp\Client;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/signal-room', function () {

    $client = new GuzzleHttp\Client();
    $bbb = new BigBlueButton();
    $response = $bbb->getMeetings();

    $forex = [
        "Room F1" => null,
        "Room F2" => null,
        "Room F3" => null,
        "Room F4" => null
    ];

    $binary = [
        "Room B1" => null,
        "Room B2" => null,
        "Room B3" => null,
        "Room B4" => null,
        "Room B5" => null
    ];
    
    if ($response->getReturnCode() == 'SUCCESS') {
        foreach ($response->getRawXml()->meetings->meeting as $meeting) {
            if (array_key_exists($meeting->meetingName->__toString(), $forex)) {
                // $body = [
                //     'id' => $meeting->meetingID->__toString(),
                //     'name' => 'Guest',
                //     'email' => '',
                //     'password' => $meeting->attendeePW->__toString(),
                // ];
    
                // $response = $client->request('POST', 'https://biggerbluebutton.com/api/guest/join', [
                //     'json' => $body
                // ]);
    
                // $str=str_replace("\r\n","",$response->getBody()->getContents());
                // $array_response = json_decode($str, true);
                // $url = $array_response['url'];
                $forex[$meeting->meetingName->__toString()] = [
                    "id" => $meeting->meetingID->__toString()
                ];
            }

            if (array_key_exists($meeting->meetingName->__toString(), $binary)) {
                $binary[$meeting->meetingName->__toString()] = [
                    "id" => $meeting->meetingID->__toString()
                ];
            }
            
        }
    }

    return View::make('welcome')->with('result', [ "FOREX" => $forex, "BINARY" => $binary ]);
})->name('main-signal-room')->middleware('auth');

Route::get('/signal-room/{id}', function ($id) {
    $client = new GuzzleHttp\Client();
    $bbb = new BigBlueButton();
    $url = null;

    $body = [
        'id' => $id,
        'name' => 'Guest',
        'email' => '',
    ];

    $response = $client->request('POST', 'https://biggerbluebutton.com/api/guest/join', [
        'json' => $body
    ]);

    $str=str_replace("\r\n","",$response->getBody()->getContents());
    $array_response = json_decode($str, true);


    if(isset($array_response)) {
        $url = $array_response['url'];
    }

    return View::make('signals.signal-room')->with('url', $url);
})->name('signal-room')->middleware('auth');

Route::get('/history', function () {
    return View::make('history');
})->name('history')->middleware('auth');

Route::get('/personal-data', function () {
    return View::make('personal');
})->name('personal-data')->middleware('auth');

Route::get('/services', function () {
    return View::make('service');
})->name('services')->middleware('auth');

Route::get('/about-us', function () {
    return View::make('aboutus');
})->name('about-us')->middleware('auth');

Route::get('/support', function () {
    return View::make('support');
})->name('support')->middleware('auth');


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
