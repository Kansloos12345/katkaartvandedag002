<?php

session_start();

include_once 'includes/header.php';

?>

<link rel="stylesheet" href="css/index.css">

<h1 id="title">De kat kaart van de dag ↓</h1>

<div id="thread">

    <img id="card" src="img/pfp/jjb.png">

    <div id="comments">

    <form class="postcomment">
        <img class="pfp" src="img/pfp/jjb.png">
        <div id="typecomment">
        <p class="info" id="nameecho" ><strong>
            Yourname
        </strong></p>
            <input id="input" class="info" placeholder="Enter a comment here">
        </div>
        <button id="postbutton"><strong>post</strong></button>
    </form>

    <form class="comment">
        <img class="pfp" src="img/pfp/jjb.png">
        <div id="typecomment">
            <label class="info"><strong>Rvspijker - @rvspijker - 23 jun</strong></label><br>
            <label class="info">lol</label>
        </div>
    </form>

    </div>

</div>

<p id="title">{{ $thread->title }}. Maker: {{ $thread->user->name }}, Posted at: {{ $thread->created_at }}, {!! $thread->content !!}, {{ $thread->updated_at }}</p>

<?php 

include_once "includes/footer.php"

?>