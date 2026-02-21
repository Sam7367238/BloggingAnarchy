@props(["title" => "Home"])

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite("resources/css/app.css")
</head>
<body class="min-h-screen bg-gradient-to-br from-slate-950 via-slate-900 to-slate-950 font-['Space_Grotesk',_sans-serif] text-slate-100 antialiased">
    <div class="relative min-h-screen">
        <div class="pointer-events-none absolute inset-0 -z-10 overflow-hidden">
            <div class="absolute -top-24 right-10 h-72 w-72 rounded-full bg-red-500/30 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 h-80 w-80 rounded-full bg-rose-500/20 blur-3xl"></div>
        </div>

        <header class="border-b border-white/10 bg-slate-950/70 backdrop-blur">
            <div class="mx-auto flex max-w-5xl items-center justify-between px-6 py-4">
                <a href="/" class="text-lg font-semibold tracking-tight text-white">Blog Anarchy</a>
                <nav class="flex items-center gap-4 text-sm font-medium">
                    <a class="text-slate-300 transition hover:text-white hover:underline hover:decoration-red-400/70 hover:underline-offset-4" href="/">Home</a>
                    <a class="text-slate-300 transition hover:text-white hover:underline hover:decoration-red-400/70 hover:underline-offset-4" href="{{ route('posts.index') }}">Posts</a>
                    @guest
                        <a class="text-slate-300 transition hover:text-white hover:underline hover:decoration-red-400/70 hover:underline-offset-4" href="{{ route('register') }}">Register</a>
                        <a class="text-slate-300 transition hover:text-white hover:underline hover:decoration-red-400/70 hover:underline-offset-4" href="{{ route('login') }}">Log In</a>
                    @endguest

                    @auth
                        <a class="text-slate-300 transition hover:text-white hover:underline hover:decoration-red-400/70 hover:underline-offset-4" href="/">Profile</a>

                        <form method="post" action="{{ route('logout') }}">
                            @csrf
                            @method('POST')

                            <input type="submit" value="Log Out">
                        </form>
                    @endauth
                </nav>
            </div>
        </header>

        <main class="mx-auto max-w-5xl px-6 py-10">
            @session("status")
                <div class="mb-6 rounded-2xl border border-emerald-400/30 bg-emerald-500/10 px-4 py-3 text-sm font-medium text-emerald-200 shadow-sm">
                    {{ session("status") }}
                </div>
            @endsession

            {{ $slot }}
        </main>
    </div>
</body>
</html>
