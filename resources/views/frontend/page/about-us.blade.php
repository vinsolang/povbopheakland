<div id="about-us" class="max-w-7xl mx-auto flex lg:flex-row flex-col justify-between items-center
           lg:space-x-12 space-y-6 lg:space-y-0 pt-24 px-4" x-data="{ showModal: false }">

    <!-- Image -->
    <div class="w-full lg:w-1/2">
        <img src="{{ asset('assets/about_us/'. $showAboutUs[0]->image) }}" class="rounded-2xl w-full object-cover" alt="About Us">
    </div>

    <!-- Text -->
    <div class="w-full lg:w-1/2 flex flex-col space-y-6 text-[#03244a]">

        <h1 class="text-2xl md:text-5xl font-semibold">
            {{ $showAboutUs[0]->title_en }}
        </h1>

        <!-- Short Description Preview -->
        @php
            $paragraphs = preg_split("/\n\s*\n/", $showAboutUs[0]->description_en);
            $previewParagraphs = array_slice($paragraphs, 0, 2); // show first 2 paragraphs
        @endphp

        <div class="space-y-4">
            @foreach($previewParagraphs as $p)
                <p>{{ $p }}</p>
            @endforeach
        </div>

        <!-- Button wrapper (background) -->
        <div class="-mt-2 md:mt-6 w-36 h-12 rounded-full bg-[#03244a] flex items-center justify-center">

            <button @click="showModal = true"
                    class="bg-linear-to-r from-[#f2ad46] via-[#f7ca68] to-[#fce88d]
                           bg-clip-text text-transparent font-semibold text-lg">
                Read More
            </button>
        </div>
    </div>

    <!-- Modal -->
    <div x-show="showModal"
         x-transition.opacity
         class="fixed inset-0 bg-black/50 flex items-center justify-center z-50"
         style="display: none;">

        <div @click.away="showModal = false"
             class="bg-white max-w-3xl w-full p-8 relative overflow-y-auto max-h-[80vh] px-6">

            <!-- Close Button -->
            <button @click="showModal = false"
                    class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-2xl font-bold">&times;</button>

            <!-- Modal Content -->
            <h2 class="text-3xl font-semibold mb-6">{{ $showAboutUs[0]->title_en }}</h2>

            <div class="space-y-4 text-[#03244a] text-md md:text-lg">
                @foreach($paragraphs as $p)
                    <p>{{ $p }}</p>
                @endforeach
            </div>
        </div>
    </div>

</div>