// let ORDERS= [
//     {"o_id":'0', "日期":'2022-05-08', "時間":"17:00"},
//     {"o_id":'1', "日期":'2022-05-20', "時間":"18:00"},
// ]

/* 會員資料 */
function postMember() {
    $.post(
        "../php/show_customer.php",
        "",
        (response, status) => {
            if (status == "success") {
                console.log(response);
                if (response["status"] == "success") {
                    let MEMBER = response["data"];
                    putMemberInfo(MEMBER);
                    editMemberInfo(MEMBER);
                }
            }
        }
    )
}
function putMemberInfo(MEMBER) {
    let member = document.getElementById("member").getElementsByTagName("span");
    member[0].textContent += `${MEMBER[1]["account"]}`;
    member[1].textContent += `${MEMBER[0]["c_name"]}`;
    member[2].textContent += `${MEMBER[0]["c_phone"]}`;
    member[3].textContent += `${MEMBER[0]["c_mail"]}`;
    member[4].textContent += `${MEMBER[0]["c_points"]}`;
}
function showMemberEditBox() {
    // document.getElementsByClassName("cover")[0].style.display = "block";
    document.getElementById("editmember").style.display = "block";
}
function closeMemberEditBox() {
    // document.getElementsByClassName("cover")[0].style.display = "block";
    document.getElementById("editmember").style.display = "none";
}
function editMemberInfo(MEMBER) {
    let member = document.getElementById("editmember").getElementsByTagName("input");
    member[0].value = `${MEMBER[1]["account"]}`;
    member[1].value = `${MEMBER[0]["c_name"]}`;
    member[2].value = `${MEMBER[0]["c_phone"]}`;
    member[3].value = `${MEMBER[0]["c_mail"]}`;
    let url = ""
    data = {
        "account" : $("input[name='account']").val(),
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
                    postMember();
                }
                else {
                    console.log(response["error"]);
                }
            }
        }
    )
}

/* 訂單紀錄*/
function postOrder() {
    $.post(
        "../php/show_order.php",
        "",
        (response, status) => {
            if (status == "success") {
                console.log(response);
                if (response["status"] == "success") {
                    let ORDERS = response['data_order']
                    //console.log(ORDERS);
                    putOrderList(ORDERS);
                }
            }
        }
    )
}

function putOrderList(ORDERS) {
    let list = document.getElementById("orderlist");
    for(let i=0; i<ORDERS.length; i++) {
        let text = `
                    <tr>
                        <td>${i+1}</td> 
                        <td>${ORDERS[i]['meal_time']}</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm" id="orderDetail-${ORDERS[i]['o_id']}" onclick="postOrderId(${ORDERS[i]['o_id']})">詳細資料</button>
                        </td>   
                    </tr>        
                    `
        list.innerHTML += text;
    }
}
function postOrderDetail() {
    $.post(
        "../php/show_order_detail.php",
        "",
        (response, status) => {
            if (status == "success") {
                console.log(response);
                if (response["status"] == "success") {
                    // let ORDERDETAIL = response
                    // //console.log(ORDERDETAIL);
                    // putOrderDetail(ORDERDETAIL);
                }
            }
        }
    )
}
function postOrderId(id) {
    let url = "../php/show_order_detail.php";
    let data = {
        "o_id" : id
    }
    $.post(
        url,
        data,
        (response, status) => {
            if (status == "success") {
                console.log(response);
                if (response["status"] == "success") {
                    // console.log(data);
                    postOrderDetail();
                }
                else {
                    console.log(response["error"]);
                }
            }
        }
    ) 
}
function putOrderDetail(){
    let orderdetail = document.getElementById("orderDetail");
    let orderdetailmember = orderdetail.getElementsByTagName("h5")[0];
    orderdetailmember.innerHTML += `顧客姓名&emsp;2022-05-08&emsp;14:00`;

    let orderdetailcontent = orderdetail.getElementsByTagName("span");
    orderdetailcontent[0].textContent += `用餐人數`;
    orderdetailcontent[1].textContent += `用餐區域`;
    orderdetailcontent[2].textContent += `領養意願`;
    orderdetailcontent[3].textContent += `備註`;
    orderdetailcontent[4].textContent += `連絡電話`;
    orderdetailcontent[5].textContent += `聯絡信箱`;

}


window.onload = function() {
    postMember();
    postOrder();
    putOrderDetail();
}