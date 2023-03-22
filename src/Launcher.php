<?php

namespace Brain\Games;

use function cli\line;

const ROUNDS_COUNT = 3;

function launch(string $rules, array $rounds)
{
    $name = greeting();

    line($rules);

    foreach ($rounds as [$question, $rightAnswer]) {
        $answer = askQuestion($question);
        $result = $answer == $rightAnswer;
        if (!$result) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $rightAnswer);
            line('Let\'s try again, %s!', $name);
            return;
        }

        line('Correct!');
    }

    line('Congratulations, %s!', $name);
}
