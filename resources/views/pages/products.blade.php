@extends('base')

@section('content')
@include('partials.topheader')
@include('partials.pagetitleheader', ['pagetitle' => 'Products'])

@include('partials.footer')
@stop

@section('bodyscripts')
@include('partials.showtitlescript')
@stop