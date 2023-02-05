<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>String length</title>
</head>
<body>
    <form action="" method="POST">
        <h3>Enter The String</h3>
        <input type="text" name="str">
        <input type="submit" name="checkstr" value="Checklength">
    </form>
    <?php 
    if (isset($_POST['checkstr']))
    {
        $str = $_POST['str'];
        echo "<h3>The String Is:</h3>" . $str;
        echo "<h3>length of the string : </h3>" . strlen($str);
        echo "<br>";
        echo "<h3>No of words in string : </h3>" . str_word_count($str);
    }
    ?>
</body>
</html>