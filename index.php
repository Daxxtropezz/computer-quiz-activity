<?php
$questions = array(
	/*Registered Jack-45*/
	"The RJ in RJ-45 stands for? ",
	/*UNIVERSAL SERIAL BUS*/ "USB stands for? ",
	/*CHARLES BABBAGE*/ "Who invented the first computer? ",
	/*FORTRAN*/ "What is the first programming language? ",
	/*JAMES GOSLING*/ "Who is the founder of the Java programming language? ",
	/*NETWORK PERFORMANCE*/ "Which refers to the network's efficiency? ",
	/*Bachelor of Science in Information Technology*/ "BSIT stands for? ",
	/*HyperText Markup Language*/ "HTML stands for? ",
	/*PHP*/ "What is the abbreviation of Hypertext Preprocessor? ",
	/*Guido Van Rossum*/ "Who invented the Python programming language? "
);

shuffle($questions);

$answers = array(
	array("Registered Jack", "Registering Jack", "Register Jack"),
	array("Universal Serial Bus", "Uninterrupted Service Bus", "Utility Service Bind"),
	array("Charles Babbage", "Guido Van Rossum", "James Gosling"),
	array("Fortran", "Java", "C"),
	array("James Gosling", "Charles Babbage", "Guido Van Rossum"),
	array("Network Performance", "Accounting Management", "Security Management"),
	array("Bachelor of Science in Information Technology", "Bachelor in Science of Information Technology", "Bachelor at Science of Information Technology"),
	array("HyperText Markup Language", "HyperTest Makeup Language", "HyperTension Mockup Language"),
	array("PHP", "HTP", "HTTP"),
	array("Guido Van Rossum", "James Gosling", "Charles Babbage")
);

function rowChecker($numQ, $quans, $num2)
{
	$num1 = 0;

	// switch ($quans[$num2]) {
	// 	case 'The RJ in RJ-45 stands for? ':
	// 		$num1 = 0;
	// 		break;
	// 	case 'USB stands for? ':
	// 		$num1 = 1;
	// 		break;
	// 	case 'Who invented the first computer? ':
	// 		$num1 = 2;
	// 		break;
	// 	case 'What is the first programming language? ':
	// 		$num1 = 3;
	// 		break;
	// 	case 'Who is the founder of the Java programming language? ':
	// 		$num1 = 4;
	// 		break;
	// 	case 'Which refers to the network's efficiency? ':
	// 		$num1 = 5;
	// 		break;
	// 	case 'BSIT stands for? ':
	// 		$num1 = 6;
	// 		break;
	// 	case 'HTML stands for? ':
	// 		$num1 = 7;
	// 		break;
	// 	case 'What is the abbreviation of Hypertext Preprocessor? ':
	// 		$num1 = 8;
	// 		break;
	// 	case 'Who invented the Python programming language? ':
	// 		$num1 = 9;
	// 		break;
	// }

	if ($quans[$num2] == "The RJ in RJ-45 stands for? ") {
		$num1 = 0;
	} else if ($quans[$num2] == "USB stands for? ") {
		$num1 = 1;
	} else if ($quans[$num2] == "Who invented the first computer? ") {
		$num1 = 2;
	} else if ($quans[$num2] == "What is the first programming language? ") {
		$num1 = 3;
	} else if ($quans[$num2] == "Who is the founder of the Java programming language? ") {
		$num1 = 4;
	} else if ($quans[$num2] == "Which refers to the network's efficiency? ") {
		$num1 = 5;
	} else if ($quans[$num2] == "BSIT stands for? ") {
		$num1 = 6;
	} else if ($quans[$num2] == "HTML stands for? ") {
		$num1 = 7;
	} else if ($quans[$num2] == "What is the abbreviation of Hypertext Preprocessor? ") {
		$num1 = 8;
	} else if ($quans[$num2] == "Who invented the Python programming language? ") {
		$num1 = 9;
	}
	return $numQ * $num1;
}

$q1_rows  = rowChecker(1, $questions, 0);
$q2_rows  = rowChecker(1, $questions, 1);
$q3_rows  = rowChecker(1, $questions, 2);
$q4_rows  = rowChecker(1, $questions, 3);
$q5_rows  = rowChecker(1, $questions, 4);
$q6_rows  = rowChecker(1, $questions, 5);
$q7_rows  = rowChecker(1, $questions, 6);
$q8_rows  = rowChecker(1, $questions, 7);
$q9_rows  = rowChecker(1, $questions, 8);
$q10_rows = rowChecker(1, $questions, 9);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8" />
	<title>QUIZ BEE | ITEC 106A</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div id="outerlayer">
		<div id="questionnaire">
			<h1>COMPUTER QUIZ</h1>
			<form action="answers.php" method="POST" id="quiz">
				<ol>
					<li>
						<!--Question 1-->
						<h3 title="this is a required question."><?php echo $questions[0]; ?>*</h3>
						<div class="container">
							<input name="q1-ans" id="q1-ans-A" value="A" type="radio">
							<label for="q1-ans-A">A. <?php echo $answers[$q1_rows][1]; ?> </label>
						</div>
						<div class="container">
							<input name="q1-ans" id="q1-ans-B" value="B" type="radio">
							<label for="q1-ans-B">B. <?php echo $answers[$q1_rows][2]; ?> </label>
						</div>
						<div class="container">
							<input name="q1-ans" id="q1-ans-C" value="C" required type="radio">
							<label for="q1-ans-C">C. <?php echo $answers[$q1_rows][0]; ?> </label>
						</div>
					</li>
					<li>
						<!--Question 2-->
						<h3 title="this is a required question."><?php echo $questions[1]; ?>*</h3>
						<div class="container">
							<input name="q2-ans" id="q2-ans-A" value="A" type="radio">
							<label for="q2-ans-A">A. <?php echo $answers[$q2_rows][0]; ?> </label>
						</div>
						<div class="container">
							<input name="q2-ans" id="q2-ans-B" value="B" type="radio">
							<label for="q2-ans-B">B. <?php echo $answers[$q2_rows][2]; ?> </label>
						</div>
						<div class="container">
							<input name="q2-ans" id="q2-ans-C" value="C" required type="radio">
							<label for="q2-ans-C">C. <?php echo $answers[$q2_rows][1]; ?> </label>
						</div>
					</li>
					<li>
						<!--Question 3-->
						<h3 title="this is a required question."><?php echo $questions[2]; ?>*</h3>
						<div class="container">
							<input name="q3-ans" id="q3-ans-A" value="A" type="radio">
							<label for="q3-ans-A">A. <?php echo $answers[$q3_rows][0]; ?> </label>
						</div>
						<div class="container">
							<input name="q3-ans" id="q3-ans-B" value="B" type="radio">
							<label for="q3-ans-B">B. <?php echo $answers[$q3_rows][1]; ?> </label>
						</div>
						<div class="container">
							<input name="q3-ans" id="q3-ans-C" value="C" required type="radio">
							<label for="q3-ans-C">C. <?php echo $answers[$q3_rows][2]; ?> </label>
						</div class="container">
					</li>
					<li>
						<!--Question 4-->
						<h3 title="this is a required question."><?php echo $questions[3]; ?>*</h3>
						<div class="container">
							<input name="q4-ans" id="q4-ans-A" value="A" type="radio">
							<label for="q4-ans-A">A. <?php echo $answers[$q4_rows][2]; ?> </label>
						</div>
						<div class="container">
							<input name="q4-ans" id="q4-ans-B" value="B" type="radio">
							<label for="q4-ans-B">B. <?php echo $answers[$q4_rows][0]; ?> </label>
						</div>
						<div class="container">
							<input name="q4-ans" id="q4-ans-C" value="C" required type="radio">
							<label for="q4-ans-C">C. <?php echo $answers[$q4_rows][1]; ?> </label>
						</div>
					</li>
					<li>
						<!--Question 5-->
						<h3 title="this is a required question."><?php echo $questions[4]; ?>*</h3>
						<div class="container">
							<input name="q5-ans" id="q5-ans-A" value="A" type="radio">
							<label for="q5-ans-A">A. <?php echo $answers[$q5_rows][1]; ?> </label>
						</div>
						<div class="container">
							<input name="q5-ans" id="q5-ans-B" value="B" type="radio">
							<label for="q5-ans-B">B. <?php echo $answers[$q5_rows][2]; ?> </label>
						</div>
						<div class="container">
							<input name="q5-ans" id="q5-ans-C" value="C" required type="radio">
							<label for="q5-ans-C">C. <?php echo $answers[$q5_rows][0]; ?> </label>
						</div>
					</li>
					<li>
						<!--Question 6-->
						<h3 title="this is a required question."><?php echo $questions[5]; ?>*</h3>
						<div class="container">
							<input name="q6-ans" id="q6-ans-A" value="A" type="radio">
							<label for="q6-ans-A">A. <?php echo $answers[$q6_rows][0]; ?> </label>
						</div>
						<div class="container">
							<input name="q6-ans" id="q6-ans-B" value="B" type="radio">
							<label for="q6-ans-B">B. <?php echo $answers[$q6_rows][2]; ?> </label>
						</div>
						<div class="container">
							<input name="q6-ans" id="q6-ans-C" value="C" required type="radio">
							<label for="q6-ans-C">C. <?php echo $answers[$q6_rows][1]; ?> </label>
						</div>
					</li>
					<li>
						<!--Question 7-->
						<h3 title="this is a required question."><?php echo $questions[6]; ?>*</h3>
						<div class="container">
							<input name="q7-ans" id="q7-ans-A" value="A" type="radio">
							<label for="q7-ans-A">A. <?php echo $answers[$q7_rows][2]; ?> </label>
						</div>
						<div class="container">
							<input name="q7-ans" id="q7-ans-B" value="B" type="radio">
							<label for="q7-ans-B">B. <?php echo $answers[$q7_rows][0]; ?> </label>
						</div>
						<div class="container">
							<input name="q7-ans" id="q7-ans-C" value="C" required type="radio">
							<label for="q7-ans-C">C. <?php echo $answers[$q7_rows][1]; ?> </label>
						</div>
					</li>
					<li>
						<!--Question 8-->
						<h3 title="this is a required question."><?php echo $questions[7]; ?>*</h3>
						<div class="container">
							<input name="q8-ans" id="q8-ans-A" value="A" type="radio">
							<label for="q8-ans-A">A. <?php echo $answers[$q8_rows][1]; ?> </label>
						</div>
						<div class="container">
							<input name="q8-ans" id="q8-ans-B" value="B" type="radio">
							<label for="q8-ans-B">B. <?php echo $answers[$q8_rows][0]; ?> </label>
						</div>
						<div class="container">
							<input name="q8-ans" id="q8-ans-C" value="C" required type="radio">
							<label for="q8-ans-C">C. <?php echo $answers[$q8_rows][2]; ?> </label>
						</div>
					</li>
					<li>
						<!--Question 9-->
						<h3 title="this is a required question."><?php echo $questions[8]; ?>*</h3>
						<div class="container">
							<input name="q9-ans" id="q9-ans-A" value="A" type="radio">
							<label for="q9-ans-A">A. <?php echo $answers[$q9_rows][1]; ?> </label>
						</div>
						<div class="container">
							<input name="q9-ans" id="q9-ans-B" value="B" type="radio">
							<label for="q9-ans-B">B. <?php echo $answers[$q9_rows][2]; ?> </label>
						</div>
						<div class="container">
							<input name="q9-ans" id="q9-ans-C" value="C" required type="radio">
							<label for="q9-ans-C">C. <?php echo $answers[$q9_rows][0]; ?> </label>
						</div>
					</li>
					<li>
						<!--Question 10-->
						<h3 title="this is a required question."><?php echo $questions[9]; ?>*</h3>
						<div class="container">
							<input name="q10-ans" id="q10-ans-A" value="A" type="radio">
							<label for="q10-ans-A">A. <?php echo $answers[$q10_rows][0]; ?> </label>
						</div>
						<div class="container">
							<input name="q10-ans" id="q10-ans-B" value="B" type="radio">
							<label for="q10-ans-B">B. <?php echo $answers[$q10_rows][2]; ?> </label>
						</div>
						<div class="container">
							<input name="q10-ans" id="q10-ans-C" value="C" required type="radio">
							<label for="q10-ans-C">C. <?php echo $answers[$q10_rows][1]; ?> </label>
						</div>
					</li>
				</ol>
				<div id="button_div">
					<input type="submit" value="SUBMIT" name="submit" class="submit" id="buttons" title="click to submit." />
					<input type="reset" value="RESET" class="reset" id="buttons" title="this will reset your answers." />
				</div>
			</form>
		</div>
	</div>
</body>

</html>