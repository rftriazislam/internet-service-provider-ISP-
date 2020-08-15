<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <link rel="stylesheet" href="styles.css" media="all" />
	<style>
	.container{
   
   
}
.row{
 border: 1px solid #dee2e6;
}
	.col-6{
	    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
	}
	.col-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
	float: left;
	
}
table, td, th {
vertical-align: top;
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th {
text-align: inherit;
  height: 50px;
}
	
	</style>
  </head>
  <body style="">
 
<div class="container">
<h3 style="text-align:center ;color:#00b3ee">Spider Mesh
    
</h3>
<p style="text-align:center ;line-height: 10px;color:black">She's Das Lane, Jaleshwaritola, Bogra Sadar Thana- 5800, Bogra. Contact: 01618057878, 01318302180.</p>
<br>
<h5 style="text-align:center">Invoice/Bill</h5>
<br>
<div style="margin-left:10px;">
    <div class="col-5">
    <p style="line-height: 10px;color:black">Issue Date:&nbsp;{{$payment_info->paid_date}}</p>
        <p style="line-height: 10px;color:black">Name:&nbsp;<b> {{$payment_info->user_client->customer_name}}</b></p>
        <p style="line-height: 10px;color:black">
            Address:&nbsp;{{$payment_info->user_client->customer_address}}
        </p>
        <p style="line-height: 10px;color:black">Contact Person:&nbsp;{{$payment_info->user_client->customer_name}}</p>
        <p style="line-height: 10px;color:black">Email :&nbsp;{{$payment_info->user_client->customer_email}}</p>
        <p style="line-height: 10px;color:black">Phone :&nbsp;{{$payment_info->user_client->customer_phone}}</p>
    </div>
    <div class="col-7"></div>

</div>
<br>

<div class="col-lg-12" style="margin-left:10px;">

    
        <table>
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Bill of Month</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="col" rowspan="2">{{$payment_info->short_note}} </th>
                    <td rowspan="2">  @if($payment_info->month_name==1 )
                                        January
                                        @elseif($payment_info->month_name==2)
                                        February

                                        @elseif($payment_info->month_name==3)
                                        March
                                        @elseif($payment_info->month_name==4)
                                        April
                                        @elseif($payment_info->month_name==5)
                                        May
                                        @elseif($payment_info->month_name==6)
                                        June
                                        @elseif($payment_info->month_name==7)
                                        Juliy
                                        @elseif($payment_info->month_name==8)
                                        August
                                        @elseif($payment_info->month_name==9)
                                        September
                                        @elseif($payment_info->month_name==10)
                                        October
                                        @elseif($payment_info->month_name==11)
                                        November
                                        @elseif($payment_info->month_name==12)
                                        December
                                        @endif </td>
                    <td>
                        Monthly Rent&nbsp;:<b> {{$payment_info->price}}.00 </b>
                        <br>
                        Advance&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;:<b>0.00</b><br>
                        Previous Due&nbsp;&nbsp;&nbsp;:<b>0.00</b><br>
                        Vat(0)%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<b>0.00</b><br>
                    </td>
                </tr>
                <tr>


                    <td scope="row">Total:<b> {{$payment_info->price}} </b>

                    </td>
                </tr>

            </tbody>
        </table>
		
    </div>



<br>
<br>
<div style="margin-left:10px;">
    <div style="float:left">
        <h5>TERMS & CONDITIONS
            <p>*Payment shall be made within 7 days from the date of invoice.<br>
                *Please take money receipt while paying money.
        </h5>
    </div>
    <div style="float:right">
        <p style=";color:black;">Authorized Signature
        </p>

    </div>
</div>
</div>
</div>

  </body>
</html>