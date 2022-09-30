<?php echo view("templates/header") ?>
<main>
    <img class="logo" src="<?php echo base_url(); ?>/public/img/logo.png" alt="">
    <?php if ($error == 'notmach' ) { ?>
        <div class="error">
            <p>La combinación de usuario y contraseña es incorrecto.</p>
        </div>
    <?php } ?>
    <form class="login_form" action="/validateUser" method="POST">
        <input type="text" name="user" placeholder="USUARIO">
        <input type="password" name="password" placeholder="CONTRASEÑA">
        <button type="submit">INGRESAR</button>
    </form>
</main>
<?php echo view("templates/footer") ?>