<!DOCTYPE html>
<html>
<head>
	<title>Notas de estudiantes</title>
</head>
<body>
<table border="1" cellpadding="1" cellspacing="0">
	<thead colspan=7>Estudiantes y calificaciones</thead>
	<form name="frmRegistro" method="post" action="calcular.php">
	<tr>
		<td>#</td>
		<td>Apellidos</td>
		<td>Nombres</td>
		<td>Nota1(10%)</td>
		<td>Nota2(20%)</td>
		<td>Nota3(30%)</td>
		<td>Nota4(40%)</td>
	</tr>
	<tr align="center">
		<td>1</td>
		<td><input type="text" name="apeEst1" value="" style="width:135px;"></td>
		<td><input type="text" name="nomEst1" value="" style="width:135px;"></td>
		<td><input type="text" name="not1Est1" value="" style="width:26px;"></td>
		<td><input type="text" name="not2Est1" value="" style="width:26px;"></td>
		<td><input type="text" name="not3Est1" value="" style="width:26px;"></td>
		<td><input type="text" name="not4Est1" value="" style="width:26px;"></td>
	</tr>
	<tr align="center">
		<td>2</td>
		<td><input type="text" name="apeEst2" value="" style="width:135px;"></td>
		<td><input type="text" name="nomEst2" value="" style="width:135px;"></td>
		<td><input type="text" name="not1Est2" value="" style="width:26px;"></td>
		<td><input type="text" name="not2Est2" value="" style="width:26px;"></td>
		<td><input type="text" name="not3Est2" value="" style="width:26px;"></td>
		<td><input type="text" name="not4Est2" value="" style="width:26px;"></td>
	</tr>
	<tr align="center">
		<td colspan="7">
			<input type="submit" name="btnEnviar" value="Enviar">
			<input type="reset" name="btnBorrar" value="Limpiar">
		</td>
	</tr>
	</form>
</table>
</body>
</html>