<nav class="fixed w-full top-0 z-50 bg-black/90 backdrop-blur-sm border-b border-[#1F1F1F]" 
     x-data="{ menuAberto: false }">
    <div class="containerPrincipal">
        <div class="flex items-center justify-between py-6">
            <a href="{{ route('home') }}" class="text-2xl font-black tracking-tight linkPrincipal" @click="menuAberto = false">
                blackmog
            </a>
            
            <ul class="hidden md:flex items-center gap-10 text-sm font-medium">
                <li>
                    <a href="{{ route('portfolio') }}" class="linkSecundario">
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="{{ route('projetos.index') }}" class="linkSecundario">
                        Projetos
                    </a>
                </li>
                <li>
                    <a href="{{ route('sobre') }}" class="linkSecundario">
                        Sobre
                    </a>
                </li>
                <li>
                    <a href="{{ route('contato') }}" class="linkSecundario">
                        Contato
                    </a>
                </li>
            </ul>
            
            <button @click="menuAberto = !menuAberto" class="md:hidden text-[#A1A1AA] hover:text-white transition">
                <svg x-show="!menuAberto" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="menuAberto" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        
        <div x-show="menuAberto"
             x-transition
             @click.away="menuAberto = false"
             class="md:hidden border-t border-[#1F1F1F] py-6">
            <ul class="space-y-4 text-sm font-medium">
                <li><a href="{{ route('portfolio') }}" @click="menuAberto = false" class="block linkSecundario">Portfolio</a></li>
                <li><a href="{{ route('projetos.index') }}" @click="menuAberto = false" class="block linkSecundario">Projetos</a></li>
                <li><a href="{{ route('sobre') }}" @click="menuAberto = false" class="block linkSecundario">Sobre</a></li>
                <li><a href="{{ route('contato') }}" @click="menuAberto = false" class="block linkSecundario">Contato</a></li>
            </ul>
        </div>
    </div>
</nav>
