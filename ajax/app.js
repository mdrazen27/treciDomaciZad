let drzave="http://127.0.0.1/uvod-php/ajax/countries_list.php";
let gradovi="http://127.0.0.1/uvod-php/ajax/cities_list.php";

var nizDrzava=[];

async function readingCountryFromServer(where){
    let response= await fetch(where);
    let responseJSON=await response.json();
    let items = responseJSON;
    let f=`<option value="">none</option>`;
    items.forEach(item=>{
    f+=`<option value="${item["name"]}" id="${item["name"]}">${item["name"]}</option>`;
    })
    return document.getElementById("country-names").innerHTML=f;
}

async function readingCityFromServer(where){
    let response= await fetch(where);
    let responseJSON=await response.json();
    let country=nizDrzava.indexOf(document.getElementById("country-names").value)+1; 
    let items = responseJSON;
    let f=`<option value="">none</option>`;
    if(country==0) return document.getElementById("city-names").innerHTML=f;

    items.forEach(item=>{if(item["country_id"]==country){
    f+=`<option value="${item["name"]}" id="${item["name"]}">${item["name"]}</option>`}})

    return document.getElementById("city-names").innerHTML=f; 
}

document.getElementById("country-names").addEventListener("change",()=>{
    readingCityFromServer(gradovi);});

async function upisDrzava(where){
    let response = await fetch(where);
    let responseJSON = await response.json();
    responseJSON.forEach(element =>nizDrzava.push(element["name"]) )
}

upisDrzava(drzave);