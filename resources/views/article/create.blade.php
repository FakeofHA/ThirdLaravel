@extends('layouts.app')

@section('content')
    <h1>Create Article</h1>

    <form action="{{ route('article.store') }}" method="post">
        @csrf
        <div>
            <lable for="title">Title: </lable>
            <input type="text" name="title" />
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
            <textarea cols="25" rows="10" name="content"></textarea>
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
