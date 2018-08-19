@extends('layouts.app')
@section('header')
<div class="media">
        <div class="d-flex align-self-center">
                <a href="/"><span class="u-icon-v1 g-color-primary g-mr-20 g-mt-2"><i class="icon-arrow-left u-line-icon-pro u-line-icon-pro"></i></span></a>
            <h1 class="g-font-weight-300 g-font-size-28 g-color-black mb-0">Item Details</h1>
        </div>

      
    </div>
    <hr class="d-flex g-brd-gray-light-v7 g-my-30">

@endsection
@section('content')

        <div class="col-lg-7">
          <!-- Carousel -->
          <div id="carousel1" class="js-carousel g-pt-10 g-mb-10" data-infinite="true" data-fade="true" data-arrows-classes="u-arrow-v1 g-brd-around g-brd-white g-absolute-centered--y g-width-45 g-height-45 g-font-size-14 g-color-white g-color-primary--hover rounded-circle" data-arrow-left-classes="fa fa-angle-left g-left-40" data-arrow-right-classes="fa fa-angle-right g-right-40" data-nav-for="#carousel2">
            <div class="js-slide g-bg-cover g-bg-black-opacity-0_1--after">
            <img class="img-fluid w-100" src="/storage/product_images/{{$item->product_image}}" alt="Image Description">
            </div>
            
            @if( $item->product_image2 != 'null' )
            <div class="js-slide g-bg-cover g-bg-black-opacity-0_1--after">
                    <img class="img-fluid w-100" src="/storage/product_images/{{$item->product_image2}}" alt="Image Description">
                  </div>
            @endif
           
            @if( $item->product_image3 != 'null' )
            <div class="js-slide g-bg-cover g-bg-black-opacity-0_1--after">
              <img class="img-fluid w-100" src="/storage/product_images/{{$item->product_image3}}" alt="Image Description">
            </div>
            @endif
          </div>
      
          <div id="carousel2" class="js-carousel text-center u-carousel-v3 g-mx-minus-5 g-mb-10" data-infinite="true" data-center-mode="true" data-slides-show="3" data-is-thumbs="true" data-nav-for="#carousel1">
            
                <div class="js-slide g-cursor-pointer g-px-5">
                        <img class="img-fluid" src="/storage/product_images/{{$item->product_image}}" alt="Image Description">
                      </div>

                      @if( $item->product_image2 != 'null' )
            <div class="js-slide g-cursor-pointer g-px-5">
              <img class="img-fluid" src="/storage/product_images/{{$item->product_image2}}" alt="Image Description">
            </div>
            @endif
      
            @if( $item->product_image3 != 'null' )
            <div class="js-slide g-cursor-pointer g-px-5">
              <img class="img-fluid" src="/storage/product_images/{{$item->product_image3}}" alt="Image Description">
            </div>
            @endif
      
      
          
          </div>
          <!-- End Carousel -->
        </div>
      
        <div class="col-lg-5">
          <div class="g-px-40--lg g-py-30">
            <!-- Product Info -->
            <div class="g-mb-30">
              <h1 class="g-font-weight-300 mb-4">{{$item->title}}
              </h1>
              <p>{{$item->body}}</p>
            </div>
            <!-- End Product Info -->
      
            <!-- Price -->
            <div class="g-mb-30">
              <h2 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-12 text-uppercase mb-2">Price</h2>
            <span class="g-color-black g-font-weight-500 g-font-size-30 mr-2">€ {{$item->price}}</span>
         
            </div>
            <!-- End Price -->
      
            <!-- Accordion -->
            <div id="accordion-01" role="tablist" aria-multiselectable="true">
              <div id="accordion-01-heading-01" class="g-brd-y g-brd-gray-light-v3 py-3" role="tab">
                <h5 class="g-font-weight-400 g-font-size-default mb-0">
                  <a class="d-block g-color-gray-dark-v5 g-text-underline--none--hover" href="#accordion-01-body-01" data-toggle="collapse" data-parent="#accordion-01" aria-expanded="false" aria-controls="accordion-01-body-01">Seller
                    <span class="float-right g-pos-rel g-top-3 mr-1 fa fa-angle-down"></span>
                  </a>
                </h5>
              </div>
              <div id="accordion-01-body-01" class="collapse" role="tabpanel" aria-labelledby="accordion-01-heading-01" data-parent="#accordion-01">
                <div class="g-py-10">
                <!-- Team Block -->
<div class="row">
        <div class="col-lg-4 g-mb-30">
          <!-- Figure -->
         
            <div class="d-flex justify-content-start">
              <!-- Figure Image -->
            <img class="rounded-circle g-width-100 g-height-100 g-mr-15" src="/storage/profile_images/{{$item->user->profile_image}}" alt="Image Description">
              <!-- Figure Image -->
      
              <!-- Figure Info -->
              <div class="d-block g-mt-20">
                <div class="g-mb-10">
                <h4 class="h5 g-mb-0">{{$item->user->name}}</h4>
                <a href="mailto:{{$item->user->email}}" target="_top">{{$item->user->email}}</a>
                </div>
     
            
              </div>
              <!-- End Figure Info -->
            </div>
          </figure>
          <!-- End Figure -->
 
        
      
        
      </div>
      <!-- End Team Block -->
                </div>
              </div>
            </div>
            <!-- End Accordion -->
      
            <!-- Location -->
            <div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
                    <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Location</h5>

                    <!-- Checkbox -->
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item g-mx-10">
                           {{$item->location}}
                        </li>
                        
                        </ul
                    <!-- End Checkbox -->
                </div>
                <!-- End Location -->

            <!-- Category -->
            <div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3 " role="tab">
              <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Category</h5>
      
              <!-- Checkbox -->
              <ul class="list-inline mb-0">
                <li class="list-inline-item g-mx-10">
                        {{$type[$item->category]}}
                </li>
               
              </ul>
              <!-- End Checkbox -->
            </div>
            <!-- End Category -->
      
       
         <!-- Category -->
         <div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3 g-mb-30" role="tab">
                <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Added on</h5>
        
                <!-- Checkbox -->
                <ul class="list-inline mb-0">
                  <li class="list-inline-item g-mx-10">
                         <?php
                        echo date('d-m-Y', strtotime($item->created_at)); 
                            ?>
                  </li>
                 
                </ul>
                <!-- End Checkbox -->
              </div>
              <!-- End Category -->
              @if(!Auth::guest())
              @if(Auth::user()->id != $item->user_id)
              <div class="row g-mx-minus-5 g-mb-20">
                    <div class="col g-px-5 g-mb-10">
                    <a class="btn btn-block u-btn-primary g-font-size-12 text-uppercase g-py-15 g-px-25" href="/messages/create?uid={{$item->user->id}}&subject={{$item->title}}">
                              Contact Seller
                              <i class="align-middle ml-2 hs-admin-email"></i>               
                      </a>
                    </div>
                    <div class="col g-px-5 g-mb-10">
        
                  <?php $status = $item->favoritedBy(); 
                  $favorited = 0;?>
                  
                  @foreach($status as $check)
                  @if($check->id == Auth::user()->id)
                  <?php $favorited = 1;?>
                  @else

                  
                  @endif

                  @endforeach

                  @if($favorited == 1)
             
                  <a class="btn btn-block u-btn-outline-orange g-brd-gray-dark-v5 g-brd-orange--hover g-color-gray-dark-v4 g-color-white--hover g-font-size-12 text-uppercase g-py-15 g-px-25"  href="/items/{{$item->id}}/unfavorite" >
                        Added to Wishlist
                         <i class="fa fa-heart g-color-orange"></i>    
                  @else
                                
                  <a href="/items/{{$item->id}}/favorite" class="btn btn-block u-btn-outline-orange g-brd-gray-dark-v5 g-brd-orange--hover g-color-gray-dark-v4 g-color-white--hover g-font-size-12 text-uppercase g-py-15 g-px-25"  href="/items/{{$item->id}}/unfavorite">
                    Add to Wishlist
                     <i class="fa fa-heart-o"></i>    
                  @endif

             
          </li>
          @endif
          @endif
            <!-- Buttons -->
           
             
              
                     
                      
        </a>
              </div>
            </div>
            <!-- End Buttons -->
            @if(Auth::user()->id == $item->user_id)
            <ul class="nav d-flex justify-content-between g-font-size-12 text-uppercase">
                    <li class="nav-item g-brd-bottom g-brd-gray-dark-v4">
                      <a class="g-color-primary--active g-pa-0 g-pb-1" href="/items/{{$item->id}}/edit" >Edit</a>
                    </li>
                
                    <li class="nav-item g-brd-bottom g-brd-gray-dark-v4">
                      <a class=" g-color-primary--active g-pa-0 g-pb-1" href="/" onclick="document.getElementById('deleteForm').submit();" >Delete</a>
                      {!!Form::open(['action' => ['ItemsController@destroy', $item->id], 'method' => 'POST', 'id' => 'deleteForm'])!!}
                      {{Form::hidden('_method', 'DELETE')}}
                      {{Form::submit('Delete', ['style' => 'display: none;', 'class' => 'deleteBtn'])}}
                      
                      {!!Form::close()!!}
                    </li>
                  </ul>
            @endif
         
      
            
              </div>
            </div>
            <!-- End Tab Panes -->
          </div>
        </div>
    

@endsection
