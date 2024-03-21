@extends('layouts.finance')
@section('content')
    <div>
        <div class="alert alert-primary" style="width:500px;height:40%;background-color:blue;border-radius:10px; height:25%">
            <p class="text-white">Total Income</p>
            <h2 class="text-white"><b>$ 579,000</b></h2>
            <p class="text-white text-small">Saved 25%</p>
        </div>
        <div class="alert alert-primary"
            style="width:500px;height:40%;background-color:rgb(118, 40, 220);border-radius:10px;  height:25%">
            <p class="text-white">Cash on Hand</p>
            <h2 class="text-white"><b>$ 92,000</b></h2>
            <p class="text-white text-small">Saved 25%</p>
        </div>
        <div>
            @include('layouts.chart')
        </div>
    </div>
    <div>
        <div class="alert alert-primary"
            style="width:500px;height:40%;background-color:rgb(69, 168, 226);border-radius:10px;margin-left:20px;  height:25%">
            <p class="text-white">Total Expences</p>
            <h2 class="text-white"><b>$ 79,000</b></h2>
            <p class="text-white text-small">Saved 25%</p>
        </div>
        <div class="alert alert-primary"
            style="width:500px;height:40%;background-color:rgb(24, 208, 144);border-radius:10px;margin-left:20px;  height:25%">
            <p class="text-white">Net Profit Margin</p>
            <h2 class="text-white"><b>$ 179,000</b></h2>
            <p class="text-white text-small">Saved 66%</p>

        </div>
        <div>
        </div>
    </div>
@endsection
