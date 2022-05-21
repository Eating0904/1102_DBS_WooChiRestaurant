// if checked
// 要資料改input的value

function postMember() {
    $.post(
        "../php/show_customer.php",
        "",
        (response, status) => {
            if (status == "success") {
                console.log(response);
                if (response["status"] == "success") {
                    let MEMBER = response["data"][0];
                    putMemberInfo(MEMBER)
                }
            }
        }
    )
}
function putMemberInfo(MEMBER) {
    let member = document.getElementById("member").getElementsByTagName("small");
    member[0].textContent += `${MEMBER["c_name"]}`;
    member[1].textContent += `${MEMBER["c_phone"]}`;
    member[2].textContent += `${MEMBER["c_mail"]}`;
}

function order() {
    let url = "../php/insert_order.php";
    let data = {
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
                    // fun___(response["data"])
                }
            }
        }
    )
}

$(document).ready(() => {
    postMember();
    $("#submit").click(() => {
        order();
    })
});