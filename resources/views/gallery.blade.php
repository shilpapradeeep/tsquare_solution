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
                    <!-- PAGINATION START -->
                    <div class="filter-wrap p-b30">
                        <ul class="masonry-filter link-style  text-uppercase">
                                <li class="active"><a data-filter="*" href="#">All</a></li>
                                <li><a data-filter=".cat-1" href="#">{{ __('messages.scrap') }}</a></li>
                                <li><a data-filter=".cat-2" href="#">{{ __('messages.demolishing') }}</a></li>
                                <li><a data-filter=".cat-3" href="#">{{ __('messages.interior') }}</a></li>
                                <li><a data-filter=".cat-4" href="#">{{ __('messages.aluminium') }}</a></li>
                                <li><a data-filter=".cat-5" href="#">{{ __('messages.roofing') }}</a></li>
                        </ul>
                    </div>
                    <!-- PAGINATION END -->
                    
                    <!-- GALLERY CONTENT START -->
                     <div class="portfolio-wrap mfp-gallery work-grid row clearfix">
                        <!-- COLUMNS 1 -->
                        <div class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-12 m-b30">
                        
                            <div class="project-img-effect-1">
                                <img src="{{asset('assets/images/gallery/P-1.jpg')}}" alt="" />
                                <div class="wt-info">
                                    <h4 class="wt-tilte text-white  m-b10 m-t0">{{ __('messages.service_title_1') }}</h4>
                                    <p>{{ __('messages.service_short_content_1') }}</p>
                                </div>
                                <i></i>
                                <a href="#"></a>
                            </div>                              
                            
                                                                                             
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="masonry-item cat-2 col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="project-img-effect-1">
                                <img src="{{asset('assets/images/gallery/P-1.jpg')}}" alt="" />
                                <div class="wt-info">
                                    <h4 class="wt-tilte text-white  m-b10 m-t0">{{ __('messages.service_title_2') }}</h4>
                                    <p>{{ __('messages.service_short_content_2') }}</p>
                                </div>
                                <i></i>
                                <a href="javascript:;"></a>
                            </div>     
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="masonry-item cat-3 col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="project-img-effect-1">
                                <img src="{{asset('assets/images/gallery/P-1.jpg')}}" alt="" />
                                <div class="wt-info">
                                    <h4 class="wt-tilte text-white  m-b10 m-t0">{{ __('messages.service_title_5') }}</h4>
                                    <p>{{ __('messages.service_short_content_5') }}</p>
                                </div>
                                <i></i>
                                <a href="#"></a>
                            </div>       
                        </div>
                        <!-- COLUMNS 4 -->
                        <div class="masonry-item cat-4 col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="project-img-effect-1">
                                <img src="{{asset('assets/images/gallery/P-1.jpg')}}" alt="" />
                                <div class="wt-info">
                                    <h4 class="wt-tilte text-white  m-b10 m-t0">{{ __('messages.service_title_3') }}</h4>
                                    <p>{{ __('messages.service_short_content_3') }}</p>
                                </div>
                                <i></i>
                                <a href="javascript:;"></a>
                            </div>     
                        </div>
                        <!-- COLUMNS 5 -->
                        <div class="masonry-item cat-5 col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="project-img-effect-1">
                                <img src="{{asset('assets/images/gallery/P-1.jpg')}}" alt="" />
                                <div class="wt-info">
                                    <h4 class="wt-tilte text-white  m-b10 m-t0">{{ __('messages.service_title_4') }}</h4>
                                    <p>{{ __('messages.service_short_content_4') }}</p>
                                </div>
                                <i></i>
                                <a href="javascript:;"></a>
                            </div>    
                        </div>
                        <!-- COLUMNS 6 -->
                        <div class="masonry-item cat-4 col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="project-img-effect-1">
                                <img src="{{asset('assets/images/gallery/P-1.jpg')}}" alt="" />
                                <div class="wt-info">
                                    <h4 class="wt-tilte text-white  m-b10 m-t0">{{ __('messages.service_title_3') }}</h4>
                                    <p>{{ __('messages.service_short_content_3') }}</p>
                                </div>
                                <i></i>
                                <a href="javascript:;"></a>
                            </div>      
                        </div>
                        <!-- COLUMNS 7 -->
                        <div class="masonry-item cat-3 col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="project-img-effect-1">
                                <img src="{{asset('assets/images/gallery/P-1.jpg')}}" alt="" />
                                <div class="wt-info">
                                    <h4 class="wt-tilte text-white  m-b10 m-t0">{{ __('messages.service_title_5') }}</h4>
                                    <p>{{ __('messages.service_short_content_5') }}</p>
                                </div>
                                <i></i>
                                <a href="javascript:;"></a>
                            </div>    
                        </div>
                        <!-- COLUMNS 5 -->
                        <div class="masonry-item cat-2 col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="project-img-effect-1">
                                <img src="{{asset('assets/images/gallery/P-1.jpg')}}" alt="" />
                                <div class="wt-info">
                                    <h4 class="wt-tilte text-white  m-b10 m-t0">{{ __('messages.service_title_2') }}</h4>
                                    <p>{{ __('messages.service_short_content_2') }}</p>
                                </div>
                                <i></i>
                                <a href="javascript:;"></a>
                            </div>     
                        </div>
                        <!-- COLUMNS 6 -->
                        <div class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="project-img-effect-1">
                                <img src="{{asset('assets/images/gallery/P-1.jpg')}}" alt="" />
                                <div class="wt-info">
                                    <h4 class="wt-tilte text-white  m-b10 m-t0">{{ __('messages.service_title_1') }}</h4>
                                    <p>{{ __('messages.service_short_content_1') }}</p>
                                </div>
                                <i></i>
                                <a href="javascript:;"></a>
                            </div>   
                        </div>                                   
                     </div>
                    <!-- GALLERY CONTENT END -->                    
                </div>

            
            
</div>   
<!-- OUR SERVICES END -->



<div class="row"></div>
                          

</div>
<!-- CONTENT END -->
@endsection

