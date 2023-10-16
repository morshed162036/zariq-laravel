@extends('layout.main')

@section('content')
    @include('layout.menu')

    <!--==================================================-->
    <!----- Start Banner Area ----->
    <!--==================================================-->

    <div class="breatcome_area d-flex align-items-center breatcome_area_custom" style="background-image:url({{ asset('new/assets/images/team/Team-banner.jpg') }})";>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breatcome_title">
                        <div class="breatcome_title_inner pb-2" >
                            <h2 style="color: #00247e !important;">Team Details</h2>
                        </div>
                        <div class="breatcome_content">
                            <ul>
                                <li ><a href="/" style="color: #00247e !important;">Home</a> <i class="fa fa-angle-right" style="color: #00247e !important;"></i> <a href="/team" style="color: #00247e !important;"> Teams</a> <i class="fa fa-angle-right" style="color: #00247e !important;"></i> <span style="color: #00247e !important;">Team Details</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Banner Area ----->
    <!--==================================================-->

  
    <!--==================================================-->
    <!----- Start Team Area ----->
    <!--==================================================-->

    <div class="team_details_area pt-20 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-case-study-details ">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="case-study-details-thumb">
    
                                    <img src="{{ asset('new/assets/images/team/photo_194188122.jpg') }}" alt="Md Jayed Hasan Emran" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="case-study-details-content ml-4 pt-30">
                                    <div class="case-study-details-title pb-3">
                                        <h3>Md Jayed Hasan Emran</h3>
                                    </div>
                                    <div class="case-study-details-content-inner">
                                        <ul>
                                            <li><span>Job Title</span>: Managing Director</li>
                                            <li><span>Experience</span>: 9 Years</li>
                                            <li><span>Email</span>: info@zariq.com.bd</li>
                                            <li><span>Phone</span>: 01714024689</li>
                                            <li><span>About</span>: <p>I&rsquo;m ,Md Jayed Hasan Emran, working with Zariq Limited in top management.<br />
    I have held top label office responsibilities. Apol and Daily Shop are among them. Both companies have given me the opportunity to apply my roles. For this both of these companies are now operating very well.</p>
    
    <p>I hope to use my experience to take Zariq Limited&rsquo;s management level one step further, Insha-Allah</p> </li>
                                        </ul>
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
    <!----- End Techno Process Area ----->
    <!--==================================================-->
@endsection