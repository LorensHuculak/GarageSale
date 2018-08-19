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
                        <div class="d-flex align-self-center g-width-100--sm g-line-height-1_2 g-font-size-default g-pos-rel">
                            <!-- Chat. Message Area. Search -->
                          

                           
                        </div>

                        <div class="media-body d-flex align-self-center justify-content-center g-font-size-16--md g-color-black">
                            <a class="g-color-black" href="#!">Isaac McDonald</a>
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
                    <section class="g-mb-30">
                        <div class="media g-mb-12">
                            <!-- Chat. Message Area. Message. Avatar. -->
                            <div class="d-flex align-self-end g-mr-12">
                                <img class="rounded-circle g-width-36 g-height-36" src="assets/img-temp/200x200/img2.jpg" alt="Image Description">
                            </div>
                            <!-- End Chat. Message Area. Message. Avatar. -->

                            <!-- Chat. Message Area. Message. Body. -->
                            <div class="media-body">
                                <div class="d-inline-block g-width-170 g-width-auto--sm g-bg-gray-light-v8 g-font-size-12 g-font-size-default--lg g-color-gray-dark-v6 g-rounded-10 g-pa-10-15">
                                    <p class="mb-0">Attending a trade show can be a very effective method of promoting your</p>
                                </div>
                            </div>
                            <!-- End Chat. Message Area. Message. Body. -->
                        </div>

                        <!-- Chat. Message Area. Message Time -->
                        <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-gray-light-v1 g-ml-50">
  <i class="hs-admin-time icon-clock g-mr-5"></i>
  <small>11:49 PM</small>
</em>
                        <!-- End Chat. Message Area. Message Time -->
                    </section>
                    <!-- End Chat. Message Area. Message (From). -->

                    <!-- Chat. Message Area. Message (To). -->
                    <section class="g-mb-30">
                        <div class="media g-mb-12">
                            <!-- Chat. Message Area. Message. Body. -->
                            <div class="media-body">
                                <div class="d-inline-block g-width-170 g-width-auto--sm g-bg-lightblue-v6 g-font-size-12 g-font-size-default--lg g-color-gray-dark-v6 g-rounded-10 g-pa-10-15">
                                    <p class="mb-0">Conversations can be a tricky business. Sometimes, decoding what is said with what is meant is difficult</p>
                                </div>
                            </div>
                            <!-- End Chat. Message Area. Message. Body. -->

                            <!-- Chat. Message Area. Message. Avatar. -->
                            <div class="d-flex align-self-end g-ml-12">
                                <img class="rounded-circle g-width-36 g-height-36" src="assets/img-temp/200x200/img7.jpg" alt="Image Description">
                            </div>
                            <!-- End Chat. Message Area. Message. Avatar. -->
                        </div>

                        <!-- Chat. Message Area. Message Time -->
                        <em class="d-flex align-self-center align-items-center justify-content-end g-font-style-normal g-color-gray-light-v1 g-mr-50">
  <i class="hs-admin-time icon-clock g-mr-5"></i>
  <small>11:49 PM</small>

  <i class="hs-admin-check g-font-size-10 g-color-secondary g-ml-12"></i>
  <i class="hs-admin-check g-font-size-10 g-color-secondary"></i>
</em>
                        <!-- End Chat. Message Area. Message Time -->
                    </section>
                    <!-- End Chat. Message Area. Message (To). -->

                    <!-- Chat. Message Area. Message (From). -->
                    <section class="g-mb-30">
                        <div class="media g-mb-12">
                            <!-- Chat. Message Area. Message. Avatar. -->
                            <div class="d-flex align-self-end g-mr-12">
                                <img class="rounded-circle g-width-36 g-height-36" src="assets/img-temp/200x200/img2.jpg" alt="Image Description">
                            </div>
                            <!-- End Chat. Message Area. Message. Avatar. -->

                            <!-- Chat. Message Area. Message. Body. -->
                            <div class="media-body">
                                <div class="d-inline-block g-width-170 g-width-auto--sm g-bg-gray-light-v8 g-font-size-12 g-font-size-default--lg g-color-gray-dark-v6 g-rounded-10 g-pa-10-15">
                                    <p class="mb-0">A Pocket PC is a handheld computer, which features many of the same capabilities as a modern PC</p>
                                </div>
                            </div>
                            <!-- End Chat. Message Area. Message. Body. -->
                        </div>

                        <!-- Chat. Message Area. Message Time -->
                        <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-gray-light-v1 g-ml-50">
  <i class="hs-admin-time icon-clock g-mr-5"></i>
  <small>11:49 PM</small>
</em>
                        <!-- End Chat. Message Area. Message Time -->
                    </section>
                    <!-- End Chat. Message Area. Message (From). -->

                    <!-- Chat. Message Area. Message (To). -->
                    <section class="g-mb-30 g-mb-65--md">
                        <div class="media g-mb-12">
                            <!-- Chat. Message Area. Message. Body. -->
                            <div class="media-body">
                                <div class="d-inline-block g-width-170 g-width-auto--sm g-bg-lightblue-v6 g-font-size-12 g-font-size-default--lg g-color-gray-dark-v6 g-rounded-10 g-pa-10-15">
                                    <p class="g-mb-10">Create a list with all possible keywords that fit to your product, service</p>
                                    <p class="g-mb-20">
                                        <a class="g-text-break-word g-text-underline g-color-darkblue-v2 g-color-secondary--hover" href="https://wrapbootstrap.com/theme/unify-responsive-website-template-WB0412697">https://wrapbootstrap.com/theme/unify-responsive-website-template-WB0412697</a>
                                    </p>
                                    <blockquote class="blockquote g-font-size-12 g-font-size-default--lg g-brd-left g-brd-3 g-brd-lightblue-v3 g-pl-15 mb-0">
                                        <h4 class="g-font-weight-600 g-font-size-default g-color-black">Unify - Responsive Website Template</h4>
                                        <p class="m-b-0">Unify is an incredibly beautiful and fully responsive Bootstrap 4 Template for any type of creative professionals, startups</p>
                                    </blockquote>
                                </div>
                            </div>
                            <!-- End Chat. Message Area. Message. Body. -->

                            <!-- Chat. Message Area. Message. Avatar. -->
                            <div class="d-flex align-self-end g-ml-12">
                                <img class="rounded-circle g-width-36 g-height-36" src="assets/img-temp/200x200/img7.jpg" alt="Image Description">
                            </div>
                            <!-- End Chat. Message Area. Message. Avatar. -->
                        </div>

                        <!-- Chat. Message Area. Message Time -->
                        <em class="d-flex align-self-center align-items-center justify-content-end g-font-style-normal g-color-gray-light-v1 g-mr-50">
  <i class="hs-admin-time icon-clock g-mr-5"></i>
  <small>11:45 PM</small>

  <i class="hs-admin-check g-font-size-10 g-color-secondary g-ml-12"></i>
  <i class="hs-admin-check g-font-size-10 g-color-secondary"></i>
</em>
                        <!-- End Chat. Message Area. Message Time -->
                    </section>
                    <!-- End Chat. Message Area. Message (To). -->

                    <div class="text-center u-heading-v1-4 g-bg-main g-brd-lightblue-v3 g-mb-40">
                        <h2 class="u-heading-v1__title g-font-size-default g-font-weight-400 g-color-secondary g-px-20--md g-px-45--xl">4 New Messages</h2>
                    </div>

                    <!-- Chat. Message Area. Message (From). -->
                    <section class="g-mb-30">
                        <div class="media g-mb-12">
                            <!-- Chat. Message Area. Message. Avatar. -->
                            <div class="d-flex align-self-end g-mr-12">
                                <img class="rounded-circle g-width-36 g-height-36" src="assets/img-temp/200x200/img2.jpg" alt="Image Description">
                            </div>
                            <!-- End Chat. Message Area. Message. Avatar. -->

                            <!-- Chat. Message Area. Message. Body. -->
                            <div class="media-body">
                                <div class="g-max-width-500">
                                    <div class="row g-mx-minus-5">
                                        <div class="col-sm-4 g-px-5 g-mb-10 g-mb-0--md">
                                            <a class="d-block u-link-v5 g-parent g-pos-rel" href="#!">
                                                <img class="img-fluid g-rounded-2" src="assets/img-temp/900x600/img2.jpg" alt="Image description">

                                                <div class="g-pos-abs g-top-0 w-100 h-100 g-bg-gray-dark-v6 opacity-0 g-opacity-0_7--parent-hover g-rounded-2 g-transition--ease-in g-transition-0_2">
                                                    <i class="hs-admin-import g-absolute-centered g-font-size-24 g-color-white"></i>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-sm-4 g-px-5 g-mb-10 g-mb-0--md">
                                            <a class="d-block u-link-v5 g-parent g-pos-rel" href="#!">
                                                <img class="img-fluid g-rounded-2" src="assets/img-temp/900x600/img3.jpg" alt="Image description">

                                                <div class="g-pos-abs g-top-0 w-100 h-100 g-bg-gray-dark-v6 opacity-0 g-opacity-0_7--parent-hover g-rounded-2 g-transition--ease-in g-transition-0_2">
                                                    <i class="hs-admin-import g-absolute-centered g-font-size-24 g-color-white"></i>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-sm-4 g-px-5">
                                            <a class="d-block u-link-v5 g-parent g-pos-rel" href="#!">
                                                <img class="img-fluid g-rounded-2" src="assets/img-temp/900x600/img4.jpg" alt="Image description">

                                                <div class="g-pos-abs g-top-0 w-100 h-100 g-bg-gray-dark-v6 opacity-0 g-opacity-0_7--parent-hover g-rounded-2 g-transition--ease-in g-transition-0_2">
                                                    <i class="hs-admin-import g-absolute-centered g-font-size-24 g-color-white"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Chat. Message Area. Message. Body. -->
                        </div>

                        <!-- Chat. Message Area. Message Time -->
                        <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-gray-light-v1 g-ml-50">
  <i class="hs-admin-time icon-clock g-mr-5"></i>
  <small>11:43 PM</small>
</em>
                        <!-- End Chat. Message Area. Message Time -->
                    </section>
                    <!-- End Chat. Message Area. Message (From). -->

                    <!-- Chat. Message Area. Message (From). -->
                    <section class="g-mb-30">
                        <div class="media g-mb-12">
                            <!-- Chat. Message Area. Message. Avatar. -->
                            <div class="d-flex align-self-end g-mr-12">
                                <img class="rounded-circle g-width-36 g-height-36" src="assets/img-temp/200x200/img2.jpg" alt="Image Description">
                            </div>
                            <!-- End Chat. Message Area. Message. Avatar. -->

                            <!-- Chat. Message Area. Message. Body. -->
                            <div class="media-body">
                                <div class="d-inline-block g-width-170 g-width-auto--sm g-bg-gray-light-v8 g-font-size-12 g-font-size-default--lg g-color-gray-dark-v6 g-rounded-10 g-pa-10-15">
                                    <p class="mb-0">To a general advertiser outdoor advertising is worthy of consideration. Outdoor advertising is considered as the oldest form of advertising. Posting bills on wooden boards in the late 19th</p>
                                </div>
                            </div>
                            <!-- End Chat. Message Area. Message. Body. -->
                        </div>

                        <!-- Chat. Message Area. Message Time -->
                        <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-gray-light-v1 g-ml-50">
  <i class="hs-admin-time icon-clock g-mr-5"></i>
  <small>11:37 PM</small>
</em>
                        <!-- End Chat. Message Area. Message Time -->
                    </section>
                    <!-- End Chat. Message Area. Message (From). -->

                    <!-- Chat. Message Area. Message (To). -->
                    <section class="g-mb-30">
                        <div class="media g-mb-12">
                            <!-- Chat. Message Area. Message. Body. -->
                            <div class="media-body g-pos-rel">
                                <div class="media g-bg-lightblue-v6 g-color-gray-dark-v6 g-rounded-10 g-pa-10-15">
                                    <div class="d-flex align-self-center">
                                        <i class="hs-admin-zip g-font-size-20 g-color-secondary"></i>
                                        <span class="g-hidden-sm-down g-color-gray-dark-v6 g-ml-15">Project Updates.zip</span>
                                    </div>

                                    <div class="media-body text-right">
                                        <span class="g-hidden-sm-down g-font-weight-300 g-color-gray-dark-v6">
          <small>15mb</small>
        </span>
                                    </div>
                                    <a class="u-link-v2" href="#!">Download</a>
                                </div>
                            </div>
                            <!-- End Chat. Message Area. Message. Body. -->

                            <!-- Chat. Message Area. Message. Avatar. -->
                            <div class="d-flex align-self-end g-ml-12">
                                <img class="rounded-circle g-width-36 g-height-36" src="assets/img-temp/200x200/img7.jpg" alt="Image Description">
                            </div>
                            <!-- End Chat. Message Area. Message. Avatar. -->
                        </div>

                        <!-- Chat. Message Area. Message Time -->
                        <em class="d-flex align-self-center align-items-center justify-content-end g-font-style-normal g-color-primary g-mr-50">
  <i class="hs-admin-back-right g-mr-5"></i>
  <small>Not Delivered</small>
</em>
                        <!-- End Chat. Message Area. Message Time -->
                    </section>
                    <!-- End Chat. Message Area. Message (To). -->

                    <!-- Chat. Message Area. Message: typing (From). -->
                    <section>
                        <div class="media">
                            <!-- Chat. Message Area. Message. Avatar. -->
                            <div class="d-flex align-self-end g-mr-12">
                                <img class="rounded-circle g-width-36 g-height-36" src="assets/img-temp/200x200/img2.jpg" alt="Image Description">
                            </div>
                            <!-- End Chat. Message Area. Message. Avatar. -->

                            <!-- Chat. Message Area. Message. Body: typing -->
                            <div class="media-body align-self-center">
                                <div class="media">
                                    <div class="d-flex align-self-center g-mr-15">
                                        <img src="assets/img/typing.gif" alt="Typing">
                                    </div>
                                    <p class="media-body align-self-center mb-0">Typing…</p>
                                </div>
                            </div>
                            <!-- End Chat. Message Area. Message. Body: typing -->
                        </div>
                    </section>
                    <!-- End Chat. Message Area. Message: typing (From). -->
                </div>
                <!-- End Chat. Message Area. Messages. -->

                <footer class="g-bg-gray-light-v8 g-px-15 g-px-30--lg g-py-10 g-py-25--lg">
                    <form action="#!">
                        <div class="media align-items-top">
                            <div class="d-flex">
                                <label class="u-file-attach-v2 g-line-height-1 g-color-gray-dark-v6 mb-0">
                                    <input id="fileAttachment" name="file-attachment" type="file">
                                    <i class="hs-admin-clip g-font-size-18"></i>
                                </label>
                            </div>

                            <div class="media-body g-ml-25">
                                <textarea class="form-control u-textarea-expandable g-resize-none g-bg-transparent g-brd-none w-100 p-0 g-mt-minus-3" placeholder="Type Something"></textarea>
                            </div>

                            <div class="d-flex ml-auto">
                                <button class="btn btn-link d-flex align-self-top align-items-top u-link-v5 g-color-secondary g-color-secondary--hover p-0 g-ml-15">
                                    <i class="hs-admin-arrow-top-right g-font-size-18 g-line-height-1_4"></i>
                                    <span class="g-hidden-sm-down g-font-weight-300 g-font-size-12 g-font-size-default--md g-ml-4 g-ml-8--md">Send</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </footer>
            </div>
            <!-- End Chat. Message Area. -->
        </div>
    </div>





@stop


