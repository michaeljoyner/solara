@extends('base')

@section('content')
    @include('partials.topheader')
    <header class="main-header">
        <div class="logo-holder">
            <h1 class="logo-title">s<span class="hidden-o">o</span>lara</h1>
            <img src="images/solara_logo_circle.png" alt="logo" class="logo-circle">
        </div>
        <p class="sub-title"><span>asia</span></p>
    </header>
    <div id="intro">
        <p>Solara Asia serves what you need. We are not only sourcing your needs, but also what is new in this world. Taiwan based, China and Korea experienced, Solara Asia is a sophisticated sourcing team that you will have.</p>
        <p>The headquarters of Solara Asia are in Taipei. We have Hong Kong, Shenzen, Seoul and Beijing Offices.</p>
    </div>
    <div id="services">
        <img src="{{ asset('images/camera.svg') }}" alt="cctv image" class="service-image" width="282" height="226"/>
        <h1 class="service-title">Services</h1>
        <h2>We do Sourcing and Professional Design.</h2>
        <h3>Sourcing</h3>
        <h3>Solara Asia can Serve</h3>
        <p>Professional | Experienced | Reliable</p>
        <ul>
            <li>25 Years Experience</li>
            <li>Great tech Supply | China + Taiwan + Korea</li>
            <li>Professional Price Provider | China + Factory Experienced</li>
            <li>Chinese + Korean + English Native Speakers</li>
            <li>Retail + Graphic Design + Marketing Package Service</li>
        </ul>
        <h3>Professional Design</h3>
        <p>Label + Specs + Package + Promotion DM + Graphic Design</p>
        <p>We print, we deliver with shipment. Saving time &amp; cost.</p>
    </div>
    @include('partials.footer')
@stop

@section('bodyscripts')
<script>
    var pageAnimator = {
        elems: {
            'logo': document.querySelector('.logo-title'),
            'sun': document.querySelector('.logo-circle'),
            'subtitle': document.querySelector('.sub-title'),
            'titleLeft': document.querySelector('.logo-title-left')
        },

        init: function() {
            pageAnimator.elems.logo.classList.add('show');
            pageAnimator.elems.subtitle.classList.add('show');
            pageAnimator.elems.sun.classList.add("in-place");

        }
    }
    window.addEventListener('load', pageAnimator.init, false);


</script>
@stop