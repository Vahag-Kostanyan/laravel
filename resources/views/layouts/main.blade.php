@extends('layouts.base')

@section('content')
<section>
    <x-container>
        <div class="text-center" >
            @yield('main.content')
        </div>
    </x-container>
</section>

@endsection