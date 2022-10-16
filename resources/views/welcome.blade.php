@extends('layouts.app')

@section('content')
<div class="container p-5">
    <div class="signal-room-title">
        Room Avialable
    </div>
    <div class="ps-4 mt-2">
        <div class="signal-room-text">
            Choose your Room
        </div>

        <div class="mt-5 signal-room-title">
            Forex Rooms
        </div>
        <div class="mt-5 flex">
            @foreach($result["FOREX"] as $name => $url)
                @if(isset($url['id']))
                <a href="{{ route('signal-room', ['id' => $url['id']]) }}" class="service-card flex flex-column justify-content-center align-items-center me-5">
                        <img src="{{ asset('images/forex-room-icon.png') }}" class="service-icon-card signal-room-icon-card" style="width: 84px;" />
                        <div class="service-text mt-2">
                            {{ $name }}
                        </div>
                        <div class="signal-room-card-text-info">
                            XAU / USD
                        </div>
                        <div class="signal-room-card-text-info">
                            EUR / USD
                        </div>
                    </a>
                @else
                <a class="more-info-card flex flex-column justify-content-center align-items-center me-5">
                    <img src="{{ asset('images/forex-room-lock-icon.png') }}" class="service-icon-card signal-room-icon-card" />
                    <div class="service-text mt-2">
                        {{ $name }}
                    </div>
                    <div class="signal-room-card-text-info">
                        XAU / USD
                    </div>
                    <div class="signal-room-card-text-info">
                        EUR / USD
                    </div>
                </a>
                @endif
            @endforeach   
        </div>

        <div class="mt-5 signal-room-title">
            Binary Rooms
        </div>
        <div class="mt-4 flex">
            @foreach($result["BINARY"] as $name => $url)
                @if(isset($url['id']))
                <a href="{{ route('signal-room', ['id' => $url['id']]) }}" class="service-card flex flex-column justify-content-center align-items-center me-5">
                        <img src="{{ asset('images/binary-room-icon.png') }}" class="service-icon-card signal-room-icon-card" />
                        <div class="service-text mt-2">
                            {{ $name }}
                        </div>
                        <div class="signal-room-card-text-info">
                            XAU / USD
                        </div>
                        <div class="signal-room-card-text-info">
                            EUR / USD
                        </div>
                    </a>
                @else
                <a class="more-info-card flex flex-column justify-content-center align-items-center me-5">
                    <img src="{{ asset('images/binary-room-lock-icon.png') }}" class="service-icon-card signal-room-icon-card" />
                    <div class="service-text mt-2">
                        {{ $name }}
                    </div>
                    <div class="signal-room-card-text-info">
                        XAU / USD
                    </div>
                    <div class="signal-room-card-text-info">
                        EUR / USD
                    </div>
                </a>
                @endif
            @endforeach   
        </div>
    </div>
</div>
    
@endsection