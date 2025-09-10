<!DOCTYPE html>
<html>
<head>
  <title>Practice 4 - Multiplication Table</title>
</head>
<body>
  <h1>Practice 4 - Multiplication Table</h1>

  <form method="post">
    Enter a number: <input type="number" name="num" min="1">
    <input type="submit" value="Generate">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["num"])) {
      $n = intval($_POST["num"]);
      if ($n > 0) {
          echo "<table border='1' cellpadding='5' cellspacing='0'>";
          echo "<tr><th>*</th>";
          for ($i = 1; $i <= $n; $i++) {
              echo "<th>$i</th>";
          }
          echo "</tr>";

          for ($row = 1; $row <= $n; $row++) {
              echo "<tr><th>$row</th>";
              for ($col = 1; $col <= $n; $col++) {
                  echo "<td>" . ($row * $col) . "</td>";
              }
              echo "</tr>";
          }
          echo "</table>";
      }
  }
  ?>
</body>
</html>
