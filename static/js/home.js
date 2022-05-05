let restaurant = [
    {"name":'WooChi', "tel":"11111", "addr":"22222", "openhour":"33333","mail":"44444"},
]

let description = [
    {"content":'<br>HELLO<br>HELLOHELLO<br>HELLOHELLOHELLO'},
]

let news = [
    {"content":'aaaaaaaaaa', "date":"2022-05-04"},
    {"content":'bbbbbbbbbb', "date":"2022-05-05"},
    {"content":'cccccccccc', "date":"2022-05-06"},
    {"content":'dddddddddd', "date":"2022-05-07"},
    {"content":'eeeeeeeeee', "date":"2022-05-08"},
]


function putText() {
    let base = document.getElementById("restaurant");
    let rtext = `名字 : ${restaurant[0]["name"]}<br>電話 : ${restaurant[0]["tel"]}<br>
    地址 : ${restaurant[0]["addr"]}<br>營業時間 : ${restaurant[0]["openhour"]}<br>信箱 : ${restaurant[0]["mail"]}`;
    base.innerHTML += rtext;

    let des = document.getElementById("description");
    let dtext = `簡介 : ${description[0]["content"]}<br>`;
    des.innerHTML = dtext;

    let newss = document.getElementById("news");
    for (let i=0; i<5; i++){
        let ntext = `<tr><td>${news[i]["content"]}</td><td>${news[i]["date"]}</td></tr>`;
        newss.innerHTML += ntext;
    }
}
window.onload = function() {
    putText();
}