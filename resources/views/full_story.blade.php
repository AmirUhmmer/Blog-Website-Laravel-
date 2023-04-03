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
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('illus/quill.png') }}">
</head>
<body class="font-sans font-bold min-h-screen overflow-auto dark:bg-main_dark dark:text-white
        scrollbar-thin scrollbar-thumb-card_dark scrollbar-track-gray-300 h-3 overflow-x-auto 
    dark:scrollbar-thumb-gray-300 dark:scrollbar-track-card_dark">

    <header id="header" class="fixed top-0 translate-y-0 transform transition-transform duration-300 ease-in-out
     bg-white dark:bg-main_dark border-gray-300 border-b h-20 flex w-full justify-between px-4 font-sans font-bold z-10">
        <div id="postFullHeaderContent" class="w-screen font-mono md:text-2xl text-sm tb:text-lg flex items-center">
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
                    @if (auth()->user()->username != 'admin')
                        <a href="/user_profile" id="userHeader" class="absolute left-[285px] sm:left-[310px] tb:left-[650px] md:left-[1540px] lt:left-[1000px] 
                        hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">
                            {{ auth()->user()->username }}
                        </a>
                    @else
                        <a href="/admin" id="userHeader" class="absolute left-[285px] sm:left-[310px] tb:left-[650px] md:left-[1540px] lt:left-[1000px] 
                        hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">
                            {{ auth()->user()->username }}
                        </a>
                    @endif
                        
                @else
                    <a href="{{ url('login') }}" id="userHeader" class="absolute left-[285px] sm:left-[310px] md:left-[1540px] lt:left-[1000px] tb:left-[650px] 
                    hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">Login</a>
                @endif
                </div>

                <div>
                    <img src="../illus/moon.png" id="moon" onclick="toggleDark()" class="hidden toggle-dark absolute right-0 pr-2 lt:pr-44 md:pr-56 h-5 tb:h-8 md:h-8 hover:cursor-pointer">
                    <img src="../illus/sun.png" id="sun" onclick="toggleDark()" class="hidden toggle-dark absolute right-0 pr-2 lt:pr-44 md:pr-56 h-5 tb:h-8 md:h-9 hover:cursor-pointer">
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


    <section id="postFullContent" class="pt-24 w-full lt:w-9/12 md:w-3/5 flex flex-col items-center px-3 mx-auto pb-14"> 
        @if($StoryInfo->count())
            @foreach ($StoryInfo as $Story)
                <article class="flex flex-col shadow my-4">
                    <!-- Article Image -->
                    <a class="">
                        <img src="../{{$Story->picture}}" class="w-full max-h-[600px] object-cover rounded-t-lg">
                    </a>
                    <div class="bg-white flex flex-col justify-start p-6 dark:bg-card_dark rounded-b-lg">
                        <a class="text-3xl font-bold pb-4">{{ $Story->title}}</a>
                        <p href="#" class="text-sm pb-3">
                            By <a href="#" class="font-semibold hover:text-gray-800 ">{{ $Story->username}}</a>, Published on {{ substr($Story->created_at, 0, 10)}}
                        </p>
                        <a  class="pb-6 text-justify">{!! nl2br($Story->content) !!}</a>
                        <div class="flex">
                        <i class="fa fa-arrow-left pt-[3px] mr-2"></i><a href="{{ url('post') }}" class="uppercase text-gray-800 dark:text-white 
                        dark:hover:text-gray-300 hover:text-black">Back to Browsing </a>
                        </div>   
                    </div>
                </article>
            @endforeach
        @else
            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <a class="">
                    <img src="../illus/empty.jpg" class="w-full max-h-[600px] object-cover rounded-t-lg">
                </a>
                <div class="bg-white flex flex-col justify-start p-6 dark:bg-card_dark rounded-b-lg">
                    <a class="text-3xl font-bold pb-4">Wow, this seems to be quite empty.</a>
                    <p href="#" class="text-sm pb-3">
                        By Write Stuff
                    </p>
                    <a  class="pb-6 text-justify">
                        Currently, we don't have any stories to share with you. However, we believe that everyone has a story to tell,
                        and we encourage you to join our community and share yours with others. By signing up, you can become a valuable contributor 
                        to our community and help us create a platform where people can share their unique experiences, 
                       insights, and perspectives. We believe that everyone's story is worth telling, and we look forward to hearing yours.</a>
                    <div class="flex">
                    <i class="fa fa-arrow-left pt-[3px] mr-2"></i><a href="{{ url('post') }}" class="uppercase text-gray-800 dark:text-white 
                    dark:hover:text-gray-300 hover:text-black">Back to Browsing </a>
                    </div>   
                </div>
            </article>
        @endif
    </section>

    <div id="postFullLoader" class="hidden">
        <section class="pt-24 w-full lt:w-9/12 md:w-3/5 flex flex-col items-center px-3 mx-auto pb-14 animate-pulse"> 
                <article class="flex flex-col shadow my-4">
                    <!-- Article Image -->             
                        <svg class="pb-5 md:max-h-[600px] object-cover rounded-t-lg text-gray-200 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="currentColor" viewBox="0 0 640 512">
                            <path d="M480 80C480 35.82 515.8 0 560 0C604.2 0 640 35.82 640 80C640 124.2 604.2 160 560 160C515.8 160 480 124.2 480 80zM0 456.1C0 445.6 2.964 
                            435.3 8.551 426.4L225.3 81.01C231.9 70.42 243.5 64 256 64C268.5 64 280.1 70.42 286.8 81.01L412.7 281.7L460.9 202.7C464.1 196.1 472.2 192 
                            480 192C487.8 192 495 196.1 499.1 202.7L631.1 419.1C636.9 428.6 640 439.7 640 450.9C640 484.6 612.6 512 578.9 512H55.91C25.03 512 .0006
                            486.1 .0006 456.1L0 456.1z"/></svg>
                    <div class="max-w-[320px] sm:max-w-[350px] tb:max-w-[750px] lt:max-w-[900px] bg-white flex flex-col justify-start p-6 dark:bg-card_dark rounded-b-lg">
                        <div class="flex space-x-2">
                            <div class="md:w-[400px] h-6 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[200px] h-6 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[300px] h-6 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                        </div>
                        <p href="#" class="text-sm pt-2 pb-3">
                            <div class="flex space-x-2">
                                <div class="md:w-[100px] h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                                <div class="md:w-[200px] h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            </div>
                        </p>
                        <div class="flex space-x-2 pt-10 pb-3">
                            <div class="md:w-[100px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[500px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[200px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[100px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                        </div>
                        <div class="flex space-x-2 pb-3">
                            <div class="md:w-[400px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[150px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[100px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[250px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                        </div>
                        <div class="flex space-x-2 pb-3">
                            <div class="md:w-[50px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[100px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[200px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[100px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[442px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                        </div>
                        <div class="flex space-x-2 pb-3">
                            <div class="md:w-[100px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[500px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[200px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[100px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                        </div>
                        <div class="flex space-x-2 pb-3">
                            <div class="md:w-[400px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[150px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[100px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[250px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                        </div>
                        <div class="flex space-x-2 pb-3">
                            <div class="md:w-[50px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[100px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[200px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[100px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[442px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                        </div>
                        <div class="flex space-x-2 pb-3">
                            <div class="md:w-[100px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[500px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[200px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[100px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                        </div>
                        <div class="flex space-x-2 pb-3">
                            <div class="md:w-[400px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[150px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[100px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[250px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                        </div>
                        <div class="flex space-x-2 pb-3">
                            <div class="md:w-[50px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[100px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[200px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[100px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[442px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                        </div>
                        <div class="flex space-x-2 pt-10 pb-3">
                            <div class="md:w-[100px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[500px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[200px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[100px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                        </div>
                        <div class="flex space-x-2 pb-3">
                            <div class="md:w-[400px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[150px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[100px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[250px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                        </div>
                        <div class="flex space-x-2 pb-3">
                            <div class="md:w-[50px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[100px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[200px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[100px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[442px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                        </div>
                        <div class="flex space-x-2 pb-3">
                            <div class="md:w-[100px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[500px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[200px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[100px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                        </div>
                        <div class="flex space-x-2 pb-3">
                            <div class="md:w-[400px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[150px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[100px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[250px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                        </div>
                        <div class="flex space-x-2 pb-3">
                            <div class="md:w-[50px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[100px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[200px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[100px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[442px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                        </div>
                        <div class="flex space-x-2 pb-3">
                            <div class="md:w-[100px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[500px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[200px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[100px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                        </div>
                        <div class="flex space-x-2 pb-3">
                            <div class="md:w-[400px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[150px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[100px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[250px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                        </div>
                        <div class="flex space-x-2 pb-3">
                            <div class="md:w-[50px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[100px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[200px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                            <div class="md:w-[100px] h-3 bg-gray-200 rounded-full dark:bg-gray-700 w-60"></div>
                            <div class="md:w-[442px] h-3 bg-gray-300 rounded-full dark:bg-gray-600 w-60"></div>
                        </div>
                        
                        
                    </div>
                </article>
        </section>
    </div>    
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
    </footer>

    <script type="text/javascript" src="../js/ajax.js"></script>
    <script type="text/javascript" src="../js/loaders.js"></script>
    <script type="text/javascript" src="../js/headers.js"></script>
    <script>fullStoryLoader();</script>
</body>
</html>