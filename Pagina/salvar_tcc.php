<?php
    //Incluimos o código de conexão ao BD
    include ('conexao.php');
    //Variável responsável por guardar o valor enviado pelo ESP32
    $id_medidor = $_GET['id_medidor'];
    $tensao_1= $_GET['tensao_1'];
    $tensao_2= $_GET['tensao_2'];
    $tensao_3= $_GET['tensao_3'];
    $corrente_1= $_GET['corrente_1'];
    $corrente_2= $_GET['corrente_2'];
    $corrente_3= $_GET['corrente_3'];
    //Captura a Data e Hora do SERVIDOR (onde está hospedada sua página):
    //Insere no Banco de Dados, usando Prepared Statements.
    $sql = "INSERT INTO amostras (id_medidor, tensao_1,tensao_2,tensao_3,corrente_1,corrente_2,corrente_3)  VALUES (?,?,?,?,?,?,?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("idddddd", $id_medidor, $tensao_1,$tensao_2,$tensao_3,$corrente_1,$corrente_2,$corrente_3);
    /*$stmt->bind_param(':id_equipamento', $id_equipamento);
    $stmt->bind_param(':temp', $temperatura);*/

    if($stmt->execute())
    {
        echo "Dados gravados com sucesso!";
    }
    else
    {
        echo "Erro ao salvar";
    }
    
?>
