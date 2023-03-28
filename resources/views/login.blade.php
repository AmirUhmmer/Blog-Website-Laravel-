<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    @include('sweetalert::alert')
</head>
<body class="w-screen h-screen bg-card_dark dark:bg-main_dark" >

    @if(session('error_login'))
    <script>
        Swal.fire({
            title: 'Error',
            text: '{{ session('error_login') }}',
            icon: 'error',
            confirmButtonText: 'OK'
        })
    </script>
    @endif
    
    <div class="fixed md:pt-60 pl-[580px] text-white text-base hover:text-lg hover:cursor-pointer transition-all duration-150">
        <a onclick="goBack()">&lt- Go back</a>
    </div>
    <div class="pt-24 md:pt-72">
        <div class="container max-w-md mx-auto xl:max-w-3xl h-fit flex bg-white rounded-lg shadow overflow-hidden">
            <div class="relative hidden xl:block xl:w-1/2 h-full">
                <img
                class="absolute w-full object-cover"
                src="illus/login1.jpg"
                />
            </div>
    <div class="w-full xl:w-1/2 p-8 dark:bg-card_dark">
        <form action="loginUser" id="login" method="POST">
            @csrf
        <h1 class=" text-2xl font-bold dark:text-white">Sign in to your account</h1>
        <div>
            <span class="text-gray-600 text-sm dark:text-whish">
            Don't have an account?
            </span>
            <a href="signup" class="text-gray-700 text-sm font-semibold dark:text-whish hover:underline transition-all duration-150">
            Sign up
            </a>
        </div>
        <div class="mb-4 mt-6">
            <label
            class="block text-gray-700 text-sm font-semibold mb-2 dark:text-whish"
            >
            Username
            </label>
            <input
            class="text-sm appearance-none rounded w-full py-2 px-3 text-gray-700 bg-gray-200 leading-tight focus:outline-none focus:shadow-outline h-10"
            id="username"
            name="username"
            type="text"
            placeholder="Your username"
            />
            @error('username')
                <p class="text-pink_red font-bold text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6 mt-6">
            <label
            class="block text-gray-700 text-sm font-semibold mb-2 dark:text-whish""
            htmlFor="password"
            >
            Password
            </label>
            <input
            class="text-sm bg-gray-200 appearance-none rounded w-full py-2 px-3 text-gray-700 mb-1 leading-tight focus:outline-none focus:shadow-outline h-10"
            name="password" 
            id="password" 
            type="password"
            placeholder="Your password"
            />
            @error('password')
                <p class="text-pink_red font-bold text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex w-full mt-8">
            <input
            class="w-full bg-gray-800 hover:bg-opacity-80 dark:bg-gray-500 text-white text-sm py-2 px-4 font-semibold rounded focus:outline-none focus:shadow-outline h-10"
            type="submit"
            value="Sign in"
            >
        </div>
        </form>
    </div>
    </div>
    </div>

        {{-- <div class="flex-col">
            <div class="pt-24 md:pt-48">
                <img src="illus/cahp.jpg" class="mx-auto rounded-xl h-[180px] w-11/12 md:w-[500px]">
            </div>
            <div class="mx-auto mt-2 h-fit w-11/12 md:w-[500px] shadow-lg bg-white bg-opacity-50 dark:bg-white dark:bg-opacity-10 shadow-black rounded-lg p-8 flex-col">
                <form action="loginUser" id="login" method="POST">
                    @csrf
                    <div class="pt-2"> 
                        <span class="dark:text-whish font-extrabold text-xl md:text-2xl">Username</span>
                    </div>
                    <div class="pt-3">
                        <input class="border-b-2 border-white bg-transparent w-[270px] md:w-96 dark:text-whish focus:bg-transparent focus:outline-none" 
                        type="text" 
                        name="username" 
                        id="username" 
                        placeholder="Enter username" 
                        required>
                    </div>
                    @error('username')
                        <p class="text-whish text-xs mt-1">{{ $message }}</p>
                    @enderror
                    <div class="pt-7">
                        <span class="dark:text-whish font-extrabold text-xl md:text-2xl">Password</span>
                    </div>
                    <div class="flex pt-3">
                        <input class="border-b-2 border-white bg-transparent w-[270px] md:w-96 dark:text-whish focus:bg-transparent focus:outline-none" 
                        type="password" 
                        name="password" 
                        id="password" 
                        placeholder="Password" 
                        required>
                        <img src="dp/eye.png" id="togglePassword" class="w-7 ml-4 relative">
                    </div>
                    @error('password')
                        <p class="text-whish text-xs mt-1">{{ $message }}</p>
                    @enderror
                    <div class="pt-5">
                        <a href="signup" class="dark:text-whish font-extrabold hover:cursor-pointer hover: text-sm md:text-base hover:text-blue-500 hover:underline decoration-blue-500">Sign Up</a>
                    </div>
                    <div class="pt-7 mx-16 md:mx-32">
                        <input type="submit" name="submit" value="Login" class="w-40 h-11 dark:bg-white bg-green-500 bg-opacity-70 rounded-xl hover:cursor-pointer hover:bg-opacity-95 transition-all duration-150">
                    </div>
                    </form>
            </div>
        </div> --}}

        
        
    <script type="text/javascript" src="js/login.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>
</body>
</html>