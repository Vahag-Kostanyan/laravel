@extends('layouts.main')

@section('page.title', 'My post')

@section('main.content')
    <x-title>
        {{ __('My post') }}

        <x-slot name='link'>
            <a href="{{route('user.post')}}">
                back
            </a>
        </x-slot>

        <x-slot name="right">
            <x-button-link href="{{ route('user.post.edit', $post->id) }}">
                {{ __('Edit') }}
            </x-button-link>
        </x-slot>
    </x-title>
    @if (empty($post))
        {{ __('Here no posts') }}
    @else
        <h2 class="h4">
            {{ $post->title }}
        </h2>
        <div class="small text-muted">
            {{ now()->format('d.m.y h:i:s') }}
        </div>
        <div class="pt-3">
            {!! $post->content !!}
        </div>
    @endif

@endsection
