<?php

namespace Brain\Games;

const PGS_RULES = 'What number is missing in the progression?';
const PGS_START_RANGE = [0, 10];
const PGS_STEP_RANGE = [1, 10];
const PGS_LENGTH_OF_SEQUENCE = 10;
const PGS_INDEX_RANGE = [0, 30];

function progressionGame()
{
    $rounds = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $sequence = [];

        $start = rand(...PGS_START_RANGE);
        $step = rand(...PGS_STEP_RANGE);

        for ($x = 0; $x < PGS_LENGTH_OF_SEQUENCE; $x++) {
            $sequence[$x] = $start + ($x * $step);
        }

        $missingValueIndex = rand(...PGS_INDEX_RANGE);
        $rightAnswer = $sequence[$missingValueIndex];
        $sequence[$missingValueIndex] = '..';
        $question = implode(' ', $sequence);

        $rounds[] = [$question, $rightAnswer];
    }

    engine(PGS_RULES, $rounds);
}
