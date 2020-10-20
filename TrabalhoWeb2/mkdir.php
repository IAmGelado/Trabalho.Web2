<?php
    $dircod = $_POST['cod_dir'];
    $diraux = "folder/$dircod";

    if(is_dir($diraux)){
        echo "A pasta \"$dircod\" ja existe.";
        echo '<br/>';
        echo '<a href="javascript:history.back()">Voltar<a/>';
    }else {
        mkdir($diraux,0777);
        echo '<br/>';
        echo '<a href="javascript:history.back()">Voltar<a/>';
    }

?>

