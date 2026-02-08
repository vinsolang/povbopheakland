

<section class="bg-gray-50 py-16" id="news">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800">Latest News</h2>
            <p class="text-gray-600 mt-2">Stay updated with our latest activities</p>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($news as $item)
                <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden">

                    <!-- Image -->
                    <img
                        src="{{ asset($item['image'][0]) }}"
                        alt="{{ $item['name'] }}"
                        class="w-full h-48 object-cover"
                    >

                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">
                            {{ $item['name'] }}
                        </h3>

                        <p class="text-gray-600 text-sm mt-2 line-clamp-3 h-[10vh]">
                            {{ $item['desc'] }}
                        </p>

                        <div class="flex justify-between items-center mt-4">
                            <span class="text-xs text-gray-500">
                                {{ \Carbon\Carbon::parse($item['date'])->format('d M Y') }}
                            </span>

                            <a href="{{ route('news.show', $item['slug']) }}"
                               class="text-indigo-600 font-semibold text-sm hover:underline">
                                
                            </a>
                            <div class="w-36 h-8 rounded-full bg-[#03244a] flex items-center justify-center">
                <a href="{{ route('news.show', $item['slug']) }}" class="cursor-pointer bg-linear-to-r from-[#f2ad46] via-[#f7ca68] to-[#fce88d]
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

