<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if(session()->has('status'))
    <div id=msg class="alert bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full alert-dismissible fade show" role="alert">
  <p class=text-xl>{{session('status')}}</p>
  <button onClick=hidemsg() type="button" class="btn-close box-content w-4 h-4 p-1 ml-auto text-yellow-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif



    <div class='grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 place-items-center px-5 py-10'>
    @foreach($posts as $post)
    <div class='w-72 h-96 mt-5 rounded-md shadow-lg'>
    <div>
        <img src={{$post->img_url}} class='object-cover w-full h-40 rounded-md'>
    </div>
    <div class='px-5 py-2'>
        <p class='text-xs text-gray-300 '>{{$post->created_at->format('Y-m-d')}}</p>
        <p class='text-gray-700 italic capitalize text-sm'>By {{$post->user->name}}</p>
    <h1 class='font-semibold truncate'>{{$post->title}}</h1>
    <p class='line-clamp-5 text-sm'>{{$post->desc}}</p>
    <div class='flex justify-center items-center space-x-3 mt-2                     '>
    <a href="{{url('/post/delete',$post->id)}}" onclick="return confirm('Are you sure? you want to delete this post!')" class='text-red-400 text-center flex items-center hover:bg-red-400 hover:text-white transition duration-300 px-5 py-2 rounded-sm'><span class="material-symbols-outlined">
delete
</span>Delete</a>
    <a href="{{url('/post/edit',$post->id)}}" class='text-blue-400 text-center flex items-center hover:bg-blue-400 hover:text-white transition duration-300 px-5 py-2 rounded-sm'>
    <span class="material-symbols-outlined">
edit_note
</span>Edit
    </a>
    </div>
    </div>
    </div>

    
    
@endforeach
</div>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        fontFamily: {
          sans: ['Inter', 'sans-serif'],
        },
      }
    }
  }
</script>
<script>
    function hidemsg(){
        document.getElementById('msg').classList.add('hidden')
    }
</script>


<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</x-app-layout>
