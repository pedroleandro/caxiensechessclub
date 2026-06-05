<footer class="bg-black text-white">

    {{-- Linha vermelha superior --}}
    <div class="h-1 bg-[#f80b3d]"></div>

    {{-- Conteúdo principal --}}
    <div class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 sm:grid-cols-3 gap-8">

        {{-- Coluna 1 - Identidade --}}
        <div>
            <img src="{{ asset('logo.png') }}" alt="Clube Caxiense de Xadrez" class="h-16 w-auto mb-4">
            <h2 class="text-lg font-bold mb-2">Sobre a Marca</h2>
            <p class="text-gray-400 text-sm mb-6 text-justify">
                No coração da cidade de Caxias, surge um oásis intelectual que desafia mentes e celebra a estratégia: o
                Clube Caxiense de Xadrez. Uma marca de xadrez que transcende o simples jogo de tabuleiro, tornando-se
                uma referência de excelência no mundo enxadrístico. Este é um local onde a paixão pela estratégia e o
                respeito pelas tradições se unem para criar uma experiência única.
            </p>
        </div>

        {{-- Coluna 2 - Links rápidos --}}
        <div>
            <h3 class="text-sm font-semibold uppercase tracking-wider mb-3 text-[#f80b3d]">Links Rápidos</h3>
            <ul class="space-y-2 text-sm text-gray-400">
                <li><a href="{{ route('home') }}" class="hover:text-white transition-colors duration-200">Home</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-white transition-colors duration-200">Sobre</a></li>
                <li><a href="" class="hover:text-white transition-colors duration-200">Notícias</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-white transition-colors duration-200">Contato</a></li>
                <li><a href="{{ route('calendar') }}" class="hover:text-white transition-colors duration-200">Calendário</a></li>
            </ul>
        </div>

        {{-- Coluna 3 - Redes sociais e horário --}}
        <div>
            <h3 class="text-sm font-semibold uppercase tracking-wider mb-3 text-[#f80b3d]">Siga o Clube</h3>
            <ul class="space-y-2 text-sm text-gray-400 mb-4">
                <li><a href="https://www.instagram.com/clubecaxiensedexadrez/" target="_blank"
                       class="hover:text-white transition-colors duration-200">Instagram</a></li>
                <li><a href="" class="hover:text-white transition-colors duration-200">Facebook</a></li>
                <li><a href="" class="hover:text-white transition-colors duration-200">YouTube</a></li>
            </ul>
            <h3 class="text-sm font-semibold uppercase tracking-wider mb-2 text-[#f80b3d]">Horário</h3>
            <p class="text-sm text-gray-400">No Caxias Shopping Center, na praça de alimentação</p>
            <p class="text-sm text-gray-400">Sábado das 14h até as 18h</p>
        </div>

    </div>

    {{-- Barra inferior --}}
    <div class="border-t border-gray-800 text-center text-xs text-gray-600 py-4">
        &copy; {{ date('Y') }} Clube Caxiense de Xadrez. Todos os direitos reservados.
    </div>

</footer>
