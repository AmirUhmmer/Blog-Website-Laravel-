<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('illus/quill.png') }}">
    <title>Document</title>
</head>
<body>
    <a href={{ url('index') }}>
        <span class="w-screen mx-auto text-center hover:cursor-pointer decoration-light_blue hover:text-pink_red hover:underline transition-all duration-150">
            404
        </span>
    </a>
        <img src="illus/mib.gif" class="mx-auto object-cover h-[900px]" alt="">
</body>
</html>