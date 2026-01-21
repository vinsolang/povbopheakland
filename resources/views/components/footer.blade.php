<div class="relative w-full mt-14">
    <img src="{{ asset('assets/background/bg-footer.png') }}" alt="" class="w-full h-full object-cover">
    <div class="absolute inset-0 flex flex-col justify-center items-center">
        <h1 class="text-4xl md:text-6xl font-bold py-4" style="background: linear-gradient(90deg, #F2A93F 0%, #FFFBA6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-fill-color: transparent;">
            Pov Bopheak Land
        </h1>
        <p class="text-white text-lg md:text-xl">Modern Living, Smart Investment.</p>
    </div>
</div>

<div>
    <svg viewBox="0 0 1432 11" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="1442" height="11" fill="url(#paint0_linear_85_1339)" />
        <defs>
            <linearGradient id="paint0_linear_85_1339" x1="0" y1="5.5" x2="1442" y2="5.5"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#F2A93F" />
                <stop offset="1" stop-color="#FFFBA6" />
            </linearGradient>
        </defs>
    </svg>
</div>

<div class="mx-auto flex md:flex-row flex-col justify-center items-start md:items-center relative w-full h-auto bg-[#03254B] md:px-14 md:py-8 px-4 py-4 space-y-0 md:space-y-4">
    <div class="lg:px-6 px-2">
        {{-- Logo --}}
        <div class="flex items-center gap-3">
            <!-- Logo -->
            <img src="{{ asset('assets/logo/logo-fina.png') }}" alt="Logo" class="w-14 h-auto">

            <!-- Text -->
            <div class="flex items-center text-[#ffffff] text-sm md:text-lg">
                <span class="font-semibold">Pov&nbsp;Bopheak</span>
                <span class="font-normal ml-1"> Land & Home Co., Ltd</span>
            </div>
        </div>
        {{-- Buuton Back --}}
        <div class="absolute top-6 right-6 z-50 hidden" id="btn-back">
            <button onclick="closePrivacy()" class="text-[#ffffff] font-medium hover:underline cursor-pointer">
                <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 18L22.4194 27L32 18" stroke="white" stroke-width="5" stroke-linecap="round" />
                    <circle cx="23" cy="23" r="22" stroke="white" stroke-width="2" />
                </svg>
            </button>
        </div>

        <div class="py-4" id="get-in-touch">
            <h1 class="text-sm md:text-lg font-semibold text-white py-4">
                Get in Touch
            </h1>
            {{-- Icon Link Social Media --}}
            <div class="flex justify-start items-center space-x-0 md:space-x-4">
                <a href="https://www.facebook.com/profile.php?id=100065170836537"
                    class="flex justify-center items-center w-12 h-12 rounded-full cursor-pointer">
                    <img src="{{ asset('assets/icon/fb.png') }}" alt="" class="w-full h-full object-cover">
                </a>
                <a href="https://t.me/+85516222809"
                    class="flex justify-center items-center w-12 h-12 rounded-full cursor-pointer">
                    <img src="{{ asset('assets/icon/te.png') }}" alt="" class="w-full h-full object-cover">
                </a>
                <a href="https://wa.me/087446277"
                    class="flex justify-center items-center w-12 h-12 rounded-full cursor-pointer">
                    <img src="{{ asset('assets/icon/whatsapp.png') }}" alt="" class="w-full h-full object-cover">
                </a>
                <a href="https://www.youtube.com/@povbopheaklandhome3948"
                    class="flex justify-center items-center w-12 h-12 rounded-full cursor-pointer">
                    <img src="{{ asset('assets/icon/youtube.png') }}" alt="" class="w-full h-full object-cover">
                </a>
                <a href="https://www.tiktok.com/@povbopheaklandandhome?_r=1&_t=ZS-92yM8DJyKCW"
                    class="flex justify-center items-center w-12 h-12 rounded-full cursor-pointer">
                    <img src="{{ asset('assets/icon/tiktok.png') }}" alt="" class="w-full h-full object-cover">
                </a>
                <a href="" class="flex justify-center items-center w-12 h-12 rounded-full cursor-pointer">
                    <img src="{{ asset('assets/icon/wechat.png') }}" alt="" class="w-full h-full object-cover">
                </a>
                <a href="https://www.linkedin.com/company/pov-bopheak-land-home-co-ltd/?viewAsMember=true"
                    class="flex justify-center items-center w-12 h-12 rounded-full cursor-pointer">
                    <img src="{{ asset('assets/icon/in.png') }}" alt="" class="w-full h-full object-cover">
                </a>
            </div>
        </div>

        {{-- Section bottom full width --}}
        <div class="flex lg:flex-row flex-col text-white py-8 -mt-4 md:-mt-10">
            {{-- Contact us --}}
            <div class="lg:w-[45%]">
                <div>
                    <h1 class="text-sm md:text-lg font-semibold" style="background: linear-gradient(90deg, #F2A93F 0%, #FFFBA6 100%);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    background-clip: text;
                    text-fill-color: transparent;">
                        Contact Us
                    </h1>
                </div>
                <div class="space-y-2 md:text-md text-sm">
                    <p class="py-4">Pov Bopheak Land & Home Co., Ltd.</p>
                    <p>info@povbopheak.com</p>
                    <p>www.pblandandhome.com.kh</p>
                    <p>www.povbopheak.com</p>
                </div>

            </div>
        </div>
    </div>

    {{-- Map of Location --}}
    <div class="h-auto flex xl:flex-row flex-col justify-between px-2 lg:px-10 space-y-4 text-white -mt-6 md:mt-8 py-4 md:py-8">
        <div class="space-y-2 lg:px-2 lg:mt-0 mt-0 md:mt-6">
            <h1 class="text-sm md:text-lg font-semibold" style="background: linear-gradient(90deg, #F2A93F 0%, #FFFBA6 100%);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                        background-clip: text;
                        text-fill-color: transparent;">
                Phnom Penh Office
            </h1>
            <p class="xl:h-24 max-w-lg md:text-md text-sm py-2">
                #67D, St. 777, Borey Vimean Phnom Penh 598, Village 4,
                Sangkat Chrang Chamres, Khan Russey Keo, Phnom Penh, Cambodia
            </p>
            {{-- Map --}}
            <div class="w-full xl:w-72 h-32 rounded-lg flex justify-center items-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.070016297376!2d104.88439477480213!3d11.623954042990075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310953002172e7a9%3A0x1c5e614ac11878b6!2sPov%20Bopheak%20Land%20%26%20Home!5e1!3m2!1skm!2skh!4v1768798033272!5m2!1skm!2skh"
                    class="rounded-lg w-full" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div class="space-y-2 lg:px-2 lg:mt-0 mt-6">
            <h1 class="text-sm md:text-lg font-semibold" style="background: linear-gradient(90deg, #F2A93F 0%, #FFFBA6 100%);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                        background-clip: text;
                        text-fill-color: transparent;">
                Siem Reap Office
            </h1>
            <p class="xl:h-24 max-w-lg md:text-md text-sm">
                Sna Techo Village, Balang Commune, Prasat Bakong District, Siem Reap Province, Cambodia.
            </p>
            {{-- Map --}}
            <div class="w-full xl:w-72 h-32 rounded-lg flex justify-center items-center md:mt-0 mt-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14792.75472708665!2d104.09799600000001!3d13.469979!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3110390043ac3b81%3A0xda10418112d97440!2sPov%20Bopheak%20Kulen%20Home!5e1!3m2!1sen!2skh!4v1768809798264!5m2!1sen!2skh"
                    class="rounded-lg w-full" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</div>

<div class="relative w-full h-auto flex flex-col items-center py-4"
    style="background: linear-gradient(90deg, #F2A93F 0%, #FFFBA6 100%);">

    <!-- Logo / Title -->
    <div class="flex items-center py-2 text-lg space-x-2">
        <p class="text-[#03254B] font-semibold">Pov Bopheak</p>
        <span class="text-[#03254B] font-normal">Land & Home Co., Ltd</span>
    </div>

    <!-- Menu -->
    <div x-data="{ showPrivacyModal: false }">

        <!-- Navigation -->
        <ul
            class="flex lg:flex-row flex-wrap justify-center space-y-2 px-4 py-3 lg:space-x-6 text-[#03254b] lg:text-lg text-[12px] space-x-3 font-normal">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('home') }}#about-us">About Us</a></li>
            <li><a href="{{ route('home') }}#real-project">Real Estate Projects</a></li>
            <li><a href="{{ route('home') }}#our-customer">Our Customers</a></li>
            <li><a href="{{ route('home') }}#freelancer">Freelancers</a></li>
            <li><a href="{{ route('home') }}#application-form">Contact Us</a></li>
            <li class="font-medium">
                <button @click="showPrivacyModal = true" class="cursor-pointer">Privacy Policy</button>
            </li>
        </ul>

        <!-- Privacy Policy Modal -->
        <div x-show="showPrivacyModal" x-transition.opacity
            class="fixed inset-0 bg-black/20 flex items-center justify-center z-50 px-4" style="display: none;">

            <div @click.away="showPrivacyModal = false"
                class="bg-white max-w-7xl w-full px-4 py-8 lg:p-8 relative overflow-y-auto max-h-[80vh]">

                <!-- Close Button -->
                <button @click="showPrivacyModal = false"
                    class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-2xl font-bold">&times;</button>

                <!-- Modal Content -->
                <h2 class="text-2xl font-semibold mb-4 text-[#03254b]">Privacy Policy</h2>
                <div class="text-[#03254b] grid grid-cols-1 lg:grid-cols-2 gap-6 text-[12px] lg:text-[14px]">
                    {{-- Section left --}}
                    <div class="w-full text-[#03254b] text-md py-2">

                        <h1 class="text-lg font-semibold">Introduction</h1>
                        <h1 class="text-lg font-semibold mt-4">Pov Bopheak Land & Home Co., Ltd. </h1>
                        <div class="font-normal space-y-4">
                            <p>
                                (referred to as “we”, “our” or “us” in this Privacy Policy)
                                operates the websites located at www.pblandandhome.com.kh and www.povbopheak.com,
                                including any subdomains, mobile versions, and any related digital platforms
                                (collectively referred to as the “Websites”).
                            </p>
                            <p>
                                This Privacy Policy sets out how we collect, use, disclose,
                                store, and protect personal information obtained through our Websites and related
                                services.
                            </p>
                            <p>
                                By accessing or using our Websites, or by engaging with us through our online services,
                                you acknowledge that you have read, understood, and agreed to the collection and
                                handling of
                                your personal information in accordance with this Privacy Policy.
                            </p>
                            <p>
                                We reserve the right to update or amend this Privacy Policy at any time at our
                                discretion. Any
                                changes will be effective
                                immediately upon publication on our Websites. We encourage you to review this Privacy
                                Policy
                                periodically.
                            </p>
                            <p>If you have questions, feedback, or concerns, you may contact us at:</p>
                            <p>Email: info@povbopheak.com</p>
                            <p>Company: Pov Bopheak Land & Home Co., Ltd.</p>
                            <p>Jurisdiction: Kingdom of Cambodia</p>
                        </div>

                        <h1 class="text-lg font-semibold py-4">Respecting Information Privacy</h1>
                        <div class="font-normal space-y-4">
                            <p>
                                We recognise the importance of protecting your personal
                                information and are committed to handling it responsibly.
                            </p>
                            <p>
                                We do not intentionally collect sensitive personal data such as information relating to
                                ethnicity,
                                religion, political opinions, criminal records, health data, or biometric data.
                            </p>
                            <p>
                                In collecting and processing personal information,
                                we comply with applicable laws and regulations of
                                the Kingdom of Cambodia and relevant data protection principles.
                            </p>
                        </div>

                        <h1 class="text-lg font-semibold py-4">Problems or Questions</h1>
                        <div class="font-normal space-y-4">
                            <p>
                                If we become aware of any issues or concerns relating to privacy or data protection on
                                our Websites,
                                we take them seriously and work to resolve them promptly.
                            </p>
                            <p>
                                If you have any questions, requests, or complaints regarding this Privacy Policy or the
                                way your
                                personal information is handled, please contact us using the details provided above.
                            </p>
                            <p>Collection of Personal Information</p>
                            <p>
                                We may collect personal information directly from you or indirectly through your
                                use of our Websites, including but not limited to:
                            </p>
                            <ul class="list-disc pl-6 space-y-3">
                                <li>
                                    Your name, email address, telephone number, postal address,
                                    and other contact details
                                </li>

                                <li>
                                    Information provided when you:
                                    <ul class="list-disc pl-6 mt-2 space-y-2">
                                        <li>Register or enquire through our Websites</li>
                                        <li>Fill in forms or submit property enquiries</li>
                                        <li>Contact us for support, services, or information</li>
                                        <li>Participate in surveys, promotions, or feedback requests</li>
                                        <li>Communicate with us via email or other channels</li>
                                    </ul>
                                </li>

                                <li>
                                    Details of property enquiries, transactions, or expressions of interest
                                </li>

                                <li>
                                    Information about your visits to our Websites, including:
                                    <ul class="list-disc pl-6 mt-2 space-y-2">
                                        <li>IP address</li>
                                        <li>Browser type and device information</li>
                                        <li>Pages visited, time spent, and interaction data</li>
                                        <li>Cookies and similar tracking technologies</li>
                                    </ul>
                                </li>

                                <li class="md:max-w-lg">
                                    Information received from third parties or service providers,
                                    where permitted by law
                                </li>
                            </ul>

                            <p>If you contact us, we may retain a record of that correspondence for service, compliance,
                                or quality
                                purposes.</p>
                        </div>

                    </div>

                    {{-- Section right --}}
                    <div class="w-full text-[#03254b] text-md py-2">

                        <h1 class="text-lg font-semibold py-2">Use of Personal Information</h1>
                        <p>We may use your personal information to:</p>
                        <ul class="list-disc pl-8">
                            <li>Provide, manage, and improve our real estate services</li>
                            <li>Respond to enquiries, requests, or feedback</li>
                            <li>Facilitate property listings, viewings, consultations, and transactions</li>
                            <li>Personalise your experience on our Websites</li>
                            <li>Improve website functionality, performance, and security</li>
                            <li>Conduct research, analysis, and internal reporting</li>
                            <li>Communicate with you about updates, services, or relevant property opportunities</li>
                            <li>Comply with legal and regulatory obligations</li>
                        </ul>
                        <p class="py-4">
                            Where permitted, we may also use your information to inform you about promotions, new
                            projects,
                            or services that may be of interest to you. You may opt out of
                            marketing communications at any time by contacting us.
                        </p>

                        <h1 class="text-lg font-semibold py-4">Disclosure of Personal Information</h1>
                        <p>
                            We may disclose your personal information to:
                        </p>
                        <ul class="list-disc pl-8">
                            <li>
                                Property owners, developers, agents, or partners where you have requested information or
                                services
                            </li>
                            <li>
                                Third-party service providers who assist us in operating our business,
                                such as IT providers, hosting services, analytics providers, and marketing platforms
                            </li>
                            <li>
                                Professional advisers, including legal and financial advisers, where required
                            </li>
                            <li>
                                Government authorities or regulatory bodies where disclosure is required by law
                            </li>
                        </ul>
                        <p class="py-4">
                            We take reasonable steps to ensure that third parties handle
                            personal information securely and in accordance with applicable privacy laws.
                            We do not sell your personal information to third parties.
                        </p>

                        <h1 class="text-lg font-semibold py-4">Storage, Security, and Processing</h1>
                        <div class="space-y-2">
                            <p>
                                We take reasonable technical and organisational measures to safeguard personal
                                information against
                                loss,
                                misuse, unauthorised access, modification, or disclosure.
                            </p>
                            <p>
                                While we strive to protect your personal data, no method of transmission over the
                                internet or
                                electronic storage is completely secure. Accordingly,
                                we cannot guarantee absolute security but will act promptly in the event of a data
                                security
                                incident.
                            </p>
                            <p>
                                Access to personal information is restricted to
                                authorised personnel and service providers who require it for legitimate business
                                purposes.
                            </p>
                        </div>

                        <h1 class="text-lg font-semibold py-4">Transfer of Personal Information Outside Cambodia</h1>
                        <p>
                            Your personal information may be stored or processed on servers located outside
                            the Kingdom of Cambodia, including through third-party hosting or cloud service providers.
                            Such transfers are undertaken solely for purposes such as secure storage, system
                            performance,
                            backup, and operational efficiency.
                            By providing your personal information, you consent to such transfers, subject to reasonable
                            safeguards.
                        </p>

                        <h1 class="text-lg font-semibold py-4">Access, Correction, and Deletion</h1>
                        <p>
                            We take reasonable steps to ensure that the personal information we hold is accurate and up
                            to date.
                        </p>

                        <div class="py-4">
                            <p>You may request to:</p>
                            <ul class="list-disc pl-8">
                                <li>
                                    Access the personal information we hold about you
                                </li>
                                <li>
                                    Correct or update inaccurate information
                                </li>
                                <li>
                                    Request deletion of your personal information, subject to legal and contractual
                                    obligations
                                </li>
                            </ul>
                        </div>

                        <p>
                            Requests can be made by contacting us at info@povbopheak.com.
                        </p>

                        <h1 class="text-lg font-semibold py-4">Cookies and Web Beacons</h1>
                        <p>
                            Our Websites use cookies and similar technologies to enhance user experience, analyse
                            traffic, and
                            improve performance.
                        </p>

                        <div class="py-4">
                            <p>Cookies may be used to:</p>
                            <ul class="list-disc pl-8">
                                <li>
                                    Recognise your device
                                </li>
                                <li>
                                    Remember preferences
                                </li>
                                <li>
                                    Improve navigation and usability
                                </li>
                                <li>
                                    Collect analytics and usage data
                                </li>
                            </ul>
                        </div>

                        <div>
                            <p>
                                Web beacons may be used in emails or webpages to track engagement and improve
                                communication
                                relevance.
                            </p>
                            <p>
                                By using our Websites, you consent to the use of cookies and similar
                                technologies in accordance with this Privacy Policy.
                            </p>
                            <p>
                                You may disable cookies through your browser or device settings; however,
                                doing so may affect the functionality of certain features on our Websites.
                            </p>
                        </div>

                        <h1 class="text-lg font-semibold py-4">Third-Party Websites and Applications</h1>
                        <p>
                            Our Websites may contain links to external websites, social media platforms, or third-party
                            applications.
                            These third parties operate independently and have their own privacy policies.
                            We are not responsible for the content, security,
                            or privacy practices of external websites or applications.
                            We encourage you to review their privacy policies before providing any personal information.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


{{--
<script>
    function showPrivacy() {
        const privacy = document.getElementById('show-privacy-policy');
        const contact = document.getElementById('get-in-touch');
        const backBtn = document.getElementById('btn-back');

        privacy.classList.remove('hidden');
        contact.classList.add('hidden');
        backBtn.classList.remove('hidden');

        //  CONTROL HOW FAR (OFFSET)
        const offset = 220; // px from top (change this)
        const y = privacy.getBoundingClientRect().top + window.pageYOffset - offset;

        window.scrollTo({
            top: y,
            behavior: 'smooth'
        });
    }

    function closePrivacy() {
        const privacy = document.getElementById('show-privacy-policy');
        const contact = document.getElementById('get-in-touch');
        const backBtn = document.getElementById('btn-back');

        privacy.classList.add('hidden');
        contact.classList.remove('hidden');
        backBtn.classList.add('hidden');

        const offset = 120;
        const y = contact.getBoundingClientRect().top + window.pageYOffset - offset;

        window.scrollTo({
            top: y,
            behavior: 'smooth'
        });
    }
</script> --}}