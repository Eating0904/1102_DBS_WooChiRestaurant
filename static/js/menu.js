let MENU = [
    {"path":'../logo.png'},
    {"path":'../logo2.png'},
    {"path":'../logo3.png'},
    {"path":'../logo.png'},
    {"path":'../logo2.png'},
    {"path":'../logo3.png'},
    {"path":'../logo.png'},
    {"path":'../logo2.png'},
    {"path":'../logo3.png'},
    {"path":'../logo.png'},
    {"path":'../logo2.png'},
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