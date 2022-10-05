<?php echo view("templates/header"); ?>

<main class="lockerBar">
    <div class="consummation">
        <div class="info">
            <h4>Locker: </h4>
            <h4>Ocupante:</h4>
            <h4>Cover:</h4>
        </div>
        <table>
            <thead>
                <th class="concept">Concepto</th>
                <th class="quantity">Cantidad</th>
                <th class="total">Total</th>
            </thead>
            <tbody>
                <tr class="impar">
                    <td>Refresco</td>
                    <td>10</td>
                    <td>10</td>
                </tr>
                <tr class="par">
                    <td>Refresco</td>
                    <td>10</td>
                    <td>10</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="proserRec">
        <div class="proser">
            <div>Masaje 1</div>
            <div>Masaje 2</div>
            <div>Dep. Ano y Glúteos</div>
            <div>Dep. Axilas</div>
            <div>Dep. Brazos</div>
            <div>Dep. Espalda</div>
            <div>Dep. Nariz</div>
            <div>Dep. Pantorrilla o Muslo</div>
            <div>Dep. Parte Íntima</div>
            <div>Dep. Pecho y Abdomen</div>
            <div>Dep. Piernas Completas</div>
            <div>Facial Escandinavia</div>
            <div>Facial Profundo</div>
            <div>Toalla</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="payment">
            <div class="total">
                <label>Total:</label>
                <p>1000$</p>
            </div>
            <div class="rightSide">
                <div class="number">
                    <div class="efectivo">
                        <label>Efectivo</label>
                        <input type="number">
                    </div>
                    <div class="pos">
                        <label>Pos</label>
                        <input type="number" value="0.00">
                    </div>
                </div>
                <button type="submit">Cobrar</button>
            </div>
        </div>

    </div>
</main>