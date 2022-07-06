<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    <?php
    $str = "This is string ";
    echo $str;
    echo "<br>";
    $len =strlen($str);
    echo "Length of string is ".$len;
    echo "<br>No of words in string is ".str_word_count($str);
    echo "<br>Reverse of string is ".strrev($str);
    echo "<br>position search in string is ".strpos($str,"st");
    echo "<br>replace 'in' elemnent in string is -".str_replace("in","at",$str);



    ?>

</body>
</html>