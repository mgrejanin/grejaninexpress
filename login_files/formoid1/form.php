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
<form class="formoid-solid-dark" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post" action="teste.php">
	<div class="title">
		<h2>Login</h2>
	</div>
	
	<!-- Campo email -->
	<div class="element-input<?php frmd_add_class("input"); ?>">
		<label class="title">
			<span class="required">*</span>
		</label>
		<div class="item-cont">
			<input class="large" type="text" name="ds_email" required="required" placeholder="email"/>
			<span class="icon-place"></span>
		</div>
	</div>
	<!-- Campo email -->
	
	<!-- Campo Senha -->
	<div class="element-password<?php frmd_add_class("password"); ?>">
		<label class="title">
			<span class="required">*</span>
		</label>
		<div class="item-cont">
			<input class="large" type="password" name="ds_senha" value="" required="required" placeholder="Senha"/>
			<span class="icon-place"></span>
		</div>
	</div>
	<!-- Campo Senha -->
	
	<!-- Botão Enviar -->
	<div class="submit">
		<input type="submit" value="Submit"/>
	</div>
</form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-dark.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>