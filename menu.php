<!DOCTYPE html>

<script type="text/javascript">


</script>  

<style>
    #filas {
        width: 60px; 
        height: 60px;
        border-style: solid;
    }
    
    #columnas {
        width: 60px; 
        height: 60px;
        border-style: solid; 
    }
</style>
<?php
/*
 * crear la tabla de 6 filas y 7 columnas
 * dar estilo a la tabla
 * cada jugador tiene 1 turno 
 * jugador 1 color azul --- através de img  
 * jugador 2 color rojo --- através de img
 * 
 * Funciones: 
 * iniciar juego
 * 4 en raya gana - validar 4 fichas 
 * se puede poner en diagonal, vertical y horizontal
 * finalizar juego    
 */



session_start(); //Incia la sesion de la partida
if (!isset($_POST["iniciarPartida"])) {
    
} //POST de los valores del formulario
?>


<html>
    <body>
        <?php

        function tabla() { //la tabla tiene que ser de 7x6 
            echo '<table>';
            echo '<tr>';
            for ($i = 0; $i<6; $i++) {
                echo '<td id="filas"></td>'; 
                
               for ($j = 0; $j<6; $j++) {
                    echo '<td id="columnas"></td>'; 
               } echo '</tr>'; 
            } 

            echo '</table>';  
        }

        tabla();
        ?>
        
        <h2>4 en raya</h2>
        <p>Introduce el nombre de los <strong>dos</strong> jugadores</p>

        <form action="iniciarPartida()"  method="POST">
            <label for="jugador1">Jugador 1:</label><br>
            <input type="text" id="fname" name="jugador1"><br> 
            <label for="jugador2">Jugador 2:</label><br>
            <input type="text" id="lname" name="jugador2"><br><br>
            <input type="submit" value="Iniciar partida" id="iniciarPartida"> <!--POST DE LOS VALORES-->  
        </form>
    </body>
</html>

