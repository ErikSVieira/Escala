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
        <div class="col">{{ $show->birth_date }}</div>
    </div>
    <div class="row">
        <form action="" method="post">
            @csrf
            <button type="submit">
                @if ($show->active)
                    <span style="background: red; color: aliceblue">Disabled the Employee {{ $show->name }}</span>
                @else
                    <span style="background: green; color: aliceblue">Enable the Employee {{ $show->name }}</span>
                @endif
            </button>
        </form>
    </div>
</div>
    
@endsection