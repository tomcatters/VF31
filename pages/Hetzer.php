<?php
$produit = new ProduitDB($cnx);
$prdt = $produit->getProduit(1);
$prd_dtls = $produit->getProduit_dtls(1);
?>

<h1 class="title">Guide de réalisation du JgPz. 38t Hetzer</h1>
    <div>
        <table class="htz_table">
            <tr>
                <td><a href="./admin/images/Manuel du Hetzer.pdf"><img src="./admin/images/Hetzer_Manual.jpg" alt="Manuel du Hetzer"></a></td>
                <td><h3>Etapes de réalisation</h3>
                    <p>
                    <ol>
                        <li>Assemblage des éléments:</li>
                        <br>
                        <li>Application de la couche de peinture primaire:</li>
                        <br>
                        <li>Pré-Patinage:</li>
                        <br>
                        <li>Peinture finale:</li>
                    </ol>
                    </p>
                </td>
                <td><img src="<?php echo $prd_dtls[2]->img_lk ?>" alt="Peinture de base du Hetzer"></td>
            </tr>
            <tr>
                <td><h3><?php echo $prd_dtls[1]->img_titre ?></h3>
                    <p><?php echo $prd_dtls[1]->img_desc ?></p>
                </td>
                <td><a class="nav-link" href="index_.php?page=infos.php"><img src="<?php echo $prd_dtls[4]->img_lk ?>" alt="Pz38.t_Hetzer"></a></td>
                <td><h3><?php echo $prd_dtls[2]->img_titre ?></h3>
                    <br><p><?php echo $prd_dtls[2]->img_desc ?></p>
                </td>
            </tr>
            <tr>
                <td><img src="<?php echo $prd_dtls[3]->img_lk ?>" alt=""></td>
                <td><h3><?php echo $prd_dtls[4]->img_titre ?></h3>
                    <p><?php echo $prd_dtls[4]->img_desc ?>
                    </p>
                </td>
                <td><a href=""></a><img src="<?php echo $prd_dtls[0]->img_lk ?>" alt="Pz.38t Hetzer"></td>
            </tr>
            <tr>
                <td><h3><?php echo $prd_dtls[3]->img_titre ?></h3>
                    <p>
                        <?php echo $prd_dtls[3]->img_desc ?>
                    </p>
                </td>
                <td></td>
                <td><h3><?php echo $prd_dtls[0]->img_titre ?></h3>
                    <p>
                        <?php echo $prd_dtls[0]->img_desc ?>
                    </p>
                </td>
            </tr>
        </table>
    </div>