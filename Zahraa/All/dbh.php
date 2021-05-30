<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "purple_z";

$connection = mysqli_connect ($dbServername, $dbUsername, $dbPassword, $dbName);

if(!$connection){
    die("Error". mysqli_connect_error());
}
?>

<?php
$sql = "SELECT * FROM product WHERE PROD_IMG = 'zahraa/images/sale';";
$result  = mysqli_query($connection, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row ['3'];
    }
}
?>