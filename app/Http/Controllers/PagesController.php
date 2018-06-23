<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
 public function index() {
     $title = 'Welcome to the Garage Sale';
     return view('pages.index', compact('title'));
 }

 public function about() {
     return view('pages.about');
 }

 public function services() {
     $data = array(
        'services' => ['Webdesign', 'SEO']
     );
     return view ('pages.services')->with($data);
 }
}
