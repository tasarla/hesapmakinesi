<?php

/**
 * Calculator class that performs basic arithmetic operations.
 */
class Calculator {
    
    /**
     * Adds two numbers.
     *
     * @param float $a The first number.
     * @param float $b The second number.
     *
     * @return float The sum of $a and $b.
     */
    public function add($a, $b) {
        return $a + $b;
    }
    
    /**
     * Subtracts two numbers.
     *
     * @param float $a The first number.
     * @param float $b The second number.
     *
     * @return float The difference between $a and $b.
     */
    public function subtract($a, $b) {
        return $a - $b;
    }
    
    /**
     * Multiplies two numbers.
     *
     * @param float $a The first number.
     * @param float $b The second number.
     *
     * @return float The product of $a and $b.
     */
    public function multiply($a, $b) {
        return $a * $b;
    }
    
    /**
     * Divides two numbers.
     *
     * @param float $a The dividend.
     * @param float $b The divisor.
     *
     * @return float The quotient of $a divided by $b.
     *
     * @throws Exception If $b is zero, which would result in division by zero.
     */
    public function divide($a, $b) {
        if ($b == 0) {
            throw new Exception("Division by zero is not allowed.");
        }
        
        return $a / $b;
    }
}

// Usage demonstration of the Calculator class

$calculator = new Calculator();

// Addition
$sum = $calculator->add(5, 3);
echo "5 + 3 = " . $sum . "\n";

// Subtraction
$difference = $calculator->subtract(10, 4);
echo "10 - 4 = " . $difference . "\n";

// Multiplication
$product = $calculator->multiply(6, 2);
echo "6 * 2 = " . $product . "\n";

// Division
try {
    $quotient = $calculator->divide(12, 4);
    echo "12 / 4 = " . $quotient . "\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

?>
