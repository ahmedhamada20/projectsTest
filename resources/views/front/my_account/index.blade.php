@extends('front.layouts.master')
@section('title')
  الصفحه الشخصيه
@endsection
@section('style')
    
@endsection
@section('content')

<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">My Profile</li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <header><h1>My Account</h1></header>
        <div class="row">
            <div class="col-md-8">
                <section id="my-account">
                    <ul class="nav nav-tabs" id="tabs">
                        <li class="active"><a href="#tab-profile" data-toggle="tab">Profile</a></li>
                        <li><a href="#tab-my-courses" data-toggle="tab">My Courses</a></li>
                        <li><a href="#tab-change-password" data-toggle="tab">Change Password</a></li>
                    </ul><!-- /#my-profile-tabs -->
                    <div class="tab-content my-account-tab-content">
                        <div class="tab-pane active" id="tab-profile">
                            <section id="my-profile">
                                <header><h3>My Profile</h3></header>
                                <div class="my-profile">
                                    <figure class="profile-avatar">
                                        <div class="image-wrapper"><img src="{{ asset('front/assets/img/profile-avatar.jpg') }}"></div>
                                    </figure>
                                    <article>
                                        <div class="table-responsive">
                                            <table class="my-profile-table">
                                                <tbody>
                                                <tr>
                                                    <td class="title">Full Name</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="name" value="John Doe">
                                                        </div><!-- /input-group -->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="title">Location</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="location" value="London UK">
                                                        </div><!-- /input-group -->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="title bio">Bio</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <textarea id="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit.In sollicitudin mi id urna pulvinar, in ornare dui scelerisque. Nunc nec odio eros. Integer placerat tempor nunc eget semper. Nulla vitae dictum est, et convallis mauris. Integer</textarea>
                                                        </div><!-- /input-group -->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="title">Website</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="website" value="http://www.theme-starz.com">
                                                        </div><!-- /input-group -->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="title">Change Photo</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="file" id="change-photo">
                                                        </div><!-- /input-group -->
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <button type="submit" class="btn pull-right">Save Changes</button>
                                    </article>
                                </div><!-- /.my-profile -->
                            </section><!-- /#my-profile -->
                        </div><!-- /tab-pane -->
                        <div class="tab-pane" id="tab-my-courses">
                            <section id="course-list">
                                <header><h3>My Courses</h3></header>
                                <table class="table table-hover table-responsive course-list-table tablesorter">
                                    <thead>
                                    <tr>
                                        <th>Course Name</th>
                                        <th>Course Type</th>
                                        <th class="starts">Starts</th>
                                        <th class="status">Exam</th>
                                        <th class="status">Photo</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (App\Models\SubcripeCorses::where('customer_id',auth('customer')->user()->id)->get() as $row )
                                        <tr class="status-not-started">
                                            <th class="course-title"><a href="{{ route('courses_detail',$row->course->id) }}" target="_blank">{{ $row->course->name }}</a></th>
                                            <th class="course-category"><a href="{{ route('courses_detail',$row->course->id) }}" target="_blank">{{ $row->course->category->name }}</a></th>
                                            <th>{{ $row->created_at->format('Y-m-d') }}</th>
                                            <th>{{ $row->exam }}</th>
                                            <td>
                                                @if($row->image)
                                                    <a href="{{ $row->image }}" target="_blank
                                                        ">
                                                        <img src="{{ $row->image }}" alt="{{ $row->name }}"
                                                             class="list-thumbnail border-0" width="50" height="50">
                                                    </a>
                                                @endif
                                            </td>
                                          
                                            {{-- <th class="status"><i class="fa fa-calendar-o"></i>l</th> --}}
                                        </tr>
                                        @endforeach
                                  
                                  
                                    </tbody>
                                </table>
                               
                            </section><!-- /#course-list -->
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane" id="tab-change-password">
                            <section id="password">
                                <header><h3>Change Password</h3></header>
                                <div class="row">
                                    <div class="col-md-5 col-md-offset-4">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            In sollicitudin mi id urna pulvinar, in ornare dui scelerisque.
                                            Nunc nec odio eros
                                        </p>
                                        <form role="form" class="clearfix" action="course-joined.html">
                                            <div class="form-group">
                                                <label for="current-password">Current Password</label>
                                                <input type="password" class="form-control" id="current-password">
                                            </div>
                                            <div class="form-group">
                                                <label for="new-password">New Password</label>
                                                <input type="password" class="form-control" id="new-password">
                                            </div>
                                            <div class="form-group">
                                                <label for="repeat-new-password">Repeat New Password</label>
                                                <input type="password" class="form-control" id="repeat-new-password">
                                            </div>
                                            <button type="submit" class="btn pull-right">Change Password</button>
                                        </form>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div><!-- /.tab-content -->
                </section>
            </div>

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


                        </div>
                        <!-- /.section-content -->
                        <a href="" class="read-more">All News</a>
                    </aside><!-- /.news-small -->
                </div><!-- /#sidebar -->
            </div><!-- /.col-md-4 -->
            <!-- end SIDEBAR Content-->




        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->
@endsection