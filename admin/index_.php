<?php
session_start();
include ('./lib/php/admin_liste_include.php');


?>
<!doctype html>
<html>
<head>
    <title>Rappels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./lib/css/style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<header class="image_header"><br>

</header>
<div class="container">
    <?php
    if(file_exists('./lib/php/menu_public.php')) {
        include ('./lib/php/menu_public.php');
    }
    ?>

</div>
<section id="contenu">
    <div id="main">
        <?php
        if(!isset($_SESSION['page'])){ //on vient d'arriver sur le site
            $_SESSION['page']="accueil.php";
        }
        if(isset($_GET['page'])) {
            $_SESSION ['page'] = $_GET['page'];
        }
        $path = './pages/'.$_SESSION['page'];

        if(file_exists($path)){
            include $path;
        } else {
            //include ('./pages/page404.php');
        }
        ?>
    </div>
</section>
<footer>

</footer>
</body>
</html>
