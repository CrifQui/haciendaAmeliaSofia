<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function home(){
        return view('pages.home');
    }
    public function services(){
        return view('pages.services');
    }
    public function aboutUs(){
        return view('pages.aboutUs');
    }
    public function gallery(){
        $images = [
            'http://placehold.it/750x450?1'=>'img1',
            'http://placehold.it/750x450?2'=>'img2',
            'http://placehold.it/750x450?3'=>'img3',
            'http://placehold.it/750x450?4'=>'img4',
            'http://placehold.it/750x450?5'=>'img5',
            'http://placehold.it/750x450?6'=>'img6'
        ];
        return view('pages.gallery',[
            'images'=>$images
        ]);
        
    }
}
