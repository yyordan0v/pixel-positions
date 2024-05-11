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

    @vite(['resources/css/app.css', 'resources/css/app.css'])
</head>
<body class="bg-black text-white font-hanken-grotesk">
<div class="px-10">
    <nav class="flex justify-between items-center py-4 border-b border-white/10">
        <div>
            <a href="/">
                <img src="{{  Vite::asset('resources/images/logo.svg') }}" alt="Pixel Positions Logo">
            </a>
        </div>

        <div class="space-x-6 font-bold">
            <a href="/">Jobs</a>
            <a href="#">Careers</a>
            <a href="#">Contact</a>
        </div>

        <div>
            <div class="inline-flex items-center gap-x-2">
                @auth()
                    <span class="w-2 h-2 bg-blue-500 inline-block"></span>
                    <h3 class="font-bold">
                        <a href="{{ route('jobs.create') }}">Post a Job</a>
                    </h3>
                    <div class="ml-10 font-bold">
                        <form action="/logout" method="POST">
                            @csrf
                            @method('DELETE')

                            <button>Log Out</button>
                        </form>
                    </div>
                @endauth

                @guest()
                    <div class="space-x-6 font-bold">
                        <a href="{{ route('register') }}">Register</a>
                        <a href="{{ route('login') }}">Log In</a>
                    </div>
                @endguest
            </div>
        </div>
    </nav>

    <main class="mt-10 max-w-[986px] mx-auto">
        {{ $slot }}
    </main>
</div>
</body>
</html>
