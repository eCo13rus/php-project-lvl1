<?php

namespace Brain\Games\Progression;

use function BrainGames\Engine\launch;

use const BrainGames\Engine\ROUNDS_COUNT;

const RULES_GAME = 'What number is missing in the progression?';
const PGS_START_RANGE = [0, 10];
const PGS_STEP_RANGE = [0, 20];
const PGS_LENGTH_OF_SEQUENCE = 10;

function playGame()
{
    $rounds = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $sequence = [];

        $start = rand(...PGS_START_RANGE);
        $step = rand(...PGS_STEP_RANGE);

        for ($x = 0; $x < PGS_LENGTH_OF_SEQUENCE; $x++) {
            $sequence[$x] = $start + ($x * $step);
        }

        $missingValueIndex = rand(0, PGS_LENGTH_OF_SEQUENCE - 1);
        $rightAnswer = $sequence[$missingValueIndex];
        $sequence[$missingValueIndex] = '..';
        $question = implode(' ', $sequence);

        $rounds[] = [$question, $rightAnswer];
    }

    launch(RULES_GAME, $rounds);
}
