<footer class="border-t border-[#1F1F1F] mt-32">
    <div class="containerPrincipal py-12">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6">
            <!-- Logo -->
            <div class="text-xl font-bold tracking-tight">
                blackmog
            </div>
            
            <!-- Links -->
            <div class="flex gap-8 text-sm">
                <a href="{{ route('portfolio') }}" class="linkSecundario">Portfolio</a>
                <a href="{{ route('projetos.index') }}" class="linkSecundario">Projetos</a>
                <a href="{{ route('sobre') }}" class="linkSecundario">Sobre</a>
                <a href="{{ route('contato') }}" class="linkSecundario">Contato</a>
            </div>
            
            <!-- Copyright -->
            <div class="text-sm text-[#A1A1AA]">
                © {{ date('Y') }} blackmog
            </div>
        </div>
    </div>
</footer>
