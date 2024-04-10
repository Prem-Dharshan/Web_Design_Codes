<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container" >
        <h1>Student Registration Form</h1>

        <form name="signup" id="signup" method="post" action="submit.php" target="_blank" onsubmit="return validateForm()">
            <div class="input-field">
                <span>Name:</span>
                <input type="text" name="name" id="name">
            </div>
            <div class="input-field">
                <span>Father's Name: </span>
                <input type="text" name="dadname" id="dadname">
            </div>
            <div class="input-field">
                <span>Mother's Name: </span>
                <input type="text" name="momname" id="momname">
            </div>
            <div class="input-field">
                <span>Phone Number: </span>
                <input type="tel" name="phno" id="phno">
            </div>
            <div class="input-field">
                <span>Email: </span>
                <input type="email" name="email" id="email">
            </div>
            <div class="input-field">
                <span>Gender: </span>
                <input type="radio" name="gender" id="male" value="male">
                <label for="male">Male</label>
                <input type="radio" name="gender" id="female" value="female">
                <label for="female">Female</label>
                <input type="radio" name="gender" id="other" value="other">
                <label for="other">Other</label>
            </div>
            <div class="input-field">
                <span>Date: </span>

                <input type="number" id="day" name="day" min="1" max="31">

                <label for="month">-</label>
                <input type="number" id="month" name="month" min="1" max="12">

                <label for="year"> - </label>
                <input type="number" id="year" name="year" min="1900" max="2100">

                <i>(dd-mm-yyyy)</i>
            </div>

            <div class="input-field">
                <span>Address</span>
                <input type="text" name="addr" id="addr">
            </div>

            <div class="input-field">
                <span>Blood Group: </span>

                <select name="bloodgrp" id="bloodgrp">
                    <option disabled selected hidden value="">Select</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </div>

            <div class="input-field">
                <span>Department: </span>
                <input type="radio" name="department" id="cse" value="CSE">
                <label for="cse">CSE</label>
                <input type="radio" name="department" id="eee" value="EEE">
                <label for="eee">EEE</label>
                <input type="radio" name="department" id="bba" value="BBA">
                <label for="bba">BBA</label>
            </div>

            <div class="input-field">
                <span>Course</span>

                <input type="checkbox" name="course[]" id="C" value="C">
                <label for="C">C</label>

                <input type="checkbox" name="course[]" id="Cpp" value="C++">
                <label for="Cpp">C++</label>

                <input type="checkbox" name="course[]" id="Java" value="Java">
                <label for="Java">Java</label>

                <input type="checkbox" name="course[]" id="AI" value="AI">
                <label for="AI">AI</label>

                <input type="checkbox" name="course[]" id="ML" value="Machine Learning">
                <label for="ML">Machine Learning</label>

                <input type="checkbox" name="course[]" id="Robotics" value="Robotics">
                <label for="Robotics">Robotics</label>
            </div>

            <span class="alert-msg"></span>

            <button type="submit" id="submit">Submit</button>
            <button type="reset" id="reset">Reset</button>

        </form>
    </div>

    <script>

        document.getElementById( "orderForm" )
        .addEventListener( "submit", function ( event ) {

            event.preventDefault();

            if ( validateForm() ) {
                this.submit();
            } 
            else {
                return false;
            }

        } );

        function validateForm( event ) {
            
            var name = document.getElementById("name").value.trim();
            var dadname = document.getElementById("dadname").value.trim();
            var momname = document.getElementById("momname").value.trim();
            var phno = document.getElementById("phno").value.trim();
            var email = document.getElementById("email").value.trim();
            var gender = document.querySelector("input[name='gender']:checked");
            var day = document.getElementById("day").value.trim();
            var month = document.getElementById("month").value.trim();
            var year = document.getElementById("year").value.trim();
            var addr = document.getElementById("addr").value.trim();
            var bloodgrp = document.getElementById("bloodgrp").value.trim();
            var department = document.querySelector("input[name='department']:checked");
            var courses = document.querySelectorAll("input[name='course[]']:checked");

            let errorMessage = "";

            const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            const nameRegex = /^[a-zA-Z\s]+$/;  
            const phoneRegex = /^\d{6,10}$/;

            if (!nameRegex.test(name)) {
                errorMessage += "Invalid name format. Please enter a valid name.\n";
                document.getElementById("name").style.outline = "2px solid red";
            } 
            else {
                document.getElementById("name").style.outline = "2px solid green";
            }

            // Validation for dad's name
            if (!nameRegex.test(dadname)) {
                errorMessage += "Invalid dad's name format. Please enter a valid name.\n";
                document.getElementById("dadname").style.outline = "2px solid red";
            } else {
                document.getElementById("dadname").style.outline = "2px solid green";
            }

            // Validation for mom's name
            if (!nameRegex.test(momname)) {
                errorMessage += "Invalid mom's name format. Please enter a valid name.\n";
                document.getElementById("momname").style.outline = "2px solid red";
            } else {
                document.getElementById("momname").style.outline = "2px solid green";
            }

            // Validation for phone number
            if (!phoneRegex.test(phno)) {
                errorMessage += "Invalid phone number format. Please enter a valid phone number.\n";
                document.getElementById("phno").style.outline = "2px solid red";
            } else {
                document.getElementById("phno").style.outline = "2px solid green";
            }

            // Validation for email
            if (!emailRegex.test(email)) {
                errorMessage += "Invalid email format. Please enter a valid email address.\n";
                document.getElementById("email").style.outline = "2px solid red";
            } else {
                document.getElementById("email").style.outline = "2px solid green";
            }

            // Validation for gender
            if (!gender) {
                errorMessage += "Please select a gender.\n";
            }

            // Validation for date
            if (day === '' || month === '' || year === '') {
                errorMessage += "Please enter a valid date.\n";
            }

            // Validation for address
            if (addr === '') {
                errorMessage += "Please enter your address.\n";
                document.getElementById("addr").style.outline = "2px solid red";
            } else {
                document.getElementById("addr").style.outline = "2px solid green";
            }

            // Validation for blood group
            if (bloodgrp === '') {
                errorMessage += "Please select your blood group.\n";
                document.getElementById("bloodgrp").style.outline = "2px solid red";
            } else {
                document.getElementById("bloodgrp").style.outline = "2px solid green";
            }

            // Validation for department
            if (!department) {
                errorMessage += "Please select your department.\n";
            }
            

            // Validation for courses
            if (courses.length === 0) {
                errorMessage += "Please select at least one course.\n";
            }

            if (errorMessage !== '') {
                console.log("Error message not empty:", errorMessage);
                document.getElementsByClassName("alert-msg")[0].innerHTML = errorMessage;
                return false;
            }
            
            console.log("Error message not empty:", errorMessage);
            console.log("Error message is empty.");
            document.getElementsByClassName("alert-msg")[0].innerHTML = '';
            return true;
            

            // if (errorMessage !== '') {
            //     document.getElementsByClassName("alert-msg")[0].innerHTML = errorMessage;
            //     document.querySelector(".form-container").classList.add("form-with-error"); // Add this line
            //     return false;
            // } else {
            //     document.getElementsByClassName("alert-msg")[0].innerHTML = '';
            //     document.querySelector(".form-container").classList.remove("form-with-error"); // Add this line
            //     return true;
            // }
        }
        
    </script>

</body>
</html>
