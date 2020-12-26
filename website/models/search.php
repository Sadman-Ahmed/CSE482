<?php
 function conectionEnd($value){
   mysqli_close($value);
 }
 function fetch($value=’’){
   include_once("../models/connection.php");

   $sql = "SELECT * FROM contact WHERE name LIKE '%".$value."%' OR email LIKE '%".$value."%'";
   $result = mysqli_query($conn, $sql);
   if($result) {
     echo "<table align='center' width='80%' cellspacing='0' height='50'>";
     echo "<tr>";
     echo "<td align='center'>Name</td>";
     echo "<td align='center'>Email</td>";
     echo "<td align='center'>Comment</td>";
     echo "</tr>";
     while ($row = mysqlI_fetch_assoc($result)) {
       echo "<tr align='center'>";
       echo "<td align='center'>".$row['name']."</td>";
       echo "<td align='center'>".$row['email']."</td>";
       echo "<td align='center'>".$row['comment']."</td>";
       echo "</tr>";
     }
     echo "</table>";
   }
   else {
     echo "Error :".$sql."<br>".mysqli_error($conn);  }
     conectionEnd($conn);
   }
   if (isset($_GET['search'])) {
     fetch($_GET['search']);
   }
?>
