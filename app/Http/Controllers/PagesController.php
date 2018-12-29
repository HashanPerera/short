<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Glamor';
        return view('pages.index1')->with('title', $title);
    }

public function about(){
         $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

public function services(){
         $data = array('title' => 'Services', 'services' => ['Web Design', 'Programming', 'ABC']);
        return view('pages.services')->with($data);
}

public function create()
{
   return view('clothes.create');
}

public function view()
{
    return view('pages.views');
}

public function view_m()
{
    return view('pages.viewmen');
}


}
