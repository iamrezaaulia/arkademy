<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arkademy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$id = $_GET["id"];

$sql = ' DELETE FROM name WHERE id = "'.$id.'" ';

if (mysqli_query($conn, $sql)) {
    echo "Deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);

header("location: ./soal-6c.php");

?>