
<!DOCTYPE html>
<html>
<head>
    @include('Layout.head')
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script>
    $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }]
    });
});
</script>


</head>
<style>
/*    .topbar-slider {*/
/*    background: #000;*/
/*    background-repeat: no-repeat;*/
/*    background-position: center;*/
/*    background-size: cover;*/
/*    background-image:url(https://www.mavenup.com/public/img/social-media/seo-experts.png);*/

/*}*/

/*.sub-text{*/
/*    font-size:18px;*/
/*}*/
/*.topbar-slider .medium-heading{*/
/*    color:#fff;*/
/*}*/
/*.topbar-slider p{*/
/*    color:#fff;*/
/*    font-size:18px;*/
/*}*/
/*.black-overlay {*/
/*    background-color: #00000080;*/
/*    padding: 20px 0 60px;*/
/*}*/
/*.topbar-slider .sub-heading {*/
/*    color: #fff;*/
/*}*/
/*.icon-box {*/
/*    display: flex;*/
/*    align-items: center;*/
/*}*/
/*.left-icon p {*/
/*    font-size: 25px;*/
/*    font-weight: 700;*/
/*    color: #fd7c47;*/
/*    padding-right: 10px;*/
/*}*/
/*.slp-features {*/
/*    padding: 40px 0;*/
/*}*/
/*.slp-features img{*/
/*    width:100%;*/
/*    max-width: 350px;*/
/*}*/
/*.slp-services {*/
/*    padding: 40px 0;*/
/*    text-align: center;*/
/*    background-color: #f2f3f4;*/
/*}*/
/*.slp-services .service-box {*/
/*    border: 0px;*/
/*    margin-bottom: 0;*/
/*}*/
/*.slp-client {*/
/*    text-align: center;*/
/*    padding: 40px 0;*/
/*}*/
/*.slp-testimonial {*/
/*    padding: 50px 0;*/
/*    background-color: #f2f3f4;*/
/*    text-align: center;*/
/*}*/
/*.comment-sign {*/
/*    font-size: 100px;*/
/*    line-height: 0;*/
/*}*/
/*.comment-box .sub-heading {*/
/*    max-width: 600px;*/
/*    margin: 0 auto;*/
/*    margin-bottom: 20px;*/
/*}*/
/*.comment-box {*/
/*    padding-top: 30px;*/
/*}*/
/*.slp-deal {*/
/*    padding: 40px 0;*/
/*    text-align: center;*/
/*    background-color: #f2f3f4;*/
/*}*/

/*.slp-footer {*/
/*    background: #282828;*/
/*    padding: 10px 0;*/
/*}*/
/*.slp-footer p {*/
/*    color: #fff;*/
/*    text-align: center;*/
/*    margin-bottom:0;*/
/*}*/
/*.medium-heading {*/
/*    font-size: 27px;*/
/*    font-weight: 700;*/
/*}*/
/*.price-table {*/
/*    width: 100%;*/
/*    font-size: 15px;*/
/*}*/
/*.price-table th, .price-table td {*/
/*    border: 1px solid #dddddd;*/
/*    text-align: left;*/
/*    padding: 8px;*/
/*}*/
/*.slp-packages {*/
/*    padding: 40px 0;*/
/*}*/
/*.slp-supporting button ,.slp-deal button, .slp-packages button, .slp-services button {*/
/*    background-color: #fd7c47;*/
/*    color: #fff;*/
/*    border: 0px;*/
/*    font-size: 17px;*/
/*    padding: 10px 10px;*/
/*}*/
/*.slp-supporting {*/
/*    padding: 40px 0;*/
/*        background-color: #f2f3f4;*/
/*}*/
/*.slp-supporting p {*/
/*    font-size: 17px;*/
/*}*/
/*.slp-supporting img {*/
/*    max-width: 350px;*/
/*    width:100%;*/
/*}*/
/*.sample {*/
/*    padding: 100px 0;*/
/*}*/
/*.accordion .btn-link{*/
/*    width: 100%;*/
/*    background-color: #fd7c47;*/
/*    color: #fff;*/
/*    font-size: 30px;*/
/*}*/
/*.seo-img{*/
/*    text-align:center;*/
/*}*/
/*.btn-link:hover {*/
/*    text-decoration: none!important;*/
/*}*/
/*	@media only screen and (max-width: 767px)  {*/
/*.site-logo{*/
/*    text-align:center;*/
/*}*/
/*}*/

/* Slider */

/*.slick-slide {*/
/*    margin: 0px 20px;*/
/*}*/

/*.slick-slide img {*/
/*    width: 100%;*/
/*}*/

/*.slick-slider*/
/*{*/
/*    position: relative;*/
/*    display: block;*/
/*    box-sizing: border-box;*/
/*    -webkit-user-select: none;*/
/*    -moz-user-select: none;*/
/*    -ms-user-select: none;*/
/*            user-select: none;*/
/*    -webkit-touch-callout: none;*/
/*    -khtml-user-select: none;*/
/*    -ms-touch-action: pan-y;*/
/*        touch-action: pan-y;*/
/*    -webkit-tap-highlight-color: transparent;*/
/*}*/

/*.slick-list*/
/*{*/
/*    position: relative;*/
/*    display: block;*/
/*    overflow: hidden;*/
/*    margin: 0;*/
/*    padding: 0;*/
/*}*/
/*.slick-list:focus*/
/*{*/
/*    outline: none;*/
/*}*/
/*.slick-list.dragging*/
/*{*/
/*    cursor: pointer;*/
/*    cursor: hand;*/
/*}*/

/*.slick-slider .slick-track,*/
/*.slick-slider .slick-list*/
/*{*/
/*    -webkit-transform: translate3d(0, 0, 0);*/
/*       -moz-transform: translate3d(0, 0, 0);*/
/*        -ms-transform: translate3d(0, 0, 0);*/
/*         -o-transform: translate3d(0, 0, 0);*/
/*            transform: translate3d(0, 0, 0);*/
/*}*/

/*.slick-track*/
/*{*/
/*    position: relative;*/
/*    top: 0;*/
/*    left: 0;*/
/*    display: block;*/
/*}*/
/*.slick-track:before,*/
/*.slick-track:after*/
/*{*/
/*    display: table;*/
/*    content: '';*/
/*}*/
/*.slick-track:after*/
/*{*/
/*    clear: both;*/
/*}*/
/*.slick-loading .slick-track*/
/*{*/
/*    visibility: hidden;*/
/*}*/

/*.slick-slide*/
/*{*/
/*    display: none;*/
/*    float: left;*/
/*    height: 100%;*/
/*    min-height: 1px;*/
/*}*/
/*[dir='rtl'] .slick-slide*/
/*{*/
/*    float: right;*/
/*}*/
/*.slick-slide img*/
/*{*/
/*    display: block;*/
/*}*/
/*.slick-slide.slick-loading img*/
/*{*/
/*    display: none;*/
/*}*/
/*.slick-slide.dragging img*/
/*{*/
/*    pointer-events: none;*/
/*}*/
/*.slick-initialized .slick-slide*/
/*{*/
/*    display: block;*/
/*}*/
/*.slick-loading .slick-slide*/
/*{*/
/*    visibility: hidden;*/
/*}*/
/*.slick-vertical .slick-slide*/
/*{*/
/*    display: block;*/
/*    height: auto;*/
/*    border: 1px solid transparent;*/
/*}*/
/*.slick-arrow.slick-hidden {*/
/*    display: none;*/
/*}*/
/*.whatsapp-icon{*/
/*    width:100%;*/
/*    max-width:35px;*/
/*}*/



/*	#table {*/
/*		display: table;*/
/*	 	font-size:17px;*/
/*	 	width: 100%; */
/*	 	background: #fff;*/
/*	 	margin: 0;*/
/*	 	box-sizing: border-box;*/

/*	 }*/

/*	 .caption {*/
/*	 	display: block;*/
/*	 	width: 100%;*/
/*	 	background: #64e0ef;*/
/*	 	height: 55px;*/
/*	 	padding-left: 10px;*/
/*	 	color: #fff;*/
/*	 	font-size: 20px;*/
/*	 	line-height: 55px;*/
/*	 	text-shadow: 1px 1px 1px rgba(0,0,0,.3);*/
/*	 	box-sizing: border-box;*/
/*	 }*/


/*	 .header-row {*/
/*	 	background: #25344c;*/
/*	 	color: #fff;*/
/*	 	font-size:17px;*/

/*	 }*/

/*	#table .row {*/
/*		display: table-row;*/
/*	}*/

/*	.cell {*/
/*		display: table-cell;*/
		
/*		padding: 6px; */
/*		border-bottom: 1px solid #e5e5e5;*/
/*		text-align: center;*/
/*	}*/

/*	.primary {*/
/*		text-align: left;*/
/*	}*/


/*	input[type="radio"],*/
/*	input[type="checkbox"]{*/
/*		display: none;*/
/*	}*/


/*	@media only screen and (max-width: 760px)  {*/

/*		body {*/
/*			padding: 0;*/
/*		}*/

/*		#table {*/
/*			display: block;*/
			/*margin: 44px 0 0 0;*/
/*			font-size:15px;*/
/*		}*/

/*		.caption {*/
/*			position: fixed;*/
/*			top: 0;*/
/*			text-align: center;*/
/*			height: 44px;*/
/*			line-height: 44px;*/
/*			z-index: 5;*/
/*			border-bottom: 2px solid #999;*/
/*		}*/

/*		#table .row { */
/*			position: relative;*/
/*			display: block;*/
/*			border-bottom: 1px solid #ccc; */

/*		}*/

/*		.header-row {*/
/*			display: none;*/
/*		}*/
		
/*		.cell { */
/*			display: block;*/

/*			border: none;*/
/*			position: relative;*/
/*			height: 45px;*/
/*			line-height: 45px;*/
/*			text-align: left;*/
/*		}*/

/*		.primary:after {*/
/*			content: "";*/
/*			display: block;*/
/*			position: absolute;*/
/*			right:20px;*/
/*			top:18px;*/
/*			z-index: 2;*/
/*			width: 0; */
/*			height: 0; */
/*			border-top: 10px solid transparent;*/
/*			border-bottom: 10px solid transparent; */
/*			border-right:10px solid #25344c;*/
			

/*		}*/

/*		.cell:nth-of-type(n+2) { */
/*			display: none; */
/*		}*/
/*        .lp-number:hover{*/
/*            color: #fd7c47;*/
/*        }*/


/*		input[type="radio"],*/
/*		input[type="checkbox"] {*/
/*			display: block;*/
/*			position: absolute;*/
/*			z-index: 1;*/
/*			width: 99%;*/
/*			height: 100%;*/
/*			opacity: 0;*/
/*		}*/
    
/*    input[type="radio"]:checked,*/
/*		input[type="checkbox"]:checked {*/
/*		  z-index: -1;*/
/*		}*/

/*		input[type="radio"]:checked ~ .cell,*/
/*		input[type="checkbox"]:checked ~ .cell {*/
/*			display: block;*/

/*			border-bottom: 1px solid #eee; */
/*		}*/

/*		input[type="radio"]:checked ~ .cell:nth-of-type(n+2),*/
/*		input[type="checkbox"]:checked ~ .cell:nth-of-type(n+2) {*/
			
/*			background: #e0e0e0;*/
/*		}*/

/*		input[type="radio"]:checked ~ .cell:nth-of-type(n+2):before,*/
/*		input[type="checkbox"]:checked ~ .cell:nth-of-type(n+2):before {*/
/*			content: attr(data-label);*/

/*			display: inline-block;*/
/*			width: 120px;*/
/*			background: #fd7c47;*/
/*			border-radius: 10px;*/
/*			height: 25px;*/
/*			margin-right: 10px;*/
/*			font-size: 17px;*/
/*			line-height: 25px;*/
/*			text-align: center;*/
/*			color: white;*/

/*		}*/

/*		input[type="radio"]:checked ~ .primary,*/
/*		input[type="checkbox"]:checked ~ .primary  {*/
/*			border-bottom: 2px solid #999;*/
/*		}*/

/*		input[type="radio"]:checked ~ .primary:after,*/
/*		input[type="checkbox"]:checked ~ .primary:after {*/
/*	 		position: absolute;*/
/*			right:18px;*/
/*			top:22px;*/
/*			border-right: 10px solid transparent;*/
/*			border-left: 10px solid transparent; */
/*			border-top:10px solid #ccc;*/
/*			z-index: 2;*/
/*		}*/
/*	}*/
/*@media only screen and (max-width: 420px)  {*/
/*    #table {*/
/*			font-size:12px;*/
/*		}*/
/*}*/



</style>

<body>


<link rel="stylesheet" type="text/css" href="{{ asset('css/landing-page.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('css/seo-landingpage.css') }}" >
  <!--==========================
    Intro Section
============================-->
  <main id="main" wow bounceInUp data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
    <!--==========================
      Services-section-Start
============================-->
    <section id="sec-landing-page">
        
        
        <div class="topbar-slider">
            <div class="black-overlay">
                <div class="container">
                    <div class="col-md-4 site-logo">
                    <img src="{{ asset('img/1.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <div class="row top-right">
                        <div class="topbar-first">
                            <p class="call-heading">Call Us Today For FREE</p>
                            <a class="lp-number" href="tel:+92312 1481532"><i class="fa fa-phone"></i> +92-312-148-1532</a>
                        </div>
                        <div class="topbar-center">
                            <p class="or-text">-or-</p>
                        </div>
                        <div class="topbar-last">
                            <a  href="https://wa.me/923121481532"><img class="whatsapp-icon" src="{{ asset('img/whatsapp.png')}}" ></a>
                        </div>
                    </div>
                </div>
                    <div class="text-center">
                        <h1 class="slider-heading">Ready To See Your Business On Top?</h1>
                        <h2 class="medium-heading">Let MavenUp Help Grow Your Business With Our Proven SEO Ranking Service.</h2>
                        <br><br>
                    </div>
                    <div class="col-md-6">
                        <p>It's an ugly truth that if your website is not ranked on page 1 of search engines, it won't do any good for your business. And if you don't have enough leads and the phone isn’t ringing, it’s the right time to take SEO seriously.</p>
                        <p>Fill in the form on the right and our SEO specialist will reach out and help you create a plan of action to get your website to the top of the search engines. Also, make sure to ask about our No Risk 100% money back guarantee.</p>
                        <p>This free strategy call will give you actionable items you can improve to start getting more traffic and leads from your website right away. And the best part – it’s 100% FREE Today</p>
                    </div>
                    @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
                    <div class="col-md-6">
                        <div class="lp-form" id="request-form">
                            <form action="{{url('/landingpage/send')}}" method = "POST">
                                 {{ csrf_field() }}
                                <h3 class="sub-heading ">Book Your FREE Strategy Call Right Now!</h3>
                                <label>Your Name *</label>
                                <input type="text" name="name"  required>
                                <label>Your Email *</label>
                                <input type="email" name="email"  required>
                                <label>Phone Number</label>
                                <input type="number" name="number" min="11" max="13" required>
                                <input type="submit" value="Book Now" class="submit-btn">
                            </form>  
                        </div>
                     </div>
                </div>
            </div>
        </div>
        
        
        <div class="slp-features">
            <div class="container">
                <div class="col-md-6 text-center ">
                     <img src="{{ asset('img/seo-man.jpg')}}" alt="" >
                     <br><br>
                </div>
                    <div class="col-md-6">
                        <h2 class="medium-heading">What is Your Business Struggling With?</h2>
                        <div class="icon-box">
                            <div class="left-icon">
                                <p>&#10003;</p>
                            </div>
                            <div class="iconbox-detail">
                                <p class="sub-text">Are you in need of more customers?</p>
                            </div>
                        </div>
                        <div class="icon-box">
                            <div class="left-icon">
                                <p>&#10003;</p>
                            </div>
                            <div class="iconbox-detail">
                                <hp class="sub-text">Does your business need more leads?</p>
                            </div>
                        </div>
                        <div class="icon-box">
                            <div class="left-icon">
                                <p>&#10003;</p>
                            </div>
                            <div class="iconbox-detail">
                                <p class="sub-text">Do you need to create an SEO marketing strategy?</p>
                            </div>
                        </div>
                        <div class="icon-box">
                            <div class="left-icon">
                                <p>&#10003;</p>
                            </div>
                            <div class="iconbox-detail">
                                <p class="sub-text">Do you want to see more traffic hitting your website everyday?</p>
                            </div>
                        </div>
                        <div class="icon-box">
                            <div class="left-icon">
                                <p>&#10003;</p>
                            </div>
                            <div class="iconbox-detail">
                                <p class="sub-text">Do you want to increase profits without having to spend more money?</p>
                            </div>
                        </div>
                        <div class="icon-box">
                            <div class="left-icon">
                                <p>&#10003;</p>
                            </div>
                            <div class="iconbox-detail">
                                <p class="sub-text">Are you frustrated that your competitors seem to outrank you and get all the “free” traffic and leads?</p>
                            </div>
                        </div>
                    </div>
            </div>        
        </div>
        
        
        <div class="slp-supporting">
            <div class="container">
                <div class="col-md-6">
                    
                     <p>If any of these problems are frustrating you, don’t worry, we can help. At MavenUp Creatives, we work hard for our cusotmers to help them achieve their financial goals. SEO is 90% science and 10% art. We can use our proven white hat strategies to help you increase your rankings and help move you to the top for your business.</p>
                     <p>It doesn’t happen overnight, but with our strategies and team, we can help make it happen as fast as possible. There’s no reason for your business to struggle any more with respect to web traffic, we have got everything covered for you.</p>
                    <br>
                    <button onclick="window.location.href='/seo_landing_page#request-form'">Speak To An SEO Specialist Now</button>
                </div>
                    <div class="col-md-6">
                        <div class="seo-img">
                            <img src="{{ asset('img/seo(12).gif')}}" alt="" >
                        </div>
                        
                    </div>
            </div>        
        </div>
        
        
        <div class="slp-packages">
            <div class="container">
                <h2 class="medium-heading">Awesome Prices</h2>
                <p>We are committed to delivering quality documents and that too with unbelievable and highly competitive pricing. Have a look at our packages.</p>
                <br><br>
                <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          On Page
                        </button>
                      </h2>
                    </div>
                
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                         <div id="table">
                            <div class="header-row row">
                                <span class="cell primary">Features</span>
                                <span class="cell">Basic Package</span>
                                <span class="cell">Standard</span>
                                <span class="cell">Premium</span>
                                <span class="cell">Executive</span>
                                <span class="cell">Professional</span>
                                <span class="cell">Corporate</span>
                            </div>
                            <div class="row">
                                <input type="radio" name="expand">
                                <span class="cell primary" data-label="Features">No. of Keywords Optimized</span>
                                <span class="cell" data-label="Basic Package">5</span>
                                <span class="cell" data-label="Standard">10</span>
                                <span class="cell" data-label="Premium">20</span>
                                <span class="cell" data-label="Executive">30</span>
                                <span class="cell" data-label="Professional">40</span>
                                <span class="cell" data-label="Corporate">50</span>
                            </div>
                            <div class="row">
                                <input type="radio" name="expand">
                                <span class="cell primary" data-label="Features">Comprehensive SEO Audit</span>
                                <span class="cell" data-label="Basic Package">&#10003;</span>
                                <span class="cell" data-label="Standard">&#10003;</span>
                                <span class="cell" data-label="Premium">&#10003;</span>
                                <span class="cell" data-label="Executive">&#10003;</span>
                                <span class="cell" data-label="Professional">&#10003;</span>
                                <span class="cell" data-label="Corporate">&#10003;</span>
                            </div>
                            <div class="row">
                                <input type="radio" name="expand">
                                <span class="cell primary" data-label="Features">Competitor Analysis</span>
                                <span class="cell" data-label="Basic Package">1 Major Competitor</span>
                                <span class="cell" data-label="Standard">2 Major Competitors</span>
                                <span class="cell" data-label="Premium">3 Major Competitors</span>
                                <span class="cell" data-label="Executive">4 Major Competitors</span>
                                <span class="cell" data-label="Professional">5 Major Competitors</span>
                                <span class="cell" data-label="Corporate">6 Major Competitors</span>
                            </div>
                            <div class="row">
                                <input type="radio" name="expand">
                                <span class="cell primary" data-label="Features">Meta Tags (Title & Description)</span>
                                <span class="cell" data-label="Basic Package">&#10003;</span>
                                <span class="cell" data-label="Standard">&#10003;</span>
                                <span class="cell" data-label="Premium">&#10003;</span>
                                <span class="cell" data-label="Executive">&#10003;</span>
                                <span class="cell" data-label="Professional">&#10003;</span>
                                <span class="cell" data-label="Corporate">&#10003;</span>
                            </div>
                            <div class="row">
                                <input type="radio" name="expand">
                                <span class="cell primary" data-label="Features">Optimization of robots.txt & GoogleBot Crawls</span>
                                <span class="cell" data-label="Basic Package">&#10003;</span>
                                <span class="cell" data-label="Standard">&#10003;</span>
                                <span class="cell" data-label="Premium">&#10003;</span>
                                <span class="cell" data-label="Executive">&#10003;</span>
                                <span class="cell" data-label="Professional">&#10003;</span>
                                <span class="cell" data-label="Corporate">&#10003;</span>
                            </div>
                            <div class="row">
                                <input type="radio" name="expand">
                                <span class="cell primary" data-label="Features">Creation & Registration of Sitemap.xml </span>
                                <span class="cell" data-label="Basic Package">&#10003;</span>
                                <span class="cell" data-label="Standard">&#10003;</span>
                                <span class="cell" data-label="Premium">&#10003;</span>
                                <span class="cell" data-label="Executive">&#10003;</span>
                                <span class="cell" data-label="Professional">&#10003;</span>
                                <span class="cell" data-label="Corporate">&#10003;</span>
                            </div>
                            <div class="row">
                                <input type="radio" name="expand">
                                <span class="cell primary" data-label="Features">Google Analytics Setup/Conversion Tracking</span>
                                <span class="cell" data-label="Basic Package">&#10003;</span>
                                <span class="cell" data-label="Standard">&#10003;</span>
                                <span class="cell" data-label="Premium">&#10003;</span>
                                <span class="cell" data-label="Executive">&#10003;</span>
                                <span class="cell" data-label="Professional">&#10003;</span>
                                <span class="cell" data-label="Corporate">&#10003;</span>
                            </div>
                            <div class="row">
                                <input type="radio" name="expand">
                                <span class="cell primary" data-label="Features">Google Analytics Traffic Analysis</span>
                                <span class="cell" data-label="Basic Package">&#10003;</span>
                                <span class="cell" data-label="Standard">&#10003;</span>
                                <span class="cell" data-label="Premium">&#10003;</span>
                                <span class="cell" data-label="Executive">&#10003;</span>
                                <span class="cell" data-label="Professional">&#10003;</span>
                                <span class="cell" data-label="Corporate">&#10003;</span>
                            </div>
                            <div class="row">
                                <input type="radio" name="expand">
                                <span class="cell primary" data-label="Features">Local Search Optimization </span>
                                <span class="cell" data-label="Basic Package">&#10003;</span>
                                <span class="cell" data-label="Standard">&#10003;</span>
                                <span class="cell" data-label="Premium">&#10003;</span>
                                <span class="cell" data-label="Executive">&#10003;</span>
                                <span class="cell" data-label="Professional">&#10003;</span>
                                <span class="cell" data-label="Corporate">&#10003;</span>
                            </div>
                            <div class="row">
                                <input type="radio" name="expand">
                                <span class="cell primary" data-label="Features">Duplicate Content Analysis</span>
                                <span class="cell" data-label="Basic Package">&#10003;</span>
                                <span class="cell" data-label="Standard">&#10003;</span>
                                <span class="cell" data-label="Premium">&#10003;</span>
                                <span class="cell" data-label="Executive">&#10003;</span>
                                <span class="cell" data-label="Professional">&#10003;</span>
                                <span class="cell" data-label="Corporate">&#10003;</span>
                            </div>
                            <div class="row">
                                <input type="radio" name="expand">
                                <span class="cell primary" data-label="Features">Google My Business Optimization</span>
                                <span class="cell" data-label="Basic Package">&#10007;</span>
                                <span class="cell" data-label="Standard">&#10003;</span>
                                <span class="cell" data-label="Premium">&#10003;</span>
                                <span class="cell" data-label="Executive">&#10003;</span>
                                <span class="cell" data-label="Professional">&#10003;</span>
                                <span class="cell" data-label="Corporate">&#10003;</span>
                            </div>
                            <div class="row">
                                <input type="radio" name="expand">
                                <span class="cell primary" data-label="Features">Bing Places for Business Optimization</span>
                                <span class="cell" data-label="Basic Package">&#10007;</span>
                                <span class="cell" data-label="Standard">&#10003;</span>
                                <span class="cell" data-label="Premium">&#10003;</span>
                                <span class="cell" data-label="Executive">&#10003;</span>
                                <span class="cell" data-label="Professional">&#10003;</span>
                                <span class="cell" data-label="Corporate">&#10003;</span>
                            </div>
                            <div class="row">
                                <input type="radio" name="expand">
                                <span class="cell primary" data-label="Features">Mobile Site Optimization (If Applicable)</span>
                                <span class="cell" data-label="Basic Package">&#10007;</span>
                                <span class="cell" data-label="Standard">&#10007;</span>
                                <span class="cell" data-label="Premium">&#10003;</span>
                                <span class="cell" data-label="Executive">&#10003;</span>
                                <span class="cell" data-label="Professional">&#10003;</span>
                                <span class="cell" data-label="Corporate">&#10003;</span>
                            </div>
                            <div class="row">
                                <input type="radio" name="expand">
                                <span class="cell primary" data-label="Features">Bing Web Master Analytics (YAHOO, AOL)</span>
                                <span class="cell" data-label="Basic Package">&#10007;</span>
                                <span class="cell" data-label="Standard">&#10007;</span>
                                <span class="cell" data-label="Premium">&#10003;</span>
                                <span class="cell" data-label="Executive">&#10003;</span>
                                <span class="cell" data-label="Professional">&#10003;</span>
                                <span class="cell" data-label="Corporate">&#10003;</span>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Off Page
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <div id="table">
                            <div class="header-row row">
                                <span class="cell primary">Features</span>
                                <span class="cell">Basic Package</span>
                                <span class="cell">Standard</span>
                                <span class="cell">Premium</span>
                                <span class="cell">Executive</span>
                                <span class="cell">Professional</span>
                                <span class="cell">Corporate</span>
                            </div>
                            
                            <div class="row">
                                <input type="radio" name="expand">
                                <span class="cell primary" data-label="Features">Web Page Freshness Updates</span>
                                <span class="cell" data-label="Basic Package">&#10003;</span>
                                <span class="cell" data-label="Standard">&#10003;</span>
                                <span class="cell" data-label="Premium">&#10003;</span>
                                <span class="cell" data-label="Executive">&#10003;</span>
                                <span class="cell" data-label="Professional">&#10003;</span>
                                <span class="cell" data-label="Corporate">&#10003;</span>
                            </div>
                            
                            <div class="row">
                                <input type="radio" name="expand">
                                <span class="cell primary" data-label="Features">Universal SEO (Video, Maps, Images, News) </span>
                                <span class="cell" data-label="Basic Package">&#10007;</span>
                                <span class="cell" data-label="Standard">&#10007;</span>
                                <span class="cell" data-label="Premium">&#10003;</span>
                                <span class="cell" data-label="Executive">&#10003;</span>
                                <span class="cell" data-label="Professional">&#10003;</span>
                                <span class="cell" data-label="Corporate">&#10003;</span>
                            </div>
                            <div class="row">
                                <input type="radio" name="expand">
                                <span class="cell primary" data-label="Features">Initial Link Analysis and Disavow</span>
                                <span class="cell" data-label="Basic Package">&#10003;</span>
                                <span class="cell" data-label="Standard">&#10003;</span>
                                <span class="cell" data-label="Premium">&#10003;</span>
                                <span class="cell" data-label="Executive">&#10003;</span>
                                <span class="cell" data-label="Professional">&#10003;</span>
                                <span class="cell" data-label="Corporate">&#10003;</span>
                            </div>
                            <div class="row">
                                <input type="radio" name="expand">
                                <span class="cell primary" data-label="Features">Strong Backlinks with Minimum 20 DA</span>
                                <span class="cell" data-label="Basic Package">&#10007;</span>
                                <span class="cell" data-label="Standard">&#10003;</span>
                                <span class="cell" data-label="Premium">&#10003;</span>
                                <span class="cell" data-label="Executive">&#10003;</span>
                                <span class="cell" data-label="Professional">&#10003;</span>
                                <span class="cell" data-label="Corporate">&#10003;</span>
                            </div>
                            <div class="row">
                                <input type="radio" name="expand">
                                <span class="cell primary" data-label="Features">Weekly Engaging Blogs targeting your niche.</span>
                                <span class="cell" data-label="Basic Package">2 blogs</span>
                                <span class="cell" data-label="Standard">Up to 3 blogs</span>
                                <span class="cell" data-label="Premium">Up to 4 blogs</span>
                                <span class="cell" data-label="Executive">Up to 5 blogs</span>
                                <span class="cell" data-label="Professional">Up to 6 blogs</span>
                                <span class="cell" data-label="Corporate">Up to 7 blogs</span>
                            </div>
                            <div class="row">
                                <input type="radio" name="expand">
                                <span class="cell primary" data-label="Features">Guest Blogging</span>
                                <span class="cell" data-label="Basic Package">&#10007;</span>
                                <span class="cell" data-label="Standard">&#10003;</span>
                                <span class="cell" data-label="Premium">&#10003;</span>
                                <span class="cell" data-label="Executive">&#10003;</span>
                                <span class="cell" data-label="Professional">&#10003;</span>
                                <span class="cell" data-label="Corporate">&#10003;</span>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Reporting
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <div id="table">
                                <div class="header-row row">
                                    <span class="cell primary">Features</span>
                                    <span class="cell">Basic Package</span>
                                    <span class="cell">Standard</span>
                                    <span class="cell">Premium</span>
                                    <span class="cell">Executive</span>
                                    <span class="cell">Professional</span>
                                    <span class="cell">Corporate</span>
                                </div>
                                
                                <div class="row">
                                    <input type="radio" name="expand">
                                    <span class="cell primary" data-label="Features">Ongoing Keyword Reporting </span>
                                    <span class="cell" data-label="Basic Package">&#10003;</span>
                                    <span class="cell" data-label="Standard">&#10003;</span>
                                    <span class="cell" data-label="Premium">&#10003;</span>
                                    <span class="cell" data-label="Executive">&#10003;</span>
                                    <span class="cell" data-label="Professional">&#10003;</span>
                                    <span class="cell" data-label="Corporate">&#10003;</span>
                                </div>
                                
                                <div class="row">
                                    <input type="radio" name="expand">
                                    <span class="cell primary" data-label="Features">Google Data Highlights </span>
                                    <span class="cell" data-label="Basic Package">&#10003;</span>
                                    <span class="cell" data-label="Standard">&#10003;</span>
                                    <span class="cell" data-label="Premium">&#10003;</span>
                                    <span class="cell" data-label="Executive">&#10003;</span>
                                    <span class="cell" data-label="Professional">&#10003;</span>
                                    <span class="cell" data-label="Corporate">&#10003;</span>
                                </div>
                                <div class="row">
                                    <input type="radio" name="expand">
                                    <span class="cell primary" data-label="Features">Website Usability Analysis</span>
                                    <span class="cell" data-label="Basic Package">&#10003;</span>
                                    <span class="cell" data-label="Standard">&#10003;</span>
                                    <span class="cell" data-label="Premium">&#10003;</span>
                                    <span class="cell" data-label="Executive">&#10003;</span>
                                    <span class="cell" data-label="Professional">&#10003;</span>
                                    <span class="cell" data-label="Corporate">&#10003;</span>
                                </div>
                                <div class="row">
                                    <input type="radio" name="expand">
                                    <span class="cell primary" data-label="Features">Relationship building with bloggers and others</span>
                                    <span class="cell" data-label="Basic Package">&#10003;</span>
                                    <span class="cell" data-label="Standard">&#10003;</span>
                                    <span class="cell" data-label="Premium">&#10003;</span>
                                    <span class="cell" data-label="Executive">&#10003;</span>
                                    <span class="cell" data-label="Professional">&#10003;</span>
                                    <span class="cell" data-label="Corporate">&#10003;</span>
                                </div>
                                
                                <div class="row">
                                    <input type="radio" name="expand">
                                    <span class="cell primary" data-label="Features">Website Design Analysis </span>
                                    <span class="cell" data-label="Basic Package">&#10003;</span>
                                    <span class="cell" data-label="Standard">&#10003;</span>
                                    <span class="cell" data-label="Premium">&#10003;</span>
                                    <span class="cell" data-label="Executive">&#10003;</span>
                                    <span class="cell" data-label="Professional">&#10003;</span>
                                    <span class="cell" data-label="Corporate">&#10003;</span>
                                </div>
                                <div class="row">
                                    <input type="radio" name="expand">
                                    <span class="cell primary" data-label="Features">Video and Image XML Sitemaps </span>
                                    <span class="cell" data-label="Basic Package">&#10003;</span>
                                    <span class="cell" data-label="Standard">&#10003;</span>
                                    <span class="cell" data-label="Premium">&#10003;</span>
                                    <span class="cell" data-label="Executive">&#10003;</span>
                                    <span class="cell" data-label="Professional">&#10003;</span>
                                    <span class="cell" data-label="Corporate">&#10003;</span>
                                </div>
                                <div class="row">
                                    <input type="radio" name="expand">
                                    <span class="cell primary" data-label="Features">Monthly monitoring competitors' search rankings </span>
                                    <span class="cell" data-label="Basic Package">&#10003;</span>
                                    <span class="cell" data-label="Standard">&#10003;</span>
                                    <span class="cell" data-label="Premium">&#10003;</span>
                                    <span class="cell" data-label="Executive">&#10003;</span>
                                    <span class="cell" data-label="Professional">&#10003;</span>
                                    <span class="cell" data-label="Corporate">&#10003;</span>
                                </div>
                                <div class="row">
                                    <input type="radio" name="expand">
                                    <span class="cell primary" data-label="Features">Monitoring competitors on a monthly basis </span>
                                    <span class="cell" data-label="Basic Package">&#10003;</span>
                                    <span class="cell" data-label="Standard">&#10003;</span>
                                    <span class="cell" data-label="Premium">&#10003;</span>
                                    <span class="cell" data-label="Executive">&#10003;</span>
                                    <span class="cell" data-label="Professional">&#10003;</span>
                                    <span class="cell" data-label="Corporate">&#10003;</span>
                                </div>
                                <div class="row">
                                    <input type="radio" name="expand">
                                    <span class="cell primary" data-label="Features">Monitoring of competitors' content and link </span>
                                    <span class="cell" data-label="Basic Package">&#10003;</span>
                                    <span class="cell" data-label="Standard">&#10003;</span>
                                    <span class="cell" data-label="Premium">&#10003;</span>
                                    <span class="cell" data-label="Executive">&#10003;</span>
                                    <span class="cell" data-label="Professional">&#10003;</span>
                                    <span class="cell" data-label="Corporate">&#10003;</span>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingForth">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          Pricing
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body">
                      <div id="table">
                                <div class="header-row row">
                                    <span class="cell primary">Features</span>
                                    <span class="cell">Basic Package</span>
                                    <span class="cell">Standard</span>
                                    <span class="cell">Premium</span>
                                    <span class="cell">Executive</span>
                                    <span class="cell">Professional</span>
                                    <span class="cell">Corporate</span>
                                </div>
                                
                                <div class="row">
                                    <input type="radio" name="expand">
                                    <span class="cell primary" data-label="Features"><strong>Initial/First Month On-Page Cost </strong></span>
                                    <span class="cell" data-label="Basic Package"><strong>Rs. 25,000</strong></span>
                                    <span class="cell" data-label="Standard"><strong>Rs. 40,000</strong></span>
                                    <span class="cell" data-label="Premium"><strong>Rs. 55,000</strong></span>
                                    <span class="cell" data-label="Executive"><strong>Rs. 70,000</strong></span>
                                    <span class="cell" data-label="Professional"><strong>Rs. 85,000</strong></span>
                                    <span class="cell" data-label="Corporate"><strong>Rs. 100,000</strong></span>
                                </div>
                                
                                <div class="row">
                                    <input type="radio" name="expand">
                                    <span class="cell primary" data-label="Features"><strong>Monthly Expense (From Second Month) </strong></span>
                                    <span class="cell" data-label="Basic Package"><strong>Rs. 25,000</strong></span>
                                    <span class="cell" data-label="Standard"><strong>Rs. 40,000</strong></span>
                                    <span class="cell" data-label="Premium"><strong>Rs. 55,000</strong></span>
                                    <span class="cell" data-label="Executive"><strong>Rs. 70,000</strong></span>
                                    <span class="cell" data-label="Professional"><strong>Rs. 85,000</strong></span>
                                    <span class="cell" data-label="Corporate"><strong>Rs. 100,000</strong></span>
                                </div>
                                <div class="row">
                                    <input type="radio" name="expand">
                                    <span class="cell primary" data-label="Features"><strong>Discounted Price (If paid in 6-month advance)</strong></span>
                                    <span class="cell" data-label="Basic Package"><strong>20% off</strong></span>
                                    <span class="cell" data-label="Standard"><strong>20% off</strong></span>
                                    <span class="cell" data-label="Premium"><strong>20% off</strong></span>
                                    <span class="cell" data-label="Executive"><strong>20% off</strong></span>
                                    <span class="cell" data-label="Professional"><strong>20% off</strong></span>
                                    <span class="cell" data-label="Corporate"><strong>20% off</strong></span>
                                </div>
                                <div class="row">
                                    <input type="radio" name="expand">
                                    <span class="cell primary" data-label="Features"><strong>Discounted Price (If paid in 12-month advance)</strong></span>
                                    <span class="cell" data-label="Basic Package"><strong>35% off</strong></span>
                                    <span class="cell" data-label="Standard"><strong>35% off</strong></span>
                                    <span class="cell" data-label="Premium"><strong>35% off</strong></span>
                                    <span class="cell" data-label="Executive"><strong>35% off</strong></span>
                                    <span class="cell" data-label="Professional"><strong>35% off</strong></span>
                                    <span class="cell" data-label="Corporate"><strong>35% off</strong></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                  </div>
                </div>
                <br><br>
                <div class="text-center">
                <button  onclick="window.location.href='/seo_landing_page#request-form'">Speak To An SEO Specialist Now</button>    
                </div>
            </div>
        </div>
        
        
        
        
        
        
        
        
        
        
        <div class="slp-services">
            <div class="container">
                <h2 class="medium-heading">Why Choose Us</h2>
                <h3 class="sub-heading">MavenUp is #1 SEO company in Pakistan and currently competing globally. We are known for providing top class SEO services at affordable prices.</h3>
                <div class="bottom-services">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="service-box">
                                <img src="{{ asset('img/growth.png')}}" alt="">
                                <h2>Growing Your Business</h2>
                                <p align="justify">In this competitive world, it is necessary that you are different from others. Internet has now become a great place to increase your potential customers. We will help you achieve your milestones and make sure that your business grows without any hiccups.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-box">
                                <img src="{{ asset('img/idea.png')}}" alt="">
                                <h2>Strategies for Success</h2>
                                <p align="justify">Unlike others, we don’t implement the same strategy on every project. Every website comes with a different niche and is slightly different from other websites. We understand the need for uniqueness as we make our strategies according to the nature of the business.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-box">
                                <img src="{{ asset('img/team.png')}}" alt="">
                                <h2>Experienced Team</h2>
                                <p align="justify">MavenUp Creatives is a team of professionals, and we are ready to help you 24x7. You can outsource your project in our safe hands without any worries. Our experienced team will ensure that your project will complete on time with that too with best results.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="service-box">
                                <img src="{{ asset('img/badge.png')}}" alt="">
                                <h2>Assured #1 Ranking in Google</h2>
                                <p align="justify">Getting on top in Google means thousands of free traffic to your website. If you have a little knowledge of SEO, you will know how difficult it is to rank # in Google. Well, we will help you to get a guaranteed position in SERP in given time frame or we will work free of cost for you.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-box">
                                <img src="{{ asset('img/group.png')}}" alt="">
                                <h2>More Than 5 Years of Experience in SEO</h2>
                                <p align="justify">We have more than 5 years of experience in SEO. Do we need to say more? Since our inception, we never failed to deliver the top rankings. We don’t follow the same strategy for all projects. We take each single project differently and make strategies according to it.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-box">
                                <img src="{{ asset('img/reward.png')}}" alt="">
                                <h2>AdWords Certified Company</h2>
                                <br>
                                <br>
                                <p align="justify">MavenUp Creatives is one of the most credible companies in Pakistan having a professional and easy approch with customized solutions for customers. We are AdWords certified. You can outsource your project to us confidently and we will deliver according to expectations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-4">
                            <div class="service-box">
                                <img src="{{ asset('img/contract.png')}}" alt="">
                                <h2>Get Weekly Reports</h2>
                                <p align="justify">We believe in perfect communication as we don’t hide anything from our customers. We take a very special care of transparency. We send weekly and monthly reports for you to track the progress of your project. The reports will break down each task into milestones.</p>
                            </div>
                            
                        </div>
                        <div class="col-md-4">
                            <div class="service-box">
                                <img src="{{ asset('img/24-hours.png')}}" alt="">
                                <h2>24/7 Customer Support</h2>
                                <p align="justify">We leave no stone unturned to provide excellent services to our prestige customers. We offer 24/7 customer support and are avaiable to guide customers for any query or to offer a solution to any problem they have regarding the search engine optimization.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button  onclick="window.location.href='/seo_landing_page#request-form'">Speak To An SEO Specialist Now</button>
            </div>
        </div>
        
        
        <div class="slp-client">
            <div class="container">
                <h2 class="medium-heading">MavenUp Creatives® is Recognized as a Top Digital Marketing Agency by:</h2>
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ asset('img/clutch.png')}}" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('img/bark.png')}}" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('img/facebook.png')}}" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('img/google.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="slp-testimonial">
            <div class="container">
                <div class="comment-box">
                    <p class="comment-sign">&#8220;</p>
                    <h3 class="sub-heading">I have been using this template for all my company needs for the last 3 years and couldn’t be happier with their service and expertise. They’ve surpassed all of my expectations and customer service!</h3>
                    <img src="{{ asset('img/serv-icon/auther-img.png')}}" alt="">
                    <h3>Mark Wainright</h3>
                    <p>CEO & Founder of Another Great Company</p>
                </div>
            </div>
        </div>
        
        
        <div class="slp-client">
            <div class="container">
                <h2 class="medium-heading">OUR PORTFOLIO</h2>
                <h3 class="sub-heading">Have a look at some of our brilliant clients</h3>
                <br><br>
               <section class="customer-logos slider">
                  <div class="slide"><img src="{{ asset('img/ahad.png')}}"></div>
                  <div class="slide"><img src="{{ asset('img/aio.png')}}"></div>
                  <div class="slide"><img src="{{ asset('img/audio-desgin-desk.png')}}"></div>
                  <div class="slide"><img src="{{ asset('img/body seduction.png')}}"></div>
                  <div class="slide"><img src="{{ asset('img/candice.png')}}"></div>
                  <div class="slide"><img src="{{ asset('img/concierge-level.png')}}"></div>
                  <div class="slide"><img src="{{ asset('img/elite.png')}}"></div>
                  <div class="slide"><img src="{{ asset('img/leenas-jal.png')}}"></div>
                  <div class="slide"><img src="{{ asset('img/orange-family.png')}}"></div>
                  <div class="slide"><img src="{{ asset('img/site-view-pro.png')}}"></div>
                  <div class="slide"><img src="{{ asset('img/sr-consult.png')}}"></div>
                  <div class="slide"><img src="{{ asset('img/toto-vps.png')}}"></div>
                  <div class="slide"><img src="{{ asset('img/usman-habib.png')}}"></div>
                  <div class="slide"><img src="{{ asset('img/wiekamda.png')}}"></div>
               </section>
            </div>
        </div>
        
        <div class="slp-deal">
            <div class="container">
                <h2 class="medium-heading">DO YOU WANT FREE TRAFFIC AND SALES?</h2>
                <h3 class="sub-heading">Call us right now and we will discuss the strategy <br>to rank your website in Google.</h3>
                <br><br>
                <button  onclick="window.location.href='/seo_landing_page#request-form'">Speak To An SEO Specialist Now</button>
            </div>
        </div>
        
        
        
        <div class="slp-footer">
            <div class="container">
                <p>MavenUp Creatives®| All Rights Reserved © 2019.</p>
            </div>
        </div>
        
        
    </section>
    <!--==========================
     Stop-solution-section
    ============================-->



</main>


</body>