@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="h4 fw-bold mb-0">Visão Geral da Qualidade</h2>
            <p class="text-muted small">Bem-vindo, {{ Auth::user()->name }}</p>
        </div>
        <button class="btn btn-primary shadow-sm">
            <i class="fa-solid fa-plus me-2"></i>Novo Registro
        </button>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card border-0 border-start border-primary border-5 shadow-sm">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-muted fw-bold mb-1">Documentos</p>
                            <h2 class="mb-0">124</h2>
                        </div>
                        <div class="bg-primary bg-opacity-10 p-3 rounded">
                            <i class="fa-solid fa-file-lines text-primary fs-3"></i>
                        </div>
                    </div>
                    <div class="mt-3">
                        <span class="text-success small fw-bold"><i class="fa-solid fa-check"></i> 98 Vigentes</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 border-start border-danger border-5 shadow-sm">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-muted fw-bold mb-1">Não Conformidades</p>
                            <h2 class="mb-0">08</h2>
                        </div>
                        <div class="bg-danger bg-opacity-10 p-3 rounded">
                            <i class="fa-solid fa-triangle-exclamation text-danger fs-3"></i>
                        </div>
                    </div>
                    <div class="mt-3">
                        <span class="text-danger small fw-bold">Aguardando análise</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 border-start border-warning border-5 shadow-sm">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-muted fw-bold mb-1">Auditorias</p>
                            <h2 class="mb-0">02</h2>
                        </div>
                        <div class="bg-warning bg-opacity-10 p-3 rounded">
                            <i class="fa-solid fa-clipboard-list text-warning fs-3"></i>
                        </div>
                    </div>
                    <div class="mt-3">
                        <span class="text-muted small">Próxima em 15 dias</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 border-start border-success border-5 shadow-sm">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-muted fw-bold mb-1">Eficácia Geral</p>
                            <h2 class="mb-0">94%</h2>
                        </div>
                        <div class="bg-success bg-opacity-10 p-3 rounded">
                            <i class="fa-solid fa-chart-line text-success fs-3"></i>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-success" style="width: 94%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white py-3">
                    <h6 class="mb-0 fw-bold">Atividades Recentes</h6>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th class="ps-4">Evento</th>
                                    <th>Data</th>
                                    <th>Status</th>
                                    <th class="text-end pe-4">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-4">Revisão POP-RH-001 aprovada</td>
                                    <td>Hoje, 14:30</td>
                                    <td><span class="badge bg-success-subtle text-success">Concluído</span></td>
                                    <td class="text-end pe-4"><button class="btn btn-sm btn-light border">Ver</button></td>
                                </tr>
                                <tr>
                                    <td class="ps-4">Nova RNC aberta: Logística</td>
                                    <td>Ontem</td>
                                    <td><span class="badge bg-danger-subtle text-danger">Pendente</span></td>
                                    <td class="text-end pe-4"><button class="btn btn-sm btn-light border">Ver</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm bg-primary text-white">
                <div class="card-body p-4">
                    <h5>Status do Sistema</h5>
                    <p class="opacity-75 small">O sistema está operando em conformidade com as migrações mais recentes e autenticação via Laravel.</p>
                    <hr class="opacity-25">
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-circle-check me-2"></i>
                        <span>Banco de dados integrado</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection