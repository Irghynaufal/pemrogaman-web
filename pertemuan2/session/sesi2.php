<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sesi 2</title>
</head>

<body>
<?php
echo "Halo nama saya " . $_SESSION['nama'] . "<br>" . "Nomor Absen saya " . $_SESSION['absen'];
?>
</body>
</html>