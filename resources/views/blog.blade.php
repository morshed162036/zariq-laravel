@extends('layout.main')

@section('content')
    @include('layout.menu')

    	<!-- ============================================================== -->
	<!-- Start Techno Breatcome Area -->
	<!-- ============================================================== -->
	<div
      class="breatcome_area d-flex align-items-center breatcome_area_custom"
      style="background-image: url({{ asset('new/assets/images/cn-bg.jpg') }})"
      ;
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breatcome_title">
              <div class="breatcome_title_inner pb-2">
                <h2 style="color: #ffffff !important">Blog</h2>
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
	<!-- ============================================================== -->
	<!-- End Techno Breatcome Area -->
	<!-- ============================================================== -->
	
	<!--==================================================-->
    <!----- Start Techno Blog Area ----->
    <!--==================================================-->
    <div class="portfolio_area pt-80 pb-70" id="portfolio">
        <div class="container">
          <div class="row">
            <!-- Start Section Tile -->
            <div class="col-lg-12">
              <div class="section_title text_center mb-50 mt-3">
                <!-- <div class="section_sub_title uppercase mb-3">
                              <h6>PORTFOLIO</h6>
                          </div> -->
                <div class="section_main_title">
                  <h1>Our Latest Blog For You</h1>
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
                    <li class="current_menu_item" data-filter="*">All Blogs</li>
                    <li data-filter=".ecommerce">E-commerce</li>
                    <li data-filter=".software-and-web">Software And Web</li>
                    <li data-filter=".marketing-and-communication">Marketing and Communicati</li>
                    <li data-filter=".creative-designers-developers-and-marketers">Creative Designers, Devel</li>
                    <li data-filter=".website-design-and-development">Website Design And Develo</li>
                    <li data-filter=".computer-learning">Computer Learning</li>
                    <li data-filter=".career-and-it">Career And IT</li>
                    <li data-filter=".life-and-it">Life And IT</li>
                    <li data-filter=".ms-office">MS Office</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row image_load">
            <div class="col-lg-4 col-md-6 col-sm-12 grid-item ecommerce english">
              <div
                class="single_blog text-center mb-4 wow flipInY"
                data-wow-delay="0ms"
                data-wow-duration="2500ms"
              >
                <div class="single_blog_thumb">
                  <a href="/blog/blog-details"
                    ><img
                      src="{{ asset('new/assets/images/blog/featured_photo733460430.jpg') }}"
                      alt=""
                      style="width: 350px; height: 250px"
                  /></a>
                </div>
                <div class="single_blog_date">
                  <div class="single_blog_date_inner">
                    <h3>16</h3>
                    <span>Aug</span>
                    <span class="years">2022</span>
                  </div>
                </div>
                <div class="single_blog_content pt-4 pl-4 pr-4">
                  <div class="techno_blog_meta">
                    Category:
                    <span class="meta-date"> Affiliate </span>
                  </div>
                  <div
                    class="blog_page_title pb-1"
                    style="font-family: SolaimanLipi !important"
                  >
                    <h3>
                      <a href="/blog/blog-details">Digital Marketing</a>
                    </h3>
                  </div>
                  <div class="blog_description"></div>
                  <div class="blog_page_button style_two pb-5">
                    <a href="/blog/blog-details"
                      >Read More <i class="fa fa-long-arrow-right"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 grid-item software-and-web">
              <div
                class="single_blog text-center mb-4 wow flipInY"
                data-wow-delay="0ms"
                data-wow-duration="2500ms"
              >
                <div class="single_blog_thumb">
                  <a href="/blog/blog-details"
                    ><img
                      src="{{ asset('new/assets/images/blog/featured_photo907759089.png') }}"
                      alt=""
                      style="width: 350px; height: 250px"
                  /></a>
                </div>
                <div class="single_blog_date">
                  <div class="single_blog_date_inner">
                    <h3>07</h3>
                    <span>Jun</span>
                    <span class="years">2022</span>
                  </div>
                </div>
                <div class="single_blog_content pt-4 pl-4 pr-4">
                  <div class="techno_blog_meta">
                    Category:
                    <span class="meta-date"> Affiliate </span>
                  </div>
                  <div
                    class="blog_page_title pb-1"
                    style="font-family: SolaimanLipi !important"
                  >
                    <h3>
                      <a href="/blog/blog-details"
                        >এ্যাফিলিয়েট কন্টেন্ট ফর ওয়েবসাইট ডিজাইন এবং
                        ডেভেলপমেন্ট</a
                      >
                    </h3>
                  </div>
                  <div class="blog_description"></div>
                  <div class="blog_page_button style_two pb-5">
                    <a href="/blog/blog-details"
                      >Read More <i class="fa fa-long-arrow-right"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 grid-item marketing-and-communication">
              <div
                class="single_blog text-center mb-4 wow flipInY"
                data-wow-delay="0ms"
                data-wow-duration="2500ms"
              >
                <div class="single_blog_thumb">
                  <a
                    href="/blog/blog-details"
                    ><img
                      src="{{ asset('new/assets/images/blog/featured_photo486281118.png') }}"
                      alt=""
                      style="width: 350px; height: 250px"
                  /></a>
                </div>
                <div class="single_blog_date">
                  <div class="single_blog_date_inner">
                    <h3>07</h3>
                    <span>Jun</span>
                    <span class="years">2022</span>
                  </div>
                </div>
                <div class="single_blog_content pt-4 pl-4 pr-4">
                  <div class="techno_blog_meta">
                    Category:
                    <span class="meta-date"> Affiliate </span>
                  </div>
                  <div
                    class="blog_page_title pb-1"
                    style="font-family: SolaimanLipi !important"
                  >
                    <h3>
                      <a
                        href="/blog/blog-details"
                        >এ্যাফিলিয়েট গ্রাফিক্স ডিজাইন কোর্স কন্টেন্ট</a
                      >
                    </h3>
                  </div>
                  <div class="blog_description"></div>
                  <div class="blog_page_button style_two pb-5">
                    <a
                      href="/blog/blog-details"
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
      <!----- End Techno Portfolio Area ----->
      <!--==================================================-->
@endsection