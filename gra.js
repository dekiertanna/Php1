/* encoding="UTF-8" */
var n;
var x;
var counter = 0;
var numberField;
var divtresc;
var statystyka;
function dajPodpowiedz() {
    n = numberField.value;

    var reg = /^[0-9]{1,3}$/;
    if (!reg.test(n)) {
        window.alert("Podales zly format liczby sprobuj ponownie");
    }
    else {

        if (x < n) {
            window.alert("Podales: " + n + " Wpisz mniejsza ");
        }
        if (x > n) {
            window.alert("Podales: " + n + " Wpisz wieksza ");
        }
        numberField.value = "";
        var y = document.createElement("H3");
        y.textContent = "Twoj wynik to:" + counter;
        if (divtresc.lastChild.nodeName != "H3") {
            divtresc.appendChild(y);
        }
        else {
            divtresc.lastChild.textContent = "Twoj wynik to:" + counter;
        }


    }

    statystyka[counter] = n;
}


function zwiekszLicznik() {

    if (numberField.value != x) {
        counter++;
    }
    else {

        document.writeln("WYGRAłEŚ Twój wynik wynosi: " + counter);
        var msg = "Twoj poziom zaawansowania to: ";
        var val;
        if (counter < 5) {
            val = 5;
        }
        else if (counter < 10) {
            val = 4;
        }
        else if (counter < 15) {
            val = 3;
        }
        else if (counter < 20) {
            val = 2;
        }
        else {
            val = 1;
        }


        switch (val) {
            case 1: {
                msg += "I nowicjusz";
                break;
            }
            case 2: {
                msg += "II sredniozaawansowany ";
                break;
            }
            case 3: {
                msg += "III zaawansowany";
                break;
            }
            case 4: {
                msg += "IV weteran";
                break;
            }
            case 5: {
                msg += "V mistrz";
                break;
            }
        }
        window.alert(msg);

        var i=0;
        while(i<10)
        {
            document.writeln("gratuluje po raz "+i);
            i++;
        }
    }
}




function dajDzwiek() {
    var audio = document.createElement("audio");
    audio.src = "sample.mp3";
    audio.play();
    divtresc.appendChild(audio);

}


function play() {
    x = Math.floor((Math.random() * 999) + 1);
    var acceptNumber = document.getElementById("acceptNumber");
    numberField = document.getElementById("numberField");
    numberField.addEventListener("change", zwiekszLicznik);
    acceptNumber.addEventListener("click", dajPodpowiedz);
    acceptNumber.addEventListener("click", function () {

       acceptNumber.background.color = "red";
    });
    divtresc = document.getElementById("tresc");
    window.addEventListener("resize", dajDzwiek);
}

function arithmeticExample() {
    var string = window.prompt("Podaj liczbę");
    var p = document.createElement("p");
    var first = parseInt(string);
    var second = parseFloat("20.5 Kotów ma Ala a nie 24.5");  //parse float zwraca tylko pierwsza liczbe z ciagu
    var sumone = first + second;
    p.textContent = first + "+" + second + "=" + sumone;
    divtresc.appendChild(p);

}

play();
arithmeticExample();