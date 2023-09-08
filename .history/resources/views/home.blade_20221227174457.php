@extends('layout')
@section('title')
{{$title}}
@endsection
@section('main-content')

<!-- CONTENT START -->
<div class="page-content">

<!-- SLIDER START -->
<div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="goodnews-header" data-source="gallery" style="background:#eeeeee;padding:0px;">
<div id="welcome" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.1">
<ul>	
<!-- SLIDE 1 -->
<li data-index="rs-901" 
data-transition="fadethroughdark" 
data-slotamount="default" 
data-hideafterloop="0" 
data-hideslideonmobile="off"  
data-easein="default" 
data-easeout="default" 
data-masterspeed="default"  
data-thumb="{{asset('assets/images/main-slider/slider1/Slder-1.jpg')}}"  
data-rotate="0"  
data-fstransition="fade" 
data-fsmasterspeed="300" 
data-fsslotamount="7" 
data-saveperformance="off"  
data-title="Click" 
data-param1="" 
data-description="">
    <!-- MAIN IMAGE -->
    <img src="{{asset('assets/images/main-slider/slider1/Slder-1.jpg')}}"  alt=""  data-lazyload="{{asset('assets/images/main-slider/slider1/Slder-1.jpg')}}" data-bgposition="center center" 
    data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>

    <!-- LAYER NR. 0 [ for overlay ] -->
    <div class="tp-caption tp-shape tp-shapewrapper " 
        id="slide-901-layer-0" 
        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
        data-width="full"
        data-height="full"
        data-whitespace="nowrap"
        data-type="shape" 
        data-basealign="slide" 
        data-responsive_offset="off" 
        data-responsive="off"
        data-frames='[
        {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
        {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
        ]'
        data-textAlign="['left','left','left','left']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
        
        style="z-index: 1;background-color:rgba(0, 0, 0, 0.3);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
    </div>

     <!-- LAYER NR. 2 [Number] -->
    <div class="tp-caption tp-resizeme" 	
        id="slide-901-layer-2"						
        data-x="['left','left','left','left']" data-hoffset="['30','30','30','40']" 
        data-y="['top','top','top','top']" data-voffset="['300','180','180','180']" 
        data-fontsize="['300','200','200','80']"
        data-lineheight="['66','66','48','38']"                             
        data-width="['800','800','800','800']"
        data-height="['none','none','none','none']"
        data-whitespace="['normal','normal','normal','normal']"
        
        data-type="text" 
        data-responsive_offset="on"
        data-frames='[ 
        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
        ]'
        data-textAlign="['left','left','left','left']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
        
       style="z-index: 13; 
        white-space: normal; 
        font-weight: 900;
        color:rgba(0,0,0,0);">
        <span class="slider-text-outline" style="font-family: 'Oswald', sans-serif; text-transform:uppercase;">01</span>
    </div>                             
    
    <!-- LAYER NR. 3 [ Small title ] -->
    <div class="tp-caption   tp-resizeme" 
        id="slide-901-layer-3" 
        data-x="['left','left','left','left']" data-hoffset="['40','40','40','40']" 
        data-y="['top','top','top','top']" data-voffset="['540','340','340','270']"  
        data-fontsize="['24','24','24','24']"
        data-lineheight="['34','34','34','34']"
        data-width="['700','700','96%','96%']"
        data-height="['none','none','none','none']"
        data-whitespace="['normal','normal','normal','normal']"
    
        data-type="text" 
        data-responsive_offset="on" 
        data-frames='[
        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
        ]'
        data-textAlign="['left','left','left','left']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
    
        style="z-index: 13; 
        white-space: normal; 
        font-weight: 400;
        color:#fff;
        border-width:0px;">
        <div style="font-family: 'Oswald', sans-serif;text-transform:uppercase;">
            <span class="text-white" style="letter-spacing:20px;">{{ __('messages.we_make_sure') }}</span><br>
        </div>
    
    </div>
    
    <!-- LAYER NR. 4 [ large title ] -->
    <div class="tp-caption   tp-resizeme" 
        id="slide-901-layer-4" 
        data-x="['left','left','left','left']" data-hoffset="['40','40','40','40']" 
        data-y="['top','top','top','top']" data-voffset="['580','390','390','330']"  
        data-fontsize="['72','72','38','28']"
        data-lineheight="['82','82','48','38']"
        data-width="['700','700','96%','96%']"
        data-height="['none','none','none','none']"
        data-whitespace="['normal','normal','normal','normal']"
    
        data-type="text" 
        data-responsive_offset="on" 
        data-frames='[
        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
        ]'
        data-textAlign="['left','left','left','left']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
    
        style="z-index: 13; 
        white-space: normal; 
        font-weight: 400;
        color:#fff;
        border-width:0px;">
        <div style="font-family: 'Oswald', sans-serif;">
            <span class="text-white">{{ __('messages.slider1') }}</span><br>
        </div>
    
    </div>
    
    <!-- LAYER NR. 5 [ More About button ] -->
    <div class="tp-caption tp-resizeme" 	
        id="slide-901-layer-5"						
        data-x="['left','left','left','left']" data-hoffset="['40','40','40','40']" 

        data-y="['top','top','top','top']" data-voffset="['700','490','490','400']"  
        data-lineheight="['none','none','none','none']"
        data-width="['300','300','300','300']"
        data-height="['none','none','none','none']"
        data-whitespace="['normal','normal','normal','normal']"
        
        data-type="text" 
        data-responsive_offset="on"
        data-frames='[ 
        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2500,"ease":"Power4.easeOut"},
        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
        ]'
        data-textAlign="['left','left','left','left']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
        
        style="z-index:13; text-transform:uppercase;">
            <a href="{{route('about')}}" class="rev-slider-custom-btn" style="font-family: 'Oswald', sans-serif;">{{ __('messages.more_about') }}</a>
    </div>
    
    <!-- LAYER NR. 5-line [ More About button Line ] -->
    <div class="tp-caption tp-resizeme bg-green" 	
        id="slide-901-layer-5-line"						
        data-x="['left','left','left','left']" data-hoffset="['40','40','40','40']" 

        data-y="['top','top','top','top']" data-voffset="['710','500','500','410']"  
        data-lineheight="['none','none','none','none']"
        data-whitespace="['normal','normal','normal','normal']"
        
        data-type="text" 
        data-responsive_offset="on"
        data-frames='[ 
        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2500,"ease":"Power4.easeOut"},
        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
        ]'
        data-textAlign="['left','left','left','left']"
        data-paddingtop="[1,1,1,1]"
        data-paddingright="[30,30,30,30]"
        data-paddingbottom="[1,1,1,1]"
        data-paddingleft="[30,30,30,30]"
        
        style="z-index:13;">
    </div>                            

   <!-- LAYER NR. 7 [ Right part middle image ] -->
    <div class="tp-caption   tp-resizeme" 
        id="slide-901-layer-7" 
        data-x="['right','right','right','right']" data-hoffset="['100','80','40','40']" 
        data-y="['top','top','top','top']" data-voffset="['140','100','140','270']"  
        data-width="['400','400','96%','96%']"
        data-height="['none','auto','none','none']"
        data-visibility="['on','on','off','off']"
    
        data-type="image" 
        data-responsive_offset="on" 
        data-frames='[{"from":"x:200px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
       
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
    
        style="z-index: 13; 
        white-space: normal; 
        border-width:0px;">
        <img src="{{asset('assets/images/main-slider/slider1/Small-img-1.jpg')}}" alt="">
    </div>                                       
                                                                 
</li>

<!-- SLIDE 2 -->
<li data-index="rs-902" 
data-transition="fadethroughdark" 
data-slotamount="default" 
data-hideafterloop="0" 
data-hideslideonmobile="off"  
data-easein="default" 
data-easeout="default" 
data-masterspeed="default"  
data-thumb="{{asset('assets/images/main-slider/slider1/Slder-1.jpg')}}"  
data-rotate="0"  
data-fstransition="fade" 
data-fsmasterspeed="300" 
data-fsslotamount="7" 
data-saveperformance="off"  
data-title="Click" 
data-param1="" 
data-description="">
    <!-- MAIN IMAGE -->
    <img src="{{asset('assets/images/main-slider/slider1/Slder-2.jpg')}}"  alt=""  data-lazyload="{{asset('assets/images/main-slider/slider1/Slder-2.jpg')}}" data-bgposition="center center" 
    data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>

    <!-- LAYER NR. 0 [ for overlay ] -->
    <div class="tp-caption tp-shape tp-shapewrapper " 
        id="slide-902-layer-0" 
        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
        data-width="full"
        data-height="full"
        data-whitespace="nowrap"
        data-type="shape" 
        data-basealign="slide" 
        data-responsive_offset="off" 
        data-responsive="off"
        data-frames='[
        {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
        {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
        ]'
        data-textAlign="['left','left','left','left']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
        
        style="z-index: 1;background-color:rgba(0, 0, 0, 0.3);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
    </div>

     <!-- LAYER NR. 2 [Number] -->
    <div class="tp-caption tp-resizeme" 	
        id="slide-902-layer-2"						
        data-x="['left','left','left','left']" data-hoffset="['30','30','30','40']" 
        data-y="['top','top','top','top']" data-voffset="['300','180','180','180']" 
        data-fontsize="['300','200','200','80']"
        data-lineheight="['66','66','48','38']"                             
        data-width="['800','800','800','800']"
        data-height="['none','none','none','none']"
        data-whitespace="['normal','normal','normal','normal']"
        
        data-type="text" 
        data-responsive_offset="on"
        data-frames='[ 
        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
        ]'
        data-textAlign="['left','left','left','left']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
        
       style="z-index: 13; 
        white-space: normal; 
        font-weight: 900;
        color:rgba(0,0,0,0);">
        <span class="slider-text-outline" style="font-family: 'Oswald', sans-serif; text-transform:uppercase;">02</span>
    </div>                             
    
    <!-- LAYER NR. 3 [ Small title ] -->
    <div class="tp-caption   tp-resizeme" 
        id="slide-902-layer-3" 
        data-x="['left','left','left','left']" data-hoffset="['40','40','40','40']" 
        data-y="['top','top','top','top']" data-voffset="['540','340','340','270']"  
        data-fontsize="['24','24','24','24']"
        data-lineheight="['34','34','34','34']"
        data-width="['700','700','96%','96%']"
        data-height="['none','none','none','none']"
        data-whitespace="['normal','normal','normal','normal']"
    
        data-type="text" 
        data-responsive_offset="on" 
        data-frames='[
        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
        ]'
        data-textAlign="['left','left','left','left']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
    
        style="z-index: 13; 
        white-space: normal; 
        font-weight: 400;
        color:#fff;
        border-width:0px;">
        <div style="font-family: 'Oswald', sans-serif;text-transform:uppercase;">
            <span class="text-white" style="letter-spacing:20px;">{{ __('messages.we_make_sure') }}</span><br>
        </div>
    
    </div>
    
    <!-- LAYER NR. 4 [ large title ] -->
    <div class="tp-caption   tp-resizeme" 
        id="slide-902-layer-4" 
        data-x="['left','left','left','left']" data-hoffset="['40','40','40','40']" 
        data-y="['top','top','top','top']" data-voffset="['580','390','390','330']"  
        data-fontsize="['72','72','38','28']"
        data-lineheight="['82','82','48','38']"
        data-width="['700','700','96%','96%']"
        data-height="['none','none','none','none']"
        data-whitespace="['normal','normal','normal','normal']"
    
        data-type="text" 
        data-responsive_offset="on" 
        data-frames='[
        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
        ]'
        data-textAlign="['left','left','left','left']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
    
        style="z-index: 13; 
        white-space: normal; 
        font-weight: 400;
        color:#fff;
        border-width:0px;">
        <div style="font-family: 'Oswald', sans-serif;">
            <span class="text-white">{{ __('messages.slider2') }}</span><br>
        </div>
    
    </div>
    
    <!-- LAYER NR. 5 [ More About button ] -->
    <div class="tp-caption tp-resizeme" 	
        id="slide-902-layer-5"						
        data-x="['left','left','left','left']" data-hoffset="['40','40','40','40']" 

        data-y="['top','top','top','top']" data-voffset="['700','490','490','400']"  
        data-lineheight="['none','none','none','none']"
        data-width="['300','300','300','300']"
        data-height="['none','none','none','none']"
        data-whitespace="['normal','normal','normal','normal']"
        
        data-type="text" 
        data-responsive_offset="on"
        data-frames='[ 
        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2500,"ease":"Power4.easeOut"},
        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
        ]'
        data-textAlign="['left','left','left','left']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
        
        style="z-index:13; text-transform:uppercase;">
            <a href="{{route('about')}}" class="rev-slider-custom-btn" style="font-family: 'Oswald', sans-serif;">{{ __('messages.more_about') }}</a>
    </div>
    
    <!-- LAYER NR. 5-line [ More About button Line ] -->
    <div class="tp-caption tp-resizeme bg-green" 	
        id="slide-902-layer-5-line"						
        data-x="['left','left','left','left']" data-hoffset="['40','40','40','40']" 

        data-y="['top','top','top','top']" data-voffset="['710','500','500','410']"  
        data-lineheight="['none','none','none','none']"
        data-whitespace="['normal','normal','normal','normal']"
        
        data-type="text" 
        data-responsive_offset="on"
        data-frames='[ 
        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2500,"ease":"Power4.easeOut"},
        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
        ]'
        data-textAlign="['left','left','left','left']"
        data-paddingtop="[1,1,1,1]"
        data-paddingright="[30,30,30,30]"
        data-paddingbottom="[1,1,1,1]"
        data-paddingleft="[30,30,30,30]"
        
        style="z-index:13;">
    </div>                            
    
   <!-- LAYER NR. 7 [ Right part middle image ] -->
    <div class="tp-caption   tp-resizeme" 
        id="slide-902-layer-7" 
        data-x="['right','right','right','right']" data-hoffset="['100','80','40','40']" 
        data-y="['top','top','top','top']" data-voffset="['140','100','140','270']"  
        data-width="['400','400','96%','96%']"
        data-height="['none','auto','none','none']"
        data-visibility="['on','on','off','off']"
    
        data-type="image" 
        data-responsive_offset="on" 
        data-frames='[{"from":"x:200px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
       
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
    
        style="z-index: 13; 
        white-space: normal; 
        border-width:0px;">
        <img src="{{asset('assets/images/main-slider/slider1/Small-img-2.jpg')}}" alt="">
    </div>                                       
                                                                 
</li>

<!-- SLIDE 3 -->
<li data-index="rs-903" 
data-transition="fadethroughdark" 
data-slotamount="default" 
data-hideafterloop="0" 
data-hideslideonmobile="off"  
data-easein="default" 
data-easeout="default" 
data-masterspeed="default"  
data-thumb="{{asset('assets/images/main-slider/slider1/Slder-1.jpg')}}"  
data-rotate="0"  
data-fstransition="fade" 
data-fsmasterspeed="300" 
data-fsslotamount="7" 
data-saveperformance="off"  
data-title="Click" 
data-param1="" 
data-description="">
    <!-- MAIN IMAGE -->
    <img src="{{asset('assets/images/main-slider/slider1/Slder-3.jpg')}}"  alt=""  data-lazyload="{{asset('assets/images/main-slider/slider1/Slder-3.jpg')}}" data-bgposition="center center" 
    data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>

    <!-- LAYER NR. 0 [ for overlay ] -->
    <div class="tp-caption tp-shape tp-shapewrapper " 
        id="slide-903-layer-0" 
        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
        data-width="full"
        data-height="full"
        data-whitespace="nowrap"
        data-type="shape" 
        data-basealign="slide" 
        data-responsive_offset="off" 
        data-responsive="off"
        data-frames='[
        {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
        {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
        ]'
        data-textAlign="['left','left','left','left']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
        
        style="z-index: 1;background-color:rgba(0, 0, 0, 0.3);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
    </div>

     <!-- LAYER NR. 2 [Number] -->
    <div class="tp-caption tp-resizeme" 	
        id="slide-903-layer-2"						
        data-x="['left','left','left','left']" data-hoffset="['30','30','30','40']" 
        data-y="['top','top','top','top']" data-voffset="['300','180','180','180']" 
        data-fontsize="['300','200','200','80']"
        data-lineheight="['66','66','48','38']"                             
        data-width="['800','800','800','800']"
        data-height="['none','none','none','none']"
        data-whitespace="['normal','normal','normal','normal']"
        
        data-type="text" 
        data-responsive_offset="on"
        data-frames='[ 
        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
        ]'
        data-textAlign="['left','left','left','left']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
        
       style="z-index: 13; 
        white-space: normal; 
        font-weight: 900;
        color:rgba(0,0,0,0);">
        <span class="slider-text-outline" style="font-family: 'Oswald', sans-serif; text-transform:uppercase;">03</span>
    </div>                             
    
    <!-- LAYER NR. 3 [ Small title ] -->
    <div class="tp-caption   tp-resizeme" 
        id="slide-903-layer-3" 
        data-x="['left','left','left','left']" data-hoffset="['40','40','40','40']" 
        data-y="['top','top','top','top']" data-voffset="['540','340','340','270']"  
        data-fontsize="['24','24','24','24']"
        data-lineheight="['34','34','34','34']"
        data-width="['700','700','96%','96%']"
        data-height="['none','none','none','none']"
        data-whitespace="['normal','normal','normal','normal']"
    
        data-type="text" 
        data-responsive_offset="on" 
        data-frames='[
        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
        ]'
        data-textAlign="['left','left','left','left']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
    
        style="z-index: 13; 
        white-space: normal; 
        font-weight: 400;
        color:#fff;
        border-width:0px;">
        <div style="font-family: 'Oswald', sans-serif;text-transform:uppercase;">
            <span class="text-white" style="letter-spacing:20px;">{{ __('messages.we_make_sure') }}</span><br>
        </div>
    
    </div>
    
    <!-- LAYER NR. 4 [ large title ] -->
    <div class="tp-caption   tp-resizeme" 
        id="slide-903-layer-4" 
        data-x="['left','left','left','left']" data-hoffset="['40','40','40','40']" 
        data-y="['top','top','top','top']" data-voffset="['580','390','390','330']"  
        data-fontsize="['72','72','38','28']"
        data-lineheight="['82','82','48','38']"
        data-width="['700','700','96%','96%']"
        data-height="['none','none','none','none']"
        data-whitespace="['normal','normal','normal','normal']"
    
        data-type="text" 
        data-responsive_offset="on" 
        data-frames='[
        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
        ]'
        data-textAlign="['left','left','left','left']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
    
        style="z-index: 13; 
        white-space: normal; 
        font-weight: 400;
        color:#fff;
        border-width:0px;">
        <div style="font-family: 'Oswald', sans-serif;">
            <span class="text-white">{{ __('messages.slider3') }}</span><br>
        </div>
    
    </div>
    
    <!-- LAYER NR. 5 [ More About button ] -->
    <div class="tp-caption tp-resizeme" 	
        id="slide-903-layer-5"						
        data-x="['left','left','left','left']" data-hoffset="['40','40','40','40']" 

        data-y="['top','top','top','top']" data-voffset="['700','490','490','400']"  
        data-lineheight="['none','none','none','none']"
        data-width="['300','300','300','300']"
        data-height="['none','none','none','none']"
        data-whitespace="['normal','normal','normal','normal']"
        
        data-type="text" 
        data-responsive_offset="on"
        data-frames='[ 
        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2500,"ease":"Power4.easeOut"},
        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
        ]'
        data-textAlign="['left','left','left','left']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
        
        style="z-index:13; text-transform:uppercase;">
            <a href="{{route('about')}}" class="rev-slider-custom-btn" style="font-family: 'Oswald', sans-serif;">{{ __('messages.more_about') }}</a>
    </div>
    
    <!-- LAYER NR. 5-line [ More About button Line ] -->
    <div class="tp-caption tp-resizeme bg-green" 	
        id="slide-903-layer-5-line"						
        data-x="['left','left','left','left']" data-hoffset="['40','40','40','40']" 

        data-y="['top','top','top','top']" data-voffset="['710','500','500','410']"  
        data-lineheight="['none','none','none','none']"
        data-whitespace="['normal','normal','normal','normal']"
        
        data-type="text" 
        data-responsive_offset="on"
        data-frames='[ 
        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2500,"ease":"Power4.easeOut"},
        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
        ]'
        data-textAlign="['left','left','left','left']"
        data-paddingtop="[1,1,1,1]"
        data-paddingright="[30,30,30,30]"
        data-paddingbottom="[1,1,1,1]"
        data-paddingleft="[30,30,30,30]"
        
        style="z-index:13;">
    </div>                            

    

   <!-- LAYER NR. 7 [ Right part middle image ] -->
    <div class="tp-caption   tp-resizeme" 
        id="slide-903-layer-7" 
        data-x="['right','right','right','right']" data-hoffset="['100','80','40','40']" 
        data-y="['top','top','top','top']" data-voffset="['140','100','140','270']"  
        data-width="['400','400','96%','96%']"
        data-height="['none','auto','none','none']"
        data-visibility="['on','on','off','off']"
    
        data-type="image" 
        data-responsive_offset="on" 
        data-frames='[{"from":"x:200px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
       
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
    
        style="z-index: 13; 
        white-space: normal; 
        border-width:0px;">
        <img src="{{asset('assets/images/main-slider/slider1/Small-img-3.jpg')}}" alt="">
    </div>                                       
                                                                 
</li>                                                             

</ul>
<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	
</div>
</div>
<!-- SLIDER END -->
           
<!-- WELCOME SECTION START -->
<div class="section-full p-t80 p-b80 bg-gray overflow-hide home-2-about-outer">
<div class="container">
<div class="section-content">
<div class="row">

	<div class="col-xl-5  col-lg-6 col-md-12">
    	<div class="home-2-about-left-outer">
            <div class="section-head clearfix">
                <div class="wt-tilte-main">
                    <small class="wt-small-title">{{ __('messages.our_company') }}</small>
                    <h2 class="m-b5">{{ __('messages.about_detail') }}</h2>
                </div>
            </div>
            <div class="home-2-about-left">
                <div class="home-2-about-left-content  bg-secondry p-a50 text-white">
                    <h2 class="m-t0 wt-title">{{ __('messages.home_about_h2') }}</h2>
                    <p align="justify">{{ __('messages.home_about_content') }}  </p>
                    <a href="{{route('about')}}" class="site-button-link white">{{ __('messages.read_more') }}</a>
                </div>
            </div>
        </div>
    </div>
    
	<div class="col-xl-7 col-lg-6 col-md-12">
    	 <div class="home-2-about-slider-outer">
             <div class="owl-carousel home-2-about owl-btn-bottom-right">
                <!-- COLUMNS 1 -->
                <div class="item">
                    <div class="home-2-about-slider">
                        <div class="wt-media img-reflection">
                            <img src="{{asset('assets/images/about/about-home.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                
                <!-- COLUMNS 2 -->
                <div class="item">
                    <div class="home-2-about-slider">
                        <div class="wt-media img-reflection">
                            <img src="{{asset('assets/images/gallery/P-2.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                
                <!-- COLUMNS 3 -->
                <div class="item">
                    <div class="home-2-about-slider">
                        <div class="wt-media img-reflection">
                            <img src="{{asset('assets/images/gallery/P-4.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                
                <!-- COLUMNS 4 -->
                <div class="item">
                    <div class="home-2-about-slider">
                        <div class="wt-media img-reflection">
                            <img src="{{asset('assets/images/about/about-home.jpg')}}" alt="">
                        </div>
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

<!-- VIDEO SECTION START -->
<div class="bg-gray overflow-hide v-title-outer">

<div class="section-content">

<div class="custom-block-outer clearfix bg-cover" style="background-image:url({{asset('assets/images/background/video-bg.png')}} );">

	<div class="custom-left-part overlay-wraper clearfix bg-cover" style="background-image:url({{asset('assets/images/background/verticle-slide-bg.jpg')}});">
    	<div class="bg-black opacity-08 overlay-main"></div>
		<div class="verticle-center-slider-block-outer mfp-gallery">
        	<div class="vertical-center-slider">
            
            	<div class="verticle-center-slider-block">
                	<div class="wt-box">	
                        <img src="{{asset('assets/images/gallery/P-1.jpg')}}" alt="">
                        <a href="javascript:;">{{ __('messages.project_slider1') }}</a>
                        <a href="{{asset('assets/images/gallery/P-1.jpg')}}" class="mfp-link"><i class="fa fa-expand"></i></a>                                                
                    </div>
                </div>
                
            	<div class="verticle-center-slider-block">
                	<div class="wt-box">	
                        <img src="{{asset('assets/images/gallery/P-2.jpg')}}" alt="">
                        <a href="javascript:;">{{ __('messages.project_slider2') }}</a>
                        <a href="{{asset('assets/images/gallery/P-2.jpg')}}" class="mfp-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                
            	<div class="verticle-center-slider-block">
                	<div class="wt-box">	
                        <img src="{{asset('assets/images/gallery/P-3.jpg')}}" alt="">
                        <a href="javascript:;">{{ __('messages.project_slider3') }}</a>
                        <a href="{{asset('assets/images/gallery/P-3.jpg')}}" class="mfp-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                
            	<div class="verticle-center-slider-block">
                	<div class="wt-box">	
                        <img src="{{asset('assets/images/gallery/P-4.jpg')}}" alt="">
                        <a href="javascript:;">{{ __('messages.project_slider4') }}</a>
                        <a href="{{asset('assets/images/gallery/P-4.jpg')}}" class="mfp-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                
            	<div class="verticle-center-slider-block">
                	<div class="wt-box">	
                        <img src="{{asset('assets/images/gallery/P-5.jpg')}}" alt="">
                        <a href="javascript:;">{{ __('messages.project_slider5') }}</a>
                        <a href="{{asset('assets/images/gallery/P-5.jpg')}}" class="mfp-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>                                                                                                                                                                
                                                                                                                                   
            
            </div>
        </div>
        <!--Verticle Title-->
        <div class="v-title">
        	<span>{{ __('messages.projects') }} </span>
        </div>
        <!--Verticle Title-->
    </div>
    
	<div class="custom-right-part ">
    	<div class="custom-right-part-content p-t80">
        
            <div class="video-section-outer">
                <!-- TITLE START -->
                <div class="section-head clearfix">
                    <div class="wt-tilte-main">
                        <small class="wt-small-title">{{ __('messages.latest_projects') }}</small>
                        <h2 class="m-b5">{{ __('messages.our_projects') }}</h2>
                    </div>
                </div>
                <!-- TITLE END -->                                     
                <div class="video-section">
                    <img src="{{asset('assets/images/gallery/P-4.jpg')}} " alt="">
                     <!-- <a href="https://player.vimeo.com/video/34741214?color=ffffff&amp;title=0&amp;byline=0&amp;portrait=0" class="mfp-video play-now">
                        <i class="icon fa fa-play"></i>
                        <span class="ripple"></span>
                    </a> -->                                              
                </div>
                
				<div class="our-ability m-t50">
                    <div class="row">
                                
                           
                            <div class="col-md-4 col-sm-4">
                                <div class="m-b30 text-black wt-icon-box-wraper center">
                                    <h1 class="counter font-weight-800 m-b5 site-text-primary">132</h1>
                                    <h4 class="wt-tilte m-b0">{{ __('messages.five_star_rating') }}</h4>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-4">
                                <div class="m-b30 text-black wt-icon-box-wraper center">
                                    <h1 class="counter font-weight-800 m-b5 site-text-primary">206</h1>
                                    <h4 class="wt-tilte m-b0">{{ __('messages.happy_customer') }}</h4>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-4">
                                <div class="m-b30 text-black wt-icon-box-wraper center">
                                    <h1 class="counter font-weight-800 m-b5 site-text-primary">336</h1>
                                    <h4 class="wt-tilte m-b0">{{ __('messages.project_complete') }}</h4>
                                </div>
                            </div>                                
                            
                        </div>
                </div>                                        
            </div>                                
        </div>
    </div>
                                     
</div>

</div>

</div>   
<!-- VIDEO  SECTION END -->              

<!-- OUR SERVICES START -->
@include('include/services')  
<!-- OUR SERVICES END -->



<!-- TESTIMONIAL START -->
<div class="section-full p-tb80 testimonial-slider-outer bg-gray">
<div class="container">

<div class="section-head clearfix">
<div class="wt-tilte-main bdr-r-3 bdr-primary bdr-solid">
    <small class="wt-small-title">{{ __('messages.best_client_title') }}</small>
    <h2 class="m-b5">{{ __('messages.our_client_says') }}</h2>
</div>
<div class="title-right-detail">
    <p>{{ __('messages.our_client_content') }}</p>
</div>
</div>                     

<div class="testimonial-slider-two">
<div class="testimonial-carousel-two owl-carousel owl-theme owl-btn-bottom-center">

    <div class="item">
        <div class="testimonial-slider-content clearfix">
            <div class="testimonial-2 clearfix">
                <div class="testimonial-text shadow-sm">

                    <div class="testimonial-paragraph">
                        <div class="quote-left"></div>
                        <p>{{ __('messages.testimonial_1') }}</p>
                        <div class="quote-right"></div>
                    </div>
                    <div class="testimonial-detail ">
                        <h4 class="testimonial-name m-b5">{{ __('messages.testimonial_person_1') }}</h4>
                    </div>
                    <div class="testimonial-detail ">
                        <span class="testimonial-position">{{ __('messages.testimonial_designation_1') }}</span>
                    </div>
                </div>
                <div class="testimonial-pic-block"> 
                    <div class="testimonial-pic">
                        <img src="{{asset('assets/images/testimonials/Team.jpg')}}" alt="">
                    </div>
                </div>
            </div>                                    
        </div>
    </div>
    
    <div class="item">
        <div class="testimonial-slider-content clearfix">
            <div class="testimonial-2 clearfix">
                <div class="testimonial-text shadow-sm">

                    <div class="testimonial-paragraph">
                        <div class="quote-left"></div>
                        <p>{{ __('messages.testimonial_2') }}</p>
                        <div class="quote-right"></div>
                    </div>
                    <div class="testimonial-detail ">
                        <h4 class="testimonial-name m-b5">{{ __('messages.testimonial_person_2') }}</h4>
                    </div>
                    <div class="testimonial-detail ">
                        <span class="testimonial-position">{{ __('messages.testimonial_designation_2') }}</span>
                    </div>
                </div>
                <div class="testimonial-pic-block"> 
                    <div class="testimonial-pic">
                        <img src="{{asset('assets/images/testimonials/Team-03.jpg')}}" alt="">
                    </div>
                </div>
            </div>                                    
        </div>
    </div>
    
    <div class="item">
        <div class="testimonial-slider-content clearfix">
            <div class="testimonial-2 clearfix">
                <div class="testimonial-text shadow-sm">

                    <div class="testimonial-paragraph">
                        <div class="quote-left"></div>
                        <p>{{ __('messages.testimonial_3') }}</p>
                        <div class="quote-right"></div>
                    </div>
                    <div class="testimonial-detail ">
                        <h4 class="testimonial-name m-b5">{{ __('messages.testimonial_person_3') }}</h4>
                    </div>
                    <div class="testimonial-detail ">
                        <span class="testimonial-position">{{ __('messages.testimonial_designation_3') }}</span>
                    </div>
                </div>
                <div class="testimonial-pic-block"> 
                    <div class="testimonial-pic">
                        <img src="{{asset('assets/images/testimonials/Team-02.jpg')}}" alt="">
                    </div>
                </div>
            </div>                                    
        </div>
    </div>
    
    <div class="item">
        <div class="testimonial-slider-content clearfix">
            <div class="testimonial-2 clearfix">
                <div class="testimonial-text shadow-sm">

                    <div class="testimonial-paragraph">
                        <div class="quote-left"></div>
                        <p>{{ __('messages.testimonial_4') }}</p>
                        <div class="quote-right"></div>
                    </div>
                    <div class="testimonial-detail ">
                        <h4 class="testimonial-name m-b5">{{ __('messages.testimonial_person_4') }}</h4>
                    </div>
                    <div class="testimonial-detail ">
                        <span class="testimonial-position">{{ __('messages.testimonial_designation_4') }}</span>
                    </div>
                </div>
                <div class="testimonial-pic-block"> 
                    <div class="testimonial-pic">
                        <img src="{{asset('assets/images/testimonials/Team.jpg')}}" alt="">
                    </div>
                </div>
            </div>                                    
        </div>
    </div>
    
    <div class="item">
        <div class="testimonial-slider-content clearfix">
            <div class="testimonial-2 clearfix">
                <div class="testimonial-text shadow-sm">

                    <div class="testimonial-paragraph">
                        <div class="quote-left"></div>
                        <p>{{ __('messages.testimonial_5') }}</p>
                        <div class="quote-right"></div>
                    </div>
                    <div class="testimonial-detail ">
                        <h4 class="testimonial-name m-b5">{{ __('messages.testimonial_person_5') }}</h4>
                    </div>
                    <div class="testimonial-detail ">
                        <span class="testimonial-position">{{ __('messages.testimonial_designation_5') }}</span>
                    </div>
                </div>
                <div class="testimonial-pic-block"> 
                    <div class="testimonial-pic">
                        <img src="{{asset('assets/images/testimonials/Team.jpg')}}" alt="">
                    </div>
                </div>
            </div>                                    
        </div>
    </div>                                                                                                                
    
</div>
</div>  
        
</div>
</div>   
<!-- TESTIMONIAL END -->                                      

<!-- OUR TEAM START -->
@include('include/our_team')  
<!-- OUR TEAM END -->  

<!-- OUR PARTNER START -->
<div class="section-full p-t80 p-b50 bg-white">
<div class="container">
<div class="section-head clearfix">
<div class="wt-tilte-main bdr-r-3 bdr-primary bdr-solid">
<small class="wt-small-title">{{ __('messages.our_happy_clients') }}</small>
<h2 class="m-b5">{{ __('messages.our_happy_clients_sub') }}</h2>
</div>
<div class="title-right-detail">
<p>{{ __('messages.our_happy_clients_content') }}</p>
</div>
</div>

<div class="section-content client-logo ">
<div class="row justify-content-center">
	<div class="col-6 col-sm-4 col-md-3">
    	<a href="#" class="wt-img-effect client-logo-media shadow">
       	    <img src="{{asset('assets/images/client-logo/w1.png')}}" alt="">
            <h7>Client 1</h7>
        </a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
    	<a href="#" class="wt-img-effect client-logo-media shadow">
       	    <img src="{{asset('assets/images/client-logo/w2.png')}}" alt="">
            <h7>Client 2</h7> 
        </a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
    	<a href="#" class="wt-img-effect client-logo-media shadow">
       	    <img src="{{asset('assets/images/client-logo/w3.png')}}" alt="">
            <h7>Client 3</h7> 
        </a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
    	<a href="#" class="wt-img-effect client-logo-media shadow">
       	    <img src="{{asset('assets/images/client-logo/w4.png')}}" alt=""> 
            <h7>Client 4</h7>
        </a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
    	<a href="#" class="wt-img-effect client-logo-media shadow">
       	    <img src="{{asset('assets/images/client-logo/w5.png')}}" alt="">
            <h7>Client 5</h7> 
        </a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
    	<a href="#" class="wt-img-effect client-logo-media shadow">
       	    <img src="{{asset('assets/images/client-logo/w6.png')}}" alt="">
            <h7>Client 6</h7> 
        </a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
    	<a href="#" class="wt-img-effect client-logo-media shadow">
       	    <img src="{{asset('assets/images/client-logo/w1.png')}}" alt="">
            <h7>Client 7</h7> 
        </a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
    	<a href="#" class="wt-img-effect client-logo-media shadow">
       	    <img src="{{asset('assets/images/client-logo/w2.png')}}" alt=""> 
            <h7>Client 8</h7>
        </a>
    </div>
   
</div>
</div>               

        
</div>
</div>   
<!-- OUR PARTNER END -->                   
             
</div>
<!-- CONTENT END -->
@endsection

