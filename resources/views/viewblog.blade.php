<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<nav class='flex justify-between items-center px-10 py-2 bg-gray-200 shadow-sm'>
    <div>
        <img src="./logo.png" alt="logo" class='w-auto h-14'>
    </div>
    <div class='flex uppercase space-x-5 justify-center items-center'>
        <a href="{{url('/')}}" class='hover:underline underline-offset-4 decoration-4 decoration-red-500 text-xl font-semibold text-gray-700 hover:text-red-500 transition duration-300'>Home</a>
        <a href="{{url('/contact')}}" class='hover:underline underline-offset-4 decoration-4 decoration-red-500 text-xl font-semibold text-gray-700 hover:text-red-500 transition duration-300'>Contact</a>
        <a href="{{ url('/post') }}"  class='hover:underline underline-offset-4 decoration-4 decoration-red-500 text-xl font-semibold text-gray-700 hover:text-red-500 transition duration-300'>Create Blog</a>
      
        @if (Route::has('login'))
                <div class="hidden  top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class='hover:underline underline-offset-4 decoration-4 decoration-red-500 text-xl font-semibold text-gray-700 hover:text-red-500 transition duration-300'>Dashboard</a>
                        
                    @else
                        <a href="{{ route('login') }}" class='hover:underline underline-offset-4 decoration-4 decoration-red-500 text-xl font-semibold text-gray-700 hover:text-red-500 transition duration-300'>Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class='hover:underline underline-offset-4 decoration-4 decoration-red-500 text-xl font-semibold text-gray-700 hover:text-red-500 transition duration-300 pl-3'>Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    </div>
</nav>
    
<div>
@@foreach ($ as $item)
    
@endforeach
</div>




<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>