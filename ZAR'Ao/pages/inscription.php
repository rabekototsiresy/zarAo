<?php include_once 'restriction/header.php';?>
<body>
<div class="container-fluid">
    <div class="row navTop">
        <div class="col-md-1 divImages"><img src="../public/img/logo.png"></div>
        <div class="col-md-9"></div>
        <div class="col-md-2">
            <a href="connexion.php">Se connecter</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 formInscription">
            <h2>Creer un compte</h2>
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Prénom">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nom de famille">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Numero de mobile ou e-mail">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nouveau mot de passe">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <input type="number" class="form-control" max="31" min="1">
                    </div>
                    <div class="col-md-4">
                        <select class="form-control">
                            <option>Janvier</option>
                            <option>Février</option>
                            <option>Mars</option>
                            <option>Avril</option>
                            <option>Mais</option>
                            <option>Juin</option>
                            <option>......</option>
                            <option>Décembre</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                    <select class="form-control">
                            <option>1990</option>
                            <option>1991</option>
                            <option>1992</option>
                            <option>1993</option>
                            <option>1994</option>
                            <option>1994</option>
                            <option>......</option>
                            <option>2000</option>
                        </select>                   
                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="radio">
                            <input type="radio" name="sexe"> Homme
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="radio">
                            <input type="radio" name="sexe"> Femme
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="radio">
                            <input type="radio" name="sexe"> Autre
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Mot magique">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-default Bsinscrire">S'inscrire</button>
                    </div>
                    
                </div>
            </form>
        </div>
    <div>
</div>
<?php include_once 'restriction/footer.php';?>