<?php
include_once __DIR__ .'../../Model/FretesDAO.php';
if ($_SERVER['REQUEST_METHOD'] == "POST"){
	if (isset($_POST['dt_inicial']) && isset($_POST['dt_final'])){
		header("Location:../../result_fechamento.php?dt_inicial=$_POST[dt_inicial]&dt_final=$_POST[dt_final]");
	}
} else  {
		echo "deu ruim";
}
