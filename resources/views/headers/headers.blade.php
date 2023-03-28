<div class="font-mono md:text-2xl text-sm flex items-center">
    <a href="index">
        <span class="ml-5 md:ml-56 hover:cursor-pointer decoration-light_blue hover:text-pink_red hover:underline transition-all duration-150">
        Write <span class="text-pink_red underline decoration-light_blue hover:text-black dark:hover:text-white hover:no-underline">Stuff</span>
        </span>
    </a>     
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
@yield('defaultHeader')