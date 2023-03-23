<?php

namespace Brain\Games;

const CALC_RANGE = [30, 50];
const CALC_RANGE2 = [10, 20];
const OPERATOR_RANGE = [0, 2];
const OPERATORS = ['+', '-', '*'];
const CALC_RULES = 'What is the result of the expression?';

function calcGame()
{
    $rounds = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $operand1 = rand(...CALC_RANGE);
        $operand2 = rand(...CALC_RANGE2);
        $operator = OPERATORS[rand(...OPERATOR_RANGE)];
        $question = "{$operand1} {$operator} {$operand2}";
        $rightAnswer = isCalcRightAnswer($operand1, $operand2, $operator);
        $rounds[] = [$question, $rightAnswer];
    }

    return engine(CALC_RULES, $rounds);
}

function isCalcRightAnswer(int $operand1, int $operand2, string $operator)
{
    switch ($operator) {
        case '+':
            $result = $operand1 + $operand2;
            break;
        case '-':
            $result = $operand1 - $operand2;
            break;
        case '*':
            $result = $operand1 * $operand2;
            break;
        default:
            $result = false;
    }

    return $result;
}
