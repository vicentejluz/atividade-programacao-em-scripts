<?php
  include 'conexao_banco.php';
  include 'calculo_ipva.php';

  header("Content-type: text/html; charset=utf-8");

  $renavam = $_POST['txt_renavam'];
  $descVeiculo = $_POST['txt_descVeiculo'];
  $montadora= $_POST['montadoras'];
  $anoFabricacao = $_POST['txt_anoFabricacao'];
  $placa = $_POST['txt_placa'];
  $valorVeiculo = $_POST['txt_valorVeiculo'];
  $ipva = calcularIPVA($anoFabricacao, $valorVeiculo);

  $sql = mysql_query("update tb_veiculos set 
  descricao_veiculo=UPPER('$descVeiculo'), montadora='$montadora', ano_fabricacao='$anoFabricacao', placa=UPPER('$placa'), 
  valor_veiculo='$valorVeiculo', ipva='$ipva' where renavam='$renavam'");

  echo "<center>";
  echo "<hr>";
  echo "VEÍCULO ALTERADO COM SUCESSO";
  echo "<hr>";
  echo "<a href=\"listagem.php\">VOLTAR</a>";
?>
