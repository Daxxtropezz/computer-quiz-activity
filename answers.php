<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>RESULTS | ITEC 106A</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="questionnaire">

        <h1>Results</h1>

        <h3 id="answer">
            <?php

            $answer1  = $_POST['q1-ans'];
            $answer2  = $_POST['q2-ans'];
            $answer3  = $_POST['q3-ans'];
            $answer4  = $_POST['q4-ans'];
            $answer5  = $_POST['q5-ans'];
            $answer6  = $_POST['q6-ans'];
            $answer7  = $_POST['q7-ans'];
            $answer8  = $_POST['q8-ans'];
            $answer9  = $_POST['q9-ans'];
            $answer10 = $_POST['q10-ans'];

            $totalCorrect = 0;
            $message;

            if ($answer1  == "C") {
                $totalCorrect++;
            }
            if ($answer2  == "A") {
                $totalCorrect++;
            }
            if ($answer3  == "A") {
                $totalCorrect++;
            }
            if ($answer4  == "B") {
                $totalCorrect++;
            }
            if ($answer5  == "C") {
                $totalCorrect++;
            }
            if ($answer6  == "A") {
                $totalCorrect++;
            }
            if ($answer7  == "B") {
                $totalCorrect++;
            }
            if ($answer8  == "B") {
                $totalCorrect++;
            }
            if ($answer9  == "C") {
                $totalCorrect++;
            }
            if ($answer10 == "A") {
                $totalCorrect++;
            }

            if ($totalCorrect >= 7) {
                $message = "EXCELLENT";
            } else if ($totalCorrect >= 5) {
                $message = "GOOD";
            } else {
                $message = "FAILED";
            }

            echo "<div id='results'> $message!<br> You got a score of $totalCorrect/10. </div>";

            ?>
        </h3>

    </div>
</body>

</html>