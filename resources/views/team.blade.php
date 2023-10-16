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
                            <h2 style="color: #00247e !important;">Minds Behind Zariq</h2>
                        </div>
                        <!-- <div class="breatcome_content">
                            <ul>
                                <li><a href="../index.html">Home</a> <i class="fa fa-angle-right"></i> <a href="#"> Teams</a> <i class="fa fa-angle-right"></i> <span>Team Details</span></li>
                            </ul>
                        </div> -->
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

    <div class="team_area pt-80 pb-75" style="background-image:url({{ asset('new/assets/images/team-bg2.jpg')}})"; >
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="single_team mb-4">
              <div class="single_team_thumb">
                <img src="{{ asset('new/assets/images/team/photo_194188122.jpg')}}" alt="A M Robiul Islam" class="teamPhotoCss" />
                <div class="single_team_icon">
                  <a href="https://www.facebook.com/cserobiul" target="_new"><i class="fa fa-facebook"></i></a>
                  <a href="https://twitter.com/cserobiul" target="_new"><i class="fa fa-twitter"></i></a>
                  <a href="https://bd.linkedin.com/in/cserobiul" target="_new"><i class="fa fa-linkedin"></i></a>
                  <a href="https://apol.com.bd/" target="_new"><i class="fa fa-github"></i></a>
                </div>
              </div>
              <div class="single_team_content">
                <h4><a href="/team/team-details" class="text-dark">A M Robiul Islam</a></h4>
                <span>ADVISER</span>
              </div>
            </div>        
          </div>
                  
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="single_team mb-4">
              <div class="single_team_thumb">
                <img src="{{ asset('new/assets/images/team/photo_194188122.jpg')}}" alt="Ahsan Habib Talha" class="teamPhotoCss" />
                <div class="single_team_icon">
                  <a href="https://www.facebook.com/zariqbd/" target="_new"><i class="fa fa-facebook"></i></a>
                  <a href="https://twitter.com/zariqbd" target="_new"><i class="fa fa-twitter"></i></a>
                  <a href="https://www.linkedin.com/in/zariqbd/" target="_new"><i class="fa fa-linkedin"></i></a>
                  <a href="#" target="_new"><i class="fa fa-github"></i></a>
                </div>
              </div>
              <div class="single_team_content">
                <h4><a href="/team/team-details" class="text-dark">Ahsan Habib Talha</a></h4>
                <span>ADVISER</span>
              </div>
            </div>    
          </div>
                  
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="single_team mb-4">
              <div class="single_team_thumb">
                <img src="{{ asset('new/assets/images/team/photo_194188122.jpg')}}" alt="Zafor" class="teamPhotoCss" />
                <div class="single_team_icon">
                  <a href="https://www.facebook.com/zariqbd/" target="_new"><i class="fa fa-facebook"></i></a>
                  <a href="https://twitter.com/zariqbd" target="_new"><i class="fa fa-twitter"></i></a>
                  <a href="https://www.linkedin.com/in/zariqbd/" target="_new"><i class="fa fa-linkedin"></i></a>
                  <a href="#" target="_new"><i class="fa fa-github"></i></a>
                </div>
              </div>
              <div class="single_team_content">
                <h4><a href="/team/team-details" class="text-dark">Zafor</a></h4>
                <span>Chairman</span>
              </div>
            </div>
          </div>
                  
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="single_team mb-4">
              <div class="single_team_thumb">
                <img src="{{ asset('new/assets/images/team/photo_194188122.jpg')}}" alt="Md Jayed Hasan Emran" class="teamPhotoCss" />
                <div class="single_team_icon">
                  <a href="https://www.facebook.com/csejayed/" target="_new"><i class="fa fa-facebook"></i></a>
                  <a href="https://twitter.com/csejayed" target="_new"><i class="fa fa-twitter"></i></a>
                  <a href="https://www.linkedin.com/in/csejayed/" target="_new"><i class="fa fa-linkedin"></i></a>
                  <a href="#" target="_new"><i class="fa fa-github"></i></a>
                </div>
              </div>
              <div class="single_team_content">
                <h4><a href="/team/team-details" class="text-dark">Md Jayed Hasan Emran</a></h4>
                <span>Managing Director</span>
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