<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Item;
use App\Favorite;
use App\Category;




class ItemsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ip = '91.180.55.5';
        // Correct-> $ip = \Request::ip();
        $position = \Location::get($ip);
        $location = $position->countryCode;

        $items = Item::where('location', $location)->orderBy('created_at', 'desc')->paginate(10);
        // $items = Item::orderBy('title', 'desc')->take(1)->get();
       // return $item = Item::where('title', 'Item 1')->get();
        return view('items.index')->with('items', $items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $select = [];
foreach($categories as $category){
    $select[$category->id] = $category->category;
}
     
        return view('items.create')->with('select', $select);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required', 
            'body' => 'required',
            'price' => 'required',
            'category' => 'required',
            //'location' => 'required',
            'product_image' => 'image|nullable|max:1999'
        ]);

        // Handle file upload

        if($request->hasFile('product_image')){
            // Get filename with extension
            $filenameWithExt = $request->file('product_image')->getClientOriginalName();
            // Get filename
            $filename = pathInfo($filenameWithExt, PATHINFO_FILENAME);
            // Get extension
            $fileExt = $request->file('product_image')->getClientOriginalExtension();
            // Filename to store
            $filenameToStore = $filename.'_'.time().'.'.$fileExt;
            // Upload Image
            $path = $request->file('product_image')->storeAs('public/product_images', $filenameToStore);
        } else {
            $filenameToStore = 'noimage.png';
        }

        // Create Item

        $item = new Item();
        $item->title = $request->input('title');
        $item->body = $request->input('body');
        $item->price = $request->input('price');
        $item->category = $request->input('category');
        //$item->location = $request->input('location');
        $ip = '91.180.55.5';
        // Correct-> $ip = \Request::ip();
        $position = \Location::get($ip);
        $item->location = $position->countryCode;
        $item->user_id = auth()->user()->id;
        $item->product_image = $filenameToStore;
        $item->save();

        return redirect('/items')->with('success', 'Item Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);
        Return view('items.show')->with('item', $item);
    }

    public function wishlist()
    {
        $user = auth()->user();
        $favoritelist = $user->favorite(Item::class);
        Return view('wishlist')->with('favoritelist', $favoritelist);
    }

    public function favorite($id)
    {
        $item = Item::find($id);
        $item->addFavorite();

      
        Return view('items.show')->with(compact('item', $item));
    }

    public function unfavorite($id)
    {
        $item = Item::find($id);
        $item->removeFavorite();

      
        Return view('items.show')->with(compact('item', $item));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::find($id);

        $categories = Category::all();
        $select = [];
foreach($categories as $category){
    $select[$category->id] = $category->category;
}

        //Check for correct user
        if(auth()->user()->id !== $item->user_id) {
            Return redirect('/items')->with('error', 'You are not authorised.');
        }
        Return view('items.edit')->with(compact('item', 'select'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required', 
            'body' => 'required',
            'price' => 'required',
            'category' => 'required',
            'location' => 'required',
            'product_image' => 'image|nullable|max:1999'
        ]);

         // Handle file upload

         if($request->hasFile('product_image')){
            // Get filename with extension
            $filenameWithExt = $request->file('product_image')->getClientOriginalName();
            // Get filename
            $filename = pathInfo($filenameWithExt, PATHINFO_FILENAME);
            // Get extension
            $fileExt = $request->file('product_image')->getClientOriginalExtension();
            // Filename to store
            $filenameToStore = $filename.'_'.time().'.'.$fileExt;
            // Upload Image
            $path = $request->file('product_image')->storeAs('public/product_images', $filenameToStore);
        } 
        // Create Item

        $item = Item::find($id);
        $item->title = $request->input('title');
        $item->body = $request->input('body');
        $item->price = $request->input('price');
        $item->category = $request->input('category');
        //$item->location = $request->input('location');
        $position = Location::get();
        $item->location = $position;
        if($request->hasFile('product_image')){
            $item->product_image = $filenameToStore;
        }
        $item->save();

        return redirect('/items')->with('success', 'Item Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
    //Check for correct user
    if(auth()->user()->id !== $item->user_id) {
        Return redirect('/items')->with('error', 'You are not authorised.');
    }

    // Remove All Favorites
    $favorites = $item->favoritedBy();
    foreach($favorites as $favorite){
        $favorite->removeFavorite($item);
    }
    

    if($item->product_image != 'noimage.png') {
// Delete Image
Storage::delete('public/product_images/'.$item->product_image);
    }

        return redirect('/items')->with('success', 'Item Removed');
    }
}
