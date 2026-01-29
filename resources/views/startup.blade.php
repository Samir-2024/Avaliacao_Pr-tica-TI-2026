<div class="container py-5">
    <div class="card shadow-sm mb-5">
        <div class="card-header bg-primary text-white">
            <h2 class="h5 mb-0">Criar Nova Startup</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('startups.store') }}" method="POST">
                @csrf 
                <div class="row g-3">
                    <div class="col-12 col-md-6">
                        <label class="form-label fw-bold">Nome</label>
                        <input type="text" name="nome" class="form-control"  required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label fw-bold">Setor</label>
                        <input type="text" name="setor" class="form-control" required>
                    </div>
                    <div class="col-12 col-md-8">
                        <label class="form-label fw-bold">E-mail de Contato</label>
                        <input type="email" name="email_contato" class="form-control" placeholder="contato@startup.com" required>
                    </div>
                    <div class="col-12 col-md-4">
                        <label class="form-label fw-bold">Data de Cadastro</label>
                        <input type="date" name="data_cadastro" class="form-control" required>
                    </div>
                    <div class="col-12 pt-2">
                        <button type="submit" class="btn btn-primary w-100 shadow-sm">
                            <i class="bi bi-check-lg"></i> Cadastrar Startup
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-header bg-light">
            <h3 class="h5 mb-0">Startups Cadastradas</h3>
        </div>
        <div class="card-body p-0"> <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th class="px-4">Nome</th>
                            <th>Setor</th>
                            <th>E-mail</th>
                            <th class="text-nowrap">Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($startups as $startup)
                            <tr>
                                <td class="px-4 fw-bold text-primary">{{ $startup->nome }}</td>
                                <td><span class="badge bg-secondary">{{ $startup->setor }}</span></td>
                                <td>{{ $startup->email_contato }}</td>
                                <td class="text-nowrap">{{ \Carbon\Carbon::parse($startup->data_cadastro)->format('d/m/Y') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-4 text-muted">
                                    <i class="bi bi-info-circle"></i> Nenhuma startup encontrada.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>