@extends('layout.main')
@section('content')
  

  
  @include('layout.home-menu')
<!--==================================================-->
    <!----- Start Techno Main Menu Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- End Techno Banner Area ----->
    <!--==================================================-->
    <div class="banner_area banner2 d-flex align-items-center" id="home">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="single_banner">
              <div class="single_banner_content">
                <div class="banner_text_content white">
                  <h5 class="mb-3">Welcome To Zariq Ltd</h5>
                  <h1 class="cd-headline clip is-full-with">
                    <span class="cd-words-wrapper">
                      <b class="is-visible">Software Solution</b>
                      <b>Ecommerce Solution</b>
                      <b>App Solution</b>
                    </span>
                  </h1>
                </div>
                <div class="banner_content_text white pt-30">
                  <p>
                    Our Solutions For Your Online Business Needs And
                    Customer Retention.
                  </p>
                </div>
                <div class="slider_button pt-25 d-flex">
                  <div class="button three d-flex">
                    <a href="#case-study"
                      >Case Study <i class="fa fa-long-arrow-right"></i
                    ></a>
                    <a href="#portfolio" class="ml-5"
                      >Our Portfolio <i class="fa fa-long-arrow-right"></i
                    ></a>
                  </div>
                </div>
                <div class="data_science_video white-color">
                  <div class="data_science_video_inner">
                    <a
                      class="video-vemo-icon venobox vbox-item"
                      data-vbtype="youtube"
                      data-autoplay="true"
                      title="Click to Watch Video"
                      href="https://youtu.be/ykJFCpzZbac"
                    >
                      <i class="fa fa-play"></i>
                      <div id="spinnerbtn"></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="single_banner_thumb">
              <div class="machine_banner_shape">
                <div class="machine_banner_shape_inner1 bounce-animate">
                  <img src="{{ asset('new/assets/images/shape/mc1.png') }}" alt="" />
                </div>
                <div class="machine_banner_shape_inner2 bounce-animate2">
                  <img src="{{ asset('new/assets/images/shape/mc2.png') }}" alt="" />
                </div>
                <div class="machine_banner_shape_inner3 bounce-animate3">
                  <img src="{{ asset('new/assets/images/shape/mc3.png') }}" alt="" />
                </div>
                <div class="machine_banner_shape_inner4 bounce-animate4">
                  <img src="{{ asset('new/assets/images/shape/mc4.png') }}" alt="" />
                </div>
                <div class="machine_banner_shape_inner5 bounce-animate">
                  <img src="{{ asset('new/assets/images/shape/mc5.png') }}" alt="" />
                </div>
                <div class="machine_banner_shape_inner6 bounce-animate4">
                  <img src="{{ asset('new/assets/images/shape/mc6.png') }}" alt="" />
                </div>
                <div class="machine_banner_shape_inner7 bounce-animate3">
                  <img src="{{ asset('new/assets/images/shape/mc7.png') }}" alt="" />
                </div>
                <div class="machine_banner_shape_inner8 bounce-animate5">
                  <img src="{{ asset('new/assets/images/shape/mc8.png') }}" alt="" />
                </div>
                <div class="machine_banner_shape_inner9 bounce-animate3">
                  <img src="{{ asset('new/assets/images/shape/mc9.png') }}" alt="" />
                </div>
                <div class="machine_banner_shape_inner10 bounce-animate">
                  <img src="{{ asset('new/assets/images/shape/mc10.pn') }}g" alt="" />
                </div>
                <div class="machine_banner_shape_inner11 bounce-animate2">
                  <img src="{{ asset('new/assets/images/shape/mc11.pn') }}g" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!----- Start Techno Banner Area ----->
    <!--==================================================-->

    <div class="guote style_two tp-mg">
      <div class="container">
        <div class="row sbc_bg_box">
          <div class="left-side">
            <div class="icon"><i class="fa fa-phone"></i></div>
            <div>
              <p class="spam1">GET A FREE CONSULTATION</p>
              <a class="spam2" href="tel:+8801714024688">01714024688</a>
            </div>
          </div>
          <div class="right-side">
            <p>
              Zariq Ltd is a full-service communication and marketing agency
              committed to offering our clients an all-encompassing solution for
              all of their branding, marketing, promotion, visibility and
              technology needs.
            </p>
          </div>
          <div class="button three">
            <div class="slider_button">
              <a href="/contact"
                >Get A Quote<i class="fa fa-long-arrow-right"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!----- Start Techno About Area ----->
    <!--==================================================-->
    <div class="about_area pt-80 pb-70" id="about">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6 pt-25">
            <div
              class="single_about_thumb wow fadeInLeft"
              data-wow-delay="0.3s"
            >
              <div class="single_about_thumb_inner">
                <img src="{{ asset('new/assets/images/new/ab3.png') }}" alt="" />
              </div>
              <div class="shape_thumb">
                <div class="about_shape_thumb_affiliate1 bounce-animate">
                  <img src="{{ asset('new/assets/images/shape/3.png') }}" alt="" />
                </div>
                <div class="about_shape_thumb_affiliate2 rotateme">
                  <img src="{{ asset('new/assets/images/shape/rt2.png') }}" alt="" />
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
            <div class="section_title text_left mb-40 ">
              <div
                class="section_sub_title uppercase mb-3 wow fadeInRight"
                data-wow-delay="0.3s"
              >
                <h6>Who we are?</h6>
              </div>
              <div
                class="section_main_title wow fadeInRight"
                data-wow-delay="0.3s"
              >
                <h1>Preparing For Your Success</h1>
                <h1>Provide Best <span> IT Solutions.</span></h1>
              </div>
              <div class="em_bar">
                <div class="em_bar_bg"></div>
              </div>
              <div
                class="section_content_text pt-4 wow fadeInRight"
                data-wow-delay="0.3s"
              >
                <p>
                  We are privileged to work with lots future thinking awesome
                  business including many of the world’s top software.
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="about_icon_box wow fadeInUp" data-wow-delay="0.5s">
                  <div class="about_icon_box_inner mb-20">
                    <span
                      ><i class="fa fa-check-square-o"></i> Influencing
                      Sales</span
                    >
                  </div>
                  <div class="about_icon_box_inner mb-20">
                    <span
                      ><i class="fa fa-check-square-o"></i> Engaging
                      Customer</span
                    >
                  </div>
                  <div class="about_icon_box_inner mb-20">
                    <span
                      ><i class="fa fa-check-square-o"></i> Generating
                      Insights</span
                    >
                  </div>
                  <div class="about_icon_box_inner mb-20">
                    <span
                      ><i class="fa fa-check-square-o"></i> Boosting
                      Operations</span
                    >
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="about_icon_box wow fadeInUp" data-wow-delay="0.5s">
                  <div class="about_icon_box_inner mb-20">
                    <span
                      ><i class="fa fa-check-square-o"></i> Reliable & Cost
                      Effective</span
                    >
                  </div>
                  <div class="about_icon_box_inner mb-20">
                    <span
                      ><i class="fa fa-check-square-o"></i> 24/7 Fully
                      Support</span
                    >
                  </div>
                  <div class="about_icon_box_inner mb-20">
                    <span
                      ><i class="fa fa-check-square-o"></i> Dedicated
                      Developers</span
                    >
                  </div>
                  <div class="about_icon_box_inner mb-20">
                    <span
                      ><i class="fa fa-check-square-o"></i> Psychological
                      scoring</span
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="button three mt-40 ml-100">
                  <a href="/about">Read More</a>
              </div>
            </div>
            
            
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div
              class="counter_style_three wow flipInY"
              data-wow-delay="0ms"
              data-wow-duration="2500ms"
            >
              <div class="counter_style_three_icon pb-3">
                <div class="icon">
                  <i class="flaticon-analytics"></i>
                </div>
              </div>
              <div class="counter_style_three_text">
                <h1><span class="">2020</span></h1>
              </div>
              <div class="counter_style_three_dex">
                <h5>ESTABLISHED IN</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div
              class="counter_style_three color2 wow flipInY"
              data-wow-delay="0ms"
              data-wow-duration="2500ms"
            >
              <div class="counter_style_three_icon pb-3">
                <div class="icon">
                  <i class="flaticon-intelligent"></i>
                </div>
              </div>
              <div class="counter_style_three_text">
                <h1><span class="counter">100</span><span>+</span></h1>
              </div>
              <div class="counter_style_three_dex">
                <h5>Happy Clients</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div
              class="counter_style_three color3 wow flipInY"
              data-wow-delay="0ms"
              data-wow-duration="2500ms"
            >
              <div class="counter_style_three_icon pb-3">
                <div class="icon">
                  <i class="flaticon-code"></i>
                </div>
              </div>
              <div class="counter_style_three_text">
                <h1><span class="counter">25</span><span>+</span></h1>
              </div>
              <div class="counter_style_three_dex">
                <h5>COMPANY SIZE</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!----- End Techno About Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Brand  Area ----->
    <!--==================================================-->
    <div
      class="brand_main_area pt-100 pb-150"
      style="background-image: url({{ asset('new/assets/images/header/partners_home.jpg') }})"
    >
      <div class="container d-flex flex-column justify-content-center">
        <span
          class="uppercase mb-3 wow fadeInRight text-white text-center display-4"
          >Our Partners</span
        >
        <p class="text-white mb-30 pb-30">
          Zariq has three years of industry experience and works with a variety
          of clients, including the GoB, UN agencies, SMEs, NGOs, and MNCs. Our
          hardworking team offers personalized, innovative services that are of
          the highest caliber. By leveraging our knowledge and work ethics, we
          create solid collaborations and produce outstanding results.
        </p>
      </div>
      <div class="brand_area pb-40">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="row">
                <!--testimonial owl curousel -->
                <div class="brand_list owl-carousel curosel-style">
                  <!-- Single Brand -->
                  <div class="col-lg-12">
                    <div class="single_brand">
                      <div class="single_brand_thumb">
                        <img src="{{ asset('new/assets/images/brand/m1.png') }}" alt="" />
                      </div>
                    </div>
                  </div>
                  <!-- Single Brand -->
                  <div class="col-lg-12">
                    <div class="single_brand">
                      <div class="single_brand_thumb">
                        <img src="{{ asset('new/assets/images/brand/m2.png') }}" alt="" />
                      </div>
                    </div>
                  </div>
                  <!-- Single Brand -->
                  <div class="col-lg-12">
                    <div class="single_brand">
                      <div class="single_brand_thumb">
                        <img src="{{ asset('new/assets/images/brand/m3.png') }}" alt="" />
                      </div>
                    </div>
                  </div>
                  <!-- Single Brand -->
                  <div class="col-lg-12">
                    <div class="single_brand">
                      <div class="single_brand_thumb">
                        <img src="{{ asset('new/assets/images/brand/m4.png') }}" alt="" />
                      </div>
                    </div>
                  </div>
                  <!-- Single Brand -->
                  <div class="col-lg-12">
                    <div class="single_brand">
                      <div class="single_brand_thumb">
                        <img src="{{ asset('new/assets/images/brand/m5.png')}}" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- <div class="brand_area">
        <div class="container">
          <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
              <div class="row">
                <!--testimonial owl curousel -->
                <div class="brand_list2 owl-carousel curosel-style">
                  <!-- Single Brand -->
                  <div class="col-lg-12">
                    <div class="single_brand">
                      <div class="single_brand_thumb">
                        <img src="{{ asset('new/assets/images/brand/m6.png')}}" alt="" />
                      </div>
                    </div>
                  </div>
                  <!-- Single Brand -->
                  <div class="col-lg-12">
                    <div class="single_brand">
                      <div class="single_brand_thumb">
                        <img src="{{ asset('new/assets/images/brand/m7.png')}}" alt="" />
                      </div>
                    </div>
                  </div>
                  <!-- Single Brand -->
                  <div class="col-lg-12">
                    <div class="single_brand">
                      <div class="single_brand_thumb">
                        <img src="{{ asset('new/assets/images/brand/m8.png')}}" alt="" />
                      </div>
                    </div>
                  </div>
                  <!-- Single Brand -->
                  <div class="col-lg-12">
                    <div class="single_brand">
                      <div class="single_brand_thumb">
                        <img src="{{ asset('new/assets/images/brand/m9.png')}}" alt="" />
                      </div>
                    </div>
                  </div>
                  <!-- Single Brand -->
                  <div class="col-lg-12">
                    <div class="single_brand">
                      <div class="single_brand_thumb">
                        <img src="{{ asset('new/assets/images/brand/m1.png')}}" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-1"></div>
          </div>
        </div>
      </div> --}}
    </div>
    <!--==================================================-->
    <!----- End Techno Brand Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Service Area ----->
    <!--==================================================-->
    <div class="service_area pt-80 pb-70" id="services">
      <div class="container">
        <div class="row">
          <!-- Start Section Tile -->
          <div class="col-lg-12">
            <div class="section_title text-center mb-50">
              <div class="section_sub_title uppercase mb-3">
                <h6>Our Services</h6>
              </div>
              <div class="section_main_title">
                <h1>Provide Exclusive Services</h1>
              </div>
              <div class="em_bar">
                <div class="em_bar_bg"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div
              class="service_style_ten wow flipInY"
              data-wow-delay="0ms"
              data-wow-duration="2500ms"
            >
              <div class="single_service_style_ten">
                <div class="service_style_ten_icon pb-2">
                  <div class="icon">
                    <i class="flaticon-algorithm"></i>
                  </div>
                </div>
                <div class="service_style_ten_content">
                  <h4 class="pb-2">
                    <a href="/service" class="text-primary">E-commerce Solution</a>
                  </h4>
                  <p>
                    It is a long established fact that reader will be distracted
                    the readable content page when looking at its layout.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div
              class="service_style_ten wow flipInY"
              data-wow-delay="0ms"
              data-wow-duration="2500ms"
            >
              <div class="single_service_style_ten">
                <div class="service_style_ten_icon pb-2">
                  <div class="icon">
                    <i class="flaticon-chart"></i>
                  </div>
                </div>
                <div class="service_style_ten_content">
                  <h4 class="pb-2">
                    <a href="/service" class="text-primary">Software Developement</a>
                  </h4>
                  <p>
                    It is a long established fact that reader will be distracted
                    the readable content page when looking at its layout.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div
              class="service_style_ten wow flipInY"
              data-wow-delay="0ms"
              data-wow-duration="2500ms"
            >
              <div class="single_service_style_ten">
                <div class="service_style_ten_icon pb-2">
                  <div class="icon">
                    <i class="flaticon-server"></i>
                  </div>
                </div>
                <div class="service_style_ten_content">
                  <h4 class="pb-2">
                    <a href="/service" class="text-primary">App Developement</a>
                  </h4>
                  <p>
                    It is a long established fact that reader will be distracted
                    the readable content page when looking at its layout.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="section_button mt-50 ml-5">
              <div class="button two">
                <a href="/service">See All Services</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Service Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno About Area ----->
    <!--==================================================-->
    <div class="about_area pt-80 pb-70" style="background-image: url({{ asset('new/assets/images/counter.png') }}); background-color:rgba(81,201,255,0.7);">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
            <div class="section_title text_left mb-40 mt-3">
              <div class="section_sub_title uppercase mb-3">
                <h6>Why Choose Us?</h6>
              </div>
              <div class="section_main_title">
                <h1>Zariq Provides Realtime</h1>
                <h1>Best <span>IT Solutions.</span></h1>
              </div>
              <div class="em_bar">
                <div class="em_bar_bg"></div>
              </div>
              <div class="section_content_text pt-4">
                <p class="text-white">
                  We are privileged to work with hundred future thinking awesom
                  business including many of the world’s top software.
                </p>
              </div>
            </div>
            <div class="singel_about_left mb-30">
              <div class="singel_about_left_inner d-flex mb-30">
                <div class="data_science_about_icon mr-4">
                  <div class="icon">
                    <i class="flaticon-padlock"></i>
                  </div>
                </div>
                <div class="singel-about-content">
                  <h5>Quality Control System</h5>
                  <p class="pt-2 text-white">
                    Of course ! Why not? We strongly believe that our clients
                    will be satisfied by Quality Assurance and by this way they
                    will stay for a long time and also we try to cope with
                    Quality Assurance!
                  </p>
                </div>
              </div>
              <div class="singel_about_left_inner d-flex">
                <div class="data_science_about_icon mr-4">
                  <div class="icon">
                    <i class="flaticon-code"></i>
                  </div>
                </div>
                <div class="singel-about-content">
                  <h5>Training on Live Project</h5>
                  <p class="pt-2 text-white">
                    We provide online and offline training base on live project
                    according to industries required.
                  </p>
                </div>
              </div>
              <div class="singel_about_left_inner d-flex">
                <div class="data_science_about_icon mr-4">
                  <div class="icon">
                    <i class="flaticon-code"></i>
                  </div>
                </div>
                <div class="singel-about-content">
                  <h5>E-commerce Solution</h5>
                  <p class="pt-2 text-white">
                    Our Signing product Digital Businessman is E-commerce
                    Solution. This is a combination of product and service which
                    is the best solution which are available in the market.
                  </p>
                </div>
              </div>
              <div class="singel_about_left_inner d-flex">
                <div class="data_science_about_icon mr-4">
                  <div class="icon">
                    <i class="flaticon-code"></i>
                  </div>
                </div>
                <div class="singel-about-content">
                  <h5>EMS Solution</h5>
                  <p class="pt-2 text-white">
                    Our another Signing product Digital Education is the
                    Education Solution. This is a combination of all kinds of
                    feature that are required for online and offline learning.
                    This is the best solution for you which are available in the
                    market.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6 pt-180">
            <div class="single_about_thumb">
              <div class="single_about_thumb_inner">
                <img src="{{ asset('new/assets/images/new/data-about.png') }}" alt="" />
              </div>
              <div class="shape_thumb">
                <div class="about_shape_thumb bounce-animate">
                  <img src="{{ asset('new/assets/images/shape/3.png') }}" alt="" />
                </div>
                <div class="about_shape_thumb2 bounce-animate">
                  <img src="{{ asset('new/assets/images/shape/5.png') }}" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!----- End Techno About Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Counter Area ----->
    <!--==================================================-->

    <div class="counter_area">
      <div class="container">
        <div class="row cntr_bg_up nagative_margin pt-50 pb-45">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="single_counter text_center mb-4">
              <div class="countr_text">
                <h1><span class="counter">100</span><span>+</span></h1>
              </div>
              <div class="counter_desc">
                <h5>Happy Clients</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="single_counter text_center mb-4">
              <div class="countr_text">
                <h1><span class="counter">250</span><span>+</span></h1>
              </div>
              <div class="counter_desc">
                <h5>Complete Projects</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="single_counter text_center mb-4">
              <div class="countr_text">
                <h1><span class="counter">10</span><span>+</span></h1>
              </div>
              <div class="counter_desc">
                <h5>Win Awards</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="single_counter text_center mb-4">
              <div class="countr_text">
                <h1><span class="counter">2000</span><span>K+</span></h1>
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
    <!----- End Counter Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Client Review Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Testimonial Area ----->
    <!--==================================================-->
    <div id="testimonial-section" class="testimonial-bg pt-80 pb-70">
      <div
        id="container-general"
        class="ready anim-section-features anim-section-desc anim-section-quote"
      >
        <section id="section-quote">
          <div class="col-lg-12">
            <div class="section_title text_center mt-3">
              <!-- <div class="section_sub_title uppercase mb-3">
                <h6>TESTIMONIAL</h6>
              </div> -->
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
            <div
              class="pp-quote li-quote-4 active"
              data-textquote="quote-text-4"
            >
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
            <div
              class="quote quote-text-3 hide-bottom"
              data-ppquote="li-quote-3"
            >
              <p>
                'Managing everyday banking has finally become fun, fast and
                easy. Icing on the cake, customer support is super reactive: 5
                stars!'
              </p>
              <div class="container-info">
                <div class="pp"></div>
                <div class="name">Tom Abel De</div>
                <div class="job">Digital Marketing</div>
              </div>
            </div>
            <!--Testimonial 2-->
            <div class="quote quote-text-4 show" data-ppquote="li-quote-4">
              <p>
                'Qonto met my needs straight away. ng has finally become fun,
                fast andCustomer care is awesome! Period.'
              </p>
              <div class="container-info">
                <div class="pp"></div>
                <div class="name">Sanuka Santa</div>
                <div class="job">To To Company</div>
              </div>
            </div>
            <!--Testimonial 3-->
            <div
              class="quote hide-bottom quote-text-5"
              data-ppquote="li-quote-5"
            >
              <p>
                'With Qonto, I've been able to order MasterCard cards in
                seconds. My purchasing team can now be autonomous with their
                payments. Qonto is game changer.'
              </p>
              <div class="container-info">
                <div class="pp"></div>
                <div class="name">Grégoire Pasquet</div>
                <div class="job">Solf Solution</div>
              </div>
            </div>
            <!--Testimonial 4-->
            <div
              class="quote hide-bottom quote-text-6"
              data-ppquote="li-quote-6"
            >
              <p>
                'Qonto? Easy, fast, efficient. Traditionalng has finally become
                fun, fast and banks' hassles belong to the past!'
              </p>
              <div class="container-info">
                <div class="pp"></div>
                <div class="name">Nicolas Puran</div>
                <div class="job">CEO Founder</div>
              </div>
            </div>
            <!--Testimonial 5-->
            <div
              class="quote hide-bottom quote-text-7"
              data-ppquote="li-quote-7"
            >
              <p>
                'Qonto? A flawless UX and a customer service ng has finally
                become fun, fast and that cares so much. This is just
                incredible!'
              </p>
              <div class="container-info">
                <div class="pp"></div>
                <div class="name">Mathieu Jouhet</div>
                <div class="job">Freelance @Hello Mat</div>
              </div>
            </div>
            <!--Testimonial 6-->
            <div
              class="quote hide-bottom quote-text-8"
              data-ppquote="li-quote-8"
            >
              <p>
                'I needed a bank similar to a SaaS for LiveMentor: ng has
                finally become fun, fast and I think I found it.'
              </p>
              <div class="container-info">
                <div class="pp"></div>
                <div class="name">Charles Jadran</div>
                <div class="job">Web Development</div>
              </div>
            </div>
            <!--Testimonial 7-->
            <div
              class="quote hide-bottom quote-text-9"
              data-ppquote="li-quote-9"
            >
              <p>
                'I can say 'Goodbye' to the banking pains I had to ng has
                finally become fun, fast and bear with, and 'hello' to a way to
                do finance that makes sense.'
              </p>
              <div class="container-info">
                <div class="pp"></div>
                <div class="name">Digong Frando</div>
                <div class="job">CEO Officience</div>
              </div>
            </div>
            <!--Testimonial 8-->
            <div
              class="quote hide-bottom quote-text-10"
              data-ppquote="li-quote-10"
            >
              <p>
                'Qonto is 100% in tune with what we do at Alan.eu: a
                user-friendly service, a user-centric interface and a very
                reactive customer support.'
              </p>
              <div class="container-info">
                <div class="pp"></div>
                <div class="name">Charles Samuelian</div>
                <div class="job">Director & Photo Man</div>
              </div>
            </div>
            <!--Testimonial 9-->
            <div
              class="quote hide-bottom quote-text-11"
              data-ppquote="li-quote-11"
            >
              <p>
                'I have been looking for a modern and efficient banking
                alternative that could support the development of my business.
                I'm just wondering why Qonto did not exist before!'
              </p>
              <div class="container-info">
                <div class="pp"></div>
                <div class="name">Khatry Firmanio</div>
                <div class="job">CEO Company</div>
              </div>
            </div>
            <!--Testimonial 10-->
            <div
              class="quote hide-bottom quote-text-13"
              data-ppquote="li-quote-13"
            >
              <p>
                'That's just perfect - It rocks baby! ng has finally become fun,
                fast and You wanna apply at TheFamily? Use Qonto first.'
              </p>
              <div class="container-info">
                <div class="pp"></div>
                <div class="name">Jadran Parvej Imon</div>
                <div class="job">CEO Managar</div>
              </div>
            </div>
            <!--Testimonial 11-->
            <div
              class="quote quote-text-1 hide-bottom"
              data-ppquote="li-quote-1"
            >
              <p>
                'I wish I could have had Qonto ng has finally become fun, fast
                andenrolled in the Techstars Paris's first batch!'
              </p>
              <div class="container-info">
                <div class="pp"></div>
                <div class="name">Bertier Luyt</div>
                <div class="job">Managing Director</div>
              </div>
            </div>
            <!--Testimonial 12-->
            <div
              class="quote quote-text-2 hide-bottom"
              data-ppquote="li-quote-2"
            >
              <p>
                'Thanks to a slick interface and simple ng has finally become
                fun, fast and features, managing payments and expenses has
                become a piece of cake!'
              </p>
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
    <!----- End client Review Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Case Study Area ----->
    <!--==================================================-->
    <div
      class="case_study_area style_three pt-80 pb-70 " style="background-image: url({{ asset('new/assets/images/counter.png') }}); background-color:rgba(81,201,255,0.7);"
      id="case-study"
    >
      <div class="container">
        <div class="row">
          <!-- Start Section Tile -->
          <div class="col-lg-12">
            <div class="section_title text_center mb-50 mt-3">
              <div class="section_sub_title uppercase mb-3">
                <h6>Case Study</h6>
              </div>
              <div class="section_main_title">
                <h1 class="text-white">Latest Project</h1>
              </div>
              <div class="em_bar">
                <div class="em_bar_bg"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 grid-item">
            <div class="row">
              <!--portfolio owl curousel -->
              <div class="case_study_list2 owl-carousel curosel-style">
                <!--Start Single Portfolio -->
                <div class="col-lg-12">
                  <div class="single_portfolio">
                    <div class="single_portfolio_inner">
                      <div class="single_portfolio_thumb">
                        <a href="/casestudy/casestudy-details"
                          ><img
                            src="{{ asset('new/assets/images/case-study/photo_910407850.png')}}"
                            alt=""
                        /></a>
                      </div>
                    </div>
                    <div class="single_portfolio_content">
                      <div class="single_portfolio_icon">
                        <a
                          class="portfolio-icon venobox vbox-item"
                          data-gall="myportfolio"
                          href="{{ asset('new/assets/images/case-study/photo_910407850.png')}}"
                          ><i class="fa fa-search-plus"></i
                        ></a>
                      </div>
                      <div class="single_portfolio_content_inner">
                        <span>Md Iqbal Hossain</span>
                        <h2>
                          <a href="/casestudy/casestudy-details">Digital Marketing</a>
                        </h2>
                      </div>
                    </div>
                  </div>
                </div>
                <!--Start Single Portfolio -->
                <div class="col-lg-12">
                  <div class="single_portfolio">
                    <div class="single_portfolio_inner">
                      <div class="single_portfolio_thumb">
                        <a href="/casestudy/casestudy-details"
                          ><img
                            src="{{ asset('new/assets/images/case-study/photo_453858056.png')}}"
                            alt=""
                        /></a>
                      </div>
                    </div>
                    <div class="single_portfolio_content">
                      <div class="single_portfolio_icon">
                        <a
                          class="portfolio-icon venobox vbox-item"
                          data-gall="myportfolio"
                          href="{{ asset('new/assets/images/case-study/photo_453858056.png')}}"
                          ><i class="fa fa-search-plus"></i
                        ></a>
                      </div>
                      <div class="single_portfolio_content_inner">
                        <span>Tasrima Nahid</span>
                        <h2>
                          <a href="/casestudy/casestudy-details"
                            >NBA Web Application</a
                          >
                        </h2>
                      </div>
                    </div>
                  </div>
                </div>
                <!--Start Single Portfolio -->
                <div class="col-lg-12">
                  <div class="single_portfolio">
                    <div class="single_portfolio_inner">
                      <div class="single_portfolio_thumb">
                        <a href="/casestudy/casestudy-details"
                          ><img
                            src="{{ asset('new/assets/images/case-study/photo_102592133.png')}}"
                            alt=""
                        /></a>
                      </div>
                    </div>
                    <div class="single_portfolio_content">
                      <div class="single_portfolio_icon">
                        <a
                          class="portfolio-icon venobox vbox-item"
                          data-gall="myportfolio"
                          href="{{ asset('new/assets/images/case-study/photo_102592133.png')}}"
                          ><i class="fa fa-search-plus"></i
                        ></a>
                      </div>
                      <div class="single_portfolio_content_inner">
                        <span>Hasanul Haque</span>
                        <h2>
                          <a href="/casestudy/casestudy-details"
                            >E-commerce Web Application For Hafsa</a
                          >
                        </h2>
                      </div>
                    </div>
                  </div>
                </div>
                <!--Start Single Portfolio -->
                <div class="col-lg-12">
                  <div class="single_portfolio">
                    <div class="single_portfolio_inner">
                      <div class="single_portfolio_thumb">
                        <a href="/casestudy/casestudy-details"
                          ><img
                            src="{{ asset('new/assets/images/case-study/photo_93894282.png')}}"
                            alt=""
                        /></a>
                      </div>
                    </div>
                    <div class="single_portfolio_content">
                      <div class="single_portfolio_icon">
                        <a
                          class="portfolio-icon venobox vbox-item"
                          data-gall="myportfolio"
                          href="{{ asset('new/assets/images/case-study/photo_93894282.png')}}"
                          ><i class="fa fa-search-plus"></i
                        ></a>
                      </div>
                      <div class="single_portfolio_content_inner">
                        <span>G M Akkas Ali</span>
                        <h2>
                          <a href="/casestudy/casestudy-details">Swodesh Bazar</a>
                        </h2>
                      </div>
                    </div>
                  </div>
                </div>
                <!--Start Single Portfolio -->
                <div class="col-lg-12">
                  <div class="single_portfolio">
                    <div class="single_portfolio_inner">
                      <div class="single_portfolio_thumb">
                        <a href="/casestudy/casestudy-details"
                          ><img
                            src="{{ asset('new/assets/images/case-study/photo_580967996.png')}}"
                            alt=""
                        /></a>
                      </div>
                    </div>
                    <div class="single_portfolio_content">
                      <div class="single_portfolio_icon">
                        <a
                          class="portfolio-icon venobox vbox-item"
                          data-gall="myportfolio"
                          href="{{ asset('new/assets/images/case-study/photo_580967996.png')}}"
                          ><i class="fa fa-search-plus"></i
                        ></a>
                      </div>
                      <div class="single_portfolio_content_inner">
                        <span>F M Mehedi</span>
                        <h2><a href="/casestudy/casestudy-details">Cosy Shop</a></h2>
                      </div>
                    </div>
                  </div>
                </div>
                <!--Start Single Portfolio -->
                <!-- <div class="col-lg-12">
                  <div class="single_portfolio">
                    <div class="single_portfolio_inner">
                      <div class="single_portfolio_thumb">
                        <a href="/casestudy/casestudy-details"
                          ><img src="{{ asset('new/assets/images/portfolio/ptf6.png')}}" alt=""
                        /></a>
                      </div>
                    </div>
                    <div class="single_portfolio_content">
                      <div class="single_portfolio_icon">
                        <a
                          class="portfolio-icon venobox vbox-item"
                          data-gall="myportfolio"
                          href="{{ asset('new/assets/images/portfolio/ptf6.png')}}"
                          ><i class="fa fa-search-plus"></i
                        ></a>
                      </div>
                      <div class="single_portfolio_content_inner">
                        <span>Vocal Avatar API</span>
                        <h2>
                          <a href="/casestudy/casestudy-details">Digital Marketing</a>
                        </h2>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Case Study Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Portfolio Area ----->
    <!--==================================================-->
    <div class="case_study_area style_three pt-80 pb-70" id="portfolio">
      <div class="container">
        <div class="row">
          <!-- Start Section Tile -->
          <div class="col-lg-12">
            <div class="section_title text_center mb-50 mt-3">
              <div class="section_sub_title uppercase mb-3">
                <h6>Portfolio</h6>
              </div>
              <div class="section_main_title">
                <h1>Our Latest Project</h1>
              </div>
              <div class="em_bar">
                <div class="em_bar_bg"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row image_load">
          <div class="col-lg-3 col-md-4 col-sm-6 grid-item physics english">
            <div class="single_portfolio">
              <div class="single_portfolio_inner">
                <div class="single_portfolio_thumb">
                  <a href="/portfolio/portfolio-details"
                    ><img src="{{ asset('new/assets/images/portfolio/p1.jpg') }}" alt=""
                  /></a>
                </div>
              </div>
              <div class="single_portfolio_content">
                <div class="single_portfolio_icon">
                  <a
                    class="portfolio-icon venobox vbox-item"
                    data-gall="myportfolio"
                    href="{{ asset('new/assets/images/portfolio/p1.jpg') }}"
                    ><i class="fa fa-search-plus"></i
                  ></a>
                </div>
                <div class="single_portfolio_content_inner">
                  <span>Prototype UX Research</span>
                  <h2><a href="/portfolio/portfolio-details">Digital Marketing</a></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 grid-item cemes">
            <div class="single_portfolio">
              <div class="single_portfolio_inner">
                <div class="single_portfolio_thumb">
                  <a href="/portfolio/portfolio-details"
                    ><img src="{{ asset('new/assets/images/portfolio/p2.jpg') }}" alt=""
                  /></a>
                </div>
              </div>
              <div class="single_portfolio_content">
                <div class="single_portfolio_icon">
                  <a
                    class="portfolio-icon venobox vbox-item"
                    data-gall="myportfolio"
                    href="{{ asset('new/assets/images/portfolio/p2.jpg') }}"
                    ><i class="fa fa-search-plus"></i
                  ></a>
                </div>
                <div class="single_portfolio_content_inner">
                  <span>UX Research</span>
                  <h2><a href="/portfolio/portfolio-details">Awesome Creative</a></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 grid-item cemes">
            <div class="single_portfolio">
              <div class="single_portfolio_inner">
                <div class="single_portfolio_thumb">
                  <a href="/portfolio/portfolio-details"
                    ><img src="{{ asset('new/assets/images/portfolio/p3.jpg') }}" alt=""
                  /></a>
                </div>
              </div>
              <div class="single_portfolio_content">
                <div class="single_portfolio_icon">
                  <a
                    class="portfolio-icon venobox vbox-item"
                    data-gall="myportfolio"
                    href="{{ asset('new/assets/images/portfolio/p3.jpg') }}"
                    ><i class="fa fa-search-plus"></i
                  ></a>
                </div>
                <div class="single_portfolio_content_inner">
                  <span>Design, Photoshop</span>
                  <h2><a href="/portfolio/portfolio-details">Business Solution</a></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 grid-item cemes">
            <div class="single_portfolio">
              <div class="single_portfolio_inner">
                <div class="single_portfolio_thumb">
                  <a href="/portfolio/portfolio-details"
                    ><img src="{{ asset('new/assets/images/portfolio/p3.jpg') }}" alt=""
                  /></a>
                </div>
              </div>
              <div class="single_portfolio_content">
                <div class="single_portfolio_icon">
                  <a
                    class="portfolio-icon venobox vbox-item"
                    data-gall="myportfolio"
                    href="{{ asset('new/assets/images/portfolio/p3.jpg') }}"
                    ><i class="fa fa-search-plus"></i
                  ></a>
                </div>
                <div class="single_portfolio_content_inner">
                  <span>Design, Photoshop</span>
                  <h2><a href="/portfolio/portfolio-details">Business Solution</a></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7">
            <div class="section_button mt-50 ml-5">
              <div class="button two">
                <a href="/portfolio">See All Projects</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!----- End Portfolio Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Process Area ----->
    <!--==================================================-->
    <div class="how_it_work style_three pt-80 pb-30 bg_color2">
      <div class="container">
        <div class="row">
          <!-- Start Section Tile -->
          <div class="col-lg-12">
            <div class="section_title text_center mb-90 mt-3">
              <div class="section_sub_title uppercase mb-3">
                <h6><b style="color: #cdffff;">How We Work</b></h6>
              </div>
              <div class="section_main_title">
                <h1>Our Process Style</h1>
              </div>
              <div class="em_bar">
                <div class="em_bar_bg"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div
              class="single_how_it_work text-center mb-60 wow flipInY"
              data-wow-delay="0ms"
              data-wow-duration="1500ms pl-3 pr-3"
            >
              <div class="how_it_work_content">
                <div class="how_it_work_number">
                  <h4>01</h4>
                </div>
                <div class="how_it_work_icon">
                  <div class="icon">
                    <i class="flaticon-report"></i>
                  </div>
                  <div class="how_it_work_icon_bg_thumb">
                    <div class="how_it_work_icon_bg_thumb_inner">
                      <img src="{{ asset('new/assets/images/shape/wk1.png')}}" alt="" />
                    </div>
                    <div class="how_it_work_bg_thumb_inner_hv">
                      <img src="{{ asset('new/assets/images/shape/wk2.png')}}" alt="" />
                    </div>
                  </div>
                </div>
                <div class="how_it_work_title pt-65">
                  <h4><a href="#">Meet and Requirements Gathering</a></h4>
                </div>
                <div class="how_it_work_text pt-2"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div
              class="single_how_it_work text-center pl-3 pr-3 mb-60 wow flipInY"
              data-wow-delay="0ms"
              data-wow-duration="1500ms"
            >
              <div class="how_it_work_content">
                <div class="how_it_work_number">
                  <h4>02</h4>
                </div>
                <div class="how_it_work_icon">
                  <div class="icon">
                    <i class="flaticon-process"></i>
                  </div>
                  <div class="how_it_work_icon_bg_thumb">
                    <div class="how_it_work_icon_bg_thumb_inner">
                      <img src="{{ asset('new/assets/images/shape/wk1.png')}}" alt="" />
                    </div>
                    <div class="how_it_work_bg_thumb_inner_hv">
                      <img src="{{ asset('new/assets/images/shape/wk2.png')}}" alt="" />
                    </div>
                  </div>
                </div>
                <div class="how_it_work_title pt-65">
                  <h4><a href="#">Planning & Analysis</a></h4>
                </div>
                <div class="how_it_work_text pt-2"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div
              class="single_how_it_work text-center pl-3 pr-3 mb-60 wow flipInY"
              data-wow-delay="0ms"
              data-wow-duration="1500ms"
            >
              <div class="how_it_work_content">
                <div class="how_it_work_number">
                  <h4>03</h4>
                </div>
                <div class="how_it_work_icon">
                  <div class="icon">
                    <i class="flaticon-data"></i>
                  </div>
                  <div class="how_it_work_icon_bg_thumb">
                    <div class="how_it_work_icon_bg_thumb_inner">
                      <img src="{{ asset('new/assets/images/shape/wk1.png')}}" alt="" />
                    </div>
                    <div class="how_it_work_bg_thumb_inner_hv">
                      <img src="{{ asset('new/assets/images/shape/wk2.png')}}" alt="" />
                    </div>
                  </div>
                </div>
                <div class="how_it_work_title pt-65">
                  <h4><a href="#">Proposal and Agreement</a></h4>
                </div>
                <div class="how_it_work_text pt-2"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div
              class="single_how_it_work text-center mb-60 wow flipInY"
              data-wow-delay="0ms"
              data-wow-duration="1500ms pl-3 pr-3"
            >
              <div class="how_it_work_content">
                <div class="how_it_work_number">
                  <h4>04</h4>
                </div>
                <div class="how_it_work_icon">
                  <div class="icon">
                    <i class="flaticon-report"></i>
                  </div>
                  <div class="how_it_work_icon_bg_thumb">
                    <div class="how_it_work_icon_bg_thumb_inner">
                      <img src="{{ asset('new/assets/images/shape/wk1.png')}}" alt="" />
                    </div>
                    <div class="how_it_work_bg_thumb_inner_hv">
                      <img src="{{ asset('new/assets/images/shape/wk2.png')}}" alt="" />
                    </div>
                  </div>
                </div>
                <div class="how_it_work_title pt-65">
                  <h4><a href="#">Application and Module Design</a></h4>
                </div>
                <div class="how_it_work_text pt-2"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div
              class="single_how_it_work text-center pl-3 pr-3 mb-60 wow flipInY"
              data-wow-delay="0ms"
              data-wow-duration="1500ms"
            >
              <div class="how_it_work_content">
                <div class="how_it_work_number">
                  <h4>05</h4>
                </div>
                <div class="how_it_work_icon">
                  <div class="icon">
                    <i class="flaticon-process"></i>
                  </div>
                  <div class="how_it_work_icon_bg_thumb">
                    <div class="how_it_work_icon_bg_thumb_inner">
                      <img src="{{ asset('new/assets/images/shape/wk1.png')}}" alt="" />
                    </div>
                    <div class="how_it_work_bg_thumb_inner_hv">
                      <img src="{{ asset('new/assets/images/shape/wk2.png')}}" alt="" />
                    </div>
                  </div>
                </div>
                <div class="how_it_work_title pt-65">
                  <h4><a href="#">Development</a></h4>
                </div>
                <div class="how_it_work_text pt-2"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div
              class="single_how_it_work text-center pl-3 pr-3 mb-60 wow flipInY"
              data-wow-delay="0ms"
              data-wow-duration="1500ms"
            >
              <div class="how_it_work_content">
                <div class="how_it_work_number">
                  <h4>06</h4>
                </div>
                <div class="how_it_work_icon">
                  <div class="icon">
                    <i class="flaticon-data"></i>
                  </div>
                  <div class="how_it_work_icon_bg_thumb">
                    <div class="how_it_work_icon_bg_thumb_inner">
                      <img src="{{ asset('new/assets/images/shape/wk1.png')}}" alt="" />
                    </div>
                    <div class="how_it_work_bg_thumb_inner_hv">
                      <img src="{{ asset('new/assets/images/shape/wk2.png')}}" alt="" />
                    </div>
                  </div>
                </div>
                <div class="how_it_work_title pt-65">
                  <h4><a href="#">Evalution, Adjustment & Security</a></h4>
                </div>
                <div class="how_it_work_text pt-2"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div
              class="single_how_it_work text-center pl-3 pr-3 mb-60 wow flipInY"
              data-wow-delay="0ms"
              data-wow-duration="1500ms"
            >
              <div class="how_it_work_content">
                <div class="how_it_work_number">
                  <h4>07</h4>
                </div>
                <div class="how_it_work_icon">
                  <div class="icon">
                    <i class="flaticon-data"></i>
                  </div>
                  <div class="how_it_work_icon_bg_thumb">
                    <div class="how_it_work_icon_bg_thumb_inner">
                      <img src="{{ asset('new/assets/images/shape/wk1.png')}}" alt="" />
                    </div>
                    <div class="how_it_work_bg_thumb_inner_hv">
                      <img src="{{ asset('new/assets/images/shape/wk2.png')}}" alt="" />
                    </div>
                  </div>
                </div>
                <div class="how_it_work_title pt-65">
                  <h4><a href="#">Training</a></h4>
                </div>
                <div class="how_it_work_text pt-2"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div
              class="single_how_it_work text-center pl-3 pr-3 mb-60 wow flipInY"
              data-wow-delay="0ms"
              data-wow-duration="1500ms"
            >
              <div class="how_it_work_content">
                <div class="how_it_work_number">
                  <h4>08</h4>
                </div>
                <div class="how_it_work_icon">
                  <div class="icon">
                    <i class="flaticon-data"></i>
                  </div>
                  <div class="how_it_work_icon_bg_thumb">
                    <div class="how_it_work_icon_bg_thumb_inner">
                      <img src="{{ asset('new/assets/images/shape/wk1.png')}}" alt="" />
                    </div>
                    <div class="how_it_work_bg_thumb_inner_hv">
                      <img src="{{ asset('new/assets/images/shape/wk2.png')}}" alt="" />
                    </div>
                  </div>
                </div>
                <div class="how_it_work_title pt-65">
                  <h4><a href="#">Release and Implementation</a></h4>
                </div>
                <div class="how_it_work_text pt-2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Process Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Team Area ----->
    <!--==================================================-->

    <div
      class="team_area pt-80 pb-75"
      style="background-image: url({{ asset('new/assets/images/team-bg2.jpg') }})"
      ;
      id="team"
    >
      <div class="container">
        <div class="row">
          <!-- Start Section Tile -->
          <div class="col-lg-12">
            <div class="section_title text_center mb-50 mt-3">
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
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="single_team mb-4">
              <div class="single_team_thumb">
                <img
                  src="{{ asset('new/assets/images/team/photo_194188122.jpg') }}"
                  alt="A M Robiul Islam"
                  class="teamPhotoCss"
                />
                <div class="single_team_icon">
                  <a href="https://www.facebook.com/cserobiul" target="_new"
                    ><i class="fa fa-facebook"></i
                  ></a>
                  <a href="https://twitter.com/cserobiul" target="_new"
                    ><i class="fa fa-twitter"></i
                  ></a>
                  <a href="https://bd.linkedin.com/in/cserobiul" target="_new"
                    ><i class="fa fa-linkedin"></i
                  ></a>
                  <a href="https://apol.com.bd/" target="_new"
                    ><i class="fa fa-github"></i
                  ></a>
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
                <img
                  src="{{ asset('new/assets/images/team/photo_194188122.jpg') }}"
                  alt="Ahsan Habib Talha"
                  class="teamPhotoCss"
                />
                <div class="single_team_icon">
                  <a href="https://www.facebook.com/zariqbd/" target="_new"
                    ><i class="fa fa-facebook"></i
                  ></a>
                  <a href="https://twitter.com/zariqbd" target="_new"
                    ><i class="fa fa-twitter"></i
                  ></a>
                  <a href="https://www.linkedin.com/in/zariqbd/" target="_new"
                    ><i class="fa fa-linkedin"></i
                  ></a>
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
                <img
                  src="{{ asset('new/assets/images/team/photo_194188122.jpg') }}"
                  alt="Zafor"
                  class="teamPhotoCss"
                />
                <div class="single_team_icon">
                  <a href="https://www.facebook.com/zariqbd/" target="_new"
                    ><i class="fa fa-facebook"></i
                  ></a>
                  <a href="https://twitter.com/zariqbd" target="_new"
                    ><i class="fa fa-twitter"></i
                  ></a>
                  <a href="https://www.linkedin.com/in/zariqbd/" target="_new"
                    ><i class="fa fa-linkedin"></i
                  ></a>
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
                <img
                  src="{{ asset('new/assets/images/team/photo_194188122.jpg') }}"
                  alt="Md Jayed Hasan Emran"
                  class="teamPhotoCss"
                />
                <div class="single_team_icon">
                  <a href="https://www.facebook.com/csejayed/" target="_new"
                    ><i class="fa fa-facebook"></i
                  ></a>
                  <a href="https://twitter.com/csejayed" target="_new"
                    ><i class="fa fa-twitter"></i
                  ></a>
                  <a href="https://www.linkedin.com/in/csejayed/" target="_new"
                    ><i class="fa fa-linkedin"></i
                  ></a>
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
        <div class="col-lg-7">
          <div class="section_button mt-50 ml-5">
            <div class="button two">
              <a href="/team">See All Member</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Process Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Team Area ----->
    <!--==================================================-->
    <div class="blog_area pt-85 pb-65" id="blog" style="background-image: url({{ asset('new/assets/images/call-bg.png') }}); background-color: #000000e3;">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <div class="section_title text_left mb-60 mt-3">
              <div class="section_sub_title uppercase mb-3">
                <h6><b>LATEST ARTICLE</b></h6>
              </div>
              <div class="section_main_title ">
                <h1 class="text-white">See Our Latest</h1>
                <h1 class="text-white">Blog Posts</h1>
              </div>
              <div class="em_bar">
                <div class="em_bar_bg"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="section_button mt-50">
              <div class="button two">
                <a href="/blog">See All Blogs</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="single_blog text-center mb-4">
              <div class="single_blog_thumb">
                <a href="/blog/blog-details"
                  ><img src="{{ asset('new/assets/images/portfolio/ptf6.png')}}" alt=""
                /></a>
              </div>
              <div class="single_blog_date">
                <div class="single_blog_date_inner">
                  <h3>25</h3>
                  <span>DEC</span>
                  <span class="years">2020</span>
                </div>
              </div>
              <div class="single_blog_content pt-4 pl-4 pr-4">
                <div class="techno_blog_meta">
                  <a href="#">Techno </a>
                  <span class="meta-date pl-3">Corporate</span>
                </div>
                <div class="blog_page_title pb-1">
                  <h3>
                    <a href="/blog/blog-details"
                      >The five devices you need to work anytime</a
                    >
                  </h3>
                </div>
                <div class="blog_description">
                  <p>
                    Lorem ipsum dolor sit amet consectet adipisie cing elit sed
                    eiusmod tempor incididunt on labore et dolore.
                  </p>
                </div>
                <div class="blog_page_button style_two pb-5">
                  <a href="/blog/blog-details"
                    >Read More <i class="fa fa-long-arrow-right"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="single_blog text-center mb-4">
              <div class="single_blog_thumb">
                <a href="/blog/blog-details"
                  ><img src="{{ asset('new/assets/images/portfolio/ptf2.png')}}" alt=""
                /></a>
              </div>
              <div class="single_blog_date color3">
                <div class="single_blog_date_inner">
                  <h3>28</h3>
                  <span>DEC</span>
                  <span class="years">2020</span>
                </div>
              </div>
              <div class="single_blog_content pt-4 pl-4 pr-4">
                <div class="techno_blog_meta">
                  <a href="#">Techno </a>
                  <span class="meta-date pl-3">Business</span>
                </div>
                <div class="blog_page_title pb-1">
                  <h3>
                    <a href="/blog/blog-details"
                      >How to learn PHP 10 tips to get you started</a
                    >
                  </h3>
                </div>
                <div class="blog_description">
                  <p>
                    Lorem ipsum dolor sit amet consectet adipisie cing elit sed
                    eiusmod tempor incididunt on labore et dolore.
                  </p>
                </div>
                <div class="blog_page_button style_two pb-5">
                  <a href="/blog/blog-details"
                    >Read More <i class="fa fa-long-arrow-right"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="single_blog text-center mb-4">
              <div class="single_blog_thumb">
                <a href="/blog/blog-details"
                  ><img src="{{ asset('new/assets/images/portfolio/ptf3.png')}}" alt=""
                /></a>
              </div>
              <div class="single_blog_date color2">
                <div class="single_blog_date_inner">
                  <h3>22</h3>
                  <span>DEC</span>
                  <span class="years">2020</span>
                </div>
              </div>
              <div class="single_blog_content pt-4 pl-4 pr-4">
                <div class="techno_blog_meta">
                  <a href="#">Techno </a>
                  <span class="meta-date pl-3">Consulting</span>
                </div>
                <div class="blog_page_title pb-1">
                  <h3>
                    <a href="/blog/blog-details"
                      >The five devices you need to work anytime</a
                    >
                  </h3>
                </div>
                <div class="blog_description">
                  <p>
                    Lorem ipsum dolor sit amet consectet adipisie cing elit sed
                    eiusmod tempor incididunt on labore et dolore.
                  </p>
                </div>
                <div class="blog_page_button style_two pb-5">
                  <a href="/blog/blog-details"
                    >Read More <i class="fa fa-long-arrow-right"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Blog Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Contact Area ----->
    <!--==================================================-->
    <div class="main_contact_area style_three pt-80 pb-90">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="section_title text_left mb-50 mt-3">
              <div class="section_sub_title uppercase mb-3">
                <h6>Contact Info</h6>
              </div>
              <div class="section_main_title">
                <h1>Get in Touch</h1>
              </div>
              {{-- <div class="section_title_text pt-2">
                <p>
                  Lorem ipsum dolor sit amet cotetur adipi sicing elit, sed do
                  mod tempor incid idunt ut labore etdolore emu some the and one
                  baldbe dear sod ales justo sit amet urna auctor scele risqu.
                </p>
              </div> --}}
              <div class="em_bar">
                <div class="em_bar_bg"></div>
              </div>
            </div>
            <div class="contact_address">
              <div class="contact_address_company mb-3">
                <ul>
                  <li>
                    <i class="fa fa-envelope-o"></i
                    ><span><a href="#">info@zariq.com.bd</a></span>
                  </li>
                  <li>
                    <i class="fa fa-mobile"></i><span><a href="tel:+8801714024689">+880  1714024689</a> </span>
                  </li>
                  {{-- <li>
                    <i class="fa fa-map-marker"></i>
                    <span> 245, King Street, New York - 65432 NY.</span>
                  </li> --}}
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="contact_from">
              <div class="contact_from_box">
                <div class="contact_title pb-4">
                  <h3>Send Message</h3>
                </div>
                <form id="contact_form" action="mail.php" method="POST">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form_box mb-30">
                        <input type="text" name="name" placeholder="Name" />
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form_box mb-30">
                        <input
                          type="email"
                          name="email"
                          placeholder="Email Address"
                        />
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form_box mb-30">
                        <textarea
                          name="message"
                          id="message"
                          cols="30"
                          rows="10"
                          placeholder="Write a Message"
                        ></textarea>
                      </div>
                      <div class="quote_btn">
                        <button class="btn" type="submit">Send Message</button>
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
    </div>
    <!--==================================================-->
    <!----- End Techno Contact Area ----->
    <!--==================================================-->

@endsection