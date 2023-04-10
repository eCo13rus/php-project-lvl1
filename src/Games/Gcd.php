<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\launch;

use const BrainGames\Engine\ROUNDS_COUNT;

const RULES_GAME = 'Find the greatest common divisor of given numbers.';
const GCD_RANGE = [1, 77];


function playGame()
{
    $rounds = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $first = rand(...GCD_RANGE);
        $second = rand(...GCD_RANGE);
        $question = "{$first} {$second}";
        $rightAnswer = gcd($first, $second);
        $rounds[] = [$question, $rightAnswer];
    }

    return launch(RULES_GAME, $rounds);
}

function gcd(int $a, int $b)
{
    if ($b === 0) {
        return $a;
    }

    $r = $a % $b;

    return gcd($b, $r);
}
