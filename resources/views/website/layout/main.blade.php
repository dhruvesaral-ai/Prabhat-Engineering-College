<!DOCTYPE html>
<html lang="en" dir="ltr">

    @include('website.layout.head')
    <body id="top-header" class="loading">
        <div class="loader"><img src=""></div>
        <!-- start header -->
<div id="wrapper">
    <!-- start header -->    
        @include('website.layout.header')


    <div class="contents">
        {{-- @include('website.layout.body') --}}
        @yield('content')
    </div>

@include('website.layout.footer')
</body>
</html>