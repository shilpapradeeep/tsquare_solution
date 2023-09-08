<?php
switch (session()->get('locale')) 
        {
            case 'en':
                $home = 'Home';
                break;
            case 'ma':

                $home = 'ഹോം';
                break;
            default:
                $home = 'Home';
        }
?>
<div>
    <ul class="wt-breadcrumb breadcrumb-style-2">
        <li><a href="javascript:void(0);">{{$home}}</a></li>
        <li>{{$title}}</li>
    </ul>
</div>