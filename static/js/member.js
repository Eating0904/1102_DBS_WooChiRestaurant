let MEMBER= [
    {"name":'Eating', "tel":'0123456789',"mail":'12345@54321',"points":'100'},
]

let ACCOUNT= [
    {"account":'Eating0904', "password":"9876654321"},
]

/* 會員資料 */
function putMemberInfo() {
    let member = document.getElementById("member").getElementsByTagName("span");
    member[0].textContent += `${MEMBER[0]["name"]}`;
    member[1].textContent += `${MEMBER[0]["tel"]}`;
    member[2].textContent += `${MEMBER[0]["mail"]}`;
    member[3].textContent += `${MEMBER[0]["points"]}`;
}
function showMemberEditBox() {
    // document.getElementsByClassName("cover")[0].style.display = "block";
    document.getElementById("editmember").style.display = "block";
    editMemberInfo();
}
function editMemberInfo() {
    let member = document.getElementById("editmember").getElementsByTagName("input");
    member[0].value = `${MEMBER[0]["name"]}`;
    member[1].value = `${MEMBER[0]["tel"]}`;
    member[2].value = `${MEMBER[0]["mail"]}`;

    let url = ""
    data = {
        "name" : $("input[name='name']").val(),
        "tel" : $("input[name='tel']").val(),
        "mail" : $("input[name='mail']").val(),
    }
    $("#saveNewMemberInfo").click(() => {
        postNewMemberInfo(url, data);
    })
}
function postNewMemberInfo(url, data) {
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


/* 會員帳號 */
function putMemberAccount() {
    let account = document.getElementById("account").getElementsByTagName("span");
    account[0].textContent += `${ACCOUNT[0]["account"]}`;
    account[1].textContent += `${ACCOUNT[0]["password"]}`;
}

function showAccountEditBox() {
    // document.getElementsByClassName("cover")[0].style.display = "block";
    document.getElementById("editaccount").style.display = "block";
    editMemberAccount();
}

function editMemberAccount() {
    let account = document.getElementById("editaccount").getElementsByTagName("input");
    account[0].value = `${ACCOUNT[0]["account"]}`;
    account[1].value = `${ACCOUNT[0]["password"]}`;

    let url = ""
    data = {
        "account" : $("input[name='account']").val(),
        "password" : $("input[name='password']").val(),
    }
    $("#saveNewAccount").click(() => {
        postNewMemberAccount(url, data);
    })
}
function postNewMemberAccount(url, data) {
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

/* 訂單紀錄 */
// function putOrderList {
//     let list = document.getElementById("orderlist")

//     <tr>
//         <span><td>2022-05-08</td></span>
//         <span><td>14:00</td></span>
//         <td>
//             <button type="button" class="btn btn-primary btn-sm">詳細資料</button>
//         </td>   
//     </tr>


// }


window.onload = function() {
    putMemberInfo();
    putMemberAccount();
}