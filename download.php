<html>
<head>
<title>Resultados</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<?php
	session_start();
	
	$cont = 0;
	$fechamento = $_SESSION['resultado'];	
	$table = "<table border='1'>";
	$table.= "<tr><td align='center' colspan='3'><b>FECHAMENTO DO DIA " . date ( "d/m/Y", strtotime ( $_GET ['dt_inicial'] ) ) . " AO DIA " . date ( "d/m/Y", strtotime ( $_GET ['dt_final'] ) ). "</b></td></tr>";	
	$table.="<tr>";
// 	$table.="<th>#</th>";
	$table.="<th>Data</th>";
// 	$table.="<th>Nome do Funcionário</th>";
	$table.="<th width='500px'>WB</th>";
// 	$table.="<th>Origem</th>";
// 	$table.="<th>Destino</th>";
	$table.="<th>Frete</th>";
// 	$table.="<th>Valor Pago</th>";
// 	$table.="<th>Observação</th>";
	$table.="</tr>";
	
	$valorTotal = 0;
	foreach ($fechamento as $dados ){
		$table.= "<tr>";
// 		$table.= "<td>$dados[cod_frete]</td>";
		$table.= "<td align='center'>".date("d/m/Y", strtotime($dados['ds_data']))."</td>";
// 		$table.= "<td>".$dados['nm_colaborador']."</td>";
		$table.= "<td align='center'>".$dados['nr_wb']."</td>";
// 		$table.="<td>".$dados['nm_origem']."</td>";
// 		$table.="<td>".$dados['nm_destino']."</td>";
		$table.="<td align='center'> R$".number_format($dados['vlr_recebido'], 2, ',', '.')."</td>";
// 		$table.="<td> R$".number_format($dados['vlr_pago'], 2, ',', '.')."</td>";
// 		$table.="<td>". isset($dados['ds_obs']) ? $dados['ds_obs'] :  "" . "</td></tr>";
		$valorTotal += $dados['vlr_recebido'];
	}
	$table.="<tr><td align='center' colspan='2'>Valor Total:</td><td> R$".number_format($valorTotal, 2, ',', '.')."</td></tr>";
	$cont ++;
	$table .= "</tr>";
	$table.="</table>";


echo $table;
?>

</body>
</html>
<?php

/*
 * ARQUIVO CONTEM OS COMANDOS PARA O DOWNLOAD DO RELATORIO
 */
$arquivo = 'Fechamento.xls';
// Força o Download do Arquivo Gerado
header ( 'Cache-Control: no-cache, must-revalidate' );
header ( 'Pragma: no-cache' );
header ( 'Content-Type: application/x-msexcel' );
header ( "Content-Disposition: attachment; filename=\"{$arquivo}\"" );
?>
