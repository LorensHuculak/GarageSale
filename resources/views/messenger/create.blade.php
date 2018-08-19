@extends('layouts.app')
@section('header')
<div class="media">
        <div class="d-flex align-self-center">
        <h1 class="g-font-weight-300 g-font-size-28 g-color-black mb-0">New Message</h1>
        </div>

       
    </div>
    <hr class="d-flex g-brd-gray-light-v7 g-my-30">

@endsection
@section('content')
 
    <form class="g-pa-20 g-mb-30"action="{{ route('messages.store') }}" method="post">
        {{ csrf_field() }}
        
    <?php 
    if(isset($_GET['uid'])) {
        $uid = $_GET['uid']; 
     
    }
    if(isset($_GET['subject'])) {
        $subject = $_GET['subject'];
    }
    
    ?>
        <div class="form-group g-mb-25">
               <label for="recipients[]">Recipient</label>
                <select class="form-control rounded-2" name="recipients[]">
                        @foreach($users as $user)
                        <option value="{{$user->id}}" 
                            @if(isset($uid))
                            @if($uid == $user['id'])
                            selected="selected"
                            @endif
                            @endif
                            >{{$user->name}}</option>
                                @endforeach
            
                </select>
              </div>

            <div class="form-group g-mb-20">
                    <label for="subject">Subject</label>
         
                    <input id="inputGroup1_1" class="form-control form-control-md rounded-2" type="text" name="subject" placeholder="@if(isset($subject)){{$subject}}@else
Subject @endif"

                    
                    value="@if(isset($subject)){{$subject}} @endif">
            
                  </div>

            <!-- Message Form Input -->

            <div class="form-group g-mb-20 g-width-600 ">
               
                    <textarea id="inputGroup2_1" class="form-control form-control-md g-resize-none rounded-2" rows="3" name="message" placeholder="Write a message">{{ old('message') }}</textarea>
              
                  </div>

        
   
      
            
            <!-- Submit Form Input -->
            <div class="form-group g-py-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
 
    </form>
@stop
