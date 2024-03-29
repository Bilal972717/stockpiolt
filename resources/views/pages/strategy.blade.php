@extends('layouts.default')
@section('content')
    <div id="wrapper strategy-page" class="strategy-page">
        @include('includes.header')
        {!! str_replace('images/', env('APP_URL') . '/images/', $page->body) !!}

        @include('includes.testimonials')
        @include('includes.newsletter')
        @include('includes.footer')
    </div>
@stop
