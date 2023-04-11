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
<body class="font-sans font-bold min-h-screen dark:bg-main_dark dark:text-white
            scrollbar-thin scrollbar-thumb-card_dark scrollbar-track-gray-300 h-3 overflow-x-auto 
            dark:scrollbar-thumb-gray-300 dark:scrollbar-track-card_dark">
    <header id="header" class="fixed top-0 transform translate-y-0 transition-transform duration-300 ease-in-out
    bg-white dark:bg-main_dark border-gray-300 border-b h-20 flex w-full justify-between px-4 font-sans font-bold z-10">
        <div id="postHeaderContent" class="w-screen font-mono md:text-2xl text-sm tb:text-lg flex items-center">
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
                    <img src="illus/moon.png" id="moon" onclick="toggleDark()" class="hidden toggle-dark absolute right-0 pr-2 lt:pr-44 md:pr-56 h-5 tb:h-8 md:h-8 hover:cursor-pointer">
                    <img src="illus/sun.png" id="sun" onclick="toggleDark()" class="hidden toggle-dark absolute right-0 pr-2 lt:pr-44 md:pr-56 h-5 tb:h-8 md:h-9 hover:cursor-pointer">
                </div>
            </div>
        </div>

        <div id="postHeaderLoader" class="hidden animate-pulse">
            <div class="w-screen font-mono md:text-2xl text-sm tb:text-lg flex items-center pt-8">
                <div class="ml-5 tb:ml-16 lt:ml-48 md:ml-56 h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-16 md:w-32 sm:w-20"></div>
                        
                <div class="ml-24 tb:ml-80 lt:ml-[570px] md:ml-[950px] h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-16 md:w-32 sm:w-20"></div>

                <div class="ml-5 sm:ml-3 tb:ml-10 lt:ml-7 md:ml-7 h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-16 md:w-32 sm:w-20"></div>
                        
            </div>
        </div>

    </header>
    
    {{-- @php
    $categories = ['Business blog', 'DIY craft blog', 'Fashion and beauty blog', 'Food blog', 'Health and fitness blog', 'Lifestyle blog', 
                    'Movie blog', 'Music blog', 'News blog', 'Photography blog', 'Political blog',
                    'Sports blog', 'Travel blog', 'Others'];
    @endphp --}}
    <h6 class="pt-28 text-center text-gray-900 font-bold text-3xl tracking-tight mb-2 dark:text-white">Categories</h6>

    <div class="pt-10 flex flex-wrap gap-1 md:w-10/12 md:mx-36 md:pl-20 pb-1"> 
        @foreach($categories as $category)
            <div class="w-11/12 tb:w-fit mx-auto lt:min-w-[384px] mb:min-h-[342px]">
                <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5 dark:border-card_dark">
                    <img class="rounded-t-lg max-h-[382px] min-h-[382px] w-full object-cover" src="{{$category->image}}" alt="">
                    <div class="p-5 dark:bg-card_dark">
                        <a href="{{ route('blogs', ['category' => $category->category]) }}">
                            <h5 class="text-center text-gray-900 font-bold text-xl tracking-tight mb-2 dark:text-white
                           hover:cursor-pointer hover:underline transition-all duration-150">{{$category->category}}s</h5>
                        </a>
                        <p class="pt-0 text-center text-sm text-gray-900 dark:text-gray-100">{{$category->StoriesCount}} stories</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="tb:w-10/12 tb:pl-10 tb:pr-44 md:pr-0 md:mx-36 md:pl-20 pb-14">
        <div class="w-full tb:w-5/6 md:w-1/3 lt:w-2/4 pl-5 pr-5 tb:pl-0 tb:pr-0">
            {{ $categories->links('vendor.pagination.tailwind') }}
        </div>
    </div>


    <img src="dp/up-arrows.png" onclick="scrollToTop()" class="fixed bottom-5 right-5 px-4 py-2 w-20 md:w-24 hover:cursor-pointer hover:animate-bounce">

    <footer class="bottom-0 w-full pb-0 mb-0 h-80 tb:h-64 bg-transparent dark:bg-card_dark border-t-2 border-gray-300 dark:border-t-0">
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

    <script type="text/javascript" src="js/ajax.js"></script>
    <script type="text/javascript" src="../js/loaders.js"></script>
    <script type="text/javascript" src="js/headers.js"></script>
    <script>postsLoader();</script>
</body>
</html>