<?php echo view("templates/header") ?>
<main>
    <img class = "logo" src="public/img/logo.png" alt="">
    <div class = "error" >
        <p></p>
    </div>
    <form class = "login_form" action="" method = "POST">
        <input type="text" placeholder = "USUARIO">
        <input type="password" placeholder ="CONTRASEÑA">
        <button type = "submit">INGRESAR</button>
    </form>
</main>
<?php echo view("templates/footer") ?>