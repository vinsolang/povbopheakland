<div id="real-project" class="bg-[#f2f3f5] w-full h-auto pt-2">
    <h1 class="text-2xl md:text-5xl font-semibold text-center text-[#03254B] py-2 md:mt-0 mt-4 md:py-10">Real Estate Projects</h1>
    {{-- Card of all project --}}
    <div class="2xl:max-w-6xl max-w-7xl mx-auto space-x-4 py-6">
        <div class="max-w-8xl mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-2 xl:px-24 lg:px-16 md:px-10 py-4">

                @foreach ($projects as $item)

                    <!-- CARD 1-->
                    <div class="bg-white rounded-2xl border border-[#D9D9D9] shadow-sm p-1 flex flex-col space-y-4">
                        <div class="h-56 md:h-60 bg-gray-200 rounded-xl overflow-hidden">
                            <img src="{{ asset('storage/'. $item->image) }}" class="w-full h-full object-cover" alt="">
                        </div>

                        <h3 class="max-w-56 mx-auto text-center font-semibold text-[#03254B] text-sm">
                            {{ $item->name_en }}
                        </h3>

                        <div
                            class="flex flex-col justify-center items-center text-center text-xs text-gray-500 mt-1 space-y-2">
                            <h3 class="max-w-40 mx-auto text-center font-semibold text-[#03254B] text-sm uppercase">
                                 {{ $item->type_en }}
                            </h3>
                            <p
                                class="flex justify-center items-center text-center text-xs md:text-sm font-normal max-w-48 mx-auto text-[#03254B]">
                                {{ $item->locate_text_en }}
                            </p>
                        </div>

                        <div class="mt-auto space-y-2 pt-4 py-4">
                            <button
                                class="w-full text-xs border border-[#03254B] rounded-full py-2 text-[#03254B] hover:bg-[#03254B] hover:text-white transition">
                                <a href="{{ route('show', $item->slug) }}">Check Price & Availability</a>
                            </button>
                            <button
                                class="w-full text-xs bg-linear-to-r from-[#F2A93F] to-[#FFFBA6] rounded-full py-2 font-medium">
                                <a href="{{ route('home') }}#contact-form">Book Free Consultation</a>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>