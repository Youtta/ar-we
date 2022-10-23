@extends('layouts.master')
@section('title', 'CONTACT US')

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
      </div>
    </div>
  </div>

  <div class="hero-title">
    <h1 class="main-title">{{getSettings('contact-us-heading', $language->id)}}</h1>
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
                    {{getSettings('contact-us-heading', $language->id)}}
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
    <h3 class="text-center py-4">{{getSettings('drop-mail', $language->id)}}</h3>
    <div class="row">
      <div class="col-md-6">
        <div class="contact-map">
          <iframe src="{{getConfig('google_source')}}" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
      <div class="col-md-6">
        <div class="contact-form">
          <form action="{{route('contact.store',[$language->code ?? 'en'])}}" method="POST">
             @csrf
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName">{{getSettings('first-name-field', $language->id)}}</label>
                    <input type="text" name="first_name" class="form-control" id="inputName" placeholder="{{getSettings('first-name-field', $language->id)}}" required value="{{old('first_name') ?? null}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputLastName">{{getSettings('last-name-field', $language->id)}}</label>
                    <input type="text" name="last_name" class="form-control" id="inputLastName" placeholder="{{getSettings('last-name-field', $language->id)}}" required value="{{old('last_name') ?? null}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">{{getSettings('email-field', $language->id)}}</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="{{getSettings('email-field', $language->id)}}" required value="{{old('first_name') ?? null}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCity">{{getSettings('city-field', $language->id)}}</label>
                    <input type="text" name="city" class="form-control" id="inputCity" placeholder="{{getSettings('city-field', $language->id)}}" required value="{{old('city') ?? null}}">
                </div>
                </div>
                <div class="form-group">
                <label for="inputAddress">{{getSettings('subject-field', $language->id)}}</label>
                <input type="text" name="subject" class="form-control" id="inputAddress" placeholder="{{getSettings('subject-field', $language->id)}}"  required value="{{old('subject') ?? null}}">
                </div>
                <div class="form-group">
                <label for="exampleFormControlTextarea1">{{getSettings('message-field', $language->id)}}</label>
                <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="4" required>{{old('message') ?? null}}</textarea>
                </div>
                <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        {{getSettings('check-me-out', $language->id)}}
                    </label>
                </div>
                </div>
                <div class="link pt-4">
            <button type="submit" class="btn btn-primary">{{getSettings('submit-button', $language->id)}}</button>
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
          <p>{{getConfig('site_email')}}</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="item-detail text-center">
          <i class="fa fa-phone"></i>
          <p>{{getConfig('contact_number')}}</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="item-detail text-center">
          <i class="fa fa-map-marker"></i>
          <p> {{getConfig('address')}}
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

