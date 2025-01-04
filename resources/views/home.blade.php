<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MGD Soccer Field</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://api.fontshare.com/v2/css?f[]=clash-display@600&display=swap" rel="stylesheet">
    <link rel="preconnet" href="https://fonts.googleapis.com">
    <link rel="preconnet" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body class="bg-[#F1F4F5]">
    <!-- Navigation Bar -->
    <nav class="flex flex-row max-w-6xl mx-auto justify-between items-center mt-10 ">
        <div>
            <a href="#home" class="flex flex-row items-center gap-x-1 ">
               <img src="{{ asset('assets/images/logo.png') }}" alt="Logo Image"  style="width: 60px; height: auto;">
                <p class="font-bold text-xl">MGD Soccer Field</p>
            </a>
        </div>
        <ul class="flex flex-row gap-x-7">
            <li>
                <a href="#" class="text-base text-indigo950 hover:font-semibold hover:text-blue-500">Book</a>
            </li>
            <li>
                <a href="#" class="text-base text-indigo950 hover:font-semibold hover:text-blue-500">Membership</a>
            </li>
            <li>
                <a href="#" class="text-base text-indigo950 hover:font-semibold hover:text-blue-500">Activity</a>
            </li>
            <li>
                <a href="#" class="text-base text-indigo950 hover:font-semibold hover:text-blue-500">About</a>
            </li>
        </ul>
        <div class="flex flex-row items-center gap-x-3">
            <div class="bg-white items-center rounded-full flex p-[12px]">
                <a href="#">
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 7.67001V6.70001C8 4.45001 9.81 2.24001 12.06 2.03001C14.74 1.77001 17 3.88001 17 6.51001V7.89001" stroke="#080C2E" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9.50001 22H15.5C19.52 22 20.24 20.39 20.45 18.43L21.2 12.43C21.47 9.99 20.77 8 16.5 8H8.50001C4.23001 8 3.53001 9.99 3.80001 12.43L4.55001 18.43C4.76001 20.39 5.48001 22 9.50001 22Z" stroke="#080C2E" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.9955 12H16.0045" stroke="#080C2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8.99451 12H9.00349" stroke="#080C2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <circle cx="19.5" cy="7" r="4" fill="#FF3232"/>
                    </svg>        
                </a>
            </div>
            <a href="#" class="text-base bg-blue-700 text-white py-3 rounded-full font-semibold px-8 hover:bg-blue-500">Sign In</a>
        </div>
    </nav>
    <!-- Navigation Bar -->

    <!-- Hero Section -->

    <section class="hero max-w-6xl mx-auto pt-5 ">
        <div class="flex flex-row">
            <div>
                <h1 class="text-blue-700 font-['Clash_Display'] text-6xl leading-none" >
                    MGD <br>
                    SOCCER FIELD
                </h1>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione mollitia quaerat debitis quos deserunt adipisci eos modi laborum enim maiores.
                </p>
            </div>
            <div class="-mt-4">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo Image">
            </div>
        </div>
    </section>
    <!-- Hero Section -->
</body>
</html>
