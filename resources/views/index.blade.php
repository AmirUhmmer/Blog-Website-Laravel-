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
    @vite('resources/css/app.css')
    @include('sweetalert::alert')
</head>
<body class="font-sans font-bold min-h-screen dark:bg-verydark_red dark:text-whish">
    @if(session('success_signup'))
    <script>
        Swal.fire({
            title: 'Success',
            text: '{{ session('success_signup') }}',
            icon: 'success',
            confirmButtonText: 'OK'
        })
    </script>
    @endif

    @if(session('success_login'))
    <script>
        Swal.fire({
            title: 'Success',
            text: '{{ session('success_login') }}',
            icon: 'success',
            confirmButtonText: 'OK'
        })
    </script>
    @endif

    <header class="border-gray-300 border-b h-20 flex justify-between px-4 font-sans font-bold z-10">
        <div class="font-mono md:text-2xl text-sm flex items-center">
            <a href="index">
                <span class="ml-5 md:ml-56 hover:cursor-pointer decoration-light_blue hover:text-pink_red hover:underline">
                Write <span class="text-pink_red underline decoration-light_blue hover:text-black dark:hover:text-white hover:no-underline">Stuff</span>
                </span>
            </a>     
        </div>
        <div class="font-mono md:text-2xl text-sm flex items-center">
            <a href="post" class="absolute left-[240px] md:left-[1400px] hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">Browse</a>
            @if (session('username'))
                    <a href="/user_profile" id="userHeader" class="absolute left-[320px] md:left-[1550px] hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">
                        {{ session('username') }}
                    </a>
            @else
                <a href="/login" id="userHeader" class="absolute left-[320px] md:left-[1550px] hover:cursor-pointer hover:text-pink_red hover:underline decoration-light_blue">Login</a>
            @endif
            <img src="illus/moon.png" id="moon" onclick="toggleDark()" class="toggle-dark absolute left-[370px] md:left-[1850px] pl-3 md:pl-0 h-5 md:h-10 hover:cursor-pointer">
            <img src="illus/sun.png" id="sun" onclick="toggleDark()" class="toggle-dark absolute left-[370px] md:left-[1850px] pl-3 md:pl-0 h-5 md:h-10 hover:cursor-pointer">
        </div>
    </header>
    
    <div class="flex items-center h-fit z-0">
        <span class="absolute text-center md:text-left -mt-64 md:text-3xl md:left-52 md:-mt-80">Enjoy the thrill of sharing and reading outstanding content.</span>
        <span class="absolute hidden md:block text-center mt-96 md:text-left md:left-56 md:-mt-16 md:w-[600px]">Discover and share great writing on Write Stuff - your one-stop destination. 
            Welcome to Write Stuff, the ultimate platform for writers to share their voice with the world. 
            Whether you're a seasoned pro or just starting out, Write Stuff is the perfect place to connect 
            with a community of like-minded writers and readers.</span>
        <img src="illus/Collab-pana.png" class="mx-auto md:ml-[900px] h-[400px] md:h-[800px]">
    </div>

    <div class="ml-5 md:ml-60 font-extrabold md:text-xl">
        <span>FEATURED POSTS</span>
    </div>

    <div id="postSnippets" class="flex flex-wrap gap-1 md:w-10/12 md:mx-36 md:pl-20 pb-14 md:pb-20"> 
    @if(isset($data))
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
    @endif
    </div>

    <footer>
        <div class="bg-slate-300 dark:bg-dark_red w-full pb-0 h-36 mx-auto flex justify-center">
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
        </div>
    </footer>

    <img src="dp/up-arrows.png" onclick="scrollToTop()" class="fixed bottom-5 right-5 px-4 py-2 w-20 md:w-24 hover:cursor-pointer hover:animate-bounce">
        
    <script type="text/javascript" src="js/ajax.js"></script>
    <script type="text/javascript" src="js/userHeader.js"></script>
    <script>showPostSnippet();</script>
    <script>userHeader();</script>
    
</body>
</html>