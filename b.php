<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $co = include("Connect.php");
    $code_meli = $_POST["code_meli"];
    $tellphone = $_POST["tellphone"];
    $query = "SELECT * FROM family WHERE CodeM=$code_meli AND Shomare=$tellphone";
    $resualt = mysqli_query($co, $query);
    $row = mysqli_num_rows($resualt);
    if ($row == 1) {
        echo ("Ba Moafaghiat Anjam Shod!");
    } else {
        echo ("Shoma Sabt naam nakardid!");
    }
    mysqli_close($co);
    ?>
    <a href="../index.html"><input class="input" type="submit" placeholder="صفحه اصلی"></a>
</body>

</html>