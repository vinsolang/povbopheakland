<div class="relative w-full pt-8 overflow-hidden" id="our-customer"
     x-data="{
        index: 2,
        total: {{ $showCustomer->sum(fn($c) => is_array($c->images) ? count($c->images) : 0) }},
        touchStart: 0,
        touchEnd: 0,
        handleSwipe() {
            const diff = this.touchStart - this.touchEnd;
            if (diff > 50) this.index = (this.index < this.total - 1) ? this.index + 1 : 0;
            if (diff < -50) this.index = (this.index > 0) ? this.index - 1 : this.total - 1;
        }
     }">

    <h1 class="text-2xl md:text-5xl font-semibold text-center text-[#03254B] py-4 md:py-16">
        Our Customers
        <p class="text-sm md:text-lg font-normal text-[#03254B] py-2 md:px-0 px-10">
            All our projects are well-trusted by all local and national customers.
        </p>
    </h1>

    <div class="relative md:hidden overflow-hidden px-4"
         @touchstart="touchStart = $event.touches[0].clientX"
         @touchend="touchEnd = $event.changedTouches[0].clientX; handleSwipe()">
        
        <div class="flex transition-transform duration-500 ease-out"
             :style="`transform: translateX(-${index * 100}%)`"
             style="display: flex; width: 100%;">

            @foreach ($showCustomer as $customer)
                @if(is_array($customer->images))
                    @foreach($customer->images as $img)
                        <div class="min-w-full flex-shrink-0">
                            <img src="{{ asset($img) }}"
                                 class="w-full h-64 object-cover rounded-xl"
                                 alt="Customer Image">
                        </div>
                    @endforeach
                @endif
            @endforeach
        </div>

        <button
            @click="index = index > 0 ? index - 1 : total - 1"
            class="absolute left-6 top-1/2 -translate-y-1/2 bg-white/90 w-10 h-10 rounded-full shadow-lg flex items-center justify-center z-10 active:scale-95 transition-transform">
            <span class="text-black">◀</span>
        </button>

        <button
            @click="index = index < total - 1 ? index + 1 : 0"
            class="absolute right-6 top-1/2 -translate-y-1/2 bg-white/90 w-10 h-10 rounded-full shadow-lg flex items-center justify-center z-10 active:scale-95 transition-transform">
            <span class="text-black">▶</span>
        </button>
    </div>

    <div class="hidden md:flex gap-2 px-6">
        @foreach ($showCustomer as $customer)
            @if(is_array($customer->images))
                @foreach($customer->images as $img)
                    <img src="{{ asset($img) }}"
                         class="w-1/5 h-64 object-cover"
                         alt="Customer Image">
                @endforeach
            @endif
        @endforeach
    </div>
</div>