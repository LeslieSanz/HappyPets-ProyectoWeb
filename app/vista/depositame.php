<?php
require_once __DIR__ . '/../controlador/depositameControlador.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depositame</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../../css/depositame.css">
</head>
<body>
    
    <div class="contenedor">
        <section class="tarjeta" id="tarjeta">
            <div class="delantera">
                <div class="logo-marca" id="logo-marca">
                    
                </div>

                <img src="../../img/tarjeta/chip-tarjeta.png" class="chip" alt="">
                <div class="datos">
                    <div class="grupo" id="numero">
                        <p class="label">Número Tarjeta</p>
                        <p class="numero">#### #### #### ####</p>
                    </div>
                    <div class="flexbox">
                        <div class="grupo" id="nombre">
                            <p class="label">Nombre Tarjeta</p>
                            <p class="nombre"></p>
                        </div>

                        <div class="grupo" id="expiracion">
                            <p class="label">Expiracion</p>
                            <p class="expiracion"><span class="mes">MM</span> / <span class="year">AA</span></p>
                        </div>
                    </div>
                </div>




            </div>

            <div class="trasera">
                <div class="barra-magnetica"></div>
                <div class="datos">
                    <div class="grupo" id="firma">
                        <p class="label">Firma</p>
                        <div class="firma"><p></p></div>
                    </div>
                    <div class="grupo" id="ccv">
                        <p class="label">CCV</p>
                        <p class="ccv"></p>
                    </div>
                </div>
                <p class="leyenda">
                    Esta tarjeta es propiedad del banco y deberá ser devuelta cuando este lo solicite. Esta tarjeta es instransferible y su uso se rige por las estippulaciones del contrato firmado entre el titular
                    y el banco. En caso de pérdida o robo y el titular deberá llanar a banca por telefono.
                </p>
                <a href="#" class="link-banco">www.MiBancoFavorito.com</a>
            </div>
        </section>

        <div class="contenedor-btn">
            <button class="btn-abrir-formulario" id="btn-abrir-formulario">
                <i class="fas fa-plus"></i>
            </button>
        </div>

        <!--Formulario-->
        <form method="post" action="../controlador/depositameControlador.php" id="formulario-tarjeta" class="formulario-tarjeta"> 
            <div class="grupo">
                <label for="inputNumero">Número tarjeta</label>
                <input name="tarnum" type="text" id="inputNumero" maxlength="19" autocomplete="off">
            </div>
            <div class="grupo">
                <label for="inputNombre">Nombre</label>
                <input name="nombre" type="text" id="inputNombre" maxlength="19" autocomplete="off">
            </div>
            <div class="flexbox">
                <div class="grupo expira">
                    <label for="selectMes">Expiración</label>
                    <div class="flexbox">
                        <div class="grupo-select">
                            <select name="mes" id="selectMes">
                                <option disabled selected>Mes</option>
                            </select>
                            <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="grupo-select">
                            <select name="year" id="selectYear">
                                <option disabled selected>Año</option>
                            </select>
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </div>
                </div>
                <div class="grupo ccv">
                    <label for="inputCCV">CCV</label>
                    <input type="text" id="inputCCV" maxlength="3">
                </div>
            </div>
            <div class="grupo2">
                <label for="inputNumero1">Monto a donar</label>
                <input name="monto" type="text" id="inputNumero1" maxlength="19" autocomplete="off">
            </div>
            
            
            <button name="RegistrarTarjeta" type="submit" class="btn-enviar" form="formulario-tarjeta">Enviar</button>
            <div class="regresar">
                <a href="donaciones.php">regresar</a>
            </div>
        </form>
    </div>

    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="../../js/depositame.js"></script>
</body>
</html>