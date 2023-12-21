@extends('layouts.main')

@section('pagetitle')
    Home
@endsection

@section('content')

    <h1 id="title">Kat kaartjes :3 ↓</h1>

    <div class="maingrid">

        @auth
        <a href="{{ route('addthread.index') }}" id="small-thread">

            <img id="card" src="{{ asset('img/addblog.png') }}" alt="addblog">

            <div id="card-backdrop">
                <p>></p>
            </div>

        </a>
        @endauth

        <!-- start of loop -->
        @foreach($threads as $thread)

            <a href="{{ route('thread.index', ['id' => $thread->id]) }}" id="small-thread">

                <img id="card" src="{{ $thread->img }}" alt="image">

            <div id="card-backdrop">
                <p>></p>
            </div>

        </a>

        @endforeach

    </div>

@endsection
