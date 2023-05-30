<div class="login-signup">
    <form action="../connections/signup-script.php" method="post" class="form-signup">
        <h1>Cadastre-se</h1>
        <?php
        session_start();
        if (isset($_SESSION["error"])) {
            include "../messages/erroCadastro.php";
            unset($_SESSION["error"]);
        }
        if (isset($_SESSION["errorEmail"])) {
            include "../messages/erroEmail.php";
            unset($_SESSION["errorEmail"]);
        }
        if (isset($_SESSION["senhaNaoConfere"])) {
            include "../messages/senhaNaoConfere.php";
            unset($_SESSION["senhaNaoConfere"]);
        }
        ?>
        <input type="text" id="nome" name="nome" placeholder="Informe seu nome">
        <input type="email" id="email" name="email" placeholder="Informe seu e-mail">
        <input type="password" id="senha" name="senha" placeholder="Informe sua senha">
        <input type="password" id="confirmSenha" name="confirmSenha" placeholder="Confirme sua senha">
        <input type="text" id="telefone" name="telefone" maxlength="11" placeholder="Informe seu telefone">
        <button type="submit">Cadastrar</button>
        <a href="login.php">Já é cadastrado? Faça login!</a>
    </form>
</div>