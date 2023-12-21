<?php

    session_start();

    @require_once ("includes/header.php");

    $message = '';

    if (isset($_SESSION['email_alert'])) {
        $message = 'Email already exists sowwy :3 :(';
    }

?>

<link rel="stylesheet" href="css/index.css">

<h1 id="registertitle">Register pls</h1>

<form action="src/formhandlers/register.php" method="POST" id="login" enctype="multipart/form-data">
        <div>
            <label>Username</label>
            <input type="text" id="username" name="username" placeholder="Username" class="inputs" required/>
        </div>
        <div>
            <label>Pronouns:</label>
            <select type="text" id="pronouns" name="pronouns" placeholder="Pronouns" class="inputs">
                <option value="Any">Any</option>
                <option value="She/Her">She/Her</option>
                <option value="She/They">She/They</option>
                <option value="She/It">She/It</option>
                <option value="He/Him">He/Him</option>
                <option value="He/They">He/They</option>
                <option value="He/It">He/It</option>
                <option value="They/Them">They/Them</option>
                <option value="They/It">They/It</option>
            </select>
        </div>
        <div>
            <label>Email</label>
            <input type="email" id="email" name="email" placeholder="example@example.com" class="inputs" required/>
        </div>
        <div>
            <label>Password</label>
            <input type="password" id="password" name="password" placeholder="Password" class="inputs" required/>
        </div>
        <div>
            <label>Profile picture</label>
            <input type="file" class="inputs" name="uploadfile">
        </div>

    <button id="submit" type="submit">Submit!</button>

    <br><br>

    <a href="login.php" id="hrefs">
        I already have an account :3
    </a>
</form>