@extends('layout.main')

@section('content')
    @include('layout.menu')

    	<!-- ============================================================== -->
	<!-- Start Techno Breatcome Area -->
	<!-- ============================================================== -->
	<div class="breatcome_area d-flex align-items-center" style="background-image:url({{ asset('new/assets/images/slider/slider-4.jpg') }})">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breatcome_title">
						<div class="breatcome_title_inner pb-2">
							<h2>About Us</h2>
						</div>
						<div class="breatcome_content">
							<ul>
								<li><a href="/">Home</a> <i class="fa fa-angle-right"></i><span>About Us</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Techno Breatcome Area -->
	<!-- ============================================================== -->
	
		<!--==================================================-->
	<!----- Start Techno Why Choose Us Area ----->
	<!--==================================================-->
	<div class="why_choose_area pt-80 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="prfs_experience">
						<div class="headingh_experience_number">
							<h1>3+</h1>
						</div>
						<div class="heading_experience_title">
							<h2>Years of experience in IT Solution & Business</h2>
						</div>	
					</div>
					<div class="heading_experience_text pt-40">
						<p>There are many variations of passages of Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="skill_bar">
						<div class="skill-wrapper">
							<!-- single progress bar -->
							<h6 class="skill-title ">Web Development</h6>
							<div class="progress mb-4">
								<div class="progress-bar" role="progressbar" aria-valuemax="100" style="width: 95%;">
									<span class="ttop">95%</span>
								</div>
							</div>
							<!-- single progress bar -->
							<h6>Web Design</h6>
							<div class="progress mb-4">
								<div class="progress-bar two" role="progressbar" aria-valuemax="100" style="width: 90%;">
									<span class="ttop">90%</span>
								</div>
							</div>
							<!-- single progress bar -->
							<h6>Digital Marketing</h6>
							<div class="progress mb-4">
								<div class="progress-bar three" role="progressbar" aria-valuemax="100" style="width: 85%;">
									<span class="ttop">85%</span>
								</div>
							</div>
							<!-- single progress bar -->
							<h6>Digital Marketing</h6>
							<div class="progress mb-4">
								<div class="progress-bar four" role="progressbar" aria-valuemax="100" style="width: 75%;">
									<span class="ttop">75%</span>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Techno Why Choose Us Area ----->
	<!--==================================================-->
	
	<!--==================================================-->
	<!----- Start Techno Flipbox Top Feature Area ----->
	<!--==================================================-->
	<div class="flipbox_area pages pb-70 two">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
					<div class="techno_flipbox mb-30">
						<div class="techno_flipbox_font">
								<div class="techno_flipbox_inner">
									<div class="techno_flipbox_icon">
										<div class="icon">
											<i class="flaticon-padlock"></i>
										</div>
									</div>			
									<div class="flipbox_title">
										<h3>Software Development</h3>
									</div>
									<div class="flipbox_desc">
										<p>Porem asum molor sit amet, consectetur adipiscing do miusmod tempor.</p>
									</div>
								</div>
						</div>
						<div class="techno_flipbox_back " style="background-image:url({{ asset('new/assets/images/blog1.jpg')}});">
							<div class="techno_flipbox_inner">		
								<div class="flipbox_title">
									<h3>Software Development</h3>
								</div>
								<div class="flipbox_desc">
									<p>To Get Service Details Please Click On Read More Button</p>
								</div>
								<div class="flipbox_button">
									<a href="/service">Read More<i class="fa fa-angle-double-right"></i></a>
								</div>
							</div>
						</div>
					</div>	
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
					<div class="techno_flipbox mb-30">
						<div class="techno_flipbox_font">
								<div class="techno_flipbox_inner">
									<div class="techno_flipbox_icon">
										<div class="icon">
											<i class="flaticon-intelligent"></i>
										</div>
									</div>			
									<div class="flipbox_title">
										<h3>Ecommerce Solution</h3>
									</div>
									<div class="flipbox_desc">
										<p>Porem asum molor sit amet, consectetur adipiscing do miusmod tempor.</p>
									</div>
								</div>
						</div>
						<div class="techno_flipbox_back " style="background-image:url({{ asset('new/assets/images/blog1.jpg')}});">
							<div class="techno_flipbox_inner">		
								<div class="flipbox_title">
									<h3>Ecommerce SolutionInterior Design</h3>
								</div>
								<div class="flipbox_desc">
									<p>To Get Service Details Please Click On Read More Button</p>
								</div>
								<div class="flipbox_button">
									<a href="/service">Read More<i class="fa fa-angle-double-right"></i></a>
								</div>
							</div>
						</div>
					</div>	
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
					<div class="techno_flipbox mb-30">
						<div class="techno_flipbox_font">
								<div class="techno_flipbox_inner">
									<div class="techno_flipbox_icon">
										<div class="icon">
											<i class="flaticon-code"></i>
										</div>
									</div>			
									<div class="flipbox_title">
										<h3>App Development</h3>
									</div>
									<div class="flipbox_desc">
										<p>To Get Service Details Please Click On Read More Button</p>
									</div>
								</div>
						</div>
						<div class="techno_flipbox_back " style="background-image:url({{ asset('new/assets/images/blog1.jpg')}});">
							<div class="techno_flipbox_inner">		
								<div class="flipbox_title">
									<h3>App Development</h3>
								</div>
								<div class="flipbox_desc">
									<p>Porem asum molor sit amet, consectetur adipiscing do miusmod tempor.</p>
								</div>
								<div class="flipbox_button">
									<a href="/service">Read More<i class="fa fa-angle-double-right"></i></a>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>	
	</div>
	<!--==================================================-->
	<!----- End Techno Flipbox Top Feature Area ----->
	<!--==================================================-->
	
	<!--==================================================-->
	<!----- Start Techno Accordion Area ----->
	<!--==================================================-->
	<div class="accordion-area about-pages">
		<div class="container-fluid">
			<div class="row">
				 <div class="col-lg-6 main-accordion-lt">
					<!-- Start Accordion -->
					<div class="acd-items acd-arrow pt-30 pb-30 mr-4">
						<div class="section_title white text_left mb-60 mt-3">
							<div class="section_sub_title uppercase mb-3">
								<h6>WHY CHOOSE US</h6>
							</div>
							<div class="section_main_title">
								<h1>We Provide World Class</h1>
								<h1>IT Solution Service</h1>
							</div>
							<div class="em_bar">
								<div class="em_bar_bg"></div>
							</div>
							
						</div>
						<div class="panel-group symb" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading mb-3">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#ac1"><i class="fa fa-check-circle"></i>
											 Best IT Solution Provider
										</a>
									</h4>
								</div>
								<div id="ac1" class="panel-collapse in">
									<div class="panel-body pl-4 pr-4">
										<p>
										  There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
										</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading mb-3">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#ac2"><i class="fa fa-check-circle"></i>
											 Experienced Engineers
										</a>
									</h4>
								</div>
								<div id="ac2" class="panel-collapse collapse">
									<div class="panel-body pl-4 pr-4">
										<p>
										  There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
										</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading mb-3">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#ac3"><i class="fa fa-check-circle"></i>
											 Internet Of Things
										</a>
									</h4>
								</div>
								<div id="ac3" class="panel-collapse collapse">
									<div class="panel-body pl-4 pr-4">
										<p>
										  There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Accordion -->
				</div>
				<div class="col-lg-6 absod">
					<div class="single-panel">
						<div class="single-panel-thumb">
							<div class="single-panel-thumb-inner">
								<img src="{{ asset('new/assets/images/video1.jpg') }}" alt="" />
							</div>
							<div class="main_video text_center">
								<div class="video-icon">
									<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://youtu.be/ykJFCpzZbac" title="Click To Watch This Video"><i class="fa fa-play"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Techno Accordion Area ----->
	<!--==================================================-->
	
	<!--==================================================-->
	<!----- Start Techno Team Area ----->
	<!--==================================================-->
	 <div class="team_area pt-85 pb-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="section_title text_left mb-60 mt-3">
						<div class="section_sub_title uppercase mb-3">
							<h6>TEAM MEMBER</h6>
						</div>
						<div class="section_main_title">
							<h1>Our Awesome Creative</h1>
							<h1>Team Member</h1>
						</div>
						<div class="em_bar">
							<div class="em_bar_bg"></div>
						</div>
						
					</div>
				</div>
				<div class="col-lg-3">
					<div class="section_button mt-50">
						<div class="button two">
							<a href="/join-us">Join Our Team</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
					<div class="team_style_three mb-30">
						<div class="team_style_three_inner">
							<div class="team_style_three-thumb">
								<div class="team_style_three_thumb_inner">
									<img src="{{ asset('new/assets/images/team/photo_194188122.jpg') }}"
									alt="A M Robiul Islam" />
								</div>
							</div>
							<div class="team_style_three_content">
								<div class="team_style_three_title">
									<h4>A M Robiul Islam</h4>
								</div>
								<div class="team_style_three_sub_title">
									<span>ADVISER</span>
								</div>
								<div class="team_style_three_icon">
									<a href="https://www.facebook.com/cserobiul" target="_new"><i class="fa fa-facebook"></i></a>
									<a href="https://twitter.com/cserobiul" target="_new"><i class="fa fa-twitter"></i></a>
									<a href="https://bd.linkedin.com/in/cserobiul" target="_new"><i class="fa fa-linkedin"></i></a>
									<a href="https://apol.com.bd/" target="_new"><i class="fa fa-github"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
					<div class="team_style_three mb-30">
						<div class="team_style_three_inner">
							<div class="team_style_three-thumb">
								<div class="team_style_three_thumb_inner">
									<img src="{{ asset('new/assets/images/team/photo_194188122.jpg') }}"
									alt="Ahsan Habib Talha" />
								</div>
							</div>
							<div class="team_style_three_content">
								<div class="team_style_three_title">
									<h4>Ahsan Habib Talha</h4>
								</div>
								<div class="team_style_three_sub_title mt-3">
									<span>ADVISER</span>
								</div>
								<div class="team_style_three_icon mt-3">
									<a href="https://www.facebook.com/zariqbd/"><i class="fa fa-facebook"></i></a>
									<a href="https://twitter.com/zariqbd"><i class="fa fa-twitter"></i></a>
									<a href="https://www.linkedin.com/in/zariqbd/"><i class="fa fa-linkedin"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
					<div class="team_style_three mb-30">
						<div class="team_style_three_inner">
							<div class="team_style_three-thumb">
								<div class="team_style_three_thumb_inner">
									<img src="{{ asset('new/assets/images/team/photo_194188122.jpg') }}"
									alt="Zafor" />
								</div>
							</div>
							<div class="team_style_three_content">
								<div class="team_style_three_title">
									<h4>Zafor</h4>
								</div>
								<div class="team_style_three_sub_title">
									<span>Chairman</span>
								</div>
								<div class="team_style_three_icon">
									<a href="https://www.facebook.com/zariqbd/"><i class="fa fa-facebook"></i></a>
									<a href="https://twitter.com/zariqbd"><i class="fa fa-twitter"></i></a>
									<a href="https://www.linkedin.com/in/zariqbd/"><i class="fa fa-linkedin"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
					<div class="team_style_three mb-30">
						<div class="team_style_three_inner">
							<div class="team_style_three-thumb">
								<div class="team_style_three_thumb_inner">
									<img src="{{ asset('new/assets/images/team/photo_194188122.jpg') }}"
									alt="Md Jayed Hasan Emran" />
								</div>
							</div>
							<div class="team_style_three_content">
								<div class="team_style_three_title">
									<h4>Md Jayed Hasan Emran</h4>
								</div>
								<div class="team_style_three_sub_title mt-3">
									<span>Managing Director</span>
								</div>
								<div class="team_style_three_icon mt-3">
									<a href="https://www.facebook.com/csejayed/"><i class="fa fa-facebook"></i></a>
									<a href="https://twitter.com/csejayed"><i class="fa fa-twitter"></i></a>
									<a href="https://www.linkedin.com/in/csejayed/"><i class="fa fa-linkedin"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Techno Team Area ----->
	<!--==================================================-->
	
	
	<!--==================================================-->
	<!----- Start Techno Call Do Action Area ----->
	<!--==================================================-->
	<div class="call_do_action pt-85 pb-130 bg_color" style="background-image:url({{ asset('new/assets/images/slider/slider-4.jpg') }})" >
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section_title white text_center mb-60 mt-3">
						<div class="phone_number mb-3">
							<h5>+880 013 143 206</h5>
						</div>
						<div class="section_main_title">
							<h1>To make requests for the</h1>
							<h1>further information</h1>
						</div>
						<div class="button three mt-40">
							<a href="/contact">Join With Now<i class="fa fa-long-arrow-right"></i></a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Techno Call Do Action Area ----->
	<!--==================================================-->
	
	<!--==================================================-->
	<!----- Start Techno Counter Area ----->
	<!--==================================================-->
	<div class="counter_area">
		<div class="container">
			<div class="row cntr_bg_up nagative_margin pt-50 pb-45">
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="single_counter text_center mb-4">
						<div class="countr_text">
							<h1><span class="counter">100</span><span>+</span> </h1>
						</div>
						<div class="counter_desc">
							<h5>Happy Clients</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="single_counter text_center mb-4">
						<div class="countr_text">
							<h1><span class="counter">250</span><span>+</span> </h1>
						</div>
						<div class="counter_desc">
							<h5>Complete Projects</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="single_counter text_center mb-4">
						<div class="countr_text">
							<h1><span class="counter">10</span><span>+</span> </h1>
						</div>
						<div class="counter_desc">
							<h5>Win Awards</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="single_counter text_center mb-4">
						<div class="countr_text">
							<h1><span class="counter">2000</span><span>k+</span> </h1>
						</div>
						<div class="counter_desc">
							<h5>Trainee</h5>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Techno Counter Area ----->
	<!--==================================================-->
	
	<!--==================================================-->
	<!----- Start Techno Testimonial Area ----->
	<!--==================================================-->
	<div id="testimonial-section" class="testimonial-bg pt-80 pb-70">
        <div id="container-general" class="ready anim-section-features anim-section-desc anim-section-quote">
            <section id="section-quote">
				<div class="col-lg-12">
					<div class="section_title text_center mt-3">
						<div class="section_sub_title uppercase mb-3">
							<h6>TESTIMONIAL</h6>
						</div>
						<div class="section_main_title">
							<h1>Our Happy <span>Clients Says</span></h1>
						</div>
						<div class="em_bar">
							<div class="em_bar_bg"></div>
						</div>
					</div>
				</div>
                <!--Left Bubble Images-->
                <div class="container-pe-quote left">
                    <div class="pp-quote li-quote-1" data-textquote="quote-text-1">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-2" data-textquote="quote-text-2">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-3" data-textquote="quote-text-3">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-4 active" data-textquote="quote-text-4">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-5" data-textquote="quote-text-5">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-6" data-textquote="quote-text-6">
                        <div class="img animated bounce"></div>
                    </div>
                </div>
                <!--Left Bubble Images-->
                <!--Center Testimonials-->
                <div class="container-quote carousel-on">
                    <!--Testimonial 1-->
                    <div class="quote quote-text-3 hide-bottom" data-ppquote="li-quote-3">
                        <p>'Managing everyday banking has finally become fun, fast and easy. Icing on the cake, customer support is super reactive: 5 stars!'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Tom Abel De</div>
                            <div class="job">Digital Marketing</div>
                        </div>
                    </div>
                    <!--Testimonial 2-->
                    <div class="quote quote-text-4 show" data-ppquote="li-quote-4">
                        <p>'Qonto met my needs straight away. ng has finally become fun, fast andCustomer care is awesome! Period.'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Sanuka Santa</div>
                            <div class="job">To To Company</div>
                        </div>
                    </div>
                    <!--Testimonial 3-->
                    <div class="quote hide-bottom quote-text-5" data-ppquote="li-quote-5">
                        <p>'With Qonto, I've been able to order MasterCard cards in seconds. My purchasing team can now be autonomous with their payments. Qonto is game changer.'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Grégoire Pasquet</div>
                            <div class="job">Solf Solution</div>
                        </div>
                    </div>
                    <!--Testimonial 4-->
                    <div class="quote hide-bottom quote-text-6" data-ppquote="li-quote-6">
                        <p>'Qonto? Easy, fast, efficient. Traditionalng has finally become fun, fast and banks' hassles belong to the past!'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Nicolas Puran</div>
                            <div class="job">CEO Founder</div>
                        </div>
                    </div>
                    <!--Testimonial 5-->
                    <div class="quote hide-bottom quote-text-7" data-ppquote="li-quote-7">
                        <p>'Qonto? A flawless UX and a customer service ng has finally become fun, fast and that cares so much. This is just incredible!'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Mathieu Jouhet</div>
                            <div class="job">Freelance @Hello Mat</div>
                        </div>
                    </div>
                    <!--Testimonial 6-->
                    <div class="quote hide-bottom quote-text-8" data-ppquote="li-quote-8">
                        <p>'I needed a bank similar to a SaaS for LiveMentor: ng has finally become fun, fast and I think I found it.'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Charles Jadran</div>
                            <div class="job">Web Development</div>
                        </div>
                    </div>
                    <!--Testimonial 7-->
                    <div class="quote hide-bottom quote-text-9" data-ppquote="li-quote-9">
                        <p>'I can say 'Goodbye' to the banking pains I had to ng has finally become fun, fast and bear with, and 'hello' to a way to do finance that makes sense.'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Digong Frando</div>
                            <div class="job">CEO Officience</div>
                        </div>
                    </div>
                    <!--Testimonial 8-->
                    <div class="quote hide-bottom quote-text-10" data-ppquote="li-quote-10">
                        <p>'Qonto is 100% in tune with what we do at Alan.eu: a user-friendly service, a user-centric interface and a very reactive customer support.'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Charles Samuelian</div>
                            <div class="job">Director & Photo Man</div>
                        </div>
                    </div>
                    <!--Testimonial 9-->
                    <div class="quote hide-bottom quote-text-11" data-ppquote="li-quote-11">
                        <p>'I have been looking for a modern and efficient banking alternative that could support the development of my business. I'm just wondering why Qonto did not exist before!'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Khatry Firmanio</div>
                            <div class="job">CEO Company</div>
                        </div>
                    </div>
                    <!--Testimonial 10-->
                    <div class="quote hide-bottom quote-text-13" data-ppquote="li-quote-13">
                        <p>'That's just perfect - It rocks baby! ng has finally become fun, fast and You wanna apply at TheFamily? Use Qonto first.'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Jadran Parvej Imon</div>
                            <div class="job">CEO Managar</div>
                        </div>
                    </div>
                    <!--Testimonial 11-->
                    <div class="quote quote-text-1 hide-bottom" data-ppquote="li-quote-1">
                        <p>'I wish I could have had Qonto ng has finally become fun, fast andenrolled in the Techstars Paris's first batch!'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Bertier Luyt</div>
                            <div class="job">Managing Director</div>
                        </div>
                    </div>
                    <!--Testimonial 12-->
                    <div class="quote quote-text-2 hide-bottom" data-ppquote="li-quote-2">
                        <p>'Thanks to a slick interface and simple ng has finally become fun, fast and features, managing payments and expenses has become a piece of cake!'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Darpon Abir Khan</div>
                            <div class="job">Founder Officience</div>
                        </div>
                    </div>
                </div>
                <!--Right Bubble Images-->
                <div class="container-pe-quote right">
                    <div class="pp-quote li-quote-7" data-textquote="quote-text-7">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-8" data-textquote="quote-text-8">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-9" data-textquote="quote-text-9">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-10" data-textquote="quote-text-10">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-11" data-textquote="quote-text-11">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-13" data-textquote="quote-text-13">
                        <div class="img animated bounce"></div>
                    </div>
                </div>
            </section>
        </div>
    </div>
	<!--==================================================-->
	<!----- End Techno Testimonial Area ----->
	<!--==================================================-->
	
	<!--==================================================-->
	<!----- Start Techno Brand Area ----->
	<!--==================================================-->
	<div class="brand_area bg_color2 pt-35 pb-15">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
					<div class="row">
						<!--brand owl curousel -->
						<div class="brand_list owl-carousel curosel-style">
							<!-- Start Single Brand -->
							<div class="col-lg-12">
								<div class="single_brand mt-3 mb-5">
									<div class="single_brand_thumb">
										<img src="{{ asset('new/assets/images/brand/1.png')}}" alt="" />
									</div>
								</div>
							</div>
							<!-- Start Single Brand -->
							<div class="col-lg-12">
								<div class="single_brand mt-3 mb-5">
									<div class="single_brand_thumb">
										<img src="{{ asset('new/assets/images/brand/2.png')}}" alt="" />
									</div>
								</div>
							</div>
							<!-- Start Single Brand -->
							<div class="col-lg-12">
								<div class="single_brand mt-3 mb-5">
									<div class="single_brand_thumb">
										<img src="{{ asset('new/assets/images/brand/3.png')}}" alt="" />
									</div>
								</div>
							</div>
							<!-- Start Single Brand -->
							<div class="col-lg-12">
								<div class="single_brand mt-3 mb-5">
									<div class="single_brand_thumb">
										<img src="{{ asset('new/assets/images/brand/4.png')}}" alt="" />
									</div>
								</div>
							</div>
							<!-- Start Single Brand -->
							<div class="col-lg-12">
								<div class="single_brand mt-3 mb-5">
									<div class="single_brand_thumb">
										<img src="{{ asset('new/assets/images/brand/5.png')}}" alt="" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Techno Brand Area ----->
	<!--==================================================-->
@endsection