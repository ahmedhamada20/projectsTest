@extends('front.layouts.master')
@section('title')
 الاعضاء
@endsection
@section('style')
    
@endsection
@section('content')
<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Members</li>
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
                        <header><h1>Members & Staff</h1></header>
                        <section id="our-speakers">
                            <header><h2 class="no-divider">Our Speakers</h2></header>
@forelse (AllProfessorActive() as $row)
<div class="author-block course-speaker">
    <a href="{{ route('members_detail') }}"><figure class="author-picture"><img src="{{ asset($row->image) }}" width="100" height="100" alt=""></figure></a>
    <article class="paragraph-wrapper">
        <div class="inner">
            <header><a href="{{ route('members_detail') }}">{{ $row->name }}</a></header>
            
            <p>
                {!! Str::limit( $row->notes, 200, ' ...') !!}
            
            </p>
            <a href="{{ route('members_detail') }}" class="btn btn-framed btn-small btn-color-grey">Full Bio</a>
        </div>
    </article>
</div><!-- /.author --> 
@empty
    
@endforelse

                          
                           
                            
                            <!-- /.author -->
                        </section><!-- /#our-speakers -->

                      
                        <!-- /#our-staff -->
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

                                    {!! Str::limit( settingSite()->notes, 200, ' ...') !!}
                                </p>
                            </div><!-- /.section-content -->
                        </header>
                    </aside><!-- /.newsletter -->
                    <aside id="our-professors">
                        <header>
                            <h2>Professors</h2>
                        </header>
                        <div class="section-content">
                            <div class="professors">
                                @forelse (previousWorkActive() as $row)
                                <div class="author">
                                    <blockquote>
                                        <figure class="author-picture"><img src="{{ asset($row->image) }}" width="100" height="100"
                                                alt="">
                                        </figure>
                                        <article class="paragraph-wrapper">
                                            <div class="inner">
                                                <header>
                                                    {!! Str::limit( $row->notes, 50, ' ...') !!}
                                                </header>
                                                <footer>{{ $row->name }}</footer>
                                            </div>
                                        </article>
                                    </blockquote>
                                </div>
                                @empty
            
                                @endforelse
                                <!-- /.professor-thumbnail -->
                                <a href="" class="read-more">All Professors</a>
                            </div><!-- /.professors -->
                        </div><!-- /.section-content -->
                    </aside><!-- /.our-professors -->
                </div><!-- /#sidebar -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->
@endsection