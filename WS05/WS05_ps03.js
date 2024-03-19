

for (var i = 1; i <= 100; i++) {
	if (i % 3 === 0 && i % 5 === 0) {
		document.write("CARBUS" + "<br>");
	} else if (i % 3 === 0) {
		document.write("CAR" + "<br>");
	} else if (i % 5 === 0) {
		document.write("BUS" + "<br>");
	} else {
		document.write(i + "<br>");
	}
}
