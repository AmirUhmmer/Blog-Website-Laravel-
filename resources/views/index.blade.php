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
    @vite('resources/css/app.css')
    @include('sweetalert::alert')
</head>
<body class="font-sans font-bold min-h-screen dark:bg-main_dark dark:text-whish">

    @extends('index.index_alert')
    @section('successSignUp')
    @endsection

    @section('successSignIn')
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
    
    <div class="flex items-center h-fit z-0">
        <span class="absolute text-center tb:text-xl tb:mx-32 tb:-mt-[480px] lt:mx-0 lt:text-left lt:-mt-72 -mt-64 md:text-3xl lt:left-20 md:left-52 md:-mt-80">
            Enjoy the thrill of sharing and reading outstanding content.</span>
        <span class="absolute hidden lt:block text-center mt-96 lt:text-left lt:left-24 lt:-mt-16 md:left-56 md:-mt-16 lt:w-[600px]">
            Write Stuff is a community-driven blog platform where users can share their unique perspectives and ideas with the world. 
            Join us and discover a diverse range of topics from creative writing to thought-provoking discussions. Connect with like-minded 
            individuals, engage in meaningful conversations, and inspire others with your words. Start writing today and share your voice with the world.</span>
        <img src="illus/Collab-pana.png" class="mx-auto object-cover lt:ml-[590px] md:ml-[900px] h-[400px] tb:h-[700px] md:h-[800px]">
    </div>

    <div class="ml-5 md:ml-60 font-extrabold md:text-xl pb-10">
        <span>FEATURED POSTS</span>
    </div>

    <div id="postSnippets" class="flex flex-wrap gap-1 md:w-10/12 md:mx-36 md:pl-20 pb-1"> 
    {{-- @if(isset($data))
        @foreach ($data as $post)       
            <div class="flex-col pt-4 md:ml-24 mx-auto md:mx-0">
                <div>
                    <img src="{{$post->picture}}" class="mx-auto rounded-xl h-[180px] w-11/12 md:w-[600px] object-cover">
                </div>
                <div class="mx-auto md:h-fit w-11/12 md:w-[600px] bg-card_white dark:bg-dark_red shadow-black shadow-lg rounded-lg p-8 text-black">
                    <span class="md:ml-3 text-sm md:text-base dark:text-whish">{{$post->created_at}}</span>
                    <div class="flex items-center text-sm md:text-base mt-2">
                        <img src="dp/user_default.png" class="w-7 h-7 md:w-10 md:h-10 rounded-full">
                        <span class="ml-2 dark:text-whish">{{$post->username}}</span>
                    </div>  
                    <div class="mt-2 text-lg font-extrabold md:text-3xl text-red dark:text-white"><span>{{$post->title}}</span></div>
                    <div class="mt-4 text-sm md:text-base font-bold text-black">
                        <span class="dark:text-card_white">{{substr($post->content, 0, 300)}}...</span>
                    </div>
                    <div class="mt-5 text-sm font-extrabold md:text-xl text-blue-500 decoration-blue-600 hover:cursor-pointer hover:text-2xl hover:underline transition-all duration-200">
                        <a href="{{ route('full_story', ['post_id' => $post->id]) }}">Read Full</a>
                    </div>
                </div>
            </div>
        @endforeach
    @endif --}}
    @if(isset($data))
        @foreach ($data as $post)       
        <div class="w-11/12 tb:w-fit mx-auto">
            <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5 dark:border-card_dark">
                <img class="rounded-t-lg max-h-[382px] min-h-[382px] w-full object-cover" src="{{$post->picture}}" alt="">
                <div class="p-5 dark:bg-card_dark">
                    <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2 dark:text-white">{{$post->title}}</h5>
                    <p class="font-normal text-gray-700 mb-3 dark:text-whish">{{substr($post->content, 0, 300)}}... </p>
                    <a href="{{ route('full_story', ['post_id' => $post->id]) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="#">
                        Read more
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    @endif
    </div>

    <div class="tb:w-10/12 tb:pl-10 tb:pr-44 md:pr-0 md:mx-36 md:pl-20 pb-14">
        <div class="w-full tb:w-5/6 md:w-1/4 lt:w-2/4 flex-shrink-0 pl-5 pr-5 tb:pl-0 tb:pr-0">
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

    <img src="dp/up-arrows.png" onclick="scrollToTop()" class="fixed bottom-5 right-5 px-4 py-2 w-20 md:w-24 hover:cursor-pointer hover:animate-bounce">
        
    <script type="text/javascript" src="js/ajax.js"></script>
    
</body>
</html>