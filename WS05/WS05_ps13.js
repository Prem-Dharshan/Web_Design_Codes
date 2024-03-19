function computePerimeter(radius) {
	return 2 * Math.PI * radius;
}

function computeArea(radius) {
	return Math.PI * radius * radius;
}

const radius = 5;

const perimeter = computePerimeter(radius);
const area = computeArea(radius);

console.log("Perimeter of the circle: " + perimeter.toFixed(2) + " units");
console.log("Area of the circle: " + area.toFixed(2) + " square units");
