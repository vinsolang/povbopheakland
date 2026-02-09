

<section class="bg-gray-50 py-16" id="news">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Header -->
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-5xl font-semibold text-center text-[#03254B]">Latest News</h2>
            <p class="text-sm md:text-lg font-normal text-[#03254B] py-2 md:px-0 px-10">Stay updated with our latest activities</p>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($news as $item)
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

                    <!-- Image -->
                    @if (is_array($item->images) && count($item->images) > 0)
                        <img
                            src="{{ asset($item->images[0]) }}"
                            alt="{{ $item->title_en }}"
                            class="w-full h-60 object-cover rounded"
                        >
                    @endif

                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-[#03244a] h-auto md:h-[4vh] line-clamp-1 overflow-hidden">
                             {{ app()->getLocale() === 'en'
                                ? $item->title_en 
                                : (app()->getLocale() === 'kh'
                                    ? $item->title_kh
                                    : $item->title_cn)
                            }}
                        </h3>

                        <p class="text-[#03244a] text-sm mt-2 line-clamp-3 overflow-hidden h-auto md:h-[8vh]">
                            {{ app()->getLocale() === 'en'
                                ? $item->description_en  
                                : (app()->getLocale() === 'kh'
                                    ? $item->description_kh
                                    : $item->description_cn)
                            }}
                        </p>

                        <div class="flex justify-between items-center mt-4">
                            <span class="text-xs text-gray-500 font-semibold">
                                {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}
                            </span>

                            <a href="{{ route('news.show', $item->id) }}"
                               class="text-indigo-600 font-bold text-sm hover:underline">
                                
                            </a>
                            <div class="w-36 h-8 rounded-full bg-[#03244a] flex items-center justify-center">
                                <a href="{{ route('news.show', $item->id) }}" class="cursor-pointer bg-linear-to-r from-[#f2ad46] via-[#f7ca68] to-[#fce88d]
                                bg-clip-text text-transparent font-semibold text-md">
                                    {{ app()->getLocale() === 'en'
                                    ? 'Read More'
                                    : (app()->getLocale() === 'kh'
                                        ? 'អានបន្ថែម'
                                        : '继续阅读')
                                    }}→
                                </a>
                             </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

