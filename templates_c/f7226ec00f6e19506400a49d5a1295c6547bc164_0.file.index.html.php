<?php
/* Smarty version 3.1.34-dev-7, created on 2019-09-02 09:20:56
  from 'C:\xampp\htdocs\smartyBoard\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d6cc2d84f1a40_95452098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7226ec00f6e19506400a49d5a1295c6547bc164' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smartyBoard\\templates\\index.html',
      1 => 1567408752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5d6cc2d84f1a40_95452098 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <body>
        <div class="container">


            <h3>
                <p class='text-center text-info'>歡迎！<?php if ($_smarty_tpl->tpl_vars['memberMail']->value) {
echo $_smarty_tpl->tpl_vars['memberMail']->value;
} else {
echo "訪客";
}?></p>
            </h3>

            <?php if (isset($_SESSION['memberID'])) {?>
            <h2>留言板
                <a href="logout.php" class="btn btn-md btn-danger pull-right">登出</a>
                <a href="create.php" class="btn btn-md btn-success pull-right">
                    <span class="glyphicon glyphicon-plus"></span> 新增主題</a>
            </h2>
            <?php }?> 
            <?php if (!isset($_SESSION['memberID'])) {?>
            <h2>留言板
                <a href="signUp.php" class="btn btn-md btn-danger pull-right">註冊</a>
                <a href="login.php" class="btn btn-md btn-success pull-right">使用者登入</a></h2>
            <?php }?>



            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>主題</th>
                        <th>內容</th>
                        <th>建立者</th>
                        <th>更新時間</th>
                        <th>&nbsp;</th>

                    </tr>
                </thead>
                <tbody>
                    <?php while ($_prefixVariable1 = $_smarty_tpl->tpl_vars['result']->value->fetch()) {
$_smarty_tpl->_assignInScope('row', $_prefixVariable1);?>
                        <tr>
                            <td>
                                <a href="details.php?ID=<?php echo $_smarty_tpl->tpl_vars['row']->value['ID'];?>
">
                                    <p class="limit_length"><?php echo $_smarty_tpl->tpl_vars['row']->value['topic'];?>
</p>
                                </a>
                            </td>
                            <td>
                                <p class="limit_length"><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
</p>
                            </td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['row']->value['mail'];?>

                            </td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['row']->value['datetime'];?>

                            </td>
                            <td>
                                <span class="pull-right">

                                    <form method="post" action="delete.php"> 
                                            
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
                                            <span class="glyphicon glyphicon-remove"></span> 刪除</button> |
                                        <?php }?>
 

                                <a href="details.php?ID=<?php echo $_smarty_tpl->tpl_vars['row']->value['ID'];?>
" class="btn btn-primary btn-xs"> 詳細內容</a>

                                </form>

                                </span>
                            </td>
                        </tr>
                    <?php }?>




                </tbody>
            </table>
        </div>

    </body>

    </html><?php }
}
