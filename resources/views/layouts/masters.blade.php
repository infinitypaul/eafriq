<!doctype html>
<html lang="en">


<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>esmsafrica</title>

<!-- Fonts Online -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<!-- Style Sheet -->
<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('css/main-style.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<div id="main-wrapper"> 
  
  <!-- Top Toolbar -->
  <div class="toolbar">
    <div class="uou-block-1a blog">
      <div class="container">
        <div class="search"> <a href="#" class="toggle fa fa-search"></a>
          <form action="#">
            <input type="text" class="search-input" placeholder="Search ...">
            <input type="submit" value="">
          </form>
        </div>
        <ul class="social">
          <li><a href="#" class="fa fa-facebook"></a></li>
          <li><a href="#" class="fa fa-twitter"></a></li>
          <li><a href="#" class="fa fa-google-plus"></a></li>
        </ul>
        <ul class="authentication">
          <li><a href="#">Login</a></li>
          <li><a href="#">Register</a></li>
        </ul>
        <div class="language"> <a href="#" class="toggle"><img src="{{asset('images/flags/32/US.png')}}" alt=""> ENG</a>
          <ul>
            <li><a href="#"><img src="{{asset('images/flags/32/PT.png')}}" alt=""> ENG</a></li>
            <li><a href="#"><img src="{{asset('images/flags/32/FR.png')}}" alt=""> FR</a></li>
            <li><a href="#"><img src="{{asset('images/flags/32/ES.png')}}" alt=""> ES</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- end .uou-block-1a --> 
  </div>
  <!-- end toolbar -->
  
  <div class="box-shadow-for-ui">
    <div class="uou-block-2b">
      <div class="container"> <a href="#" class="logo"><img src="{{asset('images/logo.png')}}" alt=""></a> <a href="{{ action('HomeController@getIndex') }}" class="mobile-sidebar-button mobile-sidebar-toggle"><span></span></a>
        <nav class="nav">
          <ul class="sf-menu">
            <li class="active"><a href="{{ action('HomeController@getIndex') }}"><i class="fa  fa-home"></i></a></li>
            <li> <a href="listing-filter.html">Professionals</a> </li>
            <li> <a href="index-2.html">Pages</a>
              <ul>
                <li><a href="profile_company.html">Profile Company</a></li>
                <li><a href="profile_company-no-tabs.html">Profile Company No Tabs</a></li>
                <li><a href="user-dashboard(connections)(hotkeys-disabled).html">User Dashboard 1</a></li>
                <li><a href="user-dashboard(connections)(hotkeys-enabled).html">User Dashboard 2</a></li>
                <li><a href="user-dashboard(followers).html">User Dashboard 3</a></li>
                <li><a href="user-dashboard(following).html">User Dashboard 4</a></li>
                <li><a href="blog-post.html">Blog Post</a></li>
              </ul>
            </li>
            <li> <a href="{{ action('HomeController@getPricing') }}">Pricing</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="gui-kit.html">GUI KIT</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- end .uou-block-2b --> 
  </div>
  
  	@yield('content')
    
    @yield('footer')
  

<div class="uou-block-4a secondary dark">
  <div class="container">
    <ul class="links">
      <li><a href="#">Privacy Policy</a></li>
      <li><a href="#">Terms &amp; Conditions</a></li>
    </ul>
    <p>Copyright &copy; 2015 <a href="#">eSMSafrica</a>. All Rights reserved.</p>
  </div>
</div>
<!-- end .uou-block-4a -->

<div class="uou-block-11a">
  <h5 class="title">Menu</h5>
  <a href="#" class="mobile-sidebar-close">&times;</a>
  <nav class="main-nav">
    <ul>
      <li class="active"><a href="index-2.html">Index</a></li>
      <li> <a href="listing-filter.html">Professionals</a> </li>
      <li><a href="profile_company.html">Profile Company</a></li>
      <li><a href="profile_company-no-tabs.html">Profile Company No Tabs</a></li>
      <li><a href="user-dashboard(connections)(hotkeys-disabled).html">User Dashboard 1</a></li>
      <li><a href="user-dashboard(connections)(hotkeys-enabled).html">User Dashboard 2</a></li>
      <li><a href="user-dashboard(followers).html">User Dashboard 3</a></li>
      <li><a href="user-dashboard(following).html">User Dashboard 4</a></li>
      <li><a href="blog-post.html">Blog Post</a></li>
      <li> <a href="{{ action('HomeController@getPricing') }}">Pricing</a></li>
      <li><a href="blog.html">Blog</a></li>
      <li><a href="gui-kit.html">GUI KIT</a></li>
    </ul>
  </nav>
  <hr>
</div>

<!-- Scripts --> 
<script src="https://maps.googleapis.com/maps/api/js"></script> 
<script src="{{asset('js/jquery-2.1.3.min.js')}}"></script> 
<script src="{{asset('js/bootstrap.js')}}"></script> 
<script src="{{asset('js/plugins/superfish.min.js')}}"></script> 
<script src="{{asset('js/jquery.ui.min.js')}}"></script> 
<script src="{{asset('js/plugins/rangeslider.min.js')}}"></script> 
<script src="{{asset('js/plugins/jquery.flexslider-min.js')}}"></script> 
<script src="{{asset('js/uou-accordions.js')}}"></script> 
<script src="{{asset('js/uou-tabs.js')}}"></script> 
<script src="{{asset('js/plugins/select2.min.js')}}"></script> 
<script src="{{asset('js/owl.carousel.min.js')}}"></script> 
<script src="{{asset('js/gmap3.min.js')}}"></script> 
<script src="{{asset('js/scripts.js')}}"></script> 
<script>

</script>
</body>


</html>