function myfunction() {
    let maxDate = new Date().toISOString().split("T")[0];
    document.getElementById("gd").setAttribute("max", maxDate);
    let geboortedatum = new Date(document.getElementById("gd").value);
    let geboortedag = geboortedatum.getDate();
    let geboortemaand = geboortedatum.getMonth() + 1;
    let geboortejaar = geboortedatum.getFullYear();
  
    if (!geboortedatum || isNaN(geboortedatum.getTime())) {
      return;
    }
  
    let vandaag = new Date();
    let dagvandaag = vandaag.getDate();
    let maandvandaag = vandaag.getMonth() + 1;
    let jaarvandaag = vandaag.getFullYear();
    let leeftijd = jaarvandaag - geboortejaar;
    let leeftijd67 = 68 - leeftijd;
    let leeftijd16 = Math.max(16 - leeftijd, 0);
    let leeftijd50 = 51 - leeftijd;
    let leeftijd100 = 101 - leeftijd;
  
    if (dagvandaag == geboortedag && maandvandaag == geboortemaand) {
      document.getElementById("outputDiv").innerHTML = "Gefeliciteerd met je " + leeftijd + "ste verjaardag!";
    } else {
      if (leeftijd < 16) {
        document.getElementById("outputDiv").innerHTML = "Je wordt " + leeftijd16 + " jaar oud in " + (geboortejaar + 16 - jaarvandaag) + " jaar." + "<br>";
        document.getElementById("outputDiv").innerHTML += "En je bent " + leeftijd + " jaar oud.";
      } else {
        document.getElementById("outputDiv").innerHTML = "Je bent " + leeftijd + " jaar oud" + "<br>";
        document.getElementById("outputDiv").innerHTML += "Dus je bent " + (leeftijd - 16) + " jaar ouder dan 16 " + "<br>";
        document.getElementById("outputDiv").innerHTML += "En over " + leeftijd67 + " jaar ben je 67" + "<br>";
        document.getElementById("outputDiv").innerHTML += "Gelukkig duurt het nog " + leeftijd50 + " jaar voor je 50 wordt" + "<br>";
        document.getElementById("outputDiv").innerHTML += "En het duurt helemaal lang voordat je 100 jaar bent, nog " + leeftijd100 + " jaar.";
      }
    }
  }
  