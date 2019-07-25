<?php include_once 'restriction/header.php'; ?>
<div class="container-fluid">
    <div class="row navTop">
        <div class="col-md-1 col-sm-12 col-xs-12divImages"><img src="../public/img/logo.png"></div>
        <div class="col-md-9 col-sm-12 col-xs-12"></div>
        <div class="col-md-2 col-sm-12 col-xs-12">
            <a href="connexion.php">Se connecter</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 formMagique">
            <form action="" method="post">
                <p>Inserer le mot magique</p>
                <div class="row">
                    <div class="col-md-12 blockPass">
                        <div class="form-group">
                            <input type="password" placeholder="***********">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <button class="btn btn-default Bsinscrire" type="submit">Valider le mot magique</button>
                    </div>
                </div>
               
            </form>
        </div>
    </div>
</div>
<h1>PARAGRAPHE</h1>
<?php include_once 'restriction/footer.php';?>