
<section class="relative overflow-hidden">
    <h1 class="text-2xl md:text-5xl font-semibold text-center text-[#03254B] py-4">
        {{ app()->getLocale() === 'en'
            ? 'Message from the Chairman'
            : (app()->getLocale() === 'kh'
                ? 'សារពីអគ្គនាយកក្រុមហ៊ុន'
                : 'Message from the Chairman')
        }}
    </h1>
    <img src="{{ app()->getLocale() === 'en'
            ? asset('assets/about_us/sms-form-chairman-en.svg')
            : (app()->getLocale() === 'kh'
                ? asset('assets/about_us/ms-form-chiarman-kh.svg')
                : asset('assets/about_us/sms-form-chairman-en.svg'))
        }}" alt="" class="w-full object-cover"
     style="user-select:none; pointer-events:none;">
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