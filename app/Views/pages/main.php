<?php echo view("templates/header"); ?>
<main>
    <img class="logo_main" src="public/img/logo.png" alt="">
    <div class="container">
        <div class="lockers">
            <div class="vip">Kevin Aleman</div>
            <div class="occupied">1</div>
            <div class="available">2</div>
            <div class="unavailable">3</div>

        </div>
        <div class="menu">
            <div class="icons">
                <div><i class="fa-solid fa-cash-register"></i></div>
                <div><i class="fa-solid fa-lock-open"></i></div>
                <div><i class="fa-solid fa-dollar-sign"></i></div>
                <div><i class="fa-solid fa-file"></i></div>
                <div><i class="fa-solid fa-right-from-bracket"></i></div>
            </div>
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
        </div>
    </div>
</main>
<?php echo view("templates/footer"); ?>