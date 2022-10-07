<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sesi 3</title>
</head>

<body>
<?php
$_SESSION['nama'] = "Hymas";

echo "Variable sesi telah diubah";

?>
</body>
</html>