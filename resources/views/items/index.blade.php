@extends('layouts.app')
@section('header')
<div class="media">
        <div class="d-flex align-self-center">
        <h1 class="g-font-weight-300 g-font-size-28 g-color-black mb-0">Items near <span class="g-color-orange"><?php echo unserialize(file_get_contents('http://www.geoplugin.net/php.gp'))["geoplugin_city"] ?></span></h1>
        </div>

        <div class="media-body align-self-center text-right">
                <a href="/items/create" class="btn btn-primary g-width-160--md g-font-size-default g-ml-10">Add Item</a>   
        </div>
    </div>
    <hr class="d-flex g-brd-gray-light-v7 g-my-30">

@endsection

@section('content')

@section('search')
<form id="searchMenu" class="u-header--search col-sm g-py-12 g-ml-15--sm g-ml-20--md g-mr-10--sm" aria-labelledby="searchInvoker" action="{{ route('items.index') }}">
    <div class="input-group g-max-width-450">
    <input name="s" value="{{ isset($s) ? $s : ''}}" class="form-control form-control-md g-rounded-4" type="text" placeholder="Enter search keywords">
        <button type="submit" class="btn u-btn-outline-primary g-brd-none g-bg-transparent--hover g-pos-abs g-top-0 g-right-0 d-flex g-width-40 h-100 align-items-center justify-content-center g-font-size-18 g-z-index-2"><i class="hs-admin-search"></i>
        </button>
    </div>
</form>
@endsection


@if(count($items) > 0)

@foreach($items as $item)

        <div class="col-md-6 col-lg-3 g-mb-30">
                <!-- Product -->
                <figure class="g-px-10">
                    <div class="g-pos-rel g-mb-20" style="height: 200px;">
                        <img class="img-fluid" style="max-height: 200px;" src="/storage/product_images/{{$item->product_image}}" alt="Image Description">
        <?php 
     $age = date_diff(date_create($item['created_at']), date_create('now'))->d;

         ?>
          
          @if($age < "1")
                        <!-- Ribbon -->
                        <figcaption>
                            <span class="u-ribbon-v1 g-width-40 g-height-40 g-color-white g-bg-orange g-font-size-11 text-center text-uppercase g-rounded-50x g-top-10 g-left-10 g-px-2 g-py-12">New</span>
                        </figcaption>
                        <!-- End Ribbon -->
                    </div>
                    @endif
        
                    <div class="media">
                        <!-- Product Info -->
                        <div class="d-flex flex-column">
                            <h4 class="h6 g-color-black mb-1">
        <a class="u-link-v5 g-color-black g-color-orange--hover" href="/items/{{$item->id}}">
            {{$item->title}}
        </a>
        </h4>
                            <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">{{$item->user->name}}</a>
                            <span class="d-block g-color-black g-font-size-17">€ {{$item->price}}</span>
                        </div>
                        <!-- End Product Info -->
        
                        <!-- Products Icons -->
                        <ul class="list-inline media-body text-right">
                                @if(!Auth::guest())
                                @if(Auth::user()->id != $item->user_id)
                            <li class="list-inline-item align-middle mx-0 ">
                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-orange--hover g-font-size-15 rounded-circle" href="/messages/create?uid={{$item->user->id}}" data-toggle="tooltip" data-placement="top" title="Contact Owner">
                                    <i class="hs-admin-email"></i>
                                </a>
                            </li>
                         
                            
                              <li class="list-inline-item align-middle mx-0">

                                    <?php $status = $item->favoritedBy(); 
                                    $favorited = 0;?>
                                    
                                    @foreach($status as $check)
                                    @if($check->id == Auth::user()->id)
                                    <?php $favorited = 1;?>
                                    @else

                                    
                                    @endif

                                    @endforeach

                                    @if($favorited == 1)
                                    <a class="u-icon-v1 u-icon-size--sm g-color-orange g-color-orange--hover g-font-size-15 rounded-circle g-mb-2" href="/items/{{$item->id}}/unfavorite" data-toggle="tooltip" data-placement="top" title="Remove from Wishlist">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    @else
                                    <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-orange--hover g-font-size-15 rounded-circle g-mb-2" href="/items/{{$item->id}}/favorite" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    @endif

                               
                            </li>
                            @endif
                            @endif
                        </ul>
                        <!-- End Products Icons -->
                    </div>
                </figure>
                <!-- End Product -->
            </div>

@endforeach
 <div class="container">
     <div class="row">
            <div class="col-md-2 col-md-offset-5">
        {{ $items->appends(['s' => $s])->links() }}
            </div>
    </div>
    </div> 


@else
<p>no posts found</p>
@endif



@endsection
