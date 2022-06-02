function searchOrder() {
    // console.log("click")
    url = "../php/search_order.php";
    data = {
        "content" : $("input[name='searchOrder']").val(),
    }
    console.log(data)
    $.post(
        url,
        data,
        (response, status) => {
            if (status == "success") {
                if (response["status"] == "success") {
                    if(response["type"]="name") {
                        // console.log(response);
                        $("#hide").css("display","block");
                        putOrderList(response["data_order"]);
                    }
                    else if (response["type"]="ID"){
                        console.log(response);
                    }
                }
                else {
                    alert("查無此訂單");
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
                        <td>${ORDERS[i]['name']}</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm" id="orderDetail-${ORDERS[i]['o_id']}" onclick="showOrderDetail();postOrderId(${ORDERS[i]['o_id']})">詳細資料</button>
                        </td>   
                    </tr>        
                    `
        list.innerHTML += text;
    }
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
                if (response["status"] == "success") {
                    let ORDERDETAIL = response
                    putOrderDetail(ORDERDETAIL);
                }
                else {
                    console.log(response["error"]);
                }
            }
        }
    ) 
}
function putOrderDetail(ORDERDETAIL){
    
    // console.log(ORDERDETAIL);
    let datacustomer = ORDERDETAIL["data_customer"][0];
    let dataorder = ORDERDETAIL["data_order"][0];
    let orderdetail = document.getElementById("orderDetail");
    let orderdetailmember = orderdetail.getElementsByTagName("h5")[0];
    orderdetailmember.innerHTML = `#&emsp;${dataorder["meal_time"]}`;
    
    let orderdetailcontent = orderdetail.getElementsByTagName("span");
    orderdetailcontent[0].innerHTML = `用餐人數 : ${dataorder["num_of_people"]}`;
    orderdetailcontent[1].innerHTML = `用餐區域 : ${dataorder["seat"]}`;
    orderdetailcontent[2].innerHTML = `領養意願 : ${dataorder["adoption"]}`;
    orderdetailcontent[3].innerHTML = `備註 : ${dataorder["note"]}`;
}

//顯示詳細資訊
function showOrderDetail() {
    // document.getElementsByClassName("cover")[0].style.display = "block";
    document.getElementById("orderDetail").style.display = "block";
    document.getElementsByClassName("window")[0].style.display = "block";
}
//關閉詳細資訊
function closeOrderDetail() {
    // document.getElementsByClassName("cover")[0].style.display = "none";
    document.getElementById("orderDetail").style.display = "none";
    document.getElementsByClassName("window")[0].style.display = "none";
}