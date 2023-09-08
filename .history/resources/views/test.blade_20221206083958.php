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
<div class="section-full p-t80">

<!-- LOCATION BLOCK-->
<div class="container">

<!-- GOOGLE MAP & CONTACT FORM -->
<div class="section-content">

<div class="contact-form p-a30 bg-gray">
<?php // action="{{ route('csubmit') }}" ?> 
    <form method="POST" id="contact_form">
        @csrf
        <div class="contact-one">
        
            <!-- TITLE START -->
            <div class="section-head text-left">
                <h3 class="m-b5">{{ __('messages.contact_h3') }}</h3>
            </div>
            <!-- TITLE END --> 

<div class="alert alert-success alert-block" style="display: none;">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong class="alert-success-message"></strong>
</div>

  
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block" style="display: none;">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong class="alert-danger-message">{{ $message }}</strong>
</div>
@endif
   
@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
   
@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
  
@if ($errors->any())
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    Please check the form below for errors
</div>
@endif 
            <div class="row"> 
                <div class="col-md-4">                               
                    <div class="form-group">
                        <input name="name" id="name" type="text"  class="form-control" placeholder="{{ __('messages.c_name') }}" value="{{ isset($title1) ? $title1: 'hello' }}"">
                        
                       <span id="name_error" class="error" style="color:red"></span>
                       
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input name="email" id="email" type="text" class="form-control"  placeholder="{{ __('messages.c_email') }}">
                        
                       <span id="email_error" class="error" style="color:red"></span>
                   
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input name="phone" id="phone" type="text" class="form-control"  placeholder="{{ __('messages.c_phone') }}">
                       
                       <span id="phone_error" class="error" style="color:red"></span>
                      
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea name="message" id="message" rows="4" class="form-control "  placeholder="{{ __('messages.c_message') }}"></textarea>

                        <span id="message_error" class="error" style="color:red"></span>
                        
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="text-center">
                        <button  name="submit" id="btn-submit" type="submit" value="Submit" class="site-button radius-no text-uppercase font-weight-600" type="button">{{ __('messages.c_submit') }}</button>
                        <div id="spin" style="display: none;"><i class="fa fa-2x fa-spin fa-spinner"></i></div>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>

<div class="contact-info text-center m-t80 m-b50">

    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-4">                              
            <div class="wt-icon-box-wraper center m-b30">
                <div class="icon-md m-b20"><i class="sl-icon-phone"></i></div>
                <div class="icon-content">
                    <h5 class="m-t0 font-weight-500">{{ __('messages.phone_no') }}</h5>
                    <p>+1 (456) 789 10 12</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4"> 
            <div class="wt-icon-box-wraper center m-b30">
                <div class="icon-md m-b20"><i class="sl-icon-envolope"></i></div>
                <div class="icon-content">
                    <h5 class="m-t0 font-weight-500">{{ __('messages.email_address') }}</h5>
                    <p>demo@gmail.com</p>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4"> 
            <div class="wt-icon-box-wraper center m-b30">
                <div class="icon-md m-b20"><i class="sl-icon-map"></i></div>
                <div class="icon-content">
                    <h5 class="m-t0 font-weight-500">{{ __('messages.address_info') }}</h5>
                    <p>55/11 Land Street, Modern New Yourk City, USA</p>
                </div>
            </div>
        </div>
    </div>

</div>                          

</div>

</div>



</div>   
<!-- OUR SERVICES END -->



<div class="row"></div>
  

</div>
<!-- CONTENT END -->
@endsection
