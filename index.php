<!DOCTYPE html>

<?php
  include 'db.php';
?>

<html>
<head>
  <title>chatApp</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
  
  <div class="row">
    <div class="container">
      
      <div class="col-md-4 col-md-offset-4 display">
        <h1 style="text-align: center;">chatApp</h1>
        <div class="message">
          
        </div>
        <hr>
        <form method="post" id="form">
          <?php if(isset($_SESSION['userName'])): ?>
            
          <?php else: ?>
            Username:
            <input type="text" name="userName" class="form-control">
          <?php endif; ?>
          
          Message:
          <textarea class="form-control" name="message"></textarea><br>
          <input style="color: white; border: none; outline: none;" type="submit" value="Send" name="send" class="btn">
        </form>
      </div>
      
    </div>
  </div>
  
  
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  
<script>
  $(document).ready(function(){
    
    function scroll() {
      $('.message').animate({
        scrollTop: $('.message')[0].scrollHeight
      },1000);
    }
    
    setInterval(function(){
      $('.message').load('load.php');
      
    },2000);
    
    $('#form').on('submit', function(e) {
      e.preventDefault();
      
      $.ajax({
        url: 'add.php',
        method: 'POST',
        data: $('#form').serialize(),
        success: function(e){
          $('.message').load('load.php');
          $('#form')[0].reset();
          scroll();
          $('#myname').hide();
        }
      });
      
    });
  });
    
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>





