                <?php echo view("templates/header"); ?>
                <main class="admin">
                    <nav class="nav_bar">
                        <ul>
                            <li onclick="toggle_menu(event,'user','#option_container div.option_item')">Usuarios</li>
                            <li onclick="toggle_menu(event,'proser','#option_container div.option_item')">Producto/Servicio</li>
                            <li onclick="toggle_menu(event,'promo','#option_container div.option_item')">Promociones</li>
                            <li onclick="toggle_menu(event,'vip','#option_container div.option_item')">VIP</li>
                            <li onclick="toggle_menu(event,'cover','#option_container div.option_item')">Covers</li>
                        </ul>
                    </nav>
                    <div id="option_container">
                        <div id="user" class="option_item">
                            <form action="" method="POST" class="user">
                                <div class="user">
                                    <label for="">Usuario:</label>
                                    <input type="text">
                                </div>
                                <div class="name">
                                    <label for="">Nombre:</label>
                                    <input type="text">
                                </div>
                                <div class="password">
                                    <label for="">Contraseña:</label>
                                    <input type="text">
                                </div>
                                <div class="type">
                                    <label for="">Tipo:</label>
                                    <select name="" id="">
                                        <option value="1">Administración</option>
                                        <option value="2">Recepción</option>
                                        <option value="3">Bar</option>
                                    </select>
                                </div>
                                <button type="submit">Registrar</button>
                            </form>
                            <form action="" method="POST" class="password">
                                <div>
                                    <label for="">Manolito</label>
                                    <label for="">Nueva contraseña:</label>
                                    <input type="text" name="password">
                                    <button type="submit">Actualizar</button>
                                </div>
                            </form>
                        </div>
                        <div id="proser" class="option_item">
                            <form action="" method="POST" class="proser">
                                <div class="services1">
                                    <div class="services_user">
                                        <label>Nombre:</label>
                                        <input type="text">
                                    </div>
                                    <div class="services_price">
                                        <label>Precio:</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="services2">
                                    <div class="type2">
                                        <label for="">Tipo:</label>
                                        <select name="" id="">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                        </select>
                                    </div>
                                    <div class="discount">
                                        <label for="">Descontar de:</label>
                                        <select name="" id="">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit">Guardar</button>
                            </form>
                            <form action="" method="POST" class="note">
                                <div class="note">
                                    <label for="">Agua $2.00</label>
                                    <button type="submit">Actualizar</button>
                                </div>
                            </form>
                        </div>
                        <div class="option_item" id="promo">
                            <form action="" method="POST" class="promo">
                                <div class="promo1">
                                    <div class="promo_name">
                                        <label>Nombre:</label>
                                        <input type="text">
                                    </div>
                                    <div class="promo_price">
                                        <label>Precio:</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="promo2">
                                    <div class="promo_items">
                                        <label for="">Incluye:</label>
                                        <select name="" id="">
                                            <option value="1">Pilsener</option>
                                            <option value="2">Golden</option>
                                        </select>
                                    </div>
                                    <div class="promo_amount">
                                        <label for="">Cantidad:</label>
                                        <input type="number">
                                    </div>
                                </div>
                                <div class="promo_check">
                                    <input type="checkbox">
                                    <label for="">Todo</label>
                                    <input type="checkbox">
                                    <label for="">Lunes</label>
                                    <input type="checkbox">
                                    <label for="">Martes</label>
                                    <input type="checkbox">
                                    <label for="">Miércoles</label>
                                    <input type="checkbox">
                                    <label for="">Jueves</label>
                                    <input type="checkbox">
                                    <label for="">Viernes</label>
                                    <input type="checkbox">
                                    <label for="">Sábado</label>
                                    <input type="checkbox">
                                    <label for="">Domingo</label>
                                </div>
                                <button type="submit">Guardar</button>
                            </form>
                        </div>
                        <div id="vip" class="option_item">
                            <form action="" class="vips">
                                <div class="vips_name">
                                    <label>Nombre completo:</label>
                                    <input type="text">
                                </div>
                                <div class="vips_password">
                                    <label>Contraseña:</label>
                                    <input type="text">
                                </div>
                                <div class="vips_discount">
                                    <label>Descuento:</label>
                                    <select name="" id="">
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <button type="submit">Guardar</button>
                            </form>
                            <form action="" class="new_password">
                                <div class="vips_new_password">
                                    <label>Nombre completo:</label>
                                    <p></p>
                                </div>
                                <div class="vips_new_password">
                                    <label>Nueva contraseña:</label>cover
                                    <input type="text">
                                </div>
                                <div class="vips_options">
                                    <!-- <label for="">Opciones</label> -->
                                    <button type="submit">Actualizar</button>
                                </div>
                            </form>
                        </div>
                        <div id="cover" class="option_item">
                        <form action="" method="POST" class="cover">
                                <div class="cover1">
                                    <div class="cover_name">
                                        <label>Nombre:</label>
                                        <input type="text">
                                    </div>
                                    <div class="cover_price">
                                        <label>Precio:</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="cover2">
                                    <div class="cover_items">
                                        <label for="">Incluye:</label>
                                        <select name="" id="">
                                            <option value="1">Pilsener</option>
                                            <option value="2">Golden</option>
                                        </select>
                                    </div>
                                    <div class="cover_amount">
                                        <label for="">Consumible:</label>
                                        <select name="" id="">
                                            <option value="1">Sí</option>
                                            <option value="2">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="cover_check">
                                    <input type="checkbox">
                                    <label for="">Todo</label>
                                    <input type="checkbox">
                                    <label for="">Lunes</label>
                                    <input type="checkbox">
                                    <label for="">Martes</label>
                                    <input type="checkbox">
                                    <label for="">Miércoles</label>
                                    <input type="checkbox">
                                    <label for="">Jueves</label>
                                    <input type="checkbox">
                                    <label for="">Viernes</label>
                                    <input type="checkbox">
                                    <label for="">Sábado</label>
                                    <input type="checkbox">
                                    <label for="">Domingo</label>
                                </div>
                                <button type="submit">Guardar</button>
                            </form>
                        </div>
                    </div>
                </main>




                <?php echo view("templates/footer"); ?>