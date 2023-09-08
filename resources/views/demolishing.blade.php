@extends('layout')
@section('title')
{{$title}}
@endsection
@section('main-content')

<!-- CONTENT START -->
<div class="page-content" style="padding-top: 0px;">

<!-- INNER PAGE BANNER -->
<div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5" style="background-image:url({{asset('assets/images/banner/services.jpg')}});">
<div class="overlay-main bg-black opacity-07"></div>
<div class="container">
<div class="wt-bnr-inr-entry">
<div class="banner-title-outer">
<div class="banner-title-name">
	<h2 class="text-white">{{$title}}</h2>
</div>
</div>
<!-- BREADCRUMB ROW -->                            
@include('include/breadcrumb')  

<!-- BREADCRUMB ROW END -->                        
</div>
</div>
</div>
<!-- INNER PAGE BANNER END -->
<!-- OUR SERVICES START -->
<div class="section-full p-t80 p-b50 bg-gray">
             
<div class="container">
@include('include/service-head')

                        

                             
</div>
</div>   
<!-- OUR SERVICES END -->
<!-- WELCOME SECTION START -->
<div class="section-full p-t80 p-b80 bg-white overflow-hide">
<div class="container">
<div class="section-content">
<div class="row">

<div class="col-lg-6 col-md-12">
	
            
            <h3 class="m-t0 wt-title">{{ __('messages.demolishing_title') }}</h3>
            <p align="justify">
            	{{ __('messages.demolishing_content') }}
            </p>
            <!-- <a href="javascript:;" class="site-button-link">Read More</a> -->
       
</div>                                
<div class="col-lg-6 col-md-12">
	<div class="arc-home-about-right portfolio-wrap" style="position: relative; height: 566.61px;">
    	<div class="row">
    		<div class="col-md-6 col-sm-6 masonry-item" style="position: absolute; left: 270px; top: 320px;">
            	<div class="img-reflection" style="width: 535px;">
                	<img src="{{asset('assets/images/services/scrap-collection.jpg')}}" alt="">
                </div>
            </div>
    	</div>		
    </div>
</div>

</div>


</div>
</div>
</div>   
<!-- WELCOME  SECTION END -->  


<div class="row"></div>
                          

</div>
<!-- CONTENT END -->
@endsection

