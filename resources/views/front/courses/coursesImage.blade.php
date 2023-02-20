@extends('front.layouts.master')
@section('title')
   الكورسات
@endsection
@section('style')
    
@endsection
@section('content')

<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Courses</li>
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
                    <section class="course-listing" id="courses">
                        <header><h1>Courses</h1></header>
                        <div class="row">
                    
                            @forelse (AllcourseActive() as $row)
                            <div class="col-md-4 col-sm-4">
                                <article class="course-thumbnail">
                                    @if ($row->image)
                                    <figure class="image">
                                        <div class="image-wrapper"><a href="{{ route('courses_detail',$row->id) }}"><img src="{{ asset($row->image) }}" width="50px" height="50px"></a></div>
                                    </figure>
                                    @endif
                                  
                                    <div class="description">
                                        <a href="{{ route('courses_detail',$row->id) }}"><h3>{{ $row->name }}</h3></a>

                                        <hr>
                                        <div class="course-meta">
                                            <span class="course-date"><i class="fa fa-calendar-o"></i>{{ $row->created_at->format('Y-m-d') }}</span>
                                            <span class="course-length"><i class="fa fa-clock-o"></i>{{ $row->created_at->format('m') }}</span>
                                        </div>
                                        <div class="stick-to-bottom"><a href="{{ route('courses_detail',$row->id) }}" class="btn btn-framed btn-color-grey btn-small">View Details</a></div>
                                    </div>
                                </article><!-- /.featured-course -->
                            </div>
                            
                    
                            @empty
                                
                            @endforelse
                           
                          
                    </section>


                    
                    
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
                            <!-- /article -->
                        </div><!-- /.section-content -->
                        <a href="" class="read-more">All News</a>
                    </aside><!-- /.news-small -->
                    <aside id="archive">
                        <header>
                            <h2>Course</h2>
                            <ul class="list-links">
                                @forelse (courseActive() as $row)
                            <li><a href="#">{{ $row->name }}</a></li>
                          
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