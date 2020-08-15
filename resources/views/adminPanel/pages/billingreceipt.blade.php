@extends('layouts.admin_master')
@section('content')
@if(session('message'))
<h6 style="color:red;" class="text-center">
    {{session('message')}}
</h6>
@endif
<div class="col-lg-6">
    <div class="card">
        <div class="card-header">Billing Receipt</div>
        <div class="card-body card-block">
            <form action="{{route('userReceipt')}}" method="post" class="">
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        <input type="text" required name="user_name" id="country_name" placeholder="Username/ID/Mobile"
                            class="typeahead form-control">
                        <input type="hidden" required name="user_id" id="user_id" placeholder="Username/ID/Mobile"
                            class="typeahead form-control">
                        <button type="submit" class="btn btn-secondary btn-sm">Submit</button>
                    </div>
                </div>


                <!-- <div class="form-group">
                    <div class="input-group">
                        <input type="number" id="username2" name="usermonth" placeholder="Month" class="form-control">
                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                    </div>
                </div> -->


                <!-- <div class="form-actions form-group"><button type="submit"
                        class="btn btn-secondary btn-sm">Submit</button></div> -->
            </form>
            <div id="countryList"></div>

        </div>
    </div>
</div>

<script>
$(document).ready(function() {

    $('#country_name').keyup(function() {
        var query = $(this).val();
        if (query != '') {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "{{ route('autocomplete') }}",
                method: "POST",
                data: {
                    query: query,
                    _token: _token
                },
                success: function(data) {
                    $('#countryList').fadeIn();
                    $('#countryList').html(data);
                }

            });
        }
    });

    $(document).on('click', 'li', function() {
        $('#country_name').val($(this).text());
        // $('#user_id').value($(this).value());  
        $('#countryList').fadeOut();
    });

});
</script>



@endsection