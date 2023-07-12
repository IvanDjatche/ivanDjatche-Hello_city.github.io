<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- update title in function page with use yield. we give Hello City as default title -->
                <!-- <title> @yield('title', 'Hello City')</title> -->

                <!-- usage des variables d'environement pour les titres de page : second method
                <title> @yield('title', env('APP_NAME'))</title> -->

                <title>{{ page_title($title ?? null) }}</title>

                <!-- usage des fichier de configuration pour les titres de page : 3em method -->
                <!-- <title> yield('title', config('app.name'))</title> -->

                <!-- using taiwindcss -->
                <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

                <!-- Fonts -->
                <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">     
        </head>

    <body class="py-6 flex flex-col items-center justify-between min-h-screen">

                <!-- === includ main page ===  -->
                @include('layouts.partials.main')
                <!-- === end === -->

                <!-- === includ footer page ===  -->
                @include('layouts.partials.footer')
                <!-- === end === -->
    </body>

</html> 
