<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style type="text/css">
  
  </style>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
  
<script type="text/javascript">
  
    $(document).ready(function() {
    $("#galerie_big img").hide();
    $("#galerie a").click(function()
    {
      if($("#"+this.rel).is(":hidden"))
      {
        $("#galerie_big img").hide(); 
        $("#"+this.rel).show();

      }
    })
    // body...
  })
</script>
 <?php
    
  $sql=new PDO('mysql:host=localhost;dbname=generator','root','');
   $connection=$sql->query("SELECT * FROM picture ") or die(print_r($sql->errorInfo()));
  
$i=0;
              
                         while($resultat=$connection->fetch())
                     {

                             ?>
                             <div id="galerie" class="col-md-1 col-sm-6 mb-4">

                             <div id="galerie_nav" >

                             <a href="#" <?php echo "rel=\"img".$i."\""?> >



                           <img src="<?php echo htmlspecialchars($resultat['photo']);?>" width="70" HEIGHT="100" ></a>
                            </div>
                             <div id="galerie_big">
                              <img  <?php echo "id=\"img".$i."\""?> src="<?php echo htmlspecialchars($resultat['photo']);?>" width="300" HEIGHT="300">
                           </div>

                         </div>
                             <?php 


                            $i++;
                
                         
                       }


       ?>
         

       </body>
</html>
