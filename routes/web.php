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

Route::get('/', function () {

    $client = new GuzzleHttp\Client();
    $bbb = new BigBlueButton();
    $response = $bbb->getMeetings();

    $result = [
        "ROOM1" => null,
        "ROOM2" => null,
        "ROOM3" => null
    ];
    
    if ($response->getReturnCode() == 'SUCCESS') {
        foreach ($response->getRawXml()->meetings->meeting as $meeting) {
            if (array_key_exists($meeting->meetingName->__toString(), $result)) {
                $body = [
                    'id' => $meeting->meetingID->__toString(),
                    'name' => 'Guest',
                    'email' => '',
                    'password' => $meeting->attendeePW->__toString(),
                ];
    
                $response = $client->request('POST', 'https://biggerbluebutton.com/api/guest/join', [
                    'json' => $body
                ]);
    
                $str=str_replace("\r\n","",$response->getBody()->getContents());
                $array_response = json_decode($str, true);
                $url = $array_response['url'];
                $result[$meeting->meetingName->__toString()] = [
                    "url" => $url,
                    "id" => $meeting->meetingID->__toString()
                ];
            }
            
        }
    }

    return View::make('welcome')->with('result', $result);
});

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
})->name('signal-room');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
