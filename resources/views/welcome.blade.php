<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>SGQ - Sistema de Gestão da Qualidade</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">SGQ</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Início</a>
                    </li>
                </ul>

                <div class="d-flex gap-2">
                    <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-light btn-sm">
                        Registrar
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="container my-5">

        <div class="alert alert-info">
            <strong>SGQ ativo.</strong> Bootstrap 5 (CSS + JS) funcionando corretamente.
        </div>

        <div class="row g-4 mb-5">

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Documentos</h5>
                        <p class="card-text">
                            Controle de documentos, versões e rastreabilidade.
                        </p>

                        <button class="btn btn-outline-primary btn-sm"
                            data-bs-toggle="modal"
                            data-bs-target="#modalDocumento">
                            Testar Modal
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Inspeções</h5>
                        <p class="card-text">
                            Registro de inspeções e evidências.
                        </p>

                        <button class="btn btn-outline-secondary btn-sm"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseInspecao">
                            Testar Collapse
                        </button>

                        <div class="collapse mt-3" id="collapseInspecao">
                            <div class="card card-body">
                                Conteúdo exibido via JS do Bootstrap.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Auditorias</h5>
                        <p class="card-text">
                            Histórico para auditorias internas e externas.
                        </p>

                        <button id="toastBtn" class="btn btn-outline-success btn-sm">
                            Testar Toast
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <button class="btn btn-outline-dark"
            data-bs-toggle="tooltip"
            data-bs-placement="right"
            title="Tooltips são comuns em sistemas SGQ">
            Testar Tooltip
        </button>

    </main>

    <div class="modal fade" id="modalDocumento" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmação</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    Este modal simula uma ação crítica do SGQ.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">
                        Cancelar
                    </button>
                    <button class="btn btn-danger">
                        Confirmar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1055">
        <div id="sgqToast" class="toast">
            <div class="toast-header">
                <strong class="me-auto">SGQ</strong>
                <small>agora</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
            </div>
            <div class="toast-body">
                Toast do Bootstrap funcionando.
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(el => new bootstrap.Tooltip(el));
            const toastEl = document.getElementById('sgqToast');
            const toast = new bootstrap.Toast(toastEl);
            document.getElementById('toastBtn').addEventListener('click', () => toast.show());
        });
    </script>
</body>

</html>