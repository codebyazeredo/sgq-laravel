<aside id="sidebar"
       class="col-lg-2 col-md-3 bg-white border-end collapse d-lg-block p-0 min-vh-100">

    <div class="list-group list-group-flush rounded-0">

        <a href="{{ route('dashboard') }}"
           class="list-group-item list-group-item-action
           {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <i class="fa fa-chart-line me-2"></i>
            Dashboard
        </a>

        <a href="#"
           class="list-group-item list-group-item-action">
            <i class="fa fa-file-alt me-2"></i>
            Documentos
        </a>

        <a href="#"
           class="list-group-item list-group-item-action">
            <i class="fa fa-clipboard-check me-2"></i>
            Auditorias
        </a>

        <a href="#"
           class="list-group-item list-group-item-action">
            <i class="fa fa-triangle-exclamation me-2"></i>
            Não Conformidades
        </a>

        <a href="#"
           class="list-group-item list-group-item-action">
            <i class="fa fa-chart-pie me-2"></i>
            Relatórios
        </a>

        @can('admin')
            <a href="#"
               class="list-group-item list-group-item-action">
                <i class="fa fa-user-shield me-2"></i>
                Administração
            </a>
        @endcan

    </div>
</aside>
