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
<body class="w-screen h-screen bg-dark_red dark:bg-verydark_red" >

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
    
    <div class="fixed pt-11 pl-7 text-white text-base hover:text-lg md:text-3xl hover:cursor-pointer md:hover:text-4xl transition-all duration-150">
        <a onclick="goBack()">&lt- Go back</a>
    </div>

        <div class="flex-col">
            <div class="pt-24 md:pt-48">
                <img src="illus/cahp.jpg" class="mx-auto rounded-xl h-[180px] w-11/12 md:w-[500px]">
            </div>
            <div class="mx-auto mt-2 h-fit w-11/12 md:w-[500px] shadow-lg bg-black bg-opacity-50 dark:bg-white dark:bg-opacity-10 shadow-black rounded-lg p-8 flex-col">
                <form action="loginUser" id="login" method="POST">
                    @csrf
                    <div class="pt-2"> 
                        <span class="text-whish font-extrabold text-xl md:text-2xl">Username</span>
                    </div>
                    <div class="pt-3">
                        <input class="border-b-2 border-white bg-transparent w-[270px] md:w-96 text-whish focus:bg-transparent focus:outline-none" 
                        type="text" 
                        name="username" 
                        id="username" 
                        placeholder="Enter username" 
                        required>
                    </div>
                    <div class="pt-7">
                        <span class="text-whish font-extrabold text-xl md:text-2xl">Password</span>
                    </div>
                    <div class="flex pt-3">
                        <input class="border-b-2 border-white bg-transparent w-[270px] md:w-96 text-whish focus:bg-transparent focus:outline-none" 
                        type="password" 
                        name="password" 
                        id="password" 
                        placeholder="Password" 
                        required>
                        <img src="dp/eye.png" id="togglePassword" class="w-7 ml-4 relative">
                    </div>
                    <div class="pt-5">
                        <a href="signup" class="text-whish font-extrabold hover:cursor-pointer hover: text-sm md:text-base hover:text-blue-500 hover:underline decoration-blue-500">Sign Up</a>
                    </div>
                    <div class="pt-7 mx-16 md:mx-32">
                        <input type="submit" name="submit" value="Login" class="w-40 h-11 bg-white bg-opacity-70 rounded-xl hover:cursor-pointer hover:bg-opacity-95 transition-all duration-150">
                    </div>
                    </form>
            </div>
        </div>
        
    <script type="text/javascript" src="js/login.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>
</body>
</html>