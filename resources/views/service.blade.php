@extends('layout.main')

@section('content')

    @include('layout.menu')

    <!--==================================================-->
    <!----- Start Banner Area ----->
    <!--==================================================-->

    <div
      class="breatcome_area d-flex align-items-center breatcome_area_custom"
      style="background-image: url({{ asset('new/assets/images/header/portfolio.jpg')}})"
      ;
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breatcome_title">
              <div class="breatcome_title_inner pb-2">
                <h2 style="color: #00247e !important">Services</h2>
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

    <div class="portfolio_area pt-80 pb-70" id="portfolio">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="section_title text_center mb-50 mt-3">
                <div class="section_main_title">
                  <h1>Our Survices For</h1>
                  <h1>Your Business</h1>
                </div>
                <div class="em_bar">
                  <div class="em_bar_bg"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio_nav">
                <div class="portfolio_menu">
                  <ul class="menu-filtering">
                    <li class="current_menu_item" data-filter="*">
                      All Services
                    </li>
                    <li data-filter=".software">Software Development</li>
                    <li data-filter=".ecommerce">Ecommerce Solution</li>
                    <li data-filter=".app">App Development</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row image_load">
            <div class="col-lg-4 col-md-6 col-sm-12 grid-item software">
              <div class="techno_flipbox mb-30">
                <div class="techno_flipbox_font">
                  <div class="techno_flipbox_inner">
                    <div class="techno_flipbox_icon">
                      <div class="icon">
                        <i class="flaticon-padlock"></i>
                      </div>
                    </div>
                    <div class="flipbox_title">
                      <h3>POS Software</h3>
                    </div>
                    <div class="flipbox_desc">
                      <p>
                        Porem asum molor sit amet, consectetur adipiscing do
                        miusmod tempor.
                      </p>
                    </div>
                  </div>
                </div>
                <div
                  class="techno_flipbox_back"
                  style="background-image: url({{ asset('new/assets/images/blog1.jpg')}})"
                >
                  <div class="techno_flipbox_inner">
                    <div class="flipbox_title">
                      <h3>
                        To Get Service Details Please click on Read More Button
                      </h3>
                    </div>
                    <div class="flipbox_button">
                      <a href="/service/service-details"
                        >Read More<i class="fa fa-angle-double-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 grid-item ecommerce">
              <div class="techno_flipbox mb-30">
                <div class="techno_flipbox_font">
                  <div class="techno_flipbox_inner">
                    <div class="techno_flipbox_icon">
                      <div class="icon">
                        <i class="flaticon-intelligent"></i>
                      </div>
                    </div>
                    <div class="flipbox_title">
                      <h3>Website Development</h3>
                    </div>
                    <div class="flipbox_desc">
                      <p>
                        Porem asum molor sit amet, consectetur adipiscing do
                        miusmod tempor.
                      </p>
                    </div>
                  </div>
                </div>
                <div
                  class="techno_flipbox_back"
                  style="background-image: url({{ asset('new/assets/images/blog1.jpg')}})"
                >
                  <div class="techno_flipbox_inner">
                    <div class="flipbox_title">
                      <h3>
                        To Get Service Details Please click on Read More Button
                      </h3>
                    </div>
                    <div class="flipbox_button">
                      <a href="/service/service-details"
                        >Read More<i class="fa fa-angle-double-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 grid-item app">
              <div class="techno_flipbox mb-30">
                <div class="techno_flipbox_font">
                  <div class="techno_flipbox_inner">
                    <div class="techno_flipbox_icon">
                      <div class="icon">
                        <i class="flaticon-code"></i>
                      </div>
                    </div>
                    <div class="flipbox_title">
                      <h3>Android Developement</h3>
                    </div>
                    <div class="flipbox_desc">
                      <p>
                        Porem asum molor sit amet, consectetur adipiscing do
                        miusmod tempor.
                      </p>
                    </div>
                  </div>
                </div>
                <div
                  class="techno_flipbox_back"
                  style="background-image: url({{ asset('new/assets/images/blog1.jpg')}})"
                >
                  <div class="techno_flipbox_inner">
                    <div class="flipbox_title">
                      <h3>
                        To Get Service Details Please click on Read More Button
                      </h3>
                    </div>
                    <div class="flipbox_button">
                      <a href="/service/service-details"
                        >Read More<i class="fa fa-angle-double-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 grid-item software">
              <div class="techno_flipbox mb-30">
                <div class="techno_flipbox_font">
                  <div class="techno_flipbox_inner">
                    <div class="techno_flipbox_icon">
                      <div class="icon">
                        <i class="flaticon-content-writing"></i>
                      </div>
                    </div>
                    <div class="flipbox_title">
                      <h3>ERP Software (E-commerce & POS)</h3>
                    </div>
                    <div class="flipbox_desc">
                      <p>
                        Porem asum molor sit amet, consectetur adipiscing do
                        miusmod tempor.
                      </p>
                    </div>
                  </div>
                </div>
                <div
                  class="techno_flipbox_back"
                  style="background-image: url({{ asset('new/assets/images/blog1.jpg')}})"
                >
                  <div class="techno_flipbox_inner">
                    <div class="flipbox_title">
                      <h3>
                        To Get Service Details Please click on Read More Button
                      </h3>
                    </div>
                    <div class="flipbox_button">
                      <a href="/service/service-details"
                        >Read More<i class="fa fa-angle-double-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 grid-item ecommerce">
              <div class="techno_flipbox mb-30">
                <div class="techno_flipbox_font">
                  <div class="techno_flipbox_inner">
                    <div class="techno_flipbox_icon">
                      <div class="icon">
                        <i class="flaticon-bar-chart"></i>
                      </div>
                    </div>
                    <div class="flipbox_title">
                      <h3>Digital Marketing</h3>
                    </div>
                    <div class="flipbox_desc">
                      <p>
                        Porem asum molor sit amet, consectetur adipiscing do
                        miusmod tempor.
                      </p>
                    </div>
                  </div>
                </div>
                <div
                  class="techno_flipbox_back"
                  style="background-image: url({{ asset('new/assets/images/blog1.jpg')}})"
                >
                  <div class="techno_flipbox_inner">
                    <div class="flipbox_title">
                      <h3>
                        To Get Service Details Please click on Read More Button
                      </h3>
                    </div>
                    <div class="flipbox_button">
                      <a href="/service/service-details"
                        >Read More<i class="fa fa-angle-double-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 grid-item app">
              <div class="techno_flipbox mb-30">
                <div class="techno_flipbox_font">
                  <div class="techno_flipbox_inner">
                    <div class="techno_flipbox_icon">
                      <div class="icon">
                        <i class="flaticon-business-and-finance"></i>
                      </div>
                    </div>
                    <div class="flipbox_title">
                      <h3>iOS Developement</h3>
                    </div>
                    <div class="flipbox_desc">
                      <p>
                        Porem asum molor sit amet, consectetur adipiscing do
                        miusmod tempor.
                      </p>
                    </div>
                  </div>
                </div>
                <div
                  class="techno_flipbox_back"
                  style="background-image: url({{ asset('new/assets/images/blog1.jpg')}})"
                >
                  <div class="techno_flipbox_inner">
                    <div class="flipbox_title">
                      <h3>
                        To Get Service Details Please click on Read More Button
                      </h3>
                    </div>
                    <div class="flipbox_button">
                      <a href="/service/service-details"
                        >Read More<i class="fa fa-angle-double-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 grid-item software">
              <div class="techno_flipbox mb-30">
                <div class="techno_flipbox_font">
                  <div class="techno_flipbox_inner">
                    <div class="techno_flipbox_icon">
                      <div class="icon">
                        <i class="flaticon-content-writing"></i>
                      </div>
                    </div>
                    <div class="flipbox_title">
                      <h3>EMS Software</h3>
                    </div>
                    <div class="flipbox_desc">
                      <p>
                        Porem asum molor sit amet, consectetur adipiscing do
                        miusmod tempor.
                      </p>
                    </div>
                  </div>
                </div>
                <div
                  class="techno_flipbox_back"
                  style="background-image: url({{ asset('new/assets/images/blog1.jpg')}})"
                >
                  <div class="techno_flipbox_inner">
                    <div class="flipbox_title">
                      <h3>
                        To Get Service Details Please click on Read More Button
                      </h3>
                    </div>
                    <div class="flipbox_button">
                      <a href="/service/service-details"
                        >Read More<i class="fa fa-angle-double-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 grid-item ecommerce">
              <div class="techno_flipbox mb-30">
                <div class="techno_flipbox_font">
                  <div class="techno_flipbox_inner">
                    <div class="techno_flipbox_icon">
                      <div class="icon">
                        <i class="flaticon-bar-chart"></i>
                      </div>
                    </div>
                    <div class="flipbox_title">
                      <h3>Facebook Marketing</h3>
                    </div>
                    <div class="flipbox_desc">
                      <p>
                        Porem asum molor sit amet, consectetur adipiscing do
                        miusmod tempor.
                      </p>
                    </div>
                  </div>
                </div>
                <div
                  class="techno_flipbox_back"
                  style="background-image: url({{ asset('new/assets/images/blog1.jpg')}})"
                >
                  <div class="techno_flipbox_inner">
                    <div class="flipbox_title">
                      <h3>
                        To Get Service Details Please click on Read More Button
                      </h3>
                    </div>
                    <div class="flipbox_button">
                      <a href="/service/service-details"
                        >Read More<i class="fa fa-angle-double-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 grid-item software">
              <div class="techno_flipbox mb-30">
                <div class="techno_flipbox_font">
                  <div class="techno_flipbox_inner">
                    <div class="techno_flipbox_icon">
                      <div class="icon">
                        <i class="flaticon-content-writing"></i>
                      </div>
                    </div>
                    <div class="flipbox_title">
                      <h3>Accounting Software</h3>
                    </div>
                    <div class="flipbox_desc">
                      <p>
                        Porem asum molor sit amet, consectetur adipiscing do
                        miusmod tempor.
                      </p>
                    </div>
                  </div>
                </div>
                <div
                  class="techno_flipbox_back"
                  style="background-image: url({{ asset('new/assets/images/blog1.jpg')}})"
                >
                  <div class="techno_flipbox_inner">
                    <div class="flipbox_title">
                      <h3>
                        To Get Service Details Please click on Read More Button
                      </h3>
                    </div>
                    <div class="flipbox_button">
                      <a href="/service/service-details"
                        >Read More<i class="fa fa-angle-double-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 grid-item ecommerce">
              <div class="techno_flipbox mb-30">
                <div class="techno_flipbox_font">
                  <div class="techno_flipbox_inner">
                    <div class="techno_flipbox_icon">
                      <div class="icon">
                        <i class="flaticon-bar-chart"></i>
                      </div>
                    </div>
                    <div class="flipbox_title">
                      <h3>Google Ads</h3>
                    </div>
                    <div class="flipbox_desc">
                      <p>
                        Porem asum molor sit amet, consectetur adipiscing do
                        miusmod tempor.
                      </p>
                    </div>
                  </div>
                </div>
                <div
                  class="techno_flipbox_back"
                  style="background-image: url({{ asset('new/assets/images/blog1.jpg')}})"
                >
                  <div class="techno_flipbox_inner">
                    <div class="flipbox_title">
                      <h3>
                        To Get Service Details Please click on Read More Button
                      </h3>
                    </div>
                    <div class="flipbox_button">
                      <a href="/service/service-details"
                        >Read More<i class="fa fa-angle-double-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 grid-item software">
              <div class="techno_flipbox mb-30">
                <div class="techno_flipbox_font">
                  <div class="techno_flipbox_inner">
                    <div class="techno_flipbox_icon">
                      <div class="icon">
                        <i class="flaticon-content-writing"></i>
                      </div>
                    </div>
                    <div class="flipbox_title">
                      <h3>HRM Software</h3>
                    </div>
                    <div class="flipbox_desc">
                      <p>
                        Porem asum molor sit amet, consectetur adipiscing do
                        miusmod tempor.
                      </p>
                    </div>
                  </div>
                </div>
                <div
                  class="techno_flipbox_back"
                  style="background-image: url({{ asset('new/assets/images/blog1.jpg')}})"
                >
                  <div class="techno_flipbox_inner">
                    <div class="flipbox_title">
                      <h3>
                        To Get Service Details Please click on Read More Button
                      </h3>
                    </div>
                    <div class="flipbox_button">
                      <a href="/service/service-details"
                        >Read More<i class="fa fa-angle-double-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    
@endsection