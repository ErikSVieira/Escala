@extends('layout.app')

@section('title', 'Edit')

@section('content')
<h1>Edit Position</h1>

<form action="{{ route('position.update', $edit->id) }}" method="post">

    @method('PUT')

    @include('admin.position._partials.form')

</form>

@endsection