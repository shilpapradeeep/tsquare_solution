@extends('layout')
@section('title')
{{$title}}
@endsection
@section('main-content')

<!-- CONTENT START -->
<div class="page-content" style="padding-top: 0px;">

<!-- INNER PAGE BANNER -->
<div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5" style="background-image:url({{asset('assets/images/banner/about.jpg')}});">
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

<!-- WELCOME SECTION START -->
<div class="section-full p-t80 p-b80 bg-white overflow-hide">
<div class="container">
<div class="section-content">

<div class="row">

<div class="col-lg-6 col-md-12">
	<div class="arc-home-about-left">
    	<div class="arc-home-left-content  bg-gray">
            <h3 class="m-t0 wt-tilte-light">{{ __('messages.about_h3') }}</h3>
            <h2 class="m-t0 wt-title">{{ __('messages.about_h2') }}</h2>
            <p align="justify">{{ __('messages.about_content') }} </p>
            <!-- <a href="javascript:;" class="site-button-link">Read More</a> -->
        </div>
    </div>
</div>

<div class="col-lg-6 col-md-12">
	<div class="arc-home-about-right portfolio-wrap" style="position: relative; height: 566.61px;">
    	<div class="row">
        	<div class="col-md-6 col-sm-6 masonry-item" style="position: absolute; left: 0px; top: 0px;">
            	<div class="arc-about-year text-uppercase text-right m-b20">
                	<div class="arc-about-year-pic img-reflection">
                		<img src="{{asset('assets/images/about/s-1.jpg')}}" alt="">
                    </div>
                    <div class="arc-about-year-info">
                        <span class="title-small">{{ __('messages.working') }} <br>{{ __('messages.experience') }}</span>
                        <h2 class="wt-title m-tb0">{{ __('messages.year') }}</h2>
                        <span class="text-outline">5</span>
                    </div>    
                </div>
            </div>

        	<div class="col-md-6 col-sm-6 masonry-item" style="position: absolute; left: 270px; top: 0px;">
            	<div class="wt-media m-b20 img-reflection">
                	<img src="{{asset('assets/images/about/l-2.jpg')}}" alt="">
                </div>
            </div>

        	<div class="col-md-6 col-sm-6 masonry-item" style="position: absolute; left: 0px; top: 245px;">
            	<div class="wt-media m-b20 img-reflection">
                	<img src="{{asset('assets/images/about/l-1.jpg')}}" alt="">
                </div>
            </div>

        	<div class="col-md-6 col-sm-6 masonry-item" style="position: absolute; left: 270px; top: 320px;">
            	<div class="wt-media m-b20 img-reflection">
                	<img src="{{asset('assets/images/about/s-3.jpg')}}" alt="">
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

<!-- OUR SERVICES START -->
 @include('include/services') 
<!-- OUR SERVICES END -->

<!-- OUR TEAM START -->
 @include('include/our_team')
<!-- OUR TEAM END -->  

                         

</div>
<!-- CONTENT END -->
@endsection

