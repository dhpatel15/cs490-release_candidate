<?php

$connection = curl_init();
curl_setopt($connection, CURLOPT_URL, "http://afsaccess3.njit.edu/~ab674/cs490/mBlankExam.php");
curl_setopt($connection, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($connection);
curl_close($connection);
$result = json_decode($result, true);

$count = 0;
$flag = true;

foreach ($result as $question) {
  $count++;
}

if ($count == 0) {
  echo "<tr style='text-align:center;'>";
  echo "No exam available.";
  echo "</tr>";
  $flag = false;
}

$count = 0;

foreach ($result as $question) {
  echo "<tr style='text-align:center;'>";
  echo "<label id='question$count' for='question$count' style='text-align:center;'>$question</label>";
  echo "</tr><tr>";
  echo "<input type='hidden' id='actualquestion$count' name='actualquestion$count' value='$question'>";
  echo "</tr><br>";
  echo "<textarea id='question$count' name='question$count' form='testtime' wrap='hard' style='width:100%;height:200px;margin:0 auto;margin-top:5px;'></textarea>";
  echo "<br><br><br>";
  $count++;
}

if ($flag == true) {
  echo "<div>";
  echo "<div>";
  echo "<button id='saveForm' name='saveForm' type='submit' value='Submit' style='margin-bottom:50px;'>Submit</button>";
  echo "</div>";
  echo "</div>";
}

?>
