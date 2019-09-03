<?php
/* Smarty version 3.1.34-dev-7, created on 2019-09-03 12:40:17
  from 'C:\xampp\htdocs\smartyBoard\templates\details.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d6e43117b6308_80481950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7e1a72250dddfe2426bfeb0a598437aad4b1e00' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smartyBoard\\templates\\details.html',
      1 => 1567507211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5d6e43117b6308_80481950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<body>

		<div class="container">
			<form method="post" action="index.php" class="form-horizontal">

				<fieldset>
				
					<!-- Form Name -->
					<legend>
						<h2>詳細內容
							<button type="submit" class="btn btn-md btn-danger pull-right" id="back" name="back" value="back">回首頁</button>
						</h2>	

						<h4 class='pull-right text-warning'>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['row']->value["datetime"];?>
</h4>
						<h4 class='pull-right text-warning'>  主題建立者：<?php echo $_smarty_tpl->tpl_vars['row']->value["mail"];?>
 || </h4>
					
					</legend>
					

					<table>
						<!-- Text input-->
						<tr>
							<h2><div class="form-group">
									<p class="bg-success">
										主題：<?php echo $_smarty_tpl->tpl_vars['row']->value["topic"];?>

									</p>
								</div>
							</h2>
						</tr>
						<tr> 
							<!-- Password input-->
							<h4> 
								<div class="text-info">
									內容：<?php echo $_smarty_tpl->tpl_vars['row']->value["content"];?>


								</div>
							</h4>
						</tr>
						<!-- Button (Double) -->
						<tr><legend></legend>
							
						</tr>
					</table>
				</fieldset>	
			</form>
			<?php $_smarty_tpl->_assignInScope('rowReplyCount', $_smarty_tpl->tpl_vars['resultReply']->value->rowCount());?>
			
			<?php if ($_smarty_tpl->tpl_vars['rowReplyCount']->value != 0) {?>
			
			<h3>回復：</h3>
			<table class="table table-hover">
				<?php while ($_prefixVariable1 = $_smarty_tpl->tpl_vars['resultReply']->value->fetch()) {
$_smarty_tpl->_assignInScope('rowReply', $_prefixVariable1);?>
				
					<tr>
						<td>
							<h4><?php echo $_smarty_tpl->tpl_vars['rowReply']->value['reply'];?>
</h4>
						</td>
						<td>
							<form method="post" action="delete.php"> 
								<h5 class='pull-right text-warning'>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['rowReply']->value['datetime'];?>
</h5>
								<h5 class='pull-right text-warning'>建立者：<?php echo $_smarty_tpl->tpl_vars['rowReply']->value['mail'];?>
 || </h5>
								<?php if (isset($_SESSION['memberID']) && ($_smarty_tpl->tpl_vars['row']->value['memberID'] == $_SESSION['memberID'])) {?>
								
									<a href="edit.php?ID=<?php echo $_smarty_tpl->tpl_vars['row']->value['ID'];?>
" class="btn btn-xs btn-info">
										<span class="glyphicon glyphicon-pencil"></span> 修改</a> |

								<?php }?>    
								<?php if (isset($_SESSION['memberID']) && ($_SESSION['memberID'] == 1 || $_smarty_tpl->tpl_vars['row']->value['memberID'] == $_SESSION['memberID'])) {?>
									<input id="msID" name="msID" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['ID'];?>
"> 
									<input type="hidden" id="memberID" name="memberID" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['memberID'];?>
">
									<button type="submit" class="btn btn-xs btn-danger">
									<span class="glyphicon glyphicon-remove"></span> 刪除</button>
								<?php }?>
								
   
							</form>

						</td>	
					</tr>

				<?php }?>

			</table>
			<?php }?>
			<form method="post" action="detailsReply.php?ID=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="form-horizontal">		
				<input cols="100" rows="1" maxlength="70" class="form-control input-md" id="reply" name="reply"><legend></legend>
				<input type="hidden" id="ID" name="ID" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
				<button class="btn btn-md btn-primary pull-right" id="send" name="send" value="send">回復</button>

				<h4><p class='text-center text-danger'><?php echo $_smarty_tpl->tpl_vars['NoValue']->value;?>
</p></h4>

			</form>		
				
			

		</div>

	</body>
</html>
<!-- <?php echo '<script'; ?>
>
	$("#send").on("click", function(){
		let dataToServer = {
			reply:$("#reply").val(),
			ID	 :$("#ID").val()
		}

		$.ajax({
			type:"POST",
			url:"./detailsReply.php",
			data: dataToServer,
            success: function(e) {
                window.location.replace('details.php?ID=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
');
            }
		})
	})
<?php echo '</script'; ?>
> --><?php }
}
