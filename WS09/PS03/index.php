<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            display: grid;
            place-items: center;
            min-height: 100vh;
        }

        .content {
            padding: 1rem;
            border-radius: 14px;
            background-color: #2180B4;
        }

        .input-container {
            display: flex;
            flex-direction: column;
        }

        .message {
            display: none;
            color: red;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            width: 14rem;
        }

        input,
        select {
            height: 2rem;
        }

        p {
            margin-block: 0.5rem;
        }
    </style>

</head>

<body>
    <div class="content">
        <p>Registration Form</p>
        <form action="PSF_04.php" method="post" target="_blank" onsubmit="return validate(event)" id="formu">
            <div class="input-container">
                <input type="text" name="name" id="name" placeholder="Name*">
                <span class="message">Please Enter your name</span>
            </div>
            <div class="input-container">
                <input type="email" name="email" id="email" placeholder="Email*">
                <span class="message">Please Enter your email</span>
            </div>
            <div class="input-container">
                <input type="tel" name="phone" id="phone" placeholder="Phone*">
                <span class="message">Please Enter your phone</span>
            </div>
            <div class="input-container">
                <select name="sub" id="sub">
                    <option value="" disabled selected>Subject*</option>
                    <option value="1">Formal</option>
                    <option value="2">Casual</option>
                    <option value="3">Informal</option>
                </select>
                <span class="message">Please Enter your subject</span>
            </div>
            <div class="input-container">
                <input type="text" name="mensaje" id="mensaje" placeholder="Message*">
                <span class="message">Please Enter your message</span>
            </div>
            <button>Submit</button>
        </form>
    </div>
    <script defer>
        document.getElementById("formu").addEventListener("submit", (event) => {
            if (!validate()) {
                event.preventDefault()
            }
        })

        let validate = (event) => {
            console.log("ok")
            let ans = true;
            let $ = (elt) => document.getElementById(elt)

            let _ = (elt) => document.querySelectorAll(elt)
            // let __ = (elt) => document.querySelector(elt)

            _('message').forEach(x => x.style.display = "none")

            if (!/^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/.test($('email').value)) {
                _('#email~.message')[0].style.display = "block";
                ans = false;
            }

            if (!/^\w{3,10}$/.test($('name').value)) {
                _('#name~.message')[0].style.display = "block";
                ans = false;
            }

            if (!/^\d{10}$/.test($('phone').value)) {
                _('#phone~.message')[0].style.display = "block";
                ans = false;
            }
            if ($("sub").value === "") {
                _('#sub~.message')[0].style.display = "block";
                ans = false;
            }
            if ($("mensaje").value === "") {
                _('#mensaje~.message')[0].style.display = "block";
                ans = false;
            }
            return ans;
        }
    </script>
</body>

</html>