@props(['post'])

<x-form {{$attributes}} style="text-align: left">
    <x-form-item>
        <x-labele required> {{ __('Post name') }} </x-labele>
        <x-input value="{{$post->title ?? '' }}" name="title" autofocus/>
    </x-form-item>

    <x-form-item>
        <x-labele required> {{ __('Post name') }} </x-labele>
        <x-trix value="{{$post->content ?? ''}}" name='content'/>
    </x-form-item>

    <x-button type="submit"> {{__('Create Post')}} </x-button>
</x-form>