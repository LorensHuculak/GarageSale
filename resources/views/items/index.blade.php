@extends('layouts.app')

@section('content')
<h1>ladidadi</h1>

@if(count($items) > 0)

@foreach($items as $item)

<div class="well">

    <div class="row">
        <div class="col-md-4 col-sm-4">
        <img style="width:100%;" src="/storage/product_images/{{$item->product_image}}" alt="">
        </div>
        <div class="col-md-8 col-sm-8">
                <h3><a href="/items/{{$item->id}}">{{$item->title}}</a></h3>
                <small>Written on {{$item->created_at}} by {{$item->user->name}}</small>
                </div>
            </div>
    </div>


@endforeach

{{$items->links()}}

@else
<p>no posts found</p>
@endif
@endsection