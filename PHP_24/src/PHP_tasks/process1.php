<?php
$title = "Your Info";
$md="Please use appropriate meta Description";
include 'header.php'; ?>


<?php
// what to do with the form data

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];

echo "Hello " . $firstname ." ". $lastname. ". You are welcome to my site."

?>

<?php include 'footer.php'; ?>