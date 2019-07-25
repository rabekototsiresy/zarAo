<?php include_once 'restriction/header.php'?>
<div class="container">
    <div class="images">
        <img src="../public/img/logo.png">
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-3"></div>
        <div class="col-md-4 col-sm-6 formConnexion">
           <form action="inscription.php" method="post">
               <div class="form-group">
                   <input type="text"  class="form-control
                    mail" placeholder = "mail">
               </div>
               <div class="form-group">
                   <input type="password"  class="form-control pass" placeholder = "password">
               </div>
               <p><a href="motMagique.php">mot de passe oublié?</a><p>
               <div class="form-group">
                   <input type="submit"  class="form-control bouttonConnexion" value = "connexion">
               </div>
               <div class="form-group">
                   <a href="inscription.php"><input type="submit"  class="form-control bouttonInscription" value = "creer une compte"></a>
               </div>

           </form>
        </div>
        
    </div>
</div>
<?php include_once 'restriction/footer.php';?>