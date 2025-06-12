<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestor Financeiro</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('thema/plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('thema/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('thema/dist/css/adminlte.min.css') ?>">
</head>

<body class="d-flex align-items-center justify-content-center" style="min-height: 100vh; background: linear-gradient(135deg, #007bff, #6610f2); font-family: 'Segoe UI', sans-serif;">
    <div class="card shadow-lg" style="width: 100%; max-width: 400px; border-radius: 15px;">
        <div class="card-body p-4">
            <div class="text-center mb-4">
                <h2 class="text-primary font-weight-bold">Gestor Financeiro</h2>
                <p class="text-muted">Primeiro Login</p>
                <?php if (isset($_GET['alert'])) : ?>
                    <p class="text-danger font-weight-bold">Acesso Negado! Informe os dados corretamente.</p>
                <?php endif; ?>
            </div>

            <form action="<?= base_url('/loginSubmit') ?>" method="post">
                <div class="form-group">
                    <label for="usuario">Usuário</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-white"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Digite seu usuário" name="user" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="senha">Senha</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-white"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Digite sua senha" name="password" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block mt-3">Entrar</button>
            </form>
        </div>
    </div>

    <!-- Scripts -->
    <script src="<?= base_url('thema/plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('thema/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('thema/dist/js/adminlte.min.js') ?>"></script>
</body>


</html>