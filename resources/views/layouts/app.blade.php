<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Title -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/bootstrap.min.css')}}">
    <!-- CSS Global Icons -->
    <link rel="stylesheet" href="{{asset('assets/vendor/icon-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/icon-line/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/icon-etlinefont/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/icon-line-pro/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/icon-hs/style.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor/hs-admin-icons/hs-admin-icons.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/slick-carousel/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor/flatpickr/dist/css/flatpickr.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-select/css/bootstrap-select.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor/chartist-js/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/chartist-js-tooltip/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/fancybox/jquery.fancybox.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor/hamburgers/hamburgers.min.css')}}">

    <!-- CSS Unify -->
    <link rel="stylesheet" href="{{asset('assets/css/unify-admin.css')}}">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
</head>

<body>
    <!-- Header -->
    <header id="js-header" class="u-header u-header--sticky-top">
        <div class="u-header__section u-header__section--admin-dark g-min-height-65 ">
                @guest
            <div class="container text-right g-py-25">
                <a href="{{ route('login') }}">Login</a>
            </div>
              
                @else
            <nav class="navbar no-gutters g-pa-0">
                    
                <div class="container">
                      
                    <!-- Top Search Bar -->
                   <a href="/"> <h3 class="g-color-white g-mt-7">Garage Sale</h3></a>
                  @yield('search')
                    <!-- End Top Search Bar -->
                   

                  
            
                    <!-- Messages/Notifications/Top Search Bar/Top User -->
                    <div class="col-auto d-flex g-py-12 g-pl-40--lg ml-auto">
                           
                        <!-- Top Messages -->
                        <div class="g-pos-rel g-hidden-sm-down g-mr-5">
                                
                                

                            <a id="messagesInvoker" class="d-block text-uppercase u-header-icon-v1 g-pos-rel g-width-40 g-height-40 rounded-circle g-font-size-20" href="/messages">
                                    <?php $count = Auth::user()->newThreadsCount(); ?>
                                    @if($count > 0)
                                    <span class="u-badge-v1 g-top-7 g-right-7 g-width-18 g-height-18 g-bg-orange g-font-size-10 g-color-white rounded-circle p-0">{{ $count }}</span>
                                    @endif
                                      
                                <i class="hs-admin-comment-alt g-absolute-centered"></i>
                            </a>

                            <!-- Top Messages List 
                            <div id="messagesMenu" class="g-absolute-centered--x g-width-340 g-max-width-400 g-mt-17 rounded" aria-labelledby="messagesInvoker">
                                <div class="media u-header-dropdown-bordered-v1 g-pa-20">
                                    <h4 class="d-flex align-self-center text-uppercase g-font-size-default g-letter-spacing-0_5 g-mr-20 g-mb-0">
                                       6 new messages
                                           </h4>
                                    <div class="media-body align-self-center text-right">
                                        <a class="g-color-orange" href="/messages">View All</a>
                                    </div>
                                </div>

                                <ul class="p-0 mb-0">
                                    <!-- Top Messages List Item 
                               

                                    <li class="media g-pos-rel u-header-dropdown-item-v1 g-pa-20">
                                        <div class="d-flex g-mr-15">
                                            <img class="g-width-40 g-height-40 rounded-circle" src="{{asset('assets/img-temp/100x100/img5.jpg')}}" alt="Image Description">
                                        </div>

                                        <div class="media-body">
                                            <h5 class="g-font-size-16 g-font-weight-400 g-mb-5"><a href="#!">Verna Swanson</a></h5>
                                            <p class="g-mb-10">Not so many years businesses used to grunt at using</p>

                                            <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-lightblue-v2">
            <i class="hs-admin-time icon-clock g-mr-5"></i> <small>5 Min ago</small>
          </em>
                                        </div>
                                        <a class="u-link-v2" href="#!">Read</a>
                                    </li>
                                    <!-- End Top Messages List Item -->

                                    <!-- Top Messages List Item 
                                    <li class="media g-pos-rel u-header-dropdown-item-v1 g-pa-20">
                                        <div class="d-flex g-mr-15">
                                            <img class="g-width-40 g-height-40 rounded-circle" src="assets/img-temp/100x100/img6.jpg" alt="Image Description">
                                        </div>

                                        <div class="media-body">
                                            <h5 class="g-font-size-16 g-font-weight-400 g-mb-5"><a href="#!">Eddie Hayes</a></h5>
                                            <p class="g-mb-10">But today and influence of is growing right along illustration</p>

                                            <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-lightblue-v2">
            <i class="hs-admin-time icon-clock g-mr-5"></i> <small>22 Min ago</small>
          </em>
                                        </div>
                                        <a class="u-link-v2" href="#!">Read</a>
                                    </li>
                                    <!-- End Top Messages List Item -->

                                    <!-- Top Messages List Item 
                                    <li class="media g-pos-rel u-header-dropdown-item-v1 g-pa-20">
                                        <div class="d-flex g-mr-15">
                                            <img class="g-width-40 g-height-40 rounded-circle" src="assets/img-temp/100x100/img7.jpg" alt="Image Description">
                                        </div>

                                        <div class="media-body">
                                            <h5 class="g-font-size-16 g-font-weight-400 g-mb-5"><a href="#!">Herbert Castro</a></h5>
                                            <p class="g-mb-10">But today, the use and influence of illustrations is growing right along</p>

                                            <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-lightblue-v2">
            <i class="hs-admin-time icon-clock g-mr-5"></i> <small>15 Min ago</small>
          </em>
                                        </div>
                                        <a class="u-link-v2" href="#!">Read</a>
                                    </li>
                                    <!-- End Top Messages List Item 
                                </ul>
                            </div>
                            <!-- End Top Messages List -->
                        </div>
                        <!-- End Top Messages -->



                        <!-- Top Search Bar (Mobi) -->
                        <a id="searchInvoker" class="g-hidden-sm-up text-uppercase u-header-icon-v1 g-pos-rel g-width-40 g-height-40 rounded-circle g-font-size-20" href="#!" aria-controls="searchMenu" aria-haspopup="true" aria-expanded="false" data-is-mobile-only="true" data-dropdown-event="click" data-dropdown-target="#searchMenu" data-dropdown-type="css-animation" data-dropdown-duration="300" data-dropdown-animation-in="fadeIn" data-dropdown-animation-out="fadeOut">
                            <i class="hs-admin-search g-absolute-centered"></i>
                        </a>
                        <!-- End Top Search Bar (Mobi) -->
                   
                        <!-- Top User -->
                        <div class="col-auto d-flex g-pt-5 g-pt-0--sm g-pl-10 g-pl-20--sm">
                            <div class="g-pos-rel g-px-10--lg">
                                <a id="profileMenuInvoker" class="d-block" href="#!" aria-controls="profileMenu" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#profileMenu" data-dropdown-type="css-animation" data-dropdown-duration="300" data-dropdown-animation-in="fadeIn" data-dropdown-animation-out="fadeOut">
                                    <span class="g-pos-rel">
        <span class="u-badge-v2--xs u-badge--top-right g-hidden-sm-up g-bg-secondary g-mr-5"></span>
                                    <img class="g-width-30 g-width-40--md g-height-30 g-height-40--md rounded-circle g-mr-10--sm" src="/storage/profile_images/{{Auth::user()->profile_image}}" alt="Image description">
                                    </span>
                                    <span class="g-pos-rel g-top-2">
        <span class="g-hidden-sm-down">{{ Auth::user()->name }}</span>
                                    <i class="hs-admin-angle-down g-pos-rel g-top-2 g-ml-10"></i>
                                    </span>
                                </a>

                                <!-- Top User Menu -->
                                <ul id="profileMenu" class="g-pos-abs g-left-0 g-width-100x--lg g-nowrap g-font-size-14 g-py-20 g-mt-17 rounded" aria-labelledby="profileMenuInvoker">
                                    <li class="g-hidden-sm-up g-mb-10">
                                        <a class="media g-py-5 g-px-20" href="#!">
                                            <span class="d-flex align-self-center g-pos-rel g-mr-12">
          <span class="u-badge-v1 g-top-minus-3 g-right-minus-3 g-width-18 g-height-18 g-bg-secondary g-font-size-10 g-color-white rounded-circle p-0">10</span>
                                            <i class="hs-admin-comment-alt"></i>
                                            </span>
                                            <span class="media-body align-self-center">Unread Messages</span>
                                        </a>
                                    </li>
                                    <!--  <li class="g-hidden-sm-up g-mb-10">
                                        <a class="media g-py-5 g-px-20" href="#!">
                                            <span class="d-flex align-self-center g-mr-12">
          <i class="hs-admin-bell"></i>
        </span>
                                            <span class="media-body align-self-center">Notifications</span>
                                        </a>
                                    </li> -->
                                    <li class="g-mb-10">
                                        <a class="media g-color-orange--hover g-py-5 g-px-20" href="/dashboard">
                                            <span class="d-flex align-self-center g-mr-12">
          <i class="hs-admin-package"></i>
        </span>
                                            <span class="media-body align-self-center">My Items</span>
                                        </a>
                                    </li>
                                    <li class="g-mb-10">
                                        <a class="media g-color-orange--hover g-py-5 g-px-20" href="/wishlist">
                                            <span class="d-flex align-self-center g-mr-12">
          <i class="hs-admin-heart"></i>
        </span>
                                            <span class="media-body align-self-center">Wishlist</span>
                                        </a>
                                    </li>
                                    <li class="g-mb-10">
                                        <a class="media g-color-orange--hover g-py-5 g-px-20" href="/users/{{Auth::user()->id}}">
                                            <span class="d-flex align-self-center g-mr-12">
          <i class="hs-admin-user"></i>
        </span>
                                            <span class="media-body align-self-center">My Profile</span>
                                        </a>
                                    </li>
                                    <!--      <li class="g-mb-10">
                                        <a class="media g-color-orange--hover g-py-5 g-px-20" href="#!">
                                            <span class="d-flex align-self-center g-mr-12">
          <i class="hs-admin-headphone-alt"></i>
        </span>
                                            <span class="media-body align-self-center">Get Support</span>
                                        </a>
                                    </li> -->
                                    <li class="mb-0">
                                  

                                        <a class="media g-color-orange--hover g-py-5 g-px-20" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                            <span class="d-flex align-self-center g-mr-12">
          <i class="hs-admin-shift-right"></i>
        </span>
                                            <span class="media-body align-self-center">Sign Out</span>
                                            
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                    </li>
                                </ul>
                                <!-- End Top User Menu -->

                            </div>
                            <!-- End Top User -->
                        </div>
                     
                    </div>
                    <!-- End Messages/Notifications/Top Search Bar/Top User -->
                   
                </div>
               
                <!-- Top Activity Toggler 
                <a id="activityInvoker" class="text-uppercase u-header-icon-v1 g-pos-rel g-width-40 g-height-40 rounded-circle g-font-size-20" href="#!" aria-controls="activityMenu" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#activityMenu" data-dropdown-type="css-animation" data-dropdown-animation-in="fadeInRight" data-dropdown-animation-out="fadeOutRight" data-dropdown-duration="300">
                    <i class="hs-admin-align-right g-absolute-centered"></i>
                </a>
              End Top Activity Toggler -->
               
            </nav>
            @endguest
            <!-- Top Activity Panel 
            <div id="activityMenu" class="js-custom-scroll u-header-sidebar g-pos-fix g-top-0 g-left-auto g-right-0 g-z-index-4 g-width-300 g-width-400--sm g-height-100vh" aria-labelledby="activityInvoker">
                <div class="u-header-dropdown-bordered-v1 g-pa-20">
                    <a id="activityInvokerClose" class="pull-right g-color-lightblue-v2" href="#!" aria-controls="activityMenu" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#activityMenu" data-dropdown-type="css-animation" data-dropdown-animation-in="fadeInRight" data-dropdown-animation-out="fadeOutRight" data-dropdown-duration="300">
                        <i class="hs-admin-close"></i>
                    </a>
                    <h4 class="text-uppercase g-font-size-default g-letter-spacing-0_5 g-mr-20 g-mb-0">Activity</h4>
                </div>


            -->

        </div>
    </header>
    <!-- End Header -->


    <main class="container-fluid px-0 g-pt-65">
        <div class="row no-gutters g-pos-rel g-overflow-x-hidden">


            <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
                <div class="g-pa-45">
                    <div class="container">
                            @yield('header')
                            @include('inc.messages')
                        <div class="row">
                        <!-- START BODY -->
                        @yield('content')
                        <!-- END BODY -->
                    </div>
                    </div>
                </div>
            </div>


        </div>

    </main>

    <!-- JS Global Compulsory -->
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-migrate/jquery-migrate.min.js')}}"></script>

    <script src="{{asset('assets/vendor/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/bootstrap.min.js')}}"></script>

    <script src="{{asset('assets/vendor/cookiejs/jquery.cookie.js')}}"></script>


    <!-- jQuery UI Core -->
    <script src="{{asset('assets/vendor/jquery-ui/ui/widget.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-ui/ui/version.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-ui/ui/keycode.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-ui/ui/position.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-ui/ui/unique-id.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-ui/ui/safe-active-element.js')}}"></script>

    <!-- jQuery UI Helpers -->
    <script src="{{asset('assets/vendor/jquery-ui/ui/widgets/menu.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-ui/ui/widgets/mouse.js')}}"></script>

    <!-- jQuery UI Widgets -->
    <script src="{{asset('assets/vendor/jquery-ui/ui/widgets/datepicker.js')}}"></script>

    <!-- JS Plugins Init. -->
    <script src="{{asset('assets/vendor/appear.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/vendor/flatpickr/dist/js/flatpickr.min.js')}}"></script>
    <script src="{{asset('assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('assets/vendor/chartist-js/chartist.min.js')}}"></script>
    <script src="{{asset('assets/vendor/chartist-js-tooltip/chartist-plugin-tooltip.js')}}"></script>
    <script src="{{asset('assets/vendor/fancybox/jquery.fancybox.min.js')}}"></script>

    <!-- JS Unify -->
    <script src="{{asset('assets/js/hs.core.js')}}"></script>
    <script src="{{asset('assets/js/components/hs.side-nav.js')}}"></script>
    <script src="{{asset('assets/js/helpers/hs.hamburgers.js')}}"></script>
    <script src="{{asset('assets/js/components/hs.range-datepicker.js')}}"></script>
    <script src="{{asset('assets/js/components/hs.datepicker.js')}}"></script>
    <script src="{{asset('assets/js/components/hs.dropdown.js')}}"></script>
    <script src="{{asset('assets/js/components/hs.scrollbar.js')}}"></script>
    <script src="{{asset('assets/js/components/hs.area-chart.js')}}"></script>
    <script src="{{asset('assets/js/components/hs.donut-chart.js')}}"></script>
    <script src="{{asset('assets/js/components/hs.bar-chart.js')}}"></script>
    <script src="{{asset('assets/js/helpers/hs.focus-state.js')}}"></script>
    <script src="{{asset('assets/js/components/hs.popup.js')}}"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>

<script  src="{{asset('assets/vendor/slick-carousel/slick/slick.js')}}"></script>

<!-- JS Unify -->
<script  src="{{asset('assets/js/components/hs.carousel.js')}}"></script>

<!-- JS Plugins Init. -->
<script >
  $(document).ready(function () {
    // initialization of carousel
    $.HSCore.components.HSCarousel.init('.js-carousel');
  });
</script>

    <!-- JS Custom -->
    <script src="{{asset('assets/js/custom.js')}}"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function () {
            // initialization of custom select
            $('.js-select').selectpicker();

            // initialization of hamburger
            $.HSCore.helpers.HSHamburgers.init('.hamburger');

            // initialization of charts
            $.HSCore.components.HSAreaChart.init('.js-area-chart');
            $.HSCore.components.HSDonutChart.init('.js-donut-chart');
            $.HSCore.components.HSBarChart.init('.js-bar-chart');

            // initialization of sidebar navigation component
            $.HSCore.components.HSSideNav.init('.js-side-nav', {
                afterOpen: function () {
                    setTimeout(function () {
                        $.HSCore.components.HSAreaChart.init('.js-area-chart');
                        $.HSCore.components.HSDonutChart.init('.js-donut-chart');
                        $.HSCore.components.HSBarChart.init('.js-bar-chart');
                    }, 400);
                }
                , afterClose: function () {
                    setTimeout(function () {
                        $.HSCore.components.HSAreaChart.init('.js-area-chart');
                        $.HSCore.components.HSDonutChart.init('.js-donut-chart');
                        $.HSCore.components.HSBarChart.init('.js-bar-chart');
                    }, 400);
                }
            });

            // initialization of range datepicker
            $.HSCore.components.HSRangeDatepicker.init('#rangeDatepicker, #rangeDatepicker2, #rangeDatepicker3');

            // initialization of datepicker
            $.HSCore.components.HSDatepicker.init('#datepicker', {
                dayNamesMin: [
          'SU'

















































                    
                    , 'MO'

















































                    
                    , 'TU'

















































                    
                    , 'WE'

















































                    
                    , 'TH'

















































                    
                    , 'FR'

















































                    
                    , 'SA'
        ]
            });

            // initialization of HSDropdown component
            $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
                dropdownHideOnScroll: false
            });

            // initialization of custom scrollbar
            $.HSCore.components.HSScrollBar.init($('.js-custom-scroll'));

            // initialization of popups
            $.HSCore.components.HSPopup.init('.js-fancybox', {
                btnTpl: {
                    smallBtn: '<button data-fancybox-close class="btn g-pos-abs g-top-25 g-right-30 g-line-height-1 g-bg-transparent g-font-size-16 g-color-gray-light-v3 g-brd-none p-0" title=""><i class="hs-admin-close"></i></button>'
                }
            });
        });
    </script>
</body>

</html>