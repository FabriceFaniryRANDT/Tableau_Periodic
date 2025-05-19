<?php
include "../Model/database.php";

if (isset($_POST['ajout_submit'])) {
    extract($_POST);

    $sql = "INSERT INTO `atome` (`id`, `nom`, `slug`, `electron`, `numero`, `symbole`, `info_groupe`, `info_periode`, `info_bloc`, `masse_volumique`, `cas`, `einecs`, `masse_atomique`, `rayon_atomique`, `rayon_de_covalence`, `rayon_de_van_der_waals`, `configuration_electronique`, `etat_oxydation`, `decouverte_annee`, `decouverte_noms`, `decouverte_pays`, `electronegativite`, `point_de_fusion`, `point_d_ebullition`, `is_radioactif`) VALUES (NULL, '$nom_atome', '$slug_atome', '$electron_atome', '$numero_atome', '$symbole_atome', '$info_groupe_atome', '$info_periode_atome', '$info_bloc_atome', '$masse_volumique_atome', '$cas_atome', '$einecs_atome', '$masse_atomique_atome', '$rayon_atomique_atome', '$rayon_de_covalence_atome', '$rayon_de_van_der_waals_atome', '$configuration_electronique_atome', '$etat_oxydation_atome', '$decouverte_annee_atome', '$decouverte_noms_atome', '$decouverte_pays_atome', '$electronegativite_atome', '$point_de_fusion_atome', '$point_d_ebullition_atome', '$is_radioactif_atome')
";

    $query = $select = mysqli_query($conn,$sql);
    header("location:../Views/list.php");
}


?>