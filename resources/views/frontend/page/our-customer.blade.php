<div class="relative w-full pt-8 overflow-hidden" id="our-customer">
    <h1 class="text-3xl md:text-5xl font-semibold text-center text-[#03254B] py-16">
        Our Customers
        <p class="text-md md:text-lg text-center font-normal text-[#03254B] py-2">
            local and international customers.
        </p>
    </h1>
    {{-- Pictute of Customers --}}
    <div class="w-full flex flex-col md:flex-row gap-2 px-4 md:px-6">
    
        @foreach ($showCustomer as $customer)
            @if(is_array($customer->images) && count($customer->images))
                @foreach($customer->images as $img)
                    <img src="{{ asset($img) }}"
                       class="w-full md:w-1/5 h-64 object-cover"
                        alt="Customer Image">
                @endforeach
            @endif
        @endforeach

        {{-- <img src="{{ asset('assets/our-customer/3.png') }}"
            class="w-full md:w-1/5 h-64 object-cover" alt="">

        <img src="{{ asset('assets/our-customer/2.png') }}"
            class="w-full md:w-1/5 h-64 object-cover" alt="">

        <img src="{{ asset('assets/our-customer/1.png') }}"
            class="w-full md:w-1/5 h-64 object-cover" alt="">

        <img src="{{ asset('assets/our-customer/5.png') }}"
            class="w-full md:w-1/5 h-64 object-cover" alt=""> --}}
    </div>

</div>