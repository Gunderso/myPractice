<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

    <div class="flex-container">

        <div class="header">
             <?php include "logo.inc.php" ?>
             <?php include "menu.inc.php" ?>
        </div>
 
        <div class="about_me">
          <h1> <?php echo $p ?> </h1>

            <div class="data">
                <div class="myImage">
                 <?php
                 echo '<img src="/img/trains.jpg">';
                ?>
            </div>

                <div class="fullname">
                    <p> Меня зовут
                    <?php echo $name, ' ', $surname . '<br>';
                         echo 'город', ' ', $city; ?>
                    </p>

                    <p> Мне
                    <?php echo $age; ?>
                    год </p>
                    <p> Я научился создавать переменные </p>
                    <p> А также изучил простые операции с ними </p>
                </div>

            <div class="knowledge">
             
                    <?php include 'knowledge.inc.php'; ?>
                    <?php
                    echo $a, ' ', $b, ' ', $c;
                    ?> <br>

                    <?php
                        $a = 15;
                        $b = 20;
                        $c = $a + $b;
                        echo $c;
                    ?>
                     <?php
                        echo $d;
                    ?>
            </div>

            <div class="article">
                <p class="text">
                 Интересный факт о железных дорогах России.
                 Общий парк грузовых перевозок насчитывает более 1 миллиона штук.
                 Сколько нужно усилий, чтобы обеспечить ежеминутное движение данной массы тары.
                </p>
            </div>
        </div>
            
            <?php include 'footer.inc.php' ?>
    
    </div>

</body>
<html>