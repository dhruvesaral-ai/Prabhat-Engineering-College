<!doctype html>
<html lang="en">
    @include('layout.head')
    <body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        @include('layout.sidebar')
    </div>

    <div class="content">
        @include('layout.header')
        @yield('content')
    </div>
@include('layout.footer')
</body>
</html>