<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

<!-- META -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="robots" content="" />    
<meta name="description" content="" />

<!-- FAVICONS ICON -->
<link rel="icon" href="images/favicon.html" type="image/x-icon" />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

<!-- PAGE TITLE HERE -->
<title>@yield('title') | T Square Solution</title>

<!-- MOBILE SPECIFIC -->
<meta name="viewport" content="width=device-width, initial-scale=1">



<!-- BOOTSTRAP STYLE SHEET -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}} ">    
<!-- FONTAWESOME STYLE SHEET -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome/css/font-awesome.min.css')}}" />
<!-- OWL CAROUSEL STYLE SHEET -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
<!-- SLICK CAROUSEL STYLE SHEET -->    
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick-theme.css')}}">
<!-- MAGNIFIC POPUP STYLE SHEET -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.min.css')}}">
<!-- LOADER STYLE SHEET -->
<!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/loader.min.css')}}">  -->   
<!-- MAIN STYLE SHEET -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">



<!-- FLATICON STYLE SHEET -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/flaticon.min.css')}}">

<!-- REVOLUTION SLIDER CSS -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/revolution/revolution/css/settings.css')}}">
<!-- REVOLUTION NAVIGATION STYLE -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/revolution/revolution/css/navigation.css')}}">

<!-- GOOGLE FONTS -->
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">   
<style type="text/css">
    .footer-logo-bar a img
    {
        height: 35px !important;
    }
    <?php
    if(session()->get('locale') == 'ma')
    { ?>
       h2
       {
        font-size: 20px;
        font-weight: 800;
       }
       h3
       {
        font-size: 18px;
       }
    <?php }
    ?>
</style>
</head>

<body>

<div class="page-wraper"> 

<!-- HEADER START -->
<header class="site-header header-style-1  header-fixed nav-wide">
<div class="main-bar-wraper navbar-expand-lg">
<div class="main-bar p-t5">
<div class="container">
<div class="logo-header">
    <div class="logo-header-inner logo-header-one">
        <a href="{{route('home')}}">
            <img src="{{asset('assets/images/logo-white.svg')}}" alt="" />
        </a>
    </div>
</div>
<!-- NAV Toggle Button -->
<button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
    <span class="icon-bar bar-one"></span>
    <span class="icon-bar bar-two"></span>
    <span class="icon-bar bar-three"></span>
</button>
    <!-- ETRA Nav -->
    <div class="extra-nav">
        
        <div class="extra-cell">	
            <a href="#search" class=" text-white">
            	<i class="fa fa-search"></i>
            </a>
        </div>
    </div>
    <!-- ETRA Nav -->
  
    <!-- SITE Search -->
    <div id="search"> 
        <span class="close"></span>
        <form role="search" id="searchform" action="http://www.thewebmax.com/search" method="get" class="radius-xl">
            <div class="input-group">
                <input class="form-control" value="" name="q" type="search" placeholder="Type to search"/>
                <span class="input-group-append"><button type="button" class="search-btn"><i class="sl-icon-magnifier"></i></button></span>
            </div>   
        </form>
    </div>                                                                                                          
    <!-- MAIN Vav -->
    <div class="header-nav navbar-collapse collapse d-flex justify-content-end">
        <ul class=" nav navbar-nav">
            <li class="{{ request()->is('/') ? 'active' : '' }}">
                <a href="{{route('home')}}">{{ __('messages.home') }}</a>
                
            </li>
            <li class="{{ request()->is('about-us') ? 'active' : '' }}">
                <a href="{{route('about')}}">{{ __('messages.about') }}</a>
                
            </li>
            <li class="{{ ( request()->is('scrap-collection') || request()->is('demolishing') || request()->is('interior-design')  || request()->is('aluminium-fabrication')  || request()->is('roofing')   ) ? 'active' : '' }}">
                <a href="javascript:;">{{ __('messages.services') }}</a>
                <ul class="sub-menu">
            
                    <li>
                        <a href="{{route('scrap')}}">{{ __('messages.scrap') }}</a>
                    </li>
                    <li>
                        <a href="{{route('demolishing')}}">{{ __('messages.demolishing') }}</a>
                    </li>
                    <li>
                        <a href="{{route('interior')}}">{{ __('messages.interior') }}</a>
                    </li>
                    <li>
                        <a href="{{route('aluminium')}}">{{ __('messages.aluminium') }}</a>
                    </li>
                    <li>
                        <a href="{{route('roofing')}}">{{ __('messages.roofing') }}</a>
                    </li>
                </ul>
                
            </li>
            <li class="{{ request()->is('gallery') ? 'active' : '' }}">
                <a href="{{route('gallery')}}">{{ __('messages.gallery') }}</a>
                
            </li>
            <li class="{{ request()->is('contact') ? 'active' : '' }}">
                <a href="{{route('contact')}}">{{ __('messages.contact') }}</a>
                
            </li>
            <li>
                <a href="javascript:;">{{__('messages.language') }}</a>
                <ul class="sub-menu">
            
                    <li>
                        <a href="{{ url('locale/en') }}">English</a>
                    </li>
                    <li>
                        <a href="{{ url('locale/ma') }}">മലയാളം</a>
                    </li>
                </ul>
            </li>

            <!-- <li>
                <a href="javascript:;">Pages</a>
                <ul class="sub-menu">
            
                    <li>
                        <a href="about-1.html">About us</a>
                    </li>
                    <li>
                        <a href="contact-1.html">Contact us</a>
                    </li>
                </ul>
            </li> -->
            
      
        </ul>
    </div>
    
</div>
</div>
</div>



</header>
<!-- HEADER END -->
@yield('main-content')

<!-- FOOTER START -->
<footer class="site-footer footer-large  footer-light">
<div class="footer-social-section bg-secondry">
<div class="container">
<div class="footer-social-content">
<ul>
    <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
    <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
    <li><a href="javascript:;"><i class="fa fa-pinterest-p"></i></a></li>
    <li><a href="javascript:;"><i class="fa fa-instagram"></i></a></li>
    <li><a href="javascript:;"><i class="fa fa-vimeo"></i></a></li>
    <li><a href="javascript:;"><i class="fa fa-youtube"></i></a></li>
</ul>
</div>
</div>
</div>
<!-- FOOTER BLOCKES START -->  
<div class="footer-top overlay-wraper">
<div class="overlay-main"></div>
<div class="container-fluid">
<div class="row">
<!-- RESENT POST -->
<!-- <div class="col-xl-3 col-lg-6 col-md-6">
    <div class="widget recent-posts-entry">
        <h4 class="widget-title  text-uppercase">Recent Post</h4>
        <div class="section-content">
            <div class="widget-post-bx">
                <div class="widget-post clearfix">
                    <div class="wt-post-media">
                        <img src="{{asset('assets/images/blog/recent-blog/pic1.jpg')}}" alt="">
                    </div>
                    <div class="wt-post-info">
                        <div class="wt-post-meta">
                            <ul>
                                <li class="post-author">25 Dec</li>
                                <li class="post-comment"> 20 Comment</li>
                            </ul>
                        </div>                                            
                        <div class="wt-post-header">
                            <h6 class="post-title">Planning approved for restoration town hall.</h6>
                        </div>
                    </div>
                </div>
                <div class="widget-post clearfix">
                    <div class="wt-post-media">
                        <img src="{{asset('assets/images/blog/recent-blog/pic2.jpg')}}" alt="">
                    </div>
                    <div class="wt-post-info">
                        <div class="wt-post-meta">
                            <ul>
                                <li class="post-author">28 Dec</li>
                                <li class="post-comment"> 15 Comment</li>
                            </ul>
                        </div>                                            
                        <div class="wt-post-header">
                            <h6 class="post-title">Planning approved for restoration town hall.</h6>
                        </div>
                    </div>
                </div>
                <div class="widget-post clearfix">
                    <div class="wt-post-media">
                        <img src="{{asset('assets/images/blog/recent-blog/pic3.jpg')}}" alt="">
                    </div>
                    <div class="wt-post-info">
                        <div class="wt-post-meta">
                            <ul>
                                <li class="post-author">30 Dec</li>
                                <li class="post-comment"> 11 Comment</li>
                            </ul>
                        </div>                                            
                        <div class="wt-post-header">
                            <h6 class="post-title">Planning approved for restoration town hall.</h6>
                        </div>
                    </div>
                </div>                                        
            </div>
        </div>
    </div>                      
</div> -->
                         
<!-- ABOUT COMPANY -->
<div class="col-xl-4 col-lg-6 col-md-6">  
    <div class="widget widget_about">
        <h4 class="widget-title  text-uppercase">{{ __('messages.about_footer_title') }}</h4>
        <p>{{ __('messages.about_footer_content') }}</p>  
    </div>
    
                               
</div> 



<!-- USEFUL LINKS -->
<div class="col-xl-4 col-lg-6 col-md-6">
    <div class="widget widget_services inline-links">
        <h4 class="widget-title">{{ __('messages.footer_usefull_links') }}</h4>
        <ul>
            <li><a href="{{route('about')}}">{{ __('messages.about') }}</a></li>
            <li><a href="{{route('scrap')}}">{{ __('messages.scrap') }}</a></li>
            <li><a href="{{route('demolishing')}}">{{ __('messages.demolishing') }}</a></li>
            <li><a href="{{route('interior')}}">{{ __('messages.interior') }}</a></li>
            <li><a href="{{route('aluminium')}}">{{ __('messages.aluminium') }}</a></li>
            <li><a href="{{route('roofing')}}">{{ __('messages.roofing') }}</a></li>                                    
        </ul>

    </div>                           
</div>      

<!-- TAGS -->
<div class="col-xl-4 col-lg-6 col-md-6">
    <div class="widget widget_address_outer m-b20">
        <h4 class="widget-title">{{ __('messages.contact_us') }}</h4>
        <ul class="widget_address">
            <li>92 Princess Road, parkvenue,Greater London, NW18JR, United Kingdom</li>
            <li>thewebmaxdemo@gmail.com</li>
            <li>(+0091) 912-3456-073</li>
            <li>(+0091) 912-3456-084</li>
        </ul>
    </div>
</div>
<!-- NEWSLETTER -->

</div>

</div>
</div>
<!-- FOOTER COPYRIGHT -->
<div class="footer-bottom">
<div class="container">
<div class="footer-logo-bar">
<a href="{{route('home')}}"><img src="{{asset('assets/images/logo-yellow.svg')}}" alt=""></a>
<span class="copyrights-text">© <?=date('Y');?> {{ __('messages.site_name') }} {{ __('messages.designed_by') }} <a href="<?=dev_path();?>" target="_blank"> {{ __('messages.company_name') }}</a> </span>
</div>
</div>
</div>
</footer>
<!-- FOOTER END -->          


<!-- BUTTON TOP START -->
<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>


</div>

<!-- LOADING AREA START ===== -->
<div class="loading-area">
<div class="loading-box"></div>
<div class="loading-pic">
<div id="loadFacebookG">
<div id="blockG_1" class="facebook_blockG"></div>
<div id="blockG_2" class="facebook_blockG"></div>
<div id="blockG_3" class="facebook_blockG"></div>
</div>
</div>
</div>
<!-- LOADING AREA  END ====== --> 

<!-- JAVASCRIPT  FILES ========================================= --> 
<script  src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script  src="{{asset('assets/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{asset('assets/js/popper.min.js')}}"></script><!-- POPPER.MIN JS -->
<script  src="{{asset('assets/js/magnific-popup.min.js')}}"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="{{asset('assets/js/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script  src="{{asset('assets/js/waypoints.min.js')}}"></script><!-- COUNTERUP JS -->
<script  src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script><!-- MASONRY  -->
<script  src="{{asset('assets/js/owl.carousel.min.js')}}"></script><!-- OWL  SLIDER  -->
<script src="{{asset('assets/js/slick.js')}}"></script><!-- SLICK  SLIDER  -->

<script src="{{asset('assets/js/theia-sticky-sidebar.js')}}"></script><!-- STICKY SIDEBAR  -->
<script  src="{{asset('assets/js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->

<!-- REVOLUTION JS FILES -->

<script  src="{{asset('assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script  src="{{asset('assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
<script  src="{{asset('assets/plugins/revolution/revolution/js/extensions/revolution-plugin.js')}}"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script  src="{{asset('assets/js/rev-script-1.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/custom/custom.js')}}"></script>


</body>


</html>