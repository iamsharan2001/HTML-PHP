<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch case</title>
</head>
<body>
    <h2>switch case</h2>
    <form action="" method="POST" enctype="multipart/form">
        enter first number:<input type="text" name="a"/><br><br>
        enter second number:<input type="text" name="b"/><br><br>
        <input type="radio" name="arithmetic" value="add"/>Addition
        <input type="radio" name="arithmetic" value="sub"/>subtraction
        <input type="radio" name="arithmetic" value="mult"/>Multiplication
        <input type="radio" name="arithmetic" value="div"/>Division<br><br>
        <input type="submit" name="submit" value="submit"/><br><br>
    </form>
    <?php
     if(isset($_POST['submit']))
     {
        $a= $_POST["a"];
        $b= $_POST["b"];
        $arithmetic = $_POST["arithmetic"];


        switch($arithmetic)
        {
            case 'add' :echo "Addition of two number is:". $a + $b;
            break;
            case 'sub' :echo "Addition of two number is:". $a - $b;
            break;
            case 'mult' :echo "Addition of two number is:". $a * $b;
            break;
            case 'div' :echo "Addition of two number is:". $a / $b;
            break;
        }
        
     }
    ?>
</body>
</html>