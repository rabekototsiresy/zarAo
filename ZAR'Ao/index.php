<?php include_once 'pages/restriction/header.php'; ?>
<body>
<div class="container-fluid">
    <div class="row navTop">
        <div class="col-md-1 col-sm-1 col-xs-12 divImages"><img src="public/img/logo.png"></div>
        <div class="col-md-5 col-sm-5 col-xs-12"></div>
        <div class="col-md-2 col-sm-2 col-xs-12">
            <a href="#">Acceuil</a>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12">
            <a href="#">A propos</a>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12">
            <a href="pages/connexion.php">Se connecter</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 carousel slide" id="BquiSomme" data-ride = "carousel">
            <ol class="carousel-indicators">
                <li data-target="#BquiSomme" data-slide-to="0" class="active"></li>
                <li data-target="#BquiSomme" data-slide-to="1"></li>
                <li data-target="#BquiSomme" data-slide-to="3"></li>
                <li data-target="#BquiSomme" data-slide-to="3"></li>
                <li data-target="#BquiSomme" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block w-100 h-25" src="public/img/jenner.jpg" alt = "first slide">
                    <div class="carousel-caption">
                        <h3>jenner</h3>
                        <p>(first slide)</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="public/img/jho.jpg" alt = "second slide">
                    <div class="carousel-caption">
                        <h3>jho</h3>
                        <p>(second slide)</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 h-100" src="public/img/jul.jpg" alt = " third slide">
                    <div class="carousel-caption">
                        <h3>Jul</h3>
                        <p>(third slide)</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 h-100" src="public/img/lucas.jpg" alt = "fourth slide">
                    <div class="carousel-caption">
                        <h3>lucas</h3>
                        <p>(fourth slide)</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 h-100" src="public/img/njara.jpg" alt = "fith slide">
                    <div class="carousel-caption">
                        <h3>njara</h3>
                        <p>(fith slide)</p>
                    </div>
                </div>
                <a class="carousel-control-prev" href = "#BquiSomme" role="button" data-slide = "prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href = "#BquiSomme" role="button" data-slide = "next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="sr-only">Next</span>
                </a>
                
                

            </div>
            
        </div>
        <div class="col-md-4 inbox">
            <h4>Todisoa Andrianome</h4>



            <div class="row">
                <div class="col-md-10 textTarea">
                    <textarea class="form-control">

                    </textarea><br>
                    <button class="btn btn-primary" width = "100px">Send</button>
                    <br>
                </div>
            </div>
        </div>
        <div class="col-md-4 Buser">
            <h2>membres</h2>
            <p><b>username 2 </b></p>
            <hr>
            <p><b>username 3 </b></p>
            <hr>
            <p><b>username 4 </b></p>
            <hr>
            <p><b>username 5 </b></p>
            <hr>
            <p><b>username 6 </b></p>
            <hr>
            <p><b>username 7 </b></p>
            <hr>
            <p><b>username 8 </b></p>
            <hr>
        </div>
    </div>
</div>

<?php include_once 'pages/restriction/footer.php';?>