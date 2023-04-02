<?php

namespace Brain\Games\Calc;

use function Brain\Games\launch;

use const Brain\Games\ROUNDS_COUNT;

const CALC_RANGE = [30, 50];
const OPERATORS = ['+', '-', '*'];
const CALC_RULES = 'What is the result of the expression?';

function calcGame()
{
    $rounds = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $operand1 = rand(...CALC_RANGE);
        $operand2 = rand(...CALC_RANGE);
        $operator = OPERATORS[array_rand(OPERATORS)];
        $question = "{$operand1} {$operator} {$operand2}";
        $rightAnswer = getCalcRightAnswer($operand1, $operand2, $operator);
        $rounds[] = [$question, $rightAnswer];
    }

    return launch(CALC_RULES, $rounds);
}

function getCalcRightAnswer(int $operand1, int $operand2, string $operator)
{
    switch ($operator) {
        case '+':
            return $operand1 + $operand2;
        case '-':
            return $operand1 - $operand2;
        case '*':
            return $operand1 * $operand2;
        default:
            throw new \Exception("Недопустимый оператор: $operator");
    }
}
