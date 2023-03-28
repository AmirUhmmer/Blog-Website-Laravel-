<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    @vite('resources/css/app.css')
    @include('sweetalert::alert')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('illus/quill.png') }}">
</head>
<body class="font-sans font-bold min-h-screen mb-[50px] dark:bg-main_dark dark:text-white">

    @extends('user_profile.alerts')
    @section('content')
    @endsection

    <header class="border-gray-300 border-b h-20 flex w-full justify-between px-4 font-sans font-bold z-10">
        <div class="w-screen font-mono md:text-2xl text-sm tb:text-lg flex items-center">
            <div class="flex">
                <div>
                    <a href={{ url('index') }}>
                        <span class="ml-5 tb:ml-16 lt:ml-48 md:ml-56 hover:cursor-pointer decoration-light_blue hover:text-pink_red hover:underline transition-all duration-150">
                        Write <span class="text-pink_red underline decoration-light_blue hover:text-black dark:hover:text-white hover:no-underline">Stuff</span>
                        </span>
                    </a>
                </div>
                    
                <div>
                    <a href="{{ url('index') }}" class="absolute left-[220px] sm:left-[240px] tb:left-[550px] lt:left-[900px] md:left-[1400px]
                     hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">Home</a>
                </div>

                <div>
                    <a href="{{ url('logout') }}" id="userHeader" class="absolute left-[285px] sm:left-[310px] md:left-[1540px] lt:left-[1000px] tb:left-[650px] 
                    hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">Logout</a>
                </div>

                <div>
                    <img src="illus/moon.png" id="moon" onclick="toggleDark()" class="hidden toggle-dark absolute right-0 pr-2 lt:pr-44 md:pr-56 h-5 tb:h-8 md:h-8 hover:cursor-pointer">
                    <img src="illus/sun.png" id="sun" onclick="toggleDark()" class="hidden toggle-dark absolute right-0 pr-2 lt:pr-44 md:pr-56 h-5 tb:h-8 md:h-8 hover:cursor-pointer">
                </div>
            </div>
           
        </div>
        {{-- <div class="font-mono md:text-2xl text-sm flex items-center">
            <a href="post" class="absolute left-[240px] md:left-[1400px] hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">Browse</a>
            @if (auth()->user())
                    <a href="/user_profile" id="userHeader" class="absolute left-[320px] md:left-[1550px] hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">
                        {{ auth()->user()->username }}
                    </a>
            @else
                <a href="/login" id="userHeader" class="absolute left-[320px] md:left-[1550px] hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">Login</a>
            @endif
            <img src="illus/moon.png" id="moon" onclick="toggleDark()" class="toggle-dark absolute left-[370px] md:left-[1850px] pl-3 md:pl-0 h-5 md:h-10 hover:cursor-pointer">
            <img src="illus/sun.png" id="sun" onclick="toggleDark()" class="toggle-dark absolute left-[370px] md:left-[1850px] pl-3 md:pl-0 h-5 md:h-10 hover:cursor-pointer">
        </div> --}}
    </header>

        <div id="caption1" class="tb:flex w-11/12 items-center">
            <div class="pl-9 lt:pl-60 pt-12 md:pt-11">
                <span>Your Stories</span>
                <div class="pt-3"><span>A compilation of chronicles authored by yourself</span></div>
            </div>

            <div class="mx-auto text-center md:pl-[830px] pt-16 md:pt-11">
                <input type="button" onclick="showAddPost()" class="border-2 border-black dark:bg-green-600 h-11 w-36 rounded-md hover:cursor-pointer hover:shadow-md hover:shadow-black  transition-all duration-150" value="Add Story">
            </div>
        </div>

        <div id="userTable" class="pt-20 tb:pt-24">
            <table class="mx-auto w-11/12 md:w-5/6 table-auto">
                <thead class="border-b-2 border-black dark:border-white text-md md:text-lg">
                    <tr>
                      <th class="pb-5">Title</th>
                      <th class="pb-5 hidden lt:table-cell">Content</th>
                      <th class="pb-5 hidden lt:hidden md:table-cell tb:table-cell">Picture</th>
                    </tr>
                  </thead>
                  <tbody id="userPostsDisplay" class="mx-auto text-center items-center">
                    @if($posts->count())
                        @foreach($posts as $post)
                        <tr class="border-b-2 border-gray-600 dark:border-gray-400">
                        <td id="title" class="">{{ $post->title }}</td>
                        <td id="contentToDisplay" class=" md:max-w-[250px] hidden lt:table-cell">
                            {{ substr($post->content, 0, 120) }}...
                        </td>
                        <td id="content" class="md:w-auto hidden">{{ $post->content }}</td>
                        <td id="pictureDB" class="hidden lt:hidden md:table-cell tb:table-cell"><img src="{{ $post->picture }}" class="h-[120px] mx-auto object-cover"></td>
                        <td class="md:w-1/6 md:pl-1"><input onclick="showEditPost(this)" type="button" name="edit" value="Edit" class="rounded-md text-whish bg-green-600 h-[40px] w-[100px] dark:hover:text-whish hover:cursor-pointer hover:bg-transparent hover:text-black hover:border-[1px] hover:border-green-600 transition-all duration-150" 
                        data-idEdit="{{ $post->id }}" 
                        data-titleEdit="{{ $post->title }}" 
                        data-contentEdit="{{ $post->content }}" 
                        data-pictureEdit="{{ $post->picture }}">
                        </td>
                        <td class="md:w-1/6 md:pr-20"><input onclick="deleteButton(this)" type="button" name="delete" value="Delete" class="rounded-md text-whish bg-red h-[40px] w-[100px] dark:hover:text-whish hover:cursor-pointer hover:bg-transparent hover:text-black hover:border-[1px] hover:border-red transition-all duration-150" 
                        data-id="{{ $post->id }}"
                        data-title="{{ $post->title }}" 
                        data-content="{{ $post->content }}" 
                        data-picture="{{ $post->picture }}">
                        </td>
                        </tr>
                        @endforeach
                    @else
                        <tr class="border-b-2 border-gray-600">
                        <td>No stories to tell</td>
                        </tr>
                    @endif
                  </tbody>
            </table>
        </div>

        <div id="pages" class="tb:w-10/12 tb:pl-10 tb:pr-44 md:pr-0 md:mx-36 md:pl-20 pb-10 pt-10">
            <div class="w-full tb:w-5/6 md:w-1/4 lt:w-2/4 flex-shrink-0 pl-5 pr-5 tb:pl-0 tb:pr-0">
                {{ $posts->links('vendor.pagination.tailwind') }}
            </div>
        </div>
        
        @extends('user_profile.edit_delete_form')
        @section('addForm')
        @endsection

        @section('editForm')
        @endsection


    <img src="dp/up-arrows.png" onclick="scrollToTop()" id="goTop" class="fixed bottom-5 right-5 px-4 py-2 w-20 md:w-24 hover:cursor-pointer hover:animate-bounce">

    
    <script type="text/javascript" src="js/ajax.js"></script>

    <script type="text/javascript" src="js/addPost.js"></script>

    <script type="text/javascript" src="js/preview.js"></script>

    <script type="text/javascript" src="js/editPost.js"></script>
    
    <script type="text/javascript" src="js/deleteButton.js"></script>
   
    
</body>
</html>