@extends('front.layouts.master')
@section('title')
تفاصيل الكورس
@endsection
@section('style')

@endsection
@section('content')

<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Courses</a></li>
        <li class="active">Detail v1</li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <header>
            <h1>{{ $data->name }}</h1>
        </header>
        <div class="row">
            <!-- Course Image -->
            <div class="col-md-2">
                @if ($data->image)
                <figure class="course-image">
                    <div class="image-wrapper"><img src="{{ asset($data->image) }}"></div>
                </figure>
                @else

                <figure class="course-image">
                    <div class="image-wrapper"><img src="{{ asset('front/assets/img/course-detail-img.jpg') }}"></div>
                </figure>

                @endif

            </div><!-- end Course Image -->
            <!--MAIN Content-->
            <div class="col-md-6">
                <div id="page-main">
                    <section id="course-detail">
                        <article class="course-detail">
                            <section id="course-header">
                                <header>
                                    <h2 class="course-date">{{ $data->created_at->format('M') }} {{
                                        $data->created_at->format('d') }} {{ $data->created_at->format('Y') }}</h2>
                                    <div class="course-category">Category:<a href="#">{{ $data->category->name }}</a>
                                    </div>
                                </header>
                                <hr>
                                <div class="course-count-down" id="course-count-down">
                                    <figure class="course-start">Course starts in:</figure>
                                    <!-- /.course-start -->
                                    <div class="count-down-wrapper">
                                        <script type="text/javascript">
                                            var _date = 'Mar 27, 2015 23:28';
                                        </script>
                                    </div><!-- /.count-down-wrapper -->
                                    @auth('customer')

                                    @if(App\Models\SubcripeCorses::where('course_id',$data->id)->where('customer_id',auth('customer')->user()->id)->first())
                                    @else
                                    <a href="#" data-toggle="modal" data-target="#exampleModal{{ $data->id }}"
                                        class="btn" id="btn-course-join">Join Course</a>

                                    <div class="modal fade" id="exampleModal{{ $data->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">تاكيد الاشتراك في
                                                        الكورس</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('subsripeCousrse') }}" method="post"
                                                        autocomplete="off">
                                                        @csrf

                                                        <h5>{{ $data->name }}</h5>

                                                        <input type="hidden" name="course_id" value="{{ $data->id }}">
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">اغلاق</button>
                                                            <button type="submit" class="btn btn-primary">تاكيد
                                                                الاشتراك</button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    @endif


                                    @else

                                    <a href="{{ route('register_sign') }}" class="btn" id="btn-course-join">Login</a>

                                    @endauth
                                </div><!-- /.course-count-down -->
                                <hr>
                                <figure id="course-summary">
                                    <span class="course-summary" id="course-length"><i class="fa fa-calendar-o"></i>{{
                                        $data->serives_courses_count }} lesson</span>
                                    {{-- <span class="course-summary" id="course-time-amount"><i
                                            class="fa fa-folder-o"></i>4-6 hours of work / week</span> --}}
                                    {{-- <span class="course-summary" id="course-course-time"><i
                                            class="fa fa-clock-o"></i>6:00pm – 8:00pm</span> --}}
                                </figure><!-- /#course-summary -->
                            </section><!-- /#course-header -->

                            <section id="course-brief">
                                <header>
                                    <h2>Course Brief</h2>
                                </header>
                                <p>
                                    {{-- {!! $data->notes !!} --}}
                                    {!! Str::limit($data->notes, 50) !!}

                                </p>
                            </section><!-- /#course-brief -->

                            <section id="course-tabs">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs course-detail-tabs">
                                    <li class="active"><a href="#tab-schedule" data-toggle="tab">Schedule</a></li>
                                    {{-- <li><a href="#tab-video" data-toggle="tab">Video</a></li> --}}
                                    <li><a href="#tab-speakers" data-toggle="tab">Speakers</a></li>
                                    {{-- <li><a href="#tab-gallery" data-toggle="tab">Gallery</a></li> --}}
                                    <li><a href="#tab-faq" data-toggle="tab">FAQ</a></li>
                                    @auth('customer')
                                    @if(App\Models\SubcripeCorses::where('course_id',$data->id)->where('customer_id',auth('customer')->user()->id)->first())
                                    <li><a href="#tab-exam" data-toggle="tab">Exam</a></li>

                                    @endif
                                    @endauth
                                </ul><!-- /.course-detail-tabs -->

                                <!-- Tab panes -->
                                <div class="tab-content course-tab-content">
                                    <div class="tab-pane fade in active" id="tab-schedule">
                                        <section class="course-schedule">
                                            @foreach ($data->serivesCourses as $serivesCourses )
                                            <article class="course-schedule-block">
                                                <header>
                                                    <h4> {{ $serivesCourses->name }}:</h4>
                                                </header>
                                                <ul class="schedule-list">
                                                    <li>
                                                        <h5>{{ $serivesCourses->name }}:</h5>

                                                        <div class="details-accordion" data-toggle="collapse"
                                                            data-target="#detail-1{{ $serivesCourses->id }}">
                                                            Details<span class="fa fa-plus-square-o"></span></div>
                                                        <!-- /#detail-1 -->
                                                        <div id="detail-1{{ $serivesCourses->id }}"
                                                            class="collapse details-accordion-content">
                                                            <div class="inner">
                                                                {{-- <div class="time"><strong>Time to
                                                                        complete:</strong> 2,5 hours</div> --}}
                                                                <p>
                                                                    {!! Str::limit($serivesCourses->notes, 50) !!}
                                                                </p>
                                                                <hr>
                                                                @auth('customer')
                                                                @if(App\Models\SubcripeCorses::where('course_id',$data->id)->where('customer_id',auth('customer')->user()->id)->first())
                                                                <strong>Video Preview</strong>
                                                                {{-- <iframe src="{{ $data->url }}" width="500"
                                                                    height="281" frameborder="0" webkitallowfullscreen
                                                                    mozallowfullscreen allowfullscreen></iframe> --}}
                                                                @else
                                                                <strong>subscription courses</strong>
                                                                @endif

                                                                @else
                                                                <a href="{{ route('register_sign') }}">Login</strong>

                                                                    @endauth



                                                            </div><!-- /.inner -->
                                                        </div><!-- /.details-accordion-content -->

                                                        <p class="description">
                                                            {!! Str::limit($serivesCourses->notes, 50) !!}

                                                        </p>
                                                    </li>

                                                </ul>
                                            </article>
                                            @endforeach




                                        </section><!-- /#tab-schedule -->
                                    </div>
                                    {{-- <div class="tab-pane fade" id="tab-video"><iframe
                                            src="//player.vimeo.com/video/64373696" width="500" height="281"
                                            frameborder="0" webkitallowfullscreen mozallowfullscreen
                                            allowfullscreen></iframe></div> --}}
                                    <div class="tab-pane fade" id="tab-speakers">
                                        <section id="course-speakers">
                                            @foreach ($data->numbers as $number)
                                            <div class="author-block course-speaker">
                                              
                                                <article class="paragraph-wrapper">
                                                    <div class="inner">
                                                        <a href="member-detail.html">
                                                            <header>{{ $number->name }}</header>
                                                        </a>
                                                    
                                                        <p>
                                                            {!! Str::limit($number->notes, 50) !!}
                                                        </p>
                                                    </div>
                                                </article>
                                            </div>
                                            @endforeach
                                       
                                            
                                            <!-- /.author -->
                                            
                                        </section><!-- /#course-speakers -->
                                    </div>
                                    {{-- <div class="tab-pane fade" id="tab-gallery">
                                        <ul class="gallery-list">
                                            <li><a href="{{ asset('front/assets/img/gallery-big-image.jpg') }}"
                                                    class="image-popup"><img src="assets/img/image-01.jpg" alt=""></a>
                                            </li>
                                            <li><a href="{{ asset('front/assets/img/gallery-big-image.jpg') }}"
                                                    class="image-popup"><img src="assets/img/image-02.jpg" alt=""></a>
                                            </li>
                                            <li><a href="{{ asset('front/assets/img/gallery-big-image.jpg') }}"
                                                    class="image-popup"><img src="assets/img/image-03.jpg" alt=""></a>
                                            </li>
                                            <li><a href="{{ asset('front/assets/img/gallery-big-image.jpg') }}"
                                                    class="image-popup"><img src="assets/img/image-04.jpg" alt=""></a>
                                            </li>
                                            <li><a href="{{ asset('front/assets/img/gallery-big-image.jpg') }}"
                                                    class="image-popup"><img src="assets/img/image-05.jpg" alt=""></a>
                                            </li>
                                            <li><a href="{{ asset('front/assets/img/gallery-big-image.jpg') }}"
                                                    class="image-popup"><img src="assets/img/image-06.jpg" alt=""></a>
                                            </li>
                                            <li><a href="{{ asset('front/assets/img/gallery-big-image.jpg') }}"
                                                    class="image-popup"><img src="assets/img/image-07.jpg" alt=""></a>
                                            </li>
                                            <li><a href="{{ asset('front/assets/img/gallery-big-image.jpg') }}"
                                                    class="image-popup"><img src="assets/img/image-08.jpg" alt=""></a>
                                            </li>
                                            <li><a href="{{ asset('front/assets/img/gallery-big-image.jpg') }}"
                                                    class="image-popup"><img src="assets/img/image-09.jpg" alt=""></a>
                                            </li>
                                            <li><a href="{{ asset('front/assets/img/gallery-big-image.jpg') }}"
                                                    class="image-popup"><img src="assets/img/image-10.jpg" alt=""></a>
                                            </li>
                                            <li><a href="{{ asset('front/assets/img/gallery-big-image.jpg') }}"
                                                    class="image-popup"><img src="assets/img/image-11.jpg" alt=""></a>
                                            </li>
                                            <li><a href="{{ asset('front/assets/img/gallery-big-image.jpg') }}"
                                                    class="image-popup"><img src="assets/img/image-12.jpg" alt=""></a>
                                            </li>
                                            <li><a href="{{ asset('front/assets/img/gallery-big-image.jpg') }}"
                                                    class="image-popup"><img src="assets/img/image-13.jpg" alt=""></a>
                                            </li>
                                            <li><a href="{{ asset('front/assets/img/gallery-big-image.jpg') }}"
                                                    class="image-popup"><img src="assets/img/image-14.jpg" alt=""></a>
                                            </li>
                                        </ul>
                                    </div> --}}
                                    <div class="tab-pane fade" id="tab-faq">
                                        <ul class="faq-list">
                                            <!-- Question -->
                                            @foreach ($data->previousWork as $previousWork )
                                            <li>
                                                <h5>
                                                    {{ $previousWork->name }}
                                                </h5>
                                                <p class="description">
                                                    {!! Str::limit($previousWork->notes, 50) !!}
                                                </p>
                                            </li>
                                            @endforeach

                                            <!-- end Question -->
                                            <!-- Question -->

                                            <!-- end Question -->
                                        </ul><!-- /.faq-list -->
                                    </div>



                                    <div class="tab-pane fade" id="tab-exam">
                                        <ul class="faq-list">
                                            <!-- Question -->
                                            <form action="{{ route('sendQuesCustomers') }}" method="post">
                                                @csrf
                                                @foreach ($data->exams as $exam )
                                                <li>
                                                    <h5>
                                                        {{ $exam->name }}
                                                    </h5>

                                                    <form action="{{ route('sendQuesCustomers') }}" method="post">
                                                        @csrf

                                                        <input type="hidden" value="{{ $data->id }}" name="course_id">

                                                        <input type="hidden" name="exam_id[]" value="{{ $exam->id }}">

                                                        @auth('customer')
                                                        @if ($information = App\Models\sendQuesCustomer::where('course_id',$data->id)->where('customer_id',auth('customer')->user()->id)->where('exam_id',$exam->id)->first())

                                                        <input type="text" class="form-control mt-5" readonly
                                                            value="{{ $information->text }}">
                                                        @else
                                                        <input type="text" class="form-control mt-5" required
                                                            name="exam[]">
                                                        @endif
                                                        @endauth

                                                        <br>



                                                </li>
                                                @endforeach
                                                @auth('customer')
                                                @if (!(App\Models\sendQuesCustomer::where('course_id',$data->id)->where('customer_id',auth('customer')->user()->id)->first()))
                                                <button class="btn btn-success btn-sm mt-1">submit</button>
                                                @endif
                                                @endauth
                                           

                                            </form>

                                            <!-- end Question -->
                                            <!-- Question -->

                                            <!-- end Question -->
                                        </ul><!-- /.faq-list -->
                                    </div>

                                    <!-- /#tab-faq -->
                                </div><!-- /Tab panes -->
                            </section><!-- /#course-tabs -->

                            {{-- <section id="course-info">
                                <header>
                                    <h2>Course Info</h2>
                                </header>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et urna
                                    fringilla, volutpat elit non,
                                    tristique lectus. Nam blandit odio nisl, ac malesuada lacus fermentum sit amet.
                                    Vestibulum vitae
                                    aliquet felis, ornare feugiat elit. Nulla varius condimentum elit, sed pulvinar leo
                                    sollicitudin vel.
                                </p>
                                <p>
                                    Maecenas sodales, nisl eget dignissim molestie, ligula est consectetur metus, et
                                    mollis justo urna
                                    sit amet nulla. Etiam lectus arcu, pellentesque eu tellus tempor, tristique ultrices
                                    leo. Nullam at
                                    felis mauris. Aenean in neque eu ligula tempor ornare. Mauris tristique in elit a
                                    blandit. Nam laoreet
                                    vulputate nisi eu accumsan. Sed faucibus arcu nec est facilisis dignissim. Fusce
                                    risus leo, euismod ut
                                    cursus vitae, imperdiet id quam. Pellentesque habitant morbi tristique senectus et
                                    netus et malesuada
                                    fames ac turpis egestas. Fusce mollis mi vulputate leo vestibulum, quis scelerisque
                                    libero condimentum.
                                    Praesent rutrum consequat lacus quis suscipit. Proin dapibus mi non semper lobortis.
                                </p>
                                <p>
                                    Ut dignissim placerat est, sit amet tincidunt enim. Sed nisi nisi, ornare vitae
                                    lacinia a, mattis quis tortor.
                                    Suspendisse ornare adipiscing nunc, sit amet aliquam diam condimentum quis. Sed in
                                    leo sit amet sapien
                                    porttitor vestibulum a ut est. In hac habitasse platea dictumst. Mauris quam dui,
                                    cursus nec lorem non,
                                    pellentesque elementum dui. Vestibulum volutpat, risus vitae scelerisque fringilla,
                                    ligula nisi egestas
                                    sem, id vulputate ligula nulla ac ligula.
                                </p>
                            </section><!-- /#course-info --> --}}

                            {{-- <section id="presentation">
                                <header>
                                    <h2>Short Presentation</h2>
                                </header>
                                <div class="presentation" style="width: 100%">
                                    <a class="pdf-object" href="{{ asset('front/assets/pdf/presentation.pdf') }}"
                                        style="width: 100%">Course Presentation</a>
                                </div>
                            </section> --}}

                            {{-- <section id="learning-material">
                                <header>
                                    <h2>Learning Material</h2>
                                </header>
                                <article class="learning-material">
                                    <figure class="learning-material-picture"><img
                                            src="{{ asset('front/assets/img/book-01.jpg') }}" alt=""></figure>
                                    <div class="learning-material-description">
                                        <h4>1000 Chairs</h4>
                                        <figure>Charlotte & Peter Fiell</figure>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu lacus
                                            ut ipsum laoreet laoreet.
                                            Nam sollicitudin porta ornare.
                                        </p>
                                    </div>
                                </article><!-- /.learning-material -->
                                <article class="learning-material">
                                    <figure class="learning-material-picture"><img
                                            src="{{ asset('front/assets/img/book-02.jpg') }}" alt=""></figure>
                                    <div class="learning-material-description">
                                        <h4>The App & Mobile Case Study Book</h4>
                                        <figure>Rob Ford, Julius Wiedemann</figure>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu lacus
                                            ut ipsum laoreet laoreet.
                                            Nam sollicitudin porta ornare.
                                        </p>
                                    </div>
                                </article><!-- /.learning-material -->
                            </section><!-- /#learning-material --> --}}

                            {{-- <section id="invited-persons">
                                <header>
                                    <h2>Invited Persons</h2>
                                </header>
                                <div class="author-block">
                                    <a href="member-detail.html">
                                        <figure class="author-picture"><img
                                                src="{{ asset('front/assets/img/student-testimonial.jpg') }}" alt="">
                                        </figure>
                                    </a>
                                    <article class="paragraph-wrapper">
                                        <div class="inner">
                                            <a href="member-detail.html">
                                                <header>Claire Doe</header>
                                            </a>
                                            <figure>Marketing Specialist</figure>
                                            <p>
                                                Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum
                                                semper quam. Fusce in interdum tortor.
                                                Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet.
                                            </p>
                                        </div>
                                    </article>
                                </div><!-- /.author -->
                                <div class="author-block">
                                    <a href="member-detail.html">
                                        <figure class="author-picture"><img
                                                src="{{ asset('front/assets/img/discussion-author-02.jpg') }}" alt="">
                                        </figure>
                                    </a>
                                    <article class="paragraph-wrapper">
                                        <div class="inner">
                                            <a href="member-detail.html">
                                                <header>Rachel Britain</header>
                                            </a>
                                            <figure>Data Architect</figure>
                                            <p>
                                                Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum
                                                semper quam. Fusce in interdum tortor.
                                                Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet.
                                            </p>
                                        </div>
                                    </article>
                                </div><!-- /.author -->
                            </section><!-- /#invited-persons -->

                            <section id="sponsors">
                                <header>
                                    <h2>Sponsors</h2>
                                </header>
                                <div class="section-content">
                                    <div class="logos">
                                        <div class="logo"><a href=""><img
                                                    src="{{ asset('front/assets/img/logo-partner-01.png') }}"
                                                    alt=""></a></div>
                                        <div class="logo"><a href=""><img
                                                    src="{{ asset('front/assets/img/logo-partner-02.png') }}"
                                                    alt=""></a></div>
                                        <div class="logo"><a href=""><img
                                                    src="{{ asset('front/assets/img/logo-partner-03.png') }}"
                                                    alt=""></a></div>
                                        <div class="logo"><a href=""><img
                                                    src="{{ asset('front/assets/img/logo-partner-04.png') }}"
                                                    alt=""></a></div>
                                    </div>
                                </div>
                            </section><!-- /#sponsors -->

                            <section id="map">
                                <header>
                                    <h2>Place on Map</h2>
                                </header>
                                <div class="map-wrapper">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.389928525137!2d-0.11316612883517647!3d51.52440760342934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b48959f07e1%3A0xb6b70e6a76950525!2s5+Phoenix+Pl!5e0!3m2!1ssk!2s!4v1395674632609"
                                        width="100%" height="350" frameborder="0" style="border:0"></iframe>
                                </div>
                            </section><!-- /#map --> --}}

                            <section id="join-to-course" class="center">
                                @auth('customer')

                                @if(App\Models\SubcripeCorses::where('course_id',$data->id)->where('customer_id',auth('customer')->user()->id)->first())
                                @else
                                <a href="register-sign-in.html" class="btn" id="btn-course-join">Join Course</a>
                                @endif


                                @else

                                <a href="{{ route('register_sign') }}" class="btn" id="btn-course-join">Login</a>

                                @endauth
                                {{-- <a href="register-sign-in.html" class="btn">Join Course</a> --}}
                            </section><!-- /#join-to-course -->

                            <hr>

                            {{-- <section id="rating">
                                <header>
                                    <h2>Rate a Course</h2>
                                </header>
                                <div class="center">
                                    <div class="rating-user">
                                        <div class="inner"></div>
                                        <div id="hint"></div>
                                    </div>
                                </div>
                            </section>

                            <section id="comments">
                                <header>
                                    <h2>Comments</h2>
                                </header>
                                <ul class="discussion-list">
                                    <li class="author-block">
                                        <figure class="author-picture"><img
                                                src="{{ asset('front/assets/img/student-testimonial.jpg') }}"></figure>
                                        <article class="paragraph-wrapper">
                                            <div class="inner">
                                                <header>
                                                    <h5>Rachel Britain</h5>
                                                </header>
                                                <div class="rating-individual" data-score="5"></div>
                                                <p>
                                                    Mauris elementum et libero ac pharetra. Proin tristique dapibus
                                                    tellus,
                                                    lacinia blandit mi tincidunt at. Vivamus vitae interdum felis.
                                                    Pellentesque congue mollis erat in imperdiet.
                                                </p>
                                            </div>
                                            <div class="comment-controls">
                                                <span>08-24-2014</span>
                                                <a href="#leave-reply">Reply</a>
                                            </div>
                                        </article>
                                    </li><!-- /parent item -->
                                    <li>
                                        <ul class="discussion-child">
                                            <li class="author-block">
                                                <figure class="author-picture"><img
                                                        src="{{ asset('front/assets/img/discussion-author-03.jpg') }}">
                                                </figure>
                                                <article class="paragraph-wrapper">
                                                    <div class="inner">
                                                        <header>
                                                            <h5>John Doe</h5>
                                                        </header>
                                                        <div class="rating-individual" data-score="4"></div>
                                                        <p>
                                                            Mauris elementum et libero ac pharetra. Proin tristique
                                                            dapibus tellus,
                                                            lacinia blandit mi tincidunt at. Vivamus vitae interdum
                                                            felis.
                                                            Pellentesque congue mollis erat in imperdiet.
                                                        </p>
                                                    </div>
                                                    <div class="comment-controls">
                                                        <span>08-24-2014</span>
                                                        <a href="#leave-reply">Reply</a>
                                                    </div>
                                                </article>
                                            </li>
                                            <li>
                                                <ul class="discussion-child">
                                                    <li class="author-block">
                                                        <figure class="author-picture"><img
                                                                src="{{ asset('front/assets/img/student-testimonial.jpg') }}">
                                                        </figure>
                                                        <article class="paragraph-wrapper">
                                                            <div class="inner">
                                                                <header>
                                                                    <h5>Rachel Britain</h5>
                                                                </header>
                                                                <div class="rating-individual" data-score="4"></div>
                                                                <p>
                                                                    Mauris elementum et libero ac pharetra. Proin
                                                                    tristique dapibus tellus,
                                                                    lacinia blandit mi tincidunt at. Vivamus vitae
                                                                    interdum felis.
                                                                    Pellentesque congue mollis erat in imperdiet.
                                                                </p>
                                                            </div>
                                                            <div class="comment-controls">
                                                                <span>08-24-2014</span>
                                                                <a href="#leave-reply">Reply</a>
                                                            </div>
                                                        </article>
                                                    </li>
                                                </ul><!-- /.discussion-child -->
                                            </li><!-- /parent item -->
                                        </ul><!-- /.discussion-child -->
                                    </li><!-- /parent item -->
                                    <li class="author-block">
                                        <figure class="author-picture"><img
                                                src="{{ asset('front/assets/img/discussion-author-02.jpg') }}"></figure>
                                        <article class="paragraph-wrapper">
                                            <div class="inner">
                                                <header>
                                                    <h5>Jane Mason</h5>
                                                </header>
                                                <div class="rating-individual" data-score="5"></div>
                                                <p>
                                                    Mauris elementum et libero ac pharetra. Proin tristique dapibus
                                                    tellus,
                                                    lacinia blandit mi tincidunt at. Vivamus vitae interdum felis.
                                                    Pellentesque congue mollis erat in imperdiet.
                                                </p>
                                            </div>
                                            <div class="comment-controls">
                                                <span>08-24-2014</span>
                                                <a href="#leave-reply">Reply</a>
                                            </div>
                                        </article>
                                    </li><!-- /parent item -->
                                </ul><!-- /.discussion-list -->
                            </section><!-- /.comments --> --}}

                            {{-- <section id="leave-reply">
                                <header>
                                    <h2>Leave a Reply</h2>
                                </header>
                                <form class="reply-form" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <div class="controls">
                                                    <label for="name">Your Name</label>
                                                    <input type="text" id="name" name="name" required="required">
                                                </div><!-- /.controls -->
                                            </div><!-- /.control-group -->
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <div class="controls">
                                                    <label for="email">Your Email</label>
                                                    <input type="email" id="email" name="email" required="required">
                                                </div><!-- /.controls -->
                                            </div><!-- /.control-group -->
                                        </div><!-- /.col-md-4 -->
                                    </div><!-- /.row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="controls">
                                                    <label for="message">Your Message</label>
                                                    <textarea name="message" id="message"
                                                        required="required"></textarea>
                                                </div><!-- /.controls -->
                                            </div><!-- /.control-group -->
                                        </div><!-- /.col-md-4 -->
                                    </div><!-- /.row -->
                                    <div class="form-actions pull-right">
                                        <input type="submit" class="btn btn-color-primary" value="Reply">
                                    </div><!-- /.form-actions -->
                                </form><!-- /.reply-form -->
                            </section> --}}

                        </article><!-- /.course-detail -->
                    </section><!-- /.course-detail -->
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->

            <!--SIDEBAR Content-->
            <div class="col-md-4">
                <div id="page-sidebar" class="sidebar">
                    <aside id="related-courses">
                        <header>
                            <h2> events</h2>
                        </header>
                        @forelse (eventsActive() as $row)
                        <article class="course-thumbnail small">
                            <figure class="image">
                                <div class="image-wrapper"><a href="course-detail-v1.html"><img width="165" height="165"
                                            src="{{ asset($row->image) }}"></a></div>
                            </figure>
                            <div class="description">
                                <a href="course-detail-v1.html">
                                    <h3>{{ $row->name }}</h3>
                                </a>
                                <a href="#" class="course-category">Photography</a>
                                <hr>
                                <div class="course-meta">
                                    <span class="course-date"><i class="fa fa-calendar-o"></i>01-03-2014</span>
                                    <span class="course-length"><i class="fa fa-clock-o"></i>3 months</span>
                                </div>
                                <div class=""><a href="course-detail-v1.html"
                                        class="btn btn-framed btn-color-grey btn-small">View Details</a></div>
                            </div>
                        </article>
                        @empty

                        @endforelse




                        <!-- /.course-thumbnail .small -->
                    </aside><!-- /#related-courses -->

                    {{-- <aside class="news-small" id="news-small">
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

                            <!-- /.section-content -->
                            <a href="" class="read-more">All News</a>
                    </aside><!-- /.news-small --> --}}
                    <aside id="archive">
                        <header>
                            <h2>Course</h2>
                            <ul class="list-links">
                                @forelse (courseActive() as $row)
                                <li><a href="{{ route('courses_detail',$row->id) }}">{{ $row->name }}</a></li>

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