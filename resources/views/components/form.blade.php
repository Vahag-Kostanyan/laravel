@props(['method' => 'POST'])

@php($method = strtoupper($method))

@php($_method = in_array($method, ['GET', 'POST']))

<form {{ $attributes }} method="{{ $_method ? $method : 'POST' }}" class="text-left">
    @csrf
    @unless ($_method)
        @method(strtoupper($method))
    @endunless
    {{ $slot }}
</form>
