<!DOCTYPE html>
<html lang="en">
<head>
<title>salario neto en meses</title>
<link rel="stylesheet" href="estilo.css">
</head>
<body>
<header>
        <div class="header_superior">
            <div class="logo">
                <img src="raza superior.png" alt="Logo de la Raza Superior">
            </div>
        </div>
        <div class="contenedor_menu">
            <div class="menu">
                <nav>
                    <ul>
                    <li><a href="index.html" id="selected"></a></li>
                    <li><a href="#">JAVA SCRIPT</a><ul>
                    
                        <li><a href="1num_multiplos.html">1.Verificacion de multiplos</a></li>
                        <li><a href="2num_mayo.html">2.Determinar el mayor de dos numeros</a></li>
                        <li><a href="3num_negativo_o_positivos.html">3.Determinar si el numero es positivo, negativo o ceros</a></li>
                        <li><a href="4calificaciones.html">4.Determinar Calificaciones</a></li>
                        <li><a href="5tiempo.html">5.Calcular el tiempo</a></li>
                        <li><a href="6dolares.html">6.Calcular el promedio de dinero</a></li>
                        <li><a href="7verdadero_o_falso.html">7.Verificar si una palabra tiene mas de 5 caracteres</a></li>
                        <li><a href="8promedio.html">8.Sacar el promedio de un alumno  </a></li>
                        <li><a href="9cadena_de_texto.html">9.Cadena de texto</a></li>
                        <li><a href="10num_aleatorio.html">10.Numero aleatorio</a></li>
                    </ul></li>
                    <li><a href="#">PHP</a><ul><li>
                        <li><a href="1encontrar_dos_numeros.php">1.Encontrar el numero mayor de dos numeros</a></li>
                        <li><a href="2compra_de_computadoras.php">2.Compra de computadoras</a></li>
                        <li><a href="3par_o_impar.php">3.Saber si un numero es par o impar</a></li>
                        <li><a href="4salario_neto_en_meses.php">4.Calcular salario neto</a></li>
                        <li><a href="5calcular_salario.php">5.Calcular salario</a></li>
                        <li><a href="6inicio_final_de_una_estacion.php">6.Inicio y final de una estacion</a></li>
                        <li><a href="7Multiplicar_un_número_por_sí_mismo_n_veces.php">7.Multiplicar numero por si mismo</a></li>     
                        <li><a href="8pies_a_pulgadas.php">8.Convertir pies a pulgadas</a></li>       
                        <li><a href="9Mostrar_y_enlazar_a_sitios_web.php">9.Enlaces a sitios web</a></li>          
                        <li><a href="10centimetros_a_pies.php">10.Centimetros a pies</a></li>
                    </ul></li>
                </nav>
            </div>
        </div>    
    </header>
    <main><article> <h2>Salario Neto de enero, febrero y marzo</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="enero">Días trabajados en enero:</label>
        <input type="number" name="dias_enero" id="enero"><br><br>
        
        <label for="febrero">Días trabajados en febrero:</label>
        <input type="number" name="dias_febrero" id="febrero"><br><br>
        
        <label for="marzo">Días trabajados en marzo:</label>
        <input type="number" name="dias_marzo" id="marzo"><br><br>
        
        <input type="submit" name="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['dias_enero']) && isset($_POST['dias_febrero']) && isset($_POST['dias_marzo'])) {
            $dias_enero = $_POST['dias_enero'];
            $dias_febrero = $_POST['dias_febrero'];
            $dias_marzo = $_POST['dias_marzo'];
            
            $salario_bruto_semanal = 4000;
            $impuesto = 0.15;
            
            $descuento_enero = ($dias_enero < 28) ? ($dias_enero * 30) : 0;
            $salario_neto_enero = ($salario_bruto_semanal * 4) - $descuento_enero;
            $salario_neto_enero = $salario_neto_enero * (1 - $impuesto);
            
            $descuento_febrero = ($dias_febrero < 23) ? ($dias_febrero * 30) : 0;
            $salario_neto_febrero = ($salario_bruto_semanal * 4) - $descuento_febrero;
            $salario_neto_febrero = $salario_neto_febrero * (1 - $impuesto);
            
            $descuento_marzo = 0;
            $salario_neto_marzo = ($salario_bruto_semanal * 4) - $descuento_marzo;
            $salario_neto_marzo = $salario_neto_marzo * (1 - $impuesto);
            
            echo "<h3>Salario Neto:</h3>";
            echo "Enero: $salario_neto_enero<br>";
            echo "Febrero: $salario_neto_febrero<br>";
            echo "Marzo: $salario_neto_marzo";
        } else {
            echo "Por favor, ingresa los días trabajados para cada mes.";
        }
    }
    ?></article></main>
    
</body>
</html>