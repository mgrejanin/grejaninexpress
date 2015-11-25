<?php
include_once ("/home/mgrejanin1/public_html/grejaninexpress/Model/ColaboradorDAO.php");

if ($_SERVER['REQUEST_METHOD'] == "POST"){
	if (ColaboradorDAO::inserirColaborador($_POST)){
		header("Location:../../cadastrarColaborador.php?action=success");
	}
} else  {
	header("Location:../../cadastrarColaborador.php?action=error");
}
