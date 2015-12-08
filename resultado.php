<html>
<head>
<title>Resultados</title>
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap core CSS -->
<link href="../CSS/bootstrap.min.css" rel="stylesheet">
<link href="../CSS/style.css" rel="stylesheet">
</head>
<body>
	<div id='print'>

<?php
session_start (); // Recupera os dados da sessão
                  
// Se tentarem acessar a pagina sem estar logado, o sistema redireciona para a página de login
if (! isset ( $_SESSION ['usuario'] )) {
	header ( "Location:login.php" );
} else {
	$usuario = $_SESSION ['usuario']; // Recupera o nome do usuário logado
}

// Se o resultado da consulta do relatorio for nulo, exibe uma mensagem de aviso
if ($_SESSION ['resultado'] == null) {
	echo "<h1 align='center'>Nenhum resultado encontrado!</h1>";
	include_once 'relatorio.php';
} else { // Senão, monta o layout para exibição dos resultados
	echo "<h1 align='center'>RELATÓRIO DO DIA " . date ( 'd/m/Y', strtotime ( $_POST ['dt_inicial'] ) ) .
	 " AO DIA " . date ( 'd/m/Y', strtotime ( $_POST ['dt_final'] ) ) . "</h1>";
	$conn = $_SESSION ['resultado'];
	$cont = 0;
	while ( $exibe = mysql_fetch_assoc ( $conn->resultado ) ) {
		unset ( $exibe ['id'] );
		if ($cont == 0) {
			$tabela = '<table border="1">';
			$tabela .= '<tr><td align="center" colspan="9"><b>RELATÓRIO PESQUISA DE SATISFAÇÃO </b></td></tr>';
			$tabela .= "<tr>";
			foreach ( $exibe as $key => $valor ) {
				$campo = str_replace ( "_", " ", $key );
				$campo = strtoupper ( $campo );
				$tabela .= "<td align='center'><b>$campo</b></td>";
			}
			$tabela .= '</tr>';
		}
		$tabela .= "<tr>";
		foreach ( $exibe as $key => $valor ) {
			if ($key == 'data') {
				$valor = date ( 'd/m/Y', strtotime ( $valor ) );
			}
			$tabela .= "<td align='left' style='padding-right: 15px'> $valor </td>";
		}
		$cont ++;
		$tabela .= "</tr>";
	}
	
	$tabela .= '</table>';
	echo $tabela;
	
	$_SESSION ['tabela'] = $tabela;
}
?>
</div>
	<table>
		<tr>
			<td align='center'><a class='action-button shadow animate voltar'
				href='../View/relatorio.php'>VOLTAR</a></td>
			<td align='center'><a class='action-button shadow animate voltar'
				href='../View/download.php'>BAIXAR RESULTADOS</a></td>
			<td align='center'><button
					class='action-button shadow animate voltar'
					title='Imprimir conteúdo' onclick='printDiv()'>IMPRIMIR RELATÓRIO</button></td>
		</tr>
	</table>
	<script>
	function printDiv() {
        //pega o Html da DIV
        var divElements = document.getElementById('print').innerHTML;
        //pega o HTML de toda tag Body
        var oldPage = document.body.innerHTML;

        //Alterna o body 
        document.body.innerHTML =         	
          "<html><head></head>" + divElements + "<html>";

        //Imprime o body atual
        window.print();

        //Retorna o conteudo original da página. 
        document.body.innerHTML = oldPage;
    }
	</script>
</body>
</html>