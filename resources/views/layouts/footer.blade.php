<section class="subscribe">
  <div class="container">
    <div class="detail">
      <div class="row no-gutters">
        <div class="col-lg-4">
          <h2>{{getSettings('subscribe-newsletter',$language->id)}}</h2>
        </div>
        <div class="col-lg-8">
          <form class="d-flex">
            <div class="form-group">
              <label for="text"></label>
              <input type="text" class="form-control" id="text">
            </div>
            <div class="link">
              <a href="#">{{getSettings('subscribe-button',$language->id)}}
              </a>
            </div>
          </form>
        </div>
      </div>


    </div>
  </div>
</section>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="logo-footer">
          <a href="#">
            <img src="{{url('')}}/assets/images/logo-footer.webp" alt="">
          </a>
        </div>
        <div class="detail">
          <p>{{getSettings('footer-text',$language->id)}} </p>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-6 col-6">
        <div class="footer-links">
          <h3>{{getSettings('quick-links',$language->id)}}</h3>
          @foreach (navMenu()->where('language_id',$language->id)->where('parent_id', 0) as $menu)
          <li>
            <a href="{{route($menu->route,$language->code ?? 'en')}}"><i class="fa fa-angle-right"></i>{{$menu->name}}</a>
          </li>
          @endforeach
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-6 col-6">
        <div class="footer-links">
          <h3>{{getSettings('socialize',$language->id)}}</h3>
          <li>
            <a href="{{getConfig('social_facebook')}}"><i class="fa fa-facebook"></i> Facebook</a>
             </li>
          <li>
            <a href="{{getConfig('social_twitter')}}"><i class="fa fa-twitter"></i> Twitter</a>
            </li>
          <li>
            <a href="{{getConfig('social_linkedin')}}"><i class="fa fa-linkedin"></i> Linkedin</a>
            </li>
          <li>
            <a href="{{getConfig('social_linkedin')}}"><i class="fa fa-youtube-play"></i> Youtube</a>
            </li>
        </div>
      </div>
      <div class="col-lg-4 mb-md-2 col-sm-6 ">
        <div class="footer-links">
          <h3>{{getSettings('contact-us',$language->id)}}</h3>
          <li>
            <a href="#" target="_blank"><i class="fa fa-map-marker"></i>{{getConfig('address')}}</a>
          </li>
          <li>
            <a href="tel: 00-000-0000"><i class="fa fa-phone"></i>{{getConfig('contact_number')}}</a>
            </li>
          <li>
            <a href="mailto:info@armourincontinence.com"><i class="fa fa-envelope"></i>{{getConfig('site_email')}}</a>
            </li>
        </div>
      </div>
    </div>
    <hr class="line">
    <div class="footer-bottom ">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 ">
          <div class="left">
            <p>Copyright 2020 © All Rights Reserved</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="right">
            <p>Design & Developed By: <a href="#">Horizon Technologies</a> </p>
          </div>
        </div>
    </div>
  </div>
</footer>
