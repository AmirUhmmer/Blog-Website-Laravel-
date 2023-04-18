<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('illus/quill.png') }}">
</head>
<body class="font-sans font-bold min-h-screen overflow-auto dark:bg-main_dark dark:text-white
        scrollbar-thin scrollbar-thumb-card_dark scrollbar-track-gray-300 h-3 overflow-x-auto 
    dark:scrollbar-thumb-gray-300 dark:scrollbar-track-card_dark">

    <header id="header" class="fixed top-0 translate-y-0 transform transition-transform duration-300 ease-in-out
     bg-white dark:bg-main_dark border-gray-300 border-b h-20 flex w-full justify-between px-4 font-sans font-bold z-10">
        <div id="postFullHeaderContent" class="w-screen font-mono text-sm tb:text-lg flex items-center">
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

        <div id="postFullHeaderLoader" class="hidden animate-pulse">
            <div class="w-screen font-mono md:text-2xl text-sm tb:text-lg flex items-center pt-8">
                <div class="ml-5 tb:ml-16 lt:ml-48 md:ml-56 h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-16 md:w-32 sm:w-20"></div>
                        
                <div class="ml-24 tb:ml-80 lt:ml-[570px] md:ml-[950px] h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-16 md:w-32 sm:w-20"></div>

                <div class="ml-5 sm:ml-3 tb:ml-10 lt:ml-7 md:ml-7 h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-16 md:w-32 sm:w-20"></div>
                        
            </div>
        </div>

    </header>

    <div class="flex mt-32 text-center justify-center text-2xl">
        <div class="mt-3.5 h-1 bg-neutral-800 dark:bg-neutral-500 rounded-sm w-16 md:w-32 sm:w-20"></div>
        <span class="px-2">Search Results</span>
        <div class="mt-3.5 h-1 bg-neutral-800 dark:bg-neutral-500 rounded-sm w-16 md:w-32 sm:w-20"></div>
    </div>

    <div class="mt-10 grid place-items-center">
        <form action="searchPage" method="get">
            @csrf
            <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" 
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input type="search" id="search" name="search" autocomplete="off" class="block w-[300px] tb:w-[382px] p-4 pl-10 
            text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 
            focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 
            dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            placeholder="Search Titles, Authors, Categories..." required>
            </div>
        </form>
    </div>
      
    <div class="flex mt-16 text-center justify-center text-xl">
        <span class="px-2">Results for "{{$userSearched}}"</span>
    </div>

    <div class="flex flex-wrap pb-1 mt-5"> 
        @if($searchData->count())
                @foreach ($searchData as $post)       
                <div class="w-11/12 tb:w-fit mx-auto tb:min-w-[384px] mb:min-h-[342px]">
                    <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5 dark:border-card_dark">
                        <img class="rounded-t-lg max-h-[382px] min-h-[382px] w-full object-cover" src="{{$post->picture}}" alt="">
                        <div class="p-5 dark:bg-card_dark">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight dark:text-white">{{substr($post->title, 0, 53)}}</h5>
                            <span class="text-md text-gray-900 font-bold tracking-tight dark:text-white">By {{ $post->username }}</span>
                            <div class="mt-2 w-fit h-fit border-2 border-gray-900 dark:border-gray-700 rounded-md transition-all duration-150
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
                            <p class="font-normal text-gray-700 mb-3 dark:text-whish"></p>
                        </div>
                    </div>
                </div>
        @endif
    </div>

    <div class="mx-auto justify-center text-center w-full tb:w-10/12 lt:w-1/3 pt-5 pb-14">
        {{ $searchData->links('vendor.pagination.tailwind') }}
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

    <script type="text/javascript" src="../js/ajax.js"></script>
    <script type="text/javascript" src="../js/loaders.js"></script>
    <script type="text/javascript" src="../js/headers.js"></script>
    <script>fullStoryLoader();</script>
    <script type="text/javascript" src="../js/search.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>