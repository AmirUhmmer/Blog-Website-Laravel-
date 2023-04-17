<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write Stuff</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    @include('sweetalert::alert')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('illus/quill.png') }}">
</head>
<body class="font-sans font-bold min-h-screen dark:bg-main_dark dark:text-whish 
    scrollbar-thin scrollbar-thumb-card_dark scrollbar-track-gray-300 h-3 overflow-x-auto 
    dark:scrollbar-thumb-gray-300 dark:scrollbar-track-card_dark">

    @extends('index.index_alert')
    @section('successSignUp')
    @endsection

    @section('successSignIn')
    @endsection
    
   <header id="header" class="fixed top-0 transform translate-y-0 transition-transform duration-300 ease-in-out
     bg-white dark:bg-main_dark border-gray-300 border-b h-20 flex w-full justify-between px-4 font-sans font-bold z-10">
        <div id="headerContent" class="w-screen font-mono text-sm tb:text-lg flex items-center">
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
                            @if (auth()->user())
                                @if (auth()->user()->username != 'admin')
                                <a href="{{ url('user_profile') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        {{ auth()->user()->username }}
                                </a>
                                <a href="{{ url('logout') }}" id="userHeader" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Logout
                                </a>
                                @else
                                <a href="{{ url('admin') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        {{ auth()->user()->username }}
                                </a>
                                <a href="{{ url('logout') }}" id="userHeader" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Logout
                                </a>
                                @endif
                                    
                            @else
                                <a href="{{ url('login') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Login</a>
                            @endif
                        </li>
                        <li>
                            <a href="{{ url('blogs/All Blog') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">All Blog</a>
                        </li>
                        <li>
                            <a href="{{ url('browse') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Categories</a>
                        </li>
                        <li>
                            <a id="moonMobile" onclick="toggleDark()" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dark Mode</a>
                            <a id="sunMobile" onclick="toggleDark()" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Light Mode</a>
                        </li>
                        </ul>
                    </div>
                </div>

                

                <div class="pl-4 absolute right-0 pr-2 lt:flex hidden">

                    <div class="mr-7">
                            <form action="searchPage" method="get">
                                @csrf
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" 
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path 
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                    </div>
                                    <input type="search" id="search" name="search" autocomplete="off" class="block tbl:-mt-3 ltl:-mt-5 md:-mt-3 w-[400px] p-4 pl-10 
                                    text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 
                                    focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 
                                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                    placeholder="Search Titles, Authors, Categories...">
                                </div>
                            </form>
                            <div id="searchResult" class="hidden -mt-1 w-[400px] bg-white divide-y divide-gray-100 shadow dark:bg-card_dark">
                                <ul id="searchResultList" class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                    
                                </ul>
                            </div>
                    </div>
                    
                    <div>
                        <a href="{{ url('blogs/All Blog') }}" class="mr-7 hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">All Blog</a>
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
                    @if (auth()->user())
                        @if (auth()->user()->username != 'admin')
                            <a href="/user_profile" id="userHeader" class="mr-7 hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">
                                {{ auth()->user()->username }}
                            </a>
                        @else
                            <a href="/admin" id="userHeader" class="mr-7 hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">
                                {{ auth()->user()->username }}
                            </a>
                        @endif
                            
                    @else
                        <a href="{{ url('login') }}" id="userHeader" class="mr-7 hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">Login</a>
                    @endif
                    </div>
                    <img src="../illus/moon.png" id="moon" onclick="toggleDark()" class="hidden toggle-dark tb:pr-16 md:pr-56 h-5 tb:h-8 md:h-8 hover:cursor-pointer">
                    <img src="../illus/sun.png" id="sun" onclick="toggleDark()" class="hidden toggle-dark tb:pr-16 md:pr-56 h-5 tb:h-8 md:h-8 hover:cursor-pointer">
                </div>
            </div>
        </div>

        <div id="headerLoader" class="hidden animate-pulse">
            <div class="w-screen font-mono md:text-2xl text-sm tb:text-lg flex items-center pt-8">
                <div class="ml-5 tb:ml-16 lt:ml-48 md:ml-56 h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-16 md:w-32 sm:w-20"></div>
                        
                <div class="ml-24 tb:ml-80 lt:ml-[570px] md:ml-[950px] h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-16 md:w-32 sm:w-20"></div>

                <div class="ml-5 sm:ml-3 tb:ml-10 lt:ml-7 md:ml-7 h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-16 md:w-32 sm:w-20"></div>
                        
            </div>
        </div>

    </header>
    
    <div id="indexCaptionContent" class="flex mx-auto justify-center pt-16 items-center h-fit z-0 max-w-screen">
        <span class="absolute text-center tb:text-xl tb:mx-32 tb:-mt-[480px] lt:mx-0 lt:text-left lt:-mt-72 -mt-64 md:text-3xl lt:left-20 md:left-60 md:-mt-80">
            Enjoy the thrill of sharing and reading outstanding content.</span>
        <span class="absolute hidden lt:block text-center mt-96 lt:text-left lt:left-20 lt:-mt-16 md:left-60 md:-mt-16 lt:w-[600px]">
            Write Stuff is a community-driven blog platform where users can share their unique perspectives and ideas with the world. 
            Join us and discover a diverse range of topics from creative writing to thought-provoking discussions. Connect with like-minded 
            individuals, engage in meaningful contents, and inspire others with your words. Start writing today and share your voice with the world.</span>
        <img src="illus/Collab-pana.png" class="mx-auto object-cover lt:ml-[590px] md:ml-[900px] h-[400px] tb:h-[700px] md:h-[800px]">
    </div>

    <div id="indexCaptionLoader" class="pt-16 md:pt-80 animate-pulse hidden">
        <div class="flex items-center h-fit z-0">
            <div class="absolute md:w-[840px] text-center tb:text-xl tb:mx-32 tb:-mt-[480px] lt:mx-0 lt:text-left lt:-mt-72 -mt-64 md:text-3xl lt:left-20 md:left-52 md:-mt-80
            h-8 rounded-full bg-gray-200 dark:bg-gray-700">
                </div>
            <div class="absolute hidden lt:block text-center mt-96 lt:text-left lt:left-24 lt:-mt-16 md:left-56 md:-mt-16 lt:w-[600px]">
                <div class="flex items-center w-full space-x-2">
                    <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-32"></div>
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24"></div>
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
                </div>
                <div class="flex items-center w-full space-x-2 pt-2 max-w-[480px]">
                    <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full"></div>
                            <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24"></div>
                </div>
                <div class="flex items-center w-full space-x-2 max-w-[400px] pt-2 ">
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
                    <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-80"></div>
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
                </div>
                <div class="flex items-center w-full space-x-2 max-w-[480px] pt-2 ">
                    <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full"></div>
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24"></div>
                </div>
                <div class="flex items-center w-full space-x-2 max-w-[440px] pt-2 ">
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-32"></div>
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24"></div>
                    <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full"></div>
                </div>
                <div class="flex items-center w-full space-x-2 max-w-[400px] pt-2 ">
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
                    <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-80"></div>
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
                </div>
                <div class="flex items-center w-full space-x-2 max-w-[480px] pt-2 ">
                    <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full"></div>
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24"></div>
                </div>
                <div class="flex items-center w-full space-x-2 max-w-[440px] pt-2 ">
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-32"></div>
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24"></div>
                    <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full"></div>
                </div>
            </div>
            <svg class="mx-auto object-cover lt:ml-[590px] md:ml-[1100px] h-[400px] tb:h-[700px] md:h-[300px] text-gray-200 dark:text-gray-600"
            xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="currentColor" viewBox="0 0 640 512">
                    <path d="M480 80C480 35.82 515.8 0 560 0C604.2 0 640 35.82 640 80C640 124.2 604.2 160 560 160C515.8 160 480 124.2 480 80zM0 456.1C0 445.6 2.964 
                    435.3 8.551 426.4L225.3 81.01C231.9 70.42 243.5 64 256 64C268.5 64 280.1 70.42 286.8 81.01L412.7 281.7L460.9 202.7C464.1 196.1 472.2 192 
                    480 192C487.8 192 495 196.1 499.1 202.7L631.1 419.1C636.9 428.6 640 439.7 640 450.9C640 484.6 612.6 512 578.9 512H55.91C25.03 512 .0006
                    486.1 .0006 456.1L0 456.1z"/></svg>
            </svg>
        </div>
    </div>


    <div id="indexCaptionContent1" class="ml-5 md:ml-60 font-extrabold md:text-xl pb-10">
        <span>FEATURED POSTS</span>
    </div>

    <div id="indexCaptionLoader1" class="ml-5 md:ml-60 h-5 bg-gray-300 rounded-full dark:bg-gray-600 w-40 animate-pulse hidden"></div>

    {{-- CARDS --}}
    <div id="indexCardContent">
        <div class="flex flex-wrap gap-1 md:w-10/12 md:mx-36 md:pl-20 pb-1"> 
            @if($data->count())
                @foreach ($data as $post)       
                <div class="w-11/12 tb:w-fit mx-auto tb:min-w-[384px] mb:min-h-[342px]">
                    <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5 dark:border-card_dark">
                        <img class="rounded-t-lg max-h-[382px] min-h-[382px] w-full object-cover" src="{{$post->picture}}" alt="">
                        <div class="p-5 dark:bg-card_dark">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2 dark:text-white">{{substr($post->title, 0, 53)}}</h5>
                            <div class="w-fit h-fit border-2 border-gray-900 dark:border-gray-700 rounded-md transition-all duration-150
                             hover:cursor-pointer hover:bg-gray-900 hover:text-whish dark:hover:text-whish dark:hover:bg-gray-700">
                                <a href="{{ route('blogs', ['category' => $post->category]) }}" class="p-3">
                                    {{$post->category}}
                                </a>
                            </div>
                            <p class="pt-2 font-normal text-gray-700 text-justify mb-3 dark:text-whish">{{substr($post->content, 0, 300)}}... </p>

                                <a href="{{ route('full_story', ['post_id' => $post->id]) }}" 
                                    class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4  transition-all duration-150
                                    focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="#">
                                    Read more
                                </a>
                            
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <div class="w-11/12 tb:w-fit mx-auto">
                    <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5 dark:border-card_dark">
                        <img class="rounded-t-lg max-h-[382px] min-h-[382px] w-full object-cover" src="illus/empty.jpg" alt="">
                        <div class="p-5 dark:bg-card_dark">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2 dark:text-white">Wow, this seems to be quite empty.</h5>
                            <p class="font-normal text-gray-700 mb-3 dark:text-whish">
                                Currently, we don't have any stories to share with you. However, we believe that everyone has a story to tell,
                                and we encourage you to join our community and share yours with others. By signing up, you can become a valuable contributor 
                                to our community and help us create a platform where people can share their unique experiences, 
                               insights, and perspectives. We believe that everyone's story is worth telling, and we look forward to hearing yours. </p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    

    <div id="indexCardLoader" class="pt-10 hidden">
        <div class="flex flex-wrap gap-9 md:w-10/12 md:mx-36 md:pl-20 pb-1"> 
            <div id="" class="w-11/12 tb:w-fit mx-auto">
                <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5 dark:border-card_dark animate-pulse">
                    <div class="flex items-center justify-center rounded-t-lg max-h-[382px] min-h-[382px] object-cover bg-gray-300 rounded dark:bg-gray-700">
                        <svg class="w-1/2 h-12 text-gray-200 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="currentColor" viewBox="0 0 640 512">
                            <path d="M480 80C480 35.82 515.8 0 560 0C604.2 0 640 35.82 640 80C640 124.2 604.2 160 560 160C515.8 160 480 124.2 480 80zM0 456.1C0 445.6 2.964 
                            435.3 8.551 426.4L225.3 81.01C231.9 70.42 243.5 64 256 64C268.5 64 280.1 70.42 286.8 81.01L412.7 281.7L460.9 202.7C464.1 196.1 472.2 192 
                            480 192C487.8 192 495 196.1 499.1 202.7L631.1 419.1C636.9 428.6 640 439.7 640 450.9C640 484.6 612.6 512 578.9 512H55.91C25.03 512 .0006
                            486.1 .0006 456.1L0 456.1z"/></svg>
                    </div>
                    <div class="p-5 dark:bg-card_dark">
                        <div class="h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-1/2 tb:w-60 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-8 bg-gray-200 rounded-lg dark:bg-gray-700 w-1/4 tb:w-24 mb-4""></div>
                    </div>
                </div>
            </div>

            <div id="" class="w-11/12 tb:w-fit mx-auto">
                <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5 dark:border-card_dark animate-pulse">
                    <div class="flex items-center justify-center rounded-t-lg max-h-[382px] min-h-[382px] object-cover bg-gray-300 rounded dark:bg-gray-700">
                        <svg class="w-1/2 h-12 text-gray-200 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="currentColor" viewBox="0 0 640 512">
                            <path d="M480 80C480 35.82 515.8 0 560 0C604.2 0 640 35.82 640 80C640 124.2 604.2 160 560 160C515.8 160 480 124.2 480 80zM0 456.1C0 445.6 2.964 
                            435.3 8.551 426.4L225.3 81.01C231.9 70.42 243.5 64 256 64C268.5 64 280.1 70.42 286.8 81.01L412.7 281.7L460.9 202.7C464.1 196.1 472.2 192 
                            480 192C487.8 192 495 196.1 499.1 202.7L631.1 419.1C636.9 428.6 640 439.7 640 450.9C640 484.6 612.6 512 578.9 512H55.91C25.03 512 .0006
                            486.1 .0006 456.1L0 456.1z"/></svg>
                    </div>
                    <div class="p-5 dark:bg-card_dark">
                        <div class="h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-1/2 tb:w-60 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-8 bg-gray-200 rounded-lg dark:bg-gray-700 w-1/4 tb:w-24 mb-4""></div>
                    </div>
                </div>
            </div>

            <div id="" class="w-11/12 tb:w-fit mx-auto">
                <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5 dark:border-card_dark animate-pulse">
                    <div class="flex items-center justify-center rounded-t-lg max-h-[382px] min-h-[382px] object-cover bg-gray-300 rounded dark:bg-gray-700">
                        <svg class="w-1/2 h-12 text-gray-200 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="currentColor" viewBox="0 0 640 512">
                            <path d="M480 80C480 35.82 515.8 0 560 0C604.2 0 640 35.82 640 80C640 124.2 604.2 160 560 160C515.8 160 480 124.2 480 80zM0 456.1C0 445.6 2.964 
                            435.3 8.551 426.4L225.3 81.01C231.9 70.42 243.5 64 256 64C268.5 64 280.1 70.42 286.8 81.01L412.7 281.7L460.9 202.7C464.1 196.1 472.2 192 
                            480 192C487.8 192 495 196.1 499.1 202.7L631.1 419.1C636.9 428.6 640 439.7 640 450.9C640 484.6 612.6 512 578.9 512H55.91C25.03 512 .0006
                            486.1 .0006 456.1L0 456.1z"/></svg>
                    </div>
                    <div class="p-5 dark:bg-card_dark">
                        <div class="h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-1/2 tb:w-60 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-8 bg-gray-200 rounded-lg dark:bg-gray-700 w-1/4 tb:w-24 mb-4""></div>
                    </div>
                </div>
            </div>

            <div id="" class="w-11/12 tb:w-fit mx-auto">
                <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5 dark:border-card_dark animate-pulse">
                    <div class="flex items-center justify-center rounded-t-lg max-h-[382px] min-h-[382px] object-cover bg-gray-300 rounded dark:bg-gray-700">
                        <svg class="w-1/2 h-12 text-gray-200 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="currentColor" viewBox="0 0 640 512">
                            <path d="M480 80C480 35.82 515.8 0 560 0C604.2 0 640 35.82 640 80C640 124.2 604.2 160 560 160C515.8 160 480 124.2 480 80zM0 456.1C0 445.6 2.964 
                            435.3 8.551 426.4L225.3 81.01C231.9 70.42 243.5 64 256 64C268.5 64 280.1 70.42 286.8 81.01L412.7 281.7L460.9 202.7C464.1 196.1 472.2 192 
                            480 192C487.8 192 495 196.1 499.1 202.7L631.1 419.1C636.9 428.6 640 439.7 640 450.9C640 484.6 612.6 512 578.9 512H55.91C25.03 512 .0006
                            486.1 .0006 456.1L0 456.1z"/></svg>
                    </div>
                    <div class="p-5 dark:bg-card_dark">
                        <div class="h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-1/2 tb:w-60 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-8 bg-gray-200 rounded-lg dark:bg-gray-700 w-1/4 tb:w-24 mb-4""></div>
                    </div>
                </div>
            </div>

            <div id="" class="w-11/12 tb:w-fit mx-auto">
                <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5 dark:border-card_dark animate-pulse">
                    <div class="flex items-center justify-center rounded-t-lg max-h-[382px] min-h-[382px] object-cover bg-gray-300 rounded dark:bg-gray-700">
                        <svg class="w-1/2 h-12 text-gray-200 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="currentColor" viewBox="0 0 640 512">
                            <path d="M480 80C480 35.82 515.8 0 560 0C604.2 0 640 35.82 640 80C640 124.2 604.2 160 560 160C515.8 160 480 124.2 480 80zM0 456.1C0 445.6 2.964 
                            435.3 8.551 426.4L225.3 81.01C231.9 70.42 243.5 64 256 64C268.5 64 280.1 70.42 286.8 81.01L412.7 281.7L460.9 202.7C464.1 196.1 472.2 192 
                            480 192C487.8 192 495 196.1 499.1 202.7L631.1 419.1C636.9 428.6 640 439.7 640 450.9C640 484.6 612.6 512 578.9 512H55.91C25.03 512 .0006
                            486.1 .0006 456.1L0 456.1z"/></svg>
                    </div>
                    <div class="p-5 dark:bg-card_dark">
                        <div class="h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-1/2 tb:w-60 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-8 bg-gray-200 rounded-lg dark:bg-gray-700 w-1/4 tb:w-24 mb-4""></div>
                    </div>
                </div>
            </div>

            <div id="" class="w-11/12 tb:w-fit mx-auto">
                <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5 dark:border-card_dark animate-pulse">
                    <div class="flex items-center justify-center rounded-t-lg max-h-[382px] min-h-[382px] object-cover bg-gray-300 rounded dark:bg-gray-700">
                        <svg class="w-1/2 h-12 text-gray-200 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="currentColor" viewBox="0 0 640 512">
                            <path d="M480 80C480 35.82 515.8 0 560 0C604.2 0 640 35.82 640 80C640 124.2 604.2 160 560 160C515.8 160 480 124.2 480 80zM0 456.1C0 445.6 2.964 
                            435.3 8.551 426.4L225.3 81.01C231.9 70.42 243.5 64 256 64C268.5 64 280.1 70.42 286.8 81.01L412.7 281.7L460.9 202.7C464.1 196.1 472.2 192 
                            480 192C487.8 192 495 196.1 499.1 202.7L631.1 419.1C636.9 428.6 640 439.7 640 450.9C640 484.6 612.6 512 578.9 512H55.91C25.03 512 .0006
                            486.1 .0006 456.1L0 456.1z"/></svg>
                    </div>
                    <div class="p-5 dark:bg-card_dark">
                        <div class="h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-1/2 tb:w-60 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full tb:w-80 mb-4""></div>
                        <div class="h-8 bg-gray-200 rounded-lg dark:bg-gray-700 w-1/4 tb:w-24 mb-4""></div>
                    </div>
                </div>
            </div>

           

        </div>
        
    </div>
    
    


    <div class="tb:w-10/12 tb:pl-10 tb:pr-44 md:pr-0 md:mx-36 md:pl-20 pb-14">
        <div class="w-full tb:w-5/6 md:w-1/3 lt:w-2/4 flex-shrink-0 pl-5 pr-5 tb:pl-0 tb:pr-0">
            {{ $data->links('vendor.pagination.tailwind') }}
        </div>
    </div>
    
    

    <footer class="w-full pb-0 h-80 tb:h-64 bg-transparent dark:bg-card_dark border-t-2 border-gray-300 dark:border-t-0">
        <div class="w-full flex flex-wrap pb-5 md:pb-7">

            <div class="pl-10 md:pl-80 lt:pl-60 pt-5 md:pt-10">
                <span class="text-sm tb:text-base">ABOUT</span>
                    <div class="pt-2 pr-10 text-justify tb:pr-0 tb:max-w-sm lt:max-w-md">
                        <p class="text-xs tb:text-sm">
                            Welcome to Write Stuff, the ultimate platform for writers to share their voice with the world. 
                            Whether you're a seasoned pro or just starting out, Write Stuff is the perfect place to connect 
                            with a community of like-minded writers and readers.
                        </p>
                    </div>
            </div>

            <div class="pl-10 md:pl-40 pt-5 md:pt-10">
                <span class="text-sm tb:text-base">CONTACT</span>

                  <div class="flex items-center mr-4 pt-2">
                    <i class="fa fa-location-dot"></i>
                    <span class="ml-2 text-xs tb:text-sm">Philippines</span>
                  </div>

                  <div class="flex items-center">
                    <i class="fa fa-phone"></i>
                    <span class="ml-2 text-xs tb:text-sm"">+639 12 345 6789</span>
                  </div>
                  <div class="flex items-center">
                    <i class="fa-regular fa-envelope"></i>
                    <span class="ml-2 text-xs tb:text-sm">sample@email.com</span>
                  </div>
            </div>
            <div class="pl-10 md:pl-64 pt-5 md:pt-10">
                <span class="text-sm tb:text-base">QUICK LINKS</span>
                  <div class="flex items-center">
                    <a href="{{ url('index') }}" class="text-xs tb:text-sm pr-3 hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">Home</a>
                  </div>
                  <div class="flex items-center">
                    <a href="{{ url('browse') }}" class="text-xs tb:text-sm pr-3 hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">Stories</a>
                  </div>
                  <div class="flex items-center">
                    <a onclick="scrollToTop()" class="text-xs tb:text-sm pr-3 hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">Back to Top</a>
                  </div>
            </div>
        </div>
        <div class="md:w-[1300px] lt:w-[900px] border-t-2 border-gray-300 mx-auto"></div>
        <div class="w-full mx-auto text-center pt-3 tb:pt-6">
            <span class="text-sm tb:text-base">©2023 Write Stuff | All rights reserved.</span>
        </div>
    </footer>

    <img src="dp/up-arrows.png" onclick="scrollToTop()" id="upArrow" class=" fixed bottom-5 right-5 px-4 py-2 w-20 md:w-24 hover:cursor-pointer hover:animate-bounce">
        
    <script type="text/javascript" src="js/ajax.js"></script>
    <script type="text/javascript" src="js/headers.js"></script>
    <script type="text/javascript" src="js/search.js"></script>
    <script>indexLoader();</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>