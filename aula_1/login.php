<?php
//formulário de autenticação
?>


<?php
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email'], $_POST['password'])) {
        if ($_POST['email'] == 'admin@hotmail.com' && $_POST['password'] == '123') {
            $message = "Parabéns, você está logado";
        } else {
            $message = "E-mail ou senha incorretos!";
        }
    }
}

?>


<!DOCTYPE>
<html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-4">
                <form method="POST">
                    <div class="row">
                        <div class="col">
                            <label>Email</label>
                            <input type="email" class="form-control" required name="email">
                            <br>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col">
                            <label>Senha</label>
                            <input type="password" class="form-control" required name="password">
                            <br>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </div>

                    <div class="col">
                        <span>
                            <?php echo $message; ?>
                        </span>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>