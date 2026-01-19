@php
    $pattern = [3, 4]; // repeating pattern
    $teams = $showOurTeam;
    $index = 0;
    $i = 0;
@endphp

<div class="w-full h-auto bg-[#ffffff]">
    <h1 class="text-3xl md:text-5xl font-semibold text-center text-[#03254B] py-16">
        Our Team
    </h1>

    <div class="max-w-7xl mx-auto space-y-12">

        @while ($index < $teams->count())
            @php
                $take = $pattern[$i % count($pattern)];
                $group = $teams->slice($index, $take);
                $index += $take;
                $i++;
            @endphp

            <!-- Team Row -->
            <div class="grid 
                grid-cols-1 
                md:grid-cols-{{ $take == 3 ? '3' : '2' }} 
                lg:grid-cols-{{ $take }} 
                gap-10 
                place-items-center 
                mx-auto
                {{ $take == 3 ? 'max-w-3xl' : 'max-w-5xl' }}"
                >

                @foreach ($group as $item)
                    <div class="flex flex-col items-center text-center space-y-4">
                        <!-- Avatar -->
                        <div class="w-32 h-32 rounded-full flex items-end justify-center">
                            <img src="{{ asset('assets/team/'. $item->profile) }}"
                                 alt="{{ $item->name_en }}"
                                 class="w-28 h-28 rounded-full object-cover">
                        </div>

                        <!-- Name & Position -->
                        <div class="space-y-1">
                            <h3 class="text-[#03254B] font-semibold text-base">
                                {{ $item->name_en }}
                            </h3>
                            <p class="text-sm text-gray-500">
                                {{ $item->position_en }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
        @endwhile

    </div>
</div>
