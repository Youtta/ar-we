@extends('layouts.master')
@section('title', 'ABOUT US')

@section('top-styles')


@endsection

@section('header')
  @parent
@endsection

@section('content')
<section class="search_section_head" style="background-image: url(assets/images/contact-banner1.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-white">
        {{-- <h1>Al Quran MP3 Surah Wise</h1> --}}
      </div>
    </div>
  </div>

  <div class="hero-title">
    <h1 class="main-title">Conact Us</h1>
  </div>
  <div class="breadcrumb_wrap" id="custom_breadcrumb_final">
    <div class="container">
      <div class="custom_wrapper">
        <section class="custom_header">
          <div class="logo-and-nav-wrap">
            <div class="custom_site-nav-wrap">
              <nav class="custom_nav">
                <div class="custom_single-breadcrumb-wrap">
                  <span class="custom_breadcrumb">
                    <a href="">Home</a>
                  </span>
                </div>
                {{-- <div class="custom_single-breadcrumb-wrap">
                  <span class="custom_sep"><i class="fa fa-angle-right"></i></span> <span class="custom_breadcrumb">
                    <a href="">Al Quran</a>
                  </span>
                </div> --}}
                <div class="custom_single-breadcrumb-wrap active-page">
                  <span class="custom_sep"><i class="fa fa-angle-right"></i></span> <span class="custom_breadcrumb">
                    Contact Us
                  </span>
                </div>
              </nav>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</section>
<section class="contact-details">
  <div class="container">
    <h3 class="text-center py-4">Drop Us a Mail</h3>
    <div class="row">
      <div class="col-md-6">
        <div class="contact-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14479.362806990825!2d67.0824226!3d24.8692897!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfc8124dc96819e13!2sWeb%20%26%20Mobile%20Application%20Development%20Company!5e0!3m2!1sen!2s!4v1610365699635!5m2!1sen!2s" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
      <div class="col-md-6">
        <div class="contact-form">
          <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputName">First Name</label>
                <input type="text" class="form-control" id="inputName" placeholder="First Name">
              </div>
              <div class="form-group col-md-6">
                <label for="inputLastName">Last Name</label>
                <input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
              </div>
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity" placeholder="City">
              </div>

              {{-- <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
              </div> --}}
            </div>
            <div class="form-group">
              <label for="inputAddress">Subject</label>
              <input type="text" class="form-control" id="inputAddress">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Message</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
            </div>
            {{-- <button type="submit" class="btn btn-primary">submit</button> --}}
            <div class="link pt-4">
              <a href="#">Submit
                {{-- <i class="fa fa-angle-right"></i> --}}
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="contact-items">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="item-detail text-center">
          <i class="fa fa-envelope"></i>
          <p>info@armour.com</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="item-detail text-center">
          <i class="fa fa-phone"></i>
          <p>00-000-0000</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="item-detail text-center">
          <i class="fa fa-map-marker"></i>
          <p> 194 Ash Avenue, Saint Louis, MO, Missouri, 63108
          </p>
        </div>
      </div>
    </div>
  </div>
</section>






@endsection

@section('footer')
  @parent
@endsection

@section('bottom-bot-scripts')

@endsection

