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
            <div class="menu__links">
                <a href="../index.php">Home</a>
            </div>
        </div>
    </header>
    <main>
        <div class="video-background">
            <video autoplay muted loop id="video-bg">
                <source src="../assets/background.mp4" type="video/mp4">
                Seu navegador não suporta o elemento de vídeo.
            </video>
        </div>
        <!-- Chama o componente do login -->
        <?php include("../components/Login/login.php") ?>
    </main>
    <!-- Chama o componente do rodapé -->
    <?php include("../components/Footer/footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/less"></script>
</body>

</html>