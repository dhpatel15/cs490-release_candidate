<?php

$connection = curl_init();
curl_setopt($connection, CURLOPT_URL, "http://afsaccess3.njit.edu/~ab674/cs490/mSavedQuestions.php");
curl_setopt($connection, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($connection);
curl_close($connection);
$result = json_decode($result, true);

$count = $result["totalcount"];

echo "<p style='text-align:left;'>";

for ($i=0; $i<$count; $i++) {
  echo $result["question$i"];
  echo " (Difficulty: ";
  echo $result["difficulty$i"];
  echo ") ";
  echo " (";
  echo $result["points$i"];
  echo " points)";
  echo "<br><br>";
}

echo "</p>";

?>
