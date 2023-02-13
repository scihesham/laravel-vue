@include('front.layout.header')
@if (!isset($no_navbar))
    @include('front.layout.navbar')
@endif

@include('front.layout.message')

@yield('content')

@if (!isset($no_footer))
    @include('front.layout.footer')
@endif
