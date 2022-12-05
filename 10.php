<html>

<head>
    <title>Factorial Program using loop in PHP</title>
</head>

<body>
    <form method="post">
        Enter the Number:<br>
        <input type="number" name="number" id="number">
        <input type="submit" name="submit" value="Submit" />
    </form>
    <?php
if ($_POST) {


    $number = $_POST['number'];

    $num = strrev($number);


    if ($number ** 2 == strrev($num ** 2)) {
        echo "number is adam";

    } else {
        echo "number is not adam";
    }
}
?>
</body>

</html>