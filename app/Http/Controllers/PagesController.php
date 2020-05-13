<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title ='Welcome to Laravel!!';
        //one way to send  $title variable to the index.blade.php file
        //return view('pages.index',compact('title'));

        //second way
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $title ='About Us';
        return view('pages.about')->with('title',$title);
    }

    public function services(){
        //using array to send title to the services.blade.php file
       $data=array(
           'title' => 'Services',
           'services' =>['Web Design','Progrmming','SEO']
       );

        return view('pages.services')->with($data);
    }
}
