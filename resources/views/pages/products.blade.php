@extends('base')

@section('content')
@include('partials.topheader')
<header class="main-header">
    <img src="images/drawing.png" alt="logo" class="logo-small">
    <h1 class="products-title">Products</h1>
</header>
@include('partials.footer')
@stop

@section('bodyscripts')
<script>
    function showTitle() {
        var title = document.querySelector(".products-title");
        title.style.transform = "rotateX(0deg)";
    }
    window.addEventListener('load', showTitle, false);
</script>
@stop