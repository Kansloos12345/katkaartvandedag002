@extends('layouts.main')

@section('pagetitle')
    Register
@endsection

@section('content')

    <h1 id="registertitle">Register pls</h1>

    <form action="{{ route('register') }}" method="POST" id="login" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            <label>Username</label>
            <input type="text" id="username" name="name" placeholder="Username" value="{{ old('name') }}" class="inputs" required/>
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
            <input type="email" id="email" name="email" placeholder="example@example.com" value="{{ old('email') }}" class="inputs" required/>
        </div>
        <div>
            <label>Password</label>
            <input type="password" id="password" name="password" placeholder="Password" class="inputs" required/>
        </div>
        <div>
            <label>Confirm Password pls</label>
            <input type="password" id="password" name="password_confirmation" placeholder="Confirm Password" class="inputs" required/>
        </div>
        <div>
            <label>Profile picture</label>
            <input type="file" class="inputs" name="uploadfile">
        </div>

        <button id="submit" type="submit" name="action">Submit!</button>

        <br><br>

        <a href="login" id="hrefs">
            I already have an account :3
        </a>
    </form>

@endsection

{{--<x-guest-layout>--}}
{{--    <form method="POST" action="{{ route('register') }}">--}}
{{--        @csrf--}}

{{--        <!-- Name -->--}}
{{--        <div>--}}
{{--            <x-input-label for="name" :value="__('Name')" />--}}
{{--            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
{{--            <x-input-error :messages="$errors->get('name')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Email Address -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Confirm Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--            <x-text-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password_confirmation" required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">--}}
{{--                {{ __('Already registered?') }}--}}
{{--            </a>--}}

{{--            <x-primary-button class="ml-4">--}}
{{--                {{ __('Register') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}
