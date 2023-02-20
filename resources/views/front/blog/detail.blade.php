@extends('front.layouts.master')
@section('title')
  تفاصيل المدونه
@endsection
@section('style')
    
@endsection
@section('content')
 
<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Blog Detail</li>
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
                    <section id="blog-detail">
                        <header><h1>Blog / News</h1></header>
                        <article class="blog-detail">
                            <header class="blog-detail-header">
                                <img src="{{ asset('front/assets/img/blog-detail-img.jpg') }}">
                                <h2>Morbi rutrum massa eget mi gravida, sit amet mollis magna gravida. Nam blandit odio nisl, ac malesuada</h2>
                                <div class="blog-detail-meta">
                                    <span class="date"><span class="fa fa-file-o"></span>08-24-2014</span>
                                    <span class="author"><span class="fa fa-user"></span>Prof. John Doe</span>
                                    <span class="comments"><span class="fa fa-comment-o"></span>6 comments</span>
                                </div>
                            </header>
                            <hr>
                            <h4>Aenean volutpat aliquet diam</h4>
                            <p>Venenatis nisi faucibus sit amet. In hac habitasse platea dictumst. Integer vel sem est.
                                Nulla pharetra, justo vitae placerat dapibus, dui massa pellentesque magna, a sagittis magna
                                lorem a massa. Integer convallis augue eu felis euismod vel iaculis velit pretium. Nam et diam
                                ut sem aliquet ultrices non eu ante.lectus. Nam blandit odio nisl, ac malesuada lacus fermentum
                                sit amet. Vestibulum vitae aliquet felis, ornare feugiat elit. Nulla varius condimentum elit,
                                sed pulvinar leo sollicitudin vel.
                            </p>
                            <p>
                                Morbi rutrum massa eget mi gravida, sit amet mollis magna gravida. Morbi sodales, ligula quis
                                ornare bibendum, magna erat convallis ipsum, id posuere ligula massa vitae leo. Morbi laoreet
                                dui ullamcorper massa pulvinar faucibus. Proin quis nisi viverra, laoreet enim sit amet, adipiscing tellus.
                            </p>
                            <p>
                                Curabitur libero diam, lacinia a eros a, molestie lobortis magna. Duis pulvinar mattis diam,
                                ac condimentum felis euismod eu. Proin libero felis, malesuada eget fringilla ut, dapibus ut
                                tellus. Nulla facilisi. Quisque hendrerit aliquet commodo. Nullam placerat commodo varius.
                                Morbi egestas iaculis bibendum. Donec mauris felis, consectetur pulvinar est eu, accumsan
                                auctor nunc. Pellentesque semper mi non est auctor, vel viverra risus dictum.
                                Nulla nec ligula vitae ipsum
                            </p>
                            <footer>
                                <section id="share-post">
                                    <div class="icons">
                                        <span>Share:</span>
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-pinterest"></i></a>
                                        <a href=""><i class="fa fa-youtube-play"></i></a>
                                    </div><!-- /.icons -->
                                </section><!-- /share -->
                                <hr>
                                <section id="tags">
                                    <a href="#" class="tag">Design</a>
                                    <a href="#" class="tag">Technology</a>
                                    <a href="#" class="tag">Science</a>
                                    <a href="#" class="tag">Art</a>
                                </section><!-- /tags -->
                                <section id="about-author" class="author-block">
                                    <figure class="author-picture"><img src="{{ asset('front/assets/img/student-testimonial.jpg') }}"></figure>
                                    <article class="paragraph-wrapper">
                                        <div class="inner">
                                            <header>Rachel Britain</header>
                                            <figure>Marketing Specialist</figure>
                                            <p>
                                                Mauris elementum et libero ac pharetra. Proin tristique dapibus tellus,
                                                lacinia blandit mi tincidunt at. Vivamus vitae interdum felis.
                                                Pellentesque congue mollis erat in imperdiet.
                                            </p>
                                        </div>
                                    </article>
                                </section><!-- /about-author -->
                                <section id="post-pager" class="clearfix">
                                    <span class="pull-left"><a href="#" class="link-icon"><span class="fa fa-arrow-circle-o-left"></span>Previous Post</a></span>
                                    <span class="pull-right"><a href="#" class="link-icon">Next Post<span class="fa fa-arrow-circle-o-right"></span></a></span>
                                </section><!-- /post-pager -->
                            </footer>
                        </article>
                    </section><!-- /.blog-detail -->

                    <hr>

                    <section id="related-articles">
                        <header><h2>Related Articles</h2></header>
                        <div class="row">

                              @forelse (blogcountActive() as $row)
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
                            
                       
                        </div><!-- /.row -->
                    </section><!-- /related articles -->

                    <hr>

                    <section id="discussion">
                        <header><h2>Discussion</h2></header>
                        <ul class="discussion-list">
                            <li class="author-block">
                                <figure class="author-picture"><img src="{{ asset('front/assets/img/student-testimonial.jpg') }}"></figure>
                                <article class="paragraph-wrapper">
                                    <div class="inner">
                                        <header><h5>Rachel Britain</h5></header>
                                        <p>
                                            Mauris elementum et libero ac pharetra. Proin tristique dapibus tellus,
                                            lacinia blandit mi tincidunt at. Vivamus vitae interdum felis.
                                            Pellentesque congue mollis erat in imperdiet.
                                        </p>
                                    </div>
                                    <div class="comment-controls">
                                        <span>08-24-2014</span>
                                        <a href="#">Reply</a>
                                    </div>
                                </article>
                            </li><!-- /parent item -->
                            <li>
                                <ul class="discussion-child">
                                    <li class="author-block">
                                        <figure class="author-picture"><img src="{{ asset('front/assets/img/discussion-author-03.jpg') }}"></figure>
                                        <article class="paragraph-wrapper">
                                            <div class="inner">
                                                <header><h5>John Doe</h5></header>
                                                <p>
                                                    Mauris elementum et libero ac pharetra. Proin tristique dapibus tellus,
                                                    lacinia blandit mi tincidunt at. Vivamus vitae interdum felis.
                                                    Pellentesque congue mollis erat in imperdiet.
                                                </p>
                                            </div>
                                            <div class="comment-controls">
                                                <span>08-24-2014</span>
                                                <a href="#">Reply</a>
                                            </div>
                                        </article>
                                    </li>
                                    <li>
                                        <ul class="discussion-child">
                                            <li class="author-block">
                                                <figure class="author-picture"><img src="{{ asset('front/assets/img/student-testimonial.jpg') }}"></figure>
                                                <article class="paragraph-wrapper">
                                                    <div class="inner">
                                                        <header><h5>Rachel Britain</h5></header>
                                                        <p>
                                                            Mauris elementum et libero ac pharetra. Proin tristique dapibus tellus,
                                                            lacinia blandit mi tincidunt at. Vivamus vitae interdum felis.
                                                            Pellentesque congue mollis erat in imperdiet.
                                                        </p>
                                                    </div>
                                                    <div class="comment-controls">
                                                        <span>08-24-2014</span>
                                                        <a href="#">Reply</a>
                                                    </div>
                                                </article>
                                            </li>
                                        </ul><!-- /.discussion-child -->
                                    </li><!-- /parent item -->
                                </ul><!-- /.discussion-child -->
                            </li><!-- /parent item -->
                            <li class="author-block">
                                <figure class="author-picture"><img src="{{ asset('front/assets/img/discussion-author-02.jpg') }}"></figure>
                                <article class="paragraph-wrapper">
                                    <div class="inner">
                                        <header><h5>Jane Mason</h5></header>
                                        <p>
                                            Mauris elementum et libero ac pharetra. Proin tristique dapibus tellus,
                                            lacinia blandit mi tincidunt at. Vivamus vitae interdum felis.
                                            Pellentesque congue mollis erat in imperdiet.
                                        </p>
                                    </div>
                                    <div class="comment-controls">
                                        <span>08-24-2014</span>
                                        <a href="#">Reply</a>
                                    </div>
                                </article>
                            </li><!-- /parent item -->
                        </ul><!-- /.discussion-list -->
                    </section><!-- /.discussion -->
                    <section id="leave-reply">
                        <header><h2>Leave a Reply</h2></header>
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
                                            <input type="email"id="email" name="email" required="required">
                                        </div><!-- /.controls -->
                                    </div><!-- /.control-group -->
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="controls">
                                            <label for="message">Your Message</label>
                                            <textarea name="message" id="message" required="required"></textarea>
                                        </div><!-- /.controls -->
                                    </div><!-- /.control-group -->
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row -->
                            <div class="form-actions pull-right">
                                <input type="submit" class="btn btn-color-primary" value="Reply">
                            </div><!-- /.form-actions -->
                        </form><!-- /.reply-form -->
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