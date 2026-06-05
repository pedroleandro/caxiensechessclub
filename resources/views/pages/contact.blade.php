@extends('layouts.app')

@section('content')

    {{-- Hero Interno --}}
    <section class="bg-black text-white pt-40 pb-20 text-center">
        <div class="max-w-4xl mx-auto px-4" data-aos="fade-up">
            <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tight mb-4">
                Contato
            </h1>
            <p class="text-gray-300 text-lg md:text-xl">
                Entre em contato com o Clube Caxiense de Xadrez.
            </p>
        </div>
    </section>

    {{-- Linha vermelha --}}
    <div class="h-1 bg-[#f80b3d]"></div>

    {{-- Informações + Formulário --}}
    <section class="bg-[#f2f2f2] py-20">
        <div class="max-w-5xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12">

            {{-- Informações de contato --}}
            <div data-aos="fade-right">
                <h2 class="text-2xl font-black uppercase mb-4 text-black">Fale Conosco</h2>
                <div class="w-12 h-1 bg-[#f80b3d] mb-8"></div>

                <div class="space-y-6">

                    <div class="flex items-start gap-4">
                        <div
                            class="bg-[#f80b3d] text-white w-10 h-10 rounded flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-wider text-gray-400 mb-1">E-mail</p>
                            <a href="mailto:contato@caxiensechessclub.com.br"
                               class="text-black font-semibold hover:text-[#f80b3d] transition-colors duration-200">
                                contato@caxiensechessclub.com.br
                            </a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div
                            class="bg-[#f80b3d] text-white w-10 h-10 rounded flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="w-5 h-5">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-wider text-gray-400 mb-1">WhatsApp</p>
                            <a href="https://wa.me/5599984228986" target="_blank"
                               class="text-black font-semibold hover:text-[#f80b3d] transition-colors duration-200">
                                (99) 98422-8986
                            </a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div
                            class="bg-[#f80b3d] text-white w-10 h-10 rounded flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-wider text-gray-400 mb-1">Localização</p>
                            <p class="text-black font-semibold">Caxias, Maranhão — Brasil</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div
                            class="bg-[#f80b3d] text-white w-10 h-10 rounded flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-wider text-gray-400 mb-1">Horário de Funcionamento</p>
                            <p class="text-black font-semibold">Sábado: 14h – 20h</p>
                        </div>
                    </div>

                </div>

                {{-- Redes sociais --}}
                <div class="mt-10">
                    <p class="text-xs uppercase tracking-wider text-gray-400 mb-4">Siga o Clube</p>
                    <div class="flex gap-3">
                        <a href="#"
                           class="bg-black text-white px-4 py-2 text-xs font-bold uppercase tracking-wider rounded hover:bg-[#f80b3d] transition-colors duration-200">
                            Instagram
                        </a>
                        <a href="#"
                           class="bg-black text-white px-4 py-2 text-xs font-bold uppercase tracking-wider rounded hover:bg-[#f80b3d] transition-colors duration-200">
                            Facebook
                        </a>
                        <a href="#"
                           class="bg-black text-white px-4 py-2 text-xs font-bold uppercase tracking-wider rounded hover:bg-[#f80b3d] transition-colors duration-200">
                            YouTube
                        </a>
                    </div>
                </div>
            </div>

            {{-- Formulário --}}
            <div data-aos="fade-left">
                <h2 class="text-2xl font-black uppercase mb-4 text-black">Envie uma Mensagem</h2>
                <div class="w-12 h-1 bg-[#f80b3d] mb-8"></div>

                <div class="bg-white rounded shadow-sm p-8 space-y-5">

                    <div>
                        <label class="block text-xs uppercase tracking-wider text-gray-500 mb-2">Nome</label>
                        <input type="text" placeholder="Seu nome completo"
                               class="w-full border border-gray-200 rounded px-4 py-3 text-sm focus:outline-none focus:border-[#f80b3d] transition-colors duration-200">
                    </div>

                    <div>
                        <label class="block text-xs uppercase tracking-wider text-gray-500 mb-2">E-mail</label>
                        <input type="email" placeholder="seu@email.com"
                               class="w-full border border-gray-200 rounded px-4 py-3 text-sm focus:outline-none focus:border-[#f80b3d] transition-colors duration-200">
                    </div>

                    <div>
                        <label class="block text-xs uppercase tracking-wider text-gray-500 mb-2">Assunto</label>
                        <select
                            class="w-full border border-gray-200 rounded px-4 py-3 text-sm text-gray-500 focus:outline-none focus:border-[#f80b3d] transition-colors duration-200">
                            <option value="">Selecione um assunto</option>
                            <option value="associacao">Quero ser membro</option>
                            <option value="torneios">Informações sobre torneios</option>
                            <option value="aulas">Aulas de xadrez</option>
                            <option value="patrocinio">Patrocínio</option>
                            <option value="outro">Outro assunto</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs uppercase tracking-wider text-gray-500 mb-2">Mensagem</label>
                        <textarea rows="5" placeholder="Escreva sua mensagem..."
                                  class="w-full border border-gray-200 rounded px-4 py-3 text-sm focus:outline-none focus:border-[#f80b3d] transition-colors duration-200 resize-none"></textarea>
                    </div>

                    <button type="button"
                            class="w-full bg-[#f80b3d] text-white py-3 font-bold uppercase tracking-widest hover:bg-red-700 transition-colors duration-200 rounded">
                        Enviar Mensagem
                    </button>

                </div>
            </div>

        </div>
    </section>

    {{-- Mapa --}}
    <section data-aos="fade-up">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63736.27!2d-43.3567!3d-4.8694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNMKwNTInMDkuOCJTIDQzwrAyMScyNC4xIlc!5e0!3m2!1spt-BR!2sbr!4v1000000000"
            width="100%"
            height="400"
            style="border:0; display:block;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </section>

@endsection
