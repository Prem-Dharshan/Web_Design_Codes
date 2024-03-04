function is_Numeric(input) {
	return !isNaN(parseFloat(input)) && isFinite(input);
}

console.log(is_Numeric(12));
console.log(is_Numeric("abcd"));
console.log(is_Numeric("12"));
console.log(is_Numeric(" "));
console.log(is_Numeric(1.2));
console.log(is_Numeric(-200));
