<?php

namespace App\Models;

class Projeto
{
    public static function todos()
    {
        return [
            [
                'slug' => 'sistema-erp',
                'nome' => 'Sistema ERP',
                'categoria' => 'Web',
                'subcategoria' => 'Backend',
                'descricao_curta' => 'Gestão empresarial com Laravel, Vue.js e Redis',
                'descricao_longa' => 'ERP para gerenciar estoque, vendas, financeiro e RH. Implementa cache com Redis, processamento assíncrono de relatórios e dashboard com dados em tempo real. Backend com Laravel 10, frontend reativo com Vue.js 3.',
                'stack' => ['Laravel 10', 'MySQL', 'Vue.js 3', 'Tailwind CSS', 'Redis'],
                'stack_colors' => ['#FF2D20', '#13B0F5', '#41B883', '#06B6D4', '#EC4899'],
                'thumbnail' => 'https://via.placeholder.com/600x400?text=Sistema+ERP',
                'github' => 'https://github.com/usuario/erp',
                'demo' => 'https://erp-demo.com',
                'destaque' => true,
                'data' => '2024-01',
            ],
            [
                'slug' => 'api-rest',
                'nome' => 'API REST',
                'categoria' => 'Backend',
                'subcategoria' => 'API',
                'descricao_curta' => 'API escalável com autenticação JWT e rate limiting',
                'descricao_longa' => 'REST API em Laravel 10 com autenticação JWT, suporta múltiplas versões de endpoint. Implementa rate limiting por IP, caching em Redis e versionamento de API. Documentação automática com Swagger, queries otimizadas com índices em PostgreSQL.',
                'stack' => ['Laravel 10', 'PostgreSQL', 'Redis', 'JWT', 'Swagger'],
                'stack_colors' => ['#FF2D20', '#336791', '#EC4899', '#3B82F6', '#14B8A6'],
                'thumbnail' => 'https://via.placeholder.com/600x400?text=API+REST',
                'github' => 'https://github.com/usuario/api',
                'demo' => null,
                'destaque' => true,
                'data' => '2023-11',
            ],
            [
                'slug' => 'dashboard-analytics',
                'nome' => 'Dashboard Analytics',
                'categoria' => 'Frontend',
                'subcategoria' => 'Interface',
                'descricao_curta' => 'Dashboard com gráficos Chart.js e filtros avançados',
                'descricao_longa' => 'Dashboard em Vue.js 3 para análise de métricas com Chart.js. Permite filtros por período, export em PDF/Excel, websockets para atualizações live. Componentes reutilizáveis, paginação eficiente e cache de dados.',
                'stack' => ['Vue.js 3', 'Chart.js', 'Tailwind CSS', 'Axios', 'Vite'],
                'stack_colors' => ['#41B883', '#36454F', '#06B6D4', '#FBBF24', '#10B981'],
                'thumbnail' => 'https://via.placeholder.com/600x400?text=Dashboard',
                'github' => 'https://github.com/usuario/dashboard',
                'demo' => 'https://dashboard-demo.com',
                'destaque' => true,
                'data' => '2023-09',
            ],
            [
                'slug' => 'ecommerce-platform',
                'nome' => 'E-Commerce Platform',
                'categoria' => 'Web',
                'subcategoria' => 'Full Stack',
                'descricao_curta' => 'E-commerce com Stripe, carrinho persistente e admin',
                'descricao_longa' => 'Plataforma e-commerce com Laravel 10 backend e Vue.js frontend. Integra pagamentos Stripe, carrinho com localStorage sync, processamento de pedidos assíncrono. Admin com relatórios de vendas, gestão de estoque e notificações.',
                'stack' => ['Laravel 10', 'Vue.js 3', 'Stripe', 'MySQL', 'Tailwind CSS'],
                'stack_colors' => ['#FF2D20', '#41B883', '#635BFF', '#13B0F5', '#06B6D4'],
                'thumbnail' => 'https://via.placeholder.com/600x400?text=E-Commerce',
                'github' => 'https://github.com/usuario/ecommerce',
                'demo' => 'https://ecommerce-demo.com',
                'destaque' => false,
                'data' => '2023-08',
            ],
            [
                'slug' => 'blog-cms',
                'nome' => 'Blog CMS',
                'categoria' => 'CMS',
                'subcategoria' => 'Content',
                'descricao_curta' => 'CMS headless com Livewire e agendamento de posts',
                'descricao_longa' => 'CMS desenvolvido com Laravel 10 e Livewire para gerenciar artigos, categorias e mídia. Editor rich text com WYSIWYG, agendamento de publicações automático, versionamento de conteúdo com rollback, SEO meta tags otimizadas.',
                'stack' => ['Laravel 10', 'Livewire', 'Tailwind CSS', 'PostgreSQL'],
                'stack_colors' => ['#FF2D20', '#FB70A9', '#06B6D4', '#336791'],
                'thumbnail' => 'https://via.placeholder.com/600x400?text=Blog+CMS',
                'github' => 'https://github.com/usuario/blog',
                'demo' => 'https://blog-demo.com',
                'destaque' => false,
                'data' => '2023-07',
            ],
            [
                'slug' => 'saas-app',
                'nome' => 'SaaS App',
                'categoria' => 'Web',
                'subcategoria' => 'Full Stack',
                'descricao_curta' => 'SaaS multi-tenant com billing Stripe e analytics',
                'descricao_longa' => 'Plataforma SaaS multi-tenant em Laravel 10. Implementa isolamento de dados por tenant com middleware, billing automático Stripe com webhooks, gerenciamento de planos/quotas. Analytics tempo real, exportação de dados e API para webhooks customizados.',
                'stack' => ['Laravel 10', 'Vue.js 3', 'Stripe', 'PostgreSQL', 'Tailwind CSS'],
                'stack_colors' => ['#FF2D20', '#41B883', '#635BFF', '#336791', '#06B6D4'],
                'thumbnail' => 'https://via.placeholder.com/600x400?text=SaaS+App',
                'github' => 'https://github.com/usuario/saas',
                'demo' => 'https://saas-demo.com',
                'destaque' => false,
                'data' => '2024-02',
            ],
            [
                'slug' => 'mobile-backend',
                'nome' => 'Mobile App Backend',
                'categoria' => 'Backend',
                'subcategoria' => 'API',
                'descricao_curta' => 'Backend mobile com WebSockets e OAuth2',
                'descricao_longa' => 'Backend em Laravel para app mobile com notificações WebSocket em tempo real. Autenticação OAuth2 com refresh tokens, criptografia end-to-end para dados sensíveis, sincronização offline-first com fila de requisições locais.',
                'stack' => ['Laravel', 'WebSockets', 'OAuth2', 'MySQL', 'Redis'],
                'stack_colors' => ['#FF2D20', '#9333EA', '#3B82F6', '#13B0F5', '#EC4899'],
                'thumbnail' => 'https://via.placeholder.com/600x400?text=Mobile+Backend',
                'github' => 'https://github.com/usuario/mobile-backend',
                'demo' => null,
                'destaque' => false,
                'data' => '2023-06',
            ],
            [
                'slug' => 'realtime-chat',
                'nome' => 'Real-time Chat',
                'categoria' => 'Web',
                'subcategoria' => 'Full Stack',
                'descricao_curta' => 'Chat WebSocket com grupos, mídia e typing',
                'descricao_longa' => 'Aplicação chat com Laravel WebSockets e Vue.js. Suporta DM e salas em grupo, upload de mídia com validação, typing indicators, read receipts e histórico de mensagens paginado. Compressão de imagens automática.',
                'stack' => ['Laravel', 'Vue.js 3', 'WebSockets', 'Redis', 'Tailwind CSS'],
                'stack_colors' => ['#FF2D20', '#41B883', '#9333EA', '#EC4899', '#06B6D4'],
                'thumbnail' => 'https://via.placeholder.com/600x400?text=Real-time+Chat',
                'github' => 'https://github.com/usuario/chat',
                'demo' => 'https://chat-demo.com',
                'destaque' => false,
                'data' => '2023-05',
            ],
            [
                'slug' => 'monitoring-dashboard',
                'nome' => 'Monitoring Dashboard',
                'categoria' => 'Web',
                'subcategoria' => 'Frontend',
                'descricao_curta' => 'Monitoramento com Slack alerts e gráficos Recharts',
                'descricao_longa' => 'Dashboard de monitoramento rastreando uptime, latência e taxa de erro. Integra alertas Slack com thresholds customizáveis, histórico de incidents com correlação, gráficos Recharts com zoom/pan. Status pages com incidents públicos.',
                'stack' => ['Vue.js 3', 'Recharts', 'Tailwind CSS', 'WebSocket'],
                'stack_colors' => ['#41B883', '#8884D8', '#06B6D4', '#9333EA'],
                'thumbnail' => 'https://via.placeholder.com/600x400?text=Monitoring',
                'github' => 'https://github.com/usuario/monitoring',
                'demo' => 'https://monitoring-demo.com',
                'destaque' => false,
                'data' => '2023-10',
            ],
        ];
    }
    
    public static function porSlug($slug)
    {
        $projetos = self::todos();
        return collect($projetos)->firstWhere('slug', $slug);
    }
    
    public static function destaques()
    {
        $projetos = self::todos();
        return collect($projetos)->where('destaque', true)->take(3)->toArray();
    }
    
    public static function porCategoria($categoria)
    {
        $projetos = self::todos();
        if ($categoria === 'todas') {
            return $projetos;
        }
        return collect($projetos)->where('categoria', $categoria)->toArray();
    }
    
    public static function categorias()
    {
        $projetos = self::todos();
        $cats = collect($projetos)->pluck('categoria')->unique()->sort()->values();
        return ['todas', ...$cats->toArray()];
    }
}
