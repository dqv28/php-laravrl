@extends('layouts.app')
@section('content')
    <h1>This is Home Page</h1>
    {{-- The storage is more secure --}}
    {{ print_r(asset('')) }}
    <img 
        src="{{ asset('storage/logo.png') }}" 
        width="100"
        height="100"
        alt="">
@endsection