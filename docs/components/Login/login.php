<div class="login">
    <form action="../connections/login-script.php" method="post" class="form-login">
        <h1>Login</h1>
        <?php
        session_start();
        if (isset($_SESSION["error"])) {
            include "../messages/erroLogin.php";
        }
        unset($_SESSION["error"]);
        ?>
        <?php
        if (isset($_SESSION["sucessoSignup"])) {
            include "../messages/sucessoSignup.php";
        }
        unset($_SESSION["sucessoSignup"]);
        ?>
        <input type="email" id="email" name="email" placeholder="Informe seu e-mail">
        <input type="password" id="senha" name="senha" placeholder="Informe sua senha">
        <button type="submit">Entrar</button>
        <button type="reset">Limpar</button>
        <a href="signup.php">Não é cadastrado? Cadastre-se!</a>
    </form>
</div>