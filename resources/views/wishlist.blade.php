@extends('layouts.app')

@section('header')
<div class="media">
        <div class="d-flex align-self-center">
                <a href="/"><span class="u-icon-v1 g-color-primary g-mr-20 g-mt-2"><i class="icon-arrow-left u-line-icon-pro u-line-icon-pro"></i></span></a>
            <h1 class="g-font-weight-300 g-font-size-28 g-color-black mb-0">My Wishlist</h1>
        </div>

       
    </div>
    <hr class="d-flex g-brd-gray-light-v7 g-my-30">

@endsection

@section('content')
               
               

@if (count($favoritelist) > 0)

        
                    @foreach($favoritelist as $favorite)

                    <div class="col-md-6 col-lg-4 g-px-10">
                            <!-- Article -->
                            <article class="media g-height-100 g-brd-around g-brd-gray-light-v4 g-bg-white rounded g-pa-10 g-mb-20">
                                <!-- Article Image -->
                                <div class="g-width-100 g-mr-15">
                                <img class="d-flex" style="max-height: 80px;"src="/storage/product_images/{{$favorite->product_image}}" alt="Image Description">
                                </div>
                                <!-- End Article Image -->
                    
                                <!-- Article Info -->
                                <div class="media-body align-self-center">
                                    <h4 class="h5 g-mb-7">
                    <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="/items/{{$favorite->id}}">{{$favorite->title}}</a>
                    </h4>
                <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13 g-mb-10" href="#!">{{$type[$favorite->category]}}</a>
                                    <!-- End Article Info -->
                    
                                    <!-- Article Footer -->
                                    <footer class="d-flex justify-content-between g-font-size-16">
                                    <span class="g-color-black g-line-height-1">€ {{$favorite->price}}</span>
                                        <ul class="list-inline g-color-gray-light-v2 g-font-size-14 g-line-height-1">
                                            <li class="list-inline-item align-middle  g-pr-10 g-mr-6">
                                                <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="items\{{$favorite->id}}\unfavorite" data-toggle="tooltip" data-placement="top" title="Unfavorite Item">
                                                    <i class="hs-admin-heart-broken"></i>
                                                </a>
                                            </li>
                                         
                                        </ul>
                                    </footer>
                                    <!-- End Article Footer -->
                                </div>
                            </article>
                            <!-- End Article -->
                        </div>
                    
                    @endforeach
    
           @else
           <p>You have not added any items to your favorites.</p>
                @endif
              

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


