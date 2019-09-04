<?php
/* Smarty version 3.1.34-dev-7, created on 2019-09-04 07:43:36
  from 'C:\xampp\htdocs\smartyBoard\templates\edit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d6f4f0899ffb0_88700659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26e74da3507f0ab8ef0bcb67016d1a1b309d5a8e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smartyBoard\\templates\\edit.html',
      1 => 1567575812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5d6f4f0899ffb0_88700659 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>

    <div class="container">

        <form method="post" action="./update.php" class="form-horizontal">

            <fieldset>

                <!-- Form Name -->
                <legend>
                    <h2>修改主題內容</h2>
                </legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="topic">標題:</label>
                    <div class="col-md-4">
                        <input id="topic" maxlength="50" name="topic" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['topic'];?>
" type="text"
                            placeholder="" class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="content">內容:</label>
                    <div class="col-md-4">
                        <textarea class="form-control input-md" id="content" name="content" rows="2"
                            maxlength="100"><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
</textarea>
                    </div>
                </div>
                <input id="msID" name="msID" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">


                <h4>
                    <p class='text-center text-danger'><?php echo $_SESSION['NoValue'];?>
</p>
                </h4>


                <!-- Button (Double) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="okOrCancel"></label>
                    <div class="col-md-8">
                        <input type="hidden" id="memberID" name="memberID" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['memberID'];?>
">
                        <button type="submit" id="ok" name="ok" class="btn btn-success" value="OK">確定修改</button>
                        <a href="/index.php"><button class="btn btn-danger">取消</button></a>
                    </div>
                </div>

            </fieldset>
        </form>

    </div>

</body>

</html><?php }
}
