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

<body>
    @php
    $staticItems = [
        ['id' => 10, 
        'des' => '
            
        ', 
        'img' => []],
    ];

    // This finds the specific array that matches the current project ID
    $currentProjectData = collect($staticItems)->firstWhere('id', $projects->id);
    
    // Fallback in case no match is found to prevent "undefined"
    if (!$currentProjectData) {
        $currentProjectData = ['des' => 'No description available', 'img' => []];
    }
@endphp


    <div x-data='projectData(@json($categories), "{{ app()->getLocale() }}", @json($currentProjectData))'
     class="relative w-full min-h-screen">

        <!-- Background -->
        <div class="absolute inset-0 -z-10">
        <img
            src="{{ asset('assets/banner/b-pov-bopeak-land.png') }}"
            class="w-full h-full object-cover"
        >

        <!-- Overlay -->
        <div class="absolute inset-0 bg-white/70"></div>
    </div>


        <!-- Header -->
        <div class="flex justify-between items-center px-8 md:px-14 py-4">
            <a href="{{ route('home') }}#real-project" class="flex items-center gap-3">
                <img src="{{ asset('assets/logo/logo-fina.png') }}" alt="Logo" class="w-14 h-auto">
                <div class="hidden xl:flex items-center text-[#03254B] text-lg leading-none">
                    <span class="font-semibold">Pov&nbsp;Bopheak</span>
                    <span class="font-normal ml-1"> Land & Home Co., Ltd</span>
                </div>
            </a>
            <div class="flex items-center gap-3 text-[#03254B] text-md md:text-lg">
                <p>Real Estate Projects</p>
            </div>
        </div>

        <!-- Main Content -->
        <div
             x-data="{
                ...projectData(...),
                showImage: false,
                activeImage: null
            }"
            class="max-w-7xl mx-auto w-full
            flex lg:flex-row flex-col
            justify-between
            px-2 md:px-12 lg:px-4 xl:px-12
            mt-12">

            <!-- Left Column -->
            <div class="w-full md:w-1/2 flex flex-col space-y-8 mt-4">
                <!-- Title -->
                <h1 class="max-w-sm text-[#03254B] text-2xl md:text-4xl font-medium lg:px-0 px-4">
                    {{ app()->getLocale() === 'en' ? $projects->name_en : (app()->getLocale() === 'kh' ? $projects->name_kh : $projects->name_ch) }}
                </h1>

                <!-- Category Buttons -->
                {{-- <div class="flex flex-wrap justify-start items-center gap-2 w-full px-2">
                    <template x-for="(cat, index) in categories" :key="index">
                        <div
                            class="inline-flex rounded-full"
                            :class="activeCategory === index 
                                ? 'bg-gradient-to-r from-yellow-400 to-yellow-200' 
                                : 'bg-transparent'"
                        >
                            <button
                                class="px-4 py-1 md:px-6 md:py-4
                                    text-md md:text-lg 
                                    text-center whitespace-nowrap rounded-full"
                                @click="setActiveCategory(index)"
                                x-text="cat?.name?.[lang] ?? ''">
                            </button>
                        </div>
                    </template>
                </div> --}}
                <div class="flex flex-wrap justify-start items-center gap-2 w-full px-2">
                    <template x-for="(cat, index) in categories" :key="index">
                        <div
                            class="inline-flex rounded-full transition-all duration-200"
                            :class="{
                                'bg-gradient-to-r from-yellow-400 to-yellow-200': activeCategory === index,
                                'border border-[#03254B]': activeCategory === null && index === 0
                            }"
                        >
                            <button
                                class="px-4 py-1 md:px-6 md:py-4
                                    text-md md:text-lg 
                                    text-center whitespace-nowrap rounded-full"
                                @click="setActiveCategory(index)"
                                x-text="cat?.name?.[lang] ?? ''">
                            </button>
                        </div>
                    </template>
                </div>


                <!-- Type Buttons -->
                <div class="flex md:space-y-0 space-y-3 space-x-1 md:space-x-3 mt-2"
                    x-show="categories[activeCategory] && Array.isArray(categories[activeCategory].cat_type) && categories[activeCategory].cat_type.length">
                    <template x-for="(type, tIndex) in categories[activeCategory].cat_type" :key="tIndex">
                        <div x-show="type?.title?.[lang]" class="flex justify-center md:items-center rounded-full"
                            :class="activeType === tIndex ? 'bg-[#03254B] py-2 text-white' : ''">
                            <button class="cursor-pointer w-[100px] h-6 md:w-32 md:h-8 text-xs md:text-md"
                                @click="setActiveType(tIndex)" x-text="type.title[lang]"></button>
                        </div>
                    </template>
                </div>

                <!-- Description -->
                <div class="text-[#03254B] text-sm md:text-md mt-2 lg:px-0 px-4">
                    <template x-for="item in displayedItems()" :key="item.slug">
                        <p x-html="item.des.replace(/\n/g, '<br>')" class="mb-4 leading-5"></p>
                        
                    </template>
                </div>

                <!-- Download PDF -->
                @if ($projects->pdf)
                <div class="flex justify-center items-center font-medium bg-[#03254B] rounded-full w-40 h-12 lg:ml-0 ml-4">
                    <a href="{{ asset('storage/' . $projects->pdf) }}" download
                        class="flex justify-center items-center font-medium bg-[#03254B] rounded-full w-40 h-12">
                        <span
                            class="bg-gradient-to-r from-yellow-400 to-yellow-200 bg-clip-text text-transparent">Download
                            PDF</span>
                    </a>
                </div>

        <!-- Slider version mobile -->
<div 
    class="md:hidden max-w-7xl mx-auto mt-2 px-3"
    x-show="currentImages().length > 0"
    x-transition
    x-data="projectData(@json($categories), '{{ app()->getLocale() }}', @json($staticItems))"
>
    <!-- IMAGE AREA -->
    <div class="relative w-full overflow-hidden rounded-xl">

        <!-- SLIDER -->
        <div 
            id="slider"
            class="flex transition-transform duration-500 ease-in-out"
        >
            <template x-for="img in currentImages()" :key="img">
                <img
                    :src="'{{ asset('storage') }}/' + img"
                    class="w-full h-56 object-cover flex-shrink-0"
                    @click="activeImage = img; showImage = true"
                />
            </template>
        </div>

        <!-- PREV BUTTON -->
        <button 
            @click="prev()"
            class="absolute left-2 top-1/2 -translate-y-1/2 z-10 bg-black/60 rounded-full p-2"
        >
            <svg width="36" height="36" viewBox="0 0 42 42" fill="none">
                <circle cx="21" cy="21" r="21" fill="#1E1E1E"/>
                <path
                    d="M10 22.7321C8.66667 21.9623 8.66667 20.0378 10 19.268L25 10.6077C26.3333 9.8379 28 10.8002 28 12.3398L28 29.6603C28 31.1999 26.3333 32.1621 25 31.3923L10 22.7321Z"
                    fill="white"
                />
            </svg>
        </button>

        <!-- NEXT BUTTON -->
        <button 
            @click="next()"
            class="absolute right-2 top-1/2 -translate-y-1/2 z-10 bg-black/60 rounded-full p-2"
        >
            <svg width="36" height="36" viewBox="0 0 42 42" fill="none">
                <circle cx="21" cy="21" r="21" fill="#1E1E1E"/>
                <path
                    d="M32 19.2679C33.3333 20.0377 33.3333 21.9623 32 22.7321L17 31.3923C15.6667 32.1621 14 31.1999 14 29.6603L14 12.3397C14 10.8001 15.6667 9.83789 17 10.6077L32 19.2679Z"
                    fill="white"
                />
            </svg>
        </button>

    </div>
</div>

            @endif
            </div>

            <!-- Right Column -->
            <div class="md:w-1/2 w-full flex flex-col items-center space-y-4 mt-4 md:ml-0 lg:ml-6 xl:ml-0 px-3">
                <iframe
                    src="{{ $projects->locate_link }}"
                    class="w-full max-w-full h-72 rounded-xl"
                    style="border:0;"
                    loading="lazy">
                </iframe>

                {{-- <p class="text-[#03254B] text-lg px-2 md:px-8 text-left">
                    Located on Sna Techo, Balang Commune, Prasat Bakong District, Siem Reap Province
                </p> --}}

                <!-- Social Icons -->
                <div class="flex md:flex-row flex-wrap md:gap-4 py-5">
                    @php
                        $socialLinks = [
                            'fb' => 'https://www.facebook.com/PovBopheakGroup',
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
                            class="w-10 h-10 md:w-12 md:h-12 rounded-full cursor-pointer hover:scale-110 transition">
                            <img src="{{ asset('assets/icon/' . $icon . '.png') }}" alt="{{ $icon }}"
                                class="w-full h-full object-cover">
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Slider version dasktop-->
        <div class="hidden max-w-7xl mx-auto mt-24 md:flex items-center gap-6"  
         x-show="currentImages().length > 0"
        x-transition
        x-data="projectData(@json($categories), '{{ app()->getLocale() }}', @json($staticItems))">

            <!-- PREV -->
            <button @click="prev()" class="shrink-0">
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
                    <template x-for="img in currentImages()" :key="img">
                        <img :src="'{{ asset('storage') }}/' + img"
                            class="w-[300px] h-[200px] rounded-lg shrink-0 object-cover" />
                        
                    </template>
                </div>
            </div>

            <!-- NEXT -->
            <button @click="next()" class="shrink-0">
                <svg width="42" height="42" viewBox="0 0 42 42" fill="none">
                    <circle cx="21" cy="21" r="21" fill="#1E1E1E" />
                    <path
                        d="M32 19.2679C33.3333 20.0377 33.3333 21.9623 32 22.7321L17 31.3923C15.6667 32.1621 14 31.1999 14 29.6603L14 12.3397C14 10.8001 15.6667 9.83789 17 10.6077L32 19.2679Z"
                        fill="white" />
                </svg>
            </button>
        </div>

    </div>

    <script>
        function projectData(categoriesData = [], defaultLang = 'en', initialStatic = {}) {
    return {
        categories: Array.isArray(categoriesData) ? categoriesData : [],
        activeCategory: null,
        activeType: null,
        lang: defaultLang,
        // This is the specific data for the clicked project
        initialStatic: initialStatic,

        sliderIndex: 0,
        visibleCount: 3,
        gap: 16,

        setActiveCategory(index) {
            this.activeCategory = index;
            this.activeType = 0;
            this.sliderIndex = 0;
            this.resetSlider();
        },

        setActiveType(index) {
            this.activeType = index;
            this.sliderIndex = 0;
            this.resetSlider();
        },

        displayedItems() {
            // 1. If user clicked a category/button, show that dynamic data
            if (this.activeCategory !== null) {
                const cat = this.categories[this.activeCategory];
                if (cat && Array.isArray(cat.cat_type) && cat.cat_type.length) {
                    const type = cat.cat_type[this.activeType] || {};
                    return [{
                        des: type.des?.[this.lang] || '',
                        img: Array.isArray(type.img) ? type.img : []
                    }];
                }
            }

            // 2. Default load: Show the static data we passed from PHP
            return [this.initialStatic];
        },

        currentImages() {
            const items = this.displayedItems();
            return (items.length > 0 && Array.isArray(items[0].img)) ? items[0].img : [];
        },

        // Slider functions
        next() {
            const maxIndex = this.currentImages().length - this.visibleCount;
            if (this.sliderIndex < maxIndex) {
                this.sliderIndex++;
                this.updateSlider();
            }
        },
        prev() {
            if (this.sliderIndex > 0) {
                this.sliderIndex--;
                this.updateSlider();
            }
        },
        updateSlider() {
            const container = document.getElementById('slider');
            if (container) {
                container.style.transform = `translateX(-${(300 + this.gap) * this.sliderIndex}px)`;
            }
        },
        resetSlider() {
            const container = document.getElementById('slider');
            if (container) container.style.transform = `translateX(0px)`;
        }
    }
}
    </script>


</body>

</html>

