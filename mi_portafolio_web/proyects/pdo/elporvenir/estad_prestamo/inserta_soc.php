<?php
   require_once("../clases/class_estad_prest.php");
   
    $clientes= new estado_prestamo();
    $vñ=$_POST["valores"];
    $v1=$_POST["tipo"];
    $v2=$_POST["descrip"];
    if ($vñ==1)
    {
        
        $conteni=$clientes->update1($v1,$v2);
    }
    else
    {
       
       $contenido=$clientes->inserta($v1,$v2);
    }
        


?>
