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
                                        <a class="g-color-black g-width-600 text-center" href="#!">Topics</a>
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
                        <div class="d-flex align-self-center g-width-100--sm g-line-height-1_2 g-font-size-default g-pos-rel">
                            <!-- Chat. Message Area. Search -->
                          

                           
                        </div>

                        <div class="media-body d-flex align-self-center justify-content-center g-font-size-16--md g-color-black">
                            <a class="g-color-black g-width-600 " href="#!"></a>
                        </div>

                           <!-- Chat. Emty Message Area. -->
                  <div class="g-absolute-centered text-center">
                        <div class="g-pos-rel g-width-80 g-width-130--lg g-height-80 g-height-130--lg g-bg-gray-light-v8 rounded-circle mx-auto g-mb-20">
                          <i class="hs-admin-comments g-absolute-centered g-font-size-24 g-font-size-32--lg g-color-gray-light-v1"></i>
                        </div>
    
                        <h5 class="g-font-size-default g-font-size-16--md g-font-weight-300 g-color-black mb-0">Select Chat to Start Messaging</h5>
                      </div>
                      <!-- End Chat. Emty Message Area. -->
                    </div>
                </header>
                <!-- End Chat. Message Area. Header. -->


                <!-- Chat. Message Area. Messages. -->
            
                
            </div>
            <!-- End Chat. Message Area. -->
        </div>
    </div>





@stop


