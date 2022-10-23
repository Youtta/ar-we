@extends('layouts.master')
@section('title', 'Product')

@section('top-styles')

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
                <div class="custom_single-breadcrumb-wrap active-page">
                  <span class="custom_sep"><i class="fa fa-angle-right"></i></span> <span class="custom_breadcrumb">
                    {{getSettings('product-heading', $language->id)}}
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

<section class="productPage">
  <div class="container">
    <div class="row justify-content-center">
        @foreach($products as $product)
            <div class="col-md-4">
                <div class="productCardBody">
                <div class="productImage">
                    <a href="{{url('')}}/en/product-detail">
                    <img src="{{config('armour.cms_url').$product->image}}" alt="{{$product->name}}">
                    </a>
                    <div class="readProduct">
                    <a href="{{url('')}}/en/product-detail">View</a>
                    </div>
                </div>
                <div class="productDetail">
                    <a href="{{url('')}}/en/product-detail">
                    <h1 class="productTitle text-truncate">{{$product->name}}</h1>
                    </a>
                    {!!$product->description!!}
                </div>
                </div>
            </div>
        @endforeach
      {{-- <div class="col-md-4">
        <div class="productCardBody">
          <div class="productImage">
            <a href="#">
              <img src="{{url('')}}/assets/images/products/underpants.webp" alt="Prouct Image">
            </a>
            <div class="readProduct">
              <a href="#">View</a>
            </div>
          </div>
          <div class="productDetail">
            <a href="#">
              <h1 class="productTitle text-truncate">Adult Pants</h1>
            </a>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, aut ipsum similique voluptatum ut commodi perferendis, quos optio recusandae dolore quis natus neque eligendi voluptatibus voluptatem consequuntur odit? Sed, mollitia?
            </p>
          </div>
        </div>
      </div> --}}
      {{-- <div class="col-md-4">
        <div class="productCardBody">
          <div class="productImage">
            <a href="#">
              <img src="{{url('')}}/assets/images/products/adultswipes.webp" alt="Prouct Image">
            </a>
            <div class="readProduct">
              <a href="#">View</a>
            </div>
          </div>
          <div class="productDetail">
            <a href="#">
              <h1 class="productTitle text-truncate">Adult Pants</h1>
            </a>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, aut ipsum similique voluptatum ut commodi perferendis, quos optio recusandae dolore quis natus neque eligendi voluptatibus voluptatem consequuntur odit? Sed, mollitia?
            </p>
          </div>
        </div>
      </div> --}}

    </div>
  </div>
</section>

@endsection

@section('footer')
  @parent
@endsection

@section('bottom-bot-scripts')

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> --}}

<script>
  AOS.init();
</script>
@endsection

