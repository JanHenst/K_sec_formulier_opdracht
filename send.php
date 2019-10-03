<?php
$Voornaam       = $_POST["Voornaam"];
$Achternaam     = $_POST["Achternaam"];
$Straat         = $_POST["Straat"];
$Huisnummer     = $_POST["Huisnr"];
$Postcode1      = $_POST["Postcode1"];
$Postcode2      = $_POST["Postcode2"];
$Woonplaats     = $_POST["Woonplaats"];
$Email          = $_POST["Email"];
$Telefoonnummer = $_POST["Telefoonnummer"];
$Postcode = $Postcode1 . $Postcode2;

 ?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "k_sec-formulier-opdracht";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO formulier (Voornaam, Achternaam, Straat, Huisnummer, Postcode, Woonplaats, Email, Telefoonnummer)
VALUES ('$Voornaam', '$Achternaam', '$Straat', '$Huisnummer', '$Postcode', '$Woonplaats', '$Email', '$Telefoonnummer')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
