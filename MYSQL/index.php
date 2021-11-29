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
            <tr COLSPAN=2 BGCOLOR="#6D8FFF">
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Apellido 2</td>
            </tr>

            <?php
            /* Establecer conexion */
            $servername = "localhost";
            $username = "root";
            $dbname = "phpdb";

            try {
                $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, '');

                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $pdo->exec("SET CHARACTER SET utf8");

                $sql = "SELECT NOMBRE, APELLIDO1, APELLIDO2 FROM EMPLEADO";

                $resultado = $pdo->prepare($sql);
                $resultado->execute();

                while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>" .
                    "<td>" . $registro["NOMBRE"] . "</td>" .
                    "<td>" . $registro["APELLIDO1"] . "</td>" .
                    "<td>" . $registro["APELLIDO2"] . "</td>" .
                    "</tr>";
                    //echo "<td>" . $registro['APELLIDO1'] . "<br></td>";
                    //echo "Nombre: " . $registro['NOMBRE'] . " Apellido: " . $registro['APELLIDO1'] . "<br>"; 
                } $resultado->closeCursor();

                print("\n");
            } catch (Exception $e) {
                echo "Connection failed: " . $e->getMessage();
            } finally {
                /* Cerrar conexion */
                $pdo = null;
            }
            ?>
        </table>
        <br>
        <div class="container">
            <?php
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, '');
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $name = $_POST['nombre'];
                $email = $_POST['apellido1'];
            } else {
                $sql = "INSERT INTO EMPLEADO (nombre, apellido1) VALUES (:name, :email, :message)";
                $stmt = $conn->prepare($sql);
                $stmt->execute(['nombre' => $name, 'apellido1' => $email]);
                $name = "";
                $email = "";
            }
            ?>

            <form action="" method="POST" class="main-form">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="gt-input"
                           value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') echo $name ?>">
                    <label for="apellido1">Apellido</label>
                    <input type="text" name="apellido1" id="apellido1" class="gt-input"
                           value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') echo $email ?>">
                </div>
                <br>
                <input type="submit" class="gt-button" value="Añadir">
            </form>
        </div>

    </body>
</html>
