<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('illus/quill.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>404</title>
</head>
<body>  
    <div class="text-center w-screen mx-auto flex">
        <div class="pt-52 md:pl-[580px] lt:pt-1 lt:pl-10 md:pt-[180px]">
            <img src="../illus/detective.jpg" class="object-cover md:h-[500px]" alt="">
        </div>

        <div class="flex-col pr-4">
            <div class="pt-56 tb:pt-[340px] lt:pt-[240px] md:pt-[280px]">
                <span class="font-black text-3xl tb:text-7xl text-main_dark">404</span>
            </div>
            <div class="pt-1">
                <span class="font-semibold text-sm sm:text-base tb:text-lg md:text-2xl text-card_dark">Looks like the page is missing.</span>
            </div>
            <div class="pt-3 md:w-[500px]">
                <span class="font-semibold text-sm sm:text-base tb:text-lg md:text-lg text-card_dark">Rest assured that we have assigned our best detective to handle the situation.</span>
            </div>
            <div class="pt-3 md:pt-5">
                <span class="font-semibold text-sm sm:text-base tb:text-lg md:text-lg text-card_dark">In the meantime, it might be a good idea for you to</span>
            </div>
            <div class="pt-2 md:pt-4">
                <a href={{ url('index') }}>
                    <button class="w-32 h-9 text-sm sm:text-base rounded-md text-center text-white bg-card_dark uppercase">return home</button>
                </a>
            </div>
            
        </div>
    </div>
</body>
</html>