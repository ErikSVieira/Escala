@extends('layout.app')

@section('title', 'Employee Show')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">Nome</div>
        <div class="col">Data de nascimento</div>
    </div>
    <div class="row">
        <div class="col">{{ $show->name }} - {{ $show->position->acronym }}</div>
        <div class="col">{{ date("d - m - Y", strtotime($show->birth_date)) }}</div>
    </div>
    <div class="row">
        <form action="{{ route('employee.destroy', $show->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit"
                @if ($show->active)
                    class="btn btn-danger">Disabled the Employee {{ $show->name }}
                @else
                    class="btn btn-success">Enable the Employee {{ $show->name }}
                @endif
            </button>
        </form>
    </div>
    <div class="row">
        <img src="{{ url("storage/{$show->image}") }}" alt="Photo from {{ $show->name }}">
    </div>
</div>
    
@endsection