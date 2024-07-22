<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login ZP Music</title>

    <!-- Font Icon -->
    <link
      rel="stylesheet"
      href="/fonts/material-icon/css/material-design-iconic-font.min.css"
    />
    <link rel="shortcut icon" href="https://zpmotos.com/wp-content/uploads/2020/06/ZP-LOGO-GRIS.png" type="image/x-icon">
    <!-- Main css -->
    <link rel="stylesheet" href="/css/style sign.css" />
    <link rel="stylesheet" href="/css/nav.css" />
</head>
<body>
    <div class="main">
        <!-- Sing in  Form -->
        <section class="signup">
            <div class="logo">
                <a class="nav-sign ph-list" href="/">Back to Home</a>
            </div>
            <div class="container">
                <div class="signup-content">
                    <div class="signin-image">
                        <figure>
                            <img src="https://i.pinimg.com/736x/47/3a/b6/473ab6e0b72e2dcab77ce4d20482d88c.jpg" alt="sing up image" />
                        </figure>
                        <a href="{{ route('register') }}" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('login') }}" class="register-form" id="login-form">
                            @csrf

                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    placeholder="Your Email"
                                    :value="old('email')"
                                    required
                                    autofocus
                                    autocomplete="username"
                                />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    placeholder="Password"
                                    required
                                    autocomplete="current-password"
                                />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <input
                                    type="checkbox"
                                    name="remember"
                                    id="remember-me"
                                    class="agree-term"
                                />
                                <label for="remember-me" class="label-agree-term">
                                    <span><span></span></span>Remember me
                                </label>
                            </div>

                            <div class="form-group form-button">
                                <input
                                    type="submit"
                                    name="signin"
                                    id="signin"
                                    class="form-submit"
                                    value="Log in"
                                />
                            </div>

                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                    {{-- Forgot your password? --}}
                                </a>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>
