<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sesi 5</title>
</head>

<body>
<?php

if (isset($_SESSION['alamat'])) {
    echo "alamat saya " . " " . $_SESSION['alamat'];
}else {
    echo "Variable alamat belum dibuat / sudah terhapus";
}
?>
</body>
</html>