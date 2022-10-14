<?php
$connection = mysqli_connect("localhost", "root", "", "project1");
if(!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connection Successfully to project1 <br>";

$query = mysqli_query($connection, "SELECT ID, NAMA_LENGKAP, JURUSAN FROM guru");

if(!$query) {
    echo("Error query " . mysqli_error($connection));
}
//echo "<br> Hasil numerik <br>";
//while($data = mysqli_fetch_array($query, MYSQLI_NUM)) {
//    print "ID : " . $data[0] . "<br>";
//    print "NAMA_LENGKAP : " . $data[1] . "<br>";
//   print "JURUSAN : " . $data[2] . "<br>";
//}

while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
    print "ID : " . $row["ID"] . "<br>";
    print "NAMA_LENGKAP : " . $row["NAMA_LENGKAP"] . "<br>";
   print "JURUSAN : " . $row["JURUSAN"] . "<br>";
}

mysqli_close($connection);
?>