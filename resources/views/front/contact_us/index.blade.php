@extends('front.layouts.master')
@section('title')
  اتصل بنا
@endsection
@section('style')
    
@endsection
@section('content')
<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Contact Us</li>
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
                    <section id="contact">
                        <header><h1>Contact Us</h1></header>
                        <div class="row">
                            <div class="col-md-6">
                                <address>
                                    <h3> {{ settingSite()->name}}</h3>
                                    <br>
                                   
                                    <span>{{ settingSite()->address}}</span>
                                    <br>
                                    <abbr title="Telephone">Telephone:</abbr>  {{ settingSite()->phone}}
                                    <br>
                                </address>
                                <div class="icons">
                                    <a href="{{ settingSite()->twitter }}"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="{{ settingSite()->facebook }}"><i class="fa-brands fa-facebook"></i></a>
                             
                                </div><!-- /.icons -->
                                <hr>
                                <p>

                                    {!! Str::limit( settingSite()->notes, 200, ' ...') !!}
                                </p>
                            </div>
                            <div class="col-md-6">
                                <div class="map-wrapper">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.389928525137!2d-0.11316612883517647!3d51.52440760342934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b48959f07e1%3A0xb6b70e6a76950525!2s5+Phoenix+Pl!5e0!3m2!1ssk!2s!4v1395674632609" width="100%" height="350" frameborder="0" style="border:0"></iframe>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="contact-form" class="clearfix">
                        <header><h2>Send Us a Message</h2></header>
                        <form class="contact-form" id="contactform" method="post" action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="controls">
                                            <label for="name">Your Name</label>
                                            <input type="text" name="name" id="name" required>
                                        </div><!-- /.controls -->
                                    </div><!-- /.control-group -->
                                </div><!-- /.col-md-4 -->
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="controls">
                                            <label for="email">Your Email</label>
                                            <input type="email" name="email" id="email" required>
                                        </div><!-- /.controls -->
                                    </div><!-- /.control-group -->
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="controls">
                                            <label for="message">Your Message</label>
                                            <textarea name="message" id="message" required></textarea>
                                        </div><!-- /.controls -->
                                    </div><!-- /.control-group -->
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row -->
                            <div class="pull-right">
                                <input type="submit" class="btn btn-color-primary" id="submit" value="Send a Message">
                            </div><!-- /.form-actions -->
                            <div id="form-status"></div>
                        </form><!-- /.footer-form -->
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
                </div><!-- /#sidebar -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->

@endsection