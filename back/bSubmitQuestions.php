<?php

$result = json_decode(file_get_contents("php://input"), true);

$conn = mysqli_connect("sql2.njit.edu", "bm297", "WY2X2ekF", "bm297");
$tbl = "Exam_questions";

foreach ($result as $line) {
  $query = "insert into $tbl values ('$line')";
  mysqli_query($conn, $query);
}

echo true;

exit;

?>
