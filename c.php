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
    mysqli_set_charset($co, "utf8");
    $id = $_POST["id"];
    $quary = "SELECT * FROM family WHERE ID=$id";
    $Result = mysqli_query($co, $quary);
    if (mysqli_num_rows($Result) > 0) {
        $row = mysqli_fetch_assoc($Result);
        echo "نام: " . $row['Nam'] . "<br>";
        echo "نام خانوادگی: " . $row['Nam_K'] . "<br>";
        echo "آیا مطمئن هستید که می‌خواهید این رکورد را حذف کنید؟<br>";
        echo "<form action='delete_user.php' method='post'>
                <input type='hidden' name='ID' value='$id'>
                <button type='submit' name='delete'>حذف</button>
              </form>";
    } else {
        echo ("پیدا نشد");
    }
    ?>
    <a href="../index.html"><input type="button" value="صفحه اصلی"></a>
</body>

</html>