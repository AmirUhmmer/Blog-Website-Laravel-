<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archive</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</head>
<body class="font-sans font-bold min-h-screen overflow-auto dark:bg-main_dark dark:text-white">
    <header class="border-gray-300 border-b h-20 flex justify-between px-4 font-sans font-bold">
        <div class="font-mono md:text-2xl text-sm flex items-center">
            <a href="{{ url('index') }}">
                <span class="ml-5 md:ml-56 hover:cursor-pointer decoration-light_blue hover:text-pink_red hover:underline">
                    Write <span class="text-pink_red underline decoration-light_blue hover:text-black dark:hover:text-white hover:no-underline">Stuff</span>
                </span>
            </a>     
        </div>
        <div class="font-mono md:text-2xl text-sm flex items-center">
            <a href="{{ url('post') }}" class="absolute left-[240px] md:left-[1400px] hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">Browse</a>
            @if (auth()->user())
                    <a href="/user_profile" id="userHeader" class="absolute left-[320px] md:left-[1550px] hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">
                        {{ auth()->user()->username }}
                    </a>
            @else
                <a href="/login" id="userHeader" class="absolute left-[320px] md:left-[1550px] hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">Login</a>
            @endif
            <img src="../illus/moon.png" id="moon" onclick="toggleDark()" class="toggle-dark absolute left-[370px] md:left-[1850px] pl-3 md:pl-0 h-5 md:h-10 hover:cursor-pointer">
            <img src="../illus/sun.png" id="sun" onclick="toggleDark()" class="toggle-dark absolute left-[370px] md:left-[1850px] pl-3 md:pl-0 h-5 md:h-10 hover:cursor-pointer">
        </div>
    </header>

    {{-- <div id="postFull" class="mx-auto mt-4 h-fit w-11/12 md:w-[1160px] flex-col items-center shadow-black shadow-lg rounded-lg p-8 text-black bg-white dark:bg-dark_red">

        @foreach($StoryInfo as $Story)
        <div class="mx-auto text-center">
            <span class="font-extrabold text-3xl text-red dark:text-white">{{$Story->title}}</span>
        </div>
        <div class="mt-7 w-full dark:text-whish">
            <span>Author:</span>
            <span>{{$Story->username}}</span>
        </div>
        <div class="mt-4 w-full dark:text-whish">
            <span>Date posted:</span>
            <span>{{$Story->created_at}}</span>
        </div>
        <img src="{{'../'.$Story->picture}}" class="mx-auto rounded-xl mt-5 w-11/12 md:w-[600px]">
        <div class="mt-7 dark:text-card_white"">
            <p>{{$Story->content}}</p>
        </div>
        @endforeach
    </div> --}}

    <section id="postFull" class="w-full md:w-2/4 flex flex-col items-center px-3 mx-auto "> 
        @foreach ($StoryInfo as $Story)
            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <a class="">
                    <img src="../{{$Story->picture}}" class="w-full max-h-[600px] object-cover rounded-t-lg">
                </a>
                <div class="bg-white flex flex-col justify-start p-6 dark:bg-card_dark rounded-b-lg">
                    <a class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $Story->title}}</a>
                    <p href="#" class="text-sm pb-3">
                        By <a href="#" class="font-semibold hover:text-gray-800 ">{{ $Story->username}}</a>, Published on {{ $Story->created_at}}
                    </p>
                    <a  class="pb-6 text-justify">{!! nl2br($Story->content) !!}..</a>
                    <a href="{{ url('post') }}" class="uppercase text-gray-800 dark:text-white dark:hover:text-whish hover:text-black">Back to Browsing </a>
                </div>
            </article>
        @endforeach
    </section>

    <img src="../dp/up-arrows.png" onclick="scrollToTop()" class="fixed bottom-5 right-5 px-4 py-2 w-20 md:w-24 hover:cursor-pointer hover:animate-bounce scroll-smooth">

    <footer class="pt-14 md:pt-20 ">
        <div class="bg-slate-300 dark:bg-card_dark w-full pb-0 h-36 mx-auto flex justify-center">
            <div class="flex-col pt-7">
                <div class="flex items-center">
                    <img src="../dp/facebook.png" class="h-10 pr-8 hover:cursor-pointer">
                    <img src="../dp/reddit.png" class="h-10 pr-8 hover:cursor-pointer">
                    <img src="../dp/instagram.png" class="h-10 pr-8 hover:cursor-pointer">
                    <img src="../dp/twitter.png" class="h-10 pr-8 hover:cursor-pointer">
                </div>
                <div class="pt-4 -ml-5">
                    <a href="{{ url('index') }}" class="text-xl pr-3 hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">Home</a><span>|</span>
                    <a href="{{ url('post') }}" class="text-xl pr-3 pl-3 hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">Stories</a><span>|</span>
                    <a onclick="scrollToTop()" class="text-xl pr-3 pl-3 hover:cursor-pointer scro hover:text-pink_red hover:underline decoration-light_blue">Back to Top</a>
                </div>
                <div class="pt-2 -ml-3">
                    <span>©2023 Write Stuff | All rights reserved.</span>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="../js/ajax.js"></script>
</body>
</html>