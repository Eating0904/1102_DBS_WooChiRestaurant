// let MEMBER= [
//     {"name":'Eating', "tel":'0123456789',"mail":'12345@54321',"points":'100'},
// ]

let ACCOUNT= [
    {"account":'Eating0904', "password":"9876654321"},
]
let ORDERS= [
    {"o_id":'0', "日期":'2022-05-08', "時間":"17:00"},
    {"o_id":'1', "日期":'2022-05-20', "時間":"18:00"},
]



/* 會員資料 */
function putMemberInfo() {
    $.post(
        "../php/show_customer.php",
        "",
        (response, status) => {
            if (status == "success") {
                if (response["status"] == "success") {
                    let MEMBER = response["data"];
                    let member = document.getElementById("member").getElementsByTagName("span");
                    member[0].textContent += `${MEMBER["c_name"]}`;
                    member[1].textContent += `${MEMBER["c_phone"]}`;
                    member[2].textContent += `${MEMBER["c_mail"]}`;
                    member[3].textContent += `${MEMBER["c_points"]}`;
                    
                }
            }
        }
    )
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
                    alert("變更成功");
                    putMemberInfo();
                }
                else {
                    console.log(response["error"]);
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
function putOrderList() {
    let list = document.getElementById("orderlist");
    for(let i=0; i<ORDERS.length; i++) {
        let text = `
                    <tr>
                        <td>${i+1}</td> 
                        <td>${ORDERS[i]['日期']}</td>
                        <td>${ORDERS[i]['時間']}</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm" id="orderDetail-${ORDERS[i]['o_id']}" onclick="showOrderDetail( )">詳細資料</button>
                        </td>   
                    </tr>        
                    `
        list.innerHTML += text;
    }
}


window.onload = function() {
    putMemberInfo();
    putMemberAccount();
    putOrderList();
}