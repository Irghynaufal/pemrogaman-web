<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sesi 4</title>
</head>

<body>
<?php
echo "Isi dari variable session alamat adalah : " .  $_SESSION['alamat'];
?>
</body>
</html>