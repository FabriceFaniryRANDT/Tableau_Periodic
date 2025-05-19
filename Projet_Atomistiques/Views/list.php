<?php

include '../Model/read.php';

if (isset($_GET["atome_search"]) && isset($_GET["btn_search"]) && $_GET["btn_search"]==1) {

    $q = $_GET["atome_search"];
    $sql = "SELECT * FROM atome WHERE nom LIKE '%$q%' OR numero LIKE '%$q%' OR symbole LIKE '%$q%' OR decouverte_annee LIKE '%$q%' OR info_periode LIKE '%$q%' OR info_groupe LIKE '%$q%'" ;

    $select = mysqli_query($conn,$sql);
    $rows =  mysqli_num_rows($select);

}else {
    $sql = "SELECT * FROM atome";

    $select = mysqli_query($conn,$sql);
    $rows =  mysqli_num_rows($select);
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau periodique</title>
    <link rel="stylesheet" href="../Asset/style.css">
    <link rel="shortcut icon" href="../sql/Logo-Perso-FABRICE-FANIRY-RANDT.png" type="image/x-icon">
    <style>
        body{
            display: flex;
            flex-direction: column;
        }
        header{
            justify-content: end;
        }
        form{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        form input{
            outline: 0;
            border: 0;
            font-size: 13pt;
            padding: 5px;
        }

        form button{
            outline: 0;
            border: 0;
            font-size: 13pt;
            display: grid;
            place-items: center;
            width: 30px;
            height: 31px;
            border-radius: 0px 3px 3px 0px;
            cursor: pointer;
            background-color: darkcyan;
            padding: 5px;
        }
        form img{
            width: 20px;
            height: 20px;
        }
        
        section{
            width: 100vw;
            height: calc(100vh - 50px);
            overflow-y: scroll;
        }

        table{
            width: 100%;
        }
        thead{
            background-color: gainsboro;
            height: 40px;
        }

        th,td{
            width: 80px;
        }

        td:nth-child(1),td:nth-child(5),td:nth-child(6){
            
            padding-right: 10px;
        }

        th:nth-child(1),td:nth-child(1){
            width: 20px ; 
        }
        
        td{
            height: 40px;
            /* background-color: red; */
            border-bottom: 1px solid gainsboro;
        }
        tbody{
            text-align: right;
            
        }
        td:nth-child(2),td:nth-child(3),td:nth-child(4){
            padding-left: 10px;
            text-align: left;
        }
        td:nth-child(7){
            display: flex;
            background-color: dodgerblue;
            align-items: center;
            justify-content: space-evenly;
            width: 100%;
            place-items: center;
            
        }
        tr{
            cursor: pointer;
        }
        td a img{
            width: 30px;
        }

    </style>
</head>
<body>
    <header>
        <nav>
            <li><a href="../index.php">Acceuil</a></li>
        </nav>
        <form method="GET">
            <input placeholder="<?php if (isset($_GET['atome_search'])) { echo $_GET['atome_search'];}else {echo "mots-clé";}?>" type="search" name="atome_search" id="atome_search">
            <button name="btn_search" value=1 type="submit"><img src="../Asset/Google font/search_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt=""></button>
        </form>
    </header>
    <section>
        <table>
            <thead>
                <th>Numéro</th>
                <th>Nom</th>
                <th>Symbole</th>
                <th>Info du groupe</th>
                <th>Info du periode</th>
                <th>Année decouverte</th>
                <th>Action</th>
            </thead>
            <tbody>
            <?php

                while ($res =  mysqli_fetch_assoc($select)) {
                    ?>
                    <tr id="<?= $res['id'] ?>">
                        <td><?= $res['numero'] ?></td>
                        <td><?= $res['nom'] ?></td>
                        <td><?= $res['symbole'] ?></td>
                        <td><?= $res['info_groupe'] ?></td>
                        <td><?= $res['info_periode'] ?></td>
                        <td><?= $res['decouverte_annee'] ?></td>
                        <td><a href="../Controllers/information.php?id=<?= $res['id'] ?>"><img src="../Asset/Google font/info_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt="delete_btn"></a><a href="../Controllers/suppression.php?id=<?= $res['id'] ?>"><img src="../Asset/Google font/delete_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt="delete_btn"></a></td>
                    </tr>
                    <?php
                }
            ?>
                
            </tbody>
        </table>
    </section>

    <script src="../Asset/script.js"></script>
</body>
</html>