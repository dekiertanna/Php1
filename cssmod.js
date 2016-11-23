/**
 * Created by Przemek on 2016-11-18.
 */

var divtresc;


function changeBackground()
{
var value=document.getElementById("tlodiva").value;
    divtresc.style.backgroundColor=value;
}


function changeFontColor()
{
var value=document.getElementById("kolortekstu").value;
    divtresc.style.color=value;
}


function registerListeners()

{
   
    document.getElementById("submittekst").addEventListener('click',changeFontColor);
    document.getElementById("czcionka").addEventListener('click',changeFont);
    divtresc=document.getElementById("divtresc");
}
registerListeners();

function sprawdzFormularz(formularz)
{
    var txt;
    var r = confirm("Czy potwierdzasz zmiane tla?");
    window.confirm(txt);
    if (r == true) {
      changeBackground();
    } else {
      return false;
    }

}

function czyZresetowac(formularz)
{
    var txt;
    var r = confirm("Czy napewno zresetowac formularz?");
    window.confirm(txt);
    if (r == true) {
        return true;
    } else {
        return false;
    }
}