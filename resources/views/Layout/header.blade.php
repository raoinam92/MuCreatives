<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId=1254768611235599&autoLogAppEvents=1"></script>

<div id="mav-top-bar" class="mobile-top-bar hide-top-bar">
    <div class="icon-bar-top">
        <div class="social-link"> <a href="https://twitter.com/mavenupofficial" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="https://www.facebook.com/MavenUp/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/mavenupcreatives/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="https://www.linkedin.com/company/mavenup" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a>
            <a href="https://youtube.com/c/MavenUpOfficial" target="_blank" class="linkedin"><i class="fa fa-youtube"></i></a>
            <a href="https://www.behance.net/MavenUpCreatives" target="_blank" class="linkedin"><i class="fa fa-behance"></i></a>
            <a href="https://www.pinterest.com/MavenUp/" target="_blank" class="linkedin"><i class="fa fa-pinterest"></i></a>
        </div>
    </div>
</div>
<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
        <div class="social-links float-left"> <a href="https://twitter.com/mavenupofficial" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="https://www.facebook.com/MavenUp/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/mavenupcreatives/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="https://www.linkedin.com/company/mavenup" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a>
            <a href="https://youtube.com/c/MavenUpOfficial" target="_blank" class="linkedin"><i class="fa fa-youtube"></i></a>
            <a href="https://www.behance.net/MavenUpCreatives" target="_blank" class="linkedin"><i class="fa fa-behance"></i></a>
            <a href="https://www.pinterest.com/MavenUp/" target="_blank" class="linkedin"><i class="fa fa-pinterest"></i></a>
        </div>
        <div class="contact-info float-right"> <i class="fa fa-envelope-o"></i>  <a href="mailto:info@mavenup.com">info@mavenup.com</a>
            <i class="fa fa-phone"></i>  <a href="tel:+924235139999">(042) 35139999</a>
            <a href="https://mavenupcrm.com/authentication/register" target="_blank" id="reg-topbar">Register</a>
            <a href="https://mavenupcrm.com/authentication/login" target="_blank" id="login-topbar">Login</a>
        </div>
    </div>
</section>
<!--==========================
Header
============================-->
<header id="header">
    <div class="container">
        <div class="logo float-left">
            <a href="/" class="scrollto">
                <img src="{{ asset('img/mavenup-creative-logo.png')}}" alt="" class="img-fluid">
            </a>
        </div>
        <nav class="main-nav float-right d-none d-lg-block">
            <div class="nav-align">
                <nav class="main-nav d-none d-lg-block">
                    <ul>
                        <li><a href="/">Home</a>
                        </li>
                        <li ><a href="{{route('admin.about')}}">About</a>
                            <!--<ul>-->
                            <!--    <li><a href="/partnership">Partnerships</a></li>-->
                            <!--    <li><a href="/mission_vision">Mission & Vision</a></li>-->
                            <!--</ul>-->
                        </li>
                        <li class="drop-down"><a href="{{route('admin.services')}}">Services</a>
                            <ul>
                          
                                <li><a href="{{route('admin.webdev')}}">Web Development</a></li>
                                <li><a href="{{route('admin.customdev')}}">Custom Software Development</a></li>
                                 <li><a href="{{route('admin.seo')}}">SEO Expertise</a>
                                                </li>
                                                <li><a href="{{route('admin.smm')}}">Social Media Management</a>
                                                </li>
                            </ul>
                        </li>
                        <!--<li class="drop-down mega-drop"><a href="{{route('admin.services')}}">Services</a>-->
                        <!--    <ul class="mega-menu mu-mega nav-mega-menu">-->
                        <!--        <div class="container">-->
                        <!--            <div class="row">-->
                        <!--                <div class="col-lg-4">-->
                        <!--                    <div class="mega-nav-col">-->
                        <!--                        <div class="mega-design-heading nav-btm-border">-->
                        <!--                            <p><a href="{{route('admin.graphicDesign')}}">Graphics Design</a></p>-->
                        <!--                        </div>-->
                        <!--                        <li><a href="{{route('admin.websiteDesignui')}}">website Design (UI/UX)</a></li>-->
                        <!--                        <li><a href="{{route('admin.logoDesign')}}">Logo Design</a></li>-->
                        <!--                        <li><a href="{{route('admin.printDesign')}}">Print Design</a></li>-->
                        <!--                        <li><a href="{{route('admin.illustration')}}">Illustration</a></li>-->
                                                


                        <!--                        <div class="mega-design-heading app-top nav-btm-border cms-icon">-->
                        <!--                            <p><a  href="{{route('admin.webapplication')}}">web applications</a></p>-->
                        <!--                        </div>-->
                        <!--                        <li><a href="{{route('admin.csd')}}">Custom Software Development</a>-->
                        <!--                        </li>-->
                        <!--                        <li><a href="{{route('admin.cmssystem')}}">cms system</a>-->
                        <!--                        </li>-->

                        <!--                        <li><a href="{{route('admin.socialnetworking')}}">social networking</a>-->
                        <!--                        </li>-->

                        <!--                        <li><a href="{{route('admin.customerp')}}">Custom ERP Development</a>-->
                        <!--                        </li>-->

                        <!--                        <div class="mega-design-heading app-top nav-btm-border mob-icon">-->
                        <!--                            <p><a href="{{route('admin.mobileapplication')}}">Mobile Applications</p>-->
                        <!--                        </div>-->
                        <!--                        <li><a href="{{route('admin.iphone')}}">iPhone</a>-->
                        <!--                        </li>-->
                        <!--                        <li><a href="{{route('admin.android')}}">Android</a>-->
                        <!--                        </li>-->
                        <!--                        <li><a href="{{route('admin.hybrid')}}">Hybrid</a>-->
                        <!--                        </li>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="col-lg-4">-->
                        <!--                    <div class="mega-nav-col">-->
                        <!--                        <div class="mega-design-heading nav-btm-border website-icon">-->
                        <!--                            <p><a href="{{route('admin.webdevelopment')}}">Website Development</p>-->
                        <!--                        </div>-->
                        <!--                        <li><a href="{{route('admin.cms')}}">CMS</a>-->
                        <!--                        </li>-->
                        <!--                        <li><a href="{{route('admin.language')}}">Language</a>-->
                        <!--                        </li>-->
                        <!--                        <li><a href="{{route('admin.framework')}}">Framework</a>-->
                        <!--                        </li>-->


                        <!--                        <div class="mega-design-heading app-top nav-btm-border website-icon">-->
                        <!--                           <p> <a href="{{route('admin.cms')}}">CMS</a></p>-->
                        <!--                        </div>-->
                        <!--                        <li><a href="{{route('admin.wordpress')}}">wordpress</a>-->
                        <!--                        </li>-->
                        <!--                        <li><a href="{{route('admin.drupal')}}">Drupal</a>-->
                        <!--                        </li>-->
                        <!--                        <li><a href="{{route('admin.joomla')}}">joomla</a>-->
                        <!--                        </li>-->
                        <!--                        <li><a href="{{route('admin.wix')}}">Wix</a>-->
                        <!--                        </li>-->

                        <!--                        <div class="mega-design-heading app-top nav-btm-border website-icon">-->
                        <!--                            <p><a href="{{route('admin.language')}}">language</a></p>-->
                        <!--                        </div>-->
                        <!--                        <li><a href="{{route('admin.php')}}">PHP</a>-->
                        <!--                        </li>-->
                        <!--                        <li><a href="{{route('admin.javascript')}}">java Script</a>-->
                        <!--                        </li>-->
                        <!--                        <li><a href="{{route('admin.angularjs')}}">Angular Js</a>-->
                        <!--                        </li>-->
                        <!--                        <li><a href="{{route('admin.java')}}">Java</a>-->
                        <!--                        </li>-->

                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="col-lg-4">-->
                        <!--                    <div class="mega-nav-col">-->
                        <!--                        <div class="mega-design-heading nav-btm-border market-icon">-->
                        <!--                            <p><a href="{{route('admin.digitalmarket')}}">digital marketing</a></p>-->
                        <!--                        </div>-->
                        <!--                        <li><a href="{{route('admin.seo')}}">SEO Expertise</a>-->
                        <!--                        </li>-->
                        <!--                        <li><a href="{{route('admin.smm')}}">Social Media Management</a>-->
                        <!--                        </li>-->
                        <!--                        <li><a href="{{route('admin.ppc')}}">Advertisements & PPC</a>-->
                        <!--                        </li>-->
                        <!--                        <li><a href="{{route('admin.reputation')}}">online reputation management</a>-->
                        <!--                        </li>-->


                        <!--                        <div class="mega-design-heading app-top nav-btm-border basket-icon">-->
                        <!--                            <p><a href="{{route('admin.ecommerce')}}">e-commerce</a></p>-->
                        <!--                        </div>-->
                        <!--                        <li><a href="{{route('admin.magento')}}">Magento</a>-->
                        <!--                        </li>-->
                        <!--                        <li><a href="{{route('admin.shopify')}}">Shopify</a>-->
                        <!--                        </li>-->
                        <!--                        <li><a href="{{route('admin.bigcommerce')}}">Big Commerce</a>-->
                        <!--                        </li>-->
                        <!--                        <li><a href="{{route('admin.woocommerce')}}">WooCommerce</a>-->
                        <!--                        </li>-->

                        <!--                        <div class="mega-design-heading app-top nav-btm-border website-icon">-->
                        <!--                            <p><a href="{{route('admin.framework')}}">FrameWorks</a></p>-->
                        <!--                        </div>-->
                        <!--                        <li><a href="{{route('admin.dotnet')}}">dot net</a>-->
                        <!--                        </li>-->
                        <!--                        <li><a href="{{route('admin.codeigniter')}}">code igniter</a>-->
                        <!--                        </li>-->
                        <!--                        <li><a href="{{route('admin.zend')}}">zend</a>-->
                        <!--                        </li>-->
                        <!--                        <li><a href="{{route('admin.laravel')}}">Laravel</a>-->
                        <!--                        </li>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->


                        <!--    </ul>-->
                        <!--</li>-->
                        <!--</li>-->
                        <!--<li class=""><a href="{{route('admin.industries')}}">Industries</a>-->
                        <!--</li>-->
                        <!--<li class=""><a href="">Testimonials</a></li>-->
                        <li><a href="{{route('admin.contact')}}">Contact</a>
                        </li>
                        <!--<li><a href="https://mucreatives.com/blog/">Blog</a>-->
                        <!--</li>-->
                        <li class="lets-butn" data-toggle="modal" data-target="#myModal">Let’s Talk
                        </li>
                    </ul>
                </nav>
                <!-- .main-nav -->
            </div>
        </nav>
        <!-- .main-nav -->
    </div>
</header>
<!-- #header -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <section id="business-talk-popup" class="form-section">
            <div class="container business-form-popup text-center ">
                <div class="talk-heading ">
                    <h2>Let’s Talk Business</h2>
                </div>
                <div class="row text-center ">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="pop-para">
                            <p>strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore..</p>
                        </div>
                    </div>

                </div>
            </div>
         @include('graphicDesign.popup')

            </section>

        </div>
    </div>
</div>
<script src="//code.tidio.co/pqcfrfqnmeauay5ccak8esxo0y3n82t8.js"> </script>
