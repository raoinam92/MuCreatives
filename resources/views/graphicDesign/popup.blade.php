       <div class="container ">
                <div class="row text-center ">

                    <div class="col-lg-12 ">
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
                       
                               <form class="needs-validation " novalidate method="POST" action="{{url('sendemail/send')}}">
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
                                <select class="custom-select selec-opt" id="inputGroupSelect01" name="choose_sub" required>
                                 <option selected>Choose Your Subject</option>
                                    <option value="web">Web Development</option>
                                    <option value="custom">Custom Software Development<</option>
                                    <option value="seo">SEO Expertise</option>
                                     <option value="smm">Social Media Management</option>
                                </select>
                                    
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

                                    <input id="phone" type="tel" name="phone" required>
                                    <div class="invalid-feedback ">
                                        Please provide a valid city.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3" style="display:none;">
                                    <div class="input-group mb-3 ">
                                        <div class="input-group-prepend ">

                                        </div>
                                        <select class="custom-select selec-opt " id="address-country" name="states"></select>
                                       
                                    </div>
                                    <div class="invalid-feedback ">
                                        Please provide a valid state.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 ">

                                    <input type="text " class="form-control style-filed " id="validationCity " name="city" placeholder="City " required>
                                    <div class="valid-feedback ">

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

                </div>
            </div>
            
<style>
    #inputGroupSelect01 {
    height: 34px;
}
</style>