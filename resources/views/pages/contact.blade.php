@extends('base')

@section('content')
@include('partials.topheader')
@include('partials.pagetitleheader', ['pagetitle' => 'Contact Us'])

<div class="contact-details">
<h2>Feel free to contact us using any of the details below. We would love to hear from you.</h2>
<img src="{{ asset('images/wires.svg') }}" alt="wires" class="wires-img"/>
<p><i class="fa fa-skype"></i> Skype: Solaraasia</p>
<p><i class="fa fa-envelope"></i> Email: info@solaraasia.com</p>
<p><i class="fa fa-phone"></i> Office Number: +886-2-25535700</p>
<p><i class="fa fa-globe"></i> Website: www.solaraasia.com</p>
<p><i class="fa fa-map-marker"></i> 34-F, no 215, Sec 2, ChengDe Rd, Datong District, Taipei City, Taiwan</p>
</div>
@include('partials.footer')
@stop
