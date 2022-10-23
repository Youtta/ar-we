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
        {{-- <h1>Al Quran MP3 Surah Wise</h1> --}}
      </div>
    </div>
  </div>

  <div class="hero-title">
    <h1 class="main-title">About Us</h1>
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
                    About Us
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
      <h3> What We Offer</h3>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni maiores, et aliquam tempore voluptates minus dolorem sapiente, facilis inventore voluptatibus dolores cum dicta necessitatibus ex rem quaerat mollitia debitis iure. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi enim aspernatur commodi est esse ipsam vitae debitis ad numquam, quos dolore architecto sunt sed corporis voluptatibus pariatur eum cum dolorum.</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="details text-center">
          <a href="#">
            <img src="{{url('')}}/assets/images/facilates-icon4.png" alt="icon">
            <h5>Lorem ipsum dolor</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae et esse consectetur dolore, natus, quae magni praesentium nesciunt.</p>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="details text-center">
          <a href="#">
            <img src="{{url('')}}/assets/images/facilates-icon2.png" alt="icon">
            <h5>Lorem ipsum dolor</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae et esse consectetur dolore, natus, quae magni praesentium nesciunt.</p>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="details text-center">
          <a href="#">
            <img src="{{url('')}}/assets/images/facilates-icon3.png" alt="icon">
            <h5>Lorem ipsum dolor</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae et esse consectetur dolore, natus, quae magni praesentium nesciunt.</p>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="details text-center">
          <a href="#">
            <img src="{{url('')}}/assets/images/facilates-icon3.png" alt="icon">
            <h5>Lorem ipsum dolor</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae et esse consectetur dolore, natus, quae magni praesentium nesciunt.</p>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="details text-center">
          <a href="#">
            <img src="{{url('')}}/assets/images/facilates-icon2.png" alt="icon">
            <h5>Lorem ipsum dolor</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae et esse consectetur dolore, natus, quae magni praesentium nesciunt.</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="abc-section py-5 mt-4">
  <div class="container">
    <div class="des text-center">
      <h3>Lorem ipsum dolor sit amet</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id dolor consectetur veritatis atque illo exercitationem! Natus et esse inventore temporibus voluptatum, nam facere in voluptates, ea omnis maiores doloremque voluptate. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati delectus voluptatibus recusandae alias earum accusamus illo deserunt consectetur iusto voluptates veniam, aliquid quaerat quia perferendis natus dicta nostrum non exercitationem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo accusantium quaerat quas nulla exercitationem voluptates aperiam illo? Neque, molestiae harum. Iste eaque dolor officiis architecto odio quod placeat. Ipsam, quia.</p>
    </div>
  </div>
</section>
<section class="about-description">
  <div class="container">
    <div class="title text-center">
      <h2>Lorem Ipsum Dolor Sit</h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="des">
          {{-- <div class="heading">
            <h4>Ipsum Dolor Sit</h4>
          </div> --}}
          <div class="comb">
            <img src="{{url('')}}/assets/images/artboard-1.png" alt="">
            <p> 
              Commodi, fuga. Ducimus dolorum provident alias dolorem harum officia ipsum asperiores dolorum provident alias autem.
              </p>
          </div>
          <div class="comb">
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
          </div>
          <div class="link">
            <a href="#">Read More
              <i class="fa fa-angle-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="image">
          <img src="{{url('')}}/assets/images/img1.jpeg" alt="image">
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

