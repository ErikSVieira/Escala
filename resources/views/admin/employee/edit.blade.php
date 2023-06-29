@extends('layout.app')

@section('title', 'Edit Employee')

@section('content')

<form action="{{ route('employee.update', $edit->id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @include('admin.employee._partials.form')
</form>

@endsection