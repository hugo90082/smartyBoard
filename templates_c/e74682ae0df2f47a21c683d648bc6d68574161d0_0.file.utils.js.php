<?php
/* Smarty version 3.1.34-dev-7, created on 2019-09-09 08:04:42
  from 'C:\xampp\htdocs\smartyBoard\utils.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d75eb7a3e7241_11624877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e74682ae0df2f47a21c683d648bc6d68574161d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smartyBoard\\utils.js',
      1 => 1568008948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d75eb7a3e7241_11624877 (Smarty_Internal_Template $_smarty_tpl) {
?>$("#login").attr("disabled", true);
$("#password").keyup(function () {
    $("#login").attr("disabled", false);//限制按鈕
})
$("#mail").keyup(function () {
    let mail = this.value;
    let reg = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/;//判斷格式
    if (reg.test(mail)) {
        $("#mailValue").text("格式正確");
        $("#login").attr("disabled", false);//格式正確就解開按鈕
    } else {
        $("#mailValue").text("mail格式不正確");
        $("#login").attr("disabled", true);
    }
})

$("#login").on('click', function () {
    let dataToServer = {
        mail: $('#mail').val(),
        password: $('#password').val(),
    }
    $.ajax({
        type: "POST",
        url: "./checkLogin.php",
        data: dataToServer,
        success: function (e) {
            if (e) {
                alert('登入成功');
                window.location.replace('index.php');
            } else {
                alert('帳號或密碼錯誤');
                //window.location.replace('login.php');
            }
        },
        error: function () {
            alert('錯誤');
        }
    })
})
<?php }
}
