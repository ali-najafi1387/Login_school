<?php
$co = include("Connect.php");
mysqli_set_charset($co, "utf8");
$id = $_POST['ID'];
$sql = "DELETE FROM family WHERE ID = '$id'";
if (mysqli_query($co, $sql)) {
    echo "رکورد با موفقیت حذف شد.";
} else {
    echo "خطا در حذف رکورد";
}

mysqli_close($co);
?>
<a href="../index.html"><input type="button" value="صفحه اصلی"></a>