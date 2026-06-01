<nav id="navbar" class="transition-colors duration-300 border-b-2 border-transparent">
    <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center gap-2">
            <img src="{{ asset('logo-preta.png') }}" alt="Clube Caxiense de Xadrez" class="h-16 w-auto"
                 id="navbar-logo">
        </a>

        {{-- Links Desktop --}}
        <ul class="hidden md:flex items-center gap-8 text-sm font-semibold uppercase tracking-wider">
            <li>
                <a href="{{ route('home') }}"
                   onmouseover="this.style.color='#f80b3d'"
                   onmouseout="this.style.color=window.scrollY > 50 ? '#000000' : '#ffffff'"
                   class="transition-colors duration-200">
                    Home
                </a>
            </li>
            <li>
                <a href=""
                   onmouseover="this.style.color='#f80b3d'"
                   onmouseout="this.style.color=window.scrollY > 50 ? '#000000' : '#ffffff'"
                   class="transition-colors duration-200">
                    Sobre
                </a>
            </li>
            <li>
                <a href=""
                   onmouseover="this.style.color='#f80b3d'"
                   onmouseout="this.style.color=window.scrollY > 50 ? '#000000' : '#ffffff'"
                   class="transition-colors duration-200">
                    Notícias
                </a>
            </li>
            <li>
                <a href=""
                   onmouseover="this.style.color='#f80b3d'"
                   onmouseout="this.style.color=window.scrollY > 50 ? '#000000' : '#ffffff'"
                   class="transition-colors duration-200">
                    Contato
                </a>
            </li>
        </ul>

        {{-- Botão Hamburguer --}}
        <button
            id="menu-toggle"
            class="md:hidden flex flex-col justify-center items-center w-8 h-8 gap-1.5 focus:outline-none"
            aria-label="Abrir menu"
        >
            <span id="bar1" class="block w-6 h-0.5 bg-white transition-all duration-300"></span>
            <span id="bar2" class="block w-6 h-0.5 bg-white transition-all duration-300"></span>
            <span id="bar3" class="block w-6 h-0.5 bg-white transition-all duration-300"></span>
        </button>

    </div>

    {{-- Menu Mobile --}}
    <div id="mobile-menu" class="md:hidden hidden flex-col bg-black text-white px-4 pb-6 pt-2">
        <ul class="flex flex-col gap-1">
            <li>
                <a href="{{ route('home') }}"
                   class="block py-3 px-2 text-sm font-semibold uppercase tracking-wider border-b border-gray-800 hover:text-[#f80b3d] transition-colors duration-200">
                    Home
                </a>
            </li>
            <li>
                <a href="#"
                   class="block py-3 px-2 text-sm font-semibold uppercase tracking-wider border-b border-gray-800 hover:text-[#f80b3d] transition-colors duration-200">
                    Sobre
                </a>
            </li>
            <li>
                <a href="#"
                   class="block py-3 px-2 text-sm font-semibold uppercase tracking-wider border-b border-gray-800 hover:text-[#f80b3d] transition-colors duration-200">
                    Torneios
                </a>
            </li>
            <li>
                <a href="#"
                   class="block py-3 px-2 text-sm font-semibold uppercase tracking-wider border-b border-gray-800 hover:text-[#f80b3d] transition-colors duration-200">
                    Blog
                </a>
            </li>
            <li>
                <a href="#"
                   class="block py-3 px-2 text-sm font-semibold uppercase tracking-wider border-b border-gray-800 hover:text-[#f80b3d] transition-colors duration-200">
                    Contato
                </a>
            </li>
        </ul>

        {{-- Botões no mobile --}}
        <div class="flex flex-col gap-3 mt-6">
            <a href="#"
               class="text-center border border-white text-white py-2 rounded hover:bg-white hover:text-black transition-colors duration-200 text-sm font-semibold">
                Entrar
            </a>
            <a href="#"
               class="text-center bg-[#f80b3d] text-white py-2 rounded hover:bg-red-700 transition-colors duration-200 text-sm font-semibold">
                Seja Membro
            </a>
        </div>
    </div>
</nav>

<script>
    // Hamburguer
    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('mobile-menu');
    const bar1 = document.getElementById('bar1');
    const bar2 = document.getElementById('bar2');
    const bar3 = document.getElementById('bar3');

    toggle.addEventListener('click', () => {
        menu.classList.toggle('hidden');
        menu.classList.toggle('flex');
        bar1.classList.toggle('rotate-45');
        bar1.classList.toggle('translate-y-2');
        bar2.classList.toggle('opacity-0');
        bar3.classList.toggle('-rotate-45');
        bar3.classList.toggle('-translate-y-2');
    });

    // Header transparente → sólido ao rolar
    const topbar = document.getElementById('topbar');
    const navbar = document.getElementById('navbar');
    const navLinks = navbar.querySelectorAll('ul a');
    const hamburgerBars = [bar1, bar2, bar3];

    function updateHeader() {
        if (window.scrollY > 50) {
            topbar.style.backgroundColor = '#000000';
            navbar.style.backgroundColor = '#f2f2f2';
            navbar.style.borderBottomColor = '#f80b3d';
            navLinks.forEach(link => link.style.color = '#000000');
            hamburgerBars.forEach(bar => bar.style.backgroundColor = '#000000');
        } else {
            topbar.style.backgroundColor = 'transparent';
            navbar.style.backgroundColor = 'transparent';
            navbar.style.borderBottomColor = 'transparent';
            navLinks.forEach(link => link.style.color = '#ffffff');
            hamburgerBars.forEach(bar => bar.style.backgroundColor = '#ffffff');
        }
    }

    window.addEventListener('scroll', updateHeader);
    updateHeader();
</script>
