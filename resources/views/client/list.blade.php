@extends('layouts.app')

@section('content')
    <h1>Article List</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Title</th>
            </tr>
        </thead>
        <tbody>
            @csrf
            @foreach ($articles as $article)
            <tr>
                <td>
                    <a href="{{ route('article.show', $article) }}">{{ $article->title }}</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
