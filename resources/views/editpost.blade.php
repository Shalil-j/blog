<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Blog') }}
        </h2>
    </x-slot>

    
    

    <div class='flex px-14 py-5 justify-center items-center'>
    <div>
    <form  method='POST' class="border-2 border-dashed border-gray-300 px-5 py-5 rounded-md space-y-4">
        <p class='text-3xl font-semibold capitalize'>Edit Post</p>
        @csrf
        @method('PUT')
        <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-700">Title</label>
                <input  type="text" name="title" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder='Title' value={{$post->title}}>
              </div>
    
        <div>
              <label for="about" class="block text-sm font-medium text-gray-700"> Description </label>
              <div class="mt-1">
                <textarea  id="about" name="desc" rows="6" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 pt-2 pl-2 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Description">{{$post->desc}}</textarea>
              </div>
              
            </div>

            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-3 sm:col-span-2">
                <label for="company-website" class="block text-sm font-medium text-gray-700"> Image URL </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                  <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm"> http:// </span>
                  <input     type="text" name="img_url" id="company-website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="www.example.com" value={{$post->img_url}}                      >
                </div>
              </div>
            </div>
            
            <button  value='submit' class='bg-indigo-500 px-5 py-3 font-semibold w-full rounded-md text-white hover:bg-indigo-800 transition duration-300 '>
                Update
            </button>
    </form>
    </div>
    <div class='hidden md:block'>
        <img src="20860-person-on-laptop-working-on-laptop.gif" alt="" class='w-full h-96'>
    </div>
    </div>



<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</x-app-layout>