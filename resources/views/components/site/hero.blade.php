<section class="relative h-screen overflow-hidden">

    {{-- Vídeos --}}
    <div id="video-container">
        <video id="video-0"
               class="absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-100" autoplay
               muted loop playsinline>
            <source src="{{ asset('videos/video-1.mp4') }}" type="video/mp4">
        </video>
        <video id="video-1"
               class="absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0" muted loop
               playsinline>
            <source src="{{ asset('videos/video-2.mp4') }}" type="video/mp4">
        </video>
        <video id="video-2"
               class="absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0" muted loop
               playsinline>
            <source src="{{ asset('videos/video-3.mp4') }}" type="video/mp4">
        </video>
    </div>

    {{-- Overlay escuro --}}
    <div class="absolute inset-0 bg-black/60"></div>

    {{-- Conteúdo --}}
    <div class="relative z-10 h-full flex flex-col items-center justify-center text-center px-4">
        <h1 class="text-white text-4xl md:text-6xl font-black mb-4 tracking-tight">
            Um oásis intelectual na princesa do sertão
        </h1>
        <p class="text-gray-200 text-lg md:text-xl mb-8">
            Desafie sua mente. Celebre a estratégia. Seja membro.
        </p>
        <a href="#"
           class="bg-[#f80b3d] text-white px-8 py-3 text-sm font-bold uppercase tracking-widest hover:bg-red-700 transition-colors duration-200 rounded">
            Seja Membro
        </a>
    </div>

    {{-- Bolinhas de controle --}}
    <div class="absolute bottom-8 left-0 right-0 flex justify-center gap-3 z-10">
        <button onclick="goToSlide(0)" id="dot-0"
                class="w-3 h-3 rounded-full bg-white transition-all duration-300"></button>
        <button onclick="goToSlide(1)" id="dot-1"
                class="w-3 h-3 rounded-full bg-white/40 transition-all duration-300"></button>
        <button onclick="goToSlide(2)" id="dot-2"
                class="w-3 h-3 rounded-full bg-white/40 transition-all duration-300"></button>
    </div>

</section>

<script>
    let current = 0;
    const total = 3;
    let autoplay;

    function goToSlide(index) {
        // Esconde vídeo atual
        document.getElementById('video-' + current).classList.add('opacity-0');
        document.getElementById('video-' + current).classList.remove('opacity-100');
        document.getElementById('dot-' + current).classList.add('bg-white/40');
        document.getElementById('dot-' + current).classList.remove('bg-white');

        // Mostra novo vídeo
        current = index;
        const video = document.getElementById('video-' + current);
        video.classList.remove('opacity-0');
        video.classList.add('opacity-100');
        video.currentTime = 0;
        video.play();
        document.getElementById('dot-' + current).classList.remove('bg-white/40');
        document.getElementById('dot-' + current).classList.add('bg-white');

        // Reinicia o autoplay
        clearInterval(autoplay);
        startAutoplay();
    }

    function startAutoplay() {
        autoplay = setInterval(() => {
            goToSlide((current + 1) % total);
        }, 6000);
    }

    startAutoplay();
</script>
