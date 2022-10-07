<?php
setcookie("user","", time() - 3600, "/");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hapus Cookie</title>
</head>

<body>
<?php
echo "Cookie Berhasil Dihapus.";
?>
</body>
</html>