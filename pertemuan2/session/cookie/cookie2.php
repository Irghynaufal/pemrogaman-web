<?php
$cookie_name= "user";
$cokiie_value= "Irghy";

setcookie($cookie_name,$cokiie_value, time() + 3600, "/");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cookie 1</title>
</head>

<body>
<?php
if (isset($_COOKIE[$cookie_name])) {
    echo"Cookie dengan nama " . $cookie_name . " tersedia." . "<br>";
    echo "Dengan value : " . $_COOKIE[$cookie_name];
}else{
    echo "Cookie belum ditemukan / expired ";
}


?>
</body>
</html>