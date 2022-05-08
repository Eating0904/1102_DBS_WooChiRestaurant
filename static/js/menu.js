let MENU = [
    {"path":'../static/img/menu/p1.png'},
    {"path":'../static/img/menu/p2.png'},
    {"path":'../static/img/menu/p3.png'},
    {"path":'../static/img/menu/p4.png'},
    {"path":'../static/img/menu/p5.png'},
    {"path":'../static/img/menu/p6.png'},
    {"path":'../static/img/menu/p7.png'},
    {"path":'../static/img/menu/p8.png'},
    {"path":'../static/img/menu/p9.png'},
    {"path":'../static/img/menu/p10.png'},
    {"path":'../static/img/menu/p11.png'},
]

function putImage() {
    //餐廳守則&菜單
    let menu = document.getElementById("menu").getElementsByTagName("div");
    for (let i=0; i<MENU.length; i++){
        menu[i].innerHTML = `<img src="${MENU[i]["path"]}" class="d-block w-50" alt="Image"></img>`;
    }
}
window.onload = function() {
    putImage();
}