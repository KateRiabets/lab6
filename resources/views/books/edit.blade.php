@extends('layouts.app')

@section('content')
    <h1>Edit Book</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $book->title }}" required>
        <label for="author_id">Author:</label>
        <select id="author_id" name="author_id">
            @foreach($authors as $author)
                <option value="{{ $author->id }}" @if($author->id == $book->author_id) selected @endif>{{ $author->name }}</option>
            @endforeach
        </select>
        <button type="submit">Update</button>
    </form>
@endsection
