<!DOCTYPE html>
<?php session_start(); ?>
<head>
    <img src="bit project banner.png" alt="bit banner">
    <link rel="stylesheet" href="style.css">
    <title>
        steen papier schaar
    </title>
</head>

<body>
    <h1 class="title">
        Steen Papier Schaar!
    </h1>

    <?php
            if(isset($_POST['steen'])){
                $_SESSION['player:1'] = 'steen';
            }
            if(isset($_POST['papier'])){
                $_SESSION['player:1'] = 'papier';
            }
            if(isset($_POST['schaar'])){
                $_SESSION['player:1'] = 'schaar';
            }
            if(isset($_POST['steen2'])){
                $_SESSION['player:2'] = 'steen';
            }
            if(isset($_POST['papier2'])){
                $_SESSION['player:2'] = 'papier';
            }
            if(isset($_POST['schaar2'])){
                $_SESSION['player:2'] = 'schaar';
            }
    ?>

    <div class="playerwin">
            <?php 
                if($_SESSION['player:1'] == $_SESSION['player:2'] && isset($_POST['showinput'])){
                    echo "DRAW";
                }
                if($_SESSION['player:1'] == 'steen' && $_SESSION['player:2'] == 'papier' && isset($_POST['showinput'] )){
                    echo "Player:2 WIN";
                }
                if($_SESSION['player:1'] == 'papier' && $_SESSION['player:2'] == 'schaar' && isset($_POST['showinput'] )){
                    echo "Player:2 WIN";
                }
                if($_SESSION['player:1'] == 'schaar' && $_SESSION['player:2'] == 'steen' && isset($_POST['showinput'] )){
                    echo "Player:2 WIN";
                }
                if($_SESSION['player:2'] == 'steen' && $_SESSION['player:1'] == 'papier' && isset($_POST['showinput'] )){
                    echo "Player:1 WIN";
                }
                if($_SESSION['player:2'] == 'papier' && $_SESSION['player:1'] == 'schaar' && isset($_POST['showinput'] )){
                    echo "Player:1 WIN";
                }
                if($_SESSION['player:2'] == 'schaar' && $_SESSION['player:1'] == 'steen' && isset($_POST['showinput'] )){
                    echo "Player:1 WIN";
                }
                

            ?>
    </div>

    <div class="spelers">
        <?php if(isset($_POST['showinput'])) {
            echo "Speler 1:". $_SESSION['player:1'];
        }else{
            echo "Speler 1:";
        }
        ?>
        <br>
        <br>
        <?php if(isset($_POST['showinput'])) {
        echo "Speler 2:". $_SESSION['player:2'];
        }else{
            echo "Speler 2:";
        }
        ?>
    </div>

<form  method="POST">
    <div class="playereen">
        <h3>player1</h3>
            <input name="steen" type="submit" value="steen">
            <input name="papier" type="submit" value="papier">
            <input name="schaar" type="submit" value="schaar">
    </div>
    <div class="playertwee">
        <h3>player2</h3>
            <input name="steen2" type="submit" value="steen">
            <input name="papier2" type="submit" value="papier">
            <input name="schaar2" type="submit" value="schaar">
    </div>
    <div class="showbutton">
            <h3>show the results</h3>
            <input name="showinput" type="submit" value="submit">
    </div>
</form>
</body>

</html>