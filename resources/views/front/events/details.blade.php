@extends('front.layouts.master')
@section('title')
    الاحداث
@endsection
@section('content')

<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Events</a></li>
        <li class="active">Event Detail</li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <header><h1>Conservatory Exhibit: The garden of india a country and culture revealed</h1></header>
        <div class="row">
            <!-- Course Image -->
            <div class="col-md-2 col-sm-3">
                <figure class="event-image">
                    <div class="image-wrapper"><img src="{{ asset('front/assets/img/course-detail-img.jpg') }}"></div>
                </figure>
            </div><!-- end Course Image -->
            <!--MAIN Content-->
            <div class="col-md-6 col-sm-9">
                <div id="page-main">
                    <section id="event-detail">
                        <article class="event-detail">
                            <section id="event-header">
                                <header>
                                    <h2 class="event-date">Saturday March 27, 2015</h2>
                                </header>
                                <hr>
                                <div class="course-count-down" id="course-count-down">
                                    <figure class="course-start">Event starts  in:</figure>
                                    <!-- /.course-start -->

                                    <div class="count-down-wrapper">
                                        <script type="text/javascript">var _date = 'Jun 27, 2015 23:28';</script>
                                    </div><!-- /.count-down-wrapper -->

                                </div><!-- /.course-count-down -->
                                <hr>
                                <figure>
                                    <span class="course-summary" id="course-length"><i class="fa fa-calendar-o"></i>7 weeks</span>
                                    <span class="course-summary" id="course-time-amount"><i class="fa fa-folder-o"></i>4-6 hours of work / week</span>
                                    <span class="course-summary" id="course-course-time"><i class="fa fa-clock-o"></i>6:00pm – 8:00pm</span>
                                </figure>
                            </section><!-- /#course-header -->

                            <section id="course-info">
                                <header><h2>Event Info</h2></header>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et urna fringilla, volutpat elit non,
                                    tristique lectus. Nam blandit odio nisl, ac malesuada lacus fermentum sit amet. Vestibulum vitae
                                    aliquet felis, ornare feugiat elit. Nulla varius condimentum elit, sed pulvinar leo sollicitudin vel.
                                </p>
                                <p>
                                    Maecenas sodales, nisl eget dignissim molestie, ligula est consectetur metus, et mollis justo urna
                                    sit amet nulla. Etiam lectus arcu, pellentesque eu tellus tempor, tristique ultrices leo. Nullam at
                                    felis mauris. Aenean in neque eu ligula tempor ornare. Mauris tristique in elit a blandit. Nam laoreet
                                    vulputate nisi eu accumsan. Sed faucibus arcu nec est facilisis dignissim. Fusce risus leo, euismod ut
                                    cursus vitae, imperdiet id quam. Pellentesque habitant morbi tristique senectus et netus et malesuada
                                    fames ac turpis egestas. Fusce mollis mi vulputate leo vestibulum, quis scelerisque libero condimentum.
                                    Praesent rutrum consequat lacus quis suscipit. Proin dapibus mi non semper lobortis.
                                </p>
                                <p>
                                    Ut dignissim placerat est, sit amet tincidunt enim. Sed nisi nisi, ornare vitae lacinia a, mattis quis tortor.
                                    Suspendisse ornare adipiscing nunc, sit amet aliquam diam condimentum quis. Sed in leo sit amet sapien
                                    porttitor vestibulum a ut est. In hac habitasse platea dictumst. Mauris quam dui, cursus nec lorem non,
                                    pellentesque elementum dui. Vestibulum volutpat, risus vitae scelerisque fringilla, ligula nisi egestas
                                    sem, id vulputate ligula nulla ac ligula.
                                </p>
                            </section><!-- /#course-info -->

                            <section id="course-video">
                                <header><h2>Video Presentation</h2></header>
                                <iframe src="//player.vimeo.com/video/64373696" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </section><!-- /#course-video -->

                            <section id="course-speakers">
                                <header><h2>Performers</h2></header>
                                <div class="author-block">
                                    <a href="member-detail.html"><figure class="author-picture"><img src="{{ asset('front/assets/img/student-testimonial.jpg') }}" alt=""></figure></a>
                                    <article class="paragraph-wrapper">
                                        <div class="inner">
                                            <a href="member-detail.html"><header>Claire Doe</header></a>
                                            <figure>Marketing Specialist</figure>
                                            <p>
                                                Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor.
                                                Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet.
                                            </p>
                                        </div>
                                    </article>
                                </div><!-- /.author -->
                                <div class="author-block">
                                    <a href="member-detail.html"><figure class="author-picture"><img src="{{ asset('front/assets/img/discussion-author-02.jpg') }}" alt=""></figure></a>
                                    <article class="paragraph-wrapper">
                                        <div class="inner">
                                            <a href="member-detail.html"><header>Rachel Britain</header></a>
                                            <figure>Data Architect</figure>
                                            <p>
                                                Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor.
                                                Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet.
                                            </p>
                                        </div>
                                    </article>
                                </div><!-- /.author -->
                                <div class="author-block">
                                    <a href="member-detail.html"><figure class="author-picture"><img src="{{ asset('front/assets/img/discussion-author-03.jpg') }}" alt=""></figure></a>
                                    <article class="paragraph-wrapper">
                                        <div class="inner">
                                            <a href="member-detail.html"><header>John Doe</header></a>
                                            <figure>Senior Designer</figure>
                                            <p>
                                                Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor.
                                                Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet.
                                            </p>
                                        </div>
                                    </article>
                                </div><!-- /.author -->
                            </section><!-- /#course-speakers -->

                            <section id="course-gallery">
                                <header><h2>Gallery</h2></header>
                                <ul class="gallery-list">
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="{{ asset('front/assets/img/image-01.jpg') }}" alt=""></a></li>
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="{{ asset('front/assets/img/image-02.jpg') }}" alt=""></a></li>
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="{{ asset('front/assets/img/image-03.jpg') }}" alt=""></a></li>
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="{{ asset('front/assets/img/image-04.jpg') }}" alt=""></a></li>
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="{{ asset('front/assets/img/image-05.jpg') }}" alt=""></a></li>
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="{{ asset('front/assets/img/image-06.jpg') }}" alt=""></a></li>
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="{{ asset('front/assets/img/image-07.jpg') }}" alt=""></a></li>
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="{{ asset('front/assets/img/image-08.jpg') }}" alt=""></a></li>
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="{{ asset('front/assets/img/image-09.jpg') }}" alt=""></a></li>
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="{{ asset('front/assets/img/image-10.jpg') }}" alt=""></a></li>
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="{{ asset('front/assets/img/image-11.jpg') }}" alt=""></a></li>
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="{{ asset('front/assets/img/image-12.jpg') }}" alt=""></a></li>
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="{{ asset('front/assets/img/image-13.jpg') }}" alt=""></a></li>
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="{{ asset('front/assets/img/image-14.jpg') }}" alt=""></a></li>
                                </ul>
                            </section><!-- /#course-gallery -->

                            <section id="sponsors">
                                <header><h2>Sponsors</h2></header>
                                <div class="section-content">
                                    <div class="logos">
                                        <div class="logo"><a href=""><img src="{{ asset('front/assets/img/logo-partner-01.png') }}" alt=""></a></div>
                                        <div class="logo"><a href=""><img src="{{ asset('front/assets/img/logo-partner-02.png') }}" alt=""></a></div>
                                        <div class="logo"><a href=""><img src="{{ asset('front/assets/img/logo-partner-03.png') }}" alt=""></a></div>
                                        <div class="logo"><a href=""><img src="{{ asset('front/assets/img/logo-partner-04.png') }}" alt=""></a></div>
                                    </div>
                                </div>
                            </section><!-- /#sponsors -->

                            <section id="map">
                                <header><h2>Place on Map</h2></header>
                                <div class="map-wrapper">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.389928525137!2d-0.11316612883517647!3d51.52440760342934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b48959f07e1%3A0xb6b70e6a76950525!2s5+Phoenix+Pl!5e0!3m2!1ssk!2s!4v1395674632609" width="100%" height="350" frameborder="0" style="border:0"></iframe>
                                </div>
                            </section><!-- /#map -->
                        </article><!-- /.course-detail -->
                    </section><!-- /.course-detail -->
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->

            <!--SIDEBAR Content-->
            <div class="col-md-4">
                <div id="page-sidebar" class="sidebar">
                    <aside class="news-small" id="news-small">
                        <header>
                            <h2>News</h2>
                        </header>
                        <div class="section-content">
                            @forelse (newsActive() as $row)
                            <article>
                                <figure class="date"><i class="fa fa-file-o"></i>{{ $row->created_at->format('Y-m-d') }}
                                </figure>
                                <header><a href="#">{{ $row->name }}</a></header>

                                <body>{{ $row->notes }}</body>
                            </article>


                            @empty

                            @endforelse
                        </div>
                        <!-- /.section-content -->
                        <a href="" class="read-more">All News</a>
                    </aside><!-- /.news-small -->
                    <aside id="archive">
                        <header>
                            <h2>Course Archive</h2>
                            <ul class="list-links">
                                @forelse (courseActive() as $row)
                                    <li><a href="{{ route('courses_detail') }}">{{ $row->name }}</a></li>

                                    @empty

                                    @endforelse
                            </ul>
                        </header>
                    </aside><!-- /archive -->
                </div><!-- /#sidebar -->
            </div><!-- /.col-md-4 -->
            <!-- end SIDEBAR Content-->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->
@endsection