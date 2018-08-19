@extends('layouts.app')
@section('header')
<div class="media">
        <div class="d-flex align-self-center">
        <h1 class="g-font-weight-300 g-font-size-28 g-color-black mb-0">Inbox</h1>
        </div>

        <div class="media-body align-self-center text-right">
                <a href="/messages/create" class="btn btn-primary g-width-160--md g-font-size-default g-ml-10">New Message</a>   
        </div>
    </div>
    <hr class="d-flex g-brd-gray-light-v7 g-my-30">

@endsection

@section('content')

<div class="card">
        <div class="row no-gutters">
            <div class="col-lg-5 w-100 g-brd-right--lg g-brd-gray-light-v7">
                <header class="g-brd-bottom g-brd-gray-light-v4 g-px-15 g-px-25--lg">
                    <!-- Chat Search -->
                    <form action="#">
                        <div class="input-group g-pos-rel g-height-50 g-height-80--lg">
                          
                                <div class="media-body d-flex align-self-center justify-content-center g-font-size-16--md g-color-black">
                                        <a class="g-color-black" href="#!">Topics</a>
                                    </div>
                        </div>
                    </form>
                    <!-- End Chat Search -->
                </header>

                <div class="js-custom-scroll-horizontal js-custom-scroll g-height-59_5vh--lg">
                    <!-- Chat List -->
                    <div class="d-flex d-lg-block g-brd-bottom g-brd-none--lg g-brd-gray-light-v4 g-overflow-x-auto">
                        <!-- Chat List Item: typing -->

                        @include('messenger.partials.flash')
    
                        @each('messenger.partials.thread', $threads, 'thread', 'messenger.partials.no-threads')


                        
                    </div>
                    <!-- End Chat List -->
                </div>
            </div>

            <!-- Chat. Message Area. -->
            <div class="col-lg-7">

                <!-- Chat. Message Area. Header. -->
                <header class="g-px-15 g-px-25--lg">
                    <div class="media g-height-50 g-height-80--lg">
                        <div class="d-flex align-self-center g-width-200--sm g-line-height-1_2 g-font-size-default g-pos-rel">
                    
                          
                            <small class="g-ml-20 text-center g-mt-5"><i class="fa fa-user g-color-gray-dark-v5 g-mr-10"></i> {{ $thread->participantsString(Auth::id()) }}</small>
                           
                        </div>

                        <div class="media-body d-flex align-self-center justify-content-center g-font-size-16--md g-color-black">
                        <p class="g-width-600 text-center g-color-black g-mt-15" href="#!">{{ $thread->subject }}</p>
   
                        </div>

                        <div class="d-flex align-self-center align-items-center justify-content-end g-width-100--sm">
                          
                          
                          
                        </div>
                    </div>
                </header>
                <!-- End Chat. Message Area. Header. -->
              
                <hr class="d-flex g-brd-gray-light-v7 g-mx-15 g-mx-25--lg my-0">

                <!-- Chat. Message Area. Messages. -->
                <div class="js-custom-scroll g-height-50vh--lg g-pa-15 g-pa-25--lg">
                    <!-- Chat. Message Area. Message (From). -->

                    @each('messenger.partials.messages', $thread->messages, 'message')

                   
                    <!-- End Chat. Message Area. Message: typing (From). -->
                </div>
                <!-- End Chat. Message Area. Messages. -->
                @include('messenger.partials.form-message')
                
            </div>
            <!-- End Chat. Message Area. -->
        </div>
    </div>





    <div class="col-md-6">
        <h1></h1>
      

     
    </div>
@stop
