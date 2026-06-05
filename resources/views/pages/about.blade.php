@extends('layouts.app')

@section('content')

    {{-- Hero Interno --}}
    <section class="bg-black text-white pt-40 pb-20 text-center">
        <div class="max-w-4xl mx-auto px-4" data-aos="fade-up">
            <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tight mb-4">
                Sobre o Clube
            </h1>
            <p class="text-gray-300 text-lg md:text-xl">
                Conheça a história, a missão e as pessoas por trás do Clube Caxiense de Xadrez.
            </p>
        </div>
    </section>

    {{-- Linha vermelha --}}
    <div class="h-1 bg-[#f80b3d]"></div>

    {{-- Nossa Missão --}}
    <section class="bg-white py-20">
        <div class="max-w-5xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <h2 class="text-3xl font-black uppercase mb-4 text-black">Nossa Missão</h2>
                <div class="w-12 h-1 bg-[#f80b3d] mb-6"></div>
                <p class="text-gray-600 leading-relaxed text-justify">
                    É missão do Clube Caxiense de Xadrez promover e difundir o xadrez em Caxias e região,
                    por meio de programas de ensino, torneios e ações comunitárias, reconhecendo o xadrez
                    como ferramenta de desenvolvimento intelectual, social e cultural para pessoas de todas
                    as idades.
                </p>
            </div>
            <div class="bg-[#f2f2f2] p-8 rounded" data-aos="fade-left">
                <h3 class="text-lg font-bold uppercase mb-4 text-black">Nossos Valores</h3>
                <ul class="space-y-3 text-gray-600 text-sm">
                    <li class="flex items-start gap-2">
                        <span class="text-[#f80b3d] font-black mt-0.5">→</span>
                        <span><strong>Inclusão</strong> — o xadrez é para todos</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#f80b3d] font-black mt-0.5">→</span>
                        <span><strong>Educação</strong> — o tabuleiro como sala de aula</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#f80b3d] font-black mt-0.5">→</span>
                        <span><strong>Competitividade</strong> — excelência dentro e fora do tabuleiro</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#f80b3d] font-black mt-0.5">→</span>
                        <span><strong>Comunidade</strong> — unir pessoas pela paixão pelo xadrez</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    {{-- Parallax Números do Clube --}}
    <section class="relative py-24 text-white"
             style="
                background-image: url('{{ asset('images/pexels-pavel-danilyuk-8438957.jpg') }}');
                background-attachment: fixed;
                background-size: cover;
                background-position: center;
             ">
        <div class="absolute inset-0 bg-black/70"></div>
        <div class="relative z-10 max-w-5xl mx-auto px-4 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div data-aos="fade-up" data-aos-delay="0">
                <p class="text-5xl font-black text-[#f80b3d]">2026</p>
                <p class="text-sm uppercase tracking-wider text-gray-300 mt-2">Fundação</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="100">
                <p class="text-5xl font-black text-[#f80b3d]">30+</p>
                <p class="text-sm uppercase tracking-wider text-gray-300 mt-2">Membros Ativos</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200">
                <p class="text-5xl font-black text-[#f80b3d]">9</p>
                <p class="text-sm uppercase tracking-wider text-gray-300 mt-2">Eventos por Ano</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="300">
                <p class="text-5xl font-black text-[#f80b3d]">MA</p>
                <p class="text-sm uppercase tracking-wider text-gray-300 mt-2">Caxias, Maranhão</p>
            </div>
        </div>
    </section>

    {{-- Nossa História --}}
    <section class="bg-[#f2f2f2] py-20">
        <div class="max-w-5xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="overflow-hidden rounded" data-aos="fade-right">
                <img src="{{ asset('images/pexels-pavel-danilyuk-8438915.jpg') }}"
                     alt="História do clube"
                     class="w-full h-72 object-cover hover:scale-105 transition-transform duration-500">
            </div>
            <div data-aos="fade-left">
                <h2 class="text-3xl font-black uppercase mb-4 text-black">Nossa História</h2>
                <div class="w-12 h-1 bg-[#f80b3d] mb-6"></div>
                <p class="text-gray-600 leading-relaxed mb-4 text-justify">
                    Fundado em Caxias, Maranhão, o Clube Caxiense de Xadrez nasceu da paixão de um grupo
                    de entusiastas que acreditam no poder transformador do xadrez. Desde o início, o clube
                    se dedicou a levar o jogo para escolas, praças e comunidades da cidade.
                </p>
                <p class="text-gray-600 leading-relaxed text-justify">
                    Com o crescimento da comunidade enxadrística local, o clube estruturou um calendário
                    anual de competições, formando atletas que representam Caxias em torneios estaduais
                    e nacionais.
                </p>
            </div>
        </div>
    </section>

    {{-- Parallax Nossa Cidade --}}
    <section class="relative py-24 text-white"
             style="
                background-image: url('{{ asset('images/pexels-pavel-danilyuk-8438944.jpg') }}');
                background-attachment: fixed;
                background-size: cover;
                background-position: center;
             ">
        <div class="absolute inset-0 bg-black/70"></div>
        <div class="relative z-10 max-w-5xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <h2 class="text-3xl font-black uppercase mb-4">Nossa Cidade</h2>
                <div class="w-12 h-1 bg-[#f80b3d] mb-6"></div>
                <p class="text-gray-300 leading-relaxed mb-4 text-justify">
                    Caxias é a segunda maior cidade do Maranhão, conhecida como a
                    <strong class="text-white">"Princesa do Sertão"</strong>. É nesse cenário vibrante que o Clube Caxiense
                    de Xadrez se estabeleceu como um oásis intelectual, reunindo mentes apaixonadas
                    pela arte do tabuleiro.
                </p>
                <p class="text-gray-300 leading-relaxed text-justify">
                    Nossa sede está localizada em Caxias, MA, com encontros regulares às terças,
                    quintas e sábados.
                </p>
            </div>
            <div data-aos="fade-left" class="flex flex-col gap-4">
                <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded p-6">
                    <p class="text-[#f80b3d] font-black text-lg mb-1">Localização</p>
                    <p class="text-gray-300 text-sm">Caxias, Maranhão — Brasil</p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded p-6">
                    <p class="text-[#f80b3d] font-black text-lg mb-1">Horários</p>
                    <p class="text-gray-300 text-sm">Sábado: 14h – 18h</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Diretoria --}}
    <section class="bg-white py-20">
        <div class="max-w-5xl mx-auto px-4">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-black uppercase mb-4 text-black">Nossa Diretoria</h2>
                <div class="w-12 h-1 bg-[#f80b3d] mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="bg-[#f2f2f2] p-6 text-center rounded hover:-translate-y-1 transition-transform duration-300 shadow-sm" data-aos="fade-up" data-aos-delay="0">
                    <div class="w-20 h-20 rounded-full bg-black mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white text-2xl font-black">P</span>
                    </div>
                    <h3 class="font-bold text-black">A definir</h3>
                    <p class="text-[#f80b3d] text-sm uppercase tracking-wider mt-1">Presidente</p>
                </div>
                <div class="bg-[#f2f2f2] p-6 text-center rounded hover:-translate-y-1 transition-transform duration-300 shadow-sm" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-20 h-20 rounded-full bg-black mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white text-2xl font-black">V</span>
                    </div>
                    <h3 class="font-bold text-black">A definir</h3>
                    <p class="text-[#f80b3d] text-sm uppercase tracking-wider mt-1">Vice-Presidente</p>
                </div>
                <div class="bg-[#f2f2f2] p-6 text-center rounded hover:-translate-y-1 transition-transform duration-300 shadow-sm" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-20 h-20 rounded-full bg-black mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white text-2xl font-black">S</span>
                    </div>
                    <h3 class="font-bold text-black">A definir</h3>
                    <p class="text-[#f80b3d] text-sm uppercase tracking-wider mt-1">Secretário</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Seja Membro --}}
    <section class="bg-[#f80b3d] py-20 text-white text-center">
        <div class="max-w-3xl mx-auto px-4" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-black uppercase mb-4">
                Faça parte do clube
            </h2>
            <p class="text-white/80 text-lg mb-8">
                Junte-se a uma comunidade apaixonada pelo xadrez em Caxias.
            </p>
            <a href="#"
               class="bg-white text-[#f80b3d] px-10 py-3 font-bold uppercase tracking-widest hover:bg-gray-100 transition-colors duration-200 rounded inline-block">
                Seja Membro
            </a>
        </div>
    </section>

@endsection
