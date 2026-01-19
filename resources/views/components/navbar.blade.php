<!-- STYLE -->
<style>
  .nav-item {
    position: relative;
    padding-bottom: 6px;
    font-weight: 400;
    white-space: nowrap;
    /*  VERY IMPORTANT */
    transition: font-weight 0.2s ease;
  }

  .nav-item:hover,
  .nav-item.active {
    font-weight: 600;
  }

  /* Hide horizontal scrollbar */
  .scrollbar-hide::-webkit-scrollbar {
    display: none;
  }

  .scrollbar-hide {
    -ms-overflow-style: none;
    scrollbar-width: none;
  }
</style>


<div class="w-full mx-auto xl:px-6 lg:px-4">
  <div class="lg:hidden flex justify-between items-center px-2">
    {{-- Logo of version mobile --}}
    <div class="px-4 flex items-center space-x-1">
      <img src="{{ asset('assets/logo/logo-fina.png') }}" alt="Logo" class="w-12 h-auto">
      <span class="text-[#03254B] font-semibold text-sm flex gap-1">
        <span>Pov Bopheak</span>
        <span class="font-medium">Land & Home Co., Ltd</span>
      </span>
    </div>
    <div class="lg:hidden">
      <!-- Open menu -->
      <button id="openMenu" class="w-8 h-8">
        <img src="{{ asset('assets/icon/menu-mobile.png') }}" class="w-full h-full object-cover">
      </button>

      <!-- Close menu -->
      <button id="closeMenu" class="w-8 h-8 hidden">
        <img src="{{ asset('assets/icon/button-close.png') }}" class="w-full h-full object-cover">
      </button>
    </div>
  </div>
  <!-- MENU -->
  {{-- hidden lg:flex items-center h-22.5 relative xl:left-8 lg:left-2 py-24 text-[#03254b] --}}
  <nav class="hidden lg:flex w-full z-50
        h-24 items-center text-[#03254b]
        2xl:px-28.75 xl:px-24 px-0 xl:text-lg lg:text-sm py-8">

    <!-- INNER WRAPPER -->
    <div class="relative flex w-full items-center justify-between 2xl:justify-center px-6 max-w-8xl mx-auto">

      <!-- MENU -->
      <ul id="navMenu" class="relative flex flex-nowrap whitespace-nowrap overflow-visible space-x-10 xl:text-lg lg:text-md md:text-sm">

        <!-- Active underline -->
        <span id="activeLine" class="absolute -bottom-9 left-0 h-2 transition-all duration-300
                      bg-gradient-to-r from-[#F2A93F] to-[#FFFBA6] z-20">
        </span>

        <li><a href="{{ route('home') }}" class="nav-item">Home</a></li>
        <li><a href="{{ route('home') }}#about-us" class="nav-item">About Us</a></li>
        <li><a href="{{ route('home') }}#real-project" class="nav-item">Real Estate Projects</a></li>
        <li><a href="{{ route('home') }}#our-customer" class="nav-item">Our Customers</a></li>
        <li><a href="{{ route('home') }}#freelancer" class="nav-item">Freelancers</a></li>
        <li><a href="{{ route('home') }}#application-form" class="nav-item">Contact Us</a></li>


        <!-- STATIC LINE UNDER MENU TEXT -->
        <span class="absolute -bottom-[34px] -left-[22px] w-full h-0.75 bg-[#03254b] z-0">
        </span>

      </ul>
      <div class="flex xl:flex-row lg:flex-col items-center gap-3 mt-8">
        <!-- Logo -->
        <img src="{{ asset('assets/logo/logo-fina.png') }}" alt="Logo" class="w-14 h-auto">

        <!-- Text -->
        <div class="flex xl:flex-row lg:flex-col xl:flex items-center text-[#03254B] text-lg leading-none whitespace-nowrap">
          <span class="font-semibold">Pov&nbsp;Bopheak</span>
          <span class="font-normal ml-1"> Land & Home Co., Ltd</span>
        </div>
      </div>
    </div>
  </nav>

  <!-- MOBILE MENU -->
  <div id="mobileMenu" class="lg:hidden fixed top-0 left-0 w-full h-screen bg-white z-50
         transform -translate-y-full transition-transform duration-300">

    <!-- Top bar -->
    <div class="flex justify-between items-center px-6 py-4 border-b">
      <div class="flex items-center gap-2">
        <img src="{{ asset('assets/logo/logo-fina.png') }}" class="w-10">
        <span class="text-[#03254B] font-semibold text-sm whitespace-nowrap">
          Pov Bopheak Land & Home Co., Ltd
        </span>
      </div>

      <button id="closeMenuInside" class="w-8 h-8">
        <img src="{{ asset('assets/icon/button-close.png') }}" class="w-full h-full">
      </button>
    </div>

    <!-- Menu links -->
    <ul class="flex flex-col px-6 py-6 space-y-6 text-[#03254b] text-lg font-medium">
      <li><a href="{{ route('home') }}" class="mobile-link">Home</a></li>
      <li><a href="{{ route('home') }}#about-us" class="mobile-link">About Us</a></li>
      <li><a href="{{ route('home') }}#real-project" class="mobile-link">Real Estate Projects</a></li>
      <li><a href="{{ route('home') }}#our-customer" class="mobile-link">Our Customers</a></li>
      <li><a href="{{ route('home') }}#freelancer" class="mobile-link">Freelancers</a></li>
      <li><a href="{{ route('home') }}#contact-us" class="mobile-link">Contact Us</a></li>
    </ul>
  </div>


</div>
<script>
  const mobileLinks = document.querySelectorAll('.mobile-link');

  mobileLinks.forEach(link => {
    link.addEventListener('click', () => {
      closeMobileMenu();
    });
  });
</script>
<script>
  const openMenu = document.getElementById('openMenu');
  const closeMenu = document.getElementById('closeMenu');
  const closeMenuInside = document.getElementById('closeMenuInside');
  const mobileMenu = document.getElementById('mobileMenu');

  function openMobileMenu() {
    mobileMenu.classList.remove('-translate-y-full');
    openMenu.classList.add('hidden');
    closeMenu.classList.remove('hidden');
  }

  function closeMobileMenu() {
    mobileMenu.classList.add('-translate-y-full');
    closeMenu.classList.add('hidden');
    openMenu.classList.remove('hidden');
  }

  openMenu.addEventListener('click', openMobileMenu);
  closeMenu.addEventListener('click', closeMobileMenu);
  closeMenuInside.addEventListener('click', closeMobileMenu);
</script>

<!-- SCRIPT -->
<script>
  const menu = document.getElementById('navMenu');
  const activeLine = document.getElementById('activeLine');
  const items = document.querySelectorAll('.nav-item');

  function moveLine(el) {
    if (!el) return;
    activeLine.style.width = el.offsetWidth + 'px';
    activeLine.style.left = el.offsetLeft + 'px';
  }

  function setActiveByUrl() {
    const currentUrl = window.location.href;

    let activeItem = null;

    items.forEach(item => {
      const href = item.getAttribute('href');

      if (currentUrl.includes(href)) {
        item.classList.add('active');
        activeItem = item;
      } else {
        item.classList.remove('active');
      }
    });

    // Fallback to Home
    if (!activeItem) {
      activeItem = items[0];
      activeItem.classList.add('active');
    }

    moveLine(activeItem);
  }

  // On page load
  window.onload = () => {
    setActiveByUrl();
  };

  // Hover effect
  items.forEach(item => {
    item.addEventListener('mouseenter', () => {
      moveLine(item);
    });

    item.addEventListener('click', () => {
      items.forEach(i => i.classList.remove('active'));
      item.classList.add('active');
      moveLine(item);
    });
  });

  // Restore active on mouse leave
  menu.addEventListener('mouseleave', () => {
    const active = document.querySelector('.nav-item.active');
    moveLine(active);
  });
</script>