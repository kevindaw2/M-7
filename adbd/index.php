<!DOCTYPE html>
<html>
    <head>
        <title>PHP BBDD</title>
        <style>
            table, th, td {
                border:1px solid black;
            }
        </style>
    </head>

    <body>
        <h2>ALTAS BAJAS Y CONSULTAS</h2>
        <table>
            <tr BGCOLOR="#6D8FFF">
                <td>id</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Sexo</td>
                <td>Fecha Nacimiento</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>

            <?php
            
            if (isset($_GET['editar'])) {
                editar($_GET['editar']);
            }
            /* Establecer conexion */
            $servername = "localhost";
            $username = "root";
            $dbname = "phpadbd";

            try {
                $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, '');

                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $pdo->exec("SET CHARACTER SET utf8");

                $sql = "SELECT ID, NOMBRE, APELLIDO, SEXO, FECHANACIMIENTO FROM EMPLEADOS";

                $resultado = $pdo->prepare($sql);
                $resultado->execute();

                while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr id=" . $registro["ID"] . ">" . //id para el row
                    "<td>" . $registro["ID"] . "</td>" . //a partir del ID edita/elimina el ROW entero
                    "<td>" . $registro["NOMBRE"] . "</td>" .
                    "<td>" . $registro["APELLIDO"] . "</td>" .
                    "<td>" . $registro["SEXO"] . "</td>" .
                    "<td>" . $registro["FECHANACIMIENTO"] . "</td>" .
                    "<td><a href='?editar=" . $registro["ID"] . ">Editar</a></td>" . //function editar this.row
                    "<td><a href='#'>Eliminar</a></td>" . //function eliminar this.row
                    "</tr>";
                } $resultado->closeCursor();

                print("\n");
            } catch (Exception $e) {
                echo "Connection failed: " . $e->getMessage();
            }

            function Editar($id) {
                
                /*INSERT Y UPDATE de los datos nuevos*/

                try {
                    $sqlInsert = "INSERT INTO EMPLEADOS VALUES (?, ?, ?, ?, ?) WHERE ID=".$id";";
                    $paramsInsert = array('Kevin', 'Guva', 1, 'fecha'); /* vars dentro del array */
                } catch (Exception $ex) {
                    
                }
            }
            
            ?>

        </table>
        <br>

        <div class="container">

            <form action="" method="post">
                <p>Datos del nuevo empleado</p>
                <p>Nombre: <input type="text" name="nombre" /></p>
                <p>Apellido: <input type="text" name="apellido" /></p>
                <p>Sexo: <input type="text" name="sexo" /></p>
                <p>Fecha Nacimiento: <input type="text" name="fechaNacimiento" /></p>
                <p><input type="submit" /></p>
            </form>
        </div>

    </body>
</html>
