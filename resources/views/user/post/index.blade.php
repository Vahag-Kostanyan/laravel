@extends('layouts.main')

@section('page.title', 'My posts')

@section('main.content')
    <x-title>
        {{ __('My posts') }}

        <x-slot name="right">
            <x-button-link href="{{ route('user.post.create') }}">
                {{ __('Create') }}
            </x-button-link>
        </x-slot>
    </x-title>
    @if (empty($posts))
        {{ __('Here no posts') }}
    @else
        @foreach ($posts as $post)
            <div class="mb-5">
                <h2 class="h4">
                    <a href="{{ route('user.post.show', $post->id) }}">
                        {{ $post->title }}
                    </a>
                </h2>
                <div class="small text-muted">
                    {{ now()->format('d.m.y h:i:s') }}
                </div>
            </div>
        @endforeach
    @endif

@endsection
