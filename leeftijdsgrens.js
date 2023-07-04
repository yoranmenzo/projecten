function myFuncion() {
    let leeftijdsgrens = Number(document.getElementById("age").value);
    let leeftijdsgrens9 = 9;
    let leeftijdsgrens118 = 118;
    let gefeliciteerd = [10, 16, 18, 50, 67, 100];
    if (leeftijdsgrens <= leeftijdsgrens9) {
        alert("je bent niet oud genoeg. druk op ok om een andere leeftijd in te voeren")
        location.reload();
        return;
    } 
    if (leeftijdsgrens >= leeftijdsgrens118) {
        alert("je het een te hoge leeftijd ingevoerd. druk op ok om een andere leeftijd in te voeren")
        location.reload();
        return;
        }
    if (gefeliciteerd.includes(leeftijdsgrens)) {
      document.getElementById("outputDiv").innerHTML = "wow al " + leeftijdsgrens + " jaar oud dat moet gevierd worden";
    } else {
       if (leeftijdsgrens == 62) {
        window.alert("nog 5 jaar tot je 67 bent")
    } else {
      document.getElementById("outputDiv").innerHTML = "wow je bent al " + leeftijdsgrens + " jaar oud";
    }
}
}