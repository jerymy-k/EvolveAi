<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="/asset/images/AIA.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404</title>
</head>
<body >
 <div class="flex flex-col items-center justify-center text-sm h-screen">
    <p class="font-medium text-lg text-indigo-500">404 Error</p>
    <h2 class="md:text-6xl text-4xl font-semibold text-gray-800">Page Not Found</h2>
    <p class="text-base mt-4 text-gray-500">Sorry, we couldn’t find the page you’re looking for.</p>
    <div class="flex items-center gap-4 mt-6">
        <a href="/?path=dashboard/index" type="button" class="bg-indigo-500 hover:bg-indigo-600 px-7 py-2.5 text-white rounded active:scale-95 transition-all">
            Go back home
</a>
        <!-- Contact support (Maintenance) -->
<div class="relative group inline-block">
  <a
    href="#"
    class="group flex items-center gap-2 px-7 py-2.5
           opacity-50 cursor-not-allowed select-none
           active:scale-95 transition"
    aria-disabled="true"
    onclick="return false;"
  >
    Contact support
    <svg class="mt-1 transition" width="15" height="11" viewBox="0 0 15 11" fill="none"
         xmlns="http://www.w3.org/2000/svg">
      <path d="M1 5.5h13.092M8.949 1l5.143 4.5L8.949 10"
            stroke="#1F2937" stroke-width="1.5"
            stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </a>

  <!-- Tooltip -->
  <div
    class="absolute -top-8 left-1/2 -translate-x-1/2
           hidden group-hover:block
           bg-gray-900 text-white text-xs
           px-3 py-1 rounded-md whitespace-nowrap"
  >
    Fonctionnalité en maintenance
  </div>
</div>

    </div>
</div>
</body>
</html>