function isCtrlPressed(event) {
    if (event.ctrlKey) {
        alert("Wci�ni�to CTRL");
    } else {
        alert("CTRL nie zosta� wci�ni�ty");
    }
}

function isShiftPressed(event) {
    if (event.shiftKey) {
        alert(" Wci�ni�to Shift");
    } else {
        alert("Shift nie zosta� wci�ni�ty");
    }
}
function mouseMoving(event) {
	var x = event.clientX;
    var y = event.clientY;
	document.getElementById("x").value = x;
	document.getElementById("y").value = y;
}