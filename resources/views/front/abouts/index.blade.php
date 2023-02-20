@extends('front.layouts.master')
@section('title')
  من نحن
@endsection
@section('style')
    
@endsection
@section('content')
<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">About Us</li>
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
                    <section id="about">
                        <header><h1>About Us</h1></header>
                        @forelse (aboutusActive() as $row)
                        <img src="{{ asset($row->image) }}" width="750" height="280">
                        <h2>{{ $row->name }}</h2>
                        <p>
                            {!! Str::limit( $row->notes, 200, ' ...') !!}
                        </p>
                        @empty
                            
                        @endforelse
                      
                      
                        <h2>Gallery</h2>
                        <div>
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
                        </div>
                        <h2>Research</h2>
                        <p>
                            Sed bibendum, tortor in ornare sodales, sem augue suscipit tortor, auctor placerat nisi justo vel mauris.
                            In convallis nunc nunc, in tincidunt leo volutpat et. Donec in consequat lorem.
                        </p>
                        <ul class="element-framed">
                            <li>Aenean volutpat aliquet diam, id venenatis nisi faucibus sit amet. In hac habitasse platea dictumst</li>
                            <li>Integer vel sem est. Nulla pharetra, justo vitae placerat dapibus, dui massa pellentesque magn</li>
                            <li>Sagittis magna lorem a massa. Integer convallis augue eu felis euismod, vel iaculis velit pretium</li>
                            <li>Nam et diam ut sem aliquet ultrices non eu ante</li>
                        </ul>
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
                        </div><!-- /.section-content -->
                        <a href="" class="read-more">News</a>
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