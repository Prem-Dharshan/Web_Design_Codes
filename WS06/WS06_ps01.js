function rand(max, min) {
	if (max === undefined && min === undefined) {
		return Math.floor(Math.random() * 100);
	} else if (min === undefined) {
		return Math.floor(Math.random() * max);
	} else {
		return Math.floor(Math.random() * (max - min + 1)) + min;
	}
}

console.log(rand(20, 1));
console.log(rand(1, 10));
console.log(rand(6));
console.log(rand());
