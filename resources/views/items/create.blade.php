@extends('layouts.app')

@section('content')
<h1>Create Item</h1>

{!! Form::open(['action' => 'ItemsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
{{Form::label('title', 'Title')}}
{{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}        
    </div>

    <div class="form-group">
     {{Form::label('body', 'Description')}}
     {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}        
     </div>

     <div class="form-group">
            {{Form::label('price', 'Price')}}
            {{Form::text('price', '', ['class' => 'form-control', 'placeholder' => 'Price'])}}        
        </div>

   

     <div class="form-group">
            {{Form::label('category', 'Category')}}
            {{Form::select('category', $select, null, ['class' => 'form-control', 'placeholder' => 'Category'])}}        
 </div>

   

     <div class="form-group">
            {{Form::label('location', 'Location')}}
            {{Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'Location'])}}        
                </div>

                <div class="form-group">
                    {{Form::file('product_image')}}
                </div>

     {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection