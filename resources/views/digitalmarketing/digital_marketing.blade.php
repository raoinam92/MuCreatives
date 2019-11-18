<!DOCTYPE html>
<html>
<head>
    @include('../Layout.head')


</head>
<body>

  @include('../Layout.header')
<link rel="stylesheet" type="text/css" href="{{ asset('css/digital-marketing.css') }}" >
<!--==========================
    Intro Section
============================-->
<main id="main" wow bounceInUp data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
    <!--==========================
          Services-section-Start
    ============================-->
    <section>
        <div id="digital-marketing-main" class="mu-weuimu-bg">
            <div class="container-fluid">
                <div class="muser-main-heading">
                    <h1>Digital Marketing</h1>

                </div>
            </div>
        </div>

        <!--==========================
          Services-designing process-Start
    ============================-->

        <div id="mu-design-proces" class="mu-design-section" wow bounceInUp data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="design-proces">
                            <img src="{{asset('./img/digital-marketing/digital-marketing-icon.png')}}" alt="Digital Marketing Icon">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="all-social-text">
                            <div class="text-soc">
                                <h2>content is fire,</h2>
                            </div>

                            <div class="text-soc">
                                <h3>social media is</h3>
                            </div>

                            <div class="text-soc">
                                <h4>gasoline.</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="socila-img-girl">
                            <img src="{{asset('./img/digital-marketing/social-content.png')}}" alt="Social Girl">
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- # Services headS section -->



<!--==========================
     Stop-solution-section
    ============================-->
    <section id="stop-solution-section" class="leadership-section" wow bounceInUp data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
       <div class="container-fluid">          
            <div class="container">
              <div class="muser-main-heading">
                <h1>Digital Marketing - Effective Way to Grab Your Market Share</h1>
            </div>
              <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
              <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="aboutmu-detail-para">
                    <p>Digital Marketing is one of the key methods to get an instant boost in sales for any business domain. The global digitalization has made it quite obvious to look at the current marketing trends that have shifted on the web. The use of smartphones globally, has opened up new horizons to grow with the help of digital marketing. Once you understand that you can reach a significant amount of potential customers with a wisely devised marketing agency, it is then important for you to hire an experienced digital marketing agency, who, through a decent strategy, will make a great impact of your website at your desired location. MavenUp Creatives is a professional <b>digital marketing agency based in Michigan</b>, who has had a great track record of giving eminent success to clients.</p>
            </div>
            </div>
              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
              </div>
             
      <div class="row">          
           <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="box">
              <div class="icon-img"><img src="{{asset('./img/digital-marketing/seo.png')}}" class="web" alt="SEO"></div>
              <h4 class="title"><a href="{{ route('admin.seo')}}">SEO</a></h4>
              <p class="description">Search engine optimization (SEO) is on the top of the list of digital marketing methods, as it ranks your websites on top positions with the most searchable keywords, used by your prospective users. It helps in bringing a lot of organic traffic to your website.</p>
              <div class="stop-btn">
                <a href="{{ route('admin.seo')}}" class="view-stop det-stop-btn">view details</a>
              </div>
            </div>
          </div>
           <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="box">
              <div class="icon-img"><img src="{{asset('./img/digital-marketing/content-marketing.png')}}" class="web" alt="Content Marketing"></div>
              <h4 class="title"><a href="{{ route('admin.contentMarketing')}}">CONTENT MARKETING</a></h4>
              <p class="description">Our professionals will help you write a professional, decent, attractive, elegant and clean content, which will not only help your clients understand your business well, but will improve your rankings because of the appropriate following of Google algorithms.</p>
               <div class="stop-btn">
                <a href="{{ route('admin.contentMarketing')}}" class="view-stop det-stop-btn">view details</a>
              </div>
            </div>
          </div>
           <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="box">
              <div class="icon-img"><img src="{{asset('./img/digital-marketing/smm.png')}}" class="web" alt="Social Media Marketing"></div>
              <h4 class="title"><a href="{{ route('admin.smm')}}">SMM</a></h4>
              <p class="description">Social Media is also one of the best digital marketing methods to do some serious business, and these channels help device the marketing strategy according to audience trends and demographics.</p>
             <div class="stop-btn">
                <a href="{{ route('admin.smm')}}" class="view-stop det-stop-btn">view details</a>
              </div>
            </div>
          </div>
           <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="box">
              <div class="icon-img"><img src="{{asset('./img/digital-marketing/add-ppc.png')}}" class="web" alt="Advertisement & PPC"></div>
              <h4 class="title"><a href="{{ route('admin.ppc')}}">ADVERTISEMENT & PPC</a></h4>
              <p class="description">Pay per click is an effective digital marketing method of targeting very specific clients. MavenUp Creatives will help you prepare an effective PPC campaign, to make the most out of the money spent on Ads.</p>
             <div class="stop-btn">
                <a href="{{ route('admin.ppc')}}" class="view-stop det-stop-btn">view details</a>
              </div>
            </div>
          </div>
           <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="box">
              <div class="icon-img"><img src="{{asset('./img/digital-marketing/app-marketing.png')}}" class="web" alt="APP Marketing"></div>
              <h4 class="title"><a href="{{ route('admin.appMarketing')}}">APP MARKETING</a></h4>
              <p class="description">App Marketing is also an important part of our Digital Marketing that we offer for our valued clients. We offer customized packages to promote clients’ mobile and web based applications.</p>
             <div class="stop-btn">
                <a href="{{ route('admin.appMarketing')}}" class="view-stop det-stop-btn">view details</a>
              </div>
            </div>
          </div>
<!--            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="box">
              <div class="icon-img"><img src="{{asset('./img/digital-marketing/public-relations.png')}}" class="web" alt="Public Relations"></div>
              <h4 class="title"><a href="{{ route('admin.publicRelation')}}">PUBLIC RELATIONS</a></h4>
              <p class="description">Local Business Listing Optimization is area specific and it is one of the key factors in generating leads towards your business website, and social media pages as well. </p>
             <div class="stop-btn">
                <a href="{{ route('admin.publicRelation')}}" class="view-stop det-stop-btn">view details</a>
              </div>
            </div>
          </div> -->
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="box">
              <div class="icon-img"><img src="{{asset('./img/digital-marketing/local-seo.png')}}" class="web" alt="Local SEO"></div>
              <h4 class="title"><a href="{{ route('admin.localSeo')}}">LOCAL SEO</a></h4>
              <p class="description">Maven Websol unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
</p>
               <div class="stop-btn">
                <a href="{{ route('admin.localSeo')}}" class="view-stop det-stop-btn">view details</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="box">
              <div class="icon-img"><img src="{{asset('./img/digital-marketing/inbound-marketing.png')}}" class="web" alt="Inbound Marketing"></div>
              <h4 class="title"><a href="{{ route('admin.reputation')}}">online reputation management</a></h4>
              <p class="description">Maven Websol unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
</p>
             <div class="stop-btn">
                <a href="{{ route('admin.reputation')}}" class="view-stop det-stop-btn">view details</a>
              </div>
            </div>
          </div>
          

        </div>
      </div>
  </div>
    </section>

    <!-- Stop-solution-section -->


 

<!--==========================
      business-talk-section
    ============================-->

@include('graphicDesign.service_form')

<!-- business-talk-section --> 



 
 @include('../Layout.footer')

</main>
</body>