<!DOCTYPE html>
<html>
<head>
  <title>Student Grade Checker</title>
</head>
<body>
  <h1>Student Grade Checker</h1>
  <form action="" method="post"> 
    Enter student marks (out of 100): 
    <input type="number" name="marks" min="0" max="100" required><br>
    <button type="submit">Check Grade</button>
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $marks = (float)$_POST['marks'];

    if ($marks >= 60) {
      $grade = "First Division";
    } elseif ($marks >= 45 && $marks < 60) {
      $grade = "Second Division";
    } elseif ($marks >= 33 && $marks < 45) {
      $grade = "Third Division";
    } else {
      $grade = "Fail";
    }

    echo "<p>Student marks: $marks</p>";
    echo "<p>Grade: $grade</p>";
  }
  ?>
</body>
</html>
