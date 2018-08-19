<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $items = $user->items;

        $categories = Category::all();
        $type = [];
foreach($categories as $category){
    $type[$category->id] = $category->category;
}
        return view('dashboard')->with(compact('items', 'type'));
    }
}
