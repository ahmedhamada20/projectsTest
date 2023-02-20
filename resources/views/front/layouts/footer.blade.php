<!-- Footer -->
<footer id="page-footer">
    <section id="footer-top">
        <div class="container">
            <div class="footer-inner">
                <div class="footer-social">
                    <figure>Follow us:</figure>
                    <div class="icons">
                        <a href="{{ settingSite()->twitter }}"><i class="fa-brands fa-twitter"></i></a>
                        <a href="{{ settingSite()->facebook }}"><i class="fa-brands fa-facebook"></i></a>
                      
                    </div><!-- /.icons -->
                </div><!-- /.social -->
                <div class="search pull-right">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                    </span>
                    </div><!-- /input-group -->
                </div><!-- /.pull-right -->
            </div><!-- /.footer-inner -->
        </div><!-- /.container -->
    </section><!-- /#footer-top -->

    <section id="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    @if( settingSite()->photo)
                    <aside class="logo">
                        <img src="{{ asset('admin/pictures/setting/'. settingSite()->id.'/'. settingSite()->photo->Filename) }}" width="70" height="70"  title="{{ settingSite()->name }}" class="vertical-center">
                    </aside> 
                    @else
                    <aside class="logo">
                        <img src="" width="70" height="70" title="{{ settingSite()->name }}" class="vertical-center">
                    </aside>
                    @endif
                   
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-4">
                    <aside>
                        <header><h4>Contact Us</h4></header>
                        <address>
                            <strong>{{ settingSite()->name }}</strong>
                            <br>
                           
                           
                            <span>address :: {{ settingSite()->address }}</span>
                            <br>
                            <abbr title="phone">phone:</abbr> {{ settingSite()->phone }}
                            <br>
                            <abbr title="facebook">facebook:</abbr> <a href="#">{{ settingSite()->facebook }}</a>
                        </address>
                    </aside>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-4">
                    <aside>
                        <header><h4>courses</h4></header>
                        <ul class="list-links">
                            @forelse (courseActive() as $row)
                            <li><a href="#">{{ $row->name }}</a></li>
                          
                            @empty
                                
                            @endforelse
                        </ul>
                    </aside>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-4">
                    <aside>
                        <header><h4>About Universo</h4></header>
                        <p>
                            {!! Str::limit( settingSite()->notes, 200, ' ...') !!}
                        </p>
                        <div>
                            <a href="" class="read-more">All News</a>
                        </div>
                    </aside>
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="background"><img src="{{ asset('assets/img/background-city.png') }}" class="" alt=""></div>
    </section><!-- /#footer-content -->

    <section id="footer-bottom">
        <div class="container">
            <div class="footer-inner">
                <div class="copyright">© Theme Starz, All rights reserved</div><!-- /.copyright -->
            </div><!-- /.footer-inner -->
        </div><!-- /.container -->
    </section><!-- /#footer-bottom -->

</footer>
<!-- end Footer -->