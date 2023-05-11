<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;


class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $author = new Author([
            'name' => $request->get('name'),
        ]);
        $author->save();

        return redirect('/authors')->with('success', 'Author saved!');
    }

    public function show(Author $author)
    {
        return view('authors.show', compact('author'));
    }

    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, Author $author)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $author->fill($request->all());
        $author->save();

        return redirect('/authors')->with('success', 'Author updated!');
    }

    public function destroy(Author $author)
    {
        $author->delete();
        return redirect('/authors')->with('success', 'Author deleted!');
    }
}
