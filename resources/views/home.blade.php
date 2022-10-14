@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row py-4">
        <div class="col-9 px-5">
            <div class="flex flex-column align-items-center">
                <img src="{{ asset('images/homepage.png') }}" style="width: 105%; margin-left: -3%;" />
                <img src="{{ asset('images/homepage2.png') }}" class="mt-4 mb-4" />
                <x-embed url="https://www.youtube.com/watch?v=9hBC5TVdYT8" />
                <img src="{{ asset('images/homepage3.png') }}" class="mt-5" />
            </div>

            <div class="mt-5">
                <div class="homepage-status-title">
                    Service
                </div>
                <div class="mt-4 flex">
                    <a href="#" class="service-card flex flex-column justify-content-center align-items-center">
                        <img src="{{ asset('images/services-icon.png') }}" class="service-icon-card" />
                        <div class="service-text mt-3">
                            Binary
                        </div>
                    </a>

                    <a href="#" class="service-card flex flex-column justify-content-center align-items-center ms-5">
                        <img src="{{ asset('images/services-icon.png') }}" class="service-icon-card" />
                        <div class="service-text mt-3">
                            Forex
                        </div>
                    </a>

                    <a href="#" class="service-card flex flex-column justify-content-center align-items-center ms-5">
                        <img src="{{ asset('images/services-icon.png') }}" class="service-icon-card" />
                        <div class="service-text mt-3">
                            Binary + Forex
                        </div>
                    </a>

                    <a href="#" class="more-info-card flex flex-column justify-content-between py-5 align-items-center ms-5">
                        <i class="bi bi-three-dots text-white more-info-card-icon"></i>
                        <div class="service-text mt-3">
                            More Info.
                        </div>
                    </a>
                </div>

            </div>

            <div class="mt-4">
                <div class="homepage-status-title">
                    Signals Room
                </div>
                <div class="mt-4 flex">
                    <a href="#" class="service-card flex flex-column justify-content-center align-items-center">
                        <img src="{{ asset('images/binary-room-icon.png') }}" class="service-icon-card signal-room-icon-card" />
                        <div class="service-text mt-2">
                            Binary Room
                        </div>
                        <div class="signal-room-card-text-info">
                            XAU / USD
                        </div>
                        <div class="signal-room-card-text-info">
                            EUR / USD
                        </div>
                    </a>

                    <a href="#" class="service-card flex flex-column justify-content-center align-items-center ms-5">
                        <img src="{{ asset('images/forex-room-icon.png') }}" class="service-icon-card signal-room-icon-card" style="width: 84px;" />
                        <div class="service-text mt-2">
                            Forex Room
                        </div>
                        <div class="signal-room-card-text-info">
                            XAU / USD
                        </div>
                        <div class="signal-room-card-text-info">
                            EUR / USD
                        </div>
                    </a>

                    <a href="#" class="more-info-card flex flex-column justify-content-between py-5 align-items-center ms-5">
                        <i class="bi bi-three-dots text-white more-info-card-icon"></i>
                        <div class="service-text mt-3">
                            More Info.
                        </div>
                    </a>
                </div>

            </div>

        </div>
        <div class="col-3 pa-0 pe-4">
            <div class="position-relative home-page-user-status">
                <div class="home-page-user-status-bg" style="z-index: 0;"></div>
                <div class="p-3 flex flex-column h-100 justify-content-between position-relative" style="z-index: 1;">
                    <div>
                        <div class="flex mt-2">
                            <div class="homepage-status-title">
                                Status
                            </div>
                            <div class="status-button ms-3 px-4">
                                <div class="member-text">Active</div>
                            </div>
                        </div>
                        <div class="ps-2 mt-4">
                            <div class="flex">
                                <div class="col-4 homepage-status-text mr-1 my-1">
                                    Forex
                                </div>
                                <div class="vertical-line">
                                </div>
                                <div class="col ps-2 my-1">
                                    <div class="homepage-statistic-text">
                                        23 Days
                                    </div>
                                </div>
                            </div>
                            <div class="flex mt-4">
                                <div class="col-4 homepage-status-text mr-1">
                                    Binary
                                </div>
                                <div class="vertical-line">
                                </div>
                                <div class="col ps-2 flex justify-content-between align-items-baseline">
                                    <div class="homepage-statistic-text">
                                        0 Days
                                    </div>
                                    <a class="get-start-button" href="#">
                                        <div class="member-text">Get Started</div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="member-bg px-3 py-2 mt-5 position-relative">
                            <div class="member-email">
                                {{ Auth::user()->email }}
                            </div>
                            <div class="member-text">
                                    Forex + Binary
                            </div>
                            <div class="mt-2 flex flex-column align-items-center">
                                <div class="member-remaining-text">
                                        7 Days
                                </div>
                                <div class="member-text">
                                        Remaining Day
                                </div>
                            </div>
                            <div class="mb-2 mt-3">
                                <a class="btn member-renew-button w-100">
                                    <div class="member-renew-text">
                                        Renew Access
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="homepage-status-title text-left">
                            The Core Master
                        </div>
                        <div class="flex mt-5 justify-content-end">
                            <div class="homepage-statistic-text my-1">
                                User
                            </div>
                            <div class="vertical-line mx-4">
                            </div>
                            <div class="homepage-statistic-text my-1">
                                123,456
                            </div>
                        </div>
                        <div class="flex mt-3 justify-content-end">
                            <div class="homepage-statistic-text my-1">
                                Online User
                            </div>
                            <div class="vertical-line mx-4">
                            </div>
                            <div class="homepage-statistic-text my-1">
                                123,456
                            </div>
                        </div>
                        <div class="flex mt-3 justify-content-end">
                            <div class="homepage-statistic-text my-1">
                                Transaction
                            </div>
                            <div class="vertical-line mx-4">
                            </div>
                            <div class="homepage-statistic-text my-1">
                                123,456
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
