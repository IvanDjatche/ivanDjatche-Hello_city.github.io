<footer class="">
    
    <!-- use the date function to display years -->
    <p class="text-gray-400">
        &copy; Copyright {{ date('Y')}} 
        <!-- use if condition to display about link  -->
        @if(! Route::is('app_about'))
        &middot; <a href="{{ route('app_about') }}" class="text-indigo-400 hover:text-indigo-700 underline">About-Us</a>
        @endif
    </p>

</footer>