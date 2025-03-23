<?php

namespace Project\Name\Core;

/**
 * Math
 *
 * A class containing static methods for performing mathematical operations.
 * This is just a sample class to demonstrate how to use OOP in PHP.
 */
final class Math
{
    /**
     * Add
     *
     * Adds two integers together.
     *
     * @param int $a
     * @param int $b
     * @return int The sum of $a and $b
     */
    public static function add(int $a, int $b): int
    {
        return $a + $b;
    }

    /**
     * Subtract
     *
     * Subtracts two integers.
     *
     * @param int $a
     * @param int $b
     * @return int The difference of $a and $b
     */
    public static function subtract(int $a, int $b): int
    {
        return $a - $b;
    }

    /**
     * Multiply
     *
     * Multiplies two integers.
     *
     * @param int $a
     * @param int $b
     * @return int The product of $a and $b
     */
    public static function multiply(int $a, int $b): int
    {
        return $a * $b;
    }

    /**
     * Divide
     *
     * Divides two integers.
     *
     * @param int $a
     * @param int $b
     * @return float The quotient of $a and $b
     * @throws \InvalidArgumentException If $b is zero
     */
    public static function divide(int $a, int $b): float
    {
        if ($b === 0) {
            throw new \InvalidArgumentException('Division by zero is not allowed');
        }
        return $a / $b;
    }

    /**
     * Modulo
     *
     * Returns the remainder of two integers.
     *
     * @param int $a
     * @param int $b
     * @return int The remainder of $a and $b
     */
    public static function modulo(int $a, int $b): int
    {
        return $a % $b;
    }

    /**
     * Power
     *
     * Raises one integer to the power of another.
     *
     * @param int $a
     * @param int $b
     * @return int The result of $a raised to the power of $b
     */
    public static function power(int $a, int $b): int
    {
        return $a ** $b;
    }

    /**
     * Square
     *
     * Raises an integer to the power of two.
     *
     * @param int $a
     * @return int The result of $a raised to the power of two
     */
    public static function square(int $a): int
    {
        return $a ** 2;
    }

    /**
     * Cube
     *
     * Raises an integer to the power of three.
     *
     * @param int $a
     * @return int The result of $a raised to the power of three
     */
    public static function cube(int $a): int
    {
        return $a ** 3;
    }

    /**
     * Square Root
     *
     * Returns the square root of an integer.
     *
     * @param int $a
     * @return float The square root of $a
     */
    public static function squareRoot(int $a): float
    {
        return sqrt($a);
    }

    /**
     * Factorial
     *
     * Returns the factorial of an integer.
     *
     * @param int $a
     * @return int The factorial of $a
     * @throws \InvalidArgumentException If $a is negative
     */
    public static function factorial(int $a): int
    {
        if ($a < 0) {
            throw new \InvalidArgumentException('Factorial is not defined for negative numbers');
        }
        return $a < 2 ? 1 : $a * self::factorial($a - 1);
    }
}
