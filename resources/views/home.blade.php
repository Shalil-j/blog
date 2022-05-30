<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
<nav class='flex justify-between items-center px-10 py-2 border-b-2  shadow-sm'>
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

<h1 class='text-5xl  text-gray-600 font-semibold mt-5 pl-10'>Recent Blogs</h1>
<div class='px-5 sm:px-10 md:px-14 lg:px-20 mt-10'>
@foreach($posts as $post)
<div class='flex justify-center items-center w-full h-auto  overflow-hidden my-16 rounded-md'>
<div class='w-1/2 h-fit '>
<img src="{{$post->img_url}}" alt=""
class='w-full h-full object-cover'>
</div>
<div class='w-1/2 px-5 py-5 space-y-3'>
<h1 class='text-3xl font-semibold'>{{$post->title}}</h1>
<p class='text-xs text-gray-900 '>Created at {{$post->created_at->format('Y-m-d')}}</p>
<p class='text-gray-700 italic capitalize text-sm'>By {{$post->user->name}}</p>
<p class='line-clamp-5'>{{$post->desc}}</p>
<p><a href="{{url('/viewblog',$post->id)}}" class='pt-10 font-semibold hover:underline underline-offset-4 decoration-4 decoration-indigo-500 text-xl text-gray-700 
hover:text-indigo-500 transition duration-300'>View more</a></p>
</div>
</div>
@endforeach



</div>



<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</body>
</html>