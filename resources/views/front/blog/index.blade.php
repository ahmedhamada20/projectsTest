@extends('front.layouts.master')
@section('title')
المدونات
@endsection
@section('style')

@endsection
@section('content')

<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Blog</li>
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
                    <section class="blog-listing" id="blog-listing">
                        <header>
                            <h1>Blog / News</h1>
                        </header>
                        <div class="row">

                            @forelse (blogActive() as $row)
                            <div class="col-md-6 col-sm-6">
                                <article class="blog-listing-post">
                                    <figure class="blog-thumbnail">
                                        <figure class="blog-meta"><span class="fa fa-file-text-o"></span>{{ $row->created_at->format('Y-m-d') }}
                                        </figure>
                                        <div class="image-wrapper"><a href="blog-detail.html"><img width="360" height="140"
                                                    src="{{ asset($row->image) }}"></a></div>
                                    </figure>
                                    <aside>
                                        <header>
                                            <a href="blog-detail.html">
                                                <h3>
                                                   {{ $row->name }}
                                                </h3>
                                            </a>
                                        </header>
                                        <div class="description">
                                            <p>
                                                {!! Str::limit( $row->notes, 200, ' ...') !!}
                                            </p>
                                        </div>
                                        <a href="blog-detail.html" class="read-more stick-to-bottom">Read More</a>
                                    </aside>
                                </article><!-- /article -->
                            </div>
                            @empty

                            @endforelse


                            <!-- /.col-md-6 -->
                        </div><!-- /.row -->

                    </section><!-- /.blog-listing -->
                  
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
                                    {!! Str::limit( settingSite()->notes, 200, ' ...') !!}
                                </p>
                            </div><!-- /.section-content -->
                        </header>
                    </aside><!-- /.newsletter -->
                    <aside id="archive">
                        <header>
                            <h2>courses</h2>
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
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->
@endsection