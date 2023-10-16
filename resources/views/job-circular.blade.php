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
							<h2>Job Circular </h2>
						</div>
						<div class="breatcome_content">
							<ul>
								<li><a href="/">Home</a> <i class="fa fa-angle-right"></i> <span>Job Circular</span></li>
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
	<div style="height: 300px;position:relative;">
        <h1 style="top:35%; left:30% ;position:absolute;">No Position Available Right Now</h1>
    </div>
	
@endsection