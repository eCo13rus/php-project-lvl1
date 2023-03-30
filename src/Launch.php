<?php

namespace Brain\Games;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function Launch(string $rules, array $rounds)
{
    $name = greeting();

    line($rules);

    foreach ($rounds as [$question, $rightAnswer]) {
        $answer = askQuestion($question);
        if ($answer !== (string)$rightAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $rightAnswer);
            line("Let's try again, %s!", $name);
            return;
        }

        line('Correct!');
    }

    line("Congratulations, %s!", $name);
}

function askQuestion(string $question)
{
    line("Question: %s", $question);
    $answer = prompt('Your answer');

    return $answer;
}
