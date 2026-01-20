@extends('layouts.base')

@section('title', 'Projetos - blackmog')
@section('description', 'Lista completa de projetos desenvolvidos')

@section('conteudo')

<section class="pt-32 pb-20">
    <div class="containerPrincipal">
        <!-- Header -->
        <div class="mb-16">
            <h1 class="tituloSecao mb-6">Todos os Projetos</h1>
            <p class="textoDescritivo max-w-3xl">
                Lista completa de todos os projetos desenvolvidos. Clique para ver mais detalhes.
            </p>
        </div>
        
        <div class="space-y-6">
            @foreach($projetos as $projeto)
            <a href="{{ route('projetos.show', $projeto['slug']) }}" 
               class="block border border-[#1F1F1F] rounded-lg p-8 hover:border-[#A1A1AA] hover:-translate-y-1 transition-all group">
                <div class="flex flex-col md:flex-row md:items-start justify-between gap-6">
                    <div class="flex-1">
                        <!-- Categoria e Data -->
                        <div class="flex items-center gap-4 mb-3">
                            <span class="text-xs text-[#A1A1AA] uppercase tracking-wider font-medium">
                                {{ $projeto['categoria'] }}
                            </span>
                            @if(isset($projeto['data']))
                            <span class="text-xs text-[#A1A1AA]">{{ $projeto['data'] }}</span>
                            @endif
                        </div>
                        
                        <!-- Título -->
                        <h3 class="text-2xl font-bold mb-3 group-hover:text-[#A1A1AA] transition-colors">
                            {{ $projeto['nome'] }}
                        </h3>
                        
                        <!-- Descrição -->
                        <p class="text-[#A1A1AA] mb-4 leading-relaxed">
                            {{ $projeto['descricao_curta'] }}
                        </p>
                        
                        <!-- Stack -->
                        <div class="flex gap-2 flex-wrap">
                            @foreach($projeto['stack'] as $tech)
                            <span class="text-xs px-3 py-1 bg-[#111111] rounded-full border border-[#1F1F1F]">{{ $tech }}</span>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Arrow -->
                    <div class="text-sm font-medium text-[#3B82F6] whitespace-nowrap md:mt-2">
                        Ver detalhes →
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        <!-- CTA Section -->
        <div class="text-center mt-20 pt-16 border-t border-[#1F1F1F]">
            <p class="textoDescritivo mb-8">Procurando trabalhos já realizados para clientes?</p>
            <a href="{{ route('portfolio') }}" class="inline-block botaoPrimario">
                Ver Portfólio de Trabalhos →
            </a>
        </div>
    </div>
</section>

@endsection
