<x-guest-layout>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            background: linear-gradient(#9ac41f, #a6d223, #9ac41f);
            min-height: 100vh;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            max-width: 400px;
            margin: 60px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgb(#9ac41f);
            padding: 32px 24px;
        }
        .login-logo img {
            width: 120px;
            margin-bottom: 12px;
            border-radius: 24px;
        }
        .login-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #9ac41f;
            margin-bottom: 24px;
            text-align: center;
        }
        .form-control {
            margin-bottom: 18px;
        }
        .form-control input {
            width: 100%;
            padding: 8px 12px;
            border: 1px solid #9ac41f;
            border-radius: 5px;
            font-size: 1rem;
        }
        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .btn-primary {
            background: #9ac41f;
            color: #fff;
            border: none;
            padding: 10px 24px;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
        }
        .btn-primary:hover {
            background: #7fa01a;
        }
        .forgot-link {
            font-size: 0.95rem;
            color: #666;
            text-decoration: underline;
        }
    </style>
    <body>
    <div class="login-container">
        <div class="login-logo">
            <img src="{{ asset('imgs/stokkilife-logo.png') }}" alt="Logo">
        </div>

        <x-auth-session-status class="mb-4" :status="session('status')" />

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
                <input id="remember_me" type="checkbox" name="remember" class="mr-2">
                <label for="remember_me" class=" text-gray-600">{{ __('Remember me') }}</label>
            </div>

            <div class="form-actions mt-4">
                @if (Route::has('password.request'))
                    <a class="forgot-link" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
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
