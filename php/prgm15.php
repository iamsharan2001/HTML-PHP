<!-- 15. Write a program to create Chess board in PHP using for loop -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prgm15</title>
</head>
<body>
    <h1>Chess Board</h1>
    <table border width="400">
        <?php
            for($row=1; $row<=8; $row++) {
                echo "<tr>";
                for($col=1; $col<=8; $col++) {
                    $total = $row + $col;
                    if (($total % 2) == 0){
                        echo "<td width='30' height='30' bgcolor='black'></td>";
                    }
                    else{
                        echo "<td width='30' height='30' bgcolor='white'></td>";
                    }
                    
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
