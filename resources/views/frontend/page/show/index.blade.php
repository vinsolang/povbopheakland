<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Check Price & Availability</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="icon" href="{{ asset('assets/logo/logo-fina.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="">
    {{-- Scroll To Top Button --}}
    <button
        id="scrollTopBtn"
        onclick="scrollToTop()"
        class="fixed bottom-6 right-6 z-50 hidden cursor-pointer transition-opacity duration-300"
    >
        <img 
            src="{{ asset('assets/icon/button-scroll.png') }}" 
            alt="Scroll to top"
            class="w-12 h-12 object-cover"
        >
    </button>
    <div class="relative w-full min-h-screen">

        <!-- BACKGROUND IMAGE -->
        <img src="{{ asset('assets/background/bg-show.png') }}" alt="Background"
            class="absolute inset-0 w-full h-full object-cover -z-10">

        <div class="flex justify-between items-center px-8 md:px-14">
            <div class="flex items-center gap-3 mt-8">
                <!-- Logo -->
                <img src="{{ asset('assets/logo/logo-fina.png') }}" alt="Logo" class="w-14 h-auto">

                <!-- Text -->
                <div class="hidden xl:flex items-center text-[#03254B] text-lg leading-none">
                    <span class="font-semibold">Pov&nbsp;Bopheak</span>
                    <span class="font-normal ml-1"> Land & Home Co., Ltd</span>
                </div>
            </div>
            <div class="flex items-center gap-3 mt-8 text-[#03254B] text-lg">
                <p>Real Estate Projects</p>
            </div>
        </div>

        {{-- Show About information project --}}

        <div class="max-w-7xl mx-auto flex lg:flex-row flex-col justify-between px-12 mt-12">

            <div class="w-full md:w-1/2 mx-auto flex flex-col space-y-8 mt-4">
                {{-- Title --}}
                <h1 class="max-w-sm text-[#03254B] text-2xl md:text-4xl font-medium">Pov Bopheak Kulen Home Project</h1>
                {{-- Filtter --}}
                <div class="flex space-x-3">
                    <div class="flex justify-center items-center" style="background: linear-gradient(90deg, #F2A93F 0%, #FFFBA6 100%);
                        border-radius: 24.5px;
                        ">
                        <button class="cursor-pointer w-40 h-10">Vacation Home</button>
                    </div>
                    <div class="flex justify-center items-center">
                        <button class="cursor-pointer w-40 h-10">Vacation Home</button>
                    </div>
                    <div class="flex justify-center items-center">
                        <button class="cursor-pointer w-40 h-10">Vacation Home</button>
                    </div>
                </div>
                {{-- type room --}}
                <div class="flex space-x-3">
                    <div class="flex justify-center items-center bg-[#03254B] rounded-full">
                        <button class="cursor-pointer w-32 h-8" style="background: linear-gradient(90deg, #F2A93F 0%, #FFFBA6 100%);
                            -webkit-background-clip: text;
                            -webkit-text-fill-color: transparent;
                            background-clip: text;
                            text-fill-color: transparent;">1 Bedroom</button>
                    </div>
                    <div class="flex justify-center items-center bg-white rounded-full">
                        <button class="cursor-pointer w-32 h-8">2 Bedrooms</button>
                    </div>
                    <div class="flex justify-center items-center bg-white rounded-full">
                        <button class="cursor-pointer w-32 h-8">3 Bedrooms</button>
                    </div>
                </div>

                <div>
                    {{-- Price of project --}}
                    {{-- <span>Price: </span> --}}
                    {{-- Cagory of room --}}
                    <div class="text-[#03254B] text-lg">
                        <p> Land Size : 7m x 15m </p>
                        <p>House Size: 5m x 7m </p>
                        <p class="linear-gradient">1 Bedroom  1 Kitchen  1 Bathroom  1 Roof Terrace</p>
                        <p>Many Extra’s</p>
                    </div>
                </div>

                {{-- Button Dowload PDF --}}
                <div class="flex justify-center items-center font-medium bg-[#03254B] rounded-full w-40 h-12">
                    <button class="cursor-pointer w-full h-14" style="background: linear-gradient(90deg, #F2A93F 0%, #FFFBA6 100%);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                        background-clip: text;
                        text-fill-color: transparent;">
                        Download PDF
                    </button>
                </div>
            </div>

            <div class="md:w-1/2 w-full mx-auto flex flex-col items-center space-y-4 mt-4">
                {{-- Map --}}
                <div class="w-full">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.070016297376!2d104.88439477480213!3d11.623954042990075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310953002172e7a9%3A0x1c5e614ac11878b6!2sPov%20Bopheak%20Land%20%26%20Home!5e1!3m2!1skm!2skh!4v1768798033272!5m2!1skm!2skh"
                        class="rounded-lg w-[90%] h-80"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div>
                    <p class="text-[#03254B] text-lg px-8">
                        Located on
                        Sna Techo, Balang Commune, Prasat Bakong District, Siem Reap Province
                    </p>
                </div>
                {{-- Icon Link Social Media --}}
                <div class="flex space-x-4">
                    <a href="" class="w-12 h-12 rounded-full cursor-pointer">
                        <img src="{{ asset('assets/icon/fb.png') }}" alt="" class="w-full h-full object-cover">
                    </a>
                    <a href="" class="w-12 h-12 rounded-full cursor-pointer">
                        <img src="{{ asset('assets/icon/te.png') }}" alt="" class="w-full h-full object-cover">
                    </a>
                    <a href="" class="w-12 h-12 rounded-full cursor-pointer">
                        <img src="{{ asset('assets/icon/whatsapp.png') }}" alt="" class="w-full h-full object-cover">
                    </a>
                    <a href="" class="w-12 h-12 rounded-full cursor-pointer">
                        <img src="{{ asset('assets/icon/youtube.png') }}" alt="" class="w-full h-full object-cover">
                    </a>
                    <a href="" class="w-12 h-12 rounded-full cursor-pointer">
                        <img src="{{ asset('assets/icon/tiktok.png') }}" alt="" class="w-full h-full object-cover">
                    </a>
                    <a href="" class="w-12 h-12 rounded-full cursor-pointer">
                        <img src="{{ asset('assets/icon/wechat.png') }}" alt="" class="w-full h-full object-cover">
                    </a>
                    <a href="" class="w-12 h-12 rounded-full cursor-pointer">
                        <img src="{{ asset('assets/icon/in.png') }}" alt="" class="w-full h-full object-cover">
                    </a>
                </div>
            </div>
        </div>

        {{-- Show slide image --}}

        <div class="max-w-[99%] mx-auto mt-24 py-6">

            <!-- MAIN ROW -->
            <div class="flex items-center gap-6">

                <!-- LEFT BUTTON SPACE -->
                <button id="prevBtn" class="shrink-0">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="21" cy="21" r="21" transform="rotate(-180 21 21)" fill="#1E1E1E" />
                        <path
                            d="M10 22.7321C8.66667 21.9623 8.66667 20.0378 10 19.268L25 10.6077C26.3333 9.8379 28 10.8002 28 12.3398L28 29.6603C28 31.1999 26.3333 32.1621 25 31.3923L10 22.7321Z"
                            fill="white" />
                    </svg>
                </button>

                <!-- IMAGE VIEWPORT -->
                <div class="overflow-hidden w-full">
                    <div id="slider" class="flex justify-center transition-transform duration-500 ease-in-out space-x-1 space-y-2">

                        <img src="https://picsum.photos/600/350?1"
                            class="w-[240px] h-[150px] object-cover shrink-0">
                        <img src="https://picsum.photos/600/350?2"
                            class="w-[240px] h-[150px] object-cover shrink-0">
                        <img src="https://picsum.photos/600/350?3"
                            class="w-[240px] h-[150px] object-cover shrink-0">
                        <img src="https://picsum.photos/600/350?4"
                            class="w-[240px] h-[150px] object-cover shrink-0">
                        <img src="https://picsum.photos/600/350?5"
                            class="w-[240px] h-[150px] object-cover shrink-0">
                        <img src="https://picsum.photos/600/350?5"
                            class="w-[240px] h-[150px] object-cover shrink-0">

                    </div>
                </div>

                <!-- RIGHT BUTTON SPACE -->
                <button id="nextBtn" class="shrink-0">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="21" cy="21" r="21" fill="#1E1E1E" />
                        <path
                            d="M32 19.2679C33.3333 20.0377 33.3333 21.9623 32 22.7321L17 31.3923C15.6667 32.1621 14 31.1999 14 29.6603L14 12.3397C14 10.8001 15.6667 9.83789 17 10.6077L32 19.2679Z"
                            fill="white" />
                    </svg>
                </button>

            </div>
        </div>

</body>

</html>
<script>
    const slider = document.getElementById('slider');
    const images = slider.children;
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    let index = 0;
    const visible = 3;               // change to 2 or 3
    const imageWidth = 316;          // 300 + gap

    function update() {
        slider.style.transform = `translateX(-${index * imageWidth}px)`;
    }

    nextBtn.onclick = () => {
        if (index < images.length - visible) {
            index++;
            update();
        }
    };

    prevBtn.onclick = () => {
        if (index > 0) {
            index--;
            update();
        }
    };

    update();
</script>
<script>
    const scrollBtn = document.getElementById('scrollTopBtn');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            scrollBtn.classList.remove('hidden');
        } else {
            scrollBtn.classList.add('hidden');
        }
    });

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>
