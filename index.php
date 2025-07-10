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
        include('./public/includes/banner.php');
    ?>
    <section id="content">
         <?php
            include('./public/includes/feature.php');
            include('./public/includes/feature-boxes.php');
        ?>
    </section>
    <?php include('./public/includes/footer.php');?>
</body>
</html>