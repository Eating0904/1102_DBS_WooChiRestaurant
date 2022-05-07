let MEMBER= [
    {"name":'Eating', "tel":'0123456789',"mail":'12345@54321',"points":'100'},
]

let ACCOUNT= [
    {"account":'Eating0904', "password":"9876654321"},
]


function putText() {
    let member = document.getElementById("member").getElementsByTagName("span");
    member[0].textContent += `${MEMBER[0]["name"]}`;
    member[1].textContent += `${MEMBER[0]["tel"]}`;
    member[2].textContent += `${MEMBER[0]["mail"]}`;
    member[3].textContent += `${MEMBER[0]["points"]}`;

    let account = document.getElementById("account").getElementsByTagName("span");
    account[0].textContent += `${ACCOUNT[0]["account"]}`;
    account[1].textContent += `${ACCOUNT[0]["password"]}`;
}

window.onload = function() {
    putText();
}