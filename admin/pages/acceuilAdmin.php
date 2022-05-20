<?php
$produit = new ProduitDB($cnx);
$prdt = $produit->getProduit();
$prd_dtls = $produit->getProduit_dtls();
?>

<div>
    <p>
    <h3 id="acc_intro">Bienvenue sur ce site de construction et de peinture de maquette. Ce site vous présentera un guide sur la réalisation complète
        <br>
        et détaillée d'une maquette en commençant par la construction de ladite maquette jusqu'à la peinture finale, en passant par l'étape
        <br>
        de peinture de base et pré-patinage.</h3>
    </p>
    <div>
        <table class="acc_TableAlign">
            <tr>
                <td>
                    <a href=""><img src="images/T34.jpg" alt="T34/76" width="400" height="300"></a>
                </td>
                <td>
                    <a href=""><img src="images/M3Stuart.jpg" alt="M3 Stuart" width="400" height="300"></a>
                </td>
                <td>
                    <a class="nav-link" href="indexAdmin_.php?page=produitAdmin.php"><img src="<?php echo $prd_dtls[0]->img_lk ?>" alt="Pz.38t Hetzer" width="400" height="300"></a>
                </td>
                <td>
                    <a href=""><img src="images/Panther.jpg" alt="hetzer" width="400" height="300"></a>
                </td>
            </tr>
            <tr>
                <td class="TdAlign"><h3 class="acc_border">T-34/76</h3></td>
                <td class="TdAlign"><h3 class="acc_border">M3 Stuart</h3></td>
                <td class="TdAlign"><h3 class="acc_border"><?php echo $prdt[0]->p_nom ?></h3></td>
                <td class="TdAlign"><h3 class="acc_border">Pz.Kpfw. V Panther</h3></td>
            </tr>
        </table>

        <h2 class="TdAlign">Cliquez sur l'image de votre choix</h2>
    </div>
</div>

