@extends('layout.main')

@section('content')
    @include('layout.menu')

    <div
    class="breatcome_area d-flex align-items-center breatcome_area_custom"
    style="background-image: url({{ asset('new/assets/images/header/portfolio.jpg') }})"
    ;
  >
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breatcome_title">
            <div class="breatcome_title_inner pb-2">
              <h2 style="color: #00247e !important">Portfolio</h2>
            </div>
            <!-- <div class="breatcome_content">
                          <ul>
                              <li><a href="../index.html">Home</a> <i class="fa fa-angle-right"></i> <a href="/portfolio/portfolio-details"> Teams</a> <i class="fa fa-angle-right"></i> <span>Team Details</span></li>
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
  <!----- Start Techno Portfolio Area ----->
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
              <h1>Our Latest Works For</h1>
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
                <li class="current_menu_item" data-filter="*">All Works</li>
                <li data-filter=".physics">Branding</li>
                <li data-filter=".cemes">Prototype</li>
                <li data-filter=".math">UX Research</li>
                <li data-filter=".english">Web Design</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row image_load">
        <div class="col-lg-4 col-md-6 col-sm-12 grid-item physics english">
          <div class="single_portfolio">
            <div class="single_portfolio_inner">
              <div class="single_portfolio_thumb">
                <a href="/portfolio/portfolio-details"
                  ><img src="{{ asset('new/assets/images/portfolio/p1.jpg')}}" alt=""
                /></a>
              </div>
            </div>
            <div class="single_portfolio_content">
              <div class="single_portfolio_icon">
                <a
                  class="portfolio-icon venobox vbox-item"
                  data-gall="myportfolio"
                  href="{{ asset('new/assets/images/portfolio/p1.jpg')}}"
                  ><i class="fa fa-search-plus"></i
                ></a>
              </div>
              <div class="single_portfolio_content_inner">
                <span>Prototype UX Research</span>
                <h2>
                  <a href="/portfolio/portfolio-details">Digital Marketing</a>
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 grid-item cemes">
          <div class="single_portfolio">
            <div class="single_portfolio_inner">
              <div class="single_portfolio_thumb">
                <a href="/portfolio/portfolio-details"
                  ><img src="{{ asset('new/assets/images/portfolio/p2.jpg')}}" alt=""
                /></a>
              </div>
            </div>
            <div class="single_portfolio_content">
              <div class="single_portfolio_icon">
                <a
                  class="portfolio-icon venobox vbox-item"
                  data-gall="myportfolio"
                  href="{{ asset('new/assets/images/portfolio/p2.jpg')}}"
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
        <div class="col-lg-4 col-md-6 col-sm-12 grid-item cemes">
          <div class="single_portfolio">
            <div class="single_portfolio_inner">
              <div class="single_portfolio_thumb">
                <a href="/portfolio/portfolio-details"
                  ><img src="{{ asset('new/assets/images/portfolio/p3.jpg')}}" alt=""
                /></a>
              </div>
            </div>
            <div class="single_portfolio_content">
              <div class="single_portfolio_icon">
                <a
                  class="portfolio-icon venobox vbox-item"
                  data-gall="myportfolio"
                  href="{{ asset('new/assets/images/portfolio/p3.jpg')}}"
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
        <div class="col-lg-4 col-md-6 col-sm-12 grid-item cemes math">
          <div class="single_portfolio">
            <div class="single_portfolio_inner">
              <div class="single_portfolio_thumb">
                <a href="/portfolio/portfolio-details"
                  ><img src="{{ asset('new/assets/images/portfolio/p4.jpg')}}" alt=""
                /></a>
              </div>
            </div>
            <div class="single_portfolio_content">
              <div class="single_portfolio_icon">
                <a
                  class="portfolio-icon venobox vbox-item"
                  data-gall="myportfolio"
                  href="{{ asset('new/assets/images/portfolio/p4.jpg')}}"
                  ><i class="fa fa-search-plus"></i
                ></a>
              </div>
              <div class="single_portfolio_content_inner">
                <span>Software Engineer</span>
                <h2><a href="/portfolio/portfolio-details">Company Project</a></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 grid-item physics english">
          <div class="single_portfolio admin">
            <div class="single_portfolio_inner">
              <div class="single_portfolio_thumb">
                <a href="/portfolio/portfolio-details"
                  ><img src="{{ asset('new/assets/images/portfolio/p5.jpg')}}" alt=""
                /></a>
              </div>
            </div>
            <div class="single_portfolio_content">
              <div class="single_portfolio_icon">
                <a
                  class="portfolio-icon venobox vbox-item"
                  data-gall="myportfolio"
                  href="{{ asset('new/assets/images/portfolio/p5.jpg')}}"
                  ><i class="fa fa-search-plus"></i
                ></a>
              </div>
              <div class="single_portfolio_content_inner">
                <span>Photoshop</span>
                <h2><a href="/portfolio/portfolio-details">Mastering Web Design</a></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 grid-item math">
          <div class="single_portfolio admin">
            <div class="single_portfolio_inner">
              <div class="single_portfolio_thumb">
                <a href="/portfolio/portfolio-details"
                  ><img src="{{ asset('new/assets/images/portfolio/p6.jpg')}}" alt=""
                /></a>
              </div>
            </div>
            <div class="single_portfolio_content">
              <div class="single_portfolio_icon">
                <a
                  class="portfolio-icon venobox vbox-item"
                  data-gall="myportfolio"
                  href="{{ asset('new/assets/images/portfolio/p6.jpg')}}"
                  ><i class="fa fa-search-plus"></i
                ></a>
              </div>
              <div class="single_portfolio_content_inner">
                <span>Design, Photoshop</span>
                <h2><a href="/portfolio/portfolio-details">Awesome Logo Design</a></h2>
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