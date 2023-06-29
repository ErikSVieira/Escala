@extends('layout.app')

@section('title', 'Edit')

@section('content')

<div class="container">
    <div class="row">
        <h1>Edit Position</h1>
    </div>
    <div class="row">
        <form action="{{ route('position.update', $edit->id) }}" method="post">

            @method('PUT')
        
            @include('admin.position._partials.form')
        
        </form>
    </div>
</div>

@endsection