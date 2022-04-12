<nav class="nav">
    <?php
    if(isset($_SESSION['userId'])){
        echo '<a href="logout.php">déconnexion</a>
                        <a href="user.php">compte</a>
                          <a href="../index_.php">Acceuil</a>';
    }
    else{
        echo '<a href="register.php">se connecter</a>
                        <a href="../index_.php">Acceuil</a>';
    }
    ?>
</nav>
<header>
    <img src="./../admin/images/FV214.jpg" alt="FV214" width="100%" height="400px">
</header>