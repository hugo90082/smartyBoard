$("#reply").keyup(function () {
    $("#send").attr("disabled", false);
})

$("#send").on("click", function () {
    let dataToServer = {
        reply: $("#reply").val(),
        ID: $("#ID").val()
    }

    $.ajax({
        type: "POST",
        url: "./detailsReply.php",
        data: dataToServer,
        success: function (e) {
            $(".container").remove()
            $('body').html(e);
            $("body meta").remove()
            $("body title").remove()
            $("body link").remove()
            $("body script").first().remove()
            $("body style").remove()

        }
    })
})