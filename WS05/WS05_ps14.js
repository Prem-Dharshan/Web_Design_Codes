// Function to calculate salary
function calculateSalary(employeeID, totalHoursWorked, hourlyRate) {
	const salary = totalHoursWorked * hourlyRate;
	return { employeeID: employeeID, salary: salary };
}

// Example inputs
const employeeID = "EMP001";
const totalHoursWorked = 160; // Assuming 160 hours in a month
const hourlyRate = 50; // Rs. 50 per hour

// Calculate salary
const result = calculateSalary(employeeID, totalHoursWorked, hourlyRate);

// Print result
console.log("Employee ID: " + result.employeeID);
console.log("Salary for the month: Rs. " + result.salary);
