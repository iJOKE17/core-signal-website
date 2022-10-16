@extends('layouts.app')

@section('content')
<div class="container p-5">
    <div class="signal-room-title">
        Services
    </div>
    <div class="ps-4 mt-2 mb-5">
        <div class="ms-4 signal-room-text">
            Choose your Best Core Package
        </div>
    </div>

    <div class="row">
        <div class="col ms-3" style="max-width: 500px">
            <div class="service-bg flex flex-column align-items-center py-4">
                <div class="service-card-title">
                    Binary
                </div>
                <div class="my-5 text-center">
                    <div class="position-relative">
                        <div 
                            class="service-discount-second-layout flex align-items-center justify-content-center"
                            name="service-binary"
                        >
                            <div class="service-price-text-secondary">USD</div>
                        </div>
                        <div 
                            id="service-binary-1" 
                            class="service-discount-layout service-discount-second-layout flex align-items-center justify-content-center"
                            name="service-binary"
                        >
                            <div class="service-price-text-primary">
                                100 <span class="service-price-text-secondary">USD</span>
                            </div>
                        </div>
                        <div 
                            id="service-binary-2" 
                            class="service-discount-layout service-discount-second-layout"
                            name="service-binary"
                        >
                            <span class="service-discount-text">
                                300 USD
                            </span>
                            <div class="service-price-text-primary">
                                270 <span class="service-price-text-secondary">USD</span>
                            </div>
                            <div class="service-save-price-text">
                                Save 10%
                            </div>
                        </div>
                        <div 
                            id="service-binary-3" 
                            class="service-discount-layout service-discount-second-layout"
                            name="service-binary"
                        >
                            <span class="service-discount-text">
                                600 USD
                            </span>
                            <div class="service-price-text-primary">
                                510 <span class="service-price-text-secondary">USD</span>
                            </div>
                            <div class="service-save-price-text">
                                Save 15%
                            </div>
                        </div>
                        <div 
                            id="service-binary-4" 
                            class="service-discount-layout"
                            name="service-binary"
                        >
                            <span class="service-discount-text">
                                1200 USD
                            </span>
                            <div class="service-price-text-primary">
                                900 <span class="service-price-text-secondary">USD</span>
                            </div>
                            <div class="service-save-price-text">
                                Save 25%
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="service-card-text">
                    Choose your option
                </div>
                <div class="px-3 mt-3">
                    <div class="flex justify-content-baseline">
                        <input type="radio" name="binary" class="radio-button-service" value="1">
                        <span class="ms-2 service-card-text-info">30 Days Access</span>
                    </div>
                    <div class="flex justify-content-baseline mt-2">
                        <input type="radio" name="binary" class="radio-button-service" value="2">
                        <span class="ms-2 service-card-text-info">90 Days Access</span>
                    </div>
                    <div class="flex justify-content-baseline mt-2">
                        <input type="radio" name="binary" class="radio-button-service" value="3">
                        <span class="ms-2 service-card-text-info">180 Days Access</span>
                    </div>
                    <div class="flex justify-content-baseline mt-2">
                        <input type="radio" name="binary" class="radio-button-service" value="4">
                        <span class="ms-2 service-card-text-info">360 Days Access</span>
                    </div>
                </div>
                
            </div>
            <button class="flex service-card-button justify-content-center py-5 w-100">
                <div class="service-card-button-text">
                    Subscibe
                </div>
            </button>
        </div>
        <div class="col mx-3" style="max-width: 500px">
            <div class="service-bg flex flex-column align-items-center py-4">
                <div class="service-card-title">
                    Forex
                </div>
                <div class="my-5 text-center">
                    <div class="position-relative">
                        <div 
                            class="service-discount-second-layout flex align-items-center justify-content-center"
                            name="service-forex"
                        >
                            <div class="service-price-text-secondary">USD</div>
                        </div>
                        <div 
                            id="service-forex-1" 
                            class="service-discount-layout service-discount-second-layout flex align-items-center justify-content-center"
                            name="service-forex"
                        >
                            <div class="service-price-text-primary">
                                100 <span class="service-price-text-secondary">USD</span>
                            </div>
                        </div>
                        <div 
                            id="service-forex-2" 
                            class="service-discount-layout service-discount-second-layout"
                            name="service-forex"
                        >
                            <span class="service-discount-text">
                                300 USD
                            </span>
                            <div class="service-price-text-primary">
                                270 <span class="service-price-text-secondary">USD</span>
                            </div>
                            <div class="service-save-price-text">
                                Save 10%
                            </div>
                        </div>
                        <div 
                            id="service-forex-3" 
                            class="service-discount-layout service-discount-second-layout"
                            name="service-forex"
                        >
                            <span class="service-discount-text">
                                600 USD
                            </span>
                            <div class="service-price-text-primary">
                                510 <span class="service-price-text-secondary">USD</span>
                            </div>
                            <div class="service-save-price-text">
                                Save 15%
                            </div>
                        </div>
                        <div 
                            id="service-forex-4" 
                            class="service-discount-layout"
                            name="service-forex"
                        >
                            <span class="service-discount-text">
                                1200 USD
                            </span>
                            <div class="service-price-text-primary">
                                900 <span class="service-price-text-secondary">USD</span>
                            </div>
                            <div class="service-save-price-text">
                                Save 25%
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="service-card-text">
                    Choose your option
                </div>
                <div class="px-3 mt-3">
                    <div class="flex justify-content-baseline">
                        <input type="radio" name="forex" class="radio-button-service" value="1">
                        <span class="ms-2 service-card-text-info">30 Days Access</span>
                    </div>
                    <div class="flex justify-content-baseline mt-2">
                        <input type="radio" name="forex" class="radio-button-service" value="2">
                        <span class="ms-2 service-card-text-info">90 Days Access</span>
                    </div>
                    <div class="flex justify-content-baseline mt-2">
                        <input type="radio" name="forex" class="radio-button-service" value="3">
                        <span class="ms-2 service-card-text-info">180 Days Access</span>
                    </div>
                    <div class="flex justify-content-baseline mt-2">
                        <input type="radio" name="forex" class="radio-button-service" value="4">
                        <span class="ms-2 service-card-text-info">360 Days Access</span>
                    </div>
                </div>
                
            </div>
            <button class="flex service-card-button justify-content-center py-5 w-100">
                <div class="service-card-button-text">
                    Subscibe
                </div>
            </button>
        </div>
        <div class="col me-3" style="max-width: 500px">
            <div class="service-bg flex flex-column align-items-center py-4">
                <div class="service-card-title">
                    Binary + Forex
                </div>
                <div class="my-5 text-center">
                    <div class="position-relative">
                        <div 
                            class="service-discount-second-layout flex align-items-center justify-content-center"
                            name="service-binary-forex"
                        >
                            <div class="service-price-text-secondary">USD</div>
                        </div>
                        <div 
                            id="service-binary-forex-1" 
                            class="service-discount-layout service-discount-second-layout flex align-items-center justify-content-center"
                            name="service-binary-forex"
                        >
                            <div class="service-price-text-primary">
                                100 <span class="service-price-text-secondary">USD</span>
                            </div>
                        </div>
                        <div 
                            id="service-binary-forex-2" 
                            class="service-discount-layout service-discount-second-layout"
                            name="service-binary-forex"
                        >
                            <span class="service-discount-text">
                                300 USD
                            </span>
                            <div class="service-price-text-primary">
                                270 <span class="service-price-text-secondary">USD</span>
                            </div>
                            <div class="service-save-price-text">
                                Save 10%
                            </div>
                        </div>
                        <div 
                            id="service-binary-forex-3" 
                            class="service-discount-layout service-discount-second-layout"
                            name="service-binary-forex"
                        >
                            <span class="service-discount-text">
                                600 USD
                            </span>
                            <div class="service-price-text-primary">
                                510 <span class="service-price-text-secondary">USD</span>
                            </div>
                            <div class="service-save-price-text">
                                Save 15%
                            </div>
                        </div>
                        <div 
                            id="service-binary-forex-4" 
                            class="service-discount-layout"
                            name="service-binary-forex"
                        >
                            <span class="service-discount-text">
                                1200 USD
                            </span>
                            <div class="service-price-text-primary">
                                900 <span class="service-price-text-secondary">USD</span>
                            </div>
                            <div class="service-save-price-text">
                                Save 25%
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="service-card-text">
                    Choose your option
                </div>
                <div class="px-3 mt-3">
                    <div class="flex justify-content-baseline">
                        <input type="radio" name="binary-forex" class="radio-button-service" value="1">
                        <span class="ms-2 service-card-text-info">30 Days Access</span>
                    </div>
                    <div class="flex justify-content-baseline mt-2">
                        <input type="radio" name="binary-forex" class="radio-button-service" value="2">
                        <span class="ms-2 service-card-text-info">90 Days Access</span>
                    </div>
                    <div class="flex justify-content-baseline mt-2">
                        <input type="radio" name="binary-forex" class="radio-button-service" value="3">
                        <span class="ms-2 service-card-text-info">180 Days Access</span>
                    </div>
                    <div class="flex justify-content-baseline mt-2">
                        <input type="radio" name="binary-forex" class="radio-button-service" value="4">
                        <span class="ms-2 service-card-text-info">360 Days Access</span>
                    </div>
                </div>
                
            </div>
            <button class="flex service-card-button justify-content-center py-5 w-100">
                <div class="service-card-button-text">
                    Subscibe
                </div>
            </button>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function(){
        $("input[type=radio][name=binary]").on("change", function() {
            $("div[name=service-binary]").css("visibility", "hidden")
            $("#service-binary-" + $(this).val()).css("visibility", "visible")
        })

        $("input[type=radio][name=forex]").on("change", function() {
            $("div[name=service-forex]").css("visibility", "hidden")
            $("#service-forex-" + $(this).val()).css("visibility", "visible")
        })

        $("input[type=radio][name=binary-forex]").on("change", function() {
            $("div[name=service-binary-forex]").css("visibility", "hidden")
            $("#service-binary-forex-" + $(this).val()).css("visibility", "visible")
        })
    })
</script>
@endpush
    
@endsection
