<!DOCTYPE html>
<html>
<head>
    @include('Layout.head')
    <title>Web Design MI | Michigan SEO Company | MavenUp Creatives</title>
<meta name="description" content="MavenUp Creatives offers Website Design Services, SEO and PPC Services in RedFord, Kalamazoo, Detroit, Grand Rapids, Michigan and all over the USA. ">

<style>
    img.muc {
    max-width: 350px;
}
    /*** Testimonial ***/
    .lp-testimonial {
    background-color: #f2f2f2;
    padding: 40px 0!important;
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
    .testi-comment {
    font-size: 14px!important;
    font-weight: 400!important;
}
#team {
    background-color: #f1f1f2;
}
    
</style>
</head>
<body>

@include('Layout.header')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<section id="header-banner" class="banner-section wow bounceInUp" data-wow-duration=1.4s style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
    <div class="container-fluid head-ban"></div>
</section>
<div id=slider></div>
<section id="about" class="abou wow bounceInUp" data-wow-duration=1.4s style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
    <div class=container>
        <div class="row feature-item text-center">
            <div class="design-process-heading">
                <h2>Core expertise at MavenUp Creatives</h2>
                
                <div class="row">
                    <div class="col-md-6 text-center">
                         <img src="{{asset('img/app-img.png')}}" class=muc alt="web development">
                    </div>
                    <div class="col-md-6 text-center">
                        <div class="desi-proce-para container">
                    <p>MavenUp Creatives acts as your partner with a vigilant team, agile environment and steadfast in keeping the commitments. The world is revolutionized by the prevalence of digitalization and so is the human mind that has got a paradigm shift. Now the online presence with a prolific website, the aesthetically perfect design, user-friendly browsing, being top on the search engine results and grabbing social media audience, with captivating and shareable content, is a key to Business Success. MavenUp Creatives stands with you to fulfill your digital marketing goals, and to make any “Business a Brand” across the United States of America…!!</p>
                </div>
                <br><br>
                <div class="stop-btn"> <a href="#" class="view-stop det-stop-btn">get started</a>
                    </div>
                <!--    <div class="col-md-6 col-lg-4">-->
                <!--        <div class="box">-->
                <!--            <div class="icon-img">-->
                <!--                <img src="{{asset('/img/serv-icon/promotion.png')}}" class="web" alt="Digital Marketing">-->
                <!--            </div>-->
                <!--            <h4 class="title"><a href="">Digital Marketing</a></h4>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="col-md-6 col-lg-4 ">-->
                <!--        <div class="box">-->
                <!--            <div class="icon-img">-->
                <!--                <img src="{{asset('/img/serv-icon/website.png')}}" class="web" alt="Website Design & Develop">-->
                <!--            </div>-->
                <!--            <h4 class="title"><a href="">Website Design & Develop</a></h4>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="col-md-6 col-lg-4">-->
                <!--        <div class="box">-->
                <!--            <div class="icon-img">-->
                <!--                <img src="{{asset('/img/serv-icon/online.png')}}" class="web" alt="PPC Ads Management">-->
                <!--            </div>-->
                <!--            <h4 class="title"><a href="">PPC Ads Management</a></h4>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="row social-core">-->
                <!--    <div class="col-md-6 col-lg-4">-->
                <!--        <div class="box">-->
                <!--            <div class="icon-img">-->
                <!--                <img src="{{asset('/img/serv-icon/software.png')}}" class="web" alt="Software Development">-->
                <!--            </div>-->
                <!--            <h4 class="title"><a href="">Software Development</a></h4>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="col-md-6 col-lg-4 ">-->
                <!--        <div class="box">-->
                <!--            <div class="icon-img">-->
                <!--                <img src="{{asset('/img/serv-icon/analysis.png')}}" class="web" alt="best seo services">-->
                <!--            </div>-->
                <!--            <h4 class="title"><a href="">best seo services</a></h4>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="col-md-6 col-lg-4">-->
                <!--        <div class="box">-->
                <!--            <div class="icon-img">-->
                <!--                <img src="{{asset('/img/serv-icon/social-media-about.png')}}" class="web" alt="ssocial media management<">-->
                <!--            </div>-->
                <!--            <h4 class="title"><a href="">social media management</a></h4>-->
                <!--        </div>-->
                <!--    </div>-->
                </div>
                
                </div>
            </div>
        </div>
    </div>
</section>
<section id=services class="wow bounceInUp" data-wow-duration=1.4s style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
    <div class="container-fluid main-heading-bottom">
        <div class=title-animationServive>Services</div>
        <div class="main-heading mobile-heading">
            <h2>SERVICES</h2>
        </div>
    </div>
    <div class="container services-section-Up">
        <div class=row>
            <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-duration=1.4s>
                <div class=box>
                    <div class=icon-img>
                        <img src="{{asset('img/serv-icon/web-development.png')}}" class=web alt="web development">
                    </div>
                    <h4 class=title><a href="/web_dev">web development</a></h4>
                    <p class=description>Our Web Development team comprises of experts with dynamic web development abilities and perfection execution strategies that would help develop your brand in the New York City!</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-duration=1.4s>
               
                    <div class=box>
                    <div class=icon-img>
                        <img src="{{asset('img/serv-icon/software-development.png')}}" class=web alt="software development">
                    </div>
                    <h4 class=title><a href="/custom_dev">Custom software development</a></h4>
                    <p class=description>Our highly proficient software development team will help you develop your personal or business software using the latest development techniques and strategies, in order to give you the maximum outreach of customers. Our prices are highly affordable and come with a definitive customer support to calm your problems.</p>
                </div>
               
            </div>
            <!--<div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-duration=1.4s>-->
            <!--    <div class=box>-->
            <!--        <div class=icon-img>-->
            <!--            <img src="{{asset('img/serv-icon/web-designing.png')}}" class=web alt="Web Designing">-->
            <!--        </div>-->
            <!--        <h4 class=title><a href="/graphic-design-michigan">Web Design</a></h4>-->
            <!--        <p class=description>Designing your business website is just like painting and our creative team is at its best in managing your digital presence with a purpose of giving an eye-grabbing appeal to customers.</p>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-duration=1.4s>-->
            <!--    <div class=box>-->
            <!--        <div class=icon-img>-->
            <!--            <img src="{{asset('img/serv-icon/web-app-development.png')}}" class=web alt="web app development">-->
            <!--        </div>-->
            <!--        <h4 class=title><a href="/web-applications">web app development</a></h4>-->
            <!--        <p class=description>As the world is going digital, web based apps are equally important when we talk about the software. We will develop your web applications using the best practices and customer retention techniques. </p>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-duration=1.4s>-->
            <!--    <div class=box>-->
            <!--        <div class=icon-img>-->
            <!--            <img src="{{asset('img/serv-icon/corporate-services.png')}}" class=web alt="corporate services">-->
            <!--        </div>-->
            <!--        <h4 class=title><a href="">corporate services</a></h4>-->
            <!--        <p class=description>We not only provide basic Information Technology services, but our team serves you with the best corporate consultancy to show you the right way of doing business and its marketing as well. </p>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-duration=1.4s>
                <div class=box>
                    <div class=icon-img>
                        <img src="{{asset('img/serv-icon/mobile-app-development.png')}}" class=web alt="mobile app development">
                    </div>
                    <h4 class=title><a href="/digital-marketing/michigan-seo-company">SEO Expertise</a></h4>
                    <p class=description>It is pretty obvious that 53% of the mobile user accesses internet from their cell phone. This clearly shows how important the mobile apps can be for a business. Our mobile app developers will create a dynamic mobile app either in Android or in IOS.</p>
                </div>
            </div>
            <!--<div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-duration=1.4s>-->
            <!--    <div class=box>-->
            <!--        <div class=icon-img>-->
            <!--            <img src="{{asset('img/serv-icon/e-commerce.png')}}" class=web alt=E-commerce>-->
            <!--        </div>-->
            <!--        <h4 class=title><a href="/ecommerce-website-development-michigan">E-commerce</a></h4>-->
            <!--        <p class=description>Ecommerce website is one of the best selling websites in the world because of the prevalent digitalization and the ease of product access. Online shopping has become the real trend now a days. Our experienced team will let you have an extraordinary and elegant ecommerce platform that will give you a guaranteed sales success and customer conversion.</p>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-duration=1.4s>
                <div class=box>
                    <div class=icon-img>
                        <img src="{{asset('img/serv-icon/digital-marketing.png')}}" class=web alt="digital marketing">
                    </div>
                    <h4 class=title><a href="/digital-marketing/social-media-marketing-michigan">digital marketing</a></h4>
                    <p class=description>You leave your business unattended if you do not plan to focus on its marketing. Digital Marketing is like a lifeline nowadays! This practice gives the maximum outreach of customers throughout the world. So, talk to our digital marketing consultants and increase your long-term profits.</p>
                </div>
            </div>
            
            <div class="col-md-12 wow fadeInUp">
                <div class=See-btn>
                    <a href="#about" class="btn-get-started scrollto">Get Started!</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--<section id=features>-->
<!--    <div class="container-fluid main-heading-bottom">-->
<!--        <div class=title-animationindustries>industries</div>-->
<!--        <div class="main-heading mobile-heading">-->
<!--            <h2>INDUSTRIES</h2>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="container map-img services-section-Up">-->
<!--        <div class="row feature-item">-->
<!--            <div class="col-lg-6 wow fadeInUp">-->
<!--                <img src="{{asset('img/serv-icon/catering-all.png')}}" class=img-fluid alt="">-->
<!--            </div>-->
<!--            <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">-->
<!--                <div class=creat-head>-->
<!--                    <h2>Business Boost is Our Goal</h2>-->
<!--                </div>-->
<!--                <div class="cta-btn-container btn-mbile text-right">-->
<!--                    <a class="cta-btn align-middle" href="#">Ask for a Package Deal</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row industri-box-align">-->
<!--            <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-duration=1.4s style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">-->
<!--                <div class=industrial-box>-->
<!--                    <div class=icon-img>-->
<!--                        <img src="{{asset('img/serv-icon/education.png')}}" class=web alt="web development">-->
<!--                    </div>-->
<!--                    <h3 class=title-serv>Education</h3>-->
<!--                    <p class=descri-insdu>We have had a great experience serving educational institutions and have provided several elegant web designs and websites, as we have a mastery of working with foreign education experts and consultants in NYC or California!</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-duration=1.4s style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">-->
<!--                <div class=industrial-box>-->
<!--                    <div class=icon-img>-->
<!--                        <img src="{{asset('img/serv-icon/healthcare.png')}}" class=web alt="Web Designing">-->
<!--                    </div>-->
<!--                    <h3 class=title-serv>healthcare</h3>-->
<!--                    <p class=descri-insdu>Need to develop a website or be on top of online searches in the healthcare domain. Call us for SEO and Social Media Marketing at affordable rates.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-duration=1.4s style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">-->
<!--                <div class=industrial-box>-->
<!--                    <div class=icon-img>-->
<!--                        <img src="{{asset('img/serv-icon/business-intel.png')}}" class=web alt=E-commerce>-->
<!--                    </div>-->
<!--                    <h3 class=title-serv>Real Estate </h3>-->
<!--                    <p class=descri-insdu>Developing software and modules with business intelligence roles is one of our specializations. Appoint us right now for your real estate platforms, software or apps.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-duration=1.4s style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">-->
<!--                <div class=industrial-box>-->
<!--                    <div class=icon-img>-->
<!--                        <img src="{{asset('img/serv-icon/e-commerce-money.png')}}" class=web alt="software development">-->
<!--                    </div>-->
<!--                    <h3 class=title-serv>e-commerce</h3>-->
<!--                    <p class=descri-insdu>Ask our experts to develop an E-commerce portal where you can sell multifaceted products, without caring about the cost of a physical store</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-duration=1.4s style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">-->
<!--                <div class=industrial-box>-->
<!--                    <div class=icon-img>-->
<!--                        <img src="{{asset('/img/serv-icon/Social-media.png')}}" class=web alt="mobile app development">-->
<!--                    </div>-->
<!--                    <h3 class=title-serv>Social media</h3>-->
<!--                    <p class=descri-insdu>People normally get worried when there is a security risk or a lockout. We will develop your website professionally to give you maximum customer outreach and we will also guide you step by step.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-duration=1.4s style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">-->
<!--                <div class=industrial-box>-->
<!--                    <div class=icon-img>-->
<!--                        <img src="{{asset('img/serv-icon/finance.png')}}" class=web alt="web app development">-->
<!--                    </div>-->
<!--                    <h3 class=title-serv>finance</h3>-->
<!--                    <p class=descri-insdu>Our team also has a potential finance knowledge base and they will devise you the strategy that will not only improve your profits but will also improve the long-term solvency of your business.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-duration=1.4s style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">-->
<!--                <div class=industrial-box>-->
<!--                    <div class=icon-img>-->
<!--                        <img src="{{asset('img/serv-icon/start-ups.png')}}" class=web alt="digital marketing">-->
<!--                    </div>-->
<!--                    <h3 class=title-serv>Restaurant </h3>-->
<!--                    <p class=descri-insdu>Menu design and elegant display of the website is potentially important if you’re running a restaurant. Talk to our experts now and have guaranteed results.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-duration=1.4s style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">-->
<!--                <div class=industrial-box>-->
<!--                    <div class=icon-img>-->
<!--                        <img src="{{asset('img/serv-icon/travel.png')}}" class=web alt="corporate services">-->
<!--                    </div>-->
<!--                    <h3 class=title-serv>travel</h3>-->
<!--                    <p class=descri-insdu>After giving consultations and providing successful IT and Marketing services to many travel businesses, we proudly say that this is one of our best industry area of experience.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<section id=counter class="">
    <div class="container-fluid main-heading-bottom">
        <div class=title-animationachive>Achievements</div>
        <div class="main-heading mobile-heading">
            <h2>ACHIEVEMENTS</h2>
        </div>
    </div>
    <div class="container services-section-Up">
        <div class=container>
            <div class="row counters">
                <div class="col-lg-3 col-6 text-center">
                    <div class=icon-img>
                        <img src="{{asset('img/serv-icon/projects.png')}}" class=web alt=projects>
                    </div>
                    <span data-toggle=counter-up>3100</span>
                    <p>Projects</p>
                </div>
                <div class="col-lg-3 col-6 text-center">
                    <div class=icon-img>
                        <img src="{{asset('img/serv-icon/clients.png')}}" class=web alt=clients>
                    </div>
                    <span data-toggle=counter-up>500</span>
                    <p>Clients</p>
                </div>
                <div class="col-lg-3 col-6 text-center">
                    <div class=icon-img>
                        <img src="{{asset('img/serv-icon/awards.png')}}" class=web alt=awards>
                    </div>
                    <span data-toggle=counter-up>1,364</span>
                    <p>Awards</p>
                </div>
                <div class="col-lg-3 col-6 text-center">
                    <div class=icon-img>
                        <img src="{{asset('img/serv-icon/followers.png')}}" class=web alt=followers>
                    </div>
                    <span data-toggle=counter-up>18</span>
                    <p>Followers</p>
                </div>
            </div>
        </div>
    </div>
    <div class=xbody>
        <div class=ocean>
            <div class=wave></div>
            <div class=wave></div>
        </div>
    </div>
</section>




<div class="lp-testimonial" id="counter">
            <div class="container">
                <div class=title-animationachive>Testimonials</div>
                 <div class="main-heading mobile-heading">
            <h2>GREAT WORDS FROM CLIENTS</h2>
        </div>
                
                <h2 class="big-heading">Read <b>Testimonials</b> Now!</h2>
                <p>We make customizable websites so our clients could use it in an easy</p>
                <p> and fast way without even coding a single line!</p>
                <div class="row testimonial">
                    <div class="col-md-6">
                        <div class="testi-box">
                            <img src="{{ asset('img/serv-icon/naomi.png')}}" alt="" >
                            <p class="testi-comment" align="justify">It was really great working with MavenUp. Very quick turn around and they understand exactly what I needed and wanted. Thank you! I will definitely be back in the future. Recommended Web professionals.</p>
                            <h4><b>Naomi Stockman</b></h4>
                            <p class="star-color"><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="testi-box">
                            <img src="{{ asset('img/serv-icon/joseph.png')}}" alt="" >
                            <p class="testi-comment" align="justify">MavenUp was simple to work with, They understood all of my needs and delivered as promised. I'm fairly sure I'll need more help with my Wwbsite as things progress and I will definitely choose MavenUp again.</p>
                            <h4><b>Joseph Nalley</b></h4>
                            <p class="star-color"><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span></p>
                        </div>
                    </div>
                </div>
                <p class="sub-heading "><b>+2,000</b> Clients Trust Our Services Since 2014</p>
            </div>
        </div>
        
        
<section id=team class="">
    <!--<div class="container-fluid main-heading-bottom">-->
    <!--    <div class=title-animationtesti>Testimonials</div>-->
    <!--    <div class="main-heading mobile-heading">-->
    <!--        <h2>TESTIMONIALS</h2>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<div class="container services-section-Up team-bottom">-->
    <!--    <div class="row auther-testi">-->
    <!--        <div class="col-lg-4 col-md-6 wow fadeInUp">-->
    <!--            <div class=test-part>-->
    <!--                <div class=part-info>-->
    <!--                    <div class=part-info-content>-->
    <!--                        <h6>Many thanks for making this such an easy process. I really appreciate work MavenUp Creatives did for me, and I'm super happy for choosing you</h6>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class=test-auther>-->
    <!--                    <div class=pic>-->
    <!--                        <img src="{{asset('img/serv-icon/auther-img.png')}}">-->
    <!--                    </div>-->
    <!--                    <div class=testimonial-profile>-->
    <!--                        <h6 class=auther-title>Brian Morgan </h6>-->
    <!--                        <span class=auther-post>California USA</span>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=0.1s>-->
    <!--            <div class=test-part>-->
    <!--                <div class=part-info>-->
    <!--                    <div class=part-info-content>-->
    <!--                        <h6>MavenUp Creatives is delivering great quality for a great price. They are well in communicating about the specifications and timeframes, they'll be able to outperform your imagination.</h6>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class=test-auther>-->
    <!--                    <div class=pic>-->
    <!--                        <img src="{{asset('img/serv-icon/auther-img.png')}}">-->
    <!--                    </div>-->
    <!--                    <div class=testimonial-profile>-->
    <!--                        <h6 class=auther-title>Alicia Roberts</h6>-->
    <!--                        <span class=auther-post>California USA</span>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=0.2s>-->
    <!--            <div class=test-part>-->
    <!--                <div class=part-info>-->
    <!--                    <div class=part-info-content>-->
    <!--                        <h6>These guys communicated clearly and delivered ahead of the schedule. I'm very happy about my experience and I plan on doing more projects with them! Thank You!</h6>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class=test-auther>-->
    <!--                    <div class=pic>-->
    <!--                        <img src="{{asset('img/serv-icon/auther-img.png')}}">-->
    <!--                    </div>-->
    <!--                    <div class=testimonial-profile>-->
    <!--                        <h6 class=auther-title>Smith Johnson</h6>-->
    <!--                        <span class=auther-post>California USA</span>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <div class="container subsc-form-popup">
        <div class=wrap-contact100>
            <div class=subscribe-text>
                <h4>Subscribe for our newsletter & blogs to get updated information on how the technology world is evolving!</h4>
            </div>
            <form class="contact100-form validate-form">
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                    <input class=input100 name=name placeholder="Enter your name">
                </div>
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class=input100 name=email placeholder="Enter your email">
                </div>
                <div class=submit-butn>
                    <button class=form-submit-butn type=button>Subscribe!</button>
                </div>
            </form>
        </div>
    </div>
    <div id=blog-area class=blog-section-area>
        <div class="container-fluid main-heading-bottom">
            <div class=title-animationblog>Blog</div>
            <div class="main-heading mobile-heading">
                <h2>BLOG</h2>
            </div>
            <div class=row>

<ul id="latest_posts">

</ul>
</div>
</div>
</div>
</section>

<section id=portfolio class="">
    <div class="container-fluid main-heading-bottom">
        <div class=title-animationportfolio>Portfolio</div>
        <div class="main-heading mobile-heading">
            <h2>PORTFOLIO</h2>
        </div>
    </div>
    <div class="container services-section-Up">
        <div class=row>
            <div class="col-lg-3 col-md-6 wow fadeInUp">
                <div class=member>
                    <img src="{{asset('img/Aiolocksmith.jpg')}}" class=img-fluid alt="aio lock smith">
                    <div class=member-info>
                        <a href="https://aiolocksmith.com" target="_blank">
                        <div class=member-info-content>
                            <h4>Aio Lock Smith</h4>
                            <span>Website Design &
Development</span>
                        </div>
                    </div>
                </a>
                </div>
                
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=0.1s>
                <div class=member>
                    <a href="https://proskillsbasketball.com" target="_blank">
                    <img src="{{asset('img/proskill-basketball.jpg')}}" class=img-fluid alt=proskill-Basketball>
                    <div class=member-info>
                        <div class=member-info-content>
                            <h4>Pro Skills Basketball</h4>
                            <span>Website Design &
Development</span>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=0.2s>
                <div class=member>
                    <a href="https://sreducationservices.com/" target="_blank">
                    <img src="{{asset('img/sreducation.jpg')}}" class=img-fluid alt=sreducation>
                    <div class=member-info>
                        <div class=member-info-content>
                            <h4>SR Education</h4>
                            <span>Website Design &
Development</span>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=0.3s>
                <div class=member>
                    <a href="https://totovps.com" target="_blank">
                    <img src="{{asset('img/TOTO-VPS.jpg')}}" class=img-fluid alt=toto-vps>
                    <div class=member-info>
                        <div class=member-info-content>
                            <h4>TOTO VPS</h4>
                            <span>Website Design &
Development</span>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class=col-md-12>
                <div class=See-btn>
                    <a href="https://www.behance.net/MavenUpCreatives" class="btn-get-started scrollto see-btn" target="_blank">See All</a>
                </div>
            </div>
        </div>
    </div>
</section>


@include('Layout.footer')
</body>

</html>
<script>

function truncateText(string, maxLength) {
        debugger;
        truncated = string;
    if (truncated.length > maxLength) {
        truncated = truncated.substr(0,maxLength) + '...';
    }
    return truncated;
}

function get_ptag_text(string)
{
    debugger;
    var $str1 = $(string);//this turns your string into real html
    var z = $str1[2].innerText;
    return(z);
}

var html = '';
    $(document).ready(function(){
        debugger;
       $.ajax({
    type: 'GET',
    url: 'https://www.mavenup.com/blog/wp-json/wp/v2/posts?per_page=3&_embed',
    dataType: "json", // add data type
    success: function( response ) {
        console.log(response);
       for(var i = 0; i<response.length ; i++)
       {
        html+='<li class="col-md-4 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"><div class="member"><a href="'+response[i].link+'"><img src="'+response[i]._embedded["wp:featuredmedia"][0].source_url+'" class="web" alt="projects"></a><div class="blog-info"><div class="blog-info-content"><h5><a href="'+response[i].link+'">'+response[0].title.rendered+'</a></h5><div class="blog-excerpt"><p class="less">'+truncateText(get_ptag_text(response[i].content.rendered),150)+'</p></div><div class="blog-read-btn"><a href="'+response[i].link+'">Read More <i class="fa fa-angle-right"></i> </a></div></div></div></div></li>'   
       }
       $('#latest_posts').empty();
        $('#latest_posts').html(html);
    }
});  
    });
    
   
</script>