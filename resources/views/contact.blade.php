@extends('layout.main')

@section('content')
    @include('layout.menu')

    <!--==================================================-->
    <!----- Start Banner Area ----->
    <!--==================================================-->

    <div
      class="breatcome_area d-flex align-items-center breatcome_area_custom"
      style="background-image: url({{ asset('new/assets/images/header/contact.jpg') }})"
      ;
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breatcome_title">
              <div class="breatcome_title_inner pb-2">
                <h2 style="color: #00247e !important">Contact Us</h2>
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

    <!-- ============================================================== -->
    <!-- Start Techno Contact Address Area -->
    <!-- ============================================================== -->

    <div class="contact_address_area bg_color2 pt-80 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section_title text_center mb-55">
              <div class="section_main_title">
                <h1 class="text-white">We Are Here For You</h1>
              </div>
              <div class="em_bar">
                <div class="em_bar_bg"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="single_contact_now">
              <div class="single_contact_now_inner">
                <div class="single_contact_now_icon">
                  <i class="fa fa-phone"></i>
                </div>
                <div class="single_contact_now_content">
                  <h4>Phone Number</h4>
                  <p class="m-0 pt-2">+880 1714024688</p>
                  <p>+880 01714024689</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="single_contact_now">
              <div class="single_contact_now_inner">
                <div class="single_contact_now_icon">
                  <i class="fa fa-envelope-o"></i>
                </div>
                <div class="single_contact_now_content">
                  <h4>Email Address</h4>
                  <p class="m-0 pt-2 mb-20">info@zariq.com.bd</p>
                  <p class="m-0 mb-20">support@zariq.com.bd</p>
                  <p class="m-0 pb-2 mb-20">sales@zariq.com.bd</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="single_contact_now">
              <div class="single_contact_now_inner">
                <div class="single_contact_now_icon">
                  <i class="fa fa-map-marker"></i>
                </div>
                <div class="single_contact_now_content">
                  <h4>Address</h4>
                  <p class="m-0 pt-2">
                    House # 536, Road 7 Avenue 6, Mirpur DOHS, Dhaka 1216
                  </p>
                </div>
                <!-- <div class="single_contact_now_content">
                  <h4>Head Office Address :</h4>
                  <p class="m-0 pt-2">Gazipur Sadar, Gazipur
                  City-1700</p>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Techno Contact Address Area -->
    <!-- ============================================================== -->

    <!--==================================================-->
    <!----- End Techno Map Area ----->
    <!--==================================================-->
    <div class="google_map_area">
      <div class="row-fluid">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="google_map_area">
            <iframe
              class="map"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.502632496308!2d90.36887467597414!3d23.83627908547274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1c04f0fa3e1%3A0x5c6ce6e4c2a632e1!2sZariq%20Ltd!5e0!3m2!1sen!2sbd!4v1697442838752!5m2!1sen!2sbd"
            ></iframe>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Map Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Contact Area ----->
    <!--==================================================-->
    <div class="appointment_form pb-100">
      <div class="container">
        <div class="row nagative_margin">
          <div class="col-xl-12">
            <div class="appointment_form_inner">
              <div class="appointment_title pb-35">
                <h1>Contact Us</h1>
              </div>
              <form id="contact_form" action="mail.php" method="POST">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form_box mb-30">
                      <input type="text" name="name" placeholder="Name" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form_box mb-30">
                      <input
                        type="email"
                        name="email"
                        placeholder="Email Address"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form_box mb-30">
                      <input
                        type="text"
                        name="phone"
                        placeholder="Phone Number"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form_box mb-30">
                      <input type="text" name="web" placeholder="Website" />
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
                    <div class="quote_btn text_center">
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
    <!--==================================================-->
    <!----- End Techno Contact Area ----->
    <!--==================================================-->

@endsection