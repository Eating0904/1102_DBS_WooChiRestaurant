function register() {
    let url = "../php/user_signup.php";
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
        (response, status) => {
            if (status == "success") {
                if (response["status"] == "success") {
                    window.location.href = "../login";
                }
                else {
                    console.log(response["error"]);
                }
            }
        }
    )
}

$(document).ready(() => {
    $("#submit").click(() => {
        console.log("click");
        register();
    })
});