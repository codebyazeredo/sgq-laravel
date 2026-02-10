@extends('layouts.app')

@section('content')
<div class="row g-4">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="h4 mb-0">Dashboard</h1>

            <span class="badge bg-success">
                Sistema de Gestão da Qualidade
            </span>
        </div>
        <hr>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6 class="card-title text-muted">Status do usuário</h6>
                <p class="mb-0">
                    <strong>Logado com sucesso</strong>
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6 class="card-title text-muted">Documentos</h6>
                <h3 class="mb-0">0</h3>
                <small class="text-muted">Registrados no sistema</small>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6 class="card-title text-muted">Não conformidades</h6>
                <h3 class="mb-0">0</h3>
                <small class="text-muted">Abertas</small>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title mb-3">Bem-vindo</h5>

                <div class="alert alert-success mb-0">
                    Você está autenticado e pronto para usar o SGQ.
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
