<!DOCTYPE html>
<html>
    <head>
        <title>BBDD</title>
        <link rel="stylesheet" href="\adbd\css\styles.css"/>
    </head>
    <body>
        <h2>Altas, Bajas y Consultas</h2>
        <?php
        /* establecer la connexio */

        $servername = "localhost";
        $username = "root";
        $password = "";
        $databasename = "phpadbd";

        try {
            /*
              $conn = new PDO
             */
            $conn = new PDO("mysql:host=$servername;dbname=phpadbd", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connexio establerta<br></br>";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        /* mostra les dades de la BBDD */


        echo "<table class='tb'>";
        
        echo "<tr>";
            echo "<th>Id</th>";
            echo "<th>Nombre</th>";
        echo "</tr>";

        $rowCount = 0;
        $sql = "SELECT * FROM empleados";
        
        foreach ($conn->query($sql) as $row) {
            $id = $row['id'];
            $nombre = $row['Nombre']; 
            $apellidos = $row['Apellido']; 
            $rowCount++;
            echo "<td>"; 
                echo $id ;
            echo "</td>";
            echo "<td>"; 
                echo $nombre ;
            echo "</td>";
        } 
 
        echo "</table>";
        /* tancar la connexio */
        $conn = null;
        ?> 
    </body> 
</html>