<!-- extends permet d'heriter du layout de base ayant pour nom master  -->
@extends('layouts/master', ['title' => 'About-us'])

<!-- crete new section to update title : first method --> 
<!-- section('title', 'About Us | Hello City')  -->

<!-- create new section to update title we use environment variable : second method -->
<!-- section('title', 'About Us | '. env('APP_NAME')) -->

 <!-- usage des fichier de configuration pour les titres de page : 3em method -->
 <!-- section('title', 'About Us | '. config('app.name')) -->
 
<!-- section permet de cree du contenu en fonction des diff pages grace a yield du layout de base  -->
@section('content')

        <img src="{{ asset('images/ivanovich.jpg') }} " alt="dev_senior" class="my-10 rounded-full h-80 w-80 shadow-2xl motion-safe:hover:scale-110 ">

        <h2 class="text-gray-500 text-xs sm:text-lg mb-3 ">
                Built with <span class="text-pink-400">&hearts;</span> By <span class="text-black-300 font-bold">Ivan Djatche Jordan</span> Dev Web Laravel Fulstack
        </h2>
                 <!-- use the date function for display the currently time -->
        <p class="text-indigo-400 hover:text-red-500 underline">
                <a href="{{ route('app_home') }}">Revenir à la page d'accueil</a>
        </p>

@endsection


