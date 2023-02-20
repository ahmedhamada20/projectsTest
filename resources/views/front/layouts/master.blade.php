<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('front.layouts.head')
</head>

<body class="{{ request()->routeIs('home') ? ' page-homepage-carousel' : "  page-sub-page page-course-listing" }}">
    <div class="wrapper">
        @include('front.layouts.Header')
        @yield('content')
       
        @include('front.layouts.footer')
    </div>
    @include('front.layouts.footerjs')
</body>

</html>