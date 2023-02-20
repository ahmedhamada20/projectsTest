@extends('front.layouts.master')
@section('title')
 تفاصيل الاعضاء
@endsection
@section('style')
    
@endsection
@section('content')

<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Members</a></li>
        <li class="active">Member Detail</li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div class="col-md-8">
                <div id="page-main">
                    <section id="members">
                        <header><h1>Member Detail</h1></header>
                        <div class="author-block member-detail">
                            <figure class="author-picture"><img src="{{ asset('front/assets/img/member-detail.jpg') }}" alt=""></figure>
                            <article class="paragraph-wrapper">
                                <div class="inner">
                                    <header><h2>Claire Doe</h2></header>
                                    <figure>Marketing Specialist</figure>
                                    <hr>
                                    <p class="quote">
                                        Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor.
                                    </p>
                                    <hr>
                                    <div class="contact">
                                        <strong>Contact Member</strong>
                                        <div class="icons">
                                            <a href="{{ settingSite()->twitter }}"><i class="fa-brands fa-twitter"></i></a>
                                            <a href="{{ settingSite()->facebook }}"><i class="fa-brands fa-facebook"></i></a>
                                        </div><!-- /.icons -->
                                    </div>
                                    <h3>Biography</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mauris orci, interdum in purus at,
                                        mollis dignissim augue. Praesent sit amet lacinia mauris, vitae placerat orci. Suspendisse pretium
                                        tincidunt volutpat. Nunc laoreet nulla et dictum mollis. Sed convallis elit justo, in vulputate
                                        augue condimentum a. Fusce sit amet malesuada erat. Fusce facilisis tristique nunc, non scelerisque
                                        lacus bibendum at. Sed tellus ligula, scelerisque eu arcu ac, adipiscing tincidunt risus. Fusce sed
                                        quam quis massa accumsan consectetur in vitae justo.
                                    </p>
                                    <p>
                                        Cras at elit vel ante cursus dapibus eu sit amet
                                        nibh. Maecenas egestas aliquam risus pulvinar tincidunt. Quisque nibh magna, malesuada id eros ut,
                                        commodo hendrerit sem. Maecenas iaculis mi eget eros sollicitudin pharetra. Integer mi nibh, pellentesque
                                        quis nibh sit amet, faucibus aliquet purus. Duis ultrices magna venenatis nibh sagittis, in suscipit nisl
                                        semper. Fusce egestas metus id vehicula aliquet.
                                    </p>
                                    <h3>Member's Courses</h3>
                                    <div class="table-responsive">
                                        <table class="table table-hover course-list-table tablesorter">
                                            <thead>
                                            <tr>
                                                <th>Course Name</th>
                                                <th class="starts">Starts</th>
                                                <th class="length">Length</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th class="course-title"><a href="course-detail-v1.html">Introduction to modo 701</a></th>
                                                <th>01-03-2014</th>
                                                <th>3 months</th>
                                            </tr>
                                            <tr>
                                                <th class="course-title"><a href="course-detail-v1.html">Become self marketer</a></th>
                                                <th>03-03-2014</th>
                                                <th>2 lessons</th>
                                            </tr>
                                            <tr>
                                                <th class="course-title"><a href="course-detail-v1.html">How to find long term customers</a></th>
                                                <th>06-03-2014</th>
                                                <th>1 month</th>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </article>
                        </div><!-- /.author -->
                    </section>
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->

            <!--SIDEBAR Content-->
            <div class="col-md-4">
                <div id="page-sidebar" class="sidebar">
                    <aside class="news-small" id="news-small">
                        <header>
                            <h2>Related News</h2>
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
                            <!-- /article -->
                        </div><!-- /.section-content -->
                        <a href="" class="read-more">All News</a>
                    </aside><!-- /.news-small -->
                    <aside id="newsletter">
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


                                    {!! Str::limit( settingSite()->notes, 200, ' ...') !!}                                </p>
                            </div><!-- /.section-content -->
                        </header>
                    </aside><!-- /.newsletter -->
                </div><!-- /#sidebar -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->

@endsection