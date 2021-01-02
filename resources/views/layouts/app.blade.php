<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="flex flex-col h-full">
        <div class="bg-chudo-200 w-full flex justify-center flex-grow-0">
            <div class="container py-4">
                <header class="flex w-full justify-between align-items-center">
                    <h1 class="text-4xl text-chudo-300">CHUDESNOE</h1>
                    <div class="flex justify-content-between align-items-center">
                    <span class="h-6 w-6 mt-2 text-chudo-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                        </svg>
                    </span>
                        <span class="text-3xl">2</span>

                        <span class="text-chudo-400 text-3xl mx-4">300р</span>
                        <button class="bg-chudo-300 shadow tracking-wider uppercase text-xl px-3 py-1  text-white rounded">Заказать</button>
                    </div>
                </header>
            </div>
        </div>

        <div class="bg-chudo-100 flex-grow w-full flex justify-center">
            <div class="container py-4 flex flex-col items-center">
                <h1 class="text-chudo-400 text-4xl">Чудерсное мыло и не только</h1>
                <div>категории</div>
            </div>
        </div>

        <div class="bg-chudo-200 flex-grow-0 w-full flex justify-center">
            <div class="container py-4 flex flex-col items-center">
                footer
            </div>
        </div>
    </div>


    @yield('content')
</body>
</html>
