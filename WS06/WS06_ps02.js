function decimals(number, decimalPlaces) {
	return number.toFixed(decimalPlaces);
}

console.log(decimals(2.100212, 2));
console.log(decimals(2.100212, 3));
console.log(decimals(2100, 2));
