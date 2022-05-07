let DESCRIPTION = [
    {"content":'這裡要放餐廳簡介'},
]

let RESTAURANT = [
    {"name":'WooChi', "tel":"00", "addr":"11", "openhour":"22","mail":"33"},
]

let NEWS = [
    {"content":'aaa', "date":"2022-05-04"},
    {"content":'bbb', "date":"2022-05-05"},
    {"content":'ccc', "date":"2022-05-06"},
    {"content":'ddd', "date":"2022-05-07"},
    {"content":'eee', "date":"2022-05-08"},
]


function putText() {
    //餐廳簡介
    let des = document.getElementById("description");
    des.innerHTML = `${DESCRIPTION[0]["content"]}`;

    //餐廳基本資訊
    let base = document.getElementById("restaurant").getElementsByTagName("span");
    base[0].textContent += `${RESTAURANT[0]["name"]}`;
    base[1].textContent += `${RESTAURANT[0]["addr"]}`;
    base[2].textContent += `${RESTAURANT[0]["tel"]}`;
    base[3].textContent += `${RESTAURANT[0]["mail"]}`;
    base[4].textContent += `${RESTAURANT[0]["openhour"]}`;

    //餐廳最新消息
    let news = document.getElementById("news");
    for (let i=0; i<NEWS.length; i++){
        let ntext = `<tr><td>${NEWS[i]["content"]}</td><td>${NEWS[i]["date"]}</td></tr>`;
        news.innerHTML += ntext;
    }   
}

window.onload = function() {
    putText();
}