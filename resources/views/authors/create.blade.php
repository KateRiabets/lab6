@extends('layouts.app')

@section('content')
    <h1>Create Author</h1>
    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Save</button>
    </form>
@endsection
