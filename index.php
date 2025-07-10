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
    <section id="banner">

    </section>
    <section id="content">



        <article id="featured-boxes" class="container paddingY">
            <h2 class="text-uppercase text-center text-md-left">Boxes de Destaque</h2>

            <div class="d-flex flex-wrap justify-content-center justify-content-md-between featured-boxes-container">
                <div class="card">
                    <img src="#" alt="">
                    <a href="#">Um texto descritivo com link apenas</a>
                </div>

                <div class="card">
                    <img src="#" alt="">
                    <a href="#">Um texto descritivo com link apenas</a>
                </div>

                <div class="card">
                    <img src="#" alt="">
                    <a href="#">Um texto descritivo com link apenas</a>
                </div>

                <div class="card">
                    <img src="#" alt="">
                    <a href="#">Um texto descritivo com link apenas</a>
                </div>
            </div>
        </article>

    </section>

    <?php include('./public/includes/footer.php');?>
</body>
</html>