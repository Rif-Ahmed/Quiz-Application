<?php

$questions = [
    ['question' => 'What is 5 + 5?', 'correct' => '10'],
    ['question' => 'What is the Capital of Australia?', 'correct' => 'Canberra'],
    ['question' => 'Who wrote the "The Merchant of Venice"?', 'correct' => 'Shakespeare'],
];

$answers = [];
foreach ($questions as $index => $question) {
    echo ($index + 1) . ". " . $question['question'] . "\n";
    $answers[] = trim(readline("Your answer: "));
}

function evaluateQuiz(array $questions, array $answers): int
{
    $score = 0;
    foreach ($questions as $index => $question) {
        if ($answers[$index] === $question['correct']) {
            $score++;
        }
    }
    return $score;
}

$score = evaluateQuiz($questions, $answers);

echo "\nYou scored $score out of " . count($questions) . ".\n";

if ($score === count($questions)) {
    echo "Excellent Work! \n";
} elseif ($score > 1) {
    echo "Good Effort! \n";
} else {
    echo "Better Luck Next Time! \n";
}
