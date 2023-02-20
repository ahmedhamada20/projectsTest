@extends('front.layouts.master')
@section('title')
الصفحه الرئسيه
@endsection
@section('content')
<!-- Page Content -->
<div id="page-content">
    <!-- Slider -->
    <div id="homepage-carousel">
        <div class="container">
            <div class="homepage-carousel-wrapper">
                <div class="row">
                    <div class="col-md-6 col-sm-7">
                        <div class="image-carousel">
                            @forelse (silderActive() as $row)


                            <div class="image-carousel-slide"><img src="{{ asset($row->image) }}" width="555"
                                    height="320" alt=""></div>
                            @empty


                            <div class="image-carousel-slide"><img src="{{ asset('front/assets/img/slide-1.jpg') }}"
                                    alt=""></div>
                            <div class="image-carousel-slide"><img src="{{ asset('front/assets/img/slide-2.jpg') }}"
                                    alt=""></div>
                            <div class="image-carousel-slide"><img src="{{ asset('front/assets/img/slide-3.jpg') }}"
                                    alt=""></div>

                            @endforelse

                        </div><!-- /.slider-image -->
                    </div>


                    <!-- /.col-md-6 -->
                    <div class="col-md-6 col-sm-5">
                        <div class="slider-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1>Join the comunity of modern thinking students</h1>
                                    <form id="slider-form" role="form" action="" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input class="form-control has-dark-background" name="slider-name"
                                                        id="slider-name" placeholder="Full Name" type="text" required>
                                                </div>
                                            </div><!-- /.col-md-6 -->
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input class="form-control has-dark-background" name="slider-email"
                                                        id="slider-email" placeholder="Email" type="email" required>
                                                </div>
                                            </div><!-- /.col-md-6 -->
                                        </div><!-- /.row -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <select name="slider-study-level" id="slider-study-level"
                                                        class="has-dark-background">
                                                        <option value="- Not selected -">Study Level</option>
                                                        <option value="Beginner">Beginner</option>
                                                        <option value="Advanced">Advanced</option>
                                                        <option value="Intermediate">Intermediate</option>
                                                        <option value="Professional">Professional</option>
                                                    </select>
                                                </div><!-- /.form-group -->
                                            </div><!-- /.col-md-6 -->
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <select name="slider-course" id="slider-course"
                                                        class="has-dark-background">
                                                        <option value="- Not selected -">Courses</option>
                                                        <option value="Art and Design">Art and Design</option>
                                                        <option value="Marketing">Marketing</option>
                                                        <option value="Science">Science</option>
                                                        <option value="History and Psychology"></option>
                                                    </select>
                                                </div><!-- /.form-group -->
                                            </div><!-- /.col-md-6 -->
                                        </div><!-- /.row -->
                                        <button type="submit" id="slider-submit"
                                            class="btn btn-framed pull-right">Submit</button>
                                        <div id="form-status"></div>
                                    </form>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.slider-content -->
                    </div>


                    <!-- /.col-md-6 -->
                </div><!-- /.row -->
                <div class="background"></div>
            </div><!-- /.slider-wrapper -->
            <div class="slider-inner"></div>
        </div><!-- /.container -->
    </div>
    <!-- end Slider -->

    <!-- News, Events, About -->
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <section class="news-small" id="news-small">
                        <header>
                            <h2>News</h2>
                        </header>
                        <div class="section-content">
                            @forelse (newsActive() as $row)
                            <article>
                                <figure class="date"><i class="fa fa-file-o"></i>{{ $row->created_at->format('Y-m-d') }}
                                </figure>
                                <header><a href="">{{ $row->name }}</a></header>

                                <body>{{ $row->notes }}</body>
                            </article>


                            @empty

                            @endforelse


                            <!-- /article -->
                        </div><!-- /.section-content -->
                        <a href="" class="read-more stick-to-bottom">All News</a>
                    </section><!-- /.news-small -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6">
                    <section class="events small" id="events-small">
                        <header>
                            <h2>Events</h2>

                        </header>
                        <div class="section-content">
                            @forelse (eventsActive() as $row)
                            <article class="event nearest">
                                <figure class="date">
                                    <div class="month">{{ $row->created_at->format('M') }}</div>
                                    <div class="day">{{ $row->created_at->format('d') }}</div>
                                </figure>
                                <aside>
                                    <header>
                                        <a href="{{ route('event_detail') }}">{{ $row->name }}</a>
                                    </header>
                                    <div class="additional-info"> {!! Str::limit( $row->notes, 50, ' ...') !!}</div>
                                </aside>
                            </article>
                            @empty

                            @endforelse



                        </div><!-- /.section-content -->
                    </section><!-- /.events-small -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-12">
                    <section id="about">
                        <header>
                            <h2>About Universo</h2>
                        </header>
                        <div class="section-content">
                            <img src="{{aboutsActive()->image }}" width="360" height="118" alt="" class="add-margin">
                            <p><strong>{{ aboutsActive()->name }}</strong> {!! Str::limit( aboutsActive()->notes, 500, '
                                ...') !!} </p>
                                <br>
                            <a href="{{ route('abouts') }}" class="read-more stick-to-bottom">Read More</a>
                        </div>
                        <!-- /.section-content -->
                    </section><!-- /.about -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end News, Events, About -->

    <!-- Testimonial -->
    <section id="testimonials">
        <div class="block">
            <div class="container">
                <div class="author-carousel">
                    @forelse (previousWorkActive() as $row)
                    <div class="author">
                        <blockquote>
                            <figure class="author-picture"><img src="{{ asset($row->image) }}" width="100" height="100"
                                    alt="">
                            </figure>
                            <article class="paragraph-wrapper">
                                <div class="inner">
                                    <header>
                                        {!! Str::limit( $row->notes, 200, ' ...') !!}
                                    </header>
                                    <footer>{{ $row->name }}</footer>
                                </div>
                            </article>
                        </blockquote>
                    </div>
                    @empty

                    @endforelse


                </div>
                <!-- /.author-carousel -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.block -->
    </section>
    <!-- end Testimonial -->

    <!-- Academic Life, Campus Life, Newsletter -->
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <section id="academic-life">
                        <header>
                            <h2>Packages</h2>
                        </header>
                        <div class="section-content">
                            <ul class="list-links">
                                @forelse (PackagesActive() as $row )
                                <li><a href="">{{ $row->name }}</a></li>
                                @empty

                                @endforelse

                            </ul>
                        </div><!-- /.section-content -->
                    </section><!-- /.academic-life -->
                </div><!-- /.col-md-4 -->


                <div class="col-md-4 col-sm-4">
                    <section id="campus-life">
                        <header>
                            <h2>category</h2>
                        </header>
                        <div class="section-content">
                            <ul class="list-links">
                                @forelse (categoryActive() as $row)
                                <li><a href="#">{{ $row->name }}</a></li>

                                @empty

                                @endforelse

                            </ul>
                        </div><!-- /.section-content -->
                    </section><!-- /.campus-life -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-4 col-sm-4">
                    <section id="newsletter">
                        <header>
                            <h2>Newsletter</h2>
                            <div class="section-content">
                                <div class="newsletter">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Your e-mail">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn"><i class="fa fa-angle-right"></i></button>
                                        </span>
                                    </div><!-- /input-group -->
                                </div><!-- /.newsletter -->
                                <p class="opacity-50">

                                    {!! Str::limit( settingSite()->notes, 200, ' ...') !!}
                                </p>
                            </div><!-- /.section-content -->
                        </header>
                    </section><!-- /.newsletter -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Academic Life, Campus Life, Newsletter -->

    <!-- Divisions, Connect -->
    <div class="block">
        <div class="container">
            <div class="block-dark-background">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <section id="division" class="has-dark-background">
                            <header>
                                <h2>courses</h2>
                            </header>
                            <div class="section-content">
                                <ul class="list-links">
                                    @forelse (courseActive() as $row)
                                    <li><a href="{{ route('courses_list') }}">{{ $row->name }}</a></li>

                                    @empty

                                    @endforelse

                                </ul>
                            </div><!-- /.section-content -->
                        </section><!-- #.divisions -->
                    </div>
                    <div class="col-md-9 col-sm-8">
                        <section id="connect" class="has-dark-background">
                            <header>
                                <h2>Connect</h2>
                            </header>
                            <div class="connect-block">
                                <div class="row">
                                    <div class="col-md-3">
                                        <ul class="nav nav-pills nav-stacked">
                                            <li class="active"><a href="#tab-twitter" data-toggle="pill"><i
                                                        class="fa fa-twitter"></i>Twitter</a></li>
                                            <li><a href="#tab-facebook" data-toggle="pill"><i
                                                        class="fa fa-facebook"></i>Facebook</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab-twitter">
                                            <div class="col-md-3">
                                                <article class="social-post twitter-post">
                                                    <header>15 minutes ago</header>
                                                    <figure><a href="#">@universo</a></figure>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Nullam odio augue, accumsan ut massa ut, faucibus
                                                        gravida turpis.
                                                        <a href="http://bit.ly/1bMyz64">http://bit.ly/1bMyz64</a>
                                                    </p>
                                                </article><!-- /.twitter-post -->
                                            </div>
                                            <div class="col-md-3">
                                                <article class="social-post twitter-post">
                                                    <header>2 hours ago</header>
                                                    <figure><a href="#">@universo</a></figure>
                                                    <p>
                                                        Nullam odio augue, accumsan ut massa ut, faucibus
                                                        gravida turpis. Nulla eleifend libero mi, at consequat
                                                        tellus.
                                                        <a href="http://bit.ly/1bMyz64">http://bit.ly/1bMyz64</a>
                                                    </p>
                                                </article><!-- /.twitter-post -->
                                            </div>
                                            <div class="col-md-3">
                                                <article class="social-post twitter-post">
                                                    <header>February 02, 2014</header>
                                                    <figure><a href="#">@universo</a></figure>
                                                    <p>
                                                        Ut at arcu sed justo laoreet iaculis ut nec leo. Aliquam
                                                        laoreet orci eu egestas fermentum.
                                                        <a href="http://bit.ly/1bMyz64">http://bit.ly/1bMyz64</a>
                                                    </p>
                                                </article><!-- /.twitter-post -->
                                            </div>
                                        </div><!-- /.tab-twitter -->
                                        <div class="tab-pane fade" id="tab-facebook">
                                            <div class="col-md-3">
                                                <article class="social-post facebook-post">
                                                    <header>30 minutes ago</header>
                                                    <figure><a href="#">@universo</a></figure>
                                                    <p>
                                                        Ut at arcu sed justo laoreet iaculis ut nec leo. Aliquam
                                                        laoreet orci eu egestas fermentum.
                                                        <a href="http://bit.ly/1bMyz64">http://bit.ly/1bMyz64</a>
                                                    </p>
                                                </article><!-- /.twitter-post -->
                                            </div>
                                            <div class="col-md-3">
                                                <article class="social-post facebook-post">
                                                    <header>4 days ago</header>
                                                    <figure><a href="#">@universo</a></figure>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Nullam odio augue, accumsan ut massa ut, faucibus
                                                        gravida turpis.
                                                        <a href="http://bit.ly/1bMyz64">http://bit.ly/1bMyz64</a>
                                                    </p>
                                                </article><!-- /.twitter-post -->
                                            </div>
                                            <div class="col-md-3">
                                                <article class="social-post facebook-post">
                                                    <header>One week ago</header>
                                                    <figure><a href="#">@universo</a></figure>
                                                    <p>
                                                        Nullam odio augue, accumsan ut massa ut, faucibus
                                                        gravida turpis. Nulla eleifend libero mi, at consequat
                                                        tellus.
                                                        <a href="http://bit.ly/1bMyz64">http://bit.ly/1bMyz64</a>
                                                    </p>
                                                </article><!-- /.twitter-post -->
                                            </div>
                                        </div><!-- /.tab-twitter -->
                                    </div><!-- /.tab-content -->
                                </div><!-- /.row -->
                            </div><!-- /.section-content -->
                        </section><!-- #.divisions -->
                    </div><!-- /.col-md-9 -->
                </div><!-- /.row -->
            </div><!-- /.block-dark-background -->
        </div><!-- /.container -->
    </div>
    <!-- end Divisions, Connect -->

    <!-- Our Professors, Gallery -->
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <section id="our-professors">
                        <header>
                            <h2>Professor</h2>
                        </header>
                        <div class="section-content">
                            <div class="professors">
                                @forelse (ProfessorActive() as $row)
                                <article class="professor-thumbnail">
                                    <figure class="professor-image"><a href="{{ route('members') }}"><img
                                                src="{{ asset($row->image) }}" width="50" height="50" alt=""></a>
                                    </figure>
                                    <aside>
                                        <header>
                                            <a href="{{ route('members') }}">{{ $row->name }}</a>
                                            <div class="divider"></div>
                                            <figure class="professor-description">
                                                {!! Str::limit( $row->notes, 100, ' ...') !!}
                                            </figure>
                                        </header>
                                        <a href="{{ route('members') }}" class="show-profile">Show Profile</a>
                                    </aside>
                                </article>
                                @empty

                                @endforelse
<br>
                                <a href="{{ route('members') }}" class="read-more stick-to-bottom ">All Professor</a>
                            </div><!-- /.professors -->
                        </div><!-- /.section-content -->
                    </section><!-- /.our-professors -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-8 col-sm-8">
                    <section id="gallery">
                        <header>
                            <h2>Gallery</h2>
                        </header>
                        <div class="section-content">
                            <ul class="gallery-list">
                                @forelse (galleryActive() as $row)
                                @foreach ($row->photos as $photo)
                                <li><a href="{{ asset('admin/pictures/gallery/'.$row->id.'/'.$photo->Filename) }}"
                                        class="image-popup"><img src="{{ asset('admin/pictures/gallery/'.$row->id.'/'.$photo->Filename) }}"
                                            alt="{{ $row->name }}"></a></li>
                                @endforeach

                                @empty

                                @endforelse


                            </ul>
                            <a href="" class="read-more">Go to Gallery</a>
                        </div><!-- /.section-content -->
                    </section><!-- /.gallery -->
                </div><!-- /.col-md-4 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Our Professors, Gallery -->

    <!-- Partners, Make a Donation -->
    {{-- <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <section id="partners">
                        <header>
                            <h2>Partners & Donors</h2>
                        </header>
                        <div class="section-content">
                            <div class="logos">
                                <div class="logo"><a href=""><img
                                            src="{{ asset('front/assets/img/logo-partner-01.png') }}" alt=""></a></div>
                                <div class="logo"><a href=""><img
                                            src="{{ asset('front/assets/img/logo-partner-02.png') }}" alt=""></a></div>
                                <div class="logo"><a href=""><img
                                            src="{{ asset('front/assets/img/logo-partner-03.png') }}" alt=""></a></div>
                                <div class="logo"><a href=""><img
                                            src="{{ asset('front/assets/img/logo-partner-04.png') }}" alt=""></a></div>
                                <div class="logo"><a href=""><img
                                            src="{{ asset('front/assets/img/logo-partner-05.png') }}" alt=""></a></div>
                            </div>
                        </div>
                    </section>
                </div><!-- /.col-md-9 -->
                <div class="col-md-3 col-sm-3">
                    <section id="donation">
                        <header>
                            <h2>Make a Donation</h2>
                        </header>
                        <div class="section-content">
                            <a href="" class="universal-button">
                                <h3>Support the University of Universo!</h3>
                                <figure class="date"><i class="fa fa-arrow-right"></i></figure>
                            </a>
                        </div><!-- /.section-content -->
                    </section>
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div> --}}
    <!-- end Partners, Make a Donation -->
</div>
<!-- end Page Content -->
@endsection