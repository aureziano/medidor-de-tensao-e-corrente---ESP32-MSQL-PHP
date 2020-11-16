<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="">

<meta http-equiv='refresh' content='60' URL=''>  

<meta name="author" content="">

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<title>Projeto Teste</title>

<!-- Bootstrap core CSS-->

<!--<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">-->

<link href="/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

<!-- Navigation-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">

<a class="navbar-brand" href="index.php">PROJETO</a>

<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="navbarResponsive">

<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">

<a class="nav-link" href="index.php">

<i class="fa fa-fw fa-dashboard"></i>

<span class="nav-link-text">Dashboard</span>

</a>

</li>

<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">

<a class="nav-link" href="index.php">

<i class="fa fa-cog"></i>

<span class="nav-link-text">Configurações</span>

</a>

</li>

<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">

<a class="nav-link" href="index.php">

<i class="fa fas fa-user"></i>

<span class="nav-link-text">Registro de Úsuarios</span>

</a>

</li>


<!-- Atualizar Página-->
<a class="nav-link" onClick="window.location.reload()">
<i class="fa fa-refresh"></i>
<span class="nav-link-text">Atualizar</span>

</a>

</li>
</ul>
<ul class="navbar-nav sidenav-toggler">

<li class="nav-item">

<a class="nav-link text-center" id="sidenavToggler">

<i class="fa fa-fw fa-angle-left"></i>

</a>

</li>

</ul>

<ul class="navbar-nav ml-auto">

<li class="nav-item dropdown">

<a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

<i class="fa fa-fw fa-envelope"></i>

<span class="d-lg-none">Mensagens

<span class="badge badge-pill badge-primary">12 Novas</span>

</span>

<span class="indicator text-primary d-none d-lg-block">

<i class="fa fa-fw fa-circle"></i>

</span>

</a>

<div class="dropdown-menu" aria-labelledby="messagesDropdown">

<h6 class="dropdown-header">Novas Mensagens:</h6>

<!--<div class="dropdown-divider"></div>

<a class="dropdown-item" href="#">

<strong>Dafne Piovesan</strong>

<span class="small float-right text-muted">11:21 AM</span>

<div class="dropdown-message small">Oi! Apenas teste</div>

</a>

<div class="dropdown-divider"></div>-->

<a class="dropdown-item" href="#">

<strong>Aurezinando Faria</strong>

<span class="small float-right text-muted">11:21 AM</span>

<div class="dropdown-message small">Vamos testar</div>

</a>

<div class="dropdown-divider"></div>

<a class="dropdown-item" href="#">

<strong>Cleidiano Custodio</strong>

<span class="small float-right text-muted">11:21 AM</span>

<div class="dropdown-message small">XXX</div>

</a>

<div class="dropdown-divider"></div>

<a class="dropdown-item small" href="#">Veja todas as mensagens</a>

</div>

</li>

<li class="nav-item dropdown">

<a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

<i class="fa fa-fw fa-bell"></i>

<span class="d-lg-none">Alertas

<span class="badge badge-pill badge-warning">6 Novas</span>

</span>

<span class="indicator text-warning d-none d-lg-block">

<i class="fa fa-fw fa-circle"></i>

</span>

</a>

<div class="dropdown-menu" aria-labelledby="alertsDropdown">

<h6 class="dropdown-header">Novos Alertas:</h6>

<div class="dropdown-divider"></div>

<a class="dropdown-item" href="#">

<span class="text-success">

<strong>

<i class="fa fa-long-arrow-up fa-fw"></i>Atualização de Status</strong>

</span>

<span class="small float-right text-muted">11:21 AM</span>

<div class="dropdown-message small">Mensagem Automática! Serviços funcionando.</div>

</a>

<div class="dropdown-divider"></div>

<a class="dropdown-item" href="#">

<span class="text-danger">

<strong>

<i class="fa fa-long-arrow-down fa-fw"></i>Atualização de Status</strong>

</span>

<span class="small float-right text-muted">11:21 AM</span>

<div class="dropdown-message small">Mensagem Automática! Serviços funcionando.</div>

</a>

<div class="dropdown-divider"></div>

<a class="dropdown-item" href="#">

<span class="text-success">

<strong>

<i class="fa fa-long-arrow-up fa-fw"></i>Atualização de Status</strong>

</span>

<span class="small float-right text-muted">11:21 AM</span>

<div class="dropdown-message small">Mensagem Automática! Serviços funcionando.</div>

</a>

<div class="dropdown-divider"></div>

<a class="dropdown-item small" href="#">Veja Todos os Alertas</a>

</div>

</li>

<li class="nav-item">

<form class="form-inline my-2 my-lg-0 mr-lg-2">

<div class="input-group">

<input class="form-control" type="text" placeholder="Pesquisar por...">

<span class="input-group-append">

<button class="btn btn-primary" type="button">

<i class="fa fa-search"></i>

</button>

</span>

</div>

</form>

</li>

<li class="nav-item">

<a class="nav-link" data-toggle="modal" data-target="#exampleModal">

<i class="fa fa-fw fa-sign-out"></i>Sair</a>

</li>

</ul>

</div>

</nav>

<div class="content-wrapper">

<div class="container-fluid">

<!-- Breadcrumbs-->

<ol class="breadcrumb">

<li class="breadcrumb-item">

<a href="#">Painel</a>

</li>

<li class="breadcrumb-item active">Meu Painel</li>

</ol>
<!-- Icon Cards-->



<a class="card-footer text-white clearfix small z-1" href="#">



<i class="fa fa-angle-right"></i>


</a>

</div>

</div>

</div>



<?php
//Inclui a conexão com o BD
include ('conexao.php');
//Faz o SELECT da tabela, usando Prepared Statements.
$sql = "SELECT DATE_FORMAT(ADDDATE(data, INTERVAL -3 HOUR), '%H:%i %d/%m'), id_medidor, tensao_1, tensao_2,tensao_3,corrente_1,corrente_2,corrente_3 FROM amostras ORDER BY id ASC ;";
$stmt = $mysqli->prepare($sql);
$stmt->execute();
$stmt->bind_result($data,$medidor,$v1,$v2,$v3,$i1,$i2,$i3);
$result = $stmt->store_result();
$count = 1;
//Cria o array primário
$dados = array();
//Laço dos dados
 while ($ln = $stmt->fetch()){
    if($count == 1)
        $atual_count = (String) $data;
    $vi_hora = array();
    $vi_hora[] = ((String) $data);
    $vi_hora[] = ((float) $v1);
    $vi_hora[] = ((float) $v2);
    $vi_hora[] = ((float) $v3);
    $vi_hora[] = ((float) $i1);
    $vi_hora[] = ((float) $i2);
    $vi_hora[] = ((float) $i3);

//Recebe no array principal, os dados.
    $dados[] = ($vi_hora);
}
//Trasforma os dados em JSON
  $jsonTable = json_encode($dados);

  
?>
<div class="card mb-3">

<div class="card-header">

<i class="fa fa-area-chart"></i>ESP32 + MYSQL + PHP + GOOGLE CHART</div>
<div class="container" style="text-align: center;">
<div class="well">
    
</div>
</div>
<div class="card-body">
<!--<div class="container" style="height: 100px;
    width: 100%;align-items: center;
    align-items: center;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;" 
    id="chart_div2">
    
</div>
<canvas id="myAreaChart" width="100%" height="100">

</canvas>-->
<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
		<div class="offer offer-danger">
			<div class="shape">
				<div class="shape-text">
					<span class="glyphicon glyphicon glyphicon-eye-open"></span>							
				</div>
			</div>
			<div class="offer-content">
				<h3 class="lead">
				Tensão 1 : <label class="label label-danger"> </label>
				</h3>
				
				<p>
				    <?php echo (float)  round($v1,2) ?> V
    				<br> 
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (float) ($v1/127)*100 ?>%" >
                        <?php echo (float)  round(($v1/127)*100,2) ?>%
                        </div>
                    </div>
			    </p>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
		<div class="offer offer-success">
			<div class="shape">
				<div class="shape-text">
					<span class="glyphicon glyphicon glyphicon-th"></span>							
				</div>
			</div>
			<div class="offer-content">
				<h3 class="lead">
					 Corrente 1 : <label class="label label-success"></label>
				</h3>
				<p>
				     <?php echo (float)  round($i1,2) ?> A
					<br> 
                    <div class="progress">
         <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (float) ($i1/100)*100 ?>%" >
                 <?php echo (float)  round((($i1/100)*100),0) ?>%
                    </div>
               </div>
				</p>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
		<div class="offer offer-radius offer-primary">
			<div class="shape">
				<div class="shape-text">
					<span class="glyphicon  glyphicon-user"></span>							
				</div>
			</div>
			<div class="offer-content">
				<h3 class="lead">
					 Tensão 2 : <label class="label label-primary"></label>
				</h3>
				<p>
					<?php echo (float)  round($v2,2) ?> V
					<br> 
                    <div class="progress">
         <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (float) ($v2/127)*100 ?>%" >
                 <?php echo (float)  round(($v2/127)*100,2) ?>%
                    </div>
               </div>
				</p>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
		<div class="offer offer-info">
			<div class="shape">
				<div class="shape-text">
					<span class="glyphicon  glyphicon-home"></span>							
				</div>
			</div>
			<div class="offer-content">
				<h3 class="lead">
					Corrente 2: <label class="label label-info"></label>
				</h3>
				<p>
					 <?php echo (float)  round($i2,2) ?> A
					<br> 
                    <div class="progress">
         <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (float) ($i2/100)*100 ?>%" >
                 <?php echo (float) round(($i2/100)*100,2) ?>%
                    </div>
               </div>
				</p>
			</div>
		</div>
	</div>
</div>
<?php
//Inclui a conexão com o BD
include ('conexao.php');
//Faz o SELECT da tabela, usando Prepared Statements.
$sql = "SELECT DATE_FORMAT(ADDDATE(data, INTERVAL -3 HOUR), '%H:%i %d/%m'), id_medidor, tensao_1, tensao_2,tensao_3,corrente_1,corrente_2,corrente_3 FROM amostras ORDER BY id DESC ;";
$stmt = $mysqli->prepare($sql);
$stmt->execute();
$stmt->bind_result($data,$medidor,$v1,$v2,$v3,$i1,$i2,$i3);
$result = $stmt->store_result();
$count = 1;
//Cria o array primário
$vdados = array();
$idados = array();

//Laço dos dados
 while ($ln = $stmt->fetch()){
     $data_atual = ((String) $data);
     $v1_atual = ((float) $v1);
     $v2_atual = ((float) $v2);
     $v3_atual = ((float) $v3);
     $i1_atual = ((float) $i1);
     $i2_atual = ((float) $i2);
     $i3_atual = ((float) $i3);
//Cria o array secundário, onde estarão os dados.
    $v_hora = array();
    $i_hora = array();
    //Dados de todas as tensões
    $v_hora[] = ((String) $data);
    $v_hora[] = ((float) $v1);
    $v_hora[] = ((float) $v2);
    $v_hora[] = ((float) $v3);
    //Dados de todas as tensões
    $i_hora[] = ((String) $data);
    $i_hora[] = ((float) $i1);
    $i_hora[] = ((float) $i2);
    $i_hora[] = ((float) $i3);
    

//Recebe no array principal, os dados.
    $vdados[] = ($v_hora);
    $idados[] = ($i_hora);
}
//Trasforma os dados em JSON
  $vjsonTable = json_encode($vdados);
  $ijsonTable = json_encode($idados);
  
?>
</div>
<!-- Div do Gráfico -->
<div  style="width: 100%;"> 
    <div  style="height: 400px; 
        width: 50%;align-items: center;
        
        float:left;
        " 
        id="chart_div_5">
        
    </div>
    
    <div  style="height: 400px; 
        width: 50%;align-items: center;
       
        float:left;
        " 
        id="chart_div_6">
        
    </div>
</div>
<?php
//Inclui a conexão com o BD
include ('conexao.php');
//Faz o SELECT da tabela, usando Prepared Statements.
$sql = "SELECT DATE_FORMAT(ADDDATE(data, INTERVAL -3 HOUR), '%H:%i %d/%m'), tensao_1 , corrente_1, tensao_2, corrente_2 FROM amostras ORDER BY id DESC ;";
$stmt = $mysqli->prepare($sql);
$stmt->execute();
$stmt->bind_result($data,$v1,$i1,$v2,$i2);
$result = $stmt->store_result();
$count = 1;
//Cria o array primário
$vdados = array();
$idados = array();
$v2dados = array();
$i2dados = array();

//Laço dos dados
 while ($ln = $stmt->fetch()){
//Cria o array secundário, onde estarão os dados.
    $v_hora = array();
    $i_hora = array();
    $v2_hora = array();
    $i2_hora = array();
    //Dados tensao 1
    $v_hora[] = ((String) $data);
    $v_hora[] = ((float) $v1);
    //Dados corrente 1
    $i_hora[] = ((String) $data);
    $i_hora[] = ((float) $i1);
    //Dados tensao 2
    $v2_hora[] = ((String) $data);
    $v2_hora[] = ((float) $v2);
    //Dados corrente 2
    $i2_hora[] = ((String) $data);
    $i2_hora[] = ((float) $i2);

//Recebe no array principal, os dados.
    $vdados[] = ($v_hora);
    $idados[] = ($i_hora);
    $v2dados[] = ($v2_hora);
    $i2dados[] = ($i2_hora);
}
//Trasforma os dados em JSON
  $v1_jsonTable = json_encode($vdados);
  $i1_jsonTable = json_encode($idados);
  $v2_jsonTable = json_encode($v2dados);
  $i2_jsonTable = json_encode($i2dados);
?>
<div  style="width: 100%;"> 
    <div  style="height: 400px; 
        width: 50%;align-items: center;
        
        float:left;
        " 
        id="chart_div_1">
        
    </div>
    
    <div  style="height: 400px; 
        width: 50%;align-items: center;
       
        float:left;
        " 
        id="chart_div_2">
        
    </div>
</div>
<div  style="width: 100%;"> 
    <div  style="height: 400px; 
        width: 50%;align-items: center;
        
        float:left;
        " 
        id="chart_div_3">
        
    </div>
    
    <div  style="height: 400px; 
        width: 50%;align-items: center;
       
        float:left;
        " 
        id="chart_div_4">
        
    </div>
</div>
<div class="card-footer small text-muted">Última atualização <?php echo (String) $atual_count ?></div>

</div>
<div>


<!-- Area Chart Example-->



<!-- Example DataTables Card-->

<div class="card mb-3">

<div class="card-header">

<i class="fa fa-table"></i> Tabela </div>

<div class="card-body">

<div class="table-responsive">

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr>
<th>Amostra</th>
<th>Medidor</th>
<th>Data</th>
<th>Tensão 1</th>
<th>Tensão 2</th>
<th>Corrente 1</th>
<th>Corrente 2</th>
</tr>
</thead>


<tfoot>

<tr>

<th>Amostra</th>
<th>Medidor</th>
<th>Data</th>
<th>Tensão 1</th>
<th>Tensão 2</th>
<th>Corrente 1</th>
<th>Corrente 2</th>


</tr>

</tfoot>

<?php

$count=1;
//Inclui a conexão com o BD
include ('conexao.php');
//Faz o SELECT da tabela, usando Prepared Statements.
$sql = "SELECT id,DATE_FORMAT(ADDDATE(data, INTERVAL -3 HOUR), '%H:%i %d/%m'), id_medidor, tensao_1, tensao_2,tensao_3,corrente_1,corrente_2,corrente_3 FROM amostras ORDER BY id DESC LIMIT 15 ;";
$stmt = $mysqli->prepare($sql);
$stmt->execute();
$result = $stmt->bind_result($id,$data,$medidor,$v1,$v2,$v3,$i1,$i2,$i3);

$stmt->store_result();

//Cria o array primário
$dados = array();
//Laço dos dados
if($result)
{
 while ($ln = $stmt->fetch()){
    if($count == 1)
        $atual = (String) $data;
?>

<tbody>

<tr>

<th>

<?php echo (int) $id ?>

</th>

<td>

<?php echo (int) $medidor ?>

</td>

<td>

<?php echo (String) $data ?>

</td>

<td>

<?php echo (String) $v1 ?>

</td>

<td>

<?php echo (float) $v2 ?>

</td>

<td>

<?php echo (float) $i1 ?>

</td>

<td>

<?php echo (float) $i2 ?>

</td>


</tr>

</tbody>

<?php

$count++;

}

} else {

echo 'Sem Resultados';

}

?>

</table>

</div>

</div>

<div class="card-footer small text-muted">Última atualização <?php echo $atual ?></div>

</div>

</div>

<!-- /.container-fluid-->

<!-- /.content-wrapper-->

<footer class="sticky-footer">

<div class="container">

<div class="text-center">

<small>Copyright © Aureziano 2020</small>

</div>

</div>

</footer>

<!-- Scroll to Top Button-->

<a class="scroll-to-top rounded" href="#page-top">

<i class="fa fa-angle-up"></i>

</a>

<!-- Logout Modal-->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

<div class="modal-dialog" role="document">

<div class="modal-content">

<div class="modal-header">

<h5 class="modal-title" id="exampleModalLabel">Deseja Sair?</h5>

<button class="close" type="button" data-dismiss="modal" aria-label="Close">

<span aria-hidden="true">×</span>

</button>

</div>

<div class="modal-body">Selecione "Logout" para encerrar sua seção!</div>

<div class="modal-footer">

<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>

<a class="btn btn-primary" href="form_login.php">Logout</a>

</div>

</div>

</div>

</div>

<!-- Bootstrap core JavaScript-->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<!--<script src="vendor/jquery/jquery.min.js"></script>

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->

<!--<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->

<!--<script src="vendor/chart.js/Chart.min.js"></script>

<!--<script src="vendor/datatables/jquery.dataTables.js"></script>

<!--<script src="vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->

<!--<script src="js/sb-admin.min.js"></script>

<!-- Custom scripts for this page-->

<!--<script src="js/sb-admin-datatables.min.js"></script>

<!--<script src="js/sb-admin-charts.min.js"></script>-->

</div>

</body>
<script>
//Script do Google que define o TIPO do gráfico
//Grafico 1
//google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(grafico_1);
//Define o tipo de coluna e o nome
function grafico_1() {
  var data_1 = new google.visualization.DataTable();
  data_1.addColumn('string', 'Horario');
  data_1.addColumn('number', 'Tensão 1 (V)');

  //Captura os dados em JSON e monta o gráfico, de acordo com os dados.
  data_1.addRows( <?php echo $v1_jsonTable ?>);
//Opções do gráfico:  
  var options_1 = {
    title : 'Tensão 1',
        vAxis: {title: 'Tensão'},
        hAxis: {title: 'Hora',fontSize: 6,direction: -1},
        seriesType: 'bars',
        series: { 1: {type: 'line'}},
        backgroundColor: '#ffffff',
    
  };
//Criação do Gráfico 
  var chart_1 = new google.visualization.ComboChart(document.getElementById('chart_div_1'));
  chart_1.draw(data_1, options_1);
}
//Grafico 2
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(grafico_2);
//Define o tipo de coluna e o nome
function grafico_2() {
  var data_2 = new google.visualization.DataTable();
  data_2.addColumn('string', 'Horario');
  data_2.addColumn('number', 'Corrente 1 (A)');

  //Captura os dados em JSON e monta o gráfico, de acordo com os dados.
  data_2.addRows( <?php echo $i1_jsonTable ?>);
//Opções do gráfico:  
  var options_2 = {
    title : 'Corrente 1',
        vAxis: {title: 'Corrente'},
        hAxis: {title: 'Hora',fontSize: 6,direction: -1},
        seriesType: 'bars',
        series: {0: {color:'red'/*,type: 'line'*/}},
        backgroundColor: '#ffffff',
    
  };
//Criação do Gráfico 
  var chart_2 = new google.visualization.ComboChart(document.getElementById('chart_div_2'));
  chart_2.draw(data_2, options_2);
}
//Grafico 3
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(grafico_3);
//Define o tipo de coluna e o nome
function grafico_3() {
  var data_3 = new google.visualization.DataTable();
  data_3.addColumn('string', 'Horario');
  data_3.addColumn('number', 'Tensão 2 (V)');

  //Captura os dados em JSON e monta o gráfico, de acordo com os dados.
  data_3.addRows( <?php echo $v2_jsonTable ?>);
//Opções do gráfico:
    var options_3 = {
        title : 'Tensão 2',
        vAxis: {title: 'Tensão'},
        hAxis: {title: 'Hora',fontSize: 6,direction: -1},
        seriesType: 'bars',
        series: {1: {type: 'line'}},
        backgroundColor: '#ffffff',
    
  };
//Criação do Gráfico 
  var chart_3 = new google.visualization.ComboChart(document.getElementById('chart_div_3'));
  chart_3.draw(data_3, options_3);
}
//Grafico 4
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(grafico_4);
//Define o tipo de coluna e o nome
function grafico_4() {
  var data_4 = new google.visualization.DataTable();
  data_4.addColumn('string', 'Horario');
  data_4.addColumn('number', 'Corrente 2 (A)');

  //Captura os dados em JSON e monta o gráfico, de acordo com os dados.
  data_4.addRows( <?php echo $i2_jsonTable ?>);
//Opções do gráfico:  
  var options_4 = {
    title : 'Corrente 2',
        vAxis: {title: 'Corrente'},
        hAxis: {title: 'Hora',fontSize: 6,direction: -1},
        seriesType: 'bars',
        series: {0: {color:'red'/*,type: 'line'*/}},
        backgroundColor: '#ffffff',
    
  };
//Criação do Gráfico 
  var chart_4 = new google.visualization.ComboChart(document.getElementById('chart_div_4'));
  chart_4.draw(data_4, options_4);
}
//Grafico Geral das Tensões
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(grafico_5);
//Define o tipo de coluna e o nome
function grafico_5() {
  var data_5 = new google.visualization.DataTable();
  data_5.addColumn('string', 'Horario');
  data_5.addColumn('number', 'Tensão 1 (V)');
  data_5.addColumn('number', 'Tensão 2 (V)');
  data_5.addColumn('number', 'Tensão 3 (V)');

  //Captura os dados em JSON e monta o gráfico, de acordo com os dados.
  data_5.addRows( <?php echo $vjsonTable ?>);
//Opções do gráfico:  
  var options_5 = {
    title : 'Gráfico das Tensões',
        vAxis: {title: 'Tensão'},
        hAxis: {title: 'Hora',fontSize: 6,direction: -1},
        seriesType: 'bars',
        series: {0: {color: 'blue'}, 1: {type: "line"}},
        backgroundColor: '#ffffff',
    
  };
//Criação do Gráfico 
  var chart_5 = new google.visualization.ComboChart(document.getElementById('chart_div_5'));
  chart_5.draw(data_5, options_5);
}
//Grafico Geral das Correntes
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(grafico_6);
//Define o tipo de coluna e o nome
function grafico_6() {
  var data_6 = new google.visualization.DataTable();
  data_6.addColumn('string', 'Horario');
  data_6.addColumn('number', 'Corrente 1 (A)');
  data_6.addColumn('number', 'Corrente 2 (A)');
  data_6.addColumn('number', 'Corrente 3 (A)');

  //Captura os dados em JSON e monta o gráfico, de acordo com os dados.
  data_6.addRows( <?php echo $ijsonTable ?>);
//Opções do gráfico:  
  var options_6 = {
    title : 'Gráfico das Correntes',
        vAxis: {title: 'Corrente'},
        hAxis: {title: 'Hora',fontSize: 6,direction: -1},
        seriesType: 'bars',
        series: {2: {type: 'line'}},
        backgroundColor: '#ffffff',
    
  };
//Criação do Gráfico 
  var chart_6 = new google.visualization.ComboChart(document.getElementById('chart_div_6'));
  chart_6.draw(data_6, options_6);
}

</script>
<style>
    .shape{    
    border-style: solid; border-width: 0 70px 40px 0; float:right; height: 0px; width: 0px;
	-ms-transform:rotate(360deg); /* IE 9 */
	-o-transform: rotate(360deg);  /* Opera 10.5 */
	-webkit-transform:rotate(360deg); /* Safari and Chrome */
	transform:rotate(360deg);
}
.offer{
	background:#fff; border:1px solid #ddd; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); margin: 15px 0; overflow:hidden;
}
.offer:hover {
    -webkit-transform: scale(1.1); 
    -moz-transform: scale(1.1); 
    -ms-transform: scale(1.1); 
    -o-transform: scale(1.1); 
    transform:rotate scale(1.1); 
    -webkit-transition: all 0.4s ease-in-out; 
-moz-transition: all 0.4s ease-in-out; 
-o-transition: all 0.4s ease-in-out;
transition: all 0.4s ease-in-out;
    }
.shape {
	border-color: rgba(255,255,255,0) #d9534f rgba(255,255,255,0) rgba(255,255,255,0);
}
.offer-radius{
	border-radius:7px;
}
.offer-danger {	border-color: #d9534f; }
.offer-danger .shape{
	border-color: transparent #d9534f transparent transparent;
}
.offer-success {	border-color: #5cb85c; }
.offer-success .shape{
	border-color: transparent #5cb85c transparent transparent;
}
.offer-default {	border-color: #999999; }
.offer-default .shape{
	border-color: transparent #999999 transparent transparent;
}
.offer-primary {	border-color: #428bca; }
.offer-primary .shape{
	border-color: transparent #428bca transparent transparent;
}
.offer-info {	border-color: #5bc0de; }
.offer-info .shape{
	border-color: transparent #5bc0de transparent transparent;
}
.offer-warning {	border-color: #f0ad4e; }
.offer-warning .shape{
	border-color: transparent #f0ad4e transparent transparent;
}

.shape-text{
	color:#fff; font-size:12px; font-weight:bold; position:relative; right:-40px; top:2px; white-space: nowrap;
	-ms-transform:rotate(30deg); /* IE 9 */
	-o-transform: rotate(360deg);  /* Opera 10.5 */
	-webkit-transform:rotate(30deg); /* Safari and Chrome */
	transform:rotate(30deg);
}	
.offer-content{
	padding:0 20px 10px;
}
@media (min-width: 487px) {
  .container {
    max-width: 750px;
  }
  .col-sm-6 {
    width: 50%;
  }
}
@media (min-width: 900px) {
  .container {
    max-width: 970px;
  }
  .col-md-4 {
    width: 33.33333333333333%;
  }
}

@media (min-width: 1200px) {
  .container {
    max-width: 1170px;
  }
  .col-lg-3 {
    width: 25%;
  }
  }
</style>

</html>
