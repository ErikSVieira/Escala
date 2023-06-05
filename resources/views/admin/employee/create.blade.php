@extends('layout.app')

@section('title', 'Employees')

@section('content')
    
<h1>Create Employees</h1>

@include('layout.info')

<form action="{{ route('employee.store') }}" method="post">
    @include('admin.employee._partials.form')
</form>

@endsection