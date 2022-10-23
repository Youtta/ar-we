@extends('layouts.master')
@section('title', 'Product Detail')

@section('top-styles')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.theme.default.min.css"> --}}
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

@endsection

@section('header')
  @parent
@endsection

@section('content')

<section class="search_section_head" style="background-image: url(../assets/images/menbg.png);">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-white">
      </div>
    </div>
  </div>

  <div class="hero-title">
    <h1 class="main-title">{{$category_name}}</h1>
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
                <div class="custom_single-breadcrumb-wrap">
                  <span class="custom_breadcrumb">
                    <a href="">Products</a>
                  </span>
                </div>
                <div class="custom_single-breadcrumb-wrap active-page">
                  <span class="custom_sep"><i class="fa fa-angle-right"></i></span> <span class="custom_breadcrumb">
                    Products Details
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

<section class="productDetailPage">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="productDetailLeft">
          <!-- Slider main wrapper -->
          <div class="swiper-container-wrapper">
            <!-- Slider thumbnail container -->
            <div class="swiper-container gallery-thumbs">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                @foreach (json_decode($products->section_images) as $images)
                <div class="swiper-slide">
                    <img src="{{config('armour.cms_url').$images}}" alt="{{$products->name}}">
                </div>
                @endforeach

              </div>
            </div>
            <!-- Slider main container -->
            <div class="swiper-container gallery-top">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                @foreach (json_decode($products->section_images) as $images)
                <div class="swiper-slide">
                    <img src="{{config('armour.cms_url').$images}}" alt="{{$products->name}}">
                </div>
                @endforeach
              </div>
              <!-- Add Arrows -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>

          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="productDetailRight">
          <div class="productDetailTtile">
            <h4>{{$products->product_tag ?? null}}</h4>
            <h1>{{$products->name}}</h1>
          </div>
          <div class="productDetailTtile sectionTitle">
            <h4>Features</h4>
          </div>
          <div class="productDetailFeatures">
            <div class="feature">
              <img src="{{url('')}}/assets/images/features/feature-1.webp" alt="">
              <h6>Waterproof Backsheet</h6>
            </div>
            <div class="feature">
              <img src="{{url('')}}/assets/images/features/feature-2.webp" alt="">
              <h6>Anti-Backterial</h6>
            </div>
            <div class="feature">
              <img src="{{url('')}}/assets/images/features/feature-3.webp" alt="">
              <h6>Non-Slip</h6>
            </div>
          </div>
          <div class="detailsIcon">
            <div class="productDetailSize">
              <a href="#">
                <div class="sizesStyle" style="background-image: url({{url('')}}/assets/images/features/sizebg.webp)">
                  <div class="productDetailIcon">
                    <div class="dimensionText">Size</div>
                    <div class="size">2</div>
                  </div>
                </div>
                <div class="sizeMension">
                  <small>Dimension (CM)</small>
                  <h6>60x40</h6>
                </div>
                <div class="sizeMension">
                  <small>Size</small>
                  <h6>S</h6>
                </div>
              </a>

            </div>
            <div class="productDetailSize">
              <a href="#">
                <div class="sizesStyle" style="background-image: url({{url('')}}/assets/images/features/sizebg.webp)">
                  <div class="productDetailIcon">
                    <div class="dimensionText">Size</div>
                    <div class="size">3</div>
                  </div>
                </div>
                <div class="sizeMension">
                  <small>Dimension (CM)</small>
                  <h6>60x60</h6>
                </div>
                <div class="sizeMension">
                  <small>Size</small>
                  <h6>M</h6>
                </div>
              </a>
            </div>
            <div class="productDetailSize">
              <a href="#">
                <div class="sizesStyle" style="background-image: url({{url('')}}/assets/images/features/sizebg.webp)">
                  <div class="productDetailIcon">
                    <div class="dimensionText">Size</div>
                    <div class="size">4</div>
                  </div>
                </div>
                <div class="sizeMension">
                  <small>Dimension (CM)</small>
                  <h6>60x90</h6>
                </div>
                <div class="sizeMension">
                  <small>Size</small>
                  <h6>L</h6>
                </div>
              </a>
            </div>
            <div class="productDetailSize">
              <a href="#">
                <div class="sizesStyle" style="background-image: url({{url('')}}/assets/images/features/sizebg.webp)">
                  <div class="productDetailIcon">
                    <div class="dimensionText">Size</div>
                    <div class="size">5</div>
                  </div>
                </div>
                <div class="sizeMension">
                  <small>Dimension (CM)</small>
                  <h6>60x120</h6>
                </div>
                <div class="sizeMension">
                  <small>Size</small>
                  <h6>XL</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="productDetailFeaturesImages">
      <div class="row">
            @forelse(json_decode($products->feature_product_image) as $images)

                <div class="col-md-12">
                    <div class="featureImage">
                        <img src="{{config('armour.cms_url').$images}}" alt="{{$products->name}}">
                    </div>
                </div>
                    <br>
                @empty
                <small>N/A</small>
            @endforelse
      </div>
    </div>
  </div>
</section>

@endsection

@section('footer')
  @parent
@endsection

@section('bottom-bot-scripts')

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>

<script>
  $(document).ready(function () {
  var galleryThumbs = new Swiper(".gallery-thumbs", {
    direction: "verticle",
    spaceBetween: 5,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    breakpoints: {
      480: {
        direction: "verticle",
        slidesPerView: 4,
      }
    }
  });
  var galleryTop = new Swiper(".gallery-top", {
    direction: "horizontal",
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    thumbs: {
      swiper: galleryThumbs
    }
  });
});

</script>

<script>
  AOS.init();
</script>
@endsection

