<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $title = "Home";
        // $customCss = "/assets/custom.css";
        include('./public/includes/head.php'); 
    ?>
</head>
<body>
    <?php
        include('./public/includes/header.php'); 
        include('./public/includes/main.php'); 
    ?>
    <section id="banner" class="container">
        <div id="image-carousel" class="splide" style="height: 500px">
            <div class="splide__track">
                <ul class="splide__list" style="height: 500px">
                    <li class="splide__slide"><img src="./public/src/img/banner/img-1.jpg" alt="Imagem 1" style="height: 100%" /></li>
                    <li class="splide__slide"><img src="./public/src/img/banner/img-2.jpg" alt="Imagem 2" /></li>
                    <li class="splide__slide"><img src="./public/src/img/banner/img-3.jpg" alt="Imagem 3" /></li>
                </ul>
            </div>
        </div>
    </section>

    
    <section id="content">

        <article id="feature">
            <div class="container d-flex flex-wrap justify-content-between">
                <div>
                    <h2 class="text-uppercase">Teste de HTML e CSS</h2>
                    <p>Quesitos de avaliação</p>
                    <ul>
                        <li>item</li>
                        <li>item</li>
                        <li>item</li>
                    </ul>
    
                    <p>dashdhusaahu hsuah dusahud asuhud ashd asuhud shuahd ashudhusa hdhuhuasu dasuid asih</p>
                    <p>Obrigado e boa socket_read</p>
                </div>
                <img src="./public/src/img/feature.jpg" alt="">
            </div>
        </article>

        <article id="featured-boxes" class="container paddingY">
            <h2 class="text-uppercase text-center text-md-left">Boxes de Destaque</h2>

            <div class="d-flex flex-wrap justify-content-center justify-content-md-between featured-boxes-container">
                <div class="card">
                    <img src="./public/src/img/banner/img-1.jpg" alt="">
                    <a href="#">Um texto descritivo com link apenas</a>
                </div>

                <div class="card">
                    <img src="./public/src/img/banner/img-2.jpg" alt="">
                    <a href="#">Um texto descritivo com link apenas</a>
                </div>

                <div class="card">
                    <img src="./public/src/img/banner/img-3.jpg" alt="">
                    <a href="#">Um texto descritivo com link apenas</a>
                </div>

                <div class="card">
                    <img src="./public/src/img/feature.jpg" alt="">
                    <a href="#">Um texto descritivo com link apenas</a>
                </div>
            </div>
        </article>

    </section>

    <?php include('./public/includes/footer.php');?>
</body>
</html>