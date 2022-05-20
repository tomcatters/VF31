<?php
$produit = new ProduitDB($cnx);
$prdt = $produit->getProduit();
$prd_dtls = $produit->getProduit_dtls();
$num = count($prd_dtls);
?>

<h1 class="title">Guide de réalisation du JgPz. 38t Hetzer</h1>
<div>
    <form>
        <table class="p">
            <thead>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            </thead>
            <tbody>
            <?php
            for ($i = 0; $i < $num; $i++){
            ?>
            <tr>
                <td>
                    <span contenteditable="true" name="<?php echo $prd_dtls[$i]->id_img?>" class="ecart" id="img_titre"><?php print $prd_dtls[$i]->img_titre ?></span>
                </td>
                <td>
                    <span contenteditable="true" name="<?php echo $prd_dtls[$i]->id_img?>" class="ecart" id="img_desc"><?php print $prd_dtls[$i]->img_desc ?></span>
                </td>
            </tr>
            </tbody>
            <?php } ?>
            </tbody>
        </table>
    </form>
</div>
