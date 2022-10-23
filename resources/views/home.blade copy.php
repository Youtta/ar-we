@extends('layouts.master')
@section('title', 'Home')

@section('top-styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

@endsection

@section('header')
  @parent
@endsection

@section('content')
  <section class="main-slider">
    <header>
      <div class="owl-carousel owl-theme">
          <div class="item">
              <img src="{{url('')}}/assets/images/main-slider.webp" alt="images not found">
              <div class="cover">
                  <div class="container">
                      {{-- <div class="header-content">
                          <div class="line"></div>
                          <h2>Teimagine Digital Experience with</h2>
                          <h1>Start-ups and solutions</h1>
                          <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>
                      </div> --}}
                  </div>
               </div>
          </div>                    
          <div class="item">
              <img src="{{url('')}}/assets/images/main-slider.webp" alt="images not found">
              <div class="cover">
                  <div class="container">
                      {{-- <div class="header-content">
                          <div class="line animated bounceInLeft"></div>
                          <h2>Reimagine Digital Experience with</h2>
                          <h1>Intelligent solutions</h1>
                          <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>
                      </div> --}}
                  </div>
               </div>
          </div>                
          <div class="item">
              <img src="{{url('')}}/assets/images/main-slider.webp" alt="images not found">
              <div class="cover">
                  <div class="container">
                      {{-- <div class="header-content">
                          <div class="line animated bounceInLeft"></div>
                          <h2>Peimagine Digital Experience with</h2>
                          <h1>Intelligent Solutions</h1>
                          <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>
                      </div> --}}
                  </div>
               </div>
          </div>
      </div>
    </header>
  </section>
  <section class="slider-bottom-text">
    <div class="container">
      
      <div class="des text-center" >
        <div class="title" data-aos="fade-up">
          <h3>DOLOR SIT AMET</h3>
        </div>
        <div class="text" data-aos="fade-up">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
        </div>
      </div>
    </div>
  </section>
  <section class="products">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-10 mb-3" data-aos="flip-left"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="2000">
          <div class="prd text-center">
            <a href="#">
              <div class="image">
                <img src="{{url('')}}/assets/images/product-1.webp" alt="images">
              </div>
              <div class="des">
                <div class="title">
                  <h4>MEN</h4>
                </div>
                <div class="text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-10 mb-3" data-aos="flip-left"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="2000">
          <div class="prd text-center">
            <a href="#">
              <div class="image">
                <img src="{{url('')}}/assets/images/product-2.webp" alt="images">
              </div>
              <div class="des">
                <div class="title">
                  <h4>WOMEN</h4>
                </div>
                <div class="text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-10 mb-3" data-aos="flip-left"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="2000">
          <div class="prd text-center">
            <a href="#">
              <div class="image">
                <img src="{{url('')}}/assets/images/product-3.webp" alt="images">
              </div>
              <div class="des">
                <div class="title">
                  <h4>UNISEX</h4>
                </div>
                <div class="text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="web-about">
    <div class="bg-image" style="background-image: url({{url('')}}/assets/images/web-about.webp)">
      <div class="container">
        <div class="des text-center">
          <div class="title">
            <h3>LOREM IPSUM</h3>
          </div>
          <div class="text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
          </div>
          <div class="link">
            <a href="#">
              Read More
              <i class="fa fa-angle-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="guide-incontinence">
    <div class="container">
      <div class="details text-center">
        <h2>YOUR GUIDE TO INCONTINENCE</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.  </p>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-10 mb-3" data-aos="flip-left"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="2000">
          <div class="prd">
            <div class="image">
              <img src="{{url('')}}/assets/images/guide-1.webp" alt="images">
            </div>
            <div class="des">
              <div class="title">
                <h4>
                UNDERSTANDING URINARY INCONTINENCE IN ADULTS</h4>
              </div>
              <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...
                </p>
              </div>
              <div class="link text-right">
                <a href="#">
                  Read More
                  <i class="fa fa-angle-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-10 mb-3" data-aos="flip-left"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="2000">
          <div class="prd">
            <div class="image">
              <img src="{{url('')}}/assets/images/guide-2.webp" alt="images">
            </div>
            <div class="des">
              <div class="title">
                <h4>
                  ADULT BEDWETTING AND NOCTURIA</h4>
              </div>
              <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...
                </p>
              </div>
              <div class="link text-right">
                <a href="#">
                  Read More
                  <i class="fa fa-angle-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-10 mb-3" data-aos="flip-left"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="2000">
          <div class="prd">
            <div class="image">
              <img src="{{url('')}}/assets/images/guide-3.webp" alt="images">
            </div>
            <div class="des">
              <div class="title">
                <h4>
                IS THERE A RIGHT WAY TO TRAVEL WITH INCONTINENCE</h4>
              </div>
              <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...
                </p>
              </div>
              <div class="link text-right">
                <a href="#">
                  Read More
                  <i class="fa fa-angle-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <section class="about-incontinence">
    <div class="container">
      <div class="about-incontinence-des">
        <div class="row">
          <div class="col-lg-9 col-md-9" data-aos="fade-up-right">
            <div class="des">
              <h3>Learn more about incontinence</h3>
              <p>
                These articles about leaks, bedwetting and continence care are here for you regardless if you are a man, woman, carer, relative, or professional. 
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3" data-aos="fade-up-left">
            <div class="link text-right">
              <a href="#">Read More
                <i class="fa fa-angle-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="home-video">
    <div class="container">
      <div class="video">
        <iframe width="100%" height="500" src="https://www.youtube.com/embed/pVE92TNDwUk" frameborder="0"  allowfullscreen></iframe>
      </div>
    </div>
  </section>
  <section class="product-details">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8" data-aos="fade-right">
          <div class="des">
            <div class="title">
              <h2>Lorem ipsum dolor sit amet</h2>
            </div>
            <div class="text">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.  </p>
            </div>
            <div class="link">
              <a href="#">Read More
              <i class="fa fa-angle-right"></i>  
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4" data-aos="fade-left">
          
          {{-- <div class="image">
            <img src="{{url('')}}/assets/images/prd-detail.webp" alt="images"> --}}
            <div class="detail-prd-slider our-client">
              {{-- <h5 class="text-center">Our Clients</h5>
              <hr class="client-underline"> --}}
              <div class="crtf owl-carousel">
                <div>
                  <img src="{{url('')}}/assets/images/prd-detail.webp" alt="images">
                </div>
                <div>
                  <img src="{{url('')}}/assets/images/prd-detail.webp" alt="images">
                </div>
                <div>
                  <img src="{{url('')}}/assets/images/prd-detail.webp" alt="images">
                </div>
                <div>
                  <img src="{{url('')}}/assets/images/prd-detail.webp" alt="images">
                </div>
                <div>
                  <img src="{{url('')}}/assets/images/prd-detail.webp" alt="images">
                </div>
                <div>
                  <img src="{{url('')}}/assets/images/prd-detail.webp" alt="images">
                </div>
                <div>
                  <img src="{{url('')}}/assets/images/prd-detail.webp" alt="images">
                </div>
                <div>
                  <img src="{{url('')}}/assets/images/prd-detail.webp" alt="images">
                </div>
                <div>
                  <img src="{{url('')}}/assets/images/prd-detail.webp" alt="images">
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="certifications">
    <div class="our-client">
      {{-- <h5 class="text-center">Our Clients</h5>
      <hr class="client-underline"> --}}
      <div class="crtf owl-carousel">
        <div>
          <img src="{{url('')}}/assets/images/certification-1.webp" alt="images">
        </div>
        <div>
          <img src="{{url('')}}/assets/images/certification-2.webp" alt="images">
        </div>
        <div>
          <img src="{{url('')}}/assets/images/certification-3.webp" alt="images">
        </div>
        <div>
          <img src="{{url('')}}/assets/images/certification-4.webp" alt="images">
        </div>
        <div>
          <img src="{{url('')}}/assets/images/certification-5.webp" alt="images">
        </div>
        <div>
          <img src="{{url('')}}/assets/images/certification-6.webp" alt="images">
        </div>
        <div>
          <img src="{{url('')}}/assets/images/certification-7.webp" alt="images">
        </div>
        <div>
          <img src="{{url('')}}/assets/images/certification-4.webp" alt="images">
        </div>
        <div>
          <img src="{{url('')}}/assets/images/certification-5.webp" alt="images">
        </div>
      </div>
    </div>
  </section>
  

@endsection

@section('footer')
  @parent
@endsection

@section('bottom-bot-scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
  $('.main-slider .owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    dots:false,
    nav:true,
    mouseDrag:true,
    autoplay:true,
    // animateOut: 'slideOutRight',
    responsive:{
      0:{
        items:1
      },
      600:{
        items:1
      },
      1000:{
        items:1
      }
    }
  });
  $('.product-details .owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    dots:false,
    nav:false,
    mouseDrag:true,
    autoplay:true,
    autoplayTimeout:7684,
    // animateOut: 'slideOutRight',
    responsive:{
      0:{
        items:1
      },
      600:{
        items:1
      },
      1000:{
        items:1
      }
    }
  });
  $('.crtf.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    nav:false,
    
    mouseDrag:true,
    autoplay:true,
    // animateOut: 'slideOutRight',
    responsive:{
      0:{
        items:3
      },
      600:{
        items:4
      },
      1000:{
        items:7
      }
    }
  });
</script>
<script>
  AOS.init();
</script>
@endsection

