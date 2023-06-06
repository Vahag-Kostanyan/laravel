@extends('layouts.main')

@section('page.title', 'Create posts')

@section('main.content')
    <x-user.title>
        {{ __('Create posts') }}

        <x-slot name='link'>
            <a href="{{ route('user.post') }}">
                back
            </a>
        </x-slot>
    </x-user.title>
    <x-post.form action="{{route('user.post.store')}}" method="POST" />
@endsection
