<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  //$gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
echo "le nom est : lyly".  $name ."<br>";
echo "l'email est: ".  $website."<br>";
echo "le commentaire  est : ".  $comment."<br>";
//echo "le nom est : ".  $gender."<br>";
?>