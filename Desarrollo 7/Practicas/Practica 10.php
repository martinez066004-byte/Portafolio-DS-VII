<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pikachu</title>
</head>
<body>
    <?php
    $n = 1;
    $battle = "pelea";
    echo " nivel $n alcanzado. <br>";
    while ($n <5)
        {
            if ($battle  == "pelea"){
             $n+=1;
             echo "nivel $n alcanzado. <br>";
            }
            if ($battle == "huye"){
                $n-=1;
                echo "nivel $n alcanzado <br>";
            }
        }
        ?>
</body>
</html>





