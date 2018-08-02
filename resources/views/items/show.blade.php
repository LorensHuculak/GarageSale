@extends('layouts.app')

@section('content')
<a href="/items" class="btn btn-default">Go Back</a>

<h1>{{$item->title}}</h1>
<img style="width:100%;" src="/storage/product_images/{{$item->product_image}}" alt="">
<p>{!!$item->body!!}</p>

<small>Written on {{$item->created_at}} by {{$item->user->name}}</small>
<img style="width:10%;" src="/storage/profile_images/{{$item->user->profile_image}}" alt="">
<hr>  

@if(!Auth::guest())

<?php $status = $item->favoritedBy(); 
$favorited = 0;?>

@foreach($status as $check)
@if($check->id == Auth::user()->id)
<?php $favorited = 1;?>
@else


@endif

@endforeach

@if($favorited == 1)
<a href="/items/{{$item->id}}/unfavorite" class="Unlike">Unlike</a>
@else
<a href="/items/{{$item->id}}/favorite" class="like">Like</a>
@endif



@if(Auth::user()->id == $item->user_id)
<a href="/items/{{$item->id}}/edit" class="btn btn-default">Edit</a>
{!!Form::open(['action' => ['ItemsController@destroy', $item->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

{!!Form::close()!!}
@endif
@endif



@endsection
