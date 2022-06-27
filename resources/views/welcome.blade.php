@extends('layouts.app')

@section('content')
    <div class="row justify-center items-center py-4 px-3 border-top border-bottom">
        @foreach($result as $name => $url)
            <div class="col-6 px-2">
                @if(isset($url['id']))
                <a href="{{ route('signal-room', ['id' => $url['id']]) }}">
                    <h3 class="text-white text-center mb-3">
                        {{ $name }}
                    </h3>
                </a>
                @else
                    <div class="text-white text-center mb-3">
                        {{ $name }}
                    </div>
                @endif

                @if(isset($url['url']))
                <div class="mb-5"> 
                    <iframe
                        title="{{ $name }}" 
                        src="{{ $url['url'] }}"
                        allowfullscreen="true" 
                        webkitallowfullscreen="true" 
                        mozallowfullscreen="true"
                        allow="autoplay; geolocation; display-capture"
                        style="width: 100%; height: 450px;"
                    >
                    </iframe>
                    <!-- <object type="text/html" data="{{ $url['url'] }}" style="width: 100%; height: 450px;">
                    </object> -->
                </div>
                @else
                    <div class="text-white text-center">Room has not start yet</div>
                @endif
            
            </div>
        @endforeach   
    </div>
@endsection