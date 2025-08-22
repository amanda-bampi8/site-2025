    <?php
    include('verifica_login.php');
    include('conexao.php');
    ?>

    <!DOCTYPE html>
    <html>  
        <head>
            <!----------------------------------------- HEAD ---------------------------->
            <title> INICIO | meu portal </title>
            <?php include 'include-portal/head.php'; ?>
            <!----------------------------------------- HEAD ---------------------------->
        </head>
        <body>
            <!----------------------------------------- HEADER ---------------------------->
            <?php include 'include-portal/header.php'; ?>
            <!----------------------------------------- HEADER ---------------------------->
        
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="midias-portal/img/index1.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>BEM VINDO!</h5>
                        <button type="button" class="btn btn-primary btn-lg">Conheça nossos planos!</button>
                    </div>
                    </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
                
            <div class="conteiner">
                
            </div>
            <footer>
            <!----------------------------------------- FOOTER ---------------------------->
            <?php include 'include-portal/footer.php'; ?>
            <!----------------------------------------- FOOTER ---------------------------->
            </footer>
        </body>
    </html>

