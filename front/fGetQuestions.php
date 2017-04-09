<?php

$connection = curl_init();
curl_setopt($connection, CURLOPT_URL, "http://afsaccess3.njit.edu/~ab674/cs490/mBlankExam.php");
curl_setopt($connection, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($connection);
curl_close($connection);
$result = json_decode($result, true);

$count = 0;

echo "<p style='text-align:left;'>";

foreach ($result as $question) {
  echo "$question";
  echo "<br><br>";
  $count++;
}

echo "</p>";

?>
