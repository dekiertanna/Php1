/* encoding="UTF-8" */

function addZero(i)
{
if (i<10)
return '0'+i;
else
return i;
}

function showDataAndTime()
{
var date=new Date();
var days = ["Niedziela","Poniedziałek", "Wtorek", "Środa", "Czwartek", "Piątek", "Sobota", ];
var dateOnScreen="Dziś mamy: "+days[date.getDay()]+"  "+addZero(date.getDate())+"."+addZero(date.getMonth()+1)+"."+ date.getFullYear();
var timeOnScreen="Jest godzina: "+addZero(date.getHours())+":"+addZero(date.getMinutes())+":"+addZero(date.getSeconds());
 document.querySelector('#pasekgorny').innerHTML = dateOnScreen+"<br />"+timeOnScreen;
 
 
 setTimeout(function() {showDataAndTime()}, 1000);  //czas w ms
}

showDataAndTime();

   
