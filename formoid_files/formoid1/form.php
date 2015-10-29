<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-dark.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-dark.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-solid-dark" style="background-color:#ffffff;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Cadastro de Frete</h2></div>
	<div class="element-date<?php frmd_add_class("date"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" data-format="yyyy-mm-dd" type="date" name="date" required="required" placeholder="Date"/><span class="icon-place"></span></div></div>
	<div class="element-select<?php frmd_add_class("select1"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="large"><span><select name="select1" required="required">

		<option value="José Augusto">José Augusto</option>
		<option value="Fernando">Fernando</option>
		<option value="Ed">Ed</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-input<?php frmd_add_class("input"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input" required="required" placeholder="WB"/><span class="icon-place"></span></div></div>
	<div class="element-select<?php frmd_add_class("select"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="large"><span><select name="select" required="required">

		<option value="Origem 1">Origem 1</option>
		<option value="Origem 2">Origem 2</option>
		<option value="Origem 3">Origem 3</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-select<?php frmd_add_class("select2"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="large"><span><select name="select2" required="required">

		<option value="Destino 1">Destino 1</option>
		<option value="Destino 2">Destino 2</option>
		<option value="Destino 3">Destino 3</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-input<?php frmd_add_class("input1"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input1" required="required" placeholder="Valor Recebido"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input2"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input2" required="required" placeholder="Valor Pago"/><span class="icon-place"></span></div></div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>"><label class="title"></label><div class="item-cont"><textarea class="medium" name="textarea" cols="20" rows="5" placeholder="Observaçoes"></textarea><span class="icon-place"></span></div></div>
<div class="submit"><input type="submit" value="Cadastrar"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-dark.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>