
<?php 

  include('db.php');
  
  if(isset($_SESSION['userName'])){
    $message = $_POST['message'];
    
    $query = "insert into messages (name, message) values ('$_SESSION[userName]','$message')";
    mysqli_query($db,$query);
  }else{
    $_SESSION['userName'] = $_POST['userName'];
    $message = $_POST['message'];
    
    $query = "insert into messages (name, message) values ('$_SESSION[userName]','$message')";
    mysqli_query($db,$query);
  }


 ?>