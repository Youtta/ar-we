@extends('layouts.master')
@section('title', 'Home')

@section('top-styles')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

@endsection

@section('header')
  @parent
@endsection

@section('content')
  <section class="main-slider">
    <header>
      <div class="owl-carousel owl-theme">
        @foreach($sliders as $slider)
        <div class="item">
          <img src="{{config('armour.cms_url').$slider->slider}}" alt="images not found">
          <div class="cover">
            <div class="container">

            </div>
          </div>
        </div>
        @endforeach
      </div>
    </header>
  </section>
  <section class="slider-bottom-text">
    <div class="container">
      <div class="des text-center" >
        <div class="title" data-aos="fade-up">
          <h3>{{$sectionOne->heading}}</h3>
        </div>
        {{-- <div class="text" data-aos="fade-up">
          <p>{!!$sectionOne->text!!}</p>
        </div> --}}
      </div>
    </div>
  </section>
  <section class="products">
    <div class="container">
      <div class="row justify-content-center">
        @foreach($categories->where('language_id',$language->id) as $category)
        <div class="col-lg-4 col-md-6 col-sm-6 col-10 mb-3" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
          <div class="prd text-center">
            <a href="#">
              <div class="image">
                <img src="{{config('armour.cms_url').$category->image}}" alt="images">
              </div>
              <div class="des">
                <div class="title">
                  <h4>{{$category->name}}</h4>
                </div>
                <div class="text">
                  {!!$category->description!!}
                </div>
              </div>
            </a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <section class="web-about">
    <div class="featuredSlider">
      <header>
        <div class="owl-carousel owl-theme">
          @foreach($sliders as $slider)
          <div class="item">
            <img src="{{url('')}}/assets/images/featured-slider.webp" alt="Featured Slider">
            <div class="cover">
              <div class="container">
  
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </header>
    </div>
    {{-- <div class="bg-image" style="background-image: url({{url('')}}/assets/images/web-about.webp)">
      <div class="container">
        <div class="des text-center">
          <div class="title">
            <h3>{{$sectionTwo->heading}}</h3>
          </div>
          <div class="text">
            {!!$sectionTwo->text!!}
          </div>
          <div class="link">
            <a href="#">
              {{getSettings('readmore-button',$language->id)}}
              <i class="fa fa-angle-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div> --}}
  </section>
  <section class="guide-incontinence">
    <div class="container">
      <div class="details text-center">
        <h2>{{$sectionThree->heading}}</h2>
        {!!$sectionThree->text!!}
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
              <h3>{{$sectionFour->heading}}</h3>
              <p>
                {!!$sectionFour->text!!}
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3" data-aos="fade-up-left">
            <div class="link text-right">
              <a href="#">{{getSettings('readmore-button',$language->id)}}
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
        <iframe width="100%" height="500" src="{{$sectionSix->heading}}" frameborder="0"  allowfullscreen></iframe>
      </div>
    </div>
  </section>
  <section class="product-details">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8" data-aos="fade-right">
          <div class="des">
            <div class="title">
              <h2>{{$sectionFive->heading}}</h2>
            </div>
            <div class="text">
              <p>{!!$sectionFive->text!!}</p>
            </div>
            <div class="link">
              <a href="#">{{getSettings('readmore-button',$language->id)}}
                <i class="fa fa-angle-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4" data-aos="fade-left">
          <div class="detail-prd-slider our-client">
            <div class="crtf owl-carousel">
              @foreach(json_decode($sectionFive->icon) as $image)
              <div>
                <img src="{{config('armour.cms_url').$image}}" alt="images">
              </div>
              @endforeach
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <section class="certifications">
    <div class="our-client">
      <div class="crtf owl-carousel">
          @foreach($clients as $client)
        <div>
          <img src="{{config('armour.cms_url').$client->image}}" alt="images">
        </div>
        @endforeach
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
  $('.featuredSlider .owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    dots:false,
    nav:true,
    mouseDrag:true,
    autoplay:true,
    autoplayTimeout:3500,
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

