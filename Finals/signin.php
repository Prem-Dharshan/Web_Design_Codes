<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation and MySQL Storage</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        document.getElementById( "sign-up" )
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

            var name = document.getElementById( 'name' ).value;
            var email = document.getElementById( 'email' ).value;
            var password = document.getElementById( 'password' ).value;

            const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            const passwordRegex = /^(?=.*[a-zA-Z0-9]).{8,}$/;

            let errorMessage = "";

            if ( !emailRegex.test( email ) ) {
                errorMessage = "Invalid email format. Please enter a valid email address.\n";
                document.getElementsByClassName( "alert-msg" )[1].innerHTML = errorMessage;
                document.getElementById( "email" ).style.outline = "2px solid red";
            } else {
                document.getElementsByClassName( "alert-msg" )[1].innerHTML = "";
                document.getElementById( "email" ).style.outline = "2px solid green";
            }

            if ( !passwordRegex.test( password ) ) {
                errorMessage = "Invalid password. Password must be at least 8 characters long and contain a lowercase letter, an uppercase letter, a number, and a special character.\n";
                document.getElementsByClassName( "alert-msg" )[2].innerHTML = errorMessage;
                document.getElementById( "password" ).style.outline = "2px solid red";
            } else {
                document.getElementsByClassName( "alert-msg" )[2].innerHTML = "";
                document.getElementById( "password" ).style.outline = "2px solid green";
            }

            if ( name.trim() === '' || email.trim() === '' || password.trim() === '' ) {
                errorMessage = "All fields are required";
            }

            if (errorMessage === ''){
                return true;
            }
            else {
                return false;
            }
            
        }
    </script>
</head>

<body>
    <div class="form-container">
        <form id="sign-up" name="sign_up" method="post" action="store_data.php" target="_blank" onsubmit="return validateForm()">

            <div class="input-field">
                <label for="name"> Name </label>
                <input type="name" id="name" name="name">
                <span class="alert-msg"></span>
            </div>

            <div class="input-field">
                <label for="email"> Email </label>
                <input type="email" id="email" name="email">
                <span class="alert-msg"></span>
            </div>

            <div class="input-field">
                <label for="password"> Password </label>
                <input type="password" id="password" name="password">
                <span class="alert-msg"></span>
            </div>

            <input type="submit" value="Submit">
        </form>
    </div>

</body>

</html>