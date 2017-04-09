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
		<header id="aa">
			<h1 style="text-align:center;">Add Questions</h1>
		</header>
		<table>
			<tr>
				<td style="width:50%;background:#ededed;padding:50px 10px 0px 10px;" valign="top">
			<form action="fAddQuestion.php" method="post">
			<div id="aa">
				<label class="desc" for="question" id="question" style="text-align:center;">Question</label> <div>
                <textarea id="question" name="question" spellcheck="true" style="width:90%;height:100px;" tabindex="1"></textarea>
                </div>
			</div><br>
			<div id="aa">
				<label class="desc" for="function_name" id="function_name">Function Name</label> <div><input class="field text fn" id="function_name" name="function_name" size="20" tabindex="2" type="text" value=""></div>
			</div><br>
			<div id="aa">
				<label>Category <div><select name="type">
					<option value="none">
						None
					</option>
					<option value="recursion">
						Recursion
					</option>
					<option value="forloop">
						For Loop
					</option>
					<option value="whileloop">
						While Loop
					</option>
					<option value="conditional">
						Conditional
					</option>
					<option value="indexing">
						Indexing
					</option>
				</select></div></label>
			</div><br>
			<div id="aa">
				<label id="aa">Difficulty <div><select name="difficulty">
					<option value="Easy">
						Easy
					</option>
					<option value="Medium">
						Medium
					</option>
					<option value="Hard">
						Hard
					</option>
				</select></div></label>
			</div><br>
			<div id="aa">
				<label class="desc" for="point_value" id="point_value">Point Value</label><div> <input id="point_value" name="point_value" size="20" spellcheck="true" tabindex="3"></div>
			</div><br>
			<div id="aa">
				<label class="desc" for="test_case" id="test_case">Test Case Input</label><div> <input id="test_case" name="test_case" size="50" spellcheck="true" tabindex="4"></div>Separate multiple cases using " || " (e.g. "+",4,5 || "-",7,6 || "*",1,2).
			</div><br>
			<div id="aa">
        <label class="desc" for="test_result" id="test_result">Test Case Result</label><div> <input id="test_result" name="test_result" size="50" spellcheck="true" tabindex="5"></div>Separate multiple corresponding results using " || " (e.g. 9 || 1 || 2).
			</div><br>
				<div>
          <button id="saveForm" name="saveForm" type="submit" value="Submit">Submit</button>
				</div>
		</form>
	</td>
	<td style="width:50%;padding-left:5%;padding-right:5%;padding-top:35px;background:#ededed;" valign="top">
		<p>Previously entered questions:</p>
						<?php include("fSavedQuestions.php"); ?>
	</td>
	</tr>
	</table>
</body>
</html>
