@extends('layouts.app')

@section('content')
<h1>Edit Item</h1>

{!! Form::open(['action' => ['ItemsController@update', $item->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
{{Form::label('title', 'Title')}}
{{Form::text('title', $item->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}        
    </div>

    <div class="form-group">
     {{Form::label('body', 'Description')}}
     {{Form::textarea('body', $item->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}        
     </div>

     <div class="form-group">
            {{Form::label('price', 'Price')}}
            {{Form::text('price', $item->price, ['class' => 'form-control', 'placeholder' => 'Price'])}}        
        </div>

        <div class="form-group">
                {{Form::label('category', 'Category')}}
                {{Form::select('category', $select, $item->category, ['class' => 'form-control'])}}        
     </div>

  {{--  <div class="form-group">
            {{Form::label('location', 'Location')}}
            {{Form::text('location', $item->location, ['class' => 'form-control', 'placeholder' => 'Location'])}}        
                </div> --}}

            
       <div class="form-group">
         {{Form::file('product_image')}}
          </div>

                {{Form::hidden('_method', 'PUT')}}

     {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection