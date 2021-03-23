<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      $title="Welcome to programming";
      return view('pages.index')->with('title',$title);
    }
    public function about(){
      $title="AboutUs";
      return view('pages.about')->with('title',$title);
    }
   public function services(){
      $data=array(
        'title'=>'OurServices',
        'services' => ['Customized for Your Audience','Optimized for Better Rankings','High Quality']
      );
      return view('pages.services')->with($data);
    }

}
