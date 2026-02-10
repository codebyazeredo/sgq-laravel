<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm py-2 fixed-top">
    <div class="container-fluid px-4">
        <button id="toggleSidebar" class="btn btn-dark border-secondary me-3">
            <i class="fa-solid fa-cog"></i>
        </button>

        <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ route('dashboard') }}">
            <span class="bg-primary text-white p-1 rounded me-2" style="font-size: 0.8rem;">SGQ</span>
            <span class="d-none d-sm-inline opacity-90">Digital Manager</span>
        </a>
        <div class="collapse navbar-collapse" id="navbarSGQ">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <span class="nav-link disabled opacity-25 d-none d-lg-block">|</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link small fw-light" href="{{ route('dashboard') }}">Painel de Controle</a>
                </li>
            </ul>

            @auth
            <ul class="navbar-nav align-items-center">
                <li class="nav-item me-2">
                    <a class="nav-link position-relative px-3" href="#">
                        <i class="fa-regular fa-bell"></i>
                        <span class="position-absolute top-1 start-50 translate-middle-x p-1 bg-danger border border-light rounded-circle" style="margin-left: 8px;">
                            <span class="visually-hidden">Alertas</span>
                        </span>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center bg-white bg-opacity-10 rounded-pill px-3 py-1"
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-2 text-white shadow-sm"
                            style="width: 30px; height: 30px; font-size: 0.75rem; font-weight: bold;">
                            {{ strtoupper(substr(Auth::user()->name, 0, 2)) }}
                        </div>

                        <span class="fw-normal small text-white">
                            {{ Auth::user()->name }}
                        </span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-3 rounded-3 animate-up">
                        <li class="dropdown-header text-uppercase pb-1" style="font-size: 0.65rem;">Sessão Atual</li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center py-2" href="{{ route('profile.edit') }}">
                                <i class="fa-regular fa-user me-3 opacity-50"></i> Meu Perfil
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center py-2" href="#">
                                <i class="fa-solid fa-gear me-3 opacity-50"></i> Preferências
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider opacity-10">
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item text-danger d-flex align-items-center fw-bold py-2">
                                    <i class="fa-solid fa-power-off me-3"></i> Sair do Sistema
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            @endauth
        </div>
    </div>
</nav>