<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ZP MUSIC</title>
  <link rel="shortcut icon" href="https://zpmotos.com/wp-content/uploads/2020/06/ZP-LOGO-GRIS.png" type="image/x-icon">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Phosphor Icons -->
  <script src="https://unpkg.com/@phosphor-icons/web"></script>

  <!-- Custom Stylesheets -->
  <link rel="stylesheet" href="/css/profil.css" />
  <link rel="stylesheet" href="/css/nav.css" />
</head>
<body>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
      <div class="flex justify-between items-center mb-6">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Profile') }}
        </h2>
        <a href="{{ route('dashboard') }}" class="nav-sign">
          {{ __('Back to Home') }}
        </a>
      </div>

      <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <div class="max-w-xl">
          @include('profile.partials.update-profile-information-form')
        </div>
      </div>

      <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <div class="max-w-xl">
          @include('profile.partials.update-password-form')
        </div>
      </div>

      <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <div class="max-w-xl">
          @include('profile.partials.delete-user-form')
        </div>
      </div>
    </div>
  </div>
</body>
</html>
