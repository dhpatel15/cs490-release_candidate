<?php

$conn = mysqli_connect("sql2.njit.edu", "bm297", "WY2X2ekF", "bm297");
$tbl = "Exam_questions";
$query = "select * from $tbl";
$rows = mysqli_query($conn, $query);

$result = array();
while($row = mysqli_fetch_assoc($rows)){
	$result[] = $row['Question'];
}

echo json_encode($result);

exit;

?>
