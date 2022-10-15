<!DOCTYPE html>
<html>

<head>
    <title>Custom Auth in Laravel</title>
    @vite('resources/css/app.css')
    <style type="text/css">
        .bgi1 {
            background-image: url(images/logo/back.png);
            background: radial-gradient(ellipse farthest-corner at 90% 90%,
                    red,
                    yellow 10%,
                    #1e90ff 50%,
                    beige);

        }

        .top-right {
            top: 12px;
            right: 12px;
            transition: transform .6s ease-in-out;
            animation: toast-in-right .7s;
        }

        .bottom-right {
            bottom: 12px;
            right: 12px;
            transition: transform .6s ease-in-out;
            animation: toast-in-right .7s;
        }

        .top-left {
            top: 12px;
            left: 12px;
            transition: transform .6s ease-in;
            animation: toast-in-left .7s;
        }

        .bottom-left {
            bottom: 12px;
            left: 12px;
            transition: transform .6s ease-in;
            animation: toast-in-left .7s;
        }

        .success {
            background-color: #5cb85c;
        }

        .danger {
            background-color: #d9534f;
        }

        .info {
            background-color: #5bc0de;
        }

        .warning {
            background-color: #f0ad4e;
        }
    </style>
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