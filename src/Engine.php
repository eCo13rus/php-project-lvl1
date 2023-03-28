<?php

namespace Brain\Games;

use function cli\line;

const ROUNDS_COUNT = 3;

function engine(string $rules, array $rounds)
{
    $name = greeting();

    line($rules);

    foreach ($rounds as [$question, $rightAnswer]) {
        $answer = askQuestion($question);
        if ($answer == $rightAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $rightAnswer);
            line('Let\'s try again, %s!', $name);
        }
    }

    line('Congratulations, %s!', $name);
}
