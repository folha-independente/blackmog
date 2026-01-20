@extends('layouts.base')

@section('title', 'Contato - blackmog')

@section('conteudo')

<section class="pt-32 pb-20">
    <div class="containerPrincipal max-w-3xl">
        <h1 class="tituloSecao mb-12">Contato</h1>
        
        <div class="space-y-8">
            <p class="textoDescritivo">
                Interessado em trabalhar junto ou discutir algum projeto? Entre em contato.
            </p>
            
            <!-- Links de Contato -->
            <div class="space-y-6 pt-8">
                <div class="flex items-center gap-4">
                    <span class="text-[#A1A1AA] w-24">Email:</span>
                    <a href="mailto:contato@blackmog.com" class="linkPrincipal">
                        contato@blackmog.com
                    </a>
                </div>
                
                <div class="flex items-center gap-4">
                    <span class="text-[#A1A1AA] w-24">GitHub:</span>
                    <a href="https://github.com/seu-usuario" target="_blank" class="linkPrincipal">
                        github.com/seu-usuario →
                    </a>
                </div>
                
                <div class="flex items-center gap-4">
                    <span class="text-[#A1A1AA] w-24">LinkedIn:</span>
                    <a href="https://linkedin.com/in/seu-perfil" target="_blank" class="linkPrincipal">
                        linkedin.com/in/seu-perfil →
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
