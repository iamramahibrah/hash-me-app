<?php
echo "<link rel='stylesheet' type='text/css' href='styles.css'>";

if (isset($_POST['name'])) {
  $name = $_POST['name'];

  // show the $name and $email
  $hash = md5($name);
  echo "Your Hash: $hash";
} else {
  echo 'You need to provide your name and email address.';
}