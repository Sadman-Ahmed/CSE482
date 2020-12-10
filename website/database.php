<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "testdb";
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM employees";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    echo "<table border = '1' cellspacing='0'>";
    echo "<tr>
    <td>id</td>
    <td>Fname</td>
    <td>Lname</td>
    </tr>";
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>";
        echo "id: " . $row["Employee_Id"];
      echo "</td>";
      echo "<td>";
         echo "Name:"  . $row["First_Name"];
      echo "</td>";
      echo "<td>";
        echo  $row["Last_Name"];
      echo "</td>";
      echo "</tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

mysqli_close($conn);
?>
