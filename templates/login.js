$("#login").attr("disabled", true);
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
