@extends('layouts.base')

@section('title', 'blackmog - Full Stack Developer')
@section('description', 'Portfolio e projetos de desenvolvimento Full Stack')

@section('conteudo')

<!-- Hero -->
<section class="min-h-screen flex items-center justify-center pt-20 pb-20">
    <div class="containerPrincipal text-center">
        <h1 class="tituloPrincipal mb-6">
            blackmog
        </h1>
        <p class="text-2xl md:text-3xl text-[#A1A1AA] font-light mb-12">
            Full Stack Developer
        </p>
        <div class="flex items-center justify-center gap-6 flex-wrap">
            <a href="{{ route('portfolio') }}" class="botaoPrimario">
                Ver Portfolio
            </a>
            <a href="{{ route('contato') }}" class="botaoSecundario">
                Entrar em Contato
            </a>
        </div>
    </div>
</section>

<!-- Carrossel de Projetos -->
<section class="py-20 border-t border-[#1F1F1F]">
    <div class="containerPrincipal">
        <div class="mb-12">
            <h2 class="tituloSecao mb-4">Projetos em Destaque</h2>
            <p class="textoDescritivo">Deslize para explorar meus trabalhos recentes</p>
        </div>
        
        <!-- Carrossel -->
        <div x-data="{ 
            projetos: {{ json_encode($destaques) }},
            prev() {
                const container = document.getElementById('carrossel-projetos');
                container.scrollBy({ left: -400, behavior: 'smooth' });
            },
            next() {
                const container = document.getElementById('carrossel-projetos');
                container.scrollBy({ left: 400, behavior: 'smooth' });
            }
        }" class="relative">
            
            <!-- Botões de Navegação -->
            <div class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-16 z-10 hidden md:block">
                <button @click="prev()" class="p-3 bg-[#111111] border border-[#1F1F1F] rounded-lg hover:border-white transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>
            </div>
            
            <div class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-16 z-10 hidden md:block">
                <button @click="next()" class="p-3 bg-[#111111] border border-[#1F1F1F] rounded-lg hover:border-white transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>

            <div id="carrossel-projetos" class="flex gap-6 overflow-x-auto scroll-smooth pb-4 md:pb-0 scrollbar-hide">
                <template x-for="projeto in projetos" :key="projeto.slug">
                    <a :href="'{{ url('/projetos') }}/' + projeto.slug" class="flex-shrink-0 md:w-96 cardProjeto group hover:scale-105 transition-transform">
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs text-[#A1A1AA] uppercase tracking-wider font-medium">
                                <span x-text="projeto.categoria"></span>
                            </span>
                            <span class="text-xs text-[#A1A1AA]" x-text="projeto.data || ''"></span>
                        </div>
                        
                        <h3 class="text-2xl font-bold mb-3 group-hover:text-[#A1A1AA] transition-colors line-clamp-2">
                            <span x-text="projeto.nome"></span>
                        </h3>
                        
                        <p class="text-[#A1A1AA] mb-6 leading-relaxed text-sm line-clamp-3">
                            <span x-text="projeto.descricao_curta"></span>
                        </p>
                        
                        <div class="flex gap-2 flex-wrap mb-6">
                            <template x-for="tech in projeto.stack.slice(0, 3)" :key="tech">
                                <span class="text-xs px-3 py-1 bg-[#0A0A0A] rounded-full border border-[#1F1F1F]">
                                    <span x-text="tech"></span>
                                </span>
                            </template>
                            <template x-if="projeto.stack.length > 3">
                                <span class="text-xs px-3 py-1 bg-[#0A0A0A] rounded-full border border-[#1F1F1F] text-[#A1A1AA]">
                                    +<span x-text="projeto.stack.length - 3"></span>
                                </span>
                            </template>
                        </div>
                        
                        <!-- Links -->
                        <div class="flex gap-3 mt-8 pt-6 border-t border-[#1F1F1F]">
                            <template x-if="projeto.github">
                                <a :href="projeto.github" target="_blank" @click.stop class="text-xs px-3 py-2 bg-[#111111] rounded hover:border-white border border-[#1F1F1F] transition-all flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v 3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                    </svg>
                                </a>
                            </template>
                            <template x-if="projeto.demo">
                                <a :href="projeto.demo" target="_blank" @click.stop class="text-xs px-3 py-2 bg-white text-black rounded hover:bg-[#A1A1AA] transition-all font-medium">
                                    Demo →
                                </a>
                            </template>
                        </div>
                    </a>
                </template>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('projetos.index') }}" class="inline-block linkSecundario text-sm font-medium hover:text-white">
                Ver todos os projetos →
            </a>
        </div>
    </div>
</section>

<section class="py-20 border-t border-[#1F1F1F]">
    <div class="containerPrincipal">
        <div class="mb-12">
            <h2 class="tituloSecao mb-4">Portfolio Recente</h2>
            <p class="textoDescritivo">Deslize para conhecer meus trabalhos com clientes</p>
        </div>
        
        <!-- Carrossel -->
        <   portfolio: {{ json_encode(array_slice($destaques, 0, 3)) }},
            prev() {
                const container = document.getElementById('carrossel-portfolio');
                container.scrollBy({ left: -400, behavior: 'smooth' });
            },
            next() {
                const container = document.getElementById('carrossel-portfolio');
                container.scrollBy({ left: 400, behavior: 'smooth' });
            }
        }" class="relative">
            
            <!-- Botões de Navegação -->
            <div class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-16 z-10 hidden md:block">
                <button @click="prev()" class="p-3 bg-[#111111] border border-[#1F1F1F] rounded-lg hover:border-white transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>
            </div>
            
            <div class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-16 z-10 hidden md:block">
                <button @click="next()" class="p-3 bg-[#111111] border border-[#1F1F1F] rounded-lg hover:border-white transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>

            <div id="carrossel-portfolio" class="flex gap-6 overflow-x-auto scroll-smooth pb-4 md:pb-0 scrollbar-hide">
                <template x-for="item in portfolio" :key="item.slug">
                    <a :href="'{{ url('/portfolio') }}/projects/' + item.slug" class="flex-shrink-0 md:w-96 cardProjeto group hover:scale-105 transition-transform"enter justify-between mb-4">
                            <span class="text-xs text-[#A1A1AA] uppercase tracking-wider font-medium">
                                Portfolio
                            </span>
                            <span class="text-xs text-[#A1A1AA]" x-text="item.data || ''"></span>
                        </div>
                        
                        <!-- Título -->
                        <h3 class="text-2xl font-bold mb-3 group-hover:text-[#A1A1AA] transition-colors line-clamp-2">
                            <span x-text="item.nome"></span>
                        </h3>
                        
                        <!-- Descrição -->
                        <p class="text-[#A1A1AA] mb-6 leading-relaxed text-sm line-clamp-3">
                            <span x-text="item.descricao_curta"></span>
                        </p>
                        
                        <!-- Stack -->
                        <div class="flex gap-2 flex-wrap mb-6">
                            <template x-for="tech in item.stack.slice(0, 3)" :key="tech">
                                <span class="text-xs px-3 py-1 bg-[#0A0A0A] rounded-full border border-[#1F1F1F]">
                                    <span x-text="tech"></span>
                                </span>
                            </template>
                            <template x-if="item.stack.length > 3">
                                <span class="text-xs px-3 py-1 bg-[#0A0A0A] rounded-full border border-[#1F1F1F] text-[#A1A1AA]">
                                    +<span x-text="item.stack.length - 3"></span>
                                </span>
                            </template>
                        </div>
                        
                        <!-- Links -->
                        <div class="flex gap-3 mt-8 pt-6 border-t border-[#1F1F1F]">
                            <template x-if="item.github">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v 3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                    </svg>
                                </a>
                            </template>
                            <template x-if="item.demo">
                                <a :href="item.demo" target="_blank" @click.stop class="text-xs px-3 py-2 bg-white text-black rounded hover:bg-[#A1A1AA] transition-all font-medium">
                                    Ver →
                                </a>
                            </template>
                        </div>
                    </a>
                </template>
            </div>
        </div>

        <!-- CTA Portfolio -->
        <div class="text-center mt-12">
            <a href="{{ route('portfolio') }}" class="inline-block linkSecundario text-sm font-medium hover:text-white">
                Explorar portfólio completo →
            </a>
        </div>
    </div>
</section>
