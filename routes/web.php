<?php

use Illuminate\Support\Facades\Route;
use BigBlueButton\BigBlueButton;
use BigBlueButton\Parameters\IsMeetingRunningParameters;
use BigBlueButton\Parameters\CreateMeetingParameters;
use BigBlueButton\Parameters\JoinMeetingParameters;
use BigBlueButton\Parameters\GetMeetingInfoParameters;

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
    // $apiUrl = "http://biggerbluebutton.com/bigbluebutton/Signals/";
    // $salt = "T76uupGKsBfxzZxwvSBHOpzFBwcVlfjD";
    // $meetingId = "GnlZYW7UYCw76QEfyQMJM2HN0orO9v2wB53adffZj0CKP6rjCe"; 
    // $goFurther = false;
    // $isMeetingRunning = false;

    // $bbb = new BigBlueButton($apiUrl, $salt);
    // $response = $bbb->getMeetings();
    // $meetings = $response->getMeetings();

    // $getMeetingInfoParams = new GetMeetingInfoParameters($meetings[0]->getMeetingId(), $meetings[0]->getModeratorPassword());
    // $responseMeeting = $bbb->getMeetingInfo($getMeetingInfoParams);

    // $createMeetingParams = new CreateMeetingParameters($meetings[0]->getMeetingId(), $meetings[0]->getMeetingName());
    // $createMeetingParams->setModeratorPW($meetings[0]->getModeratorPassword());

    // $createMeetingResponse = $bbb->createMeeting($createMeetingParams);

    // dd($createMeetingResponse);




    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
