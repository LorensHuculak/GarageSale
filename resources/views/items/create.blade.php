@extends('layouts.app')

@section('header')
<div class="media">
        <div class="d-flex align-self-center">
                <a href="/"><span class="u-icon-v1 g-color-primary g-mr-20 g-mt-2"><i class="icon-arrow-left u-line-icon-pro u-line-icon-pro"></i></span></a>
            <h1 class="g-font-weight-300 g-font-size-28 g-color-black mb-0">New Item</h1>
        </div>

      
    </div>
    <hr class="d-flex g-brd-gray-light-v7 g-my-30">

@endsection

@section('content')


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

   

    {{--}} <div class="form-group">
            {{Form::label('location', 'Location')}}
            {{Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'Location'])}}        
                </div> --}}

                <div class="form-group">
                    {{Form::label('product_image', 'Product Image')}}
                    {{Form::file('product_image')}}
                </div>

                <div class="form-group">
                        {{Form::label('product_image2', 'Extra Images')}}
                        {{Form::file('product_image2')}}
                        {{Form::file('product_image3', ['class' => 'g-mt-10'])}}
                    </div>

     {{Form::submit('Add Item', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection