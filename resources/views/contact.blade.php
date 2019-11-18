<!DOCTYPE html>
<html>
<head>
    @include('Layout.head')
<style>
    .descr-icon p a:hover {
    color: #fb7c47!important;
}
.leadership-section #ux-ui-subscribe-from {
    display: none;
}
.leadership-section .container.business-form-popup {
    display: none;
}
.leadership-section .col-md-2 {
    display: none;
}
.leadership-section .col-lg-8 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
}
.subscribe-box #business-talk-section {
    display: none;
}
.lhr-img {
    margin-top: -45px;
}
</style>

</head>
<body>

@include('Layout.header')

<link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}" >

  <!--==========================
    Intro Section
============================-->
  <main id="main" wow bounceInUp data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
    <!--==========================
      Services-section-Start
============================-->
    <section>
      <div id="design-ui-main" class="mu-weuimu-bg">
        <div class="container-fluid">
          <div class="muser-main-heading">
            <h1>contact</h1>
          </div>
        </div>
      </div>
    </section>
    
    <!--==========================
     Stop-solution-section
    ============================-->
    <section id="stop-solution-section" class="leadership-section" wow bounceInUp data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
      <div class="container-fluid">
        <div class="container">
          <div class="muser-main-heading">
            <h2>Let’s Talk Business</h2>
          </div>
          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
              <div class="aboutmu-detail-para">
                <p>Call or email us for further queries and for placing an order for the digital services and for ideal partnership deals, and online success if you want to attain it right now!</p>
              <br>
              </div>
              
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
          </div>
          <div class="row">
            <div class="col-md-4 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
              <div class="box">
                <div class="icon-img">
                  <img class="lhr-img" src="{{asset('img/contact/lahore.png')}}" class="web" alt="Lahore">
                </div>
                <h4 class="title"><a href="">lahore</a></h4>
                <div class="descr-icon">
                  <p><a href="tel:+92-423-513-99-99"><i class="fa fa-phone-square"> </i> +92-423-513-99-99</a></p>
                     <p><a href="mailto:info@mavenwebsol.com"><i class="fa fa-phone-square"> </i> info@mavenup.com</a></p>
                      <p><a href="https://www.google.com/maps?cid=17164927690400725561" target="_blank"><i class="fa fa-phone-square"> </i> 372-2 Sector- C2,Township, Lahore.</a></p>
                </div>
                
              </div>
            </div>
            
            <div class="col-md-8 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
              @include('graphicDesign.service_form')
            </div>
            
          </div>
          <!--<div class="row">-->
          <!--  <div class="col-lg-1"></div>-->
          <!--  <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">-->
          <!--    <div class="box">-->
          <!--      <div class="icon-img">-->
          <!--        <img src="{{asset('img/contact/dubai.png')}}" class="web" alt="dubai">-->
          <!--      </div>-->
          <!--      <h4 class="title"><a href="">dubai</a></h4>-->
          <!--      <div class="descr-icon">-->
          <!--        <p><a href="tel:+92-423-513-99-99"><i class="fa fa-phone-square"> </i> +92-423-513-99-99</a></p>-->
          <!--           <p><a href="mailto:info@mavenwebsol.com"><i class="fa fa-phone-square"> </i> info@mavenup.com</a></p>-->
          <!--            <p><a href="#"><i class="fa fa-phone-square"> </i> 372-2 Sector- C2,Township, Lahore.</a></p>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--  <div class="col-lg-2"></div>-->
          <!--  <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">-->
          <!--    <div class="box">-->
          <!--      <div class="icon-img">-->
          <!--        <img src="{{asset('img/contact/norway.png')}}" class="web" alt="norway">-->
          <!--      </div>-->
          <!--      <h4 class="title"><a href="">norway</a></h4>-->
          <!--      <div class="descr-icon">-->
          <!--        <p><a href="tel:+92-423-513-99-99"><i class="fa fa-phone-square"> </i> +92-423-513-99-99</a></p>-->
          <!--           <p><a href="mailto:info@mavenwebsol.com"><i class="fa fa-phone-square"> </i> info@mavenup.com</a></p>-->
          <!--            <p><a href="#"><i class="fa fa-phone-square"> </i> 372-2 Sector- C2,Township, Lahore.</a></p>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--  <div class="col-lg-1"></div>-->
          <!--</div>-->

        </div>
      </div>
    </section>
    <!-- Stop-solution-section -->
<!--==========================
      business-talk-section 
    ============================-->
   <div class="subscribe-box"> 
  @include('graphicDesign.service_form')
</div>

<!--==========================
      Google-map-section
    ============================-->

<!--<iframe src="https://www.google.com.pk/maps/d/u/0/embed?mid=1QJXSr1joGS7TEcgnLLPo8TxIL_CfJ9jm" width="100%" height="480"></iframe>-->
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13616.192011282681!2d74.2989399!3d31.4403454!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xee3612ca6d99fa39!2sMavenUp%20Creatives%20(Pvt)%20Ltd!5e0!3m2!1sen!2s!4v1571301457577!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
   
   


  <!--==========================
    Footer
  ============================-->
@include('Layout.footer')

</main>
</body>