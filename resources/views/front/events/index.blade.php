@extends('front.layouts.master')
@section('title')
الاحداث
@endsection
@section('content')
<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Library</a></li>
        <li class="active">Data</li>
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
                    <section class="events images" id="events">
                        <header>
                            <h1>Events</h1>
                        </header>
                        <div class="section-content">

                            @forelse (alleventsActive() as $row)
                            <article class="event">
                                <div class="event-thumbnail">
                                    <figure class="event-image">
                                        <div class="image-wrapper"><img width="165" height="165"
                                                src="{{ asset($row->image) }}"></div>
                                    </figure>
                                    <figure class="date">
                                        <div class="month">{{ $row->created_at->format('M') }}</div>
                                        <div class="day">{{ $row->created_at->format('d') }}</div>
                                    </figure>
                                </div>
                                <aside>
                                    <header>
                                        <a href="#">{{ $row->name }}</a>
                                    </header>
                                    <div class="additional-info"><span class="fa fa-map-marker"></span>
                                        Matthaei
                                        Botanical Gardens
                                    </div>
                                    <div class="description">
                                        <p>
                                            {!! Str::limit( $row->notes, 50, ' ...') !!}
                                        </p>
                                    </div>
                                    <a href="#" class="{{ route('event_detail') }}">View Details</a>
                                </aside>
                            </article>

                            @empty

                            @endforelse



                        </div><!-- /.section-content -->
                    </section><!-- /.events-images -->
                    <!-- /.center -->
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
                            <h2></h2>
                        </header>
                        <div class="section-content">
                            <div class="professors">
                                @forelse (ProfessorActive() as $row)
                                <article class="professor-thumbnail">
                                    <figure class="professor-image"><a href="member-detail.html"><img
                                                src="{{ asset($row->image) }}" width="50" height="50" alt=""></a>
                                    </figure>
                                    <aside>
                                        <header>
                                            <a href="member-detail.html">{{ $row->name }}</a>
                                            <div class="divider"></div>
                                            <figure class="professor-description">
                                                {!! Str::limit( $row->notes, 100, ' ...') !!}
                                            </figure>
                                        </header>
                                        <a href="member-detail.html" class="show-profile">Show Profile</a>
                                    </aside>
                                </article>
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