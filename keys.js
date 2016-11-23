function isCtrlPressed(event) {
    if (event.ctrlKey) {
        alert("Wciœniêto CTRL");
    } else {
        alert("CTRL nie zosta³ wciœniêty");
    }
}

function isShiftPressed(event) {
    if (event.shiftKey) {
        alert(" Wciœniêto Shift");
    } else {
        alert("Shift nie zosta³ wciœniêty");
    }
}
function mouseMoving(event) {
	var x = event.clientX;
    var y = event.clientY;
	document.getElementById("x").value = x;
	document.getElementById("y").value = y;
}