<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    </div>
    <!-- /.content-header -->

    <!-- Small boxes (Stat box) -->
    <div class="d-flex flex-row justify-content-around">

        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3><?= $totalRevenues ?><sup style="font-size: 20px"></sup></h3>

                    <p>Receitas Totais</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3><?= $currentBalance ?></h3>

                    <p>Saldo Atual</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3><?= $totalExpenses ?></h3>

                    <p>Despesas Totais</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-new-transaction">
                                <i class="fas fa-plus-circle"></i> Novo Registro
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>DESCRICÃO</th>
                                            <th>TIPO</th>
                                            <th>CATEGORIA</th>
                                            <th>VALOR</th>
                                            <th>DATA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($transactions as $transaction) : ?>

                                            <tr>
                                                <td class="d-none"><?= $transaction['id'] ?></td>
                                                <td><?= $transaction['description'] ?></td>
                                                <td><?= $transaction['type'] ?></td>
                                                <td><?= $transaction['category'] ?></td>
                                                <td><?= $transaction['value'] ?></td>
                                                <td><?= date('d/m/Y', strtotime(trim($transaction['created_at']))) ?></td>
                                                <td>
                                                    <button type="button" data-toggle="modal" data-target="#modal-edit-transaction" class="btn btn-warning edit-btn">
                                                        <i class="fas fa-edit"></i>
                                                    </button>

                                                    <a href="<?= base_url("transactions/delete?id=") . $transaction['id'] ?>" class="btn btn-danger edit-btn">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Modal Nova Transação -->
    <div class="modal fade" id="modal-new-transaction">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="<?= base_url("transactions/register") ?>" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Novo Registro</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">DESCRIÇÃO</label>
                                    <textarea class="form-control" name="description" required></textarea>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">TIPO</label>
                                    <select class="form-control" name="type" id="select-type" required>
                                        <option selected disabled value="">Selecione um tipo</option>
                                        <option value="Receita">Receita</option>
                                        <option value="Despesa">Despesa</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">VALOR</label>
                                    <input placeholder="Digite o valor" type="number" class="form-control" name="value" required>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">DATA</label>
                                    <input type="date" class="form-control" name="date" required>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">CATEGORIA</label>
                                    <select class="form-control" name="category" id="category" required>
                                        <option selected disabled value="">Selecione uma categoria</option>
                                        <option value="Alimentação">Alimentação</option>
                                        <option value="Transporte">Transporte</option>
                                        <option value="Salário">Salário</option>
                                        <option value="Gastos Extras">Gastos Extras</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal De Editar Transação -->
    <div class="modal fade" id="modal-edit-transaction">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="<?= base_url("transactions/editTransaction") ?>" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Edição do Registro</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <input type="hidden" class="idTransaction" id="idTransaction" name="idTransaction" required>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">DESCRIÇÃO</label>
                                    <textarea class="form-control" id="description_edit" name="description_edit" required></textarea>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">TIPO</label>
                                    <select class="form-control type_edit" name="type_edit" id="type_edit" required>
                                        <option selected disabled value="">Selecione um tipo</option>
                                        <option value="Receita">Receita</option>
                                        <option value="Despesa">Despesa</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">VALOR</label>
                                    <input placeholder="Digite o valor" id="value_edit" type="number" class="form-control" name="value_edit" required>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">DATA</label>
                                    <input type="date" id="data_edit" class="form-control data_edit" name="date_edit" required>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">CATEGORIA</label>
                                    <select class="form-control category_edit" name="category_edit" id="category_edit" required>
                                        <option selected disabled value="">Selecione uma categoria</option>
                                        <option value="Alimentação">Alimentação</option>
                                        <option value="Transporte">Transporte</option>
                                        <option value="Salário">Salário</option>
                                        <option value="Gastos Extras">Gastos Extras</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Confirm Delete -->
    <!-- <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="deleteModalLabel">Confirme a remoção</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-0">Tem certeza que deseja excluir esse registro?</p>
                </div>
                <div class="modal-footer">

                    <a href="#" id="confirmDeleteBtn" class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                    </a>
                </div>
            </div>
        </div>
    </div> -->

    <?php if (session()->getFlashdata('flash')) :
        $flash = session()->getFlashdata('flash');
    ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
                icon: '<?= $flash['type'] ?>',
                title: '<?= $flash['type'] === 'success' ? 'Sucesso' : 'Erro' ?>',
                text: '<?= $flash['message'] ?>',
                confirmButtonText: 'OK'
            });
        </script>
    <?php endif; ?>


    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

            const rows = document.querySelectorAll('table tbody tr');

            rows.forEach(row => {
                const cells = row.getElementsByTagName('td');

                const idTransaction = cells[0].innerHTML;
                const description = cells[1].innerHTML;
                const type = cells[2].innerHTML;
                const category = cells[3].innerHTML;
                const value = cells[4].innerHTML;
                const createdAt = cells[5].innerHTML;

                const editButton = row.querySelector('.edit-btn');
                editButton.addEventListener('click', function() {

                    console.log(idTransaction, 'idTransaction')

                    document.querySelector(".idTransaction").value = idTransaction
                    document.getElementById("description_edit").value = description
                    document.querySelector(".type_edit").value = type
                    document.getElementById("value_edit").value = value
                    document.querySelector(".data_edit").value = new Date(createdAt).toISOString().split('T')[0];
                    document.querySelector(".category_edit").value = category
                });
            });

        });
    </script>