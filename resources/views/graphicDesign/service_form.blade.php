<section id="ux-ui-subscribe-from" class="form-section" wow="" bounceinup="" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
    <div class="container subsc-form-popup">
    <div class="wrap-contact100">
      <div class="subscribe-text">
        <h4>Subscribe to our blogs &amp; newsletter and get updates on latest technologies &amp; trends</h4>
      </div>
      <form class="contact100-form validate-form">
        

        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
          
          <input class="input100" type="text" name="name" placeholder="Enter your name">
        </div>

        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
          
          <input class="input100" type="text" name="email" placeholder="Enter your email">
        </div>
            <div class="submit-butn">
            <button class="form-submit-butn" type="button">Subscribe!</button>
            </div>
      </form>
    </div>
  </div>
</section>

<!--==========================
      business-talk-section
    ============================-->

    <section id="business-talk-section" class="form-section" wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
    <div class="container business-form-popup">
      <div class="talk-heading">
        <h2>Let’s Talk Business</h2>
      </div>
       <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="aboutmu-detail-para">
              <p>Call or email us for further queries and for placing an order for the digital services and for ideal partnership deals, and online success if you want to attain it right now!</p>
            </div>
          </div>
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
        </div>
    </div>
    <div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-lg-8">
   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
                       
                               <form id="ser-form" class="needs-validation " novalidate method="POST" action="{{url('sendemail/send')}}">
 {{ csrf_field() }}
                            <div class="form-row ">
                                <div class="col-md-6 mb-3 ">

                                    <input type="text " class="form-control style-filed " id="validationCustom01 " name="name" placeholder="Name " required>
                                    <div class="valid-feedback ">

                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 ">
                                    <input type="text " class="form-control style-filed " id="validationCustom01 " name="company_name" placeholder="Company Name " required>
                                    <div class="valid-feedback ">

                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 ">
                                <input type="text " class="form-control style-filed " id="validationCustom01 " name="Subject" placeholder="Subject " required>
                                    <div class="valid-feedback ">
                                </div>
                                <!--<select class="custom-select selec-opt" id="inputGroupSelect01" name="choose_sub" required>-->
                                <!-- <option selected>Choose Your Subject</option>-->
                                <!--    <option value="1">One</option>-->
                                <!--    <option value="2">Two</option>-->
                                <!--    <option value="3">Three</option>-->
                                <!--</select>-->
                                    
                                    </div>
                                
                                
                                <div class="col-md-6 mb-3 ">

                                    <div class="input-group ">
                                        <div class="input-group-prepend ">

                                        </div>
                                        <input type="email " class="form-control style-filed " name="email" id="validationCustomUsername " placeholder="Email Id "
                                               aria-describedby="inputGroupPrepend " required>
                                        <div class="invalid-feedback ">
                                            Please Enter Your Email.
                                        </div>
                                    </div>
                                </div>
                                 
                                <div class="col-md-6 mb-3 ">

                                    <div class="input-group ">
                                        <div class="input-group-prepend ">

                                        </div>
                                        <input class="form-control style-filed " type="tel" name="phone" placeholder="Telephone Number" required>

                                        <div class="invalid-feedback ">
                                            Please Enter Your Telephone.
                                        </div>
                                    </div>
                                </div>
                              <div class="col-md-6 mb-3 ">

                                    <div class="input-group ">
                                        <div class="input-group-prepend ">

                                        </div>
                                      <select class="custom-select selec-opt " id="address-country" name="states"><option value="pk">Pakistan (&#8235;پاکستان&#8236;&lrm;)</option></select>

                                        <div class="invalid-feedback ">
                                            Please Enter Your State.
                                        </div>
                                    </div>
                                </div>
                              

                                <div class="col-md-12 mb-3 ">

                                    <textarea class="form-control z-depth-1 are-heigh " id="exampleFormControlTextarea6 " rows="3 " name="message" placeholder="Your Message"></textarea>

                                    <div class="invalid-feedback ">
                                        Please select a region.
                                    </div>
                                </div>
                            </div>
                            <div class="talk-form-btn ">
                                <button class="btn btn-primary btn-sm " type="submit" value="Send">Submit</button>
                            </div>
                        </form>
   </div>
     <div class="col-md-2"></div>
 </div>
 </div>
</section>