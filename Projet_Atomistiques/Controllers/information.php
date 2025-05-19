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
        body{
            display: block;
        }
        section{
            display: grid;
            place-items: center;
            width: 100vw;
        }
        aside{
            margin-top: 10px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0px 0px 5px grey;
            padding: 30px;
            display: grid;
            grid-template-columns: repeat(4,280px);
        }

        .form-group{
            width: 280px;
            display: grid;
            margin-top: 10px;
        }

        .form-group h4{
            color: teal;
            margin: 5px;
            outline: 0;
            text-align: start;
            height: 40px;
            cursor: default;
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
    <aside action="../Model/modifier.php" method="post">
        <div class="form-group">
            <label for="">Nom :</label>
            <input type="hidden" name="id" value="<?= $res['id'] ?>">
            <h4><?= $res['nom'] ?></h4>
        </div>
        <div class="form-group">
            <label for="">Slug :</label>
            <h4><?= $res['slug'] ?></h4>
        </div>
        <div class="form-group">
            <label for="">Nombre d'électron :</label>
            <h4><?= $res['electron'] ?></h4>
        </div>
        <div class="form-group">
            <label for="">Numero :</label>
            <h4><?= $res['numero'] ?></h4>
        </div>
        <div class="form-group">
            <label for="">Symbole :</label>
            <h4><?= $res['symbole'] ?></h4>
        </div>
        <div class="form-group">
            <label for="">Info du groupe :</label>
            <h4><?= $res['info_groupe'] ?></h4>
        </div>
        <div class="form-group">
            <label for="">Info du période :</label>
            <h4><?= $res['info_periode'] ?></h4>
        </div>
        <div class="form-group">
            <label for="">Info du bloc :</label>
            <h4><?= $res['info_bloc'] ?></h4>
        </div>
        <div class="form-group">
            <label for="">Masse volumique :</label>
            <h4><?= $res['masse_volumique'] ?></h4>
        </div>
        <div class="form-group">
            <label for="">Cas :</label>
            <h4><?= $res['cas'] ?></h4>
        </div>
        <div class="form-group">
            <label for="">Einecs :</label>
            <h4><?= $res['einecs'] ?></h4>
        </div>
        <div class="form-group">
            <label for="">Masse atomique :</label>
            <h4><?= $res['masse_atomique'] ?></h4>
        </div>
        <div class="form-group">
            <label for="">Rayon atomique :</label>
            <h4><?= $res['rayon_atomique'] ?></h4>
        </div>
        <div class="form-group">
            <label for="">Rayon de covalence :</label>
            <h4><?= $res['rayon_de_covalence'] ?></h4>
        </div>
        <div class="form-group">
            <label for="">Rayon de Van Der Waals :</label>
            <h4><?= $res['rayon_de_van_der_waals'] ?></h4>
        </div>
        <div class="form-group">
            <label for="">Configuration électronique :</label>
            <h4><?= $res['configuration_electronique'] ?></h4>
        </div>
        <div class="form-group">
            <label for="">Etat Oxydation :</label>
            <h4><?= $res['etat_oxydation'] ?></h4>
        </div>
        <div class="form-group">
            <label for="">Année découverte :</label>
            <h4><?= $res['decouverte_annee'] ?></h4>
        </div>
        <div class="form-group">
            <label for="">Noms du découverte :</label>
            <h4><?= $res['decouverte_noms'] ?></h4>
        </div>
        <div class="form-group">
            <label for="">Pays de découverte :</label>
            <h4><?= $res['decouverte_pays'] ?></h4>
        </div>
        <div class="form-group">
            <label for="">Electronegativité :</label>
            <h4><?= $res['electronegativite'] ?></h4>
        </div>
        <div class="form-group">
            <label for="">Point de fusion :</label>
            <h4><?= $res['point_de_fusion'] ?></h4>
        </div>
        <div class="form-group">
            <label for="">Point d'ébullition :</label>
            <h4><?= $res['point_d_ebullition'] ?></h4>
        </div>
        <div class="form-group">
            <label for="">Radioactivité :</label>
            <h4><?= $res['is_radioactif'] ?></h4>
        </div>
</aside>
    <?php } ?>
</section>

<?php
include "../Views/foot.php";
?>
