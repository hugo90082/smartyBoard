disabledValueMail = 0
disabledValuePwd = 0
mail.onkeyup = function () {
    var mail = this.value;
    var reg = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/;//判斷格式


    if (reg.test(mail)) {
        document.getElementById('mailValue').innerHTML = "格式正確";
        disabledValueMail = 1
        if (disabledValueMail == 1 && disabledValuePwd == 1) {
            document.getElementById('signUp').disabled = false;
        }

    } else {
        document.getElementById('mailValue').innerHTML = "mail格式不正確";
        document.getElementById('signUp').disabled = true;
    }
}

password.onkeyup = function () {
    password = document.getElementById('password').value;
    if (password == passwordCheck) {
        document.getElementById('passwordValue').innerHTML = "兩次密碼相同";
        disabledValuePwd = 1

        if (disabledValueMail == 1 && disabledValuePwd == 1) {
            document.getElementById('signUp').disabled = false;
        }


    } else {
        document.getElementById('passwordValue').innerHTML = "兩次密碼不相同";
        document.getElementById('signUp').disabled = true;
    }
}

passwordCheck.onkeyup = function () {
    passwordCheck = this.value;
    if (password == passwordCheck) {
        document.getElementById('passwordValue').innerHTML = "兩次密碼相同";
        disabledValuePwd = 1

        if (disabledValueMail == 1 && disabledValuePwd == 1) {
            document.getElementById('signUp').disabled = false;
        }


    } else {
        document.getElementById('passwordValue').innerHTML = "兩次密碼不相同";
        document.getElementById('signUp').disabled = true;
    }
}


