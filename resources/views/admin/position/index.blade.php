@extends('layout.app')

@section('title', 'Home')

@section('content')

<form action="{{ route('position.search') }}" method="post">
    @csrf
    <input type="text" name="search" id="search" value="{{ old('search') }}" placeholder="Search">
    <button type="submit">Search</button>
</form>

<h1>
    POSITION Arm
</h1>

<p>
    <a href="{{ route('position.create') }}">
        Create Position
    </a>
</p>

<hr>

@include('layout.info')

@foreach ($positions as $position)

    <p>
        {{ $position->position }} - 
        [ 
            <a href="{{ route('position.show', $position->id) }}">Show</a> | 
            <a href="{{ route('position.edit', $position->id) }}">Edit</a>
        ]
    </p>

@endforeach

<hr>

@if (isset($search))
    {{ $positions->appends($search)->links() }}
@else
    {{ $positions->links() }}
@endif

@endsection
