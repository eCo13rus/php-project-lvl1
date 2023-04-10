<?php

namespace BrainGames\Engine;

use function BrainGames\Cli\greeting;
use function cli\line;
use function cli\prompt;

const RULES_GAME = 'What number is missing in the progression?';
const ROUNDS_COUNT = 3;

function launch(string $rules, array $rounds)
{
    $name = greeting();

    line($rules);

    foreach ($rounds as [$question, $rightAnswer]) {
        line("Question: %s", $question);
        $answer = prompt('Your answer');
        if ($answer !== (string)$rightAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $rightAnswer);
            line("Let's try again, %s!", $name);
            return;
        }

        line('Correct!');
    }

    line("Congratulations, %s!", $name);
}
