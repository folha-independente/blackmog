# blackmog - Full Stack Portfolio

Portfólio minimalista inspirado em Notion/GitHub/Linear com design preto e branco.

## Setup Inicial

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate

# Database
php artisan migrate

# Development
php artisan serve
npm run dev
```

## Database

- **Host:** localhost
- **Database:** blackmog
- **User:** laravel
- **Password:** laravel_password

## Arquitetura

### Routes
- `/` - Home com carrosséis de projetos em destaque
- `/portfolio` - Grid de todos os projetos com filtros por categoria
- `/projetos` - Lista completa de projetos
- `/projetos/{slug}` - Detalhe de um projeto específico
- `/sobre` - Sobre o desenvolvedor
- `/contato` - Página de contato

### Models
- **Projeto** (`app/Models/Projeto.php`) - Dados estáticos de 9 projetos com métodos:
  - `todos()` - Retorna todos os projetos
  - `porSlug($slug)` - Busca por slug
  - `destaques()` - Retorna projetos em destaque
  - `porCategoria($categoria)` - Filtra por categoria
  - `categorias()` - Lista categorias únicas

### Views
- `layouts/base.blade.php` - Template base com meta tags SEO
- `components/navbar.blade.php` - Navegação fixa com menu mobile
- `components/footer.blade.php` - Rodapé
- Home, Portfolio, Projetos (index/show), Sobre, Contato

### Styling
- **CSS:** Tailwind 4 com `@theme` para cores customizadas
- **Componentes:** `.containerPrincipal`, `.cardProjeto`, `.botaoPrimario`, `.linkSecundario`, etc
- **Utilities:** `line-clamp`, `scrollbar-hide` para carrosséis

### JavaScript
- **Alpine.js** para interatividade (carrosséis, filtros, menu mobile)
- Scroll suave com `scrollBy({ behavior: 'smooth' })`

## Data Structure - Projeto

Cada projeto possui:

```php
[
    'slug' => 'unique-identifier',
    'nome' => 'Project Name',
    'categoria' => 'Web|Backend|Frontend|CMS',
    'subcategoria' => 'Sub-category',
    'descricao_curta' => 'Short description (160 chars)',
    'descricao_longa' => 'Detailed description',
    'stack' => ['Laravel', 'Vue.js', 'Tailwind'],
    'stack_colors' => ['#FF2D20', '#41B883', '#06B6D4'],
    'thumbnail' => 'https://via.placeholder.com/600x400',
    'github' => 'https://github.com/usuario/repo',
    'demo' => 'https://demo.com or null',
    'destaque' => true,
    'data' => '2024-01'
]
```

### Color Palette
- **Laravel:** #FF2D20
- **Vue.js:** #41B883
- **Tailwind:** #06B6D4
- **PostgreSQL:** #336791
- **MySQL:** #13B0F5
- **Stripe:** #635BFF
- **WebSockets:** #9333EA
- **Chart.js:** #8884D8
- **Livewire:** #FB70A9
- **Axios:** #FBBF24
- **OAuth2/JWT:** #3B82F6

## Features

✅ Design minimalista (preto e branco)
✅ Carrosséis com scroll suave (Alpine.js)
✅ Filtros de projetos por categoria
✅ Menu mobile responsivo
✅ Meta tags SEO e Open Graph
✅ Dados dinâmicos via Controllers
✅ Cache compilado em `storage/framework/views` (incluído em `.gitignore`)

## Conceitos

- **Portfolio** = Trabalhos com clientes
- **Projetos** = Open source ou disponível para comercialização
- **Tipografia como Design** = Menos cores, mais contraste texto
- **Mobile First** = Responsivo desde small screens
