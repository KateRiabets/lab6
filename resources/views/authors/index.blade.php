@extends('layouts.app')

@section('content')
    <h1>Authors</h1>
    <a href="{{ route('authors.create') }}">Create Author</a>
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($authors as $author)
            <tr>
                <td>{{ $author->name }}</td>
                <td>
                    <a href="{{ route('authors.edit', $author->id) }}">Edit</a>
                    <form action="{{ route('authors.destroy', $author->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
