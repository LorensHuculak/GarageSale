@extends('layouts.app')

@section('content')
<h1>Edit Profile</h1>

{!! Form::open(['action' => ['UserController@update', $user->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
  {{ csrf_field() }}
    {{ method_field('patch') }}
    <div class="form-group">
{{Form::label('name', 'Name')}}
{{Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}        
    </div>

    <div class="form-group">
     {{Form::label('email', 'Email')}}
     {{Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Email'])}}        
     </div>

     <div class="form-group">
            {{Form::label('password', 'Password')}}
            {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password'])}}        
                </div>

      <div class="form-group">
             {{Form::label('password_confirmation', 'Confirm Password')}}
              {{Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirm Password'])}}        
           </div>
         
           <div class="form-group">
                {{Form::file('profile_image')}}
                 </div>
    


     {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection