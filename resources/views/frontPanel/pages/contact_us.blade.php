@extends('layouts.front')

@section('content')
<section class=" service-areaaa" style="background-color:white">
<div class="container" >
<h2>Contact.</h2>
<p> We hope to maintain our high level of quality services so that we can be the best and preferred Internet service provider. At Content Oasis, we have a quality policy,which is about achieving sustained services that consistently satisfy the needs and expectations of our customers.</p>

<div class="" style="background-color:white">
 <div class="container" id="home" >
                    <div class="row">
                        <div class="col-md-8 col-md-offset-1 text-center" style="padding-right: 51px;">
                            <div class="header-inner-content" style="border-radius: 14px;border: .5px solid red;background-image:url({{asset('frontend/img/bg/contact.jpg')}})">
                                <form action="{{route('contact')}}" method="post" enctype="multipart/form-data" style="color:black;" class="form-horizontal">
                                @csrf
                                    <div class="row form-group">
                                        
                                        <div class="text-center">
                                            <p class="form-control-static">Contact US</p>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name *</label></div>
                                        <div class="col-9 col-md-6"><input type="user_name" id="text-input" name="user_name" required placeholder="Enter Name" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">E-mail</label></div>
                                        <div class="col-9 col-md-6"><input type="email" id="email-input" name="email" placeholder="Enter Email" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Pnone *</label></div>
                                        <div class="col-9 col-md-6"><input type="number" required id="text-input" name="phone" placeholder="Contact Number" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Subject*</label></div>
                                        <div class="col-9 col-md-6"><input type="text" required id="password-input" name="subject" placeholder="subject" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Message *</label></div>
                                        <div class="col-9 col-md-6"><textarea name="message" required id="textarea-input" rows="9" placeholder="Message..." class="form-control"></textarea></div>
                                    </div>
                            

                                        <div class="row form-group">
                                       <button type="submit"  class=" btn " style="margin-bottom: 7px;margin-right: -90px;width:100px;background-color: #a2999b;">Send</button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                  
                </div>
</div>
</div>
</section>



  <!-- contact area start -->
  <section style="padding: 49px 0 100px 0;" id="codntact">

 <div class="container">
            <div id="maip"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d283901.44570701517!2d89.35420209554496!3d24.727158529955748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc55c2e1c45d37%3A0xc6cf41b4ae9175f0!2sSpider%20Mesh!5e0!3m2!1sen!2sbd!4v1584333961945!5m2!1sen!2sbd" width="100%" height="720" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
            </div>

        </section>



        <div class="row">
                 



        <section style="padding: 49px 0 100px 0;" id="codntact">

<div class="container">






 
                    
<div class="col-md-3 remove-col-padding col-sm-6">
                      <div class="single-price-plan" >
                          <div class="header">
                              <div class="icon">
                                
                              </div>
                              <h4>Address:</h4>
                             <hr>
                          </div>
                          <div class="body">
                              
                             
                              <p>She’s Das Lane,<br>
                              Jaleshwaritola, <br>
                              Bogura-5800
                             </p>
                            


                           
                          </div>
                         
                      </div>
                  </div>



                  <div class="col-md-3 remove-col-padding col-sm-6">
                      <div class="single-price-plan" >
                          <div class="header">
                              <div class="icon">
                              
                              </div>
                              <h4>For contact us:</h4>
                              <hr>
                              <!-- <span class="subtitle">Sales</span> -->
                          </div>
                          <div class="body">
                             
                          <p>(051) 69666 <br>
                             01911288084<br>
                               01618057878<br>
                                  spidermesh@outlook.com
                                </p>


                          </div>
                         
                      </div>
                  </div>
                 








</div>
<div>



</section>
       
        
@endsection