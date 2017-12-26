<!DOCTYPE html>
<!--Comments here -->
<html>
<head>
	<title>Test BBDD</title>
</head>
<body>
	<?php
try {
	$usuario = "root";
	$contrasena = "";
    $mbd = new PDO('mysql:host=localhost;dbname=planos', $usuario, $contrasena);
    foreach($mbd->query('SELECT * from planos') as $fila) {
        print_r($fila);
    }
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
</body>
</html>
