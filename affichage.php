<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="STYLE.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
         <nav class="navbar navbar-default navbar-fixed-top" >
             <div class="navbar-header">
                 <a   href="http://" class="navbar-brand"><img src="" class="image" width="70"></a>
                 <button class="navbar-toggle" data-toggle="collapse" data-target="#navcol-1">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
             </div>
              <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                                <li role="presentation"><a href="#menu">Accueil</a></li>
                                <li role="presentation"><a href="#section">Produits </a></li>
                                <li role="presentation"><a href="#section2">Ingredients </a></li>
                                <li role="presentation"><a href="#section3">CONTACT</a></li>
                </ul>

             </div>
        </nav>
</div>


    <!-- FIN SECTION INGREDIENTS -->
    <!-- section contact -->
    <?php
    include('traitement.php');
       $connection=$sql->query("SELECT photo FROM picture ") or die(print_r($sql->errorInfo()));
    ?>
<div id="section3" class="section3">
<div class="contact"><h1></h1></div >
  <div class="container-form">
      <div class="section">
                <?php
                          while($resultat=$connection->fetch())
                          {
                              ?>
                              <a href=""> <img src="<?php echo htmlspecialchars($resultat['photo']);?>" width="70" HEIGHT="100"></a>

                              <?php 
                          }
               ?>

                  </div>
      <form class="form" method="post" action="traitement.php">
          <div class="row">
              <div class="form-group">
                  <div class="col-xs-4" >
                      <label for="name"  class="control-label">Prenom</label>
                      <input  type="text"  placeholder="texte" id="idtext" class="form-control" required="required"  >
                      <span id="errorLastname"></span><br>
                  </div>
                  <div>
                      <button class="btn btn-success">Envoyer</button>
                  </div>
              </div>
          </div>
           <div class="row">
             <div class="form-group">
                <div class="col-xs-4" >
                  <label for="name"  class="control-label">Prenom</label>
                   <input  type="text"  placeholder="texte" id="idtext" class="form-control" required="required"  >
                   <span id="errorLastname"></span><br>
                </div>
                     <div>
                         <button class="btn btn-success">Envoyer</button>
                     </div>
             </div>
           </div>
           <div class="row">
             <div class="form-group">
              <div class="col-xs-4">
                   <label for="color"  class="control-label">couleur</label>
                   <input type="color"  placeholder="couleur" id="idemail" required="required" class="form-control"><br>
                   <span id="errorEmail"></span><br>
              </div>
             </div>
            </div>
          </div>
       </div>
    </form>
   </div>
</div>

<!-- section fin contact -->
<!-- FOOTER -->
<footer>


</footer>
<!--  FIN FOOTER -->
    <script src="MONJS/jquery.min.js"></script>
<script src="MONJS/bootstrap.min.js"></script>
<script src="MONJS/monjs.js"></script>

</body>
</html>