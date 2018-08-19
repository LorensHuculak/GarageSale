@extends('layouts.app')

@section('header')
<div class="media">
        <div class="d-flex align-self-center">
                <a href="/"><span class="u-icon-v1 g-color-primary g-mr-20 g-mt-2"><i class="icon-arrow-left u-line-icon-pro u-line-icon-pro"></i></span></a>
            <h1 class="g-font-weight-300 g-font-size-28 g-color-black mb-0">Edit Profile</h1>
        </div>

      
    </div>
    <hr class="d-flex g-brd-gray-light-v7 g-my-30">

@endsection

<div class="container">
@section('content')


{!! Form::open(['action' => ['UserController@update', $user->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
  {{ csrf_field() }}
    {{ method_field('patch') }}
    <div class="form-group">
{{Form::label('name', 'Name')}}
{{Form::text('name', $user->name, ['class' => 'form-control g-color-gray-light-v1', 'placeholder' => 'Name'])}}        
    </div>

    <div class="form-group">
     {{Form::label('email', 'Email')}}
     {{Form::email('email', $user->email, ['class' => 'form-control g-color-gray-light-v1', 'placeholder' => 'Email'])}}        
     </div>

     <div class="form-group">
            {{Form::label('password', 'Password')}}
            {{Form::password('password', ['class' => 'form-control g-color-gray-light-v1', 'placeholder' => 'Password'])}}        
                </div>

      <div class="form-group">
             {{Form::label('password_confirmation', 'Confirm Password')}}
              {{Form::password('password_confirmation', ['class' => 'form-control g-color-gray-light-v1', 'placeholder' => 'Confirm Password'])}}        
           </div>
         
           <div class="form-group">
                {{Form::label('profile_image', 'Profile Image')}}
                {{Form::file('profile_image', ['class' => 'form-control-file'])}}
                 </div>
    


     {{Form::submit('Save Changes', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}

@endsection
</div>