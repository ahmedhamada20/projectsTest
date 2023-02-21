<div class="navigation-wrapper">
    <div class="secondary-navigation-wrapper">
        <div class="container">
            <div class="navigation-contact pull-left">Call Us: <span class="opacity-70">
                
            {{ settingSite()->phone }}
            </span></div>
            <div class="search">
                {{-- <div class="input-group">
                    <input type="search" class="form-control" name="search" placeholder="Search">
                    <span class="input-group-btn"><button type="submit" id="search-submit" class="btn"><i
                                class="fa fa-search"></i></button></span>
                </div><!-- /.input-group --> --}}
            </div>
            <ul class="secondary-navigation list-unstyled">
                @auth('customer')
                {{-- <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">

                <ul class="nav navbar-nav"> --}}
                    <li>
                        {{-- <a href="#" class=" has-child no-link">Profile</a> --}}
                        <ul class="list-unstyled child-navigation">
                            <li><a href="{{ route('my_account') }}">  {{ auth('customer')->user()->name }}</a></li>
                 
                            <li>

                                <form method="POST" action="{{ route('logut_customer') }}">
                                    @csrf
                                    <li><a class="dropdown-item" :href="route('logout')"
                                        onclick="event.preventDefault();
                                           this.closest('form').submit();">logout</a></li>
                                    {{-- <x-dropdown-link class="dropdown-item" :href="route('logout')"
                                                     onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link> --}}
        
        
                                </form>
                            </li>
                         
    
                        </ul>
                    </li>
                {{-- </ul>
                </nav> --}}
               

                @else
                <li><a href="{{ route('register_sign') }}">Register & Sign In</a></li>
                @endauth
              
              
            </ul>
        </div>
    </div>
    <!-- /.secondary-navigation -->
    <div class="primary-navigation-wrapper">
        <header class="navbar" id="top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse"
                        data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand nav" id="brand">
                        @if( settingSite()->photo)
                        <a href="{{ route('home') }}"><img   title="{{ settingSite()->name }}" src="{{ asset('admin/pictures/setting/'. settingSite()->id.'/'. settingSite()->photo->Filename) }}"
                            alt="brand"></a>
                        @else
                        <a href="{{ route('home') }}"><img src="#" title="{{ settingSite()->name }}"
                            alt="brand"></a>
                        @endif
                       
                    </div>
                </div>
                <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                    <ul class="nav navbar-nav">
                        {{-- <li class="">
                            <a href="{{ route('home') }}">Home</a>
                        </li> --}}

                        {{-- <li>
                            <a href="#" class=" has-child no-link">lessons</a>
                            <ul class="list-unstyled child-navigation">
                                <li ><a href="{{ route('lessons_list') }}">lessons Listing with Images</a></li>


                            </ul>
                        </li> --}}
{{-- 
                        <li>
                            <a href="#" class=" has-child no-link">previousWork</a>
                            <ul class="list-unstyled child-navigation">
                                <li ><a href="{{ route('previousWork_list') }}">previousWork</a></li>


                            </ul>
                        </li> --}}

                        {{-- <li>
                            <a href="#" class=" has-child no-link">Exam</a>
                            <ul class="list-unstyled child-navigation">
                                <li ><a href="{{ route('Exam_list') }}">Exam</a></li>


                            </ul>
                        </li> --}}
                        <li>
                            <a href="#" class=" has-child no-link">Courses</a>
                            <ul class="list-unstyled child-navigation">
                                <li ><a href="{{ route('courses_list') }}">Course Listing with Images</a></li>


                            </ul>
                        </li>
                        {{-- <li>
                            <a href="#" class="has-child no-link {{ getActiveRoutesHome('events') }}">Events</a>
                            <ul class="list-unstyled child-navigation">
                                <li><a href="{{ route('events') }}">Events Listing</a></li>
                                <li><a href="{{ route('event_detail') }}">Event Detail</a></li>
                            </ul>
                        </li> --}}
                        <li>
                            <a href="{{ route('abouts') }}" class="{{ getActiveRoutesHome('abouts') }}">About Us</a>
                        </li>
                        {{-- <li>
                            <a href="#" class="has-child no-link {{ getActiveRoutesHome('blogs') }}">Blog</a>
                            <ul class="list-unstyled child-navigation">
                                <li><a href="{{ route('blogs') }}">Blog listing</a></li>
                                <li><a href="{{ route('blog_detail') }}">Blog Detail</a></li>
                            </ul>
                        </li> --}}
                        {{-- <li>
                            <a href="#" class="has-child no-link">Pages</a>
                            <ul class="list-unstyled child-navigation">

                                <li><a href="{{ route('my_account') }}">My Account</a></li>
                                {{-- <li><a href="{{ route('members') }}">Members</a></li> --}}
                                {{-- <li><a href="{{ route('members_detail') }}">Member Detail</a></li> --}}
                                {{-- <li><a href="{{ route('register_sign') }}">Register & Sign In</a></li> --}}

                            {{-- </ul> --}}
                        {{-- </li> --}}
                        {{-- <li>
                            <a href="{{ route('contact_us') }}" class="{{ getActiveRoutesHome('contact_us') }}">Contact Us</a>
                        </li> --}}
                    </ul>
                </nav><!-- /.navbar collapse-->
            </div><!-- /.container -->
        </header><!-- /.navbar -->
    </div><!-- /.primary-navigation -->
    <div class="background">
        <img src="{{ asset('front/assets/img/background-city.png') }}" alt="background">
    </div>
</div>