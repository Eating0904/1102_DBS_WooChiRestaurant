let MEMBER= [
    {"name":'Eating', "tel":"0123456789","mail":"12345@54321"},
]

let ACCOUNT= [
    {"account":'Eating0904', "password":"9876654321"},
]


function putText() {
    let member = document.getElementById("member");
    let mtext = `名字 : <input type="text" value="${MEMBER[0]["name"]}"><br>
                 電話 : <input type="text" value="${MEMBER[0]["tel"]}"><br>
                 信箱 : <input type="text" value="${MEMBER[0]["mail"]}"><br>`
    member.innerHTML += mtext;

    let account = document.getElementById("account");
    let atext = `帳號 : <input type="text" value="${ACCOUNT[0]["account"]}"><br>
                 密碼 : <input type="password" value="${ACCOUNT[0]["password"]}"><br>`
    account.innerHTML += atext;
}

window.onload = function() {
    putText();
}