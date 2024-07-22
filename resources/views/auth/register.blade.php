<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign Up ZP Music</title>

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
        <div class="logo">
            <a class="nav-sign" href="/">Back to Home</a>
        </div>
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signin-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign Up</h2>
                        <form method="POST" action="{{ route('register') }}" class="register-form" id="register-form">
                            @csrf
                            
                            <!-- Name -->
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    placeholder="Your Name"
                                    :value="old('name')"
                                    required
                                    autofocus
                                    autocomplete="name"
                                />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Email Address -->
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    placeholder="Your Email"
                                    :value="old('email')"
                                    required
                                    autocomplete="username"
                                />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    placeholder="Password"
                                    required
                                    autocomplete="new-password"
                                />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group">
                                <label for="password_confirmation"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input
                                    type="password"
                                    name="password_confirmation"
                                    id="password_confirmation"
                                    placeholder="Repeat your password"
                                    required
                                    autocomplete="new-password"
                                />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="form-group form-button">
                                <input
                                    type="submit"
                                    name="signup"
                                    id="signup"
                                    class="form-submit"
                                    value="Register"
                                />
                            </div>

                            <a href="{{ route('login') }}" class="signup-image-link">I am already a member</a>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcYhe9l1IeZYn5_ae6eQEt071EVoqFNgbbug&s" alt="sign up image" />
                        </figure>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
