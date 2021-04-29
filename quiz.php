<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);


$answer1 = $_POST['q1'];

$answer2 = $_POST['q2'];

$answer3 = $_POST['q3'];

$answer4 = $_POST['q4'];

$answer5 = $_POST['q5'];



$totalCorrect = 0;

echo "<p> Question 1: Which one of these was a password used to get into Gryffindor tower? </p>";
echo "You Answered: $answer1 <br>";
echo "Correct Answer: a) Mimbulus Mimbletonia<br>";

echo "<p> Question 2: Which of these characters were not present in the movies? </p>";
echo "You Answered: $answer2 <br>";
echo "Correct Answer: c) Peeves<br>";

echo "<p> Question 3: Who lost the second trial in The Goblet of Fire book? </p>";
echo "You Answered: $answer3 <br>";
echo "Correct Answer: c) Fleur<br>";

echo "<p> Question 4: Which of these is not an unforgivable curse? </p>";
echo "You Answered: $answer4 <br>";
echo "Correct Answer: b) Incendio<br>";

echo "<p> Question 5: What was the name of Hagrid's half brother? </p>";
echo "You Answered: $answer5 <br>";
echo "Correct Answer: d) Grawp<br>";



if ($answer1 == "a) Mimbulus Mimbletonia") { $totalCorrect++; }

if ($answer2 == "c) Peeves") { $totalCorrect++; }

if ($answer3 == "c) Fleur") { $totalCorrect++; }

if ($answer4 == "b) Incendio") { $totalCorrect++; }

if ($answer5 == "d) Grawp") { $totalCorrect++; }

echo "<div id='results'>$totalCorrect / 5 correct</div>";
echo "Score: " . $totalCorrect*20 . "%";

?>
