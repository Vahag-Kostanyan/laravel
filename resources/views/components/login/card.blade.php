<x-card>
    <x-card-header>
        <x-card-title>
            {{ __('Login') }}
        </x-card-title>
        <x-slot name="right">
            <a href="{{ route('register') }}">
                {{ __('registration') }}
            </a>
        </x-slot>
    </x-card-header>
    <x-card-body>
        <x-form action="{{ route('login.store') }}" method="POST">
            <x-form-item>
                <x-labele required> {{ __('Email') }} </x-labele>
                <x-input type="email" name="email" autofocus />
            </x-form-item>
            <x-form-item>
                <x-labele required> {{ __('Password') }} </x-labele>
                <x-input id="password" type="password" name="password" />
            </x-form-item>

            <x-form-item>
                <x-checkbox>
                    {{ __('Remember me') }}
                </x-checkbox>
            </x-form-item>

            <x-button type="submit">
                {{ __('Login') }}
            </x-button>
        </x-form>
    </x-card-body>
</x-card>