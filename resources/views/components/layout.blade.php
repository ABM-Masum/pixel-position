<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="px-10 pb-20 bg-black text-white font-hanken-grotesk">
<nav class="flex justify-between items-center py-4 border-b border-b-white/10">
    <div>
        <a href="/">
            <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
        </a>
    </div>

    <div class="space-x-6 font-bold">
        <x-nav-link :active="request()->is('/')" href="/">Jobs</x-nav-link>
        <x-nav-link :active="request()->is('#')" href="#">Careers</x-nav-link>
        <x-nav-link :active="request()->is('#')" href="#">Salaries</x-nav-link>
        <x-nav-link :active="request()->is('companies')" href="/companies">Companies</x-nav-link>
    </div>

    @auth()
        <div class="space-x-6 font-bold flex">
            <x-nav-link :active="request()->is()" href="/jobs/create">Post a Job</x-nav-link>

            <form method="POST" action="/logout">
                @csrf
                @method('DELETE')
                <x-nav-link type="button">Log Out</x-nav-link>
            </form>
        </div>
    @endauth

    @guest()
        <div class="space-x-6 font-bold">
            <x-nav-link :active="request()->is()" href="/registration">Sign Up</x-nav-link>
            <x-nav-link :active="request()->is()" href="/login">Log In</x-nav-link>
        </div>
    @endguest
</nav>

<main class="mt-10 max-w-[986px] mx-auto">
    {{$slot}}
</main>
</body>
</html>
