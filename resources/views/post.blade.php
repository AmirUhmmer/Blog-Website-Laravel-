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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('illus/quill.png') }}">
</head>
<body class="font-sans font-bold min-h-screen dark:bg-main_dark dark:text-white">
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
    
    
    <div class="mt-7 ml-5 lt:pl-80 md:pl-[470px] font-extrabold md:text-xl">
        <span class="">POSTS</span>
    </div>
    

    {{-- <div id="postSnippets">  
        @foreach ($postData as $post)
        <div class="mx-auto mt-4 w-11/12 md:h-fit md:w-[1160px] border-2 border-solid dark:bg-dark_red border-white shadow-black shadow-lg rounded-lg p-8 text-black">
            <span class="md:ml-1 text-sm md:text-base dark:text-whish">{{ $post->created_at}}</span>
            <div class="flex items-center text-sm md:text-base mt-2 dark:text-whish">
                <img src="dp/user_default.png" class="w-7 h-7 md:w-10 md:h-10 rounded-full">
                <span class="ml-2">{{ $post->username}}</span>
            </div>  
            <div class="mt-2 text-lg font-extrabold md:text-3xl text-red dark:text-white"><span>{{ $post->title}}</span></div>
            <div class="mt-4 text-sm md:text-base font-bold text-black dark:text-card_white">
                <span>{{ substr($post->content, 0, 300)}}... </span>
            </div>
            <div class="mt-5 text-sm font-extrabold md:text-xl text-blue-500 decoration-blue-600 hover:cursor-pointer hover:text-2xl hover:underline transition-all duration-200">
                    <a href="{{ route('full_story', ['post_id' => $post->id]) }}">Read Full</a>
            </div>
        </div>
        @endforeach
    </div> --}}

    <section id="postSnippets" class="w-full lt:w-2/4 flex flex-col items-center px-3 mx-auto"> 
        @foreach ($postData as $post)
            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <a class="">
                    <img src="{{$post->picture}}" class="w-full max-h-[600px] object-cover rounded-t-lg">
                </a>
                <div class="bg-white flex flex-col justify-start p-6 dark:bg-card_dark rounded-b-lg">
                    <a href="{{ route('full_story', ['post_id' => $post->id]) }}" class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $post->title}}</a>
                    <p href="#" class="text-sm pb-3">
                        By <a href="#" class="font-semibold hover:text-gray-800 ">{{ $post->username}}</a>, Published on {{ $post->created_at}}
                    </p>
                    <a  class="pb-6">{{ substr($post->content, 0, 300)}}..</a>
                    <a href="{{ route('full_story', ['post_id' => $post->id]) }}" class="uppercase text-gray-800 dark:text-white dark:hover:text-whish hover:text-black">Continue Reading <i class="fa-solid fa-arrow-right fa-fade"></i></a>
                </div>
            </article>
        @endforeach

        <div class="w-full tb:w-10/12 tb:-ml-20 tb:pr-48 lt:w-full lt:pl-10 md:w-2/4 pt-5 md:-ml-[450px] pb-14 md:pl-0 md:pr-0">
            {{ $postData->links('vendor.pagination.tailwind') }}
        </div>
        {{-- <div class="tb:w-10/12 tb:pl-1 tb:pr-40 md:pr-0 md:mx-36 md:pl-20 pb-14">
            <div class="w-full tb:w-5/6 md:w-1/4 flex-shrink-0">
                {{ $postData->links('vendor.pagination.tailwind') }}
            </div>
        </div> --}}
    </section>

    


    <img src="dp/up-arrows.png" onclick="scrollToTop()" class="fixed bottom-5 right-5 px-4 py-2 w-20 md:w-24 hover:cursor-pointer hover:animate-bounce">

    {{-- <footer class="pt-14 md:pt-20 ">
        <div class="bg-slate-300 dark:bg-card_dark w-full pb-0 h-36 mx-auto flex justify-center">
            <div class="flex-col pt-7">
                <div class="flex items-center">
                    <img src="dp/facebook.png" class="h-10 pr-8 hover:cursor-pointer">
                    <img src="dp/reddit.png" class="h-10 pr-8 hover:cursor-pointer">
                    <img src="dp/instagram.png" class="h-10 pr-8 hover:cursor-pointer">
                    <img src="dp/twitter.png" class="h-10 pr-8 hover:cursor-pointer">
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
    </footer> --}}

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

    <script type="text/javascript" src="js/ajax.js"></script>
</body>
</html>