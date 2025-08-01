<div class="col-md-3">
    <!-- Sidebar -->
    <div class="list-group">
        <a href="{{ route('admin.index') }}" class="list-group-item list-group-item-action">Admin</a>
        <a class="list-group-item list-group-item-action">Atualizar produtos</a>
        <a href="{{ route('pages.home') }}" class="list-group-item list-group-item-action">Home</a>
        <a href="{{ route('admin.users.index') }}" class="list-group-item list-group-item-action">Usuários</a>

        <!-- Catálogos -->
        <a class="list-group-item list-group-item-action dropdown-toggle" data-bs-toggle="collapse"
            href="#menuCatalogos" role="button" aria-expanded="false" aria-controls="menuCatalogos">
            Catálogos
        </a>
        <div class="collapse" id="menuCatalogos">
            <a href="{{ route('admin.uploads.index') }}"
                class="list-group-item list-group-item-action ps-4">Produtos</a>
            <a href="{{ route('admin.brands.index') }}" class="list-group-item list-group-item-action ps-4">Marcas</a>
            <a href="{{ route('admin.categories.index') }}"
                class="list-group-item list-group-item-action ps-4">Categorias</a>
            <a href="{{ route('admin.subcategories.index') }}"
                class="list-group-item list-group-item-action ps-4">Subcategorias</a>
            <a href="{{ route('admin.childcategories.index') }}"
                class="list-group-item list-group-item-action ps-4">Categoria Filhas</a>
        </div>

        <!-- Vendas -->
        <a class="list-group-item list-group-item-action dropdown-toggle" data-bs-toggle="collapse" href="#menuVendas"
            role="button" aria-expanded="false" aria-controls="menuVendas">
            Vendas
        </a>
        <div class="collapse" id="menuVendas">
            <a class="list-group-item list-group-item-action ps-4">Pedidos</a>
            <a class="list-group-item list-group-item-action ps-4">Clientes</a>
        </div>

        <!-- Conteúdos -->
        <a class="list-group-item list-group-item-action dropdown-toggle" data-bs-toggle="collapse"
            href="#menuConteudos" role="button" aria-expanded="false" aria-controls="menuConteudos">
            Conteúdos
        </a>
        <div class="collapse" id="menuConteudos">
            <a class="list-group-item list-group-item-action ps-4" href="{{ route('admin.blogs.index') }}">Blog</a>
            <a class="list-group-item list-group-item-action ps-4">Banners</a>
            <a class="list-group-item list-group-item-action ps-4"
                href="{{ route('admin.contacts.index') }}">Contato</a>
            <a class="list-group-item list-group-item-action ps-4">Página Não Encontrada</a>
            <a class="list-group-item list-group-item-action ps-4">Políticas</a>
        </div>

        <!-- Marketing -->
        <a class="list-group-item list-group-item-action dropdown-toggle" data-bs-toggle="collapse"
            href="#menuMarketing" role="button" aria-expanded="false" aria-controls="menuMarketing">
            Marketing
        </a>
        <div class="collapse" id="menuMarketing">
            <a class="list-group-item list-group-item-action ps-4">Cupons</a>
        </div>

        <!-- Sistema -->
        <a class="list-group-item list-group-item-action dropdown-toggle" data-bs-toggle="collapse" href="#menuSistema"
            role="button" aria-expanded="false" aria-controls="menuSistema">
            Sistema
        </a>
        <div class="collapse" id="menuSistema">
            <button id="clearCacheBtn" class="list-group-item list-group-item-action ps-4">Limpar Cache</button>
            <a href="{{ route('admin.convert.webp') }}" class="list-group-item list-group-item-action ps-4">Converter
                todas as imagens para WebP</a>
            <a class="list-group-item list-group-item-action ps-4">Manutenção</a>
        </div>
    </div>
</div>