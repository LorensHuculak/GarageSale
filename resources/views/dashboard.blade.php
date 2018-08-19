@extends('layouts.app')

@section('header')
<div class="media">
        <div class="d-flex align-self-center">
                <a href="/"><span class="u-icon-v1 g-color-primary g-mr-20 g-mt-2"><i class="icon-arrow-left u-line-icon-pro u-line-icon-pro"></i></span></a>
            <h1 class="g-font-weight-300 g-font-size-28 g-color-black mb-0">My Items</h1>
        </div>

        <div class="media-body align-self-center text-right">
                <a href="/items/create" class="btn btn-primary g-width-160--md g-font-size-default g-ml-10">Add Item</a>   
        </div>
    </div>
    <hr class="d-flex g-brd-gray-light-v7 g-my-30">

@endsection

@section('content')

     
@if (count($items) > 0)

                    @foreach($items as $item)
                 
                            <div class="col-md-6 col-lg-4 g-px-10">
                                <!-- Article -->
                                <article class="media g-brd-around g-brd-gray-light-v4 g-bg-white rounded g-pa-10 g-mb-20">
                                    <!-- Article Image -->
                                    <div class="g-max-width-100 g-mr-15">
                                    <img class="d-flex w-100" src="/storage/product_images/{{$item->product_image}}" alt="Image Description">
                                    </div>
                                    <!-- End Article Image -->
    
                                    <!-- Article Info -->
                                    <div class="media-body align-self-center">
                                        <h4 class="h5 g-mb-7">
          <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="/items/{{$item->id}}">{{$item->title}}</a>
        </h4>
                                        <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13 g-mb-10" href="#!">{{$type[$item->category]}}</a>
                                        <!-- End Article Info -->
    
                                        <!-- Article Footer -->
                                        <footer class="d-flex justify-content-between g-font-size-16">
                                            <span class="g-color-black g-line-height-1">€22.00</span>
                                            <ul class="list-inline g-color-gray-light-v2 g-font-size-14 g-line-height-1">
                                                <li class="list-inline-item align-middle g-brd-right g-brd-gray-light-v3 g-pr-10 g-mr-6">
                                                    <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="/items/{{$item->id}}/edit" data-toggle="tooltip" data-placement="top" title="Edit Item">
                                                        <i class="hs-admin-settings"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-middle">
                                                    <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="" onclick="document.getElementById('deleteForm').submit();" data-toggle="tooltip" data-placement="top" title="Delete Item">
                                                            
                                                        <i class="hs-admin-trash"></i>
                                                        {!!Form::open(['action' => ['ItemsController@destroy', $item->id], 'method' => 'POST', 'id' => 'deleteForm'])!!}
                                                        {{Form::hidden('_method', 'DELETE')}}
                                                        {{Form::submit('Delete', ['style' => 'display: none;', 'class' => 'deleteBtn'])}}
                                                        
                                                        {!!Form::close()!!}
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
           <p>You have no items</p>
                @endif
              

           
@endsection
