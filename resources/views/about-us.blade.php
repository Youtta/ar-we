@extends('layouts.master')
@section('title', 'ABOUT US')

@section('top-styles')


@endsection

@section('header')
  @parent
@endsection

@section('content')
<section class="search_section_head" style="background-image: url(assets/images/about-banner.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-white">
      </div>
    </div>
  </div>

  <div class="hero-title">
    <h1 class="main-title">{{getSettings('about-us-heading', $language->id)}}</h1>
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
                    <a href="">{{getSettings('home-heading', $language->id)}}</a>
                  </span>
                </div>

                <div class="custom_single-breadcrumb-wrap active-page">
                  <span class="custom_sep"><i class="fa fa-angle-right"></i></span> <span class="custom_breadcrumb">
                    {{getSettings('about-us-heading', $language->id)}}
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
<section class="what-we-offer">
  <div class="container">
    <div class="des text-center">
      <h3>{{$sectionOne->heading}}</h3>
      <p>{!!$sectionOne->text!!}</p>
    </div>
    <div class="row justify-content-center">
      @foreach($sectionTwo as $section)
        <div class="col-md-4">
            <div class="details text-center">
            <a href="#">
                <img src="{{config('armour.cms_url').json_decode($section->icon)}}" alt="icon">
                <h5>{{$section->heading}}</h5>
                {!!$section->text!!}
            </a>
            </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
<section class="abc-section py-5 mt-4">
  <div class="container">
    <div class="des text-center">
      <h3>{{$sectionThree->heading}}</h3>
      <p>{!!$sectionThree->text!!}</p>
    </div>
  </div>
</section>
<section class="about-description">
  <div class="container">
    <div class="title text-center">
      <h2>{{$sectionFour->heading}}</h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="des">
           @foreach($sectionFourInner as $section)
            <div class="comb">
                <img src="{{config('armour.cms_url').json_decode($section->icon)}}" alt="">
                <p>
                {!!$section->text!!}
                </p>
            </div>
          @endforeach

          {{-- <div class="comb">
            <img src="{{url('')}}/assets/images/artboard-2.png" alt="">
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur laudantium omnis. Excepturi, reprehenderit tempore
              </p>
          </div>
          <div class="comb">
            <img src="{{url('')}}/assets/images/artboard-3.png" alt="">
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur laudantium omnis. Excepturi, reprehenderit tempore
              </p>
          </div>
          <div class="comb">
            <img src="{{url('')}}/assets/images/artboard-4.png" alt="">
            <p>
              Lorem dolorum provident alias ipsum dolor sit amet consectetur adipisicing elit. Quas at rerum maxime temporibus laborum ipsa soluta similique
              </p>
          </div> --}}

        </div>
      </div>
      <div class="col-md-6">
        <div class="image">
          <img src="{{config('armour.cms_url').json_decode($sectionFour->icon)}}" alt="image">
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

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> --}}

{{-- <script>
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
</script> --}}
{{-- <script>
  AOS.init();
</script> --}}
@endsection

