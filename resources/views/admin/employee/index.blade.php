@extends('layout.app')

@section('titles', 'Employees')

@section('content')
<h1>
    Employees
</h1>

<p>
    <a href="{{ route('employee.create') }}">
        Create a new employee
    </a>
</p>

<hr>

@foreach ($employees as $employee)
    <p>
        {{ $employee->name }} - 
        [
            <a href="{{ route('employee.show', $employee->id )}}">Show</a> |
            <a href="#">Edit</a>
        ]
    </p>
@endforeach

@if (isset($search))
    {{ $employees->appends($search)->links() }}
@else
    {{ $employees->links() }}
@endif

@endsection