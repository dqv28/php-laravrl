@extends('layouts.app')

@section('content')
    <h1>This is About Page</h1>

    {{ 
        $x = 1;
     }}

    @if ($x > 2)

        <h3>x is greater than 2</h3>

    @elseif($x < 10)

        <h3>x is less than 10</h3>

    @else

        <h3>All conditions are not match</h3>

    @endif
    

    {{-- Unless = if not --}}
    {{-- @unless (empty($name))
        <h3>Name is not empty</h3>
    @endunless --}}
    {{-- @if (!empty($name))
        <h3>Name is not empty </h3>
    @endif --}}

    {{-- @empty(!$name)
        <h3>Name is NOT empty</h3>
    @endempty

    @empty($age)
        <h3>Age is empty</h3>
    @endempty

    @isset($name)
        <h3>Name has been set</h3>
    @endisset --}}

    {{-- Switch/case --}}
    {{-- @switch($name)
        @case('Vuong')
            <h3>This is Mr.Vuong</h3>
            @break
        @case('Henry')
            <h3>This is Mr.Henry</h3>
            @break

        @default
            <h3>No one selected</h3>
            
    @endswitch --}}

    {{-- For --}}
    {{-- @for ($i = 0; $i < 20; $i++)
        <h2>i = {{ $i }}</h2>
    @endfor --}}

    {{-- @foreach ($names as $item)
        <h3>Name: {{ $item }}</h3>
    @endforeach --}}

    {{-- @forelse ($names as $item)
        <h3>Name: {{ $item }}</h3>
    @empty
        <h3>This array is empty</h3>
    @endforelse --}}

    {{-- {{$i = 0; }}
    @while ($i < 10)
        <h3>i = {{ $i }}</h3>
        {{ $i++; }}
    @endwhile --}}

@endsection
    