<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    @vite('resources/css/app.css')
    @include('sweetalert::alert')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('illus/quill.png') }}">
</head>
<body class="font-sans font-bold min-h-screen mb-[50px] dark:bg-main_dark dark:text-white
            scrollbar-thin scrollbar-thumb-card_dark scrollbar-track-gray-300 h-3 overflow-x-auto 
            dark:scrollbar-thumb-gray-300 dark:scrollbar-track-card_dark">

    @extends('user_profile.alerts')
    @section('content')
    @endsection

    <header id="header" class="fixed top-0 transform translate-y-0 transition-transform duration-300 ease-in-out
     bg-white dark:bg-main_dark border-gray-300 border-b h-20 flex w-full justify-between px-4 font-sans font-bold z-10">
        <div id="profileHeaderContent" class="w-screen font-mono text-sm tb:text-lg flex items-center">
            <div class="flex">
                <div>
                    <a href={{ url('index') }}>
                        <span class="ml-5 tb:ml-16 md:ml-56 hover:cursor-pointer decoration-light_blue hover:text-pink_red hover:underline transition-all duration-150">
                        Write <span class="text-pink_red underline decoration-light_blue hover:text-black dark:hover:text-white hover:no-underline">Stuff</span>
                        </span>
                    </a>
                </div>
                    
                <div class="pl-4 absolute right-0 mr-5 tb:mr-16 -mt-2 tb:-mt-1 flex lt:hidden">
                    <button id="dropdownHoverButton"
                    data-dropdown-toggle="dropdownHover" 
                    data-dropdown-trigger="hover" 
                    class="text-white focus:ring-4 focus:outline-none focus:ring-blue-300 
                    font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex 
                    items-center bg-gray-800"
                    type="button">Menu

                    <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'>
                    <svg class="w-4 h-4 ml-2" id="Layer_1" version="1.1" viewBox="0 0 32 32" xml:space="preserve"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,
                    10,4,10z M28,14H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,
                    14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,22,28,22z"/></svg>
                    
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownHover" class="z-10 hidden w-screen  bg-white divide-y divide-gray-100 shadow dark:bg-card_dark">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                        <li>
                            <a href="{{ url('/') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home</a>
                        </li>
                        <li>
                            <a href="{{ url('browse') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Categories</a>
                        </li>
                        <li>
                            <a href="{{ url('logout') }}" id="userHeader" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                Logout
                            </a>
                        </li>
                        <li>
                            <a id="moonMobile" onclick="toggleDark()" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dark Mode</a>
                            <a id="sunMobile" onclick="toggleDark()" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Light Mode</a>
                        </li>
                        </ul>
                    </div>
                </div>

                

                <div class="pl-4 absolute right-0 pr-2 lt:flex hidden">
                    
                    <div>
                        <a href="{{ url('/') }}" class="mr-7 hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">Home</a>
                    </div>

                    <div class="mr-7 ">
                        <a href="{{ url('browse') }}" class="hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">Categories</a>
                        
                        <button id="dropdownHoverButton" 
                        data-dropdown-toggle="dropdownHoverCategories" 
                        data-dropdown-trigger="hover" 
                        class="focus:outline-none focus:ring-blue-300 rounded-lg px-1 py-1 text-center items-center
                      dark:focus:ring-blue-800" type="button">
                            <svg class="w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownHoverCategories" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        @php
                            $CATEGORIES = array('Business Blog', 'DIY craft Blog', 'Fashion and beauty Blog', 'Food Blog', 'Health and Fitness Blog',
                        'Lifestyle Blog', 'Movie Blog', 'Music Blog', 'News Blog', 'Photography Blog', 'Political Blog', 'Sports Blog', 'Travel Blog', 'Other Blog');
                        @endphp
                            <ul class="py-2 dark:bg-card_dark text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                            <li>
                                @foreach($CATEGORIES as $CATEGORY)
                                <a href="{{ route('blogs', ['category' => $CATEGORY, 0, -5]) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    {{ substr($CATEGORY, 0, -5) }}
                                </a>
                                @endforeach
                            </li>
                            </ul>
                        </div>
                    </div>
    
                    <div>
                        <a href="{{ url('logout') }}" id="userHeader" class="mr-7 hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">Logout</a>
                    </div>
                    <img src="../illus/moon.png" id="moon" onclick="toggleDark()" class="hidden toggle-dark tb:pr-16 md:pr-56 h-5 tb:h-8 md:h-8 hover:cursor-pointer">
                    <img src="../illus/sun.png" id="sun" onclick="toggleDark()" class="hidden toggle-dark ltb:pr-16 md:pr-56 h-5 tb:h-8 md:h-8 hover:cursor-pointer">
                </div>
            </div>
        </div>

        <div id="profileHeaderLoader" class="hidden animate-pulse">
            <div class="w-screen font-mono md:text-2xl text-sm tb:text-lg flex items-center pt-8">
                <div class="ml-5 tb:ml-16 lt:ml-48 md:ml-56 h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-16 md:w-32 sm:w-20"></div>
                        
                <div class="ml-24 tb:ml-80 lt:ml-[570px] md:ml-[950px] h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-16 md:w-32 sm:w-20"></div>

                <div class="ml-5 sm:ml-3 tb:ml-10 lt:ml-7 md:ml-7 h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-16 md:w-32 sm:w-20"></div>
                        
            </div>
        </div>
    </header>

        <div id="profileCaptionContent" class="pt-14 md:pt-20 tb:flex w-11/12 items-center">
            <div class="pl-9 tb:pl-28 lt:pl-60 pt-12 md:pt-11">
                <span>User Stories</span>
                <div class="pt-3"><span>A compilation of chronicles authored by the community</span></div>
            </div>

            <div class="mx-auto text-center pl-10 md:pl-[830px] pt-16 md:pt-11">
                <input type="button" onclick="showAddPost()" class="border-2 border-black dark:bg-green-600 h-11 w-36 
                rounded-md hover:cursor-pointer hover:shadow-md hover:shadow-black  transition-all duration-150" value="Add Story">
            </div>
        </div>

        <div id="profileCaptionLoader" class="pt-14 md:pt-20 tb:flex w-11/12 items-center animate-pulse hidden">
            <div class="pl-9 lt:pl-60 pt-12 md:pt-11">
                <div class="h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-24"></div>
                <div class="pt-5">
                    <div class="h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-52 sm:w-80"></div>
                </div>
            </div>
            

            <div class="pl-24 sm:pl-32 tb:pl-28 md:pl-[830px] pt-16 md:pt-11">
                <div class="h-10 bg-gray-200 rounded-lg dark:bg-gray-700 w-36"></div>
            </div>
        </div>
        
        {{-- <div class="pl-9 tb:pl-28 lt:pl-60 pt-16">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" 
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path 
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="search" id="searchAdmin" class="block w-[270px] tb:w-[400px] p-4 pl-10 
                text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 
                focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 
                dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                placeholder="Search Titles, Authors, Categories..." required>
            </div>
            <div id="searchResultAdmin" class="hidden -mt-1 w-[400px] bg-white divide-y divide-gray-100 shadow dark:bg-card_dark">
                <ul id="searchResultList" class="py-2 text-sm text-gray-700 dark:text-gray-200">
                    
                </ul>
            </div>
        </div> --}}

        <div id="userTable" class="pt-20">         
            <div class="mx-auto w-11/12 md:w-4/5 overflow-x-auto shadow-md rounded-lg  
            scrollbar-thin scrollbar-thumb-card_dark scrollbar-track-gray-300
            dark:scrollbar-thumb-gray-300 dark:scrollbar-track-card_dark">
                <div>
                    {{-- edit errors --}}
                    @error('pictureToEdit')
                        <p class="text-pink_red font-bold text-xs mb-1">{{ $message }}</p>
                    @enderror

                    @error('titleToEdit')
                        <p class="text-pink_red font-bold text-xs mb-1">{{ $message }}</p>
                    @enderror

                    @error('contentToEdit')
                        <p class="text-pink_red font-bold text-xs mb-1">{{ $message }}</p>
                    @enderror

                    {{-- add errors --}}
                    @error('picture')
                        <p class="text-pink_red font-bold text-xs mb-1">{{ $message }}</p>
                    @enderror

                    @error('title')
                        <p class="text-pink_red font-bold text-xs mb-1">{{ $message }}</p>
                    @enderror

                    @error('content')
                        <p class="text-pink_red font-bold text-xs mb-1">{{ $message }}</p>
                    @enderror
                </div>
                    <table class="mx-auto w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-center text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left">
                                    Title
                                </th>
                                <th scope="col" class="px-6 py-3 hidden tb:table-cell">
                                    Content
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Picture
                                </th>
                                <th scope="col" class="px-6 py-3 text-left hidden tb:table-cell">
                                    Author
                                </th>
                                <th scope="col" class="px-6 py-3 text-left">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody id="postTable">
                            @if($posts->count())
                                @foreach($posts as $post)
                                    <tr class="bg-gray-50 border-b dark:bg-card_dark dark:border-card_dark hover:bg-whish dark:hover:bg-gray-800">
                                        <td class="px-6 tb:py-4 font-medium max-w-sm text-gray-900 dark:text-white">
                                            {{ $post->title }}
                                        </td>
                                        <td class="px-6 tb:py-4 hidden tb:table-cell max-w-sm">
                                            {{ substr($post->content, 0, 120) }}
                                        </td>
                                        <td id="content" class="md:w-auto hidden">{{ $post->content }}</td>
                                        <td class="px-6 tb:py-4">
                                            <img src="{{ $post->picture }}" class="h-[120px] mx-auto object-cover">
                                        </td>
                                        <td class="px-6 tb:py-4 hidden tb:table-cell max-w-sm">
                                            {{ $post->username }}
                                        </td>
                                        <td class="px-6 tb:py-4">
                                            @if ($post->username == 'Write Stuff')
                                                <a onclick="showEditPost(this)" class="font-medium hover:cursor-pointer text-blue-600 dark:text-blue-500 hover:underline pr-3" 
                                                data-idEdit="{{ $post->id }}" 
                                                data-titleEdit="{{ $post->title }}" 
                                                data-contentEdit="{{ $post->content }}" 
                                                data-pictureEdit="{{ $post->picture }}"
                                                data-categoryEdit="{{ $post->category }}" >
                                                Edit
                                                </a>
                                            @else
                                                <a href="{{ route('full_story', ['post_id' => $post->id]) }}"  
                                                class="font-medium hover:cursor-pointer text-green-600 dark:text-green-600 hover:underline pr-3">
                                                View
                                                </a>
                                            @endif
                                            
                                            <a onclick="deleteButton(this)" class="font-medium hover:cursor-pointer text-pink_red hover:underline"
                                                data-id="{{ $post->id }}">
                                                Delete
                                            </a>
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
        </div>

        <div id="userTableLoader" class="mx-auto p-4 space-y-4  divide-y divide-gray-200
         rounded shadow animate-pulse dark:divide-gray-700 md:p-6 dark:border-gray-700 w-11/12 md:w-5/6">
            <div class="flex items-center justify-between pt-20 tb:pt-24">
            </div>
            <div class="flex items-center justify-between pt-4">
                <div class="tb:flex lt:space-x-2">
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                    <div class="w-32 h-2.5 bg-gray-200 rounded-full dark:bg-gray-700"></div>
                </div>
                <div class="lt:flex space-x-3 hidden">
                    <div class="h-2.5 w-10 bg-gray-300 rounded-lg dark:bg-gray-700 "></div>
                    <div class="h-2.5 w-24 bg-gray-200 rounded-lg dark:bg-gray-600"></div>
                    <div class="h-2.5 w-14 bg-gray-200 rounded-lg dark:bg-gray-600"></div>
                </div>
                <div class="lt:flex space-x-3 hidden">
                    <div class="h-2.5 w-20 bg-gray-300 rounded-lg dark:bg-gray-700 "></div>
                    <div class="h-2.5 w-10 bg-gray-200 rounded-lg dark:bg-gray-600"></div>
                    <div class="h-2.5 w-14 bg-gray-200 rounded-lg dark:bg-gray-600"></div>
                </div>
                <div class="flex space-x-1 tb:space-x-10">
                    <div class="h-10 bg-gray-200 rounded-lg dark:bg-gray-600 w-20 tb:w-24"></div>
                    <div class="h-10 bg-gray-300 rounded-lg dark:bg-gray-700 w-20 tb:w-24"></div>
                </div>
            </div>

            <div class="flex items-center justify-between pt-4">
                <div class="tb:flex lt:space-x-2">
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                    <div class="w-32 h-2.5 bg-gray-200 rounded-full dark:bg-gray-700"></div>
                </div>
                <div class="lt:flex space-x-3 hidden">
                    <div class="h-2.5 w-10 bg-gray-300 rounded-lg dark:bg-gray-700 "></div>
                    <div class="h-2.5 w-24 bg-gray-200 rounded-lg dark:bg-gray-600"></div>
                    <div class="h-2.5 w-14 bg-gray-200 rounded-lg dark:bg-gray-600"></div>
                </div>
                <div class="lt:flex space-x-3 hidden">
                    <div class="h-2.5 w-20 bg-gray-300 rounded-lg dark:bg-gray-700 "></div>
                    <div class="h-2.5 w-10 bg-gray-200 rounded-lg dark:bg-gray-600"></div>
                    <div class="h-2.5 w-14 bg-gray-200 rounded-lg dark:bg-gray-600"></div>
                </div>
                <div class="flex space-x-1 tb:space-x-10">
                    <div class="h-10 bg-gray-200 rounded-lg dark:bg-gray-600 w-20 tb:w-24"></div>
                    <div class="h-10 bg-gray-300 rounded-lg dark:bg-gray-700 w-20 tb:w-24"></div>
                </div>
            </div>

            <div class="flex items-center justify-between pt-4">
                <div class="tb:flex lt:space-x-2">
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                    <div class="w-32 h-2.5 bg-gray-200 rounded-full dark:bg-gray-700"></div>
                </div>
                <div class="lt:flex space-x-3 hidden">
                    <div class="h-2.5 w-10 bg-gray-300 rounded-lg dark:bg-gray-700 "></div>
                    <div class="h-2.5 w-24 bg-gray-200 rounded-lg dark:bg-gray-600"></div>
                    <div class="h-2.5 w-14 bg-gray-200 rounded-lg dark:bg-gray-600"></div>
                </div>
                <div class="lt:flex space-x-3 hidden">
                    <div class="h-2.5 w-20 bg-gray-300 rounded-lg dark:bg-gray-700 "></div>
                    <div class="h-2.5 w-10 bg-gray-200 rounded-lg dark:bg-gray-600"></div>
                    <div class="h-2.5 w-14 bg-gray-200 rounded-lg dark:bg-gray-600"></div>
                </div>
                <div class="flex space-x-1 tb:space-x-10">
                    <div class="h-10 bg-gray-200 rounded-lg dark:bg-gray-600 w-20 tb:w-24"></div>
                    <div class="h-10 bg-gray-300 rounded-lg dark:bg-gray-700 w-20 tb:w-24"></div>
                </div>
            </div>

            <div class="flex items-center justify-between pt-4">
                <div class="tb:flex lt:space-x-2">
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                    <div class="w-32 h-2.5 bg-gray-200 rounded-full dark:bg-gray-700"></div>
                </div>
                <div class="lt:flex space-x-3 hidden">
                    <div class="h-2.5 w-10 bg-gray-300 rounded-lg dark:bg-gray-700 "></div>
                    <div class="h-2.5 w-24 bg-gray-200 rounded-lg dark:bg-gray-600"></div>
                    <div class="h-2.5 w-14 bg-gray-200 rounded-lg dark:bg-gray-600"></div>
                </div>
                <div class="lt:flex space-x-3 hidden">
                    <div class="h-2.5 w-20 bg-gray-300 rounded-lg dark:bg-gray-700 "></div>
                    <div class="h-2.5 w-10 bg-gray-200 rounded-lg dark:bg-gray-600"></div>
                    <div class="h-2.5 w-14 bg-gray-200 rounded-lg dark:bg-gray-600"></div>
                </div>
                <div class="flex space-x-1 tb:space-x-10">
                    <div class="h-10 bg-gray-200 rounded-lg dark:bg-gray-600 w-20 tb:w-24"></div>
                    <div class="h-10 bg-gray-300 rounded-lg dark:bg-gray-700 w-20 tb:w-24"></div>
                </div>
            </div>

            <div class="flex items-center justify-between pt-4">
                <div class="tb:flex lt:space-x-2">
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                    <div class="w-32 h-2.5 bg-gray-200 rounded-full dark:bg-gray-700"></div>
                </div>
                <div class="lt:flex space-x-3 hidden">
                    <div class="h-2.5 w-10 bg-gray-300 rounded-lg dark:bg-gray-700 "></div>
                    <div class="h-2.5 w-24 bg-gray-200 rounded-lg dark:bg-gray-600"></div>
                    <div class="h-2.5 w-14 bg-gray-200 rounded-lg dark:bg-gray-600"></div>
                </div>
                <div class="lt:flex space-x-3 hidden">
                    <div class="h-2.5 w-20 bg-gray-300 rounded-lg dark:bg-gray-700 "></div>
                    <div class="h-2.5 w-10 bg-gray-200 rounded-lg dark:bg-gray-600"></div>
                    <div class="h-2.5 w-14 bg-gray-200 rounded-lg dark:bg-gray-600"></div>
                </div>
                <div class="flex space-x-1 tb:space-x-10">
                    <div class="h-10 bg-gray-200 rounded-lg dark:bg-gray-600 w-20 tb:w-24"></div>
                    <div class="h-10 bg-gray-300 rounded-lg dark:bg-gray-700 w-20 tb:w-24"></div>
                </div>
            </div>

            <div class="flex items-center justify-between pt-4">
                <div class="tb:flex lt:space-x-2">
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                    <div class="w-32 h-2.5 bg-gray-200 rounded-full dark:bg-gray-700"></div>
                </div>
                <div class="lt:flex space-x-3 hidden">
                    <div class="h-2.5 w-10 bg-gray-300 rounded-lg dark:bg-gray-700 "></div>
                    <div class="h-2.5 w-24 bg-gray-200 rounded-lg dark:bg-gray-600"></div>
                    <div class="h-2.5 w-14 bg-gray-200 rounded-lg dark:bg-gray-600"></div>
                </div>
                <div class="lt:flex space-x-3 hidden">
                    <div class="h-2.5 w-20 bg-gray-300 rounded-lg dark:bg-gray-700 "></div>
                    <div class="h-2.5 w-10 bg-gray-200 rounded-lg dark:bg-gray-600"></div>
                    <div class="h-2.5 w-14 bg-gray-200 rounded-lg dark:bg-gray-600"></div>
                </div>
                <div class="flex space-x-1 tb:space-x-10">
                    <div class="h-10 bg-gray-200 rounded-lg dark:bg-gray-600 w-20 tb:w-24"></div>
                    <div class="h-10 bg-gray-300 rounded-lg dark:bg-gray-700 w-20 tb:w-24"></div>
                </div>
            </div>

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

    <script type="text/javascript" src="js/loaders.js"></script>

    <script type="text/javascript">profileLoader();</script>
   
    <script type="text/javascript" src="js/headers.js"></script>

    {{-- <script type="text/javascript" src="js/searchDashboard.js"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>