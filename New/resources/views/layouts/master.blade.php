<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <meta name="description" content="Himpunan Mahasiswa Teknik Computer-Informatika ITS">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">

  <meta property="og:url" content="hmtc.if.its.ac.id">
  <meta property="og:title" content="HMTC ITS">
  <meta property="og:site_name" content="HMTC ITS - Official Portal">
  <meta property="og:description" content="Himpunan Mahasiswa Teknik Computer-Informatika ITS">
  <meta property="og:image" content="{{url('assets/img/favicon.png')}}">
  <meta property="og:type" content="website">
  <meta property="fb:app_id" content="">

  <meta name="twitter:card" content="HMTC ITS">
  <meta name="twitter:site" content="HMTC ITS">
  <meta name="twitter:description" content="Himpunan Mahasiswa Teknik Computer-Informatika ITS">
  <meta name="twitter:title" content="HMTC ITS">
  <meta name="twitter:image" content="{{url('assets/img/favicon.png')}}">

  <link rel="apple-touch-icon" href="{{url('assets/img/favicon.png')}}">
  <link rel="icon" type="image/png" href="{{url('assets/img/favicon.png')}}">

  <title>Himpunan Mahasiswa Teknik Computer Informatika ITS</title>

  <link rel="stylesheet" href="{{url('assets/css/main.css')}}">
  <script src="{{url('assets/js/vendor/modernizr.min.js')}}"></script>
</head>
<body ng-app="hmtc-app" ng-controller="mainController">
  <!--[if lt IE 9]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  {{-- <div class="page-loading" ng-class="{'is-hidden': !pageError}">
    <div class="page-loading-container">
      <p><i class="fa fa-frown-o fa-5x"></i></p>
      <p><strong>Sorry, something went wrong. <br>Please reload the page.</strong><p>
    </div>
  </div> --}}
  {{-- <div class="page-loading" ng-class="{'is-hidden': !pageLoading}">
    <div class="page-loading-container">
      <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
    </div>
  </div> --}}

  <div>
    <a class="btn btn--back" href="/">
      <i class="fa fa-home"></i>
    </a>
  </div>

  <header>
    <nav class="sitenav" id="nav">
      <ul class="sitenav-items list-nostyle list-inline">
        <li class="sitenav-list">
          <a class="sitenav-anchor" ng-class="{'is-active': navPointer.onArticle}" href="#article">article</a>
        </li>
        <li class="sitenav-list">
          <a class="sitenav-anchor" ng-class="{'is-active': navPointer.onStory}" href="#story">story</a>
        </li>
        <li class="sitenav-list">
          <a class="sitenav-anchor" ng-class="{'is-active': navPointer.onMedia}" href="#media">media</a>
        </li>
      </ul>
    </nav>
  </header>

  <main>
    {{-- @include('partials.header') --}}
    @yield('content')
  </main>

  @include('partials.footer')

  <script>window.myPrefix = '';</script>
  <!-- <script src="https://cdn.polyfill.io/v2/polyfill.js?features=default,promise,fetch"></script> -->
  <script src="{{url('assets/js/vendor/jquery.min.js')}}"></script>
  <script src="{{url('assets/js/vendor/object-fit-images.min.js')}}"></script>
  <script src="{{url('assets/js/vendor/slick.min.js')}}"></script>
  <script src="{{url('assets/js/vendor/angular.min.js')}}"></script>
  <script src="{{url('assets/js/vendor/angular-slick.min.js')}}"></script>
  <script src="{{url('assets/js/vendor/angular-route.min.js')}}"></script>
  <script src="{{url('assets/js/vendor/angular-sanitize.min.js')}}"></script>
  <!-- <script src="{{url('assets/js/vendor/angular-cookies.min.js')}}"></script> -->
  <!-- <script src="{{url('assets/js/vendor/angular-storage.min.js')}}"></script> -->
  <script src="{{url('assets/js/main.min.js')}}"></script>
  <script type="text/javascript">
    $("nav").find("a").click(function(e) {
      e.preventDefault();
      var section = $(this).attr("href");
      $("html, body").animate({
        scrollTop: $(section).offset().top
      });
    });
  </script>
</body>
</html>
