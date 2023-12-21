@extends('layouts.main')

@section('pagetitle')
    Add Post
@endsection

@section('content')

    <h1 id="title">Je moeder</h1>

    <form action="{{ route('addthread.store') }}" method="POST" id="login">
        @csrf
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <div>
            <label>Title</label>
            <input type="text" id="username" name="title" placeholder="Title" class="inputs" required/>
        </div>

        <div>
            <label>Blog Image</label>
            <input type="file" class="inputs" name="img"/>
        </div>

        <div>
            <label>Description</label>
            <input type="text" id="username" name="content" placeholder="Description" class="inputs" required/>
        </div>

        <button id="submit" type="submit">Post >:3c</button>
    </form>

@endsection
