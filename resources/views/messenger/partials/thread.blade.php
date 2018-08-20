<?php $class = $thread->isUnread(Auth::id()) ? 'g-bg-gray-light-v8' : ''; ?>
<!-- Chat List Item -->
   <section class="media justify-content-center {{$class}} g-brd-bottom--lg g-brd-gray-light-v4 g-pa-15 g-pa-25--lg g-mt-0 ">
        <!-- Chat List Item: Avatar -->
        <div class="d-flex g-mr-20--lg">
            <span class="d-inline-block g-pos-rel">

                    <a class="g-color-gray-dark-v2" href="{{ route('messages.show', $thread->id) }}"><img class="rounded-circle g-width-45 g-width-55--lg g-height-45 g-height-55--lg" src="/storage/profile_images/{{$thread->latestMessage->user->profile_image}}" alt="Image Description"></a>
           
        </div>
        <!-- End Chat List Item: Avatar -->

        <div class="media-body align-self-center g-hidden-md-down">
            <div class="media g-mb-10">
                <!-- Chat List Item: Name -->
                <a class="g-color-gray-dark-v2" href="{{ route('messages.show', $thread->id) }}"><h3 class="d-flex align-self-center g-font-size-16 g-font-weight-400 mb-0">{{ $thread->subject }}</h3>
                </a>
                    <!-- End Chat List Item: Name -->

                <!-- Chat List Item: Time -->
                <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-gray-light-v1 ml-auto">
<i class="hs-admin-time icon-clock g-mr-5"></i>
<small>
        <?php
        echo date('G:i A - d M', strtotime($thread->latestMessage->updated_at)); 
            ?>
            </small>
</em>
                <!-- End Chat List Item: Time -->
            </div>

            <div class="media">
                <p class="media-body mb-0">
                    
                    {{ $thread->latestMessage->body }}</p>

                <!-- Chat List Item: Unread Messages -->
                <div class="d-flex align-self-center justify-content-center g-min-width-35 g-bg-secondary g-font-size-12 g-color-white g-rounded-15 g-px-8 g-py-1 ml-auto">{{ $thread->userUnreadMessagesCount(Auth::id()) }}</div>
                <!-- End Chat List Item: Unread Messages -->
            </div>
        </div>
    </section>
    <!-- End Chat List Item -->