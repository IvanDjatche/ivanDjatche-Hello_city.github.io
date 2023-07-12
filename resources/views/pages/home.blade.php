<!-- extends permet d'heriter du layout de base ayant pour nom master  -->
@extends('layouts/master')

<!-- create new section to update title -->
<!-- section('title') -->

<!-- section permet de cree du contenu en fonction des diff pages grace a yield du layout de base  -->
@section('content')

        <img src="{{ asset('images/Drapeau_cmr.png') }}" alt="cameroun-flag" class="mt-10 rounded h-60 shadow-2xl">

        <h1 class=" text-1xl sm:text-4xl mt-6 text-indigo-500 font-bold"> Hello from Ouest Region Of Cameroun!!</h1> 
        
         <!-- use the date function for display the currently time -->
        <p class="text-lg text-gray-800 mt-1"> It's currently {{ date('h:i:s A')}}.</p>
        


@endsection

