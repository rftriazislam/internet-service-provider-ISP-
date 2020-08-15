@extends('clientuser.main')
@section('content')

<section>
    <h2 style="text-align:center">User Profile</h2>
    <hr>
    <div class="col-2">
    </div>
    <div class="col-10">
        <h4>Customer Name :&nbsp;<b style="color:blue">{{Auth::user()->customer_name}} </b></h4>
        <h4>User Name :&nbsp;<b style="color:aqua">{{Auth::user()->user_name}} </b></h4>
        <h4>Mitrotik Password :&nbsp;<b style="color:aqua">{{Auth::user()->mitrotik_password}} </b></h4>
        <h4>E-mail :&nbsp;<b style="color:green">{{Auth::user()->customer_email}} </b></h4>
        <h4>Login Password :&nbsp;<b style="color:aqua">{{Auth::user()->password}} </b></h4>
        <h4>Phone : &nbsp;<b style="color:yellow">{{Auth::user()->customer_phone}} </b></h4>
        <h4>Pakage Name:&nbsp;<b style="color:pink">{{Auth::user()->pakages->pakage_name}} </b></h4>
        <h4>Pakage :&nbsp;<b style="color:pink">{{Auth::user()->pakages->pakage_type}} </b></h4>

        <h4> Pakage price:&nbsp;{{Auth::user()->pakages->pakage_price}} /-</h4>
        <h4>Connection :
            @if(Auth::user()->status==1)
            <b style="color:green">On</b>
            @else
            <b style="color:red">Off</b>
            @endif
        </h4>

        <h4>Address :<b style="color:black">{{Auth::user()->customer_address}} </b></h4>

        &nbsp;
</div>



</section>


@endsection