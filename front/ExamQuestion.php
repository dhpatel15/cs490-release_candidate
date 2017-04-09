<!DOCTYPE html>
<html>
<head>
	<link href="WelcomeInst.css" rel="stylesheet">
	<title>Welcome to NJIT</title>
</head>
<body>
	<nav>
		<ul>
			<li>
				<a href="WelcomeInst.html">Home</a>
			</li>
			<li>
				<a href="AddQuestion.php">Add Questions</a>
			</li>
			<li>
				<a href="ExamQuestion.php">Create Exam</a>
			</li>
			<li>
	<a href="ResetTables.php">Edit Exam</a>
			</li>
			<li>
				<a href="GradeRelease.html">Release Grade</a>
			</li>
			<li>
				<a class="active" href="index.html">Log Out</a>
			</li>
		</ul>
		<div class="handle">
			Menu
		</div>
	</nav>
	<h1 style="text-align:center;">Create Exam</h1>

	<table>
		<tr>
			<td style="width:50%;background:#ededed;padding:35px 10px 0px 10px;" valign="top">
	<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">

		<div>
			<div>
				<p>Filter questions by difficulty:</p>
				<button id="pick" name="pick" type="submit" value="Easy" style="margin-bottom:20px;">Easy</button>
				<button id="pick" name="pick" type="submit" value="Medium" style="margin-bottom:20px;">Medium</button>
				<button id="pick" name="pick" type="submit" value="Hard" style="margin-bottom:20px;">Hard</button>
			</div>
			<div>
				<p>Filter questions by category:</p>
				<button id="pick" name="pick" type="submit" value="recursion" style="margin-bottom:4px;">Recursion</button>
				<button id="pick" name="pick" type="submit" value="forloop" style="margin-bottom:4px;">For Loop</button>
				<button id="pick" name="pick" type="submit" value="whileloop" style="margin-bottom:4px;">While Loop</button>
				<button id="pick" name="pick" type="submit" value="conditional" style="margin-bottom:20px;">Conditional</button>
				<button id="pick" name="pick" type="submit" value="indexing" style="margin-bottom:20px;">Indexing</button>
			</div>
			<br>
			<div>
				<p></p>
				<button id="pick" name="pick" type="submit" value="all" style="margin-bottom:20px;">Show All Questions</button>
			</div>
		</div>

	</form>

	<div id="aa" style="background:#ededed;width:90%;margin:0 auto;margin-top:30px;margin-bottom:50px;text-align:left;">
		<?php include("fLoadQuestions.php"); ?>
	</div>

</td>
<td style="width:50%;padding-left:5%;padding-right:5%;padding-top:35px;background:#ededed;" valign="top">
	<p>Previously selected questions:</p>
					<?php include("fGetQuestions.php"); ?>
</td>
</tr>
</table>


</body>
</html>
