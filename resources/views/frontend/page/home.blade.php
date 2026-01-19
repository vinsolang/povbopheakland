<div class="flex justify-between 2xl:justify-center items-center overflow-hidden">
    <div class="space-y-6 max-w-7xl lg:px-4 xl:px-40 px-4 -mt-6 2xl:mt-64 lg:mt-40">
        <h1 class="text-3xl md:text-7xl font-bold" style="
                background: linear-gradient(90deg, #F2A93F 0%, #FFFBA6 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                text-fill-color: transparent;
                text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            ">
            Pov Bopheak Land
        </h1>
        <h3 class="text-2xl md:text-4xl text-[#03254b]">
            {{ app()->getLocale() === 'en' ? 'Modern Living, Smart Investment.' : (app()->getLocale() === 'kh' ? 'ការរស់នៅទំនើប ការវិនិយោគឆ្លាតវៃ' : '现代生活，明智投资。') }}
        </h3>
        <p class="text-md md:text-xl max-w-xl font-semibold text-[#03254b]">
            “Mid-range villas, condos, and shophouses designed for
            comfortable living and long-term value in prime locations.”
        </p>
        <div
            class="bg-[#f2b34e] w-64 h-12 md:w-72 md:h-20 flex justify-center items-center rounded-full md:mt-16 md:ml-8">
            <a href="#contact-form" class="text-lg md:text-xl text-[#03254b] font-bold">Book a Site Visit</a>
        </div>
    </div>
    {{-- Icon Social Media --}}
    <div class="space-y-2 px-4 lg:mt-24">
        <div class="relative flex justify-center items-center w-16 h-16 rounded-full">

            <!-- Current Language Button -->
            <button id="langBtn"
                class="flex justify-center items-center bg-[#03244a] w-10 h-10 rounded-full cursor-pointer">
                <span id="currentLangText" class="text-white text-lg font-semibold">
                    {{ strtoupper(app()->getLocale()) }}
                </span>
            </button>

            <!-- Dropdown -->
            <div id="langDropdown"
                class="absolute top-14 hidden flex-col gap-2 bg-white shadow-lg rounded-full p-2 z-50 space-y-2">
                <!-- buttons will be populated by JS -->
            </div>

        </div>

        {{-- Icon Link Social Media --}}
        <div class="w-16 h-96 rounded-full flex flex-col justify-between items-center py-2">
            <a href="https://www.facebook.com/profile.php?id=100065170836537" class="flex justify-center items-center w-12 h-12 rounded-full cursor-pointer animate-bounce">
                <img src="{{ asset('assets/icon/fb.png') }}" alt="" class="w-full h-full object-cover">
            </a>
            <a href="https://t.me/+85516222809" class="flex justify-center items-center w-12 h-12 rounded-full cursor-pointer animate-bounce">
                <img src="{{ asset('assets/icon/te.png') }}" alt="" class="w-full h-full object-cover">
            </a>
            <a href="https://wa.me/087446277" class="flex justify-center items-center w-12 h-12 rounded-full cursor-pointer animate-bounce">
                <img src="{{ asset('assets/icon/whatsapp.png') }}" alt="" class="w-full h-full object-cover">
            </a>
            <a href=" https://www.youtube.com/@povbopheaklandhome3948" class="flex justify-center items-center w-12 h-12 rounded-full cursor-pointer animate-bounce">
                <img src="{{ asset('assets/icon/youtube.png') }}" alt="" class="w-full h-full object-cover">
            </a>
            <a href="https://www.tiktok.com/@povbopheaklandandhome?_r=1&_t=ZS-92yM8DJyKCW" class="flex justify-center items-center w-12 h-12 rounded-full cursor-pointer animate-bounce">
                <img src="{{ asset('assets/icon/tiktok.png') }}" alt="" class="w-full h-full object-cover">
            </a>
            <a href="" class="flex justify-center items-center w-12 h-12 rounded-full cursor-pointer animate-bounce">
                <img src="{{ asset('assets/icon/wechat.png') }}" alt="" class="w-full h-full object-cover">
            </a>
            <a href="https://www.linkedin.com/company/pov-bopheak-land-home-co-ltd/?viewAsMember=true" class="flex justify-center items-center w-12 h-12 rounded-full cursor-pointer animate-bounce ">
                <img src="{{ asset('assets/icon/in.png') }}" alt="" class="w-full h-full object-cover">
            </a>
        </div>
    </div>
</div>

<script>
    let currentLang = "{{ strtoupper(app()->getLocale()) }}";
</script>
<script>
    const languages = ['En','Kh', 'Cn']; // all languages
    // let currentLang = 'En';

    const langBtn = document.getElementById('langBtn');
    const currentLangText = document.getElementById('currentLangText');
    const langDropdown = document.getElementById('langDropdown');

    // Function to render dropdown dynamically
    function renderDropdown() {
        langDropdown.innerHTML = '';
        languages.forEach(lang => {
            if (lang !== currentLang) {
                const btn = document.createElement('button');
                btn.textContent = lang;
                btn.className =
                    "flex justify-center items-center bg-[#03244a] w-10 h-10 rounded-full text-white font-semibold hover:bg-[#054078]";
                btn.onclick = () => changeLang(lang);
                langDropdown.appendChild(btn);
            }
        });
    }


    // Function to change language
    function changeLang(lang) {
        // Prevent reloading same language
        if (lang.toLowerCase() === currentLang.toLowerCase()) return;

        window.location.href = `/lang/${lang.toLowerCase()}`;
    }


    // Toggle dropdown visibility
    langBtn.addEventListener('click', () => {
        langDropdown.classList.toggle('hidden');
        renderDropdown();
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function (e) {
        if (!langBtn.contains(e.target) && !langDropdown.contains(e.target)) {
            langDropdown.classList.add('hidden');
        }
    });

    // Initialize dropdown on page load
    renderDropdown();
</script>
