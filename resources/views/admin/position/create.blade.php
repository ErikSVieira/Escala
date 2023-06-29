@extends('layout.app')

@section('title', 'Position')

@section('content')

@include('layout.info')

<div class="container">
    <div class="row">
        <h1>Create Position</h1>
    </div>
    <div class="row">
        <form action="{{ route('position.store') }}" method="post">

            @include('admin.position._partials.form')
        
        </form>
    </div>
</div>

@endsection
