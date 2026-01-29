<form action="{{ route('startups.store') }}" method="POST" class="container p-4 border rounded bg-light">
    
    @csrf <div class="container">
        <h2 class="mb-4">Criar Startup</h2>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Setor</label>
                <input type="text" name="setor" class="form-control" required>
            </div>

            <div class="col-md-12 mb-3">
                <label class="form-label">E-mail de Contato</label>
                <input type="email" name="email_contato" class="form-control" placeholder="nome@exemplo.com" required>
            </div>
            <div class="col-md-12 mb-3">
                <label class="form-label">Data_cadastro</label>
                <input type="date" name="data_cadastro" class="form-control" placeholder="nome@exemplo.com" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
    </div>
</form>