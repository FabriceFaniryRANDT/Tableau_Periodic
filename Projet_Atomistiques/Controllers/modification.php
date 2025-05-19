<?php
include "../Model/database.php";

if (!isset($_GET["id"])) {
    header("location:../Views/list.php");
}

$id= $_GET["id"];
$sql = "SELECT * FROM atome WHERE id LIKE $id";


$select = mysqli_query($conn,$sql);
$rows =  mysqli_num_rows($select);

?>
<head>
    <link rel="shortcut icon" href="../sql/Logo-Perso-FABRICE-FANIRY-RANDT.png" type="image/x-icon">
    <link rel="stylesheet" href="../Asset/style.css">
    <style>
        section{
            display: grid;
            place-items: center;
            width: 100vw;
        }
        form{
            margin-top: 10px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0px 0px 5px grey;
            padding: 30px;
            display: grid;
            grid-template-columns: repeat(4,280px);
            /* max-height: 1000px; */
        }

        .form-group{
            width: 280px;
            display: grid;
            margin-top: 10px;
        }

        label{
        }
        
        .form-group input{
            color: darkslategray;
            margin: 5px;
            outline: 0;
            border: 1px solid gainsboro;
            padding: 5px;
            height: 33px;
            border-radius: 3px;
        }
        .form-group input[type=submit]{
            font-size: 14pt;
            color: white;
            background-color: teal;
            margin: 5px;
            outline: 0;
            border: 1px solid gainsboro;
            padding: 5px;
            height: 40px;
            cursor: pointer;
            transition: all .3s ease-in-out;

        }
        .form-group input[type=submit]:hover{
            font-size: 14pt;
            color: teal;
            background-color: whitesmoke;
            border: 1px solid teal;
            cursor: pointer;
            transition: all .3s ease-in-out;
        }
    </style>
</head>
<?php
include "../Views/head.php";
?>
<header>
    <span><img src="../sql/Logo-Perso-FABRICE-FANIRY-RANDT.png" alt=""></span>
    <nav>
        <li><a href="../index.php">Acceuil</a></li>
        <li><a href="../Views/list.php">Tableau</a></li>
        <li><a href="modification.php">Modifier</a></li>
        <li><a href="suppression.php">Supprimer</a></li>
    </nav>
</header>
<section>
<?php

while ($res =  mysqli_fetch_assoc($select)) {
    ?>
    <form action="../Model/modifier.php" method="post">
        <div class="form-group">
            <label for="">Nom :</label>
            <input type="hidden" name="id" value="<?= $res['id'] ?>">
            <input type="text" name="nom_atome" value="<?= $res['nom'] ?>">
        </div>
        <div class="form-group">
            <label for="">Slug :</label>
            <input type="text" name="slug_atome" value="<?= $res['slug'] ?>">
        </div>
        <div class="form-group">
            <label for="">Nombre d'électron :</label>
            <input type="text" name="electron_atome" value="<?= $res['electron'] ?>">
        </div>
        <div class="form-group">
            <label for="">Numero :</label>
            <input type="text" name="numero_atome" value="<?= $res['numero'] ?>">
        </div>
        <div class="form-group">
            <label for="">Symbole :</label>
            <input type="text" name="symbole_atome" value="<?= $res['symbole'] ?>">
        </div>
        <div class="form-group">
            <label for="">Info du groupe :</label>
            <input type="text" name="info_groupe_atome" value="<?= $res['info_groupe'] ?>">
        </div>
        <div class="form-group">
            <label for="">Info du période :</label>
            <input type="text" name="info_periode_atome" value="<?= $res['info_periode'] ?>">
        </div>
        <div class="form-group">
            <label for="">Info du bloc :</label>
            <input type="text" name="info_bloc_atome" value="<?= $res['info_bloc'] ?>">
        </div>
        <div class="form-group">
            <label for="">Masse volumique :</label>
            <input type="text" name="masse_volumique_atome" value="<?= $res['masse_volumique'] ?>">
        </div>
        <div class="form-group">
            <label for="">Cas :</label>
            <input type="text" name="cas_atome" value="<?= $res['cas'] ?>">
        </div>
        <div class="form-group">
            <label for="">Einecs :</label>
            <input type="text" name="einecs_atome" value="<?= $res['einecs'] ?>">
        </div>
        <div class="form-group">
            <label for="">Masse atomique :</label>
            <input type="text" name="masse_atomique_atome" value="<?= $res['masse_atomique'] ?>">
        </div>
        <div class="form-group">
            <label for="">Rayon atomique :</label>
            <input type="text" name="rayon_atomique_atome" value="<?= $res['rayon_atomique'] ?>">
        </div>
        <div class="form-group">
            <label for="">Rayon de covalence :</label>
            <input type="text" name="rayon_de_covalence_atome" value="<?= $res['rayon_de_covalence'] ?>">
        </div>
        <div class="form-group">
            <label for="">Rayon de Van Der Waals :</label>
            <input type="text" name="rayon_de_van_der_waals_atome" value="<?= $res['rayon_de_van_der_waals'] ?>">
        </div>
        <div class="form-group">
            <label for="">Configuration électronique :</label>
            <input type="text" name="configuration_electronique_atome" value="<?= $res['configuration_electronique'] ?>">
        </div>
        <div class="form-group">
            <label for="">Etat Oxydation :</label>
            <input type="text" name="etat_oxydation_atome" value="<?= $res['etat_oxydation'] ?>">
        </div>
        <div class="form-group">
            <label for="">Année découverte :</label>
            <input type="text" name="decouverte_annee_atome" value="<?= $res['decouverte_annee'] ?>">
        </div>
        <div class="form-group">
            <label for="">Noms du découverte :</label>
            <input type="text" name="decouverte_noms_atome" value="<?= $res['decouverte_noms'] ?>">
        </div>
        <div class="form-group">
            <label for="">Pays de découverte :</label>
            <input type="text" name="decouverte_pays_atome" value="<?= $res['decouverte_pays'] ?>">
        </div>
        <div class="form-group">
            <label for="">Electronegativité :</label>
            <input type="text" name="electronegativite_atome" value="<?= $res['electronegativite'] ?>">
        </div>
        <div class="form-group">
            <label for="">Point de fusion :</label>
            <input type="text" name="point_de_fusion_atome" value="<?= $res['point_de_fusion'] ?>">
        </div>
        <div class="form-group">
            <label for="">Point d'ébullition :</label>
            <input type="text" name="point_d_ebullition_atome" value="<?= $res['point_d_ebullition'] ?>">
        </div>
        <div class="form-group">
            <label for="">Radioactivité :</label>
            <input type="text" name="is_radioactif_atome" value="<?= $res['is_radioactif'] ?>" >
        </div>
        <div class="form-group">
            <input type="submit" name="ajout_submit" value="Mise à jour">
        </div>
    </form>
    <?php } ?>
</section>

<?php
include "../Views/foot.php";
?>
