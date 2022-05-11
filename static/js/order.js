function order() {
    let url = "../php/order.php";
    let data = {
        "name" : $("input[name='name']").val(),
        "phone" : $("input[name='phone']").val(),
        "email" : $("input[name='email']").val(),
        "start" : $("input[name='start_date']").val(),
        "time" : "12:00",
        "people" : $("input[name='people']").val(),
        "adopt" : true,
        "note" : "hi",
    }
    $.post(
        url,
        data,
        (response, status) => {
            if (status == "success") {
                if (response["status"] == "success") {
                    fun___(response["data"])
                }
            }
        }
    )
}

$(document).ready(() => {
    $("#submit").click(() => {
        order();
    })
});