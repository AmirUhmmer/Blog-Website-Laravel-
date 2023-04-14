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
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('illus/quill.png') }}">
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

    
    {{-- back button --}}
    <div class="fixed pt-24 pl-5 sm:pt-32 sm:pl-5 tb:pt-60 lt:pt-48 tb:pl-16 tbl:pl-44 lt:pl-[315px] md:pt-60 md:pl-[580px]
     text-white text-base hover:text-lg hover:cursor-pointer transition-all duration-150">
        <a href={{ url('index') }}>&lt- Home</a>
    </div>
    {{-- login div --}}
    <div class="pt-32 sm:pt-40 tb:pt-72 lt:pt-56 md:pt-72">
        <div class="container max-w-md mx-auto w-11/12 tb:max-w-2xl xl:max-w-3xl h-fit flex bg-white rounded-lg shadow overflow-hidden">
            <div class="relative hidden tb:block tb:w-1/2 h-full">
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

        
        
    {{-- <script type="text/javascript" src="js/login.js"></script> --}}
    <script type="text/javascript" src="js/ajax.js"></script>
</body>
</html>