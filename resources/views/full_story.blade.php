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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
</head>
<body class="font-sans font-bold min-h-screen overflow-auto dark:bg-main_dark dark:text-white">
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
                    <a href="{{ url('post') }}" class="absolute left-[220px] sm:left-[240px] tb:left-[550px] lt:left-[900px] md:left-[1400px]
                     hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">Browse</a>
                </div>

                <div>
                @if (auth()->user())
                        <a href="/user_profile" id="userHeader" class="absolute left-[285px] sm:left-[310px] tb:left-[650px] md:left-[1540px] lt:left-[1000px] 
                        hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">
                            {{ auth()->user()->username }}
                        </a>
                @else
                    <a href="{{ url('login') }}" id="userHeader" class="absolute left-[285px] sm:left-[310px] md:left-[1540px] lt:left-[1000px] tb:left-[650px] 
                    hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">Login</a>
                @endif
                </div>

                <div>
                    <img src="../illus/moon.png" id="moon" onclick="toggleDark()" class="hidden toggle-dark absolute right-0 pr-2 lt:pr-44 md:pr-56 h-5 tb:h-8 md:h-8 hover:cursor-pointer">
                    <img src="../illus/sun.png" id="sun" onclick="toggleDark()" class="hidden toggle-dark absolute right-0 pr-2 lt:pr-44 md:pr-56 h-5 tb:h-8 md:h-8 hover:cursor-pointer">
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

    <section id="postFull" class="w-full lt:w-9/12 md:w-3/5 flex flex-col items-center px-3 mx-auto pb-14"> 
        @foreach ($StoryInfo as $Story)
            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <a class="">
                    <img src="../{{$Story->picture}}" class="w-full max-h-[600px] object-cover rounded-t-lg">
                </a>
                <div class="bg-white flex flex-col justify-start p-6 dark:bg-card_dark rounded-b-lg">
                    <a class="text-3xl font-bold pb-4">{{ $Story->title}}</a>
                    <p href="#" class="text-sm pb-3">
                        By <a href="#" class="font-semibold hover:text-gray-800 ">{{ $Story->username}}</a>, Published on {{ $Story->created_at}}
                    </p>
                    <a  class="pb-6 text-justify">{!! nl2br($Story->content) !!}..</a>
                    <div class="flex">
                    <i class="fa fa-arrow-left pt-[3px] mr-2"></i><a href="{{ url('post') }}" class="uppercase text-gray-800 dark:text-white 
                    dark:hover:text-gray-300 hover:text-black">Back to Browsing </a>
                    </div>   
                </div>
            </article>
        @endforeach
    </section>

    <img src="../dp/up-arrows.png" onclick="scrollToTop()" class="fixed bottom-5 right-5 px-4 py-2 w-20 md:w-24 hover:cursor-pointer hover:animate-bounce scroll-smooth">

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
                    <a href="{{ url('post') }}" class="text-xs tb:text-sm pr-3 hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">Stories</a>
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




        {{-- <div class="bg-slate-300 dark:bg-card_dark w-full pb-0 h-36 mx-auto flex justify-center">
            <div class="flex-col pt-7">
                <div class="flex items-center">
                    <img src="dp/facebook.png" class="h-10 pr-8 hover:cursor-pointer">
                    <img src="dp/reddit.png" class="h-10 pr-8 hover:cursor-pointer">
                    <img src="dp/instagram.png" class="h-10 pr-8 hover:cursor-pointer">
                    <img src="dp/twitter.png" class="h-10 pr-8 hover:cursor-pointer">
                </div>
                <div class="pt-4 -ml-5">
                    <a href="" class="text-xl pr-3 hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">Home</a><span>|</span>
                    <a href="post.html" class="text-xl pr-3 pl-3 hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">Stories</a><span>|</span>
                    <a onclick="scrollToTop()" class="text-xl pr-3 pl-3 hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">Back to Top</a>
                </div>
                <div class="pt-2 -ml-3">
                    <span>©2023 Write Stuff | All rights reserved.</span>
                </div>
            </div>
        </div> --}}

    </footer>

    <script type="text/javascript" src="../js/ajax.js"></script>
</body>
</html>