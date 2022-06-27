@extends('layouts.app')

@section('content')
    @if($url != null)
    <div class="mt-4"> 
        <iframe
            src="{{ $url }}"
            allowfullscreen="true" 
            webkitallowfullscreen="true" 
            mozallowfullscreen="true"
            allow="autoplay; geolocation; display-capture"
            style="width: 100%; height: 90vh;"
        >
        </iframe>
    </div>
    @else
        <div class="text-white text-center">Room has not start yet</div>
    @endif
@endsection
