@extends('layouts.app')

@section('content')
<div class="p-5 container">
    <div class="signal-room-title">
        Support
    </div>
    <div class="ps-4 mt-2 mb-5">
        <div class="ms-4 signal-room-text">
            Send your problems here
        </div>
    </div>

    <div class="flex mt-5 justify-content-center">
        <div class="support-content p-5">
            <div>
                <div class="history-text-1">
                    Email
                </div>
                <input type="text" class="form-control support-input mt-2">
            </div>
            <div class="mt-2">
                <div class="history-text-1">
                    Topic
                </div>
                <input type="text" class="form-control support-input mt-2">
            </div>
            <div class="mt-2">
                <div class="history-text-1">
                    Desciption
                </div>
                <textarea class="form-control support-input mt-2" rows="5" ></textarea>
            </div>

            <div class="flex justify-content-end">
                <button type="submit" class="support-button mt-5 px-5 py-2">
                    <div class="support-button-text">
                        Send
                    </div>
                </button>
            </div>
        </div>
    </div>
   
</div>
    
@endsection