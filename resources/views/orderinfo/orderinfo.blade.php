@extends('layouts.master')

@section('title')
    {{ $title }}
@endsection

@push('head')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    <link href='/css/sams.css' rel='stylesheet'>
@endpush

@section('content')
    <h1>{{ $title }}</h1>

    <p>
        Details about this book will go here...
    </p>
@endsection
<?php
/**
 * Created by PhpStorm.
 * User: s999b
 * Date: 11/13/2018
 * Time: 11:40 PM
 */
