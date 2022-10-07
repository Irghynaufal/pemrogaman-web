<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sesi 1</title>
</head>

<body>
<?php
$_SESSION['nama'] = "Irghy Adrian Naufal";

$_SESSION['absen'] = 10 ;

echo "Nama " . $_SESSION['nama'] . "<br>" . "Nomor Absen " . $_SESSION['absen'];
?>
</body>
</html>