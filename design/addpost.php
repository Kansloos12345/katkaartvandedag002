<?php

session_start();

@require_once ("includes/header.php");

?>

<link rel="stylesheet" href="css/index.css">

<h1 id="title">HELLOWWWWW</h1>

<form action="src/formhandlers/addpost.php" method="POST" id="login" enctype="multipart/form-data">
        <div>
            <label>Title</label>
            <input type="text" id="username" name="title" placeholder="Title" class="inputs" required/>
        </div>

        <div>
            <label>Blog Image</label>
            <input type="file" class="inputs" name="uploadfile" required>
        </div>

        <div>
            <label>Description</label>
            <input type="text" id="username" name="description" placeholder="Desc" class="inputs" required/>
        </div>

    <button id="submit" type="submit">Post :3</button>
</form>