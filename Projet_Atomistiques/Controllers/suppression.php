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
        form{
            margin-top: 10px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0px 0px 5px grey;
            padding: 30px;
            display: grid;
            grid-template-columns: repeat(3,280px);
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
    <form action="../Model/delete.php" method="post">
        <div class="form-group">
            <label for="">Nom :</label>
            <input type="hidden" name="id" value="<?= $res['id'] ?>">
            <input type="text" name="nom_atome" value="<?= $res['nom'] ?>" disabled>
        </div>
        <div class="form-group">
            <label for="">Slug :</label>
            <input type="text" name="slug_atome" value="<?= $res['slug'] ?>" disabled>
        </div>

        <div class="form-group">
            <label for="">Symbole :</label>
            <input type="text" name="symbole_atome" value="<?= $res['symbole'] ?>" disabled>
        </div>
        <div class="form-group">
            <input type="submit" name="ajout_submit" value="Supprimer">
        </div>
    </form>
    <?php } ?>
</section>

<?php
include "../Views/foot.php";
?>
