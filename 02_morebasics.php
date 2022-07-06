<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SECOND php page</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            max-width:80%;
            background-color: rgb(213, 123, 123);
            margin:auto;
            padding: 23px;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Lets Learn about PHP</h1>
        <p>here is party status:</p>
        <?php
        $age=54;
        if ($age>20) {
            echo "you can go to party";
        }
        else{
            echo "you can not go to party";
        }
        echo "<br>";
        echo "languages:<br>";
        $languages=array("C","python","C++","PHP");
        for ($i=0; $i <count($languages); $i++) { 
            echo $i+1;
            echo " language ".$languages[$i];
            echo "<br>";
            
        }
        echo "No of languages ".count($languages);
        echo "<br>";
        echo var_dump($languages[1]);
        foreach($languages as $value){
            echo "<br>The value from foreach loop is ";
            echo $value;
        }
        echo "<br>";
        function print5(){
            echo "five";
        }
        print5();
        function print_num($num)
        {
            echo "<br>your no is ";
            echo $num;
        }
        print_num(89);
        print_num(110);
        ?>
    </div>
</body>
</html>