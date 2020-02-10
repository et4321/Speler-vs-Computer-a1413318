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
            $_SESSION['drawcheck'] = 0;
            $_SESSION['wincheck'] = 0;
            $_SESSION['lostcheck'] = 0;
            $draw = false;
            $win = false;
            $lost = false;

            $arrRandom = array('steen', 'papier', 'schaar');
            $_SESSION['computer'] = array_rand($arrRandom);
           if($_SESSION['computer'] == '0' && isset($_POST['showinput'])){
               $_SESSION['output'] = 'steen';
            }
           if($_SESSION['computer'] == '1' && isset($_POST['showinput'])){
            $_SESSION['output'] = 'papier';
            }
            if($_SESSION['computer'] == '2' && isset($_POST['showinput'])){
                $_SESSION['output'] = 'schaar';
            }
            

            if(isset($_POST['steen'])){
                $_SESSION['player:1'] = 'steen';
            }
            if(isset($_POST['papier'])){
                $_SESSION['player:1'] = 'papier';
            }
            if(isset($_POST['schaar'])){
                $_SESSION['player:1'] = 'schaar';
            }
    ?>

    <div class="playerwin">
            <?php 

                if($_SESSION['player:1'] == $_SESSION['output'] && isset($_POST['showinput'])){
                    $draw = true;
                    echo "DRAW";
                }
                if($_SESSION['player:1'] == 'steen' && $_SESSION['output'] == 'papier' && isset($_POST['showinput'] )){
                    $lost = true;
                    echo "Computer WIN";
                }
                if($_SESSION['player:1'] == 'papier' && $_SESSION['output'] == 'schaar' && isset($_POST['showinput'] )){
                    $lost = true;
                    echo "Computer WIN";
                }
                if($_SESSION['player:1'] == 'schaar' && $_SESSION['output'] == 'steen' && isset($_POST['showinput'] )){
                    $lost = true;
                    echo "Computer WIN";
                }
                if($_SESSION['output'] == 'steen' && $_SESSION['player:1'] == 'papier' && isset($_POST['showinput'] )){
                    $win = true;
                    echo "Player:1 WIN";
                }
                if($_SESSION['output'] == 'papier' && $_SESSION['player:1'] == 'schaar' && isset($_POST['showinput'] )){
                    $win = true;
                    echo "Player:1 WIN";
                }
                if($_SESSION['output'] == 'schaar' && $_SESSION['player:1'] == 'steen' && isset($_POST['showinput'] )){
                    $win = true;
                    echo "Player:1 WIN";
                }
            ?>
    </div>

    <div class="spelers">
        <?php if(isset($_POST['showinput'])) {
            echo "Speler :". $_SESSION['player:1'];
        }else{
            echo "Speler :";
        }
        ?>
        <br>
        <br>
        <?php if(isset($_POST['showinput'])) {
        echo "Computer :". $_SESSION['output'];
        }else{
            echo "Computer :";
        }
        ?>
    </div>


    <div>
        <?php
            if($draw){
                $_SESSION['drawcheck'] = ++$_SESSION['drawcount'];
            }
            echo "Draw's :". $_SESSION['drawcount'];
            ?>
            <br>
            <?php
            if($win){
                $_SESSION['wincheck'] = ++$_SESSION['wincount'];
            }
            echo "Win's :". $_SESSION['wincount'];
            ?>
            <br>
            <?php
            if($lost){
                $_SESSION['lostcheck'] = ++$_SESSION['lostcount'];
            }
            echo "Losses :". $_SESSION['lostcount'];
        ?>
    </div>

<form  method="POST">
    <div class="playereen">
        <h3>player1</h3>
            <input name="steen" type="submit" value="steen">
            <input name="papier" type="submit" value="papier">
            <input name="schaar" type="submit" value="schaar">
    </div>
    <div class="showbutton">
            <h3>show the results</h3>
            <input name="showinput" type="submit" value="submit">
            <h3>Delete al info from session</h3>
            <input type="submit" name="deletesession" value="submit">
    </div>
<?php
    if(isset($_POST['deletesession'])){
        $_SESSION['lostcount'] = 0;
        $_SESSION['wincount'] = 0;
        $_SESSION['drawcount'] = 0;
    }
?>
</form>
</body>

</html>