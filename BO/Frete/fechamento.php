<?php
include_once ("/home/mgrejanin1/public_html/grejaninexpress/Model/FretesDAO.php");
if ($_SERVER['REQUEST_METHOD'] == "POST"){
	if (isset($_POST['dt_inicial']) && isset($_POST['dt_final'])){
		header("Location:../../result_fechamento.php?dt_inicial=$_POST[dt_inicial]&dt_final=$_POST[dt_final]");
	}
} else  {
		echo "deu ruim";
}
