<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Vite</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
 </head>
 <body class="font-sans antialiased">
 <div class="min-h-screen bg-gray-100">
 @include('layouts.navigation')
 <!-- Page Heading -->
 @if (isset($header))
 <header class="bg-white shadow">
 <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
 {{ $header }}
 @if (Session::has('notif.success'))
 <div class="bg-blue-300 mt-2 p-4">
 <span class="text-white">{{ Session::get('notif.success') }}</span>
 </div>
 @endif
 </div>
 </header>
 @endif
 <!-- Page Content -->
 <main>
 {{ $slot }}
 </main>
 </div>
 </body>
</html>