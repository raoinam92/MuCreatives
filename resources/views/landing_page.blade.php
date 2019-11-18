
<!DOCTYPE html>
<html>
<head>
    @include('Layout.head')

</head>
<style>
      /*** topbar ***/
    .top-bar {
    padding: 10px 0;
    }
    .top-right {
    padding: 10px 0;
    text-align: center;
    display: flex;
    justify-content: space-between;
    align-content: center;
    align-items: center;
    max-width: 380px;
    margin-left: auto;
    }
    .call-heading {
    margin-bottom: 0px;
    }
    .lp-number {
    font-size: 20px;
    color: #fd7c47;
    }
    .lp-number:hover {
    text-decoration: none;
    color: #000;
    }
    .or-text {
    margin-top: 12px;
    font-size: 20px;
    }
    .btn-topbar {
    border: 0px;
    background-color: #fd7c47;
    color: #fff;
    font-size: 18px;
    border-radius: 10px;
    font-weight: 600;
    padding: 10px 5px;
    }
    
    
    /*** Slider ***/
    .lp-slider {
    background: #25344c;
    background-repeat: no-repeat;
    background-position:center;
    background-size: cover;
    padding: 80px 0;
    background-image: url({{ asset('img/world-map.png')}});
    }
    .sub-heading {
    font-size: 24px;
    }
    .text-orange{
    color: #fd7c47!important;
    }
    .slider-heading {
    color: #fff;
    font-size: 50px;
    font-weight: 700;
    }
    .lp-slider p {
    color: #fff;
    }
    .lp-form {
    max-width: 382px;
    margin: 0 auto;
    background-color: #25344c;
    border: solid 3px #031a3e;
    padding: 15px;
    }
    .lp-form h3 {
    color: #fff;
    }
    .lp-form label {
    display: block;
    color: #fff;
    font-size: 17px;
    }
    .lp-form input {
    width: 100%;
    font-size: 17px;
    margin-bottom: 10px;
    }
    .lp-form .submit-btn {
    background-color: #fd7c47;
    border: 0;
    color: #fff;
    font-weight: 700;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 5px;
    }
    .lp-packages {
    padding-top: 60px;
    margin-bottom: -20px;
        
    }
    
    
    /*** Client ***/
    .lp-client {
    background-color: #f2f2f2;
    padding: 60px 0;
    }
    .main-heading {
    font-size: 45px;
    }
    
    
    .lp-flow {
    padding: 60px 0 0;
    background-color: #f2f2f2;
    }
    .client-icon img{
        margin-bottom:20px;
        width:100%;
        
    }
    .aoc{
        max-width:210px;
    }
    @media only screen and (min-width: 768px) {
     .aoc {
        max-width: 95px;
    }
    }
    
    /*** ABOUT ***/
    .lp-manage {
    background-color: #f2f2f2;
    padding: 60px 0;
    }
    
    .lp-price {
    padding: 60px 0;
    }
    
    /*** Services ***/
    .lp-services {
    padding: 60px 0 40px;
    text-align: center;
    background-color: #f2f2f2;
    }
    .big-heading {
    font-size: 60px;
    }
    .bottom-services {
    padding-top: 25px;
    }
    .service-box {
    border: solid 1px #000;
    margin-bottom: 35px;
    padding: 20px;
    }
    .service-box h2 {
    font-size: 24px;
    font-weight: 700;
    padding-top: 10px;
    }
    .service-box img {
    max-width: 100px;
    }
    
    /***Learn Market ***/
    /*.lp-manage img {*/
    /*max-width: 290px;*/
    /*}*/
    
    
    /***Earn Money ***/
    .lp-earn {
    padding: 60px 0;
    }
    .lp-earn img {
    max-width: 360px;
    width:100%;
    }
    
    
    /*** Testimonial ***/
    .lp-testimonial {
    background-color: #f2f2f2;
    padding: 60px 0;
    text-align: center;
    }
    .star-color {
    color: #f7941d;
    font-size: 25px;
    }
    .testimonial{
    max-width: 800px;
    margin: 25px auto 0;
    }
    
    
    /*** Quote ***/
    .lp-quote img {
    max-width: 60px;
    }
    
    .lp-quote {
    text-align: center;
    background: #25344c;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    padding: 60px 0;
    background-image: url({{ asset('img/world-map.png')}});
    }
    .quote-btn {
    border: 0px;
    font-size: 18px;
    color: #fff;
    background-color: #fd7c47;
    padding: 5px 10px;
    }
    .lp-quote p{
        color:#fff;
    }
    .lp-quote .lp-number{
    font-size: 40px;
    color: #fff;
    text-decoration: none!important;
    font-weight: 700;
    }
    
    
    .price-box {
    background-color: #f2f2f2;
    padding: 20px 5px;
    max-width: 350px;
    margin: 0 auto 35px;
    }
    .pb-heading {
    padding-bottom: 10px;
    }
    .pb-heading h2 {
    font-weight: 700;
    }
    .pb-detail {
    background-color: #fff;
    padding: 8px 5px 10px;
    }
    .price-box.blue {
    background-color: #25344c;
    }
    .price-box.blue .pb-detail::before {
    border-top: 10px solid #25344c;
    }
    .price-box.blue h2{
        color:#fff;
    }
    
    /*** Footer ***/
    .lp-footer {
    background: #282828;
    padding: 20px 0;
    }
    .lp-footer p{
        color:#fff;
    }
    .footer-row {
    display: flex;
    justify-content: space-between;
    align-content: center;
    align-items: center;
    }
    .footer-row .lp-number:hover {
    text-decoration: none;
    color: #fff;
    }
    .pb-detail::before {
    content: '';
    top: 100%;
    right: 50%;
    transform: translate(50%,0);
    -webkit-transform: translate(50%,0);
    height: 0;
    border-left: 15px solid transparent;
    border-right: 15px solid transparent;
    border-top: 10px solid #f2f2f2;
    transition: all .5s ease;
    }
    .pb-detail p {
    font-size: 15px;
    }
    
     /*** Website ***/   
    .lp-website {
    padding: 60px 0;
        
    }
    .lp-website img{
    max-width:390px;
    width:100%;
        
    }
    .pn-button button {
    border: 0px;
    background-color: #fd7c47;
    color: #fff;
    font-size: 15px;
    margin-top: 15px;
    }
    
    
    @media only screen and (min-width: 768px) and (max-width: 991px){
        .footer-lastBox {
            max-width: 200px;
        }
    }
    
    
    @media only screen and (max-width: 767px) {    

        .footer-row{
            display:block;
        }
    }
    
    
    @media only screen and (max-width: 600px) {
        .sub-heading {
            font-size: 20px;
        }
        .slider-heading {
           font-size: 36px;
        }
        .main-heading {
           font-size: 28px; 
        }
        .big-heading {
           font-size: 32px;
        }
        .service-box h2 {
        font-size: 20px;
        }
        .lp-quote .lp-number{
    font-size: 28px;
    }
    
    }
    
    
    @media only screen and (max-width: 390px) {
        .call-heading {
            font-size: 13px;
        }
        .lp-number {
            font-size:15px;
        }
        .btn-topbar {
            font-size: 12px;
        }
        .or-text {
            margin-top: 12px;
            font-size: 17px;
        }
    }
    
    @media only screen and (max-width: 768px) and (min-width: 767px) {
    /*.col-md-6 , .col-md-8 , .col-md-4{*/
    /*    max-width:100%!important;*/
    /*}*/
            .top-right{
            margin:auto;
            max-width:100%!important;
        }
         
     }
     
     
</style>
<body>


<link rel="stylesheet" type="text/css" href="{{ asset('css/workflow.css') }}" >

  <!--==========================
    Intro Section
============================-->
  <main id="main" wow bounceInUp data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
    <!--==========================
      Services-section-Start
============================-->
    <section id="landing-page">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('img/mavenup-creative-logo.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <div class="row top-right">
                            <div class="topbar-first">
                                <p class="call-heading">Call Us Today For FREE</p>
                                <a class="lp-number" href="tel:+92312 1481532"><i class="fa fa-phone"></i> +92312 1481532</a>
                            </div>
                            <div class="topbar-center">
                                <p class="or-text">-OR-</p>
                            </div>
                            <div class="topbar-last">
                                <button onclick="window.location.href='/landing_page#request-form'" class="btn-topbar">GET A QUOTE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <div class="lp-slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="sub-heading text-orange">A True Business Partner</h3>
                        <h2 class="slider-heading">Affordable Website Design & Development</h2>
                        <p align="justify">Web designing is an art! The website design shows insights of your business. A well known saying is “First impression is the lasting one”. In web technologies, your website is the first entity that interacts with the visitor, so your website should speak itself!</p>
    
                        <p align="justify">Websites we produce are clean, fresh and uniquely designed. We endeavor to ensure that our websites meet the accessibility standards demanded by the World Wide Web Consortium. Our websites are tested in the most commonly used browsers at different screen resolutions.</p>
                        
                    </div>
                    <div class="col-md-6">
                          @if ($message = Session::get('success'))
                           <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                   <strong>{{ $message }}</strong>
                           </div>
                           @endif
                        <div class="lp-form"  id="request-form">
                            <form action="{{url('/landingpage/send')}}" method = "POST">
                                {{ csrf_field() }}
                                <h3 class="sub-heading ">Send us a Query Now</h3>
                                <p>We will get back to you very shortly.</p>
                                <label>Your Name *</label>
                                <input type="text" name="name"  required>
                                <label>Your Email *</label>
                                <input type="email" name="email"  required>
                                <label>Phone Number</label>
                                <input type="number" name="number" min="11" max="13"  required>
                                <input type="submit" value="Get a Free Quote Today" class="submit-btn">
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="lp-client">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="main-heading">Why <b>MavenUp Creatives?</b></h2>
                        <p>We have worked with more than <b>2,000 clients</b> all over the world in the past five years with a very professional team.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="row text-center client-icon">
                            <div class="col-md-4">
                                <img src="{{ asset('img/khan-rugs-or.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('img/usman-habib.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-4">
                                <img class="aoc" src="{{ asset('img/ahmed&carpets.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('img/lahore-property-point.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('img/Army-heritage-foundation.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('img/orange-family.png')}}" alt="" class="img-fluid">
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="lp-website">
            <div class="container">
                <h3 class="sub-heading text-orange">Best Business Website</h3>
                <h2 class="big-heading">Why <b>Your Business</b> Needs a Website?</h2>
                <br>
                <div class="row">
                    <div class="col-md-6 text-center">
                        <img style="width:100%;" src="{{ asset('img/mavenup websites.gif')}}">
                    </div>
                    <div class="col-md-6">
                        
                        <p align="justify">No matter what your business or profession is, a website can generate business, promote goodwill and deliver strong marketing messages among customers and prospects - whether your business is small, large or medium scale, well-established or brand-new.</p>
                        <p align="justify">People spend a lot of time on web everyday, so even if you are a completely local small business, service provider, contractor or consultant, people might be looking for your website on search engines - and if you don't have a website... well, you get the picture.</p>
                        <p align="justify">Your business Web page delivers that picture to your customers and prospects, and does it 24/7/365</p>
    
                    </div>
                </div>
            </div>
        </div>
        

        
        <div class="lp-manage">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                         <h3 class="sub-heading text-orange">About Us</h3>
                        <h2 class="big-heading"><b>Core expertise</b> at MavenUp Creatives</h2>
                        <p align="justify">MavenUp Creatives is a premium design agency that focuses on quality, innovation, & speed. We utilize technology to bring results to grow our clients' businesses. We pride ourselves in great work ethics, integrity, and end-results. Throughout the years, MavenUp has been able to create stunning and award winning designs in multiple verticals while allowing our clients to obtain an overall better web presence.</p>
                    </div>
                    <div class="col-md-6 text-center">
                        <img style="width:100%;" src="{{ asset('img/mp-wallpaper.jpg')}}" alt="" >
                    </div>
                </div>
            </div>
        </div>
        
    
        <div class="lp-quote">
            <div class="container">
                <img src="{{ asset('img/gold-medal.png')}}" alt="">
                <h2 class="big-heading text-orange">Get a <b>Free Quote</b> Today</h2>
                <p>We make customizable websites so our clients could use it in an easy</p>
                <p> and fast way without even coding a single line!</p>
                <button onclick="window.location.href='/landing_page#request-form'" class="quote-btn">Submit the Form to Get a Quote</button>
            </div>
        </div>
    
    
    
        <div class="lp-earn">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <img style"width:100%;" src="{{ asset('img/serv-icon/catering-all.png')}}" alt="">
                    </div>
                    <div class="col-md-6">
                        <h3 class="sub-heading text-orange">Mission</h3>
                         <h2 class="big-heading"><b>Business Boost</b> is Our Goal</h2> 
                        <p align="justify">We have designed our entire process and products around providing everything a small businesses needs when they’re starting out. We always ensure that working with us is always a quick, easy and hassle-free experience. We give our clients a full control of their website without any ridiculous price tag, and our friendly team offers their expertise even after your website is live and functional.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="lp-flow">
            <div class="container">
                <div class="text-center">
                    <h3 class="sub-heading text-orange">Workflow</h3>
                     <h2 class="big-heading">Our Working Process</h2>
                     <br>
                </div>
            </div>
            <div id="wrap">
                <div class="buy-process-wrap">
                          <div class="buy-process-items">
                            <div class="buy-process-item">
                              <div class="text-wrap">
                                <h4><strong>Planning</strong></h4>
                                <p>
                                  Understanding what you want out of your site and how do you plant
                                  to implement it.
                                </p>
                              </div>
                              <span>1</span>
                              <div class="icon-wrapper">
                                <i class="fa fa-calendar"></i>
                              </div>
                            </div>
                            <div class="buy-process-item">
                              <div class="text-wrap">
                                <h4><strong>Development</strong></h4>
                                <p>
                                  We develop content management systems for clients who need more
                                  than just the basics
                                </p>
                              </div>
                              <span>2</span>
                              <div class="icon-wrapper">
                                <i class="fa fa-keyboard-o"></i>
                              </div>
                            </div>
                            <div class="buy-process-item featured">
                              <div class="text-wrap">
                                <h4><strong>Review &amp; Test</strong></h4>
                                <p>
                                  Once the site is ready, it should be checked and tested to ensure
                                  an error free working
                                </p>
                              </div>
                              <span>3</span>
                              <div class="icon-wrapper">
                                <i class="fa fa-flask"></i>
                              </div>
                            </div>
                            <div class="buy-process-item">
                              <div class="text-wrap">
                                <h4><strong>Launch </strong></h4>
                                <p>
                                  After successful testing the product is delivered / deployed to
                                  the customer for their use
                                </p>
                              </div>
                              <span>4</span>
                              <div class="icon-wrapper">
                                <i class="fa fa-paper-plane"></i>
                              </div>
                            </div>
                            <div class="buy-process-item">
                              <div class="text-wrap">
                                <h4><strong>Maintenance</strong></h4>
                                <p>
                                  It is an important step which makes sure that your site works with
                                  efficiency all the time
                                </p>
                              </div>
                              <span>5</span>
                              <div class="icon-wrapper">
                                <i class="fa fa-shield"></i>
                              </div>
                            </div>
                        </div>
                    </div>
            </div>    
        </div>
        
        
        <div class="lp-price">
            <div class="container">
                <div class="text-center">
                    <h3 class="sub-heading text-orange">Awesome Prices</h3>
                    <h2 class="big-heading">Pricing Plan with<b>Best Services</b></h2>
                    <br>
                </div>
                
                    <div class="price-plan text-center row">
                        <div class="col-md-3">
                            <div class="price-box">
                                <div class="pb-heading">
                                    <h2>BASIC PLAN</h2>
                                    <h2 class="text-orange">PKR 25,000</h2>
                                </div>
                                <div class="pb-detail">
                                    <p>No Design Revision</p>
                                    <p>Less than or equal to 5 Pages</p>
                                    <p><span class="text-orange">&#10003; </span>Search Engine Submission</p>
                                    <p><span class="text-orange">&#10003; </span>Site Map & R.S.S Feed Creation</p>
                                </div>
                                <div class="pn-button">
                                    <button onclick="window.location.href='/landing_page#request-form'" >ORDER NOW</button><br><br><h5><i>*Content is not included</i></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="price-box">
                                <div class="pb-heading">
                                    <h2>STANDARD PLAN</h2>
                                    <h2 class="text-orange">PKR. 50,000</h2>
                                </div>
                                <div class="pb-detail">
                                    <p>Multiple Design Revisions</p>
                                    <p>Less than or equal to 10 Pages</p>
                                    <p><span class="text-orange">&#10003; </span>Basic Plan</p>
                                    <p><span class="text-orange">&#10003; </span>Free Three Months Support</p>
                                </div>
                                <div class="pn-button">
                                    <button onclick="window.location.href='/landing_page#request-form'" >ORDER NOW</button><br><br><h5><i>*Content is not included</i></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="price-box blue">
                                <div class="pb-heading">
                                    <h2>POWER PLAN</h2>
                                    <h2 class="text-orange">PKR. 75,000</h2>
                                </div>
                                <div class="pb-detail">
                                    <p>Unlimited Design Revisions</p>
                                    <p>Less than or equal to 20 Pages</p>
                                    <p><span class="text-orange">&#10003; </span>Standard Plan</p>
                                    <p><span class="text-orange">&#10003; </span>Free Three Months Support</p>
                                </div>
                                <div class="pn-button">
                                    <button onclick="window.location.href='/landing_page#request-form'">ORDER NOW</button><br><br><h5><i style="color: white">*Content is not included</i></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="price-box">
                                <div class="pb-heading">
                                    <h2>ULTIMATE PLAN</h2>
                                    <h2 class="text-orange">PKR. 100,000</h2>
                                </div>
                                <div class="pb-detail">
                                    <p>Unlimited Design Revisions</p>
                                    <p>Less than or equal to 30 Pages</p>
                                    <p><span class="text-orange">&#10003; </span>Power Plan</p>
                                    <p><span class="text-orange">&#10003; </span>Free One-year Hosting</p>
                                </div>
                                <div class="pn-button">
                                    <button onclick="window.location.href='/landing_page#request-form'">ORDER NOW</button><br><br><h5><i>*Content is not included</i></h5>
                                </div>
                            </div>
                        </div>
                   
                </div>
                
            </div>
        </div>
        
        
        
        <div class="lp-quote">
            <div class="container">
                <img src="{{ asset('img/gold-medal.png')}}" alt="">
                <h2 class="big-heading text-orange"><b>Contact Us</b> Now</h2>
                <a class="lp-number" href="tel:+92312 1481532"><i class="fa fa-phone"></i> +92312 1481532</a>
            </div>
        </div>
        
        
        <div class="lp-services">
            <div class="container">
                <div class="head-services">
                    <h3 class="sub-heading text-orange">WE MAKE THE BEST WEBSITES</h3>
                    <h1 class="big-heading"><b>#1</b> <b>in Web Development</b> Industry!</h1>
                    <p>Start your business today with a great and strong website</p>
                    <p>made to improve the work flow.</p>
                </div>
                <div class="bottom-services">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="service-box">
                                <img src="{{ asset('img/serv-icon/Unique-design.png')}}" alt="">
                                <h2>Unique Design</h2>
                                <p align="justify">A unique website design customized according to the specific requirements of our customers.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-box">
                                <img src="{{ asset('img/data (1).png')}}" alt="" >
                                <h2>Clean Code</h2>
                                <p align="justify">Our professional developers will develop your website with an easy to customize codeline.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-box">
                                <img src="{{ asset('img/serv-icon/fully-responsive.png')}}" alt="">
                                <h2>Fully Responsive</h2>
                                <p align="justify">The website speed will be carefully optimized, to give you a lightening experience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                        <div class="service-box">
                            <img src="{{ asset('img/car.png')}}" alt="" >
                            <h2>Fast Speed</h2>
                            <p>The website speed will be carefully optimized, to give you a lightening experience.</p>
                        </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-box">
                                <img src="{{ asset('img/serv-icon/user-friendly.png')}}" alt="" >
                                <h2>User Friendly</h2>
                                <p align="justify">Our code is clean, tidied up and professionally customized according to requirements.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-box">
                                <img src="{{ asset('img/serv-icon/support.png')}}" alt="" >
                                <h2>Great 24/7 Support</h2>
                                <p align="justify">We are available 24/7 for any support to help you gain digital success.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        
        
        
        <div class="lp-packages">
            <div class="container">
                <section id=portfolio class="">
                    <div class="container-fluid main-heading-bottom">
                        <h3 class="sub-heading text-orange">Latest Work</h3>
                        <h2 class="big-heading"><b>PORTFOLIO</b></h2>
                    </div>
                    <div class="container services-section-Up">
                        <div class=row>
                            <div class="col-lg-3 col-md-6 wow fadeInUp">
                                <div class=member>
                                    <img src="{{asset('img/Aiolocksmith.jpg')}}" class=img-fluid alt="aio lock smith">
                                    <div class=member-info>
                                        <div class=member-info-content>
                                            <a href="https://aiolocksmith.com/" target="_blank" rel="nofollow"><h4>Aio Lock Smith</h4></a>
                                            <span>Website Design & Development</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=0.1s>
                                <div class=member>
                                    <img src="{{asset('img/proskill-basketball.jpg')}}" class=img-fluid alt=proskill-Basketball>
                                    <div class=member-info>
                                        <div class=member-info-content>
                                            <h4>Pro Skills Basketball</h4>
                                            <span>Website Design & Development</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=0.2s>
                                <div class=member>
                                    <img src="{{asset('img/sreducation.jpg')}}" class=img-fluid alt=sreducation>
                                    <div class=member-info>
                                        <div class=member-info-content>
                                            <a href="https://sreducationservices.com" target="_blank" rel="nofollow"><h4>SR Education</h4></a>
                                            <span>Website Design & Development</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=0.3s>
                                <div class=member>
                                    <img src="{{asset('img/TOTO-VPS.jpg')}}" class=img-fluid alt=toto-vps>
                                    <div class=member-info>
                                        <div class=member-info-content>
                                            <a href="https://www.totovps.com" target="_blank" rel="nofollow"><h4>TOTO VPS</h4></a>
                                            <span>Website Design & Development</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="quote-btn" onclick="window.location.href='https://www.behance.net/MavenUpCreatives'">View More</button>
                    </div>
                    
                </section>
            </div>
        </div>
        
        
        <div class="lp-testimonial">
            <div class="container">
                <h3 class="sub-heading text-orange">GREAT WORDS FROM CLIENTS</h3>
                <h2 class="big-heading">Read <b>Testimonials</b> Now!</h2>
                <p>We make customizable websites so our clients could use it in an easy</p>
                <p> and fast way without even coding a single line!</p>
                <div class="row testimonial">
                    <div class="col-md-6">
                        <div class="testi-box">
                            <img src="{{ asset('img/serv-icon/naomi.png')}}" alt="" >
                            <p align="justify">It was really great working with MavenUp. Very quick turn around and they understand exactly what I needed and wanted. Thank you! I will definitely be back in the future. Recommended Web professionals.</p>
                            <h4><b>Naomi Stockman</b></h4>
                            <p class="star-color"><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="testi-box">
                            <img src="{{ asset('img/serv-icon/joseph.png')}}" alt="" >
                            <p align="justify">MavenUp was simple to work with, They understood all of my needs and delivered as promised. I'm fairly sure I'll need more help with my Wwbsite as things progress and I will definitely choose MavenUp again.</p>
                            <h4><b>Joseph Nalley</b></h4>
                            <p class="star-color"><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span></p>
                        </div>
                    </div>
                </div>
                <p class="sub-heading "><b>+2,000</b> Clients Trust Our Services Since 2014</p>
            </div>
        </div>
        
        
        <div class="lp-quote">
            <div class="container">
                <img src="{{ asset('img/gold-medal.png')}}" alt="">
                <h2 class="big-heading text-orange">Get a <b>Free Quote</b> Today</h2>
                <button onclick="window.location.href='/landing_page#request-form'" class="quote-btn">Submit the Form to Get a Quote</button>
            </div>
        </div>
        
        
        <div class="lp-footer">
            <div class="container">
                <div class="footer-row">
                    <div class="footer-firstBox">
                        <img src="{{ asset('img/mavenup-creative-logo-white.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="footer-centerBox">
                        <p class="call-heading">Call Us Today For FREE</p>
                        <a class="lp-number" href="tel:+92312 1481532"><i class="fa fa-phone"></i> +92312 1481532</a>
                    </div>
                    <div class="footer-lastBox">
                        <p style="color: #fd7c47;"> MavenUp Creatives®| All Rights Reserved © 2019.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
     Stop-solution-section
    ============================-->



</main>
</body>