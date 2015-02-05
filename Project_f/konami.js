var code = 0;

window.onkeydown = function(){
	var e = event || window.event;
	var key = e.which || e.keyCode;
	if (key == 38 && code < 2)
		code++;
	else if(key == 40 && code < 4)
		code++;
	else if(key == 37 && (code == 4 || code == 6))
		code++;
	else if(key == 39 && (code == 5 || code == 7))
		code++;
	else if(key == 66 && code == 8)
		code++;
	else if(key == 65 && code == 9)
		code++
	else if(key == 13 && code == 10)
		window.open("canvas.php");
}

// 38 38 40 40 37 39 37 39 66 65 13