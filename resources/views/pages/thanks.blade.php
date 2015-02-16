@extends('base')

@section('content')
@include('partials.topheader')
<header class="main-header">
    <img src="images/drawing.png" alt="logo" class="logo-small">
    <h1 class="products-title">Thank You</h1>
</header>
<div class="thanks-banner">
    @if(Session::has('thanks_note'))
        <p>{{ Session::get('thanks_note') }}</p>
    @else
        <p>Thank you very much! We will be in touch soon.</p>
    @endif
</div>
<img src="{{ asset('images/bulbs.svg') }}" alt="solara led bulbs" class="bulb-image"/>
@include('partials.footer')
@stop

@section('bodyscripts')
<script>
    function showTitle() {
        var title = document.querySelector(".products-title");
        title.style.transform = "rotateX(0deg)";
        title.style.webkitTransform = "rotateX(0deg)";
    }
    window.addEventListener('load', showTitle, false);
</script>
@stop