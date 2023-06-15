@props(['post'])


<x-form {{ $attributes }} style="text-align: left">
    <x-form-item>
        <x-labele required> {{ __('Post name') }} </x-labele>
        <x-input value="{{ $post->title ?? '' }}" name="title" autofocus />
        <x-error name='title' />
    </x-form-item>

    <x-form-item>
        <x-labele required> {{ __('Post content') }} </x-labele>
        <x-trix value="{{ $post->content ?? '' }}" name='content' />
        <x-error name='content' />
    </x-form-item>

    <x-form-item>
        <x-labele required> {{ __('Post date') }} </x-labele>
        <x-input type='date' placeholder="dd.mm.yyyy" name='published_at' />
        <x-error name='published_at' />
    </x-form-item>

    <x-form-item>
        <x-checkbox name="bublished">
            bublished
        </x-checkbox>
    </x-form-item>
    <x-button type="submit"> {{ __('Create Post') }} </x-button>
</x-form>
