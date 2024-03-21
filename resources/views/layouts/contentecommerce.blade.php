@extends('layouts.layoutecommerce')
@section('content')
<div class="col-7">
    <div class="d-inline-flex" style="background-color: aquamarine;width:90%;height:50%">
        <div style="margin-left: 50px;margin-top:100px">
            <p>Biggest Ofer Revaled</p>
            <b>MORE FEALS INSIDE </b>
            <br>
            <b>UP TO 50% OFF</b>
            <br>
            <br>
            <a href="#" style="text-decoration: none">Wishlist Now</a>
        </div>
        <div>
            <img src="{{ asset('assets\clients\images\sofa-removebg-preview.png') }}"
                alt="" style="">
        </div>
    </div>
    <div>
        <br>
    </div>
    <div class="row">
        <div class="col-3"
            style="background-color: rgb(221, 115, 229);margin-right:50px;margin-left:10px;height:230px">
            <span>Up to 30% OFF</span>
            <br>
            <span>For all hand purses</span>
            <img src="{{ asset('assets\clients\images\images__4_-removebg-preview.png') }}"
                alt="" style="width:200px;height:150px">
        </div>
        <div class="col-3" style="background-color: rgba(213, 200, 192, 0.384);height:230px">
            <b>
                EXPLORE
                THE BIGGEST
                DISCOUNT
            </b>
            TimZone
            <br>
            <span>Iconic</span>
            <img src="{{ asset('assets\clients\images\images__1_-removebg-preview.png') }}"
                alt="" style="width:200px;height:200px">
        </div>
        <div class="col-3"
            style="background-color: rgb(72, 223, 115);margin-left:50px;height:230px">
            <b>DONT'T MISS THE YEAR END SELL</b>
            <span>7 day left</span>
            <img src="{{ asset('assets\clients\images\images__3_-removebg-preview.png') }}"
                alt="" style="width:200px;height:100px">
        </div>
    </div>
</div>
<div class="col-2">
    <div>
        <span>
            Recently Viewed
        </span>
    </div>
    <div style="background-color:white">
        <img src="{{ asset('assets\clients\images\bag-removebg-preview.png') }}" alt=""
            style="">
    </div>
    <div>
        <span>
            <b>Suggestion for You</b>
        </span>
    </div>
    <div style="width:210px;height:240px;background-color:white">
        <img src="{{ asset('assets\clients\images\bag1-removebg-preview.png') }}" alt=""
            style="">
        {{-- <span>Watch more</span> --}}
    </div>
</div>
@endsection
