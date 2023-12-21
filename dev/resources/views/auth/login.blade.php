@extends('layouts.main')

@section('pagetitle')
    Log in
@endsection

@section('content')

    <div id="logintitle"><h1>Log In</h1></div>

    <form id="login" method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label>Email</label>
            <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" class="inputs" required autofocus/>
        </div>

        <div>
            <label>Password</label>
            <input type="password" id="wachtwoord" name="password" placeholder="Password" class="inputs" required/>
        </div>

        <button id="submit" type="submit"><strong>LOGIN</strong></button>

        <p>--- or ---</p>

        <a href="register" id="hrefs">
            New? Make an account !1!1 :3
        </a>

        <br><br>

        <a href="forgot-password" id="hrefs">
            I forgor my password :(
        </a>

    </form>

@endsection
