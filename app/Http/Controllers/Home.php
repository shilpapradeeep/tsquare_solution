<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{

    

    public function homepage()
    {
       
        switch (session()->get('locale')) 
        {
            case 'en':
                $title = 'Home';
                break;
            case 'ma':

                $title = 'ഹോം';
                break;
            default:
                $title = 'Home';
        }

        return view('home',['title'=>'Home']);
    }
    
    public function about()
    {
    
        switch (session()->get('locale')) 
        {
            case 'en':
                $title = 'About Us';
                break;
            case 'ma':

                $title = 'ഞങ്ങളെ പറ്റി';
                break;
            default:
                $title = 'About Us';
        }

        return view('about',['title'=>$title]);
    }
    public function scrap()
    {
        switch (session()->get('locale')) 
        {
            case 'en':
                $title = 'Scrap Collection';
                break;
            case 'ma':

                $title = 'സ്ക്രാപ്പ് കളക്ഷൻ';
                break;
            default:
                $title = 'Scrap Collection';
        }
        return view('scrap-collection',['title'=>$title]);
    }
    public function demolishing()
    {
        switch (session()->get('locale')) 
        {
            case 'en':
                $title = 'Demolishing';
                break;
            case 'ma':

                $title = 'പൊളിക്കൽ';
                break;
            default:
                $title = 'Demolishing';
        }
        return view('demolishing',['title'=>$title]);
    }
    public function interior()
    {
        switch (session()->get('locale')) 
        {
            case 'en':
                $title = 'Interior Design';
                break;
            case 'ma':

                $title = 'ഇന്റീരിയർ ഡിസൈനുകൾ';
                break;
            default:
                $title = 'Interior Design';
        }
        return view('interior-design',['title'=>$title]);
    }
    public function aluminium()
    {
        switch (session()->get('locale')) 
        {
            case 'en':
                $title = 'Interior Design';
                break;
            case 'ma':

                $title = 'ഇന്റീരിയർ ഡിസൈനുകൾ';
                break;
            default:
                $title = 'Interior Design';
        }
        return view('aluminium-fabrication',['title'=>'Aluminium fabrication']);
    }
    public function gallery()
    {
        switch (session()->get('locale')) 
        {
            case 'en':
                $title = 'Gallery';
                break;
            case 'ma':

                $title = 'ഗാലറി';
                break;
            default:
                $title = 'Gallery';
        }
        return view('gallery',['title'=>$title]);
    }
    public function contact()
    {
        switch (session()->get('locale')) 
        {
            case 'en':
                $title = 'Contact';
                break;
            case 'ma':

                $title = 'ബന്ധപെടുക';
                break;
            default:
                $title = 'Contact';
        }
        return view('contact',['title'=>$title]);
    }

    public function test()
    {
        $title = 'Test';
        return view('test',['title'=>$title]);
    }
    
}
