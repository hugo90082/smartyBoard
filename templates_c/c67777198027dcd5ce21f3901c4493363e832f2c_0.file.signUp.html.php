<?php
/* Smarty version 3.1.34-dev-7, created on 2019-09-09 09:01:30
  from 'C:\xampp\htdocs\smartyBoard\templates\signUp.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d75f8ca22c923_93265521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c67777198027dcd5ce21f3901c4493363e832f2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smartyBoard\\templates\\signUp.html',
      1 => 1568012481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:src.html' => 1,
  ),
),false)) {
function content_5d75f8ca22c923_93265521 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>

	<div class="container">
		<form method="post" action="./checkSignUp.php" class="form-horizontal">


			<fieldset>

				<!-- Form Name -->
				<legend>
					<h2>註冊帳號</h2>
				</legend>


				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="ID">註冊新帳號Mail</label>
					<div class="col-md-4">
						<input id="mail" name="mail" type="text" placeholder="請填寫mail 最多三十字"
							class="form-control input-md" size="30" maxlength="30" value="">
					</div>
				</div>

				<h4>
					<p class='text-center text-danger' id="mailValue"></p>
				</h4>

				<!-- Password input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="password">新密碼</label>
					<div class="col-md-4">
						<input id="password" name="password" type="password" placeholder="請填寫英文或數字或符號"
							class="form-control input-md" maxlength="50">

					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label" for="passwordCheck">再次確認密碼</label>
					<div class="col-md-4">
						<input id="passwordCheck" name="passwordCheck" type="password" placeholder="請填寫英文或數字或符號"
							class="form-control input-md" maxlength="50">

					</div>
				</div>

				<h4>
					<p class='text-center text-danger' id="passwordValue"></p>
				</h4>
				<!-- Button (Double) -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="button1id"></label>
					<div class="col-md-8">
						<button type="submit" disabled="disabled" id="signUp" name="signUp" class="btn btn-primary"
							value="signUp">確定註冊</button>
						<a href="/index.php" class="btn btn-danger">回首頁</a>
					</div>
				</div>

			</fieldset>
		</form>

	</div>
	<?php $_smarty_tpl->_subTemplateRender("file:src.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php echo '<script'; ?>
 src="http://localhost/smartyBoard/templates/signUp.js" defer><?php echo '</script'; ?>
>
</body>


</html><?php }
}
