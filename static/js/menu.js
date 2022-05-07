let MENU = [
    {"path":'../logo.png'},
    {"path":'../logo2.png'},
    {"path":'../logo3.png'},
]

function putImage() {
    //餐廳守則&菜單
    let news = document.getElementById("menu").getElementsByTagName("div");
    news[0].innerHTML = `<img src="${MENU[0]["path"]}" class="d-block w-50" alt="Image"></img>`;    
    for (let i=1; i<MENU.length; i++){
        news[i].innerHTML +=
        `<div class="carousel-item"><img src="${MENU[i]["path"]}" class="d-block w-50" alt="Image"></img></div>`;
    }
}
window.onload = function() {
    putImage();
}