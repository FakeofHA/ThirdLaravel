@extends('layouts.app')

@section('content')
    <h1>User Editor</h1>

    <form method="post" action="{{ route('user.update', $user) }}">
        @method("put")
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}">
        <div>
            <label for="name">Name</label><br>
            <input type="text" name="name" value="{{ $user->name }}">
        </div>
        <div>
            <label for="email">Email</label><br>
            <input type="text" name="email" value="{{ $user->email }}">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection
