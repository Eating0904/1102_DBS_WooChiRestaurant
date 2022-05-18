function register() {
    let url = "../php/signup.php";
    let data = {
        "account" : $("input[name='account']").val(),
        "password" : $("input[name='password']").val(),
        "name" : $("input[name='name']").val(),
        "tel" : $("input[name='tel']").val(),
        "mail" : $("input[name='mail']").val(),
    };

    $.post(
        url,
        data,
        // (response, status) => {
        //     if (status == "success") {
        //         if (response["status"] == "success") {
        //             response["data"]
        //         }
        //     }
        // }
    )
}

$(document).ready(() => {
    $("#submit").click(() => {
        register();
    })
});