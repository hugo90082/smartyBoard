flowingWall();
$('.deleteMs').on('click', function () {
    let dataToServer = {
        msID: $(this).prev().prev().val(),//抓delete欄位附近的input
        memberID: $(this).prev().val()
    }
    $.ajax({
        type: "POST",
        url: "./delete.php",
        data: dataToServer,
        success: function (e) {
            $('#tr' + dataToServer.msID).remove()
            alert("刪除成功")
        },
        error: function(xhr) {
            alert('發生錯誤'+xhr); 
        } 
    })
});
$(window).scroll(function () {
    flowingWall();
});
$(window).resize(function () {
    flowingWall();
});
function flowingWall(){
    let scrollTop = Math.ceil($(this).scrollTop());
    let scrollHeight = Math.ceil($(document).height());
    let windowHeight = Math.ceil($(this).height());

    if (scrollTop + windowHeight >= scrollHeight) {
        let trLength = $("table tr").length
        $.ajax({
            type: "GET",
            url: "./indexFlowing.php?trLength=" + trLength,
            success: function (e) {
                $("tbody").append(e);


            }
        })
    }
}