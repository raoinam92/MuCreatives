    

<!--==========================
    Footer
  ============================-->
<footer id="footer" class="section-bg">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="footer-info">
                                <img src="{{asset('./img/mavenup-creative-logo-white.png')}}" class="footer-logo" alt="footer logo">x
                                <p>MavenUp Creatives is incepted with a vision to serve the software/IT industry with most professional services in the Lahore. </p>
                            </div>
                        </div>
                        <div class="col-sm-2dot4">
                            <div class="footer-links">
                                <h4>Services</h4>
                                <ul>
                                    <!--<li><a href="/website-development">Website Development</a></li>-->
                                    <!--<li><a href="/graphic-designing">Graphic Designing</a></li>-->
                                    <!--<li><a href="/e-commerce-portals">E-Commerce</a></li>-->
                                    <!--<li><a href="/mobile-development.php">Mobile Development</a></li>-->
                                    <!--<li><a href="/web-application">Web Application</a></li>-->
                                    <!--<li><a href="/digital-marketing">Digital Marketing</a></li>-->
                                <!--     <li><a href="{{route('admin.smmpage')}}">Social Media Marketing</a></li>-->
                                <!--<li><a href="{{route('admin.seolandingpage')}}">SEO</a></li>-->
                                <!--<li><a href="{{route('admin.landingpage')}}">Web Development</a></li>-->
                                                                <li><a href="{{route('admin.webdev')}}">Web Development</a></li>
                                <li><a href="{{route('admin.customdev')}}">Custom Software Development</a></li>
                                <li><a href="{{route('admin.seo')}}">SEO Expertise</a>
                                                </li>
                                                <li><a href="{{route('admin.smm')}}">Social Media Management</a>
                                                </li>
                                </ul>
                            </div>
                        </div>
                        <!--<div class="col-sm-2dot4">-->
                        <!--    <div class="footer-links">-->
                        <!--        <h4>Sitemap</h4>-->
                        <!--        <ul>-->
                        <!--            <li><a href="/about">About</a></li>-->
                        <!--            <li><a href="/services">Services</a></li>-->
                        <!--            <li><a href="/industries">Industries</a></li>-->
                        <!--            <li><a href="/partnership">Partnership</a></li>-->
                        <!--            <li><a href="/contact">Contact</a></li>-->
                        <!--            <li><a href="https://www.mavenup.com/blog/">Blogs</a></li>-->
                        <!--        </ul>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="col-sm-2dot4">
                            <div class="footer-links">
                                <h4>Contact</h4>
                                <p><i class="fa fa-phone-square"> </i> <a href="tel:+924235139999">(042) 35139999 </a></p>
                                <p><i class="fa fa-envelope"> </i> <a href="mailto:info@mavenup.com">info@mavenup.com</a></p>
                                <p><i class="fa fa-location-arrow"> </i> <a href="https://www.google.com/maps?cid=17164927690400725561">372-2 Sector- C2,Township, Lahore.</a></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-links">
                                <h4>Follow Us</h4>
                            <div class="fb-page" data-href="https://www.facebook.com/MavenUp/" data-tabs="timeline" data-width="350px" data-height="250px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/MavenUp/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/MavenUp/">MavenUp Creatives Private Limited</a></blockquote></div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-social-icons">
                        <div class="social-links">
                            <a href="https://twitter.com/mavenupofficial" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.facebook.com/MavenUp/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/mavenupcreatives/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/mavenup" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a>
                            <a href="https://youtube.com/c/MavenUpOfficial" target="_blank" class="linkedin"><i class="fa fa-youtube"></i></a>
                            <a href="https://www.behance.net/MavenUpCreatives" target="_blank" class="linkedin"><i class="fa fa-behance"></i></a>
                            <a href="https://www.pinterest.com/MavenUp/" target="_blank" class="linkedin"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            MavenUp Creatives All Rights Reserved.©Copyrights 2019.
        </div>
    </div>
</footer>

<!-- #footer -->

<!--<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>-->
<a onclick="topFunction()" id="myBtn" title="Go to top" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

<!-- Uncomment below i you want to use a preloader -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-80917351-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-80917351-2');
</script>

<!-- <div id="preloader"></div> -->
<!-- JavaScript Libraries -->
<script src="{{asset(('lib/jquery/jquery.min.js'))}}"></script>
<script src="{{asset(('lib/mobile-nav/mobile-nav.js'))}}"></script>
<!--<script src="{{asset(('lib/wow/wow.min.js'))}}"></script>-->
<script src="{{asset(('lib/counterup/counterup.min.js'))}}"></script>



<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<!-- Contact Form JavaScript File -->
<!-- Template Main Javascript File -->
<script src="{{ asset(('js/main.js'))}}"></script>


<script src="{{ asset(('lib/js/bootstrap.min.js'))}}"></script>

<!-- Form Validation -->
<script src="{{ asset(('js/prism.js'))}}"></script>
<script src="{{ asset(('js/intlTelInput.js'))}}"></script>
<script src="{{ asset(('js/countrySync.js.ejs'))}}"></script>
<script class="iti-load-utils" async="" src="{{ asset(('js/utils.js?1551697588835'))}}"></script>

<script>
$(document).ready(function(){
debugger;
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});



$.ajax({
type : "GET",
url: "{{route('getip')}}",
success:function(response)
{
if(response !='')
{
var d = response;
d = d.toLowerCase();
var sortBySelect = document.querySelector("select#address-country"); 
sortBySelect.value = d; 
sortBySelect.dispatchEvent(new Event("change"));

}
},

});

});

</script>
</html>


