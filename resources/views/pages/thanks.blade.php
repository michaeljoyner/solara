@extends('base')

@section('content')
@include('partials.topheader')
@include('partials.pagetitleheader', ['pagetitle' => 'Thank You'])

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
@include('partials.showtitlescript')

@stop