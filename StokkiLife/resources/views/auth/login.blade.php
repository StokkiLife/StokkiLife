<x-guest-layout>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheet/stokkilifeLogin.css') }}"> 
    <link rel="icon" href="{{ asset('imgs/stokkilife-logo.png') }}">


    <body>
    <div class="login-container">
        <div class="login-logo">
            <img src="{{ asset('imgs/stokkilife-logo.png') }}" alt="Logo">
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
    
            <div class="form-control">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="form-control">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="form-control">
                <label for="remember_me" class=" text-gray-600">{{ __('Lembrar-me') }}</label>
            <input id="remember_me" type="checkbox" name="remember" class="mr-2">
            </div>

            <div class="form-actions mt-4">
                @if (Route::has('password.request'))
                    <a class="forgot-link" href="{{ route('password.request') }}">
                        {{ __('Esqueci senha') }}
                    </a>
                @endif

                <button type="submit" class="btn-primary">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
    </div>
    </body>
</x-guest-layout>
