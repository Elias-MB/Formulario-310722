<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
    <script src="https://kit.fontawesome.com/5e5d473117.js"></script>
</head>
<body>

    <main>
        <div class="contenedor_todo">
            <form class="form_reg" name="form" autocomplete="on" action="registrar.php" method="post">
                <div class='contenedor_portada'>
                    <img src='assets/imagenes/portada.jpg' alt='#' class='portada'>
                </div>
                <!-- <h3 class='titulo'>LA TRIBU</h3>
                <p>Inscríbete a esta salida de integración este 31 de Julio</p> -->
                <div class='datos'>
                    <input type="text" name="apellido-pat" placeholder="Apellido Paterno" required><p>
                    <input type="text" name="apellido-mat" placeholder="Apellido Materno" required><p>
                    <input type="text" name="nombres" placeholder="Nombres" required><p>
                    <input type="number" name="edad" id="age" placeholder="Edad" required><p>
                    <input type="text" name="celular" id="cellphone" placeholder="Celular" required><p>
                </div>
                
                <!-- <select class="listaRed" required>
                    <option class="option" disabled selected>Seleccione la red a la que pertenece</option>
                    <option class="option">Zona NIC</option>
                    <option class="option">Conectados</option>
                    <option class="option">Pasión Juvenil</option>
                    <option class="option">Hombres de Pacto</option>
                    <option class="option">Entre Amigas</option>
                </select> -->
                
                <div class="select-box">
                    <div type="select" name="red--" class="select" id="select">
                        <div class='espacio'>
                            
                        </div>
                        <div class="contenido-select">
                            <h4 class='titulo-box'>Selecciona tu red</h4>
                        </div>
                        <img src='assets/imagenes/angle-down-solid-azul.svg' alt='#' class='icon'>
                    </div>
                    <div class="options" id="options">
                        <!-- <a href="#" class="option">
                            <div class="contenido-option">
                                <div class="textos">
                                    <h4 class="titulo-box">Zona NIC</h4>
                                </div>                                                                                         
                            </div>
                        </a> -->
                        <a href="#" class="option">
                            <div class="contenido-option">                                                          
                                <div class="textos">
                                    <h4 class="titulo-box">Conectados</h4>
                                </div>                                                                             
                            </div>
                        </a>
                        <a href="#" class="option">
                            <div class="contenido-option">  
                                <div class="textos">
                                    <h4 class="titulo-box">Pasión Juvenil</h4>
                                </div>                                                        
                            </div>
                        </a>
                        <!-- <a href="#" class="option">
                            <div class="contenido-option">                          
                                <div class="textos">
                                    <h4 class="titulo-box">Hombres de Pacto</h4>
                                </div>                                                         
                            </div>
                        </a>
                        <a href="#" class="option">
                            <div class="contenido-option">                           
                                <div class="textos">
                                    <h4 class="titulo-box">Entre Amigas</h4> 
                                </div>                                                           
                            </div>
                        </a> -->
                    </div>
                </div>
                <!-- Para registrar la red en la base de datos -->
                <!-- <input type="hidden" name="red" id="selectionRed" value=""> -->
                
                <div class='contenedor_pago'>
                    <div class='escoger_pago'>
                        <p>Forma de pago</p>
                    </div>
                    <div class='pagos'>
                        <div class='boton boton1' id="boton1">
                            <div class='pago-tex-tit'>
                                <b>YAPE</b>
                            </div>
                            <img src='assets/imagenes/yape.png' alt='Yape: 922468161' class='pago-qr'>
                            <hr/>
                            <div class='pago-tex'>
                                Elias Daniel Marcos Bernardo<br>
                                922468161
                            </div>
                        </div>
                        
                        <div class='boton boton2' id="boton2">
                            <div class='pago-tex-tit'>
                                <b>PLIN</b>
                            </div>
                            <img src='assets/imagenes/yape.png' alt='Plin: 922468161' class='pago-qr'>
                            <hr/>
                            <div class='pago-tex'>
                                Elias Daniel Marcos Bernardo<br>
                                922468161
                            </div>
                        </div>
                        
                        <div class="boton boton3" id="boton3">
                                Efectivo
                        </div> 
                    </div>
                </div>
                <!-- Para registrar el horario en la base de datos-->
                <input type="hidden" name="turno" id="turno-selected" value="">
                
                <div class='boton_reg'>
                    <button class="registrar" type="submit" name="registrar">Registrar</button>
                </div>
                <div class='direccion'>
                    <p>CIENEGUILLA</p>
                </div>
            </form>
        </div>
    </main>
    <script src="assets/js/main.js"></script>
    
    <?php 
    include("registrar.php")
    ?>
    
</body>
</html>