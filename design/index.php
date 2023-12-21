<?php

session_start();

include_once 'includes/header.php';

?>

<link rel="stylesheet" href="css/index.css">



<h1 id="title">Kat kaartjes :3 ↓</h1>

<div class="maingrid">

    <a href="addpost.php" id="small-thread">

        <img id="card" src="img/addblog.png">

        <div id="card-backdrop">
            <p>></p>
        </div>

    </a>

    <!-- start of loop -->

    <a href="main.php" id="small-thread">

        <img id="card" src="img/posts/ace_of_wands.png">

        <div id="card-backdrop">
            <p>></p>
        </div>

    </a>

    <!-- end of loop -->

    <a href="main.php" id="small-thread">

        <img id="card" src="img/posts/queen_of_swords.png">

        <div id="card-backdrop">
            <p>></p>
        </div>

    </a>

    <a href="main.php" id="small-thread">

        <img id="card" src="img/posts/the_hierophant.png">

        <div id="card-backdrop">
            <p>></p>
        </div>

    </a>

</div>

<?php 

include_once "includes/footer.php"

?>