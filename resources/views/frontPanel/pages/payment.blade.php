@extends('layouts.front')

@section('content')

<section class="offer-area" id="area">
    <div class="container">
        <div class="row">

            <h3>Make Payment</h3>

            <br>
            <h4 class="LC20lb">How To Make a Internet Bill Payment:</h4>
            <p class="LC20lb"><strong>1. Bkash Payment</strong></p>
            <p><strong>2. Bank Account Payment</strong></p>
            <p><strong>3. Cash on office counter</strong></p>
        </div>

        <div class="container">
            <div class="row">

                <h4 class="col-md-12">1.Bkash:<br />
                    </b></h4>
                <p><b>Our Merchant Account Number:</b><b style="color:blue"> 01618 05 78 78</b></p>
                <p>(Use Customer ID for Bkash Reference)</p>

                <img src="{{asset('frontend/img/pay.jpg')}}">

            </div>
        </div>
        <hr>
        <h4>2. Bank Account:</h4>
        <p>Account Name : SPIDER MESH</p>
        <p>Account Number:<b style="color:blue"> 018 101 0002339</b></p>
        <p>Bank Name: Union Bank (Bogra Branch)</p>

        <hr>
        <h4>3. Cash on office counter</h4>
        <p>Saturday to Thursday 10AM to 8PM</p>
        <img src="{{asset('frontend/img/pays.png')}}">

    </div>
    </div>
</section>
@endsection