@extends('layouts.app')

@section('content')
    <h1>Update Article</h1>

    <form action="{{ route('article.update', $article) }}" method="post">
        @csrf
        @method("put")
        <div>
            <lable for="title">Title: </lable>
            <input type="text" name="title" value="{{ $article->title }}"/>
            <div>
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div>
            <lable for="content">Content: </lable>
            <br>
            <textarea cols="25" rows="10" name="content">{{ $article->content }}</textarea>
            <div>
                @error('content')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form> 
@endsection
