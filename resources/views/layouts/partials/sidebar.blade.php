<aside id="sidebar" class="sidebar bg-dark shadow-sm">   
    <div class="p-3 text-white">
        <div class="d-flex flex-column p-3 text-white">
            <div class="mb-4 text-center">
                <h6 class="fw-bold text-uppercase small opacity-50">Menu Principal</h6>
                <hr class="text-secondary opacity-25">
            </div>

            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item mb-1">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : 'text-white opacity-75' }}">
                        <i class="fa-solid fa-gauge-high me-2"></i> Dashboard
                    </a>
                </li>
                
                <li class="nav-item mb-1">
                    <a href="#docs-sub" class="nav-link text-white opacity-75 d-flex align-items-center justify-content-between" data-bs-toggle="collapse">
                        <span><i class="fa-solid fa-file-contract me-2"></i> Documentos</span>
                        <i class="fa-solid fa-chevron-down small"></i>
                    </a>
                    <div class="collapse ps-3 mt-1" id="docs-sub">
                        <ul class="nav nav-pills flex-column border-start border-secondary border-opacity-50 ps-2">
                            <li><a href="#" class="nav-link text-white opacity-50 small py-1 text-decoration-none">Listagem</a></li>
                            <li><a href="#" class="nav-link text-white opacity-50 small py-1 text-decoration-none">Revisões</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item mb-1">
                    <a href="#" class="nav-link text-white opacity-75">
                        <i class="fa-solid fa-magnifying-glass-chart me-2"></i> Auditorias
                    </a>
                </li>

                <li class="nav-item mb-1">
                    <a href="#" class="nav-link text-white opacity-75">
                        <i class="fa-solid fa-circle-exclamation me-2"></i> Não Conformidades
                    </a>
                </li>

                <hr class="text-secondary opacity-25 my-3">

                @can('admin')
                <li class="nav-item">
                    <small class="text-uppercase text-muted fw-bold d-block mb-2 px-3" style="font-size: 0.7rem;">Admin</small>
                    <a href="#" class="nav-link text-white opacity-75">
                        <i class="fa-solid fa-users-gear me-2"></i> Usuários
                    </a>
                </li>
                @endcan
            </ul>
        </div>
    </div>
</aside>