<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Armour Incontinence</title>
    <link rel="icon" type="image/png" sizes="96x96" href="{{url('')}}/assets/images/fav.png">
    <link href="{{url('')}}/assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="{{url('')}}/assets/css/icons.css" rel="stylesheet">
    <link href="{{url('')}}/assets/css/styles.css" rel="stylesheet">

     {{-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> --}}

     {{-- <link rel="stylesheet" href="{{url('/')}}/assets/css/jquery.fancybox.min.css"> --}}




    @yield('top-styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <link href="{{url('/').mix("assets/css/custom.css")}}" rel="stylesheet">
  </head>
  <body>

    @section('header')
      @include('layouts.header')
    @show
    <div class="main-content">
      @yield('content')
    </div>

    @section('footer')
      @include('layouts.footer')
    @show




    <script src="{{url('')}}/assets/js/jquery-3.5.1.min.js"></script>
    <script src="{{url('')}}/assets/js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
     {{-- <script src="{{url('/')}}/assets/js/jquery.fancybox.min.js"></script>  --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script> --}}

    <script>
      $(window).scroll(function() {
        if ($(this).scrollTop() > 300 ){
          $('header .header').addClass("sticky");
        }
        else{
          $('header .header').removeClass("sticky");
        }
      });

      $(window).scroll(function() {
        if ($(this).scrollTop() > 300 ){
          $('.main-content').addClass("sticky");
        }
        else{
          $('.main-content').removeClass("sticky");
        }
      });

      $('#cssmenu li a').each(function(){
        // and test its normalized href against the url pathname regexp
        var pageUrl = window.location.href.split(/[?#]/)[0];
        if(this.href == pageUrl || this.href == pageUrl.substring(0,this.href.length)){
          $('#cssmenu li').removeClass('activeMenu');
          $(this).parent().addClass('activeMenu');
          $(this).parent().parent().addClass('activeMenu');
          $(this).parent().parent().parent().addClass('activeMenu');
          $(this).parent().parent().parent().parent().addClass('activeMenu');
          $(this).parent().parent().parent().parent().parent().addClass('activeMenu');
        }
      });
    </script>



    @yield('bottom-bot-scripts')

  </body>
</html>
