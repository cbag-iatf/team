<!DOCTYPE html>
<html lang="en" class="form-screen">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Admin One Tailwind CSS Admin Dashboard</title>

    <!-- Tailwind is included -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/form/main.css') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#00b4b6" />

    <meta name="description" content="Admin One - free Tailwind dashboard">

    <meta property="og:url" content="https://justboil.github.io/admin-one-tailwind/">
    <meta property="og:site_name" content="JustBoil.me">
    <meta property="og:title" content="Admin One HTML">
    <meta property="og:description" content="Admin One - free Tailwind dashboard">
    <meta property="og:image" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1920">
    <meta property="og:image:height" content="960">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Admin One HTML">
    <meta property="twitter:description" content="Admin One - free Tailwind dashboard">
    <meta property="twitter:image:src" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png">
    <meta property="twitter:image:width" content="1920">
    <meta property="twitter:image:height" content="960">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130795909-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-130795909-1');
    </script>

</head>

<body>

    <div id="app">

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <section class="section main-section">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon"><i class="mdi mdi-lock"></i></span>
                        Login
                    </p>
                </header>
                <div class="card-content">
                    <form method="POST" action="{{ route('login') }}">

                        @csrf

                        <div class="field spaced">
                            <label class="label">Login</label>
                            <div class="control icons-left">
                                <input class="input" type="email" name="email" id="email"
                                    placeholder="user@example.com" autocomplete="email">
                                <span class="icon is-small left"><i class="mdi mdi-account"></i></span>
                            </div>
                            {{-- <p class="help">
                                Please enter your login
                            </p> --}}
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="field spaced">
                            <label class="label">Password</label>
                            <p class="control icons-left">
                                <input class="input" type="password" id="password" name="password"
                                    placeholder="Password" autocomplete="current-password">
                                <span class="icon is-small left"><i class="mdi mdi-asterisk"></i></span>
                            </p>
                            {{-- <p class="help">
                                Please enter your password
                            </p> --}}
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />

                        </div>
                        {{-- 
                        <div class="field spaced">
                            <div class="control">
                                <label class="checkbox"><input type="checkbox" name="remember" value="1" checked>
                                    <span class="check"></span>
                                    <span class="control-label">Remember</span>
                                </label>
                            </div>
                        </div> --}}

                        <hr>

                        <div class="field grouped">
                            <div class="control">
                                <button type="submit" class="button blue">
                                    Login
                                </button>
                            </div>
                            {{-- <div class="control">
                                <a href="index.html" class="button">
                                    Back
                                </a>
                            </div> --}}
                        </div>

                    </form>
                </div>
            </div>

        </section>


    </div>

    <!-- Scripts below are for demo only -->
    <script type="text/javascript" src=" {{ asset('assets/js/main.js') }}"></script>

    {{-- <script type="text/javascript" src="js/main.min.js?v=1628755089081"></script> --}}


    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '658339141622648');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=658339141622648&ev=PageView&noscript=1" /></noscript>

    <!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

</body>

</html>




{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
               Se connecter
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
