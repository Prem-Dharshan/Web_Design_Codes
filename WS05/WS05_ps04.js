function checkMultiple(number) {
	if (number > 0 && (number % 3 === 0 || number % 7 === 0)) {
		document.write(number + " is a multiple of 3 or 7.");
	} else {
		document.write(number + " is not a multiple of 3 or 7.");
	}
}

// Example usage:
checkMultiple(21); // Output: 21 is a multiple of 3 or 7.
