<?php

session_start();

include_once "includes/header.php"

?>

<link rel="stylesheet" href="css/index.css">

<div id="logintitle"><h1>Log In</h1></div>

<form id="login" action="login.php" method="POST">

    <div>
        <label>Email</label>
        <input type="email" id="email" name="email" placeholder="Email" class="inputs" required/>
    </div>

    <div>
        <label>Password</label>
        <input type="password" id="wachtwoord" name="password" placeholder="Password" class="inputs" required/>
    </div>
    
    <button id="submit" type="submit"><strong>LOGIN</strong></button>

    <p>--- or ---</p>

    <a href="register.php" id="hrefs">
        New? Make an account !1!1 :3
    </a>

    <br><br>

    <a href="login.php" onclick="logout(event)" id="hrefs">
        I forgor my password :(
    </a>

</form>

<script src="./js/script.js"></script>

<?php

include_once "includes/footer.php"

?>