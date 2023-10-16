@extends('layout.main')

@section('content')
    @include('layout.menu')
    <!-- ============================================================== -->
	<!-- Start Techno Breatcome Area -->
	<!-- ============================================================== -->
	<div class="breatcome_area d-flex align-items-center" style="background: url({{ asset('new/assets/images/slider/slider-10.jpg') }})">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breatcome_title">
						<div class="breatcome_title_inner pb-2">
							<h2>Join With Us </h2>
						</div>
						<div class="breatcome_content">
							<ul>
								<li><a href="/">Home</a> <i class="fa fa-angle-right"></i> <span>Join With Us</span></li>
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
	<!----- Start Techno Contact Address Area ----->
	<!--==================================================-->
	<div class="contact_address_area pt-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single_contact_address_two">
						<div class="single_contact_address_two_icon">
							<div class="icon">
								<i class="flaticon-global-1"></i>
							</div>
						</div>
						<div class="single_contact_address_two_content">
							<h5>House # 536, Road 7 Avenue 6, Mirpur DOHS, Dhaka 1216</h5>
							<span>OFFICE ADDRESS</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single_contact_address_two">
						<div class="single_contact_address_two_icon">
							<div class="icon">
								<i class="flaticon-global-1"></i>
							</div>
						</div>
						<div class="single_contact_address_two_content">
							<h5>info@zariq.com.bd</h5>
							<span>Our Mail</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single_contact_address_two">
						<div class="single_contact_address_two_icon">
							<div class="icon">
								<i class="flaticon-global-1"></i>
							</div>
						</div>
						<div class="single_contact_address_two_content">
							<h5>+8801714024689</h5>
							<span>Phone Number</span>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Techno Contact Address Area ----->
	<!--==================================================-->
	
	<!--==================================================-->
	<!----- Start Techno Contact Area ----->
	<!--==================================================-->
	<div class="contact_sm_area pt-80 pb-80">
		<div class="container">
			<div class="row cnt_box align-items-center">
				<div class="col-lg-6 p-0">
					<div class="single_contact_rt_thumb">
						<img src="{{ asset('new/assets/images/new/ap.jpg') }}" alt="" />
					</div>
				</div>
				<div class="col-xl-6 pl-5">
					<div class="contact_sm_title pb-3">
						<h2>Send Your CV</h2>
					</div>
					<div class="quote_wrapper">
						<form id="contact_form" action="mail.php" method="POST" >
							<div class="row">
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="text" name="name"  placeholder="Name">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="email" name="email" placeholder="Email Address">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="text" name="phone" placeholder="Phone Number">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="text" name="web" placeholder="Website">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form_box mb-30">
										<input type="file" name="cv" placeholder="Upload Your Cv">
									</div>
								</div>
								
								<div class="col-lg-12">
									<div class="form_box mb-30">
										<textarea name="message" id="message" cols="30" rows="10" placeholder="Write a Message"></textarea>
									</div>
									<div class="quote_btn">
										<button class="btn" type="submit">Free Consultancy</button>
									</div>
								</div>
                                
							</div>
						</form>
						<p class="form-message"></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Techno Contact Area ----->
	<!--==================================================-->
@endsection