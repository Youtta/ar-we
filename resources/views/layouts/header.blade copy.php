<header>
  <div class="header">
    <div class="container">
      <div class="top-header d-flex justify-content-between">
        <div class="icons">
          <a href="#">
            <i class="fa fa-facebook"></i>
          </a>
          <a href="#">
            <i class="fa fa-twitter"></i>
          </a>
          <a href="#">
            <i class="fa fa-linkedin"></i>
          </a>
          <a href="#">
            <i class="fa fa-youtube-play"></i>
          </a>
        </div>
        <div class="header-cnt d-flex">
          <div class="mail">
            <a href="mailto:info@armourincontinence.com">
              <i class="fa fa-envelope"></i> <span>info@armour.com</span> 
            </a>
          </div>
          <div class="number">
            <a href="tel: 00-000-0000">
              <i class="fa fa-phone"></i><span class="md-ds"> 00-000-0000</span>
            </a>
          </div>
          <div class="languages">
            <div class="multi_language">
              <div class="switch-lang">
                <div class="current-lang"><img class="lang-flag" src="https://cdn3.iconfinder.com/data/icons/142-mini-country-flags-16x16px/32/flag-united-kingdom2x.png"/>
                  <p class="lang-text">EN <i class="fa fa-angle-down"></i></p>
                </div>
                {{-- <div class="current-lang"><img class="lang-flag" src=""/>
                  <p class="lang-text"> <i class="fa fa-angle-down"></i></p>
                </div> --}}
    
                <div class="lang-dropdown">
                
                      {{-- <a class="dropdown-item" href="">
                        <div class="selecting-lang abc">
                          <img class="lang-flag" src=""/>
                        </div>
                      </a> --}}
                    <a class="dropdown-item" href="#">
                      <div class="selecting-lang">
                        <img class="lang-flag" src="https://cdn3.iconfinder.com/data/icons/142-mini-country-flags-16x16px/32/flag-china2x.png"/>
                        CH
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="selecting-lang">
                        <img class="lang-flag" src="https://cdn3.iconfinder.com/data/icons/142-mini-country-flags-16x16px/32/flag-saudi-arabia2x.png"/>
                        AR
                      </div>
                    </a>
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
            <img src="{{url('')}}/assets/images/logo.webp" alt="image">
          </a>
        </div>
        <div class="search-box align-self-center">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
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
              <li class=""><a href='{{url('/')}}'>Home</a></li>
              <li><a href='#'>About Us</a></li>
              <li class=' has-sub'><a href='#'>Products</a>
                <ul>
                    <li class=''><a href='#'>Product 1</a>
                      {{-- <ul>
                          <li><a href='#'>Sub Product</a></li>
                          <li><a href='#'>Sub Product</a></li>
                      </ul> --}}
                    </li>
                    <li class=''><a href='#'>Product 2</a>
                      {{-- <ul>
                          <li><a href='#'>Sub Product</a></li>
                          <li><a href='#'>Sub Product</a></li>
                      </ul> --}}
                    </li>
                </ul>
              </li>
              {{-- <li class=' has-sub'><a href='#'>Services</a>
                <ul>
                    <li class='has-sub'><a href='#'>Product 1</a>
                      <ul>
                          <li><a href='#'>Sub Product</a></li>
                          <li><a href='#'>Sub Product</a></li>
                      </ul>
                    </li>
                    <li class='has-sub'><a href='#'>Product 2</a>
                      <ul>
                          <li><a href='#'>Sub Product</a></li>
                          <li><a href='#'>Sub Product</a></li>
                      </ul>
                    </li>
                </ul>
              </li>
              <li><a href='#'>Articles</a></li>
              <li><a href='#'>Live</a></li> --}}
              <li><a href='{{url('')}}/contact-us'>Contact Us</a></li>
            </ul>
          </div>
          <div class="header-icons ml-auto">
            <a href="#" class="d-flex">
              <div class="image">
                <img src="{{url('')}}/assets/images/header-icon2.webp" alt="image">
              </div>
              <span>Where You Buy</span>
            </a>
          </div>
          <div class="header-icons ml-1">
            <a href="#" class="d-flex">
            <div class="image">
              <img src="{{url('')}}/assets/images/header-icon1.webp" alt="image">
            </div>
              <span>Product Finder</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>