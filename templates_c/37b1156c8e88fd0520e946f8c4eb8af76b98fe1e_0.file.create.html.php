<?php
/* Smarty version 3.1.34-dev-7, created on 2019-09-02 05:31:46
  from 'C:\xampp\htdocs\smartyBoard\templates\create.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d6c8d22dc5392_15133684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37b1156c8e88fd0520e946f8c4eb8af76b98fe1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smartyBoard\\templates\\create.html',
      1 => 1567395071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5d6c8d22dc5392_15133684 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <body>
        <div class="container">
            <form method="post" action="insert.php" class="form-horizontal">
                <fieldset>

                <!-- Form Name pattern="" -->
                    <legend><h2>建立主題</h2></legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="topic">標題：</label>  
                        <div class="col-md-4">
                            <input id="topic" name="topic" type="text" placeholder="" 
                                class="form-control input-md" maxlength="50">
                            
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="content">內容：</label>  
                        <div class="col-md-4">
                            <textarea class="form-control input-md" id="content" name="content" rows="2" maxlength="100"></textarea>  
                        </div>
                        
                    </div>

                    <h4><p class='text-center text-danger'><?php echo $_smarty_tpl->tpl_vars['NoValue']->value;?>
</p></h4>


                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="okOrCancel"></label>
                        <div class="col-md-8">
                            <button type="submit" id="ok" name="ok" class="btn btn-success" value="OK">送出新增</button>
                            <button type="submit" id="cancel" name="cancel" class="btn btn-danger" value="cancel">取消</button>
                            
                        </div>
                    </div>

                </fieldset>
            </form>


        </div>

    </body>
</html>
                <?php }
}
