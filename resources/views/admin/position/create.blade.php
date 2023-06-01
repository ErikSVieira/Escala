@extends('layout.app')

@section('title', 'Position')

@section('content')
<h1>Create Position</h1>

@include('layout.info')

<form action="{{ route('position.store') }}" method="post">

    @include('admin.position._partials.form')

</form>
@endsection
