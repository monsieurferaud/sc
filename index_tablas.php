<!DOCTYPE html>
<!-- Aqui van los comentarios -->
<html>
    <head>
    	<title>SHOT CONTROL</title>
        <link rel="stylesheet" href="styles.css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script  src="https://code.jquery.com/jquery-3.2.1.js"  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="  crossorigin="anonymous"></script>

    </head>
    <body>
    	<?php
        /*

            Apertura de BBDD

         */
            try {
            	$usuario    = "root";
            	$contrasena = "";
                $mbd        = new PDO ('mysql:host=localhost;dbname=planos', $usuario, $contrasena);
                foreach($mbd->query ('SELECT PLANO,CB,CAO,SB,SAO,OccSh,DEPTH,SHADOW,SM,FBX,COMMENTS,STATUS from planos') as $fila) {
                        echo "<div class='container'>
                                <div class='text-center'>
                                    <div class='btn-group-lg' role='group' aria-label='...' >
                                        <button type='button' class='btn btn-default'>Left</button>
                                        <button type='button' class='btn btn-default'>Medium</button>
                                        <button type='button' class='btn btn-default'>Right</button>
                                    </div>
                                    </div>
                                    <br/>
                                    <div class='row'>
                                        <table class='table table-bordered table-dark' style='width:1200px'>
                                            <thead class='thead-dark'>
                                                <td align='center'>PLANO</td>
                                                <td align='center'>CB</td>
                                                <td align='center'>CAO</td>
                                                <td align='center'>SB</td>
                                                <td align='center'>SAO</td>
                                                <td align='center'>OccSh</td>
                                                <td align='center'>DEPTH</td>
                                                <td align='center'>SHADOW</td>
                                                <td align='center'>SM</td>
                                                <td align='center'>FBX</td>
                                                <td align='center'>COMMENTS</td>
                                                <td align='center'>STATUS</td>
                                            </thead>
                                            <tr>
                                                <td align='center'>".$fila['PLANO']."</td>
                                                <td align='center'>".$fila['CB']."</td>
                                                <td align='center'>".$fila['CAO']."</td>
                                                <td align='center'>".$fila['SB']."</td>
                                                <td align='center'>".$fila['SAO']."</td>
                                                <td align='center'>".$fila['OccSh']."</td>
                                                <td align='center'>".$fila['DEPTH']."</td>
                                                <td align='center'>".$fila['SHADOW']."</td>
                                                <td align='center'>".$fila['SM']."</td>
                                                <td align='center'>".$fila['FBX']."</td>
                                                <td align='center'>".$fila['COMMENTS']."</td>
                                                <td align='center'>".$fila['STATUS']."</td>
                                            </tr>
                                        </table>
                                        </div>
                                </div>
                            ";
              
                }
                $mbd = null;
            } catch (PDOException $e) {
                print "¡Error!: " . $e->getMessage() . "<br/>";
                die();
            }
            ?>
    </body>
</html>