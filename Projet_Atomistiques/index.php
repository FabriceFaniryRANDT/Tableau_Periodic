<?php
include_once 'Views/head.php';
?>
<head>
    <style>
        body{
            width: 100vw;
            height: 100vh;
        }
        section{
            /* background-image: url('sql/fond2.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat; */
            background-color: ghostwhite;
            display: grid;
            place-items: center; 
            width: 100vw;
            height: calc(100vh - 50px);
            overflow: hidden;
            position: relative;
        }
        h1{
            font-size: 55pt;
            font-family: cursive;
            color: grey;
            /* background-image: linear-gradient(to right, yellow,blue); */
            padding: 10px 30px;
            cursor: default;
            border-bottom: 15px dotted transparent;
            animation: animer 3s infinite alternate;
        }
        
        @keyframes animer {
            0%{
                border-bottom: 15px dotted grey;
                color: teal;
                opacity: .9;
            }
            100%{
                opacity: 1;
                color: grey;
                border-bottom: 15px dotted teal;

            }
        }

        h6{
            position: absolute;
            bottom: 10px;
            right: 20px;
            color: black;
            cursor: default;
        }
    </style>
</head>

<?php
include_once 'Views/header.php';
?>
<section>
    <h1>Sciences Physiques</h1>
    <h6>RANDT - 2025</h6>
</section>
<?php
include_once 'Views/foot.php';
?>