@extends('layouts.app')

@section('content')
    <h1>Article List</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @csrf
            @foreach ($articles as $article)
            <tr>
                <td><a href="{{ route('article.show', $article) }}">{{ $article->title }}</a></td>
                <td>
                    <a href="{{ route('article.edit', $article) }}">Edit</a>
                    <form method="post" action="{{ route('article.destroy', $article) }}">
                        @method("delete")
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
