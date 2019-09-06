<?php
/* Smarty version 3.1.34-dev-7, created on 2019-09-06 08:26:52
  from 'C:\xampp\htdocs\smartyBoard\templates\indexFlowing.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d71fc2ca7d6e2_57801297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '694c0c2e9049c81db0a28da0254597984d1e05d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smartyBoard\\templates\\indexFlowing.html',
      1 => 1567750691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:utils.js' => 1,
  ),
),false)) {
function content_5d71fc2ca7d6e2_57801297 (Smarty_Internal_Template $_smarty_tpl) {
while ($_prefixVariable1 = $_smarty_tpl->tpl_vars['result']->value->fetch()) {
$_smarty_tpl->_assignInScope('row', $_prefixVariable1);?>
<tr id="tr<?php echo $_smarty_tpl->tpl_vars['row']->value['ID'];?>
">
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

<?php $_smarty_tpl->_subTemplateRender("file:utils.js", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
