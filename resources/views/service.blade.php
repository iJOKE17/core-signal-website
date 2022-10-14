@extends('layouts.app')

@section('content')
<div class="p-5 ms-4">
    <div class="signal-room-title">
        Services
    </div>
    <div class="ps-4 mt-2 mb-5">
        <div class="ms-4 signal-room-text">
            Choose your Best Core Package
        </div>
    </div>

    <div>
        <input type="radio" name="1" value="" hidden checked>
        <input type="radio" name="1" value="somethings">somethings <br/>
        <input type="radio" name="1" value="Other">Other
        <!--use class-->
        <div class="dvtext">
            <input type="text" class="txtBox" />
        </div>
        </div>
        <div>
        <input type="radio" name="2" value="" hidden checked>
        <input type="radio" name="2" value="somethings">somethings <br/>
        <input type="radio" name="2" value="Other">Other
        <!--use class here-->
        <div class="dvtext">
            <input type="text" class="txtBox" />
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function(){
        console.log("eeeee")
        $("input[type=radio]").on("change", function() {
            ($(this).val() == "Other") ? $(this).siblings(".dvtext").show(): $(this).siblings(".dvtext").hide()
        })
    })
</script>
@endpush
    
@endsection
