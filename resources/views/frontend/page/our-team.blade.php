
<section class="w-full h-full relative overflow-hidden">
    
    {{-- <!-- Decorative wave -->
    <div class="absolute top-0 right-0 w-full h-40 bg-gradient from-[#cfa55a] via-[#f5e3b0] to-[#8b5a2b] rotate-1"></div>

    <div class="relative max-w-7xl mx-auto px-6 py-16 flex flex-col md:flex-row gap-10 items-start">
        
        <!-- Left Profile -->
        <div class="flex-shrink-0">
            <div class="w-44 h-44 rounded-full border-4 border-[#d6b56d] overflow-hidden bg-white shadow-lg">
                <img 
                    src="{{ asset('assets/profile/1768750850-seang_pov.png') }}" 
                    alt="Mr. Seang Pov"
                    class="w-full h-full object-cover"
                >
            </div>
        </div>

        <!-- Right Content -->
        <div class="text-[#1f2a44]">
            <h2 class="text-3xl font-bold">
                Mr. Seang Pov
            </h2>
            <p class="text-lg font-semibold text-[#1f2a44] mt-1 border-b border-[#1f2a44] w-full inline-block pb-1">
                Board of Director
            </p>

            <div class="mt-6 space-y-4 text-sm leading-relaxed max-w-4xl">
                <p>
                    At Pov Bopheak Land & Home Co., Ltd., we believe that real estate is about far more than property alone, it is about people, 
                    trust, and the future we help shape together. Cambodia, and particularly Phnom Penh, is entering a pivotal phase of growth. As 
                    the city continues to develop into a modern and dynamic regional center, the real estate market presents significant opportunities. 
                    At the same time, this progress requires responsibility, transparency, and a long-term perspective. Pov Bopheak Land & Home Co., Ltd. 
                    was founded on these principles. 
                </p>

                <p>
                    From the outset, our shared vision has been clear: to connect clients with real estate opportunities that are not only attractive today, but 
                    sustainable and valuable for the long term. We focus on carefully selected condominiums, landed properties, land plots, and exclusive developments 
                    that meet high standards of location, construction quality, legal clarity, and investment potential.
                </p>

                <p>
                    What truly distinguishes our company is our belief in relationships over transactions. Whether we are supporting first-time homebuyers, families seeking 
                    to upgrade their lifestyle, or investors pursuing strategic returns, we take the time to understand individual goals and provide professional, honest 
                    guidance at every stage of the process. Trust is built through consistency, transparency, and accountability, and we treat that trust as our most valuable asset. 
                </p>

                <p>
                    We work closely with reputable developers, landowners, and partners who share our commitment to quality, integrity, and responsible development. 
                    Through these partnerships, we aim to contribute positively to Cambodia’s real estate landscape by supporting projects that strengthen communities 
                    and create lasting value. As founders, we remain personally committed to the values on which Pov Bopheak Land & Home Co., Ltd. was established: 
                    integrity, professionalism, and long-term value creation.
                </p>
                <p>Our ambition is not only to grow as a company, but to grow alongside our clients, partners, and the future of Cambodia. </p>
                <p class="font-medium">
                    Thank you for your trust in Pov Bopheak Land & Home Co., Ltd. We look forward to building the future, responsibly and together.
                </p>
            </div>
        </div>
    </div> --}}
    <img src="{{ asset('assets/about_us/sms-form-chairman-en.svg') }}" alt="" class="w-full h-full object-cover"
     style="user-select: none; pointer-events: none; -webkit-user-select: none; -moz-user-select: none; -ms-user-select: none;">
</section>

@php
    $pattern = [3, 4]; 
    $teams = $showOurTeam;
    $index = 0;
    $i = 0;
@endphp

<div class="w-full h-auto bg-[#ffffff] py-10">
    <h1 class="text-2xl md:text-5xl font-semibold text-center text-[#03254B] mb-10">
       {{ app()->getLocale() === 'en'
            ? ' Our Team'
            : (app()->getLocale() === 'kh'
                ? 'ក្រុមការងាររបស់យើងខ្ញុំ'
                : ' Our Team')
        }}
    </h1>

    <div class="max-w-7xl mx-auto space-y-12 px-2 md:px-4">

        @while ($index < $teams->count())
            @php
                $take = $pattern[$i % count($pattern)];
                $group = $teams->slice($index, $take);
                $index += $take;
                $i++;
            @endphp

            <div class="grid gap-4 md:gap-10 place-items-center mx-auto"
                 style="display: grid; grid-template-columns: repeat({{ $take }}, minmax(0, 1fr)); {{ $take == 3 ? 'max-width: 48rem;' : 'max-width: 64rem;' }}">

                @foreach ($group as $item)
                    <div class="flex flex-col items-center text-center space-y-2 w-full">
                        <div class="w-16 h-16 sm:w-20 sm:h-20 md:w-28 md:h-28 lg:w-32 lg:h-32 rounded-full overflow-hidden">
                            <img src="{{ asset('assets/team/'. $item->profile) }}"
                                 alt="{{ $item->name_en }}"
                                 class="w-full h-full object-cover">
                        </div>

                        <div class="space-y-1 md:h-0 h-12">
                            <h3 class="text-[#03254B] font-semibold text-[10px] sm:text-xs md:text-base leading-tight">
                                {{
                                app()->getLocale() === 'en'
                                    ?  $item->name_en 
                                    : (app()->getLocale() === 'kh'
                                        ? $item->name_kh 
                                        : $item->name_en )
                                }}
                            </h3>
                            <p class="text-[9px] sm:text-[10px] md:text-sm text-gray-500 leading-tight">
                                {{
                                app()->getLocale() === 'en'
                                    ?  $item->position_en 
                                    : (app()->getLocale() === 'kh'
                                        ? $item->position_kh 
                                        : $item->position_cn  )
                                }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
        @endwhile

    </div>
</div>