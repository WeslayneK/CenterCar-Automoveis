<?php if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario']; 
    $categoria = $_SESSION['categoria'];
    $avatar = $_SESSION['avatar']?>
       <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="pagina_inicial.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <svg width="300px" src=<?php
                            include ASSET_DIR . "/imagens/center_car_horizontal.svg"; ?></svg>
            </a>
                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a style="color: red; font-size: 1.3rem;" href="pagina_inicial.php" class="nav-link px-2 link-secondary">Home</a></li>
                    <li><a style="font-size: 1.3rem;" href="estoque.php" class="nav-link px-2 link-dark">Estoque</a></li>
                    <li><a style="font-size: 1.3rem;" href="adicionar.php" class="nav-link px-2 link-dark">Adicionar</a></li>

                    <?php if($categoria=='a') : ?>
                    <li><a style="font-size: 1.3rem;" href="admin.php" class="nav-link px-2 link-dark">Admin</a></li>
                    <?php endif; ?>
                </ul>
            <div class="col-md-3 text-end">
                <a href="#" class="col-md-3 text-end">
                    <button style="background-image: linear-gradient(to right, red, darkorange); border-color: red;" type="button" class="btn btn-primary"><img class="circle" width="30" heigth="30" src="./assets/imagens/usuarios/<?php echo $avatar; ?>"><?php print " " . "$usuario"; ?></button></a>
                <a href="logout.php">
                    <button type="button" class="btn btn-outline-primary me-2">Sair</button></a>
            </div>
        </header>
<?php
} else { ?>
       <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <svg width="300px" src=<?php
                            include ASSET_DIR . "/imagens/center_car_horizontal.svg"; ?></svg></a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a style="color: red; font-size: 1.3rem;" href="index.php" class="nav-link px-2 link-secondary">Home</a></li>
                <li><a style="font-size: 1.3rem;" href="ofertas.php" class="nav-link px-2 link-dark">Ofertas</a></li>

                
            </ul>
            <div class="col-md-3 text-end">
                <a href="login.php">
                    <button type="button" class="btn btn-outline-primary me-2">Entrar</button></a>
                <a href="registre.php">
                    <button style="background-image: linear-gradient(to right, red, darkorange); border-color: red;" type="button" class="btn btn-primary">Registre-se</button></a>
            </div>
        </header>
<?php
} ?>