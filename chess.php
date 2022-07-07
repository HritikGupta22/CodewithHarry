<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess</title>
    <link rel="stylesheet" href="chess.css">
</head>
<body>
    <img class="bgp" src="cj.jpg" alt="asd">
    <div class="container">
    <form action=""method="POST">
    <input type="text" class="box" name="ch" placeholder="Enter the digit"><br>
    <input type="submit" class="btn" name="submit" value="GenerateChessBoard"  action="#" onsubmit="required()">
</form>
<br>
<table>

<?php
    if (isset($_POST['submit'])) {
        $data=$_POST['ch'];
        echo "<br>";
        echo '<span style="color: red; font-size: 50px;"> ' .$data;
        echo "x".$data;

        for ($row=1; $row <= $data; $row++) { 
            echo "<tr>";
            for ($col=1; $col <= $data; $col++) { 
                if (($row+$col)%2==0) {
                    echo "<td class='bg'> </td>";
                }
                else{
                    echo "<td class='bg1'> </td>";  
                }
            }
           echo "</tr>";
        }
    }

?>







</table>
    </div>
    <script src="index.js"></script>
    </script>
   
</body>
</html>