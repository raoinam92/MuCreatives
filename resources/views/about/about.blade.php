<!DOCTYPE html>
<html>
<head>
    @include('Layout.head')

<style>
    .board-main-heading h2 {
    color: #fafafa!important;
    animation: marquee 50s linear infinite;
}
.liner-board-director  {
    background-image: linear-gradient(to top, #d1d1d1 0%, #fafafa 100%)!important;
    background-color:#fafafa!important;
}
#process-ban-section .process-main-heading h2,#aboutmu-video-section .muser-main-heading h1,#aboutmu-technologies-section .muser-main-heading h1{
        animation: marquee 50s linear infinite;
}
</style>

</head>
<body>

@include('Layout.header')
<link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}" >

<!--==========================
    Intro Section
============================-->
<main id="main">
	<!--==========================
      Services-section-Start
============================-->
	<section id="aboutmu-main" class="mu-aboutmu-bg">
		<div class="container-fluid">
			<div class="muser-main-heading">
				<h1>about maven</h1>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="aboutmu-detail-para">
							<p>MavenUp Creatives is one of the fastest-growing Information Technology and Digital Marketing firms that is focused on giving quality services. With a vision of serving our valuable clients for the greater good of being in the virtual world, our top perspective is to serve the online users and business people, who want to have their websites and increase long-term revenues, reaching out to new corridors of success in the virtual world with effective digital marketing strategies. MavenUp Creatives was founded with a vision to provide excellence in web development, web designing, e-commerce and the digital marketing industry to individuals and corporations. We always keep our values alive, serve the people at affordable rates, and let them flourish even if we have to go some extra miles ahead of our commitment plans, and the signed agreements with them.</p>
						</div>
					</div>
					<div class="col-md-2"></div>
				</div>
				<div class="See-btn"> <a href="#about" class="btn-get-started scrollto download-btn">Download Company Profile</a>
				</div>
			</div>
		</div>
	</section>
	<!-- # Services headS section -->
	<!--==========================
     aboutleader-ship-section
    ============================-->
	<section id="aboutleader-section" class="leadership-section">
		<div class="container-fluid">
			<div class="container-fluid">
				<div class="muser-main-heading">
					<h1>leadership</h1>
				</div>
				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<div class="aboutmu-detail-para">
							<p>At MavenUp Creatives, the team is highly professional, who can meet the international standards. Our educated, highly skilled, and a passionate team comprises of CEO and Directors, who are well versed with precise rules of the business world. Our Founder envisaged MavenUp as a software/IT firm that can provide digital solutions to the industry with its software app development with digital marketing expertise, and to open up new horizons of the scope of business that may stretch to media, real estate, business consultancy and a lot more to be in a pipeline.</p>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
				</div>
			</div>
			<div class="board-main-heading">
				<h2>board of</h2>
			</div>
			<div class="bord-nagi">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="ceo-pik">
								<img src="{{asset('./img/about/ceo-pik.png')}}">
								<div class="don-arrow">
									<img src="{{asset('./img/about/down-arrow.png')}}">
								</div>
								<h2>ahsan sohail</h2>
								<p>founder & ceo</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="dircs-pik">
								<img src="{{asset('./img/about/director-1.png')}}">
								<div class="don-arrow">
									<img src="{{asset('./img/about/down-arrow.png')}}">
								</div>
								<h2>m.inam ul haq</h2>
								<p>Co-Founder & director</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="dircs-pik">
								<img src="{{asset('./img/about/director-2.png')}}">
								<div class="don-arrow">
									<img src="{{asset('./img/about/down-arrow.png')}}">
								</div>
								<h2>osama m.ashraf</h2>
								<p>Co-Founder & director</p>
							</div>
						</div>
					</div>
				</div>
				<div class="liner-board-director"></div>
			</div>
			<div class="director-marg">
				<div class="board-main-heading">
					<h2>directors</h2>
				</div>
				<div class="bord-nagi">
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<div class="ceo-pik">
									<img src="{{asset('./img/about/director-3.png')}}">
									<div class="don-arrow">
										<img src="{{asset('./img/about/down-arrow.png')}}">
									</div>
									<h2>asad jalil</h2>
									<p>director</p>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="dircs-pik">
									<img src="{{asset('./img/about/director-4.png')}}">
									<div class="don-arrow">
										<img src="{{asset('./img/about/down-arrow.png')}}">
									</div>
									<h2>qazi omer</h2>
									<p>director</p>
								</div>
							</div>
						</div>
					</div>
					<div class="liner-board-director"></div>
				</div>
			</div>
		</div>
		<div class="See-btn testi"> <a href="#about" class="btn-get-started scrollto download-btn">See All Testimonials</a>
		</div>
	</section>
	<!-- aboutleader-ship-section -->
	<!--==========================
     our process-section
    ============================-->
	<section id="process-ban-section" class="process-section">
		<div class="container-fluid">
			<div class="container">
				<div class="process-main-heading">
					<h2>our process</h2>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="proc-vec-img">
							<img src="{{asset('./img/about/our-process-vector.png')}}">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="proc-one">
							<div class="our-process">
								<div class="num">
									<h3>01</h3>
								</div>
								<div class="right-bar">
									<h2>Client Collaboration</h2>
									<p>We always collaborate and communicate with the client as much as possible to clarify any concepts, idea generation, and the preparation of need analysis report. In this step, we jot down all the requirements for us to fluently complete the project.</p>
								</div>
							</div>
						</div>
						<div class="process-first">
							<div class="our-process">
								<div class="num">
									<h3>02</h3>
								</div>
								<div class="right-bar">
									<h2>UI & UX Designs</h2>
									<p>The website design is subject to easy user interface and practical user experience, which is one of our key factors of success and client satisfaction.</p>
								</div>
							</div>
						</div>
						<div class="process-sec">
							<div class="our-process">
								<div class="num">
									<h3>03</h3>
								</div>
								<div class="right-bar">
									<h2>Development</h2>
									<p>After the design is fully complete and approved by the client, we start working on the development of the design. Our experts always make sure that the developed website, app or software is in full assertion with the approved design.</p>
								</div>
							</div>
						</div>
						<div class="process-third">
							<div class="our-process">
								<div class="num">
									<h3>04</h3>
								</div>
								<div class="right-bar">
									<h2>Development</h2>
									<p>We never let our clients down, and that’ why at the end of the process, our quality assurance department reviews the whole work before it is sent to the client for a final review.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--==========================
     aboutmu-video-section
    ============================-->
	<section id="aboutmu-video-section" class="video-section">
		<div class="container-fluid">
			<div class="container">
				<div class="muser-main-heading">
					<h1>happy clients</h1>
				</div>
				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<div class="mu-vieo">
							<iframe width="100%" height="380px" src="https://www.youtube.com/embed/o603zVhDhlU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
				</div>
				<div class="See-btn"> <a href="#about" class="btn-get-started scrollto download-btn">See All Testimonials</a>
				</div>
			</div>
		</div>
	</section>
	<!-- aboutmu-video-section -->
	<!--==========================
     technologies-images-section
    ============================-->
	<section id="aboutmu-technologies-section" class="technologies-section">
		<div class="container-fluid technelogy-about">
			<div class="container">
				<div class="muser-main-heading">
					<h1>technologies</h1>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="cod-img">
							<img src="{{asset('./img/about//tech-lang-bg.jpg')}}">
						</div>
					</div>
				</div>
			</div>
			<!-- technologies-images-section -->
			<div class="container subsc-form-popup">
				<div class="wrap-contact100">
					<div class="subscribe-text">
						<h4>Subscribe for our newsletter & blogs to get updated information on how the technology world is evolving!</h4>
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
		</div>
	</section>
	<!-- #testimonials -->
	<!--==========================
    Blogs section start
  ============================-->
	<!--==========================
      MUservices-detail-section
    ============================-->
	<section id="about-collab-section" class="collab-section">
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="digital-full-text">
							<div class="digital-text">
								<h2>collab</h2>
							</div>
							<div class="marketing-text">
								<h3>with maven up</h3>
							</div>
						</div>
						<div class="See-btn"> <a href="#about" class="btn-get-started scrollto see-btn">Start A Venture Together</a>
						</div>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<div class="digital-full-text"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- MUservices-detail-section -->
	<!--==========================
    Blogs
  ============================-->
    @include('Layout.footer')
</main>
</body>
