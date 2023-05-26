<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/valva.png" type="image/x-icon">
    <link rel="stylesheet/less" type="text/less" href="../styles/styles.less" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <title>Clínica Odontológica Valva</title>
</head>

<body>
    <header>
        <div class="menu">
            <img class="logo" src="../assets/valva.png" alt="Logo-Valva">
        </div>
    </header>
    <main>
        <div class="video-background">
            <video autoplay muted loop id="video-bg">
                <source src="../assets/background.mp4" type="video/mp4">
                Seu navegador não suporta o elemento de vídeo.
            </video>
        </div>
        <div class="login-signup">
            <form action="../connections/signup-script.php" method="post" class="form-signup">
                <h1>Cadastre-se</h1>
                <?php
                session_start();
                if (isset($_SESSION["error"])) {
                    include "../messages/erroCadastro.php";
                    unset($_SESSION["error"]);
                } elseif (isset($_SESSION["errorEmail"])) {
                    include "../messages/erroEmail.php";
                    unset($_SESSION["errorEmail"]);
                }
                ?>
                <input type="text" id="nome" name="nome" placeholder="Informe seu nome">
                <input type="email" id="email" name="email" placeholder="Informe seu e-mail">
                <input type="password" id="senha" name="senha" placeholder="Informe sua senha">
                <input type="text" id="telefone" name="telefone" maxlength="11" placeholder="Informe seu telefone">
                <button type="submit">Cadastrar</button>
                <a href="login.php">Já é cadastrado? Faça login!</a>
            </form>
        </div>
    </main>
    <footer>
        <div class="description">
            <p>Clínica especialista em ortodontia, diagnóstico e tratamento de problemas relacionados a sua saúde bucal
                e integridade dos dentes.
            </p>
        </div>
        <div class="icons">
            <a class="icons__a" href="#" target="_blank">
                <img src="../assets/facebook.png" alt="fabook" />
            </a>
            <a class="icons__a" href="#" target="_blank">
                <img src="../assets/instagram.png" alt="instagram" />
            </a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/less"></script>
</body>

</html>