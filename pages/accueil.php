<?php
$query = "select * from p_ville";
$result = $cnx->query($query);

$data = $result->fetchAll();
//var_dump($data);
$nbr = count($data);
for($i = 0;$i < $nbr;$i++){
    print "<br>".$data[$i]['nom_ville']." (".$data[$i]['code_postal'].")";
}

/*foreach($data as $d){
    print "<br>".$d['nom_ville'];
}
*/

