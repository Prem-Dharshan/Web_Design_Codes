// Function to find the maximum of three integers
function findMax(a, b, c) {
	if (a >= b && a >= c) {
		return a;
	} else if (b >= a && b >= c) {
		return b;
	} else {
		return c;
	}
}

// Example integers
const num1 = 10;
const num2 = 20;
const num3 = 15;

// Find the maximum
const max = findMax(num1, num2, num3);

// Display the maximum
console.log("The maximum of the three numbers is: " + max);
