@extends('layouts.main')

@section('page.title', 'Page Blog')

@section('main.content')
    <x-title>
        <h1 class="h2 mb-4">Page Blog </h1>
    </x-title>
    @if (empty($posts))
        {{ __('Here no posts') }}
    @else
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-12 col-md-4">
                    <x-post.card :post="$post" />
                </div>
            @endforeach

        </div>
    @endif

@endsection
