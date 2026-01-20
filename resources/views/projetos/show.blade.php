@extends('layouts.base')

@section('title', $projeto['nome'] . ' - blackmog')
@section('description', $projeto['descricao_curta'])

@section('conteudo')

<section class="pt-32 pb-20">
    <div class="containerPrincipal max-w-4xl">
        <!-- Header -->
        <div class="mb-16">
            <a href="{{ route('projetos.index') }}" class="linkSecundario text-sm mb-8 inline-block hover:text-branco">
                ← Voltar para Projetos
            </a>
            
            <div class="mb-6">
                <span class="text-sm text-[#A1A1AA] uppercase tracking-wider font-medium block mb-4">
                    {{ $projeto['categoria'] }}
                    @if(isset($projeto['data']))
                    • {{ $projeto['data'] }}
                    @endif
                </span>
                <h1 class="text-5xl md:text-6xl font-black tracking-tight mb-6">{{ $projeto['nome'] }}</h1>
            </div>
            
            <!-- Stack -->
            <div class="flex gap-3 flex-wrap">
                @foreach($projeto['stack'] as $tech)
                <span class="text-sm px-4 py-2 bg-[#111111] rounded-full border border-[#1F1F1F]">{{ $tech }}</span>
                @endforeach
            </div>
        </div>
        
        <!-- Divider -->
        <div class="border-t border-[#1F1F1F] my-12"></div>
        
        <!-- Conteúdo -->
        <div class="space-y-12">
            <!-- Descrição -->
            <div>
                <h2 class="text-3xl font-bold text-branco mb-6">Sobre o Projeto</h2>
                <p class="textoDescritivo">{{ $projeto['descricao_longa'] }}</p>
            </div>
            
            <!-- Stack Detalhada -->
            <div>
                <h2 class="text-3xl font-bold text-branco mb-6">Stack Utilizada</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @foreach($projeto['stack'] as $tech)
                    <div class="p-4 bg-[#111111] rounded-lg border border-[#1F1F1F] hover:border-[#A1A1AA] transition-colors">
                        <p class="text-branco font-medium">{{ $tech }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <!-- Divider -->
            <div class="border-t border-[#1F1F1F]"></div>
            
            <!-- Links de Ação -->
            <div class="flex flex-col sm:flex-row gap-4">
                @if($projeto['github'])
                <a href="{{ $projeto['github'] }}" target="_blank" rel="noopener noreferrer" class="botaoPrimario text-center flex-1">
                    <span>Ver no GitHub →</span>
                </a>
                @endif
                
                @if($projeto['demo'])
                <a href="{{ $projeto['demo'] }}" target="_blank" rel="noopener noreferrer" class="botaoSecundario text-center flex-1">
                    <span>Acessar Demo →</span>
                </a>
                @else
                <div class="botaoSecundario text-center flex-1 opacity-50 cursor-not-allowed">
                    <span>Demo não disponível</span>
                </div>
                @endif
            </div>
        </div>
        
        <!-- Navegação para outros projetos -->
        <div class="border-t border-[#1F1F1F] mt-16 pt-12">
            <p class="text-sm text-[#A1A1AA] mb-6">Explorar outros projetos:</p>
            <div class="flex gap-4 flex-wrap">
                <a href="{{ route('portfolio') }}" class="px-4 py-2 bg-[#111111] rounded-lg border border-[#1F1F1F] hover:border-[#A1A1AA] transition-colors text-sm">
                    ← Portfolio
                </a>
                <a href="{{ route('projetos.index') }}" class="px-4 py-2 bg-[#111111] rounded-lg border border-[#1F1F1F] hover:border-[#A1A1AA] transition-colors text-sm">
                    Ver todos os projetos →
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
