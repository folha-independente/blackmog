@extends('layouts.base')

@section('title', 'Portfolio - blackmog')
@section('description', 'Visão geral dos projetos desenvolvidos')

@section('conteudo')

<section class="pt-32 pb-20">
    <div class="containerPrincipal" x-data="{
        categoriaAtiva: 'todas',
        projetos: {{ json_encode($projetos) }},
        get projetosFiltrados() {
            if (this.categoriaAtiva === 'todas') {
                return this.projetos;
            }
            return this.projetos.filter(p => p.categoria === this.categoriaAtiva);
        },
        get categorias() {
            let cats = new Set(this.projetos.map(p => p.categoria));
            return ['todas', ...Array.from(cats).sort()];
        }
    }">
        <!-- Header -->
        <div class="mb-16">
            <h1 class="tituloSecao mb-6">Portfolio</h1>
            <p class="textoDescritivo max-w-3xl">
                Visão geral dos principais projetos desenvolvidos. Filtre por categoria ou veja todos.
            </p>
        </div>
        
        <!-- Filtros -->
        <div class="flex gap-3 mb-12 flex-wrap">
            <template x-for="categoria in categorias" :key="categoria">
                <button @click="categoriaAtiva = categoria"
                        :class="categoriaAtiva === categoria ? 'bg-branco text-pretoPrincipal' : 'bg-[#111111] text-[#A1A1AA] hover:bg-[#0A0A0A]'"
                        class="px-6 py-3 rounded-lg text-sm font-medium transition-all capitalize border border-[#1F1F1F]">
                    <span x-text="categoria"></span>
                    <span class="text-xs ml-2" x-text="'(' + projetos.filter(p => p.categoria === categoria || categoria === 'todas').length + ')'"></span>
                </button>
            </template>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <template x-for="projeto in projetosFiltrados" :key="projeto.slug">
                <a :href="'{{ url('/projetos') }}/' + projeto.slug" class="cardProjeto group">
                    <img :src="projeto.thumbnail" :alt="projeto.nome" class="w-full h-48 object-cover rounded-md mb-4 bg-[#0A0A0A]">
                    
                    <div class="text-xs text-[#A1A1AA] mb-4 uppercase tracking-wider">
                        <span x-text="projeto.categoria"></span>
                    </div>
                    
                    <h3 class="text-2xl font-bold mb-4 group-hover:text-[#A1A1AA] transition-colors">
                        <span x-text="projeto.nome"></span>
                    </h3>
                    
                    <!-- Descrição -->
                    <p class="text-[#A1A1AA] mb-6 leading-relaxed text-sm">
                        <span x-text="projeto.descricao_curta"></span>
                    </p>
                    
                    <!-- Stack -->
                    <div class="flex gap-2 flex-wrap mb-6">
                        <template x-for="tech in projeto.stack" :key="tech">
                            <span class="text-xs px-3 py-1 bg-[#0A0A0A] rounded-full">
                                <span x-text="tech"></span>
                            </span>
                        </template>
                    </div>
                    
                    <!-- Link -->
                    <div class="text-sm font-medium text-[#3B82F6]">
                        Ver detalhes →
                    </div>
                </a>
            </template>
        </div>
        
        <!-- Mensagem quando nenhum projeto -->
        <div x-show="projetosFiltrados.length === 0" class="text-center py-12">
            <p class="text-[#A1A1AA]">Nenhum projeto encontrado nesta categoria.</p>
        </div>

        <!-- CTA Section -->
        <div class="text-center mt-20 pt-16 border-t border-[#1F1F1F]">
            <p class="textoDescritivo mb-8">Gostou do meu trabalho? Veja também meus projetos open source e disponíveis para comercialização.</p>
            <a href="{{ route('projetos.index') }}" class="inline-block botaoSecundario">
                Explorar Projetos →
            </a>
        </div>
    </div>
</section>

@endsection
