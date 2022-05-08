let RATE = [
    {"name":'Eating1',"star":'1',"content":'AAA'},
    {"name":'Eating2',"star":'2',"content":'BBB'},
    {"name":'Eating3',"star":'3',"content":'CCC'},
    {"name":'Eating4',"star":'4',"content":'DDD'},
    {"name":'Eating5',"star":'5',"content":'EEE'},
]

function putText() {
    let ratename = document.getElementsByClassName("card w-75")
    let ratecontent = document.getElementsByName("ratecontent")
    for (let i=0; i<RATE.length; i++){
        ratename[2*i].getElementsByTagName("h5")[0].textContent = `${RATE[i]["name"]}`;
        ratecontent[i].textContent =  `${RATE[i]["content"]}`;
    }

    //星星 (還沒好)
    let star = document.getElementsByClassName("col-9")
    // if (`${RATE[0]["star"]}`== '1'){
        star[0].getElementsByTagName("svg")[0].class = "bi bi-star-fill";
        star[0].getElementsByTagName("path")[0].d = "M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z";
    // }

}

window.onload = function() {
    putText();
}