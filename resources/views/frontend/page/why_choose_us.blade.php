<div class="relative w-full h-auto lg:h-[97vh] xl:h-auto md:mt-24 lg:py-6 md:py-12 py-6">
    
    <!-- BACKGROUND IMAGE -->
    <img 
        src="{{ asset('assets/background/why-choose-us.png') }}" 
        alt="Background"
        class="absolute inset-0 w-full h-full -z-10"
    >

    <div class="">
       <div class="text-white max-w-6xl mx-auto py-8 flex lg:flex-row flex-col justify-center items-center space-x-8">
            <h1 class="text-xl md:text-3xl lg:text-4xl">
            {{ app()->getLocale() === 'en'
                ? 'Why Choose Us?'
                : (app()->getLocale() === 'kh'
                    ? 'ហេតុផលដែលអតិថិជនជ្រើសរើសយើងខ្ញុំ?'
                    : 'Why Choose Us?')
            }}
            </h1>
            <svg class="w-[90vh] h-2 lg:w-1 lg:h-24" viewBox="0 0 3 47" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect class="flex justify-center items-center lg:w-1 lg:h-47 mx-auto" fill="url(#paint0_linear_85_1276)"/>
            <defs>
            <linearGradient id="paint0_linear_85_1276" x1="1.5" y1="0" x2="1.5" y2="47" gradientUnits="userSpaceOnUse">
            <stop stop-color="#F2A93F"/>
            <stop offset="1" stop-color="#FFFBA6"/>
            </linearGradient>
            </defs>
            </svg>
            <p class="max-w-lg md:px-0 px-4">
                {{ app()->getLocale() === 'en'
                ? 'People choose us because we help Cambodians and foreigners achieve homeownership. It’s proof that you don’t need massive capital, just the right partner and a clear vision.'
                : (app()->getLocale() === 'kh'
                    ? 'អតិថិជនជ្រើសរើសសេវាកម្មអចលទ្រព្យពីក្រុមហ៊ុនយើងខ្ញ៉ំពីព្រោះយើងជួយអតិថិជនក្នុងស្រុក និងវិនិយោគិនបរទេសឱ្យសម្រេចបាននូវភាពជាកម្មសិទ្ធលើអចលវត្ថុយ៉ាងពេញលេញដែលនេះចង្អុលបង្ហាញថា អតិថិជនមិនចាំបាច់ត្រូវការដើមទុនច្រើននោះទេ គ្រាន់តែត្រូវការដៃគូត្រឹមត្រូវ និងចក្ខុវិស័យច្បាស់លាស់។'
                    : 'It’s proof that you don’t need massive capital, just the right partner and a clear vision.')
            }}
            </p>
       </div>
     
       <!-- Content -->
    <div class="relative max-w-7xl mx-auto px-2">
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-x-2 gap-y-4">

            <!-- Card 01 -->
            <div class="bg-white rounded-2xl pt-12 px-2 md:p-12 py-4 shadow-lg relative flex flex-col lg:h-52 h-62">
                <div
                    class="absolute -top-0.5 mt-4 right-4 w-10 h-10 rounded-full flex items-center justify-center px-4"
                    style="background: linear-gradient(90deg, #F2A93F 0%, #FFFBA6 100%);">
                    <span class="text-[#03254B] font-semibold">01</span>
                </div>

                <div class="">
                    <h3 class="text-[#F2A93F] font-semibold mb-3 py-2">
                        {{ app()->getLocale() === 'en'
                            ? 'Quality You Can Trust'
                            : (app()->getLocale() === 'kh'
                                ? 'គុណភាពដែលលោកអ្នកអាចទុកចិត្តបាន'
                                : 'Quality You Can Trust')
                        }}
                    </h3>
                    <p class="text-[#03254B] text-xs md:text-sm leading-relaxed">
                        {{ app()->getLocale() === 'en'
                            ? 'We sell only qualified projects and develop well-planned'
                            : (app()->getLocale() === 'kh'
                                ? 'យើងខ្ញ៉ំលក់តែគម្រោងដែលមានគុណវឌ្ឍន៍គ្រប់គ្រាន់ និងអភិវឌ្ឍលំនៅដ្ឋានផ្អែកលើផែនការរៀបចំបានល្អ និងសាងសង់ឡើងតាមស្តង់ដាគង់វង្សយូរអង្វែង។'
                                : 'We sell only qualified projects and develop well-planned')
                        }}
                    </p>
                </div>
            </div>

            <!-- Card 02 -->
            <div class="bg-white rounded-2xl pt-12 px-2 md:p-12 py-4 shadow-lg relative flex flex-col lg:h-52 h-62">
                <div
                    class="absolute -top-0.5 mt-4 right-4 w-10 h-10 rounded-full flex items-center justify-center px-4"
                    style="background: linear-gradient(90deg, #F2A93F 0%, #FFFBA6 100%);">
                    <span class="text-[#03254B] font-semibold">02</span>
                </div>

                <div>
                    <h3 class="text-[#F2A93F] font-semibold mb-3 py-2">
                        {{ app()->getLocale() === 'en'
                            ? 'Affordable Housing with Quality'
                            : (app()->getLocale() === 'kh'
                                ? 'គម្រោងមានតម្លៃសមរម្យជាមួយនឹងគុណភាព'
                                : 'Affordable Housing with Quality')
                        }}
                    </h3>
                    <p class="text-[#03254B] text-xs md:text-sm leading-relaxed md:mt-0 -mt-4">
                        {{ app()->getLocale() === 'en'
                            ? 'Our developments deliver high-quality housing at accessible price points, starting from USD 29,000, ensuring value, durability, and long-term ownership confidence.'
                            : (app()->getLocale() === 'kh'
                                ? 'យើងខ្ញ៉ំផ្តល់ជូននូវគម្រោងប្រកបដោយគុណភាពខ្ពស់ក្នុងតម្លៃសមរម្យ ចាប់ពី 29,000 ដុល្លារអាមេរិក ដែលធានានូវតម្លៃ ភាពធន់ និងទំនុកចិត្តលើភាពជាម្ចាស់កម្មសិទ្ធិរយៈពេលវែង។'
                                : 'Our developments deliver high-quality housing at accessible price points, starting from USD 29,000, ensuring value, durability, and long-term ownership confidence.')
                        }}
                    </p>
                </div>
            </div>

             <!-- Card 03 -->
            <div class="bg-white rounded-2xl pt-12 px-2 md:p-12 py-4 shadow-lg relative flex flex-col lg:h-52 h-62">
                <div
                    class="absolute -top-0.5 mt-4 right-4 w-10 h-10 rounded-full flex items-center justify-center px-4"
                    style="background: linear-gradient(90deg, #F2A93F 0%, #FFFBA6 100%);">
                    <span class="text-[#03254B] font-semibold">03</span>
                </div>

                <div>
                    <h3 class="text-[#F2A93F] font-semibold mb-3 py-2">
                        {{ app()->getLocale() === 'en'
                            ? 'Legal Security Guaranteed'
                            : (app()->getLocale() === 'kh'
                                ? 'ធានាសុវត្ថិភាពផ្នែកច្បាប់'
                                : 'Legal Security Guaranteed')
                        }}
                    </h3>
                    <p class="text-[#03254B] text-xs md:text-sm leading-relaxed">
                        {{ app()->getLocale() === 'en'
                            ? 'Every unit comes with full land title and complete ownership documentation, ensuring peace of mind.'
                            : (app()->getLocale() === 'kh'
                                ? 'គ្រប់គម្រោងនិមួយៗភ្ជាប់មកជាមួយនឹងប័ណ្ណកម្មសិទ្ធិដីធ្លីពេញលេញ និងឯកសារកម្មសិទ្ធិដែលធានាបាននូវភាពស្ងប់សុខផ្លូវចិត្តជូនអតិថិជន។'
                                : 'Every unit comes with full land title and complete ownership documentation, ensuring peace of mind.')
                        }}
                    </p>
                </div>
            </div>
             <!-- Card 04 -->
            <div class="bg-white rounded-2xl pt-12 px-2 md:p-12 py-4 shadow-lg relative flex flex-col lg:h-52 h-62">
                <div
                    class="absolute -top-0.5 mt-4 right-4 w-10 h-10 rounded-full flex items-center justify-center px-4"
                    style="background: linear-gradient(90deg, #F2A93F 0%, #FFFBA6 100%);">
                    <span class="text-[#03254B] font-semibold">04</span>
                </div>

                <div>
                    <h3 class="text-[#F2A93F] font-semibold mb-3 py-2">
                         {{ app()->getLocale() === 'en'
                            ? 'Proven Brand & Track Record'
                            : (app()->getLocale() === 'kh'
                                ? 'កេរ្ត៍ឈ្មោះ និងកំណត់ត្រាដែលបានបង្ហាញឱ្យឃើញ'
                                : 'Proven Brand & Track Record')
                        }}
                    </h3>
                    <p class="text-[#03254B] text-xs md:text-sm leading-relaxed">
                        
                        {{ app()->getLocale() === 'en'
                            ? 'Backed by Pov Bopheak Land & Home Co., Ltd., a trusted name with multiple successful projects and over 10,200 units sold.'
                            : (app()->getLocale() === 'kh'
                                ? 'ក្រុមហ៊ុនពៅបូភ័ក្រលែន & ហូមឯ.កគឺជាក្រុមហ៊ុនមានកេរ្ត៍ឈ្មោះ និងទំនុកចិត្ត ជាមួយនឹងគម្រោងលក់ជោគជ័យជាច្រើន និងលក់បានជាង 10,200 យូនីត គិតត្រឹមឆ្នាំ2025។'
                                : 'Backed by Pov Bopheak Land & Home Co., Ltd., a trusted name with multiple successful projects and over 10,200 units sold.')
                        }}
                    </p>
                </div>
            </div>
             <!-- Card 05 -->
            <div class="bg-white rounded-2xl pt-12 px-2 md:p-12 py-4 shadow-lg relative flex flex-col lg:h-52 h-62">
                <div
                    class="absolute -top-0.5 mt-4 right-4 w-10 h-10 rounded-full flex items-center justify-center px-4"
                    style="background: linear-gradient(90deg, #F2A93F 0%, #FFFBA6 100%);">
                    <span class="text-[#03254B] font-semibold">05</span>
                </div>

                <div>
                    <h3 class="text-[#F2A93F] font-semibold mb-3 py-2">
                        
                        {{ app()->getLocale() === 'en'
                            ? 'Customer-Centered Support'
                            : (app()->getLocale() === 'kh'
                                ? 'ការគាំទ្រដោយផ្តោតលើអតិថិជនជាចម្បង'
                                : 'Customer-Centered Support')
                        }}
                    </h3>
                    <p class="text-[#03254B] text-xs md:text-sm leading-relaxed">
                        
                         {{ app()->getLocale() === 'en'
                            ? 'Our Khmer/English/Chinese-speaking advisors guide buyers step by step—from inquiry to handover.'
                            : (app()->getLocale() === 'kh'
                                ? 'យើងខ្ញ៉ំមានអ្នកជំនាញប្រឹក្សាអចលទ្រព្យក្នុងស្រុកដែលអាចនិយាយភាសាខ្មែរ/អង់គ្លេស/ចិន បាន ណែនាំអ្នកទិញមួយជំហានម្តងៗ  ចាប់ពីការសាកសួររហូតដល់ការប្រគល់អចលទ្រព្យជូន។'
                                : 'Our Khmer/English/Chinese-speaking advisors guide buyers step by step—from inquiry to handover.')
                        }}
                    </p>
                </div>
            </div>
             <!-- Card 06 -->
            <div class="bg-white rounded-2xl pt-12 px-2 md:p-12 py-4 shadow-lg relative flex flex-col lg:h-52 h-62">
                <div
                    class="absolute -top-0.5 mt-4 right-4 w-10 h-10 rounded-full flex items-center justify-center px-4"
                    style="background: linear-gradient(90deg, #F2A93F 0%, #FFFBA6 100%);">
                    <span class="text-[#03254B] font-semibold">06</span>
                </div>

                <div>
                    <h3 class="text-[#F2A93F] font-semibold mb-3 py-2">
                        
                        {{ app()->getLocale() === 'en'
                            ? 'Strong Investment Potential'
                            : (app()->getLocale() === 'kh'
                                ? 'សក្តានុពលក្នុងការវិនិយោគខ្លាំង'
                                : 'Strong Investment Potential')
                        }}
                    </h3>
                    <p class="text-[#03254B] text-xs md:text-sm leading-relaxed">
                       
                        {{ app()->getLocale() === 'en'
                            ? 'Strategically located projects offer high rental demand and long-term return potential.'
                            : (app()->getLocale() === 'kh'
                                ? 'គម្រោងរបស់យើងខ្ញ៉ំមានទីតាំងយុទ្ធសាស្ត្រដោយផ្តល់នូវតម្រូវការជួលខ្ពស់ និងសក្តានុពលផលចំណេញរយៈពេលវែង។'
                                : 'Strategically located projects offer high rental demand and long-term return potential.')
                        }}
                    </p>
                </div>
            </div>

        </div>
    </div>
    </div>

</div>



