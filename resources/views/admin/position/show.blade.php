@extends('layout.app')

@section('title', 'Position show')

@section('content')

<h1>Show position</h1>

<table style="border: 1px solid black">
    <thead>
        <tr>
            <th>
                Position
            </th>
            <th>
                Acronym
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                {{ $show->position }}
            </td>
            <td>
                {{ $show->acronym }}
            </td>
        </tr>
        <tr>
            <th colspan="2">
                Description
            </th>
        </tr>
        <tr>
            <td colspan="2">
                {{ $show->description }}
            </td>
        </tr>
    </tbody>
</table>

<form action="{{ route('position.destroy', $show->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">
        Disabled the Position <span style="background: red; color: aliceblue">{{ $show->position }}</span>
    </button>
</form>

@endsection