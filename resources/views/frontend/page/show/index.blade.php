<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth overflow-x-hidden">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Check Price & Availability</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="icon" href="{{ asset('assets/logo/logo-fina.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body class="">

    <!-- Scroll To Top Button -->
    <button id="scrollTopBtn" class="fixed bottom-6 right-6 z-50 hidden cursor-pointer transition-opacity duration-300">
        <img src="{{ asset('assets/icon/button-scroll.png') }}" alt="Scroll to top" class="w-12 h-12 object-cover">
    </button>

    <div class="relative w-full min-h-screen" x-data='projectData(@json($categories), "{{ app()->getLocale() }}")'>

        <!-- BACKGROUND IMAGE -->
        <img src="{{ asset('assets/background/bg-show.png') }}" alt="Background"
            class="absolute inset-0 w-full h-full object-cover -z-10">

        <!-- Header -->
        <div class="flex justify-between items-center px-8 md:px-14 py-4">
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <img src="{{ asset('assets/logo/logo-fina.png') }}" alt="Logo" class="w-14 h-auto">
                <div class="hidden xl:flex items-center text-[#03254B] text-lg leading-none">
                    <span class="font-semibold">Pov&nbsp;Bopheak</span>
                    <span class="font-normal ml-1"> Land & Home Co., Ltd</span>
                </div>
            </a>
            <div class="flex items-center gap-3 text-[#03254B] text-lg">
                <p>Real Estate Projects</p>
            </div>
        </div>

        <!-- Main Content -->
        <div class="max-w-7xl mx-auto flex lg:flex-row flex-col justify-between px-12 mt-12">

            <!-- Left Column -->
            <div class="w-full md:w-1/2 flex flex-col space-y-8 mt-4">
                <!-- Title -->
                <h1 class="max-w-sm text-[#03254B] text-2xl md:text-4xl font-medium">
                    {{ app()->getLocale() === 'en'
                        ? $projects->name_en
                        : (app()->getLocale() === 'kh'
                            ? $projects->name_kh
                            : $projects->name_ch) }}
                </h1>

                <!-- Category Filter -->
                @php
                    $categories = is_array($projects->category)
                        ? $projects->category
                        : json_decode($projects->category ?? '[]', true);
                @endphp

                <div class="space-y-6">
                    <!-- Category Buttons -->
                    <div class="flex md:flex-row flex-wrap space-x-3 md:space-y-0 space-y-3">
                        <template x-for="(cat, index) in categories" :key="index">
                            <div class="flex justify-center items-center" :class="activeCategory === index ?
                                    'bg-gradient-to-r from-yellow-400 to-yellow-200 rounded-full px-4 py-2' :
                                    ''">
                                <button class="cursor-pointer w-40 h-10" @click="setActiveCategory(index)"
                                    x-text="cat?.name?.[lang] ?? ''"></button>
                            </div>
                        </template>
                    </div>

                    <!-- Category Type Buttons -->
                    <div class="flex md:flex-row flex-wrap md:space-y-0 space-y-3 space-x-3 mt-2" x-show="categories[activeCategory]
                            && Array.isArray(categories[activeCategory].cat_type)
                            && categories[activeCategory].cat_type.length">
                        <template x-for="(type, tIndex) in categories[activeCategory].cat_type" :key="tIndex">
                            <div x-show="type?.title?.[lang]" class="flex justify-center items-center rounded-full"
                                :class="activeType === tIndex ? 'bg-[#03254B] py-2 text-white' : ''">
                                <button class="cursor-pointer w-32 h-8" @click="setActiveType(tIndex)" :style="activeType === tIndex ?
                                        'background: linear-gradient(90deg,#F2A93F,#FFFBA6); -
                                    webkit - background - clip: text; -
                                    webkit - text - fill - color: transparent;
                                    ': '
                                    '" x-text="type.title[lang]"></button>
                            </div>
                        </template>

                    </div>


                    <div class="text-[#03254B] text-lg mt-6">
                        <p x-text="currentDes()"></p>
                    </div>

                </div>

                <!-- Download PDF Button -->
                <div class="flex justify-center items-center font-medium bg-[#03254B] rounded-full w-40 h-12">
                    {{-- <button
                        class="w-full h-full cursor-pointer bg-gradient-to-r from-yellow-400 to-yellow-200 text-transparent bg-clip-text font-medium">
                        Download PDF
                    </button> --}}
                    {{-- @if ($projects->pdf) --}}
                    <a href="{{ asset('storage/' . $projects->pdf) }}" download
                        class="flex justify-center items-center font-medium bg-[#03254B] rounded-full w-40 h-12">
                        <span class="bg-gradient-to-r from-yellow-400 to-yellow-200 bg-clip-text text-transparent">
                            Download PDF
                        </span>
                    </a>
                    {{-- @endif --}}

                </div>
            </div>

            <!-- Right Column -->
            <div class="md:w-1/2 w-full flex flex-col items-center space-y-4 mt-4">
                <!-- Map -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3907.9916007958345!2d104.8869697!3d11.623948799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310953002172e7a9%3A0x1c5e614ac11878b6!2sPov%20Bopheak%20Land%20%26%20Home!5e0!3m2!1sen!2skh!4v1768547106090!5m2!1sen!2skh"
                    class="w-full h-72 rounded-xl" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

                <p class="text-[#03254B] text-lg px-2 md:px-8 text-left">
                    Located on Sna Techo, Balang Commune, Prasat Bakong District, Siem Reap Province
                </p>

                <!-- Social Icons -->

                <div class="flex md:flex-row flex-wrap gap-4">
                    @php
                        $socialLinks = [
                            'fb' => 'https://www.facebook.com/profile.php?id=100065170836537',
                            'te' => 'https://t.me/+85516222809',
                            'whatsapp' => 'https://wa.me/087446277',
                            'youtube' => 'https://www.youtube.com/@povbopheaklandhome3948',
                            'tiktok' => 'https://www.tiktok.com/@povbopheaklandandhome?_r=1&_t=ZS-92yM8DJyKCW',
                            'wechat' => 'https://www.wechat.com/',
                            'in' => 'https://www.linkedin.com/company/pov-bopheak-land-home-co-ltd/?viewAsMember=tru',
                        ];
                    @endphp

                    @foreach ($socialLinks as $icon => $link)
                        <a href="{{ $link }}" target="_blank" rel="noopener noreferrer"
                            class="w-12 h-12 rounded-full cursor-pointer hover:scale-110 transition">
                            <img src="{{ asset('assets/icon/' . $icon . '.png') }}" alt="{{ $icon }}"
                                class="w-full h-full object-cover">
                        </a>
                    @endforeach
                </div>

            </div>
        </div>

        <!-- Image Slider -->
        <div class="max-w-7xl mx-auto mt-24 flex items-center gap-6">

            <!-- PREV -->
            <button id="prevBtn" class="shrink-0">
                <svg width="42" height="42" viewBox="0 0 42 42" fill="none">
                    <circle cx="21" cy="21" r="21" transform="rotate(-180 21 21)" fill="#1E1E1E" />
                    <path
                        d="M10 22.7321C8.66667 21.9623 8.66667 20.0378 10 19.268L25 10.6077C26.3333 9.8379 28 10.8002 28 12.3398L28 29.6603C28 31.1999 26.3333 32.1621 25 31.3923L10 22.7321Z"
                        fill="white" />
                </svg>
            </button>

            <!-- SLIDER -->
            <div class="overflow-hidden w-full">
                <div id="slider" class="flex gap-4 transition-transform duration-500 ease-in-out">
                    <!-- 🔁 Dynamic Images -->
                    <template x-for="(img, index) in currentImages()" :key="index">
                        <img :src="'{{ asset('storage') }}/' + img"
                            class="w-[300px] h-[200px] rounded-lg shrink-0 object-cover" />
                    </template>
                </div>
            </div>

            <!-- NEXT -->
            <button id="nextBtn" class="shrink-0">
                <svg width="42" height="42" viewBox="0 0 42 42" fill="none">
                    <circle cx="21" cy="21" r="21" fill="#1E1E1E" />
                    <path
                        d="M32 19.2679C33.3333 20.0377 33.3333 21.9623 32 22.7321L17 31.3923C15.6667 32.1621 14 31.1999 14 29.6603L14 12.3397C14 10.8001 15.6667 9.83789 17 10.6077L32 19.2679Z"
                        fill="white" />
                </svg>
            </button>

        </div>

    </div>

    <!-- Scripts -->
    <script>
        // Scroll to top
        const scrollBtn = document.getElementById('scrollTopBtn');
        window.addEventListener('scroll', () => {
            scrollBtn.classList.toggle('hidden', window.scrollY < 300);
        });

        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const slider = document.getElementById('slider');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');

            let index = 0;
            const visible = 3; // how many images visible
            const imageWidth = 316; // 300px + gap

            function updateSlider() {
                slider.style.transform = `translateX(-${index * imageWidth}px)`;
            }

            nextBtn.addEventListener('click', () => {
                if (index < slider.children.length - visible) {
                    index++;
                    updateSlider();
                }
            });

            prevBtn.addEventListener('click', () => {
                if (index > 0) {
                    index--;
                    updateSlider();
                }
            });
        });
    </script>


    <script>
        function projectData(categoriesData = [], defaultLang = 'en') {
            return {
                categories: Array.isArray(categoriesData) ? categoriesData : [],
                activeCategory: 0,
                activeType: 0,
                lang: defaultLang,

                setActiveCategory(index) {
                    this.activeCategory = index;
                    this.activeType = 0;
                },

                setActiveType(index) {
                    this.activeType = index;
                },

                currentDes() {
                    const cat = this.categories[this.activeCategory];
                    if (!cat) return '';

                    if (Array.isArray(cat.cat_type) && cat.cat_type.length) {
                        const type = cat.cat_type[this.activeType] || {};
                        return type.des?.[this.lang] || type.title?.[this.lang] || '';
                    }

                    return cat.name?.[this.lang] || '';
                },

                currentImages() {
                    const cat = this.categories[this.activeCategory];
                    if (!cat) return [];

                    if (Array.isArray(cat.cat_type) && cat.cat_type.length) {
                        const type = cat.cat_type[this.activeType] || {};
                        return Array.isArray(type.img) ? type.img : [];
                    }

                    return [];
                }
            }
        }
    </script>


</body>

</html>