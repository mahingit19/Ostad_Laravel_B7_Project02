<?php

// Function to evaluate the quiz
function evaluateQuiz(array $questions, array $answers): int {
    $score = 0;
    foreach ($questions as $index => $question) {
        if ($answers[$index] === $question['correct']) {
            $score ++;
        }
    }
    return $score;
}

// Example questions

$questions = [
    ["question" => "What is 2+2", "correct" => "4"],
    ["question" => "What is the capital of France?", "correct" => "Paris"],
    ["question" => "Who wrote 'Hamlet'?", "correct" => "Shakespeare"],
];

// Collect answers
$answers = [];
foreach ($questions as $index => $question) {
    echo ($index + 1) . ". ". $question["question"] . "\n";
    $answers[$index] = trim(readline("Your answer: "));
}

// Calculator score and provide feedback
$score = evaluateQuiz($questions, $answers);

echo "\nYou scored $score out of " . count($questions) . "\n";

if ($score === count($questions)) {
    echo "Excellent job!\n";
} elseif ($score > 0) {
    echo "Good effort!\n";
} else {
    echo "Better luck next time!\n";
}