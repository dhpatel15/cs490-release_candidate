<?php

$connection = curl_init();
curl_setopt($connection, CURLOPT_URL, "http://afsaccess3.njit.edu/~bm297/CS490-Exam-System/bSavedQuestions.php");
curl_setopt($connection, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($connection);
curl_close($connection);

echo $result;

?>
