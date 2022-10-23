<header>
  <div class="header">
    <div class="container">
      <div class="top-header d-flex justify-content-between">
        <div class="icons">
          <a href="{{getConfig('social_facebook')}}">
            <i class="fa fa-facebook"></i>
          </a>
          <a href="{{getConfig('social_twitter')}}">
            <i class="fa fa-twitter"></i>
          </a>
          <a href="{{getConfig('social_linkedin')}}">
            <i class="fa fa-linkedin"></i>
          </a>
          <a href="{{getConfig('social_youtube')}}">
            <i class="fa fa-youtube-play"></i>
          </a>
        </div>
        <div class="header-cnt d-flex">
          <div class="mail">
            <a href="mailto:info@armourincontinence.com">
              <i class="fa fa-envelope"></i> <span>{{getConfig('site_email')}}</span>
            </a>
          </div>
          <div class="number">
            <a href="tel: 00-000-0000">
              <i class="fa fa-phone"></i><span class="md-ds">{{getConfig('contact_number')}}</span>
            </a>
          </div>
          <div class="languages">
            <div class="multi_language">
              <div class="switch-lang">
                    <a href="{{route(\Request::route()->getName() ?? 'home', [$otherLanguages->code ?? 'en', $slug ?? null])}}"> <div class="current-lang"><img class="lang-flag" src="{{$language->where('default',1)->first()->icon}}"/>
                    <p class="lang-text">{{$language->where('default',1)->first()->name}} <i class="fa fa-angle-down"></i></p></a>

                </div>
                <div class="lang-dropdown">
                    @foreach(getLanguages() as $otherLanguages)
                    <a class="dropdown-item" href="{{route(\Request::route()->getName() ?? 'home', [$otherLanguages->code ?? 'en',$slug ?? null])}}">
                      <div class="selecting-lang">
                        <img class="lang-flag" src="{{$otherLanguages->icon}}"/>
                        {{$otherLanguages->name}}
                      </div>
                    </a>
                    @endforeach
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="middle-header d-flex  justify-content-between">
        <div class="logo">
          <a href="{{url('/')}}">
            <img src="{{config('armour.cms_url')}}{{getConfig('site_logo')}}" alt="image">
          </a>
        </div>
        <div class="search-box align-self-center">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="{{getSettings('search', $language->id)}}">
            <div class="input-group-append">
              <button class="btn btn-secondary" type="button">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom-header">
      <div class="container">
        <div class="menu d-flex md-content-between">
          <div id='cssmenu'>
            <ul>
            @foreach(navMenu()->where('language_id',$language->id) as $menu)
              @if($menu->is_child != 0)
              <li class='has-sub'>
                <a href='{{url('')}}/{{$language->code}}/products'>{{$menu->name}}</a>
                <ul>
                  @foreach(getCategories()->where('language_id', $language->id) as $category)
                    <li class=''>
                      <a href='{{route('product-detail',[$language->code ?? 'en', $category->slug])}}'>{{Str::of($category->name)->title()}}</a>
                    </li>
                  @endforeach
                </ul>
              </li>
              @elseif($menu->parent_id == 0)
              <li>
                <a href='{{route($menu->route,$language->code ?? 'en')}}'>{{$menu->name}}</a>
              </li>
              {{-- @elseif($menu->route == 'product')
              <li>
                <a href='{{route('product')}}'>products</a>
              </li> --}}
            @endif
            @endforeach
            </ul>
          </div>
          <div class="header-icons ml-auto">
            <a href="#" class="d-flex">
              <div class="image">
                <img src="{{url('')}}/assets/images/header-icon2.webp" alt="image">
              </div>
              <span>{{getSettings('where-you-buy', $language->id)}}</span>
            </a>
          </div>
          <div class="header-icons ml-1">
            <a href="#" class="d-flex">
            <div class="image">
              <img src="{{url('')}}/assets/images/header-icon1.webp" alt="image">
            </div>
              <span>{{getSettings('product-finder', $language->id)}}</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
