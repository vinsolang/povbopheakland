<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth overflow-x-hidden">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pov Bopheak Land</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="icon" href="{{ asset('assets/logo/logo-fina.png') }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>


        <style>
            [x-cloak] { display: none !important; }
        </style>
    </head>
    <body class="overflow-x-hidden">
        {{-- Scroll To Top Button --}}
        <button
            id="scrollTopBtn"
            onclick="scrollToTop()"
            class="fixed bottom-6 right-6 z-50 hidden cursor-pointer transition-opacity duration-300"
        >
            <img 
                src="{{ asset('assets/icon/button-scroll.png') }}" 
                alt="Scroll to top"
                class="w-12 h-12 object-contain md:object-cover animate-bounce"
            >
        </button>
        <div class="relative w-full min-h-screen">
    
            <!-- BACKGROUND IMAGE -->
            <img 
                src="{{ asset('assets/background/bg-home-3.png') }}" 
                alt="Background"
                class="absolute inset-0 h-[60%] w-full md:h-full object-cover -z-10"
            >

            <!-- CONTENT ON SAME IMAGE -->
            @include('components.navbar')
            @include('frontend.page.home')
            @include('frontend.page.about-us')

        </div>
        <!-- Real Estate Projects -->
        <div class="relative w-full py-0 md:py-24">
            @include('frontend.page.real-estate-projects')
        </div>
        {{-- Our Team --}}
        <div class="relative w-full -mt-8">
            @include('frontend.page.our-team')
        </div>
        {{-- Why Choose Us? --}}
        <div class="relative w-full -mt-8">
            @include('frontend.page.why_choose_us')
        </div>
        {{-- Our Customer --}}
        <div class="relative w-full -mt-8">
            @include('frontend.page.our-customer')
        </div>
        {{-- Contact Form --}}
        <div class="relative w-full -mt-8">
            @include('frontend.page.contact-form')
        </div>
        {{-- Freelancer --}}
        <div class="relative w-full -mt-8">
            @include('frontend.page.freelancers')
        </div>
        {{-- Background Footer --}}
        <div class="relative w-full md:mt-0 -mt-6">
            @include('components.footer')
        </div>
    </body>
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

</html>

























 {{-- <div class="relative w-full h-[180vh]">

            <!-- BACKGROUND IMAGE -->
            <img 
            src="{{ asset('assets/background/bg-home.png') }}" 
            alt="Background"
            class="w-full h-full object-cover"
            >

            <!-- NAVBAR OVER IMAGE -->
            <div class="absolute top-0 left-0 w-full z-50 space-y-20 lg:space-y-40">
                @include('components.navbar')
                @include('frontend.page.home')
                @include('frontend.page.about-us')
            </div>
        </div>
        <div class="relative lg:py-24 md:py-72 py-64">
            <div class="w-full bg-[#f2f3f5]">
                New section
            </div>
            <div class="w-full bg-[#f2f3f5]">
                New section 123456
            </div>
            <div class="w-full bg-[#f2f3f5]">
                New section 123456
            </div>
        </div> --}}
