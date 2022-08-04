@extends('layouts.app')

@section('content')
    <div class="row justify-center items-center py-4 px-3 border-top border-bottom mx-0">
        @foreach($result as $name => $url)
            <div class="col-md-4 col-12 px-md-2 px-0">
                @if(isset($url['id']))
                <a href="{{ route('signal-room', ['id' => $url['id']]) }}">
                    <h3 class="text-white text-center mb-3">
                        {{ $name }}
                    </h3>
                </a>
                @else
                    <h3 class="text-white text-center mb-3">
                        {{ $name }}
                    </h3>
                @endif

                @if(isset($url['id']))
                <a href="{{ route('signal-room', ['id' => $url['id']]) }}">
                    <div class="mb-5">
                        <div class="bg-white col-12 py-5 rounded flex-column">
                            <h3 class="text-dark text-center">
                                XAU / USD
                            </h3>
                            <h3 class="text-dark text-center">
                                EUR / USD
                            </h3>
                        </div>
                    </div>
                </a>
                @else
                <div class="mb-5">
                    <div class="bg-white col-12 py-5 rounded flex-column">
                        <h3 class="text-dark text-center">
                            XAU / USD
                        </h3>
                        <h3 class="text-dark text-center">
                            EUR / USD
                        </h3>
                    </div>
                </div>
                @endif
            </div>
        @endforeach   
    </div>
@endsection