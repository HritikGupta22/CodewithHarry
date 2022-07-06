<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>firstPhpWEBSITE</title>
</head>
<style>
    .red{
        background: red;
    } 
    .pink{
        background: hotpink;
    }
    </style>
<body>
    <div class="red">THIS IS MY FIRST PHP firstPhpWEBSITE <br>
    <?php 
    echo "HELLO WORLD THIS IS PRINTED USING PHP<br>";
    echo "HELLO WORLD AGAIN";
    ?>
    </div>
    <div class="pink">
    <?php
    echo "<h1><center>::: HRITIK :::</center></h1>";
    ?>
    </div>
    <?php
    echo "<br>";
    echo "<h3>: Arithimatic OPERATOR :</h3>";
    $var1=45;
    $var2=22;
    echo "no 1: ".$var1;
    echo "<br>&<br>";
    echo "no 2: ".$var2;
    echo "<br>sum of var1 & var2 is " .$var1+$var2;
    echo "<br>diff of var1 & var2 is " .$var1-$var2;
    echo "<br>product of var1 & var2 is " .$var1*$var2;
    echo "<br>divide of var1 & var2 is " .$var1/$var2;
    echo "<br>remainder of var1 & var2 is " .$var1%$var2;
    echo "<br>";
    $newvar=$var1;
    $newvar+=1;
    echo "value of new var after add 1 is ";
    echo $newvar;
    echo "<br>";
    $newvar-=1;
    echo "value of new var after minus 1 is ";
    echo $newvar;
    echo "<br>";
    $newvar*=2;
    echo "value of new var after multiply 2 is ";
    echo $newvar;
    echo "<br>";
    echo "<h3>: Comparision OPERATOR :</h3>";
    echo "<br>";
    echo "Is value of 1==3 ";
    echo var_dump(1==3);
    echo "<br>";
    echo "Is value of 1 is not equal 3 ";
    echo var_dump(1!=3);
    echo "<br>";
    echo "Is value of 1 is greater than 3 ";
    echo var_dump(1>=3);
    echo "<br>";
    echo "Is value of 1 is less than 3 ";
    echo var_dump(1<=3);
    echo "<br>";
    echo "<h3>: DATA TYPE :</h3>";
    $varS1="this is string";
    echo var_dump($varS1);
    echo "<br>";
    echo $varS1;
    echo "<br>";
    $varS2=88;
    echo var_dump($varS2);
    echo "<br>";
    $varS3=88.647;
    echo var_dump($varS3);
    echo "<br>";
    $varS4=TRUE;
    echo var_dump($varS4);
    echo "<br>";
    define('pi',3.144);
    echo pi;
    ?>

</body>
</html>