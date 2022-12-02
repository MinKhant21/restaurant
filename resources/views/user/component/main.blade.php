<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restraunt</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/9c17cacf2d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('user_assets/css/style.css') }}">
</head>
<body>
    <nav class="flex justify-between p-4 items-center border-b border-gray-100">
        <a href="">
            <i class="fa-solid fa-angle-left"></i> Back</a>
        <h1 class="text-lg font-bold text-gray-700">
            Resturant
        </h1>
        <a href="">
            <i class="fa-solid fa-bell-concierge"></i>
        </a>
    </nav>
    @yield('content')
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js" integrity="sha512-xIPqqrfvUAc/Cspuj7Bq0UtHNo/5qkdyngx6Vwt+tmbvTLDszzXM0G6c91LXmGrRx8KEPulT+AfOOez+TeVylg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
@yield('js')
</html>