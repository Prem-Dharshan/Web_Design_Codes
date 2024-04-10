<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSF - Q4</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 80vh;
            display: grid;
            place-items: center;
        }

        table {
            min-width: 80vw;
            border-collapse: collapse;
            border: 1px solid black;
        }

        th {
            background-color: black;
            color: white;
            padding: 10px;
        }

        tr:nth-child(2n) {
            background-color: hsl(284, 2%, 69%);
        }

        td {
            padding: 10px;
        }

        input {
            width: 4rem;
            border: 1px solid black;
        }
    </style>
</head>


<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $uname =  $_POST["name"];
        $email =  $_POST["email"];
        $phone = $_POST["phone"];
        $sub =  $_POST["sub"];
        $mess = $_POST["mensaje"];

        $servername = 'localhost';
        $user = "root";
        $pass = "root";
        $db = "fourth";

        $conn = new mysqli($servername, $user, $pass, $db);

        if ($conn->connect_error) {
            die("Connection errror. " . $conn->connect_error);
        }

        echo "Connection estd.";

        if ($conn->query("insert into user_table(email,uname,phone,subject,message) values ('$email', '$uname', '$phone', '$sub', '$mess');")) {
            echo "New user created.";
        } else {
            echo "NOT CREATED." . $conn->error;
        }
    }


    ?>
    <form action="kadaisi.php" method="post" onsubmit="return process()" target="_blank" id="ok">
        <input type="text" name="user" id="user" hidden value="<?php echo $_POST['name']; ?>">
        <table>
            <thead>
                <tr>
                    <th>Product Name </th>
                    <th>Quantity</th>
                    <th>X</th>
                    <th>Unit Price</th>
                    <th>=</th>
                    <th>Totals</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sparkle No. 6&reg; Dry Line Marking Compound </td>
                    <td><input type="number" name="q1" id="q1"></td>
                    <td>x</td>
                    <td class="cost">$165</td>
                    <td>=</td>
                    <td><input type="number" name="t1" id="t1" disabled></td>
                </tr>
                <tr>
                    <td>Turface&reg; MVP - Calcined Clay Soil Conditioner</td>
                    <td><input type="number" name="q2" id="q2"></td>
                    <td>x</td>
                    <td class="cost">$300</td>
                    <td>=</td>
                    <td><input type="number" name="t2" id="t2" disabled></td>
                </tr>
                <tr>
                    <td>Turface&reg; Pro League - Calcined Clay Top Dressing</td>
                    <td><input type="number" name="q3" id="q3"></td>
                    <td>x</td>
                    <td class="cost">$340</td>
                    <td>=</td>
                    <td><input type="number" name="t3" id="t3" disabled></td>
                </tr>
                <tr>
                    <td>Turface&reg; Pro League Red- Calcined Clay Top Dressing</td>
                    <td><input type="number" name="q4" id="q4"></td>
                    <td>x</td>
                    <td class="cost">$455</td>
                    <td>=</td>
                    <td><input type="number" name="t4" id="t4" disabled></td>
                </tr>
                <tr>
                    <td>Turface&reg; Quick Dry - Calcined Clay Moisture Absorbent</td>
                    <td><input type="number" name="q5" id="q5"></td>
                    <td>x</td>
                    <td class="cost">$300</td>
                    <td>=</td>
                    <td><input type="number" name="t5" id="t5" disabled></td>
                </tr>
                <tr>
                    <td>Turface&reg; Mound Clay Red - Virgin Red Clay</td>
                    <td><input type="number" name="q6" id="q6"></td>
                    <td>x</td>
                    <td class="cost">$410</td>
                    <td>=</td>
                    <td><input type="number" name="t6" id="t6" disabled></td>
                </tr>
                <tr>
                    <td>Diamond Pro&reg; Red Infield Conditioner </td>
                    <td><input type="number" name="q7" id="q7"></td>
                    <td>x</td>
                    <td class="cost">$365</td>
                    <td>=</td>
                    <td><input type="number" name="t7" id="t7" disabled></td>
                </tr>
                <tr>
                    <td>Diamond Pro&reg; Drying Agent - Calcined Clay Moisture Absorbent</td>
                    <td><input type="number" name="q8" id="q8"></td>
                    <td>x</td>
                    <td class="cost">$340</td>
                    <td>=</td>
                    <td><input type="number" name="t8" id="t8" disabled></td>
                </tr>
                <tr>
                    <td>Diamond Pro&reg; Professional - Calcined Clay Top Dressing</td>
                    <td><input type="number" name="q9" id="q9"></td>
                    <td>x</td>
                    <td class="cost">$375</td>
                    <td>=</td>
                    <td><input type="number" name="t9" id="t9" disabled></td>
                </tr>
                <tr>
                    <td>Diamond Pro&reg; Top Dressing - Calcined Clay Soil Conditioner </td>
                    <td><input type="number" name="q10" id="q10"></td>
                    <td>x</td>
                    <td class="cost">$340</td>
                    <td>=</td>
                    <td><input type="number" name="t10" id="t10" disabled></td>
                </tr>
            </tbody>
        </table>

        <button type="button" onclick="process()">Calculate</button>

        <div class="input-group">
            <label for="tq">Total quantity</label>
            <input type="number" name="tq" id="tq" readonly>
        </div>

        <div class="input-group">
            <label for="tq">Total price subtotal</label>
            <input type="number" name="tps" id="tps" readonly>
        </div>

        <div class="input-group">
            <label for="tq">Shipping charges</label>
            <input type="number" name="ship" id="ship" readonly>
        </div>

        <div class="input-group">
            <label for="fin">Bill</label>
            <input type="number" name="fin" id="fin" readonly>
        </div>
        <button>DONE</button>

    </form>
    <script>
        document.getElementById("ok").addEventListener("submit", (event) => {
            if (!process()) {
                event.preventDefault()
            }
        })
        let $ = (elt) => document.getElementById(elt)
        let _ = (elt) => document.querySelectorAll(elt)

        let costs = []
        _(".cost").forEach(x => costs.push(parseInt(x.innerHTML.slice(1))))

        let process = (event) => {
            let q = [];
            let p = [];
            for (let i = 1; i <= 10; i++) {
                $(`t${i}`).value = costs[i - 1] * parseInt($(`q${i}`).value);
                q.push(parseInt($(`q${i}`).value));
                p.push(parseInt($(`t${i}`).value));
            }
            $('tq').value = q.reduce((a, c) => a + c, 0);
            $('tps').value = p.reduce((a, c) => a + c, 0);
            $('ship').value = +$('tq').value * 0.10;
            $('fin').value = +$('ship').value + +$('tps').value;

            console.log($('tq').value, $('tps').value, $('ship').value, $('fin').value);
            return true;
        }

    </script>


</body>

</html>