<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $co=include("Connect.php");
    mysqli_set_charset($co,"utf8");
    $Nam = $_POST["Nam"];
    $Nam_K = $_POST["Nam_K"];
    $code_meli = $_POST["code_meli"];
    $tellphone = $_POST["tellphone"];
    $query = "INSERT INTO family(Nam, Nam_K, CodeM, Shomare) 
VALUES ('$Nam','$Nam_K',$code_meli,$tellphone)";
    $C = mysqli_query($co, $query);
    if ($C)
        echo ("Karbar Ezafe Shod!");
    else
        echo ("Moshkel darim!");
    mysqli_close($co);
    ?>
    <a href="../index.html"><input class="input" type="button"></a>
</body>

</html>