<header class="main-header @yield('header_style')">
    <div class="main-box">
        <div class="auto-container clearfix">
            <div class="logo-box">
                <div class="logo"><a href="{{route('index')}}"><img src="{{asset('assets/images/logo/logo-200x70.png')}}" alt="Srijoner Hut Logo" title="Srijoner Hut Logo"></a></div>
            </div>

            <!--Nav Box-->
            <div class="nav-outer clearfix">
                <!--Mobile Navigation Toggler-->
                <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="navbar-header">
                        <!-- Togg le Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon flaticon-menu-button"></span>
                        </button>

                    </div>



                    <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li class="{{ request()->routeIs('index') ? 'active' : '' }}"><a href="{{route('index')}}">Home</a></li>
                            <li class="dropdown {{request()->is('festival/*') ? 'active' : '' }}"><a href="javascript:void(0)">Festival</a>
                                <ul>
                                    <li><a href="{{route('festival.schedule')}}">Schedules</a></li>
                                    <li><a href="{{route('festival.tickets')}}">Tickets & Passes</a></li>
                                    <li><a href="{{route('festival.sponsors')}}">Our Sponsors</a></li>
                                    <li><a href="{{route('festival.membership')}}">Become A Member</a></li>
                                </ul>
                            </li>
                            <li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a href="{{route('about')}}">About Us</a></li>
                            <li class="dropdown {{request()->is('news/*') ? 'active' : '' }}"><a href="javascript:void(0)">News & Press</a>
                                <ul>
                                    <li><a href="{{route('news.gallery')}}">Gallery</a></li>
                                    <li><a href="{{route('news.video')}}">Video</a></li>
                                </ul>
                            </li>
                            <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a href="{{route('contact')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Main Menu End-->


                <!-- Outer box -->
                <div class="outer-box">
                    <!-- Button Box -->
                    <div class="btn-box">
                        <a href="https://filmfreeway.com/BengaliFilmFestivalofDallas" target="_blank" class="theme-btn btn-style-one"><span class="btn-title">Submit Your Flim</span></a>
                    </div>
                    <div class="btn-box">
                        <a href="{{route('festival.tickets')}}" class="theme-btn btn-style-one"><span class="btn-title">Get Tickets</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Mobile Menu  -->

    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
        <nav class="menu-box">
            <div class="nav-logo"><a href="{{route('index')}}"><img src="{{asset('assets/images/logo/logo-200x70.png')}}" alt="Srijoner Hut Logo" title="Srijoner Hut Logo"></a></div>
            <ul class="navigation clearfix"></ul>
        </nav>

    </div><!-- End Mobile Menu -->

</header>
