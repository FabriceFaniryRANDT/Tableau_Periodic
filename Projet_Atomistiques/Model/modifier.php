<?php

include_once 'database.php';

extract($_POST);


$sql = "UPDATE `atome` SET `nom`='$nom_atome',`slug`='$slug_atome',`electron`='$electron_atome',`numero`='$numero_atome',`symbole`='$symbole_atome',`info_groupe`='$info_groupe_atome',`info_periode`='$info_periode_atome',`info_bloc`='$info_bloc_atome',`masse_volumique`='$masse_volumique_atome',`cas`='$cas_atome',`einecs`='$einecs_atome',`masse_atomique`='$masse_atomique_atome',`rayon_atomique`='$rayon_atomique_atome',`rayon_de_covalence`='$rayon_de_covalence_atome',`rayon_de_van_der_waals`='$rayon_de_van_der_waals_atome',`configuration_electronique`='$configuration_electronique_atome',`etat_oxydation`='$etat_oxydation_atome',`decouverte_annee`='$decouverte_annee_atome',`decouverte_noms`='$decouverte_annee_atome',`decouverte_pays`='$decouverte_pays_atome',`electronegativite`='$electronegativite_atome',`point_de_fusion`='$point_de_fusion_atome',`point_d_ebullition`='$point_d_ebullition_atome',`is_radioactif`='$is_radioactif_atome' WHERE id=$id";

$query = $select = mysqli_query($conn,$sql);
header("location:../Views/list.php");

?>