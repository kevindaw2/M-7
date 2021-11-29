<?php

try {

    /* TRANSICTION STARTS */
    /* DESPUES DEL SUBMIT POST TIENE QUE ESTAR VACIO */
    /* id auto incrementada */

    $pdo->beginTransaction();
    $sqlInsert = "INSERT INTO EMPLEADOS (NOMBRE, APELLIDO, SEXO, FECHANACIMIENTO, FECHAREGISTRO) VALUES (:nombre, :apellido, :sexo, :fechaNacimiento, :fechaRegistro)";

    $insertStmt = $pdo->prepare($sqlInsert);
    $insertStmt->bindParam(':nombre', $nombre);
    $insertStmt->bindParam(':apellido', $apellido);
    $insertStmt->bindParam(':sexo', $sexo);
    $insertStmt->bindParam(':fechaNacimiento', $fechaNacimiento);
    $insertStmt->bindParam(':fechaRegistro', $fechaRegistro);

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $sexo = $_POST['sexo'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $fechaRegistro = '2021-06-06'; /* PHP DATE FORMAT */

    $insertStmt->execute();
} catch (Exception $ex) {
    echo $ex->getMessage();
} finally {
    $_POST['nombre'] = "";
    $_POST['apellido'] = "";
    $_POST['sexo'] = "";
    $_POST['fechaNacimiento'] = "";
    /* END TRANSICTION */
    $pdo->commit();
    /* CLOSE CONNECTION */
    $pdo = null;
}
?>