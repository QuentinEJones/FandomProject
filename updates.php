<?php include  $_SERVER['DOCUMENT_ROOT'].'/functions/functions.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Albion Online Fandom Website</title>
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
        <div class="col p-3"><!-- Start::col2 -->



          
        <div class="row">
          <div class="col">
            <img src="/images/beyondthevail.jpeg" width="300">
          </div>
        </div>
           <div class="row">
          <div class="col">
            <h3>Beyond the veil</h3>(Relased Nov 20, 2022)
          </div>
          <div class="col">
            In the most recent update to AO they have added tons of new content, including; A new region called the "Mists", a new Royal City, new Mobs, and new Artifact Armor. As well as some small reworks making it easier for small guilds to join in the competition and a new resource enchantment called pristine, the new highest tier of enchantment.
          </div>
        </div>



        
         </div><!-- End::col2 -->
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