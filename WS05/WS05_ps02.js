var num1 = parseFloat(prompt("Enter first number:"));
var num2 = parseFloat(prompt("Enter second number:"));
var num3 = parseFloat(prompt("Enter third number:"));

var greatest = num1;
if (num2 > greatest) greatest = num2;
if (num3 > greatest) greatest = num3;

alert("The greatest number is: " + greatest);
