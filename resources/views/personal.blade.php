@extends('layouts.app')

@section('content')
<div class="container px-5 pb-5">
    <div class="row">
        <div class="col-4 mr-5">
            <div class="personal-page-title-layout flex justify-content-center align-items-center py-4">
                <span class="personal-page-title">Pesonal Info.</span>
            </div>

            <div class="mt-5 pt-4">
                <div>
                    <div class="personal-page-title">
                        Username
                    </div>
                    <div class="personal-page-text mt-2">
                        {{ Auth::user()->email }}
                    </div>
                </div>

                <div class="mt-4">
                    <div class="personal-page-title">
                        Password
                    </div>
                    <div class="personal-page-text mt-2">
                        xxxxxxxxxxxxxxxxxxxxx
                    </div>
                    <a class="btn member-renew-button mt-2" style="border-radius: 5px">
                        <div class="personal-page-text" style="font-size: 9px">
                            Change Password
                        </div>
                    </a>
                </div>
            </div>


        </div>
        <div class="col">
            <div class="personal-page-title-layout flex justify-content-center align-items-center py-4">
                <span class="personal-page-title">Payment</span>
            </div>
            <div class="mt-5 pt-4">
                <div class="personal-member-bg px-4 pt-3 pb-4 flex flex-column justify-content-between">
                    <div>
                        <div class="personal-member-email">
                            {{ Auth::user()->email }}
                        </div>
                        <div class="personal-member-text">
                                Forex + Binary
                        </div>
                    </div>
                    
                    <div class="flex flex-column align-items-center">
                        <div class="personal-member-remaining-text">
                                7 Days
                        </div>
                        <div class="personal-member-text">
                                Remaining Day
                        </div>
                    </div>
                    <div class="mb-2">
                        <a class="btn member-renew-button w-100">
                            <div class="personal-member-renew-text">
                                Renew Access
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-5 row">
                <div class="col-5">
                    <div class="personal-member-method-title">
                        Payment Method
                        <button class="btn member-renew-button p-1 ms-2" style="border-radius: 5px">
                            <div class="personal-page-text" style="font-size: 9px">
                                <i class="bi bi-plus"></i>
                                Payment
                            </div>
                        </button>
                    </div>

                    <div class="mt-4">
                        <div class="mt- personal-page-text">
                            Credit : Visa : 5405
                            <button class="ms-2" style="background: none; padding: 0;">
                                <div class="personal-payment-card-primary">
                                    Primary
                                </div>
                            </button>
                        </div>
                        <button style="background: none; padding: 0;">
                            <div class="personal-payment-card-remove">
                                Remove
                            </div>
                        </button>
                    </div>
                    <div class="mt-4">
                        <div class="mt- personal-page-text">
                            Credit : Visa : 5555
                        </div>
                        <button style="background: none; padding: 0;">
                            <div class="personal-payment-card-remove">
                                Remove
                            </div>
                        </button>
                    </div>

                    

                </div>
                <div class="col-5">
                    <div>
                        <div class="personal-member-method-title">
                            Billing Contact
                            <button style="background: none;" class="ms-2">
                                <img src="{{ asset('images/pencil-icon.png') }}" />
                            </button>
                        </div>
                        <div class="mt-4">
                            <div class="personal-page-text">
                                Name:
                            </div>
                            <div class="personal-page-text">
                                Bililng Address:
                            </div>
                            <div class="personal-page-text">
                                Email:
                            </div>
                        </div>
                        
                    </div>

                    <div class="mt-5">
                        <div class="personal-member-method-title">
                            Shipping Address
                            <button style="background: none;" class="ms-2">
                                <img src="{{ asset('images/pencil-icon.png') }}" />
                            </button>
                        </div>
                        <div class="mt-4">
                            <div class="personal-page-text">
                                Name:
                            </div>
                            <div class="personal-page-text">
                                Bililng Address:
                            </div>
                            <div class="personal-page-text">
                                Email:
                            </div>
                        </div>
                    </div>
                   
                </div>

            </div>
        </div>
    </div>
</div>
    
@endsection