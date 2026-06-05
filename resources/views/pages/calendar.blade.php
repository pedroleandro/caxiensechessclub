@extends('layouts.app')

@section('content')

    {{-- Hero Interno --}}
    <section class="bg-black text-white pt-40 pb-20 text-center">
        <div class="max-w-4xl mx-auto px-4" data-aos="fade-up">
            <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tight mb-4">
                Calendário 2026
            </h1>
            <p class="text-gray-300 text-lg md:text-xl">
                Fique por dentro dos torneios e eventos de xadrez em Caxias e região.
            </p>
        </div>
    </section>

    {{-- Linha vermelha --}}
    <div class="h-1 bg-[#f80b3d]"></div>

    {{-- Legenda --}}
    <section class="bg-white py-8 border-b border-gray-100">
        <div class="max-w-5xl mx-auto px-4 flex flex-wrap items-center gap-6" data-aos="fade-up">
            <p class="text-sm font-semibold uppercase tracking-wider text-gray-500">Legenda:</p>
            <div class="flex items-center gap-2">
                <span class="inline-block w-3 h-3 rounded-full bg-[#f80b3d]"></span>
                <span class="text-sm text-gray-600">Evento Local — Caxias, MA</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="inline-block w-3 h-3 rounded-full bg-gray-400"></span>
                <span class="text-sm text-gray-600">Evento Regional</span>
            </div>
        </div>
    </section>

    {{-- Cards dos Eventos --}}
    <section class="bg-[#f2f2f2] py-20">
        <div class="max-w-5xl mx-auto px-4">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                {{-- Evento 2 — Regional --}}
                <div
                    class="bg-white rounded shadow-sm overflow-hidden hover:-translate-y-1 transition-transform duration-300"
                    data-aos="fade-up" data-aos-delay="150">

                    {{-- Topo do card --}}
                    <div class="bg-black px-6 py-4 flex items-center justify-between">
                        <span
                            class="text-xs font-bold uppercase tracking-widest text-gray-400 border border-gray-600 px-3 py-1 rounded">
                            Evento Regional
                        </span>
                        <span class="text-gray-400 text-xs uppercase tracking-wider">Teresina — PI</span>
                    </div>

                    {{-- Data destaque --}}
                    <div class="bg-gray-700 px-6 py-4 text-white">
                        <p class="text-3xl font-black">14, 15 e 16</p>
                        <p class="text-sm uppercase tracking-widest font-semibold">Agosto de 2026</p>
                    </div>

                    {{-- Conteúdo --}}
                    <div class="px-6 py-6">
                        <h2 class="text-lg font-black text-black uppercase leading-tight mb-1">
                            XI Aberto do Brasil de Xadrez
                        </h2>
                        <p class="text-xs text-gray-400 uppercase tracking-wider mb-4">
                            Taça Cidade de Teresina
                        </p>

                        <ul class="space-y-2 text-sm text-gray-600 mb-6">
                            <li class="flex items-start gap-2">
                                <span class="text-gray-500 font-black">→</span>
                                <span><strong>Ritmo:</strong> Clássico — 90' + 30" por lance</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-gray-500 font-black">→</span>
                                <span><strong>Sistema:</strong> Suíço</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-gray-500 font-black">→</span>
                                <span><strong>Rodadas:</strong> 6 rodadas</span>
                            </li>

                            <li class="flex items-start gap-2">
                                <span class="text-gray-500 font-black">→</span>
                                <span><strong>Rating:</strong> CBX / FIDE</span>
                            </li>

                            <li class="flex items-start gap-2">
                                <span class="text-gray-500 font-black">→</span>
                                <span><strong>Organização:</strong> Federação Piauiense de Xadrez</span>
                            </li>


                        </ul>

                        <div class="bg-[#f2f2f2] rounded p-4 text-sm text-gray-600">
                            <p class="font-bold text-black text-xs uppercase tracking-wider mb-2">Vale:</p>
                            <p>🎯 Vagas para o Campeonato Brasileiro Absoluto 2026</p>
                            <p>🎯 Vaga para o Campeonato Piauiense Absoluto 2026</p>
                            <p>🎯 Pontos no Circuito Estadual de Torneios Municipais 2026</p>
                        </div>
                    </div>

                </div>

                {{-- Evento 1 — Local --}}
                <div
                    class="bg-white rounded shadow-sm overflow-hidden hover:-translate-y-1 transition-transform duration-300"
                    data-aos="fade-up" data-aos-delay="0">

                    {{-- Topo do card --}}
                    <div class="bg-black px-6 py-4 flex items-center justify-between">
                        <span
                            class="text-xs font-bold uppercase tracking-widest text-[#f80b3d] border border-[#f80b3d] px-3 py-1 rounded">
                            Evento Local
                        </span>
                        <span class="text-gray-400 text-xs uppercase tracking-wider">Caxias — MA</span>
                    </div>

                    {{-- Data destaque --}}
                    <div class="bg-[#f80b3d] px-6 py-4 text-white">
                        <p class="text-3xl font-black">13, 14 e 15</p>
                        <p class="text-sm uppercase tracking-widest font-semibold">Novembro de 2026</p>
                    </div>

                    {{-- Conteúdo --}}
                    <div class="px-6 py-6">
                        <h2 class="text-lg font-black text-black uppercase leading-tight mb-1">
                            II Aberto do Brasil Princesa do Sertão Maranhense STD
                        </h2>
                        <p class="text-xs text-gray-400 uppercase tracking-wider mb-4">
                            Troféu Pedro Aluízio de Abreu Lobo
                        </p>

                        <ul class="space-y-2 text-sm text-gray-600 mb-6">
                            <li class="flex items-start gap-2">
                                <span class="text-[#f80b3d] font-black">→</span>
                                <span><strong>Ritmo:</strong> Clássico — 90' + 30" por lance</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#f80b3d] font-black">→</span>
                                <span><strong>Sistema:</strong> Suíço</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#f80b3d] font-black">→</span>
                                <span><strong>Rodadas:</strong> 6 rodadas</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-gray-500 font-black">→</span>
                                <span><strong>Rating:</strong> CBX / FIDE</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#f80b3d] font-black">→</span>
                                <span><strong>Organização:</strong> Federação Maranhense de Xadrez</span>
                            </li>
                        </ul>

                        <div class="bg-[#f2f2f2] rounded p-4 text-sm text-gray-600">
                            <p class="font-bold text-black text-xs uppercase tracking-wider mb-2">Vale:</p>
                            <p>🏆 Título de Campeão Caxiense de Xadrez Absoluto</p>
                            <p>🏆 Título de Campeã Caxiense de Xadrez Feminina</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    {{-- Parallax CTA --}}
    <section class="relative py-24 text-white"
             style="
                background-image: url('{{ asset('images/pexels-pavel-danilyuk-8438957.jpg') }}');
                background-attachment: fixed;
                background-size: cover;
                background-position: center;
             ">
        <div class="absolute inset-0 bg-black/75"></div>
        <div class="relative z-10 max-w-3xl mx-auto px-4 text-center" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-black uppercase mb-4">
                Fique por dentro dos próximos eventos
            </h2>
            <p class="text-gray-300 text-lg mb-8">
                Acompanhe o calendário e não perca nenhum torneio.
            </p>
            <a href="{{ route('about') }}"
               class="bg-[#f80b3d] text-white px-10 py-3 font-bold uppercase tracking-widest hover:bg-red-700 transition-colors duration-200 rounded inline-block">
                Conheça o Clube
            </a>
        </div>
    </section>

@endsection
