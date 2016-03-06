<?php
$apeEst1 = $_REQUEST['apeEst1'];
$nomEst1 = $_REQUEST['nomEst1'];
$not1Est1 = $_REQUEST['not1Est1'];
$not2Est1 = $_REQUEST['not2Est1'];
$not3Est1 = $_REQUEST['not3Est1'];
$not4Est1 = $_REQUEST['not4Est1'];
$promEst1 = $not1Est1 * 0.1 + $not2Est1 * 0.2 + $not3Est1 * 0.3 + $not4Est1 * 0.4;
if($promEst1>=7){
	$estadoEst1='Aprobado';
}else{
	$estadoEst1='Reprobado';
}

$apeEst2 = $_REQUEST['apeEst2'];
$nomEst2 = $_REQUEST['nomEst2'];
$not1Est2 = $_REQUEST['not1Est2'];
$not2Est2 = $_REQUEST['not2Est2'];
$not3Est2 = $_REQUEST['not3Est2'];
$not4Est2 = $_REQUEST['not4Est2'];
$promEst2 = $not1Est2 * 0.1 + $not2Est2 * 0.2 + $not3Est2 * 0.3 + $not4Est2 * 0.4;
if($promEst2>=7){
	$estadoEst2='Aprobado';
}else{
	$estadoEst2='Reprobado';
}

print'
<table border="7" cellpadding="1" cellspacing="0">
	<thead colspan=2>Estudiantes y calificaciones</thead>
	<tr>
		<td>#</td>
		<td>Nombre Completo</td>
		<td>Nota1(10%)</td>
		<td>Nota2(20%)</td>
		<td>Nota3(30%)</td>
		<td>Nota4(40%)</td>
		<td>Promedio(100%)</td>
		<td>Estado</td>
	</tr>
	<tr align="center">
		<td>1</td>
		<td>'.$nomEst1.' '.$apeEst1.'</td>
		<td>'.$not1Est1.'</td>
		<td>'.$not2Est1.'</td>
		<td>'.$not3Est1.'</td>
		<td>'.$not4Est1.'</td>
		<td>'.$promEst1.'</td>
		<td>'.$estadoEst1.'</td>
	</tr>
	<tr align="center">
		<td>2</td>
		<td>'.$nomEst2.' '.$apeEst2.'</td>
		<td>'.$not1Est2.'</td>
		<td>'.$not2Est2.'</td>
		<td>'.$not3Est2.'</td>
		<td>'.$not4Est2.'</td>
		<td>'.$promEst2.'</td>
		<td>'.$estadoEst2.'</td>
	</tr>
</table>';

print'<a href="javascript:window.history.back();">&laquo; Regresar</a>';

?>