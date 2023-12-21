@extends('layouts.main')

@section('pagetitle')
    Thread
@endsection

@section('content')

<h1 id="title">De kat kaart van de dag ↓</h1>

<div id="thread">

    <img id="card" src="{{ $thread->img }}">

    <div id="comments">

        @auth
        <form class="postcomment" action="{{ route('comment.store', ['id' => $thread->id]) }}" method="POST">
            @csrf
            <input type="hidden" name="thread_id" value="{{ $thread->id }}"/>
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}"/>
            <img class="pfp" src="{{ asset(Auth::user()->pfp)  }}">

            <div id="typecomment">
                <p class="info" id="nameecho" ><strong>
                        {{ Auth::user()->name }}
                </strong></p>
                <input id="input" class="info" placeholder="Enter a comment here" name="content" required/>
            </div>
            <button id="postbutton" type="submit"><strong>Post</strong></button>
        </form>
        @endauth

        @foreach($thread->comments as $comment)
        <div class="comment">
            <img class="pfp" src="{{ asset($comment->user->pfp) }}">
            <div id="typecomment">
                <label class="usertag"><strong>{{ $comment->user->name }} - {{ $comment->created_at }}</strong></label>
                <label class="info">{{ $comment->content }}</label>
            </div>
        </div>
        @endforeach

    </div>

</div>

<p id="databasestuff" id="title">{{ $thread->title }}. <br><br> Maker: {{ $thread->user->name }}, <br><br> Posted at: {{ $thread->created_at }}, <br><br> Content: {!! $thread->content !!}, <br><br> Last updated at: {{ $thread->updated_at }}</p>

@foreach($thread->comments as $comment)
    <div id="phonecomment-div">
        <div class="phone-comment">
            <img class="pfp" src="{{ asset($comment->user->pfp) }}">
            <div id="typecomment">
                <label class="usertag"><strong>{{ $comment->user->name }} - {{ $comment->created_at }}</strong></label>
                <label class="info">{{ $comment->content }}</label>
            </div>
        </div>
    </div>
@endforeach

@auth
    <div id="phonepostcomment-div">
        <form class="postcomment" action="{{ route('comment.store', ['id' => $thread->id]) }}" method="POST">
            @csrf
            <input type="hidden" name="thread_id" value="{{ $thread->id }}"/>
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}"/>
            <img class="pfp" src="{{ asset(Auth::user()->pfp)  }}">

            <div id="typecomment">
                <p class="info" id="nameecho" ><strong>
                        {{ Auth::user()->name }}
                    </strong></p>
                <input id="input" class="info" placeholder="Enter a comment here" name="content" required/>
            </div>
            <button id="postbutton" type="submit"><strong>Post</strong></button>
        </form>
    </div>
@endauth

@endsection
