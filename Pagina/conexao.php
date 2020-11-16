<?php
    try
    {
        $mysqli = new mysqli('localhost', 'id14454140_adm', 'Cerveja2020-', 'id14454140_teste');
    } 
    catch(PDOException $erro)
    {
        echo "ERRO de conexão, detalhes : " . $erro -> getMessanege();
    }
?>
