<!DOCTYPE html>
<html>

<head>
    <title>Custom Auth in Laravel</title>
    @vite('resources/css/app.css')

</head>

<body class="bgi1">


    <header class="relative z-50 w-full flex-none text-sm font-semibold leading-6 text-slate-900">
        <nav aria-label="Global" class="mx-auto max-w-container px-4 sm:px-6 lg:px-8">
            <div class="relative flex items-center py-[2.125rem]"><a class="mr-auto flex-none text-slate-900" href="/"><span class="sr-only-">EMBRACE</span>


                    <div class="hidden- lg:ml-8 lg:flex lg:items-center lg:border-l lg:border-slate-900/15 lg:pl-8"><a href="/login">Sign in</a><a class="inline-flex justify-center rounded-lg text-sm font-semibold py-2.5 px-4 bg-slate-900 text-white hover:bg-slate-700 -my-2.5 ml-8" href="/registration"><span>Register<span aria-hidden="true">→</span></span></a></div>
            </div>
        </nav>
    </header>

    @yield('content')
</body>

</html>