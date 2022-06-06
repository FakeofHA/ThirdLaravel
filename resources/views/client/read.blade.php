@extends('layouts.app')

@section('content')
    <h1>{{ $article->title }}</h1>
    <h2>{{ $article->content }}</h2>
@endsection
