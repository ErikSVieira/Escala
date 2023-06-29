@extends('layout.app')

@section('title', 'Position show')

@section('content')

<div class="container">
    <div class="row">
        <h1>Show position</h1>
    </div>
    <div class="row ms-2">
        <div class="row">
            <div class="col-2 fw-bold border border-black">Position</div>
            <div class="col-2 fw-bold border border-black">Acronym</div>
        </div>
        <div class="row">
            <div class="col-2 border border-black">{{ $show->name }}</div>
            <div class="col-2 border border-black">{{ $show->acronym }}</div>
        </div>
        <div class="row">
            <div class="col-4 fw-bold border border-black">
                Description
            </div>
        </div>
        <div class="row">
            <div class="col-4 border border-black">
                {{ $show->description }}
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-4">
            <form action="{{ route('position.destroy', $show->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit"
                    @if ($show->active)
                        class="btn btn-danger">Disabled the Position {{ $show->name }}
                    @else
                        class="btn btn-success">Enable the Position {{ $show->name }}
                    @endif
                </button>
            </form>
        </div>
    </div>
</div>

@endsection