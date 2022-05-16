let DOGS = [
    {"path":'../logo.png', "name":'A', "variety":'A1', "size":'A2', "gender":'A3', "age":'A4', "description":'A5', "晶片":'Y', "結紮":'Y'},
    {"path":'../logo2.png', "name":'B', "variety":'B1', "size":'B2', "gender":'B3', "age":'B4', "description":'B5', "晶片":'N', "結紮":'N'},
    {"path":'../logo3.png', "name":'C', "variety":'C1', "size":'C2', "gender":'C3', "age":'C4', "description":'C5', "晶片":'Y', "結紮":'Y'},
    {"path":'../logo.png', "name":'D', "variety":'D1', "size":'D2', "gender":'D3', "age":'D4', "description":'D5', "晶片":'N', "結紮":'N'},
    {"path":'../logo2.png', "name":'E', "variety":'E1', "size":'E2', "gender":'E3', "age":'E4', "description":'E5', "晶片":'Y', "結紮":'Y'},
    {"path":'../logo3.png', "name":'F', "variety":'F1', "size":'F2', "gender":'F3', "age":'F4', "description":'F5', "晶片":'N', "結紮":'N'},
    {"path":'../logo.png', "name":'G', "variety":'G1', "size":'G2', "gender":'G3', "age":'G4', "description":'G5', "晶片":'Y', "結紮":'Y'},
    {"path":'../logo2.png', "name":'H', "variety":'H1', "size":'H2', "gender":'H3', "age":'H4', "description":'H5', "晶片":'N', "結紮":'N'},
]

let CATS = [
    {"path":'../logo2.png', "name":'a', "variety":'a1', "size":'a2', "gender":'a3', "age":'a4', "description":'a5', "晶片":'Y', "結紮":'Y'},
    {"path":'../logo3.png', "name":'b', "variety":'b1', "size":'b2', "gender":'b3', "age":'b4', "description":'b5', "晶片":'N', "結紮":'N'},
    {"path":'../logo.png', "name":'c', "variety":'c1', "size":'c2', "gender":'c3', "age":'c4', "description":'c5', "晶片":'Y', "結紮":'Y'},
    {"path":'../logo2.png', "name":'d', "variety":'d1', "size":'d2', "gender":'d3', "age":'d4', "description":'d5', "晶片":'N', "結紮":'N'},
    {"path":'../logo3.png', "name":'e', "variety":'e1', "size":'e2', "gender":'e3', "age":'e4', "description":'e5', "晶片":'Y', "結紮":'Y'},
    {"path":'../logo.png', "name":'f', "variety":'f1', "size":'f2', "gender":'f3', "age":'f4', "description":'f5', "晶片":'N', "結紮":'N'},
    {"path":'../logo2.png', "name":'g', "variety":'g1', "size":'g2', "gender":'g3', "age":'g4', "description":'g5', "晶片":'Y', "結紮":'Y'},
    {"path":'../logo3.png', "name":'h', "variety":'h1', "size":'h2', "gender":'h3', "age":'h4', "description":'h5', "晶片":'N', "結紮":'N'},
]


function putPets() {
    //寵物資料 - 狗狗
    let dog = document.getElementById("pills-home");
    for(let i=0; i<DOGS.length; i++){
        //照片
        let img = dog.getElementsByTagName("img");
        img[i].src = `${DOGS[i]["path"]}`;
        //名字
        let petname = dog.getElementsByClassName("card-title");
        petname[i].textContent = `${DOGS[i]["name"]}`;
        //細節
        let pets = dog.getElementsByClassName("card-text")[i].getElementsByTagName("span");
        pets[0].textContent += `${DOGS[i]["variety"]}`;
        pets[1].textContent += `${DOGS[i]["size"]}`;
        pets[2].textContent += `${DOGS[i]["gender"]}`;
        pets[3].textContent += `${DOGS[i]["age"]}`;
        pets[4].textContent += `${DOGS[i]["description"]}`;

        let petss = dog.getElementsByClassName("card-text")[i].getElementsByTagName("small");
        petss[0].textContent += `${DOGS[i]["晶片"]}`;
        petss[1].textContent += `${DOGS[i]["結紮"]}`;
    }

    //寵物資料 - 貓貓
    let cat = document.getElementById("pills-profile");
    for(let i=0; i<CATS.length; i++){
        //照片
        let img = cat.getElementsByTagName("img");
        img[i].src = `${CATS[i]["path"]}`;
        //名字
        let petname = cat.getElementsByClassName("card-title");
        petname[i].textContent = `${CATS[i]["name"]}`;
        //細節
        let pets = cat.getElementsByClassName("card-text")[i].getElementsByTagName("span");
        pets[0].textContent += `${CATS[i]["variety"]}`;
        pets[1].textContent += `${CATS[i]["size"]}`;
        pets[2].textContent += `${CATS[i]["gender"]}`;
        pets[3].textContent += `${CATS[i]["age"]}`;
        pets[4].textContent += `${CATS[i]["description"]}`;

        let petss = cat.getElementsByClassName("card-text")[i].getElementsByTagName("small");
        petss[0].textContent += `${CATS[i]["晶片"]}`;
        petss[1].textContent += `${CATS[i]["結紮"]}`;
    }

}

window.onload = function() {
    putPets();

}