<!DOCTYPE html>
<!-- Aqui van los comentarios -->
<html>
<head>
	<title>Mostrar BBDD</title>
</head>
<body>
	<?php
    /*

        Apertura de BBDD

     */
try {
	$usuario    = "root";
	$contrasena = "";
    $mbd        = new PDO('mysql:host=localhost;dbname=planos', $usuario, $contrasena);
    foreach($mbd->query('SELECT PLANO,CB,CAO,SB,SAO,OccSh,DEPTH,SHADOW,SM,FBX,COMMENTS,STATUS from planos') as $fila) {
        print 'PLANO '       .$fila['PLANO']  .' ';
        print 'CB '          .$fila['CB']     .' ';
        print 'CAO '         .$fila['CAO']    .' ';
        print 'SB '          .$fila['SB']     .' ';
        print 'SAO '         .$fila['SAO']    .' ';
        print 'OccSh '       .$fila['OccSh']  .' ';
        print 'DEPTH '       .$fila['DEPTH']  .' ';
        print 'SHADOW '      .$fila['SHADOW'] .' ';
        print 'SM '          .$fila['SM']     .' ';
        print 'FBX '         .$fila['FBX']    .' ';
        print 'COMMENTS '    .$fila['COMMENTS'].' ';
        print 'STATUS '      .$fila['STATUS'];
    }
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
</body>
</html>