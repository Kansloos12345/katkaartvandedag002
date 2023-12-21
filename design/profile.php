<?php

session_start();

include_once 'includes/header.php';

?>

<link rel="stylesheet" href="css/index.css">

<h1 id="title">Your account</h1>

<div class="account">

    <img class="accountpfp" src="img/pfp/jjb.png">

    <div id="typecomment">
    <p class="profileinfo"><strong>
        Yourname
    </strong></p>
    <p class="profileinfo">
        nick/eh30
    </p>
    <p class="profileinfo" id="emailecho" >
        jdhkfjshkfj@dfjs.fdk
    </p>
    </div>
    
    <button class="editbutton" onclick="showEditForm()"><strong>Edit Account</strong></button>
</div>

<form class="changeinfo" action="src/formhandlers/changeinfo.php">

    <label class="info" id="newpronouns">New profile picture</label>
    <input type="file" class="info" id="newaccountpfp" name="filename">

    <div id="typecomment">

    <label class="info" id="newpronouns">New Pronouns</label>
            <select type="text" name="pronouns" placeholder="Pronouns" class="info">
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

    <input class="info" id="newemail" placeholder="New email"></input>
    </div>
    
    <button type="submit" class="editbutton"><strong>Save changes</strong></button>
</form>