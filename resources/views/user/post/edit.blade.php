@extends('layouts.main')

@section('page.title', 'Edit posts')

@section('main.content')
    <x-user.title >
        {{ __('Edit posts') }}

        <x-slot name='link'>
            <a href="{{route('user.post.show', $post->id)}}">
                back
            </a>
        </x-slot>
    </x-user.title>
    <x-post.form :post='$post' action="{{route('user.post.update', $post->id)}}" method="PUT" />
@endsection


