<?=  $this->extend("Layouts/Temas/meu_tema") ?>
<?= $this->section("sytles") ?>

<?= $this->endSection() ?>
<?= $this->section("conteudos") ?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="h4 mb-0">Visão Geral</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 small">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
    </div>
    <button class="btn btn-primary btn-sm">
        <i class="bi bi-download me-1"></i> Baixar Relatório
    </button>
</div>

<div class="row g-3 mb-4">
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="card shadow-sm border-0 border-start border-primary border-4">
            <div class="card-body">
                <h6 class="text-muted text-uppercase small mb-2">Faturamento</h6>
                <h4 class="mb-0">R$ 45.200</h4>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="card shadow-sm border-0 border-start border-success border-4">
            <div class="card-body">
                <h6 class="text-muted text-uppercase small mb-2">Lucro Líquido</h6>
                <h4 class="mb-0">R$ 12.800</h4>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="card shadow-sm border-0 border-start border-warning border-4">
            <div class="card-body">
                <h6 class="text-muted text-uppercase small mb-2">Novos Clientes</h6>
                <h4 class="mb-0">+124</h4>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="card shadow-sm border-0 border-start border-danger border-4">
            <div class="card-body">
                <h6 class="text-muted text-uppercase small mb-2">Cancelamentos</h6>
                <h4 class="mb-0">3</h4>
            </div>
        </div>
    </div>
</div>

<div class="row g-3 mb-4">
    <div class="col-12 col-lg-8">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 fw-bold text-primary">Últimas Transações</h6>
                <a href="#" class="btn btn-outline-secondary btn-sm">Ver tudo</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th scope="col" class="ps-4">ID</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Data</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4">#1234</td>
                                <td><img src="https://via.placeholder.com/30" class="rounded-circle me-2" alt=""> João Silva</td>
                                <td>22/11/2023</td>
                                <td>R$ 150,00</td>
                                <td><span class="badge bg-success bg-opacity-10 text-success">Pago</span></td>
                            </tr>
                            <tr>
                                <td class="ps-4">#1235</td>
                                <td><img src="https://via.placeholder.com/30" class="rounded-circle me-2" alt=""> Maria Souza</td>
                                <td>22/11/2023</td>
                                <td>R$ 290,00</td>
                                <td><span class="badge bg-warning bg-opacity-10 text-warning">Pendente</span></td>
                            </tr>
                            <tr>
                                <td class="ps-4">#1236</td>
                                <td><img src="https://via.placeholder.com/30" class="rounded-circle me-2" alt=""> Carlos Lima</td>
                                <td>21/11/2023</td>
                                <td>R$ 89,00</td>
                                <td><span class="badge bg-danger bg-opacity-10 text-danger">Cancelado</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
<?= $this->section("scripts") ?>

<?= $this->endSection() ?>