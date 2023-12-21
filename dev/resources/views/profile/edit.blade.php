<?php

$pfp = Auth::user()->pfp;

?>

@extends('layouts.main')

@section('pagetitle')
    Home
@endsection

@section('content')

    <h1 id="title">Your account</h1>

    <div class="account">

        <img class="accountpfp" src="{{ $pfp }}">

        <div id="typecomment">
            <p class="profileinfo"><strong>
                {{Auth::user()->name}}
                </strong></p>
            <p class="profileinfo">
                {{Auth::user()->pronouns}}
            </p>
            <p class="profileinfo" id="emailecho" >
                {{Auth::user()->email}}
            </p>
        </div>

        <button class="editbutton" onclick="showEditForm()"><strong>Edit Account</strong></button>
    </div>

    <div class="changeinfo">
        <div id="update-profile">
            @include('profile.partials.update-profile-information-form')
        </div>

        <div id="update-password">
            @include('profile.partials.update-password-form')
        </div>

        <div id="delete-user">
            @include('profile.partials.delete-user-form')
        </div>
    </div>

@endsection
