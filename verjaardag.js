function myfuncion() {
    let maxDate = new Date().toISOString().split("T")[0];
document.getElementById("gd").setAttribute("max", maxDate);
    let voornaam = document.getElementById("vn").value;
    let achternaam = document.getElementById("an").value;
    let geboortedatum = new Date(document.getElementById("gd").value);
    if (!geboortedatum || isNaN(geboortedatum.getTime())) {
        return;
    }
    let geboortedag = geboortedatum.getDate();
    let geboortemaand = geboortedatum.getMonth() +1;
    let geboortejaar = geboortedatum.getFullYear();
    let vandaag = new Date();
    let dagvandaag = vandaag.getDate();
    let maandvandaag = vandaag.getMonth() +1;
    let jaarvandaag = vandaag.getFullYear();
    let leeftijd = jaarvandaag - geboortejaar

if (dagvandaag == geboortedag && maandvandaag == geboortemaand){
document.getElementById("outputDiv").innerHTML = "gefeliciteerd " + voornaam + " " + achternaam + " met je " + leeftijd + "ste" + " verjaardag"
} else {
document.getElementById("outputDiv").innerHTML = "welkom " + voornaam + " " + achternaam + " u wordt " + leeftijd + " jaar oud"
}   
}