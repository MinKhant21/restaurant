
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Resturant</title>
<link rel="canonical" href="https://www.creative-tim.com/product/soft-ui-flowbite-pro" />
<link rel="preconnect" href="https://fonts.googleapis.com/" />
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet" />

<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
<main class="bg-gray-50">
<div class="flex flex-col justify-center items-center px-6 pt-8 mx-auto md:h-screen pt:mt-0">


<div class="p-10 w-full max-w-lg bg-white rounded-2xl shadow-xl shadow-gray-300">
<div class="space-y-8">
<h2 class="text-2xl text-center font-bold text-gray-900">
Sign in to platform
</h2>
@if(Session::has('error'))
<p class="text-sm text-red-500 text-center">{{ Session::get('error') }}</p>
@endif
<form method="POST" class="mt-8 space-y-6" action="{{ route('admin.login') }}">
@csrf
    <div>
<label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label
                >
<input type="email" name="email" id="email" value="admin@gmail.com" class="border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5" placeholder="name@company.com" required />
</div>
<div>
<label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your password</label
                >
<input type="password" value="admin123" name="password" id="password" placeholder="••••••••" class="border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5" required />
</div>
<div class="flex items-start">
<button type="submit" class="py-3 px-5 w-full text-base font-medium text-center text-white bg-gradient-to-br from-pink-500 to-violet-500 hover:scale-[1.02] shadow-md shadow-gray-300 transition-transform rounded-lg sm:w-auto mx-auto block">
Login to your account
</button>
</form>
</div>
</div>
</div>
</main>
<script src="../../app.bundle.js"></script>
</body>

<!-- Mirrored from demos.creative-tim.com/soft-ui-flowbite-pro/authentication/sign-in/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 08:38:16 GMT -->
</html>
