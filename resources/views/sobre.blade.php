@extends('layouts.base')

@section('title', 'Sobre - blackmog')

@section('conteudo')

<section class="pt-32 pb-20">
    <div class="containerPrincipal max-w-3xl">
        <h1 class="tituloSecao mb-12">Sobre</h1>
        
        <div class="space-y-8 textoDescritivo">
            <p>
                Desenvolvedor Full Stack com foco em criar produtos escaláveis, limpos e eficientes.
            </p>
            
            <p>
                Trabalho principalmente com Laravel, Vue.js e Tailwind CSS. Valorizo código bem 
                estruturado, performance e experiência do usuário.
            </p>
            
            <div class="pt-8 border-t border-[#1F1F1F]">
                <h2 class="text-2xl font-bold text-white mb-6">Stack Principal</h2>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div class="text-sm">Laravel</div>
                    <div class="text-sm">Vue.js</div>
                    <div class="text-sm">Tailwind CSS</div>
                    <div class="text-sm">MySQL</div>
                    <div class="text-sm">PostgreSQL</div>
                    <div class="text-sm">Git</div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
