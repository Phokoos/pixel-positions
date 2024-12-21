<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">

    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="bg-black pb-20 text-white font-hanken-grotesk">
<div class="px-10">
    <nav class="flex items-center justify-between border-b border-white/10 py-4">
        <div class="">
            <a href="/">
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
            </a>
        </div>
        <div class="font-bold space-x-6">
            <a href="/jobs">Jobs</a>
            <a href="#">Careers</a>
            <a href="#">Salaries</a>
            <a href="#">Companies</a>
        </div>
        @auth
            <div class="flex space-x-6">
                <a href="{{route('jobs.create')}}">Post a Job</a>
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button>Log Out</button>
                </form>
            </div>
        @else
            <div class="space-x-6">
                <a href="{{route('login.create')}}">Log In</a>
                <a href="{{route('register.create')}}">Register</a>
            </div>
        @endauth
    </nav>


    <main class="mx-auto mt-10 max-w-[986px]">
        {{$slot}}
    </main>

</div>
</body>
</html>
