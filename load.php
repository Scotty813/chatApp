<?php 

include 'db.php';

$sql = "select * from messages";
$rows = mysqli_query($db,$sql);

  while($row = mysqli_fetch_assoc($rows)){
    echo "<strong>$_SESSION[userName]</strong> <br> $row[message] <br>";  
  }

  ?>


  
