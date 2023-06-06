@extends('layouts.auth')

@section('page.title', 'Page Registration')

@section('auth.content')
    <x-card>
        <x-card-header>
            <x-card-title>
                {{ __('registration') }}
            </x-card-title>
            <x-slot name="right">
                <a href="{{ route('login') }}">
                    {{ __('Login') }}
                </a>
            </x-slot>
        </x-card-header>
        <x-card-body>
            <x-form action="{{ route('register.store') }}" method="POST">
                <x-form-item>
                    <x-labele required> {{ __('Email') }} </x-labele>
                    <x-input type="email" name="email" autofocus />
                </x-form-item>

                <x-form-item>
                    <x-labele required> {{ __('Name') }} </x-labele>
                    <x-input name="name" autofocus />
                </x-form-item>

                <x-form-item>
                    <x-labele required> {{ __('Password') }} </x-labele>
                    <x-input id="password" type="password" name="password" />
                </x-form-item>

                <x-form-item>
                    <x-labele required> {{ __('Password confirmation') }} </x-labele>
                    <x-input id="password_confrmation" type="password" name="password_confrmation" />
                </x-form-item>

                <x-form-item>
                    <x-checkbox>
                        {{ __('Remember me') }}
                    </x-checkbox>
                </x-form-item>

                <x-button type='submit'>
                    registration
                </x-button>
            </x-form>
        </x-card-body>
    </x-card>
@endsection
