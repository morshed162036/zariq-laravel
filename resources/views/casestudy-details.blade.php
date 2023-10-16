@extends('layout.main')

@section('content')
    @include('layout.menu')

    <!--==================================================-->
    <!----- Start Banner Area ----->
    <!--==================================================-->

    <div
      class="breatcome_area d-flex align-items-center breatcome_area_custom"
      style="background-image: url({{ asset('new/assets/images/header/case-study.jpg') }})"
      ;
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breatcome_title">
              <div class="breatcome_title_inner pb-2">
                <h2 style="color: #00247e !important">Case Study Details</h2>
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
    <!----- Start Case Study Details Area ----->
    <!--==================================================-->

    <div class="case-study-details-area pt-85 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="single-case-study-details">
              <div class="row">
                <div class="col-lg-6">
                  <div class="case-study-details-thumb">
                    <img
                      src="{{ asset('new/assets/images/case-study/photo_93894282.png') }}"
                      alt="Swodesh Bazar"
                    />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="case-study-details-content ml-4 pt-80">
                    <div class="case-study-details-title">
                      <h3>Case Study Information</h3>
                    </div>
                    <div class="case-study-details-content-inner">
                      <ul>
                        <li><span>Project Name</span>: Swodesh Bazar</li>
                        <li><span>Category</span>: Ecommerce</li>
                        <li><span>Client</span>: G M Akkas Ali</li>
                        <li><span>Complete</span>:01 Jan 1970</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="case-study-details-full">
              <div class="case-study-details-full-inner">
                <div class="case-study-details-full-title pt-5 pb-3">
                  <h3>Case Study Details</h3>
                </div>
                <div class="case-study-details-full-content">
                  <p>Solution For E-commerce Website</p>

                  <p>
                    Swodesh Bazar E-commerce Is A Madical And Organic Food
                    Brand. We Are Importing High-quality Madical Product-
                    Glucose Meter, Blood Presure Meter, Shampoo, Lotion, Belt,
                    Diacare, Oil. We Also Producing Organic Food Aswel&nbsp;
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--==================================================-->
    <!----- End Case Study Details Area ----->
    <!--==================================================-->
@endsection