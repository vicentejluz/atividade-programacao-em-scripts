<?php
  include 'conexao_banco.php';

  header("Content-type: text/html; charset=utf-8");

  if(isset($_POST['busca_descVeiculo']) != ""){
    $sql = mysql_query("select * from tb_veiculos where descricao_veiculo like 
    '{$_POST['busca_descVeiculo']}%' order by descricao_veiculo asc");
  }else{
    $sql = mysql_query("select * from tb_veiculos order by 
    descricao_veiculo asc");
  }

  if(isset($_GET['apagar'])){
    $sql = mysql_query("delete from tb_veiculos where renavam=" .$_GET['apagar']);
    echo "<br>";
    echo "<center>";
    echo "<hr>";
    echo "VEÍCULO EXCLUIDO COM SUCESSO!!!";
    echo "<br>";
    echo "<a href=\"listagem.php\">VOLTAR</a>";
    echo "<hr>";
    return false;
  }

?>

<html>
  <head>
    <meta charset="UTF-8">
    <title>localhost</title>
  </head>
  <body>
    <form name="frm_lista" method="POST" action="listagem.php">
      <center>
        <hr>
        <p>MULTIMARCAS VEÍCULOS - ADSVA4 - NOME DO ALUNO: VICENTE LUZ</p>
        <hr>
	  </center>
      <p><b>DIGITE A DESCRIÇÃO DO VEÍCULO:</b>
      <input type="text" name="busca_descVeiculo"size="40" maxlength="40">&nbsp;
      <input type="submit" value="FILTRAR">&nbsp;
      <input type="submit" value="VOLTAR" 
        onclick="document.frm_lista.action='cadastro_veiculos.html'">
    </form>
    <table border="1">
      <tr>
        <th bgcolor="yellow" align="center">RENAVAM</th>
        <th bgcolor="yellow" align="center">DESCRIÇÃO VEÍCULOS</th>
        <th bgcolor="yellow" align="center">MONTADORA</th>
        <th bgcolor="yellow" align="center">ANO FABRICAÇÃO</th>
        <th bgcolor="yellow" align="center">PLACA</th>
        <th bgcolor="yellow" align="center">VALOR VEÍCULO</th>
        <th bgcolor="yellow" align="center">VALOR IPVA</th>
        <th bgcolor="yellow" align="center">APAGAR VEÍCULOS</th>
        <th bgcolor="yellow" align="center">EDITAR</th>
      </tr>
      <tr>
        <?php
          while($linha=mysql_fetch_assoc($sql)){
        ?>
            <th align="center"><?php echo $linha['renavam']; ?></th>
            <th align="center"><?php echo $linha['descricao_veiculo']; ?></th>
            <th align="center"><?php echo $linha['montadora']; ?></th>
            <th align="center"><?php echo $linha['ano_fabricacao']; ?></th>
            <th align="center"><?php echo $linha['placa']; ?></th>
            <th align="center"><?php echo $linha['valor_veiculo']; ?></th>
            <th align="center"><?php echo $linha['ipva']; ?></th>            
            <th align="center"><a href="listagem.php?apagar='<?php 
            echo $linha['renavam']; ?>'"><img src='excluir_veiculo.png'></a></th>
            <th align="center"><a href="editar_conta.php?edit=<?php 
            echo $linha['renavam']; ?>
            &descVeiculo=<?php echo $linha['descricao_veiculo']; ?>
            &montadora=<?php echo $linha['montadora']; ?>
            &anoFabricacao=<?php echo $linha['ano_fabricacao']; ?>
            &placa=<?php echo $linha['placa']; ?>
            &valorVeiculo=<?php echo $linha['valor_veiculo']; ?>">
            <img src="editar_contas.png"></a></th>
            <tr>

          <?php 
          }
          ?>
    </table>
  </body>
</html>
