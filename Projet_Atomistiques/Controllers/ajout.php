<?php
include "../Model/database.php";
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
    <!-- <h1>Informations sur un atome</h1> -->
    <form action="../Model/insert.php" method="post">
        <div class="form-group">
            <label for="">Nom :</label>
            <input type="text" name="nom_atome">
        </div>
        <div class="form-group">
            <label for="">Slug :</label>
            <input type="text" name="slug_atome">
        </div>
        <div class="form-group">
            <label for="">Nombre d'électron :</label>
            <input type="text" name="electron_atome">
        </div>
        <div class="form-group">
            <label for="">Numero :</label>
            <input type="text" name="numero_atome">
        </div>
        <div class="form-group">
            <label for="">Symbole :</label>
            <input type="text" name="symbole_atome">
        </div>
        <div class="form-group">
            <label for="">Info du groupe :</label>
            <input type="text" name="info_groupe_atome">
        </div>
        <div class="form-group">
            <label for="">Info du période :</label>
            <input type="text" name="info_periode_atome">
        </div>
        <div class="form-group">
            <label for="">Info du bloc :</label>
            <input type="text" name="info_bloc_atome">
        </div>
        <div class="form-group">
            <label for="">Masse volumique :</label>
            <input type="text" name="masse_volumique_atome">
        </div>
        <div class="form-group">
            <label for="">Cas :</label>
            <input type="text" name="cas_atome">
        </div>
        <div class="form-group">
            <label for="">Einecs :</label>
            <input type="text" name="einecs_atome">
        </div>
        <div class="form-group">
            <label for="">Masse atomique :</label>
            <input type="text" name="masse_atomique_atome">
        </div>
        <div class="form-group">
            <label for="">Rayon atomique :</label>
            <input type="text" name="rayon_atomique_atome">
        </div>
        <div class="form-group">
            <label for="">Rayon de covalence :</label>
            <input type="text" name="rayon_de_covalence_atome">
        </div>
        <div class="form-group">
            <label for="">Rayon de Van Der Waals :</label>
            <input type="text" name="rayon_de_van_der_waals_atome">
        </div>
        <div class="form-group">
            <label for="">Configuration électronique :</label>
            <input type="text" name="configuration_electronique_atome">
        </div>
        <div class="form-group">
            <label for="">Etat Oxydation :</label>
            <input type="text" name="etat_oxydation_atome">
        </div>
        <div class="form-group">
            <label for="">Année découverte :</label>
            <input type="text" name="decouverte_annee_atome">
        </div>
        <div class="form-group">
            <label for="">Noms du découverte :</label>
            <input type="text" name="decouverte_noms_atome">
        </div>
        <div class="form-group">
            <label for="">Pays de découverte :</label>
            <input type="text" name="decouverte_pays_atome">
        </div>
        <div class="form-group">
            <label for="">Electronegativité :</label>
            <input type="text" name="electronegativite_atome">
        </div>
        <div class="form-group">
            <label for="">Point de fusion :</label>
            <input type="text" name="point_de_fusion_atome">
        </div>
        <div class="form-group">
            <label for="">Point d'ébullition :</label>
            <input type="text" name="point_d_ebullition_atome">
        </div>
        <div class="form-group">
            <label for="">Radioactivité :</label>
            <input type="text" name="is_radioactif_atome">
        </div>
        <div class="form-group">
            <input type="submit" name="ajout_submit" value="Ajouter">
        </div>
    </form>
</section>

<?php
include "../Views/foot.php";
?>
