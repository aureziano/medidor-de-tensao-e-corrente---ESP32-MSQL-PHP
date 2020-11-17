<?php
    try
    {
        $mysqli = new mysqli('localhost', '', '', '');
    } 
    catch(PDOException $erro)
    {
        echo "ERRO de conexão, detalhes : " . $erro -> getMessanege();
    }
?>
