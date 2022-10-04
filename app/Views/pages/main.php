<?php echo view("templates/header"); ?>
<main>
    <img class="logo_main" src="public/img/logo.png" alt="">
    <div class="container">
        <div class="lockers">
            <div class="vip"><p>Kevin Alemán</p><i class="fa-solid fa-star"></i></div>
            <?php 
            $status = ['available', 'unavailable', 'occupied'];
            foreach ($lockers as $locker) { ?>
                <div class="<?php echo $status[$locker['status']]; ?>">
                <?php echo $locker['id']; ?>
                <?php if($locker["status"] == 1){ ?>
                    <i class="fa-solid fa-lock"></i>
                    <?php }else{ ?>
                        <i class="fa-solid fa-lock-open"></i>
                    <?php } ?>
            </div>               
            <?php } ?>
        </div>
        <div class="menu">
            <div class="icons">
                <?php if($_SESSION['type'] == 1){ ?>
                    <div><i class="fa-solid fa-gears" onclick="goto('/admin/admin')"></i></div>
                    <div><i class="fa-solid fa-cash-register"></i></div>
                <?php } ?>
                <?php if($_SESSION['type'] == 2){ ?>
                    <div><i class="fa-solid fa-cash-register"></i></div>
                    <div><i class="fa-solid fa-lock-open"></i></div>
                <?php } ?>
                <?php if($_SESSION['type'] == 3){ ?>
                    <div><i class="fa-solid fa-rotate-right"></i></div>
                    <div><i class="fa-solid fa-boxes-stacked"></i></div>
                <?php } ?>
                <div><i class="fa-solid fa-file"></i></div>
                <div><i class="fa-solid fa-right-from-bracket"></i></div>
            </div>
            <?php if($_SESSION['type'] == 2){ ?>
                <form method="POST">
                    <h3>REGISTRAR ENTRADA</h3>
                    <div class="name">
                        <label for="">Nombre:</label>
                        <input type="text">
                    </div>
                    <div class="locker">
                        <label for="">Nº de Locker:</label>
                        <select name="" id=""></select>
                    </div>
                    <div class="entry">
                            <label for="">Efectivo:</label>
                            <input min="0">$/
                            <label for="">Pos:</label>
                            <input min="0">$               
                    </div>
                    <div class="checked">
                        <input type="checkbox">
                        <p>Sólo masaje / depilación</p>
                    </div>
                    <button type="submit">Registrar</button>
                    <hr>
                    <h3>ENTRADAS HOY: </h3>
                    <h1>0</h1>
                </form>
            <?php } ?>
        </div>
    </div>
</main>
<?php echo view("templates/footer"); ?>