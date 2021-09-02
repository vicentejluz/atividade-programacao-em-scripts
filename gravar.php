<?php

	// Chamando a conexão com banco de dados
	include 'conexao_banco.php';
	include 'calculo_ipva.php';
  
  header("Content-type: text/html; charset=utf-8");

	$renavam = $_POST ["txt_renavam"];
	$modelo = $_POST ["txt_descVeiculo"];
  $montadora = $_POST ["montadoras"];
  $ano = $_POST ["txt_anoFabricacao"];
	$placa = $_POST ["txt_placa"];
  $valor = $_POST ["txt_valorVeiculo"];
  $ipva = calcularIPVA($ano, $valor);

	$sql = mysql_query("select * from tb_veiculos where renavam='$renavam' or
	placa='$placa'");
	
	if (mysql_num_rows($sql) > 0) {
		echo "<center>";
		echo "<hr>";
		echo "VEÍCULO JÁ CADASTRADO!!!";
		echo "<hr>";
		echo "<br>";
		echo "<a href=\"cadastro_veiculos.html\">VOLTAR</a>";
	}
	else {
    $sql=mysql_query("insert into tb_veiculos (renavam, descricao_veiculo,
    montadora, ano_fabricacao, placa, valor_veiculo, ipva) values
		('$renavam', UPPER('$modelo'), '$montadora', '$ano', UPPER('$placa'), 
		'$valor', '$ipva')");
		echo "<center>";
		echo "<hr>";
		echo "VEÍCULO CADASTRADO COM SUCESSO!!!";
		echo "<hr>";
		echo "<br>";
		echo "<a href=\"cadastro_veiculos.html\">VOLTAR</a>";
	}
?>
