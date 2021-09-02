<html>
	<head>
		<meta charset="UTF-8">
		<title>localhost</title>
	</head>
	<body>
		<form name="frm_editar" method="POST">
			<center>
				<hr>
				<p>MULTIMARCAS VEÍCULOS - ADSVA4 - NOME DO ALUNO: VICENTE LUZ</p>
				<hr>
			</center>
			<fieldset>
				<legend>DADOS DO VEÍCULO:</legend>
				<b>RENAVAM:</b> <br>
				<input type="text" name="txt_renavam" 
					value="<?php if(isset($_GET['edit'])) echo $_GET['edit'] ?>" readonly><p>
				<b>DESCRIÇÃO DO VEÍCULO:</b> <br>
				<input type="text" name="txt_descVeiculo" size="30" maxlength="33"
					value="<?php if(isset($_GET['edit'])) echo $_GET['descVeiculo'] ?>"><p> 
				<b>MONTADORA:</b><br>
				<select name="montadoras">
				<option value="<?php if(isset($_GET['edit'])) 
					echo $_GET['montadora'] ?>"><?php echo $_GET['montadora']; ?></option> 
				<option value="VOLKSWAGEN">VOLKSWAGEN</option>
				<option value="GENERAL MOTORS">GENERAL MOTORS</option>
				<option value="FIAT">FIAT</option>
				<option value="FORD">FORD</option>
				<option value="RENAULT">RENAULT</option>
				<option value="HYUNDAI">HYUNDAI</option>
				<option value="TOYOTA">TOYOTA</option>
				<option value="HONDA">HONDA</option>
			</select><p>
			<b>ANO FABRICAÇÃO:</b><br>
			<input type="text" name="txt_anoFabricacao"size="8" maxlength="4" 
				value="<?php if(isset($_GET['edit'])) echo $_GET['anoFabricacao'] ?>"
					pattern="[0-9]+$"><p>
			<b>PLACA:</b><br>
			<input type="text" name="txt_placa" size="8" maxlength="7" 
				value="<?php if(isset($_GET['edit'])) echo $_GET['placa'] ?>"><p>
			<b>VALOR VEÍCULO:</b><br>
			<input type="text" name="txt_valorVeiculo" pattern="[0-9.]+$"
				size="8" maxlength="10" value="<?php if(isset($_GET['edit'])) 
					echo $_GET['valorVeiculo'] ?>"><p>
			</fieldset>
			<center>
				<p><input type="submit" name="btn_editar" value="EDITAR VEÍCULO" 
					onclick="document.frm_editar.action='editar.php'">&nbsp;&nbsp;
				<input type="submit" name="btn_listagem" value="LISTAGEM DE VEÍCULOS" 
					onclick="document.frm_editar.action='listagem.php'"> 
			</center>
		</form>
	</body>
</html>