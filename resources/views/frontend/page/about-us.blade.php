<div id="about-us" class="max-w-7xl mx-auto flex lg:flex-row flex-col justify-between items-center
           lg:space-x-12 space-y-6 lg:space-y-0 pt-24 px-4" x-data="{showModal: false}">

    <!-- Image -->
    <div class="w-full lg:w-1/2">
        <img src="{{ asset('assets/about_us/' . $showAboutUs[0]->image) }}" class="rounded-2xl w-full object-cover"
            alt="About Us">
    </div>

    <!-- Text -->
    <div class="w-full lg:w-1/2 flex flex-col space-y-6 text-[#03244a]">

        <h1 class="text-2xl md:text-5xl font-semibold">
            {{
    app()->getLocale() === 'en'
    ? $showAboutUs[0]->title_en
    : (app()->getLocale() === 'kh'
        ? $showAboutUs[0]->title_kh
        : $showAboutUs[0]->title_cn)
            }}
        </h1>

        <!-- Short Description Preview -->
        @php
            $lang = app()->getLocale(); // en, kh, cn

            $descField = "description_$lang";

            $description = $showAboutUs[0]->$descField ?? '';
            $paragraphs = preg_split("/\n\s*\n/", $description);
            $previewParagraphs = array_slice($paragraphs, 0, 2);
        @endphp

        <div class="relative space-y-4 font-medium">
            <div class="absolute inset-y-0 right-0 w-4/5
                            bg-gradient-to-l from-white/80 via-white/60 to-transparent
                            blur-xl rounded-lg"></div>
            @foreach($previewParagraphs as $p)
                <p class="relative z-10">{{ $p }}</p>
            @endforeach
        </div>

        <!-- Button wrapper (background) -->
        <div class="">
            <div class="w-36 h-12 rounded-full bg-[#03244a] flex items-center justify-center">
                <button @click="showModal = true" class="cursor-pointer bg-linear-to-r from-[#f2ad46] via-[#f7ca68] to-[#fce88d]
                   bg-clip-text text-transparent font-semibold text-lg">
                    {{ app()->getLocale() === 'en'
    ? ' Read More'
    : (app()->getLocale() === 'kh'
        ? 'អានបន្ថែម'
        : ' Read More')
            }}
                </button>
            </div>
        </div>

    </div>

    <!-- Modal read more for backend-->
    <div x-show="showModal" x-transition.opacity
        class="fixed inset-0 bg-black/50 flex items-center justify-center z-30 px-4" style="display: none;">

        <div @click.away="showModal = false"
            class="bg-white max-w-3xl w-full p-8 relative overflow-y-auto max-h-[80vh] px-6 rounded-xl">

            <!-- Close Button -->
            <button @click="showModal = false"
                class="fixed top-16 right-8 md:right-0 md:top-20 z-50 text-black hover:text-gray-700 md:w-4xl text-2xl font-bold">&times;</button>

            <!-- Modal Content -->
            <h2 class="text-3xl font-semibold mb-6">
            
                {{
    app()->getLocale() === 'en'
    ? $showAboutUs[0]->title_en
    : (app()->getLocale() === 'kh'
        ? $showAboutUs[0]->title_kh
        : $showAboutUs[0]->title_cn)
            }}
            
             </h2>

            <div class="space-y-4 text-[#03244a] text-md md:text-lg">
                @foreach($paragraphs as $p)
                    <p>{{ $p }}</p>
                @endforeach
            </div>
        </div>
    </div>
    
</div>

<div x-data="{
                showVision: false,
                showMission: false,
                showCore: false
            }">
   <div class="flex justify-center items-center md:pt-14 md:py-0 py-2 md:mt-4 mt-0 space-x-6 md:space-y-0 space-y-6">
        
        <button @click="showVision = true" class="cursor-pointer">
            <div class="w-36 h-12 rounded-full flex flex-col items-center justify-center">
                <img src="{{ asset('assets/icon-project/icons8-night-vision-100.png') }}" alt="">
                <p class="cursor-pointer text-[#03244a] font-semibold text-lg">
                    Our Vision
                </p>
            </div>
        </button>

        <button  @click="showMission = true" class="cursor-pointer">
            <div class="w-40 h-14 rounded-full flex flex-col items-center justify-center">
                <img src="{{ asset('assets/icon-project/icons8-mission-100.png') }}" alt="">
                <p class="cursor-pointer text-[#03244a] font-semibold text-lg">
                    Our Mission
                </p>
            </div>
        </button>

        <button @click="showCore = true" class="cursor-pointer">
            <div class="w-44 h-12 rounded-full flex flex-col items-center justify-center">
                <img src="{{ asset('assets/icon-project/icons8-diamond-100.png') }}" alt="">
                <p class="cursor-pointer text-[#03244a] font-semibold text-lg">
                    Our Core Values
                </p>
            </div>
        </button>
   </div>


    <!-- Modal Vission static-->
    <div x-show="showVision" x-transition.opacity
        class="fixed inset-0 bg-black/50 flex items-center justify-center z-30 px-4" style="display: none;">

        <div @click.away="showVision = false"
            class="bg-white max-w-3xl w-full p-8 relative overflow-y-auto max-h-[80vh] px-6 rounded-xl">

            <!-- Close Button -->
            <button @click="showVision = false" class="absolute top-3 right-3 w-10 h-10 flex items-center justify-center
                rounded-full hover:bg-gray-100 text-2xl font-bold text-[#03244a]">&times;</button>

            <!-- Modal Content -->
            <div class="flex items-center space-x-3">
                <img src="{{ asset('assets/icon-project/icons8-night-vision-100.png') }}" alt="" class="w-16 h-16">
                <h2 class="text-3xl font-semibold mb-6 text-[#03244a]">Our Vision</h2>
            </div>

            <div class="space-y-4 text-[#03244a] text-md md:text-lg">
                To become one of Cambodia’s most trusted and forward thinking real estate companies, shaping sustainable
                communities
                and creating long-term value for homeowners, investors, and future generations, while contributing
                positively to Phnom Penh’s
                transformation into a leading regional capital. <br>
                <b>In short, we do not just follow Cambodia’s growth; we help define it.</b>
            </div>
        </div>
    </div>
    <!-- Modal Mission static-->
    <div x-show="showMission" x-transition.opacity
        class="fixed inset-0 bg-black/50 flex items-center justify-center z-30 px-4" style="display: none;">

        <div @click.away="showMission = false"
            class="bg-white max-w-3xl w-full p-8 relative overflow-y-auto max-h-[80vh] px-6 rounded-xl">

            <!-- Close Button -->
            <button @click="showMission = false" class="fixed z-40 top-0 right-0 md:top-24 md:right-100 w-10 h-10 flex items-center justify-center
                rounded-full hover:bg-gray-100 text-2xl font-bold text-[#03244a]">&times;</button>

            <!-- Modal Content -->
            <div class="flex items-center space-x-3">
                <img src="{{ asset('assets/icon-project/icons8-mission-100.png') }}" alt="" class="w-20 h-20">
                <h2 class="text-3xl font-semibold mb-6 text-[#03244a]">Our Mission</h2>
            </div>

            <div class="space-y-4 text-[#03244a] text-md md:text-lg">
                <p>
                    Our mission is to provide professional, transparent, and value-driven real estate solutions in
                    Cambodia by connecting people
                    with high-quality condominiums, landed properties, land plots, and exclusive developments that stand
                    the test of time.
                    We are committed to:
                </p>
                <section class="max-w-6xl mx-auto px-4 py-2 md:py-4 bg-white text-[#0b2c52]">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-16 md:gap-y-8 gap-y-2">

                        <!-- Item 01 -->
                        <div class="relative">
                            <div class="flex items-center space-x-4">
                                <span class="text-4xl font-serif text-[#c9a96a]">01</span>
                                <div class="flex-1 border-t border-[#c9a96a]"></div>
                            </div>
                            <p class="mt-4 text-lg leading-relaxed">
                                Offering carefully selected properties
                                with strong fundamentals and clear legal
                                standing
                            </p>
                        </div>

                        <!-- Item 02 -->
                        <div class="relative">
                            <div class="flex items-center space-x-4">
                                <span class="text-4xl font-serif text-[#c9a96a]">02</span>
                                <div class="flex-1 border-t border-[#c9a96a]"></div>
                            </div>
                            <p class="mt-4 text-lg leading-relaxed">
                                Guiding clients with honesty, expertise, and
                                local market insight
                            </p>
                        </div>

                        <!-- Item 03 -->
                        <div class="relative">
                            <div class="flex items-center space-x-4">
                                <span class="text-4xl font-serif text-[#c9a96a]">03</span>
                                <div class="flex-1 border-t border-[#c9a96a]"></div>
                            </div>
                            <p class="mt-4 text-lg leading-relaxed">
                                Supporting first-time buyers, families,
                                and investors with tailored advice
                                and end-to-end service
                            </p>
                        </div>

                        <!-- Item 04 -->
                        <div class="relative">
                            <div class="flex items-center space-x-4">
                                <span class="text-4xl font-serif text-[#c9a96a]">04</span>
                                <div class="flex-1 border-t border-[#c9a96a]"></div>
                            </div>
                            <p class="mt-4 text-lg leading-relaxed">
                                Building long-term relationships based on trust, performance,
                                and shared success. Every transaction is approached not as a
                                sale, but as a strategic decision for our clients’ future.
                            </p>
                        </div>

                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- Modal Mission static-->
    <div x-show="showCore" x-transition.opacity
        class="fixed inset-0 bg-black/50 flex items-center justify-center z-30 px-4" style="display: none;">

        <div @click.away="showCore = false"
            class="bg-white max-w-3xl w-full p-8 relative overflow-y-auto max-h-[80vh] px-6 rounded-xl">

            <!-- Close Button -->
            <button @click="showCore = false"
                class="fixed top-16 right-8 md:right-0 md:top-20 z-50 text-black hover:text-gray-700 md:w-4xl text-2xl font-bold">&times;</button>

            <!-- Modal Content -->
            <div class="flex items-center space-x-3">
                <img src="{{ asset('assets/icon-project/icons8-diamond-100.png') }}" alt="" class="w-16 h-16">
                <h2 class="text-3xl font-semibold mb-6 text-[#03244a]">Our Core Value</h2>
            </div>

            <div class="space-y-6 text-md md:text-lg">

                <!-- Item 1 -->
                <div class="space-y-2">
                    <div class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="w-6 h-6 text-[#03244a]" fill="none" stroke="currentColor" stroke-width="1.8"
                            viewBox="0 0 24 24">
                            <path d="M12 3l9 4.5-9 4.5-9-4.5L12 3z" />
                            <path d="M3 12l9 4.5 9-4.5" />
                        </svg>

                        <h1 class="text-[#d1af80] font-semibold text-lg">
                            Partnership & Responsibility
                        </h1>
                    </div>

                    <p class="text-[#03244a] pl-9">
                        We work closely with reputable developers, landowners, and stakeholders who share
                        our commitment to quality, responsibility, and sustainable development.
                    </p>
                </div>

                <!-- Item 2 -->
                <div class="space-y-2">
                    <div class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-[#03244a]" fill="none" stroke="currentColor" stroke-width="1.8"
                            viewBox="0 0 24 24">
                            <path d="M12 6v6l4 2" />
                            <circle cx="12" cy="12" r="9" />
                        </svg>

                        <h1 class="text-[#d1af80] font-semibold text-lg">
                            Professional Excellence
                        </h1>
                    </div>

                    <p class="text-[#03244a] pl-9">
                        From legal clarity to project quality and client service, we maintain high
                        standards at every stage of the real estate journey.
                    </p>
                </div>

                <!-- Item 3 -->
                <div class="space-y-2">
                    <div class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-[#03244a]" fill="none" stroke="currentColor" stroke-width="1.8"
                            viewBox="0 0 24 24">
                            <path d="M3 12h18" />
                            <path d="M12 3v18" />
                        </svg>

                        <h1 class="text-[#d1af80] font-semibold text-lg">
                            Local Expertise, Global Mindset
                        </h1>
                    </div>

                    <p class="text-[#03244a] pl-9">
                        Rooted in Phnom Penh and Cambodia, we combine deep local knowledge with a
                        forward-looking, international perspective, essential in a fast-evolving market.
                    </p>
                </div>

                <!-- Item 4 -->
                <div class="space-y-2">
                    <div class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-[#03244a]" fill="none" stroke="currentColor" stroke-width="1.8"
                            viewBox="0 0 24 24">
                            <path d="M12 2l7 7-7 7-7-7 7-7z" />
                        </svg>

                        <h1 class="text-[#d1af80] font-semibold text-lg">
                            Long-Term Value Creation
                        </h1>
                    </div>

                    <p class="text-[#03244a] pl-9">
                        We focus on sustainable growth, not short-term gains. Every property we represent
                        is selected for its lasting value, investment potential, and contribution to quality living.
                    </p>
                </div>

                <!-- Item 5 -->
                <div class="space-y-2">
                    <div class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-[#03244a]" fill="none" stroke="currentColor" stroke-width="1.8"
                            viewBox="0 0 24 24">
                            <path d="M12 21s-6-4.35-6-10a6 6 0 0112 0c0 5.65-6 10-6 10z" />
                        </svg>

                        <h1 class="text-[#d1af80] font-semibold text-lg">
                            People Before Property
                        </h1>
                    </div>

                    <p class="text-[#03244a] pl-9">
                        Real estate is about people. We listen carefully, advise responsibly, and act in
                        the best interests of our clients, partners, and communities.
                    </p>
                </div>

            </div>

        </div>
    </div>
</div>