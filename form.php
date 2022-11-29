<?php include  $_SERVER['DOCUMENT_ROOT'].'/functions/functions.php'; 

  if($_GET){
    $showData = "yes";
    $fName = $_GET['fName'];
    $lName = $_GET['lName'];
    $email = $_GET['email'];
    $reason = $_GET['reason'];
    $text = $_GET['text'];
  } else {
     $showData = "no";
  }


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <link href="/style.css" rel="stylesheet" 
      
  </head>
  <body>


    <div class="container"><!-- Start::Contaier -->
    
      
      
      
      
      <div class="row mt-3" id="top"><!-- Start::row1Top -->
        <div class="col p-3"><!-- Start::col1 -->
          
          <h1><?php echo $siteName ?></h1>

          <?php  echo $mainNav ?>
           

         </div><!-- End::col1 -->
      </div><!-- End ::rowTop1 -->
    
      <div class="row" id="content"><!-- Start::row2Content -->
        <div class="col p-2"><!-- Start::col2 -->
         
          <h1>Contact Form</h1>

          <hr>

          <form method="post" action="redirectForm.php">
          What is your full name<br>
            <input type="text" name="fullName">
            <br>
            What is your Email Address
            <br>
            <input type="text" name="email">
            <hr>
            Reason For Contact<br>
            <select name="reason">
             <option value="question">Question</option>
             <option value="comment">Comment</option>
            </select>
            <br>
            What is your Comment/Question
            <br>
            <textarea name="text" rows="4" cols="50" placeholder="Write your Comment/Question Here"></textarea>


            
            <br><br>
              
            <input type="submit" value="Send">
            
          </form>


          
         </div><!-- End::col2 -->


<div class="col p-2"> <!--start::col3-->

  <?php

if ($showData == "yes"){
  echo "<h3>Form Data</h3>";
    echo "<br>";
     echo "First Name: $fName";
    echo "<br>";
     echo "Last Name: $lName";
  echo "<br>";
     echo "Email Address: $email";
  echo "<br>";
     echo "Reason: $reason";
   echo "<br>";
     echo "Comment/Question: $text";
}




?>
  
  
</div> <!--start::col3-->

        
      </div><!-- End ::rowContent2 -->
     
      <div class="row" id="bottom"><!-- Start::row3Bottom -->
        <div class="col p-3"><!-- Start::col3 -->
          
          <?php echo $footer?>
         
        </div><!-- End::col3 -->
        
      </div><!-- End ::rowBottom3 -->








      
    </div><!-- End::Contaier -->


    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>