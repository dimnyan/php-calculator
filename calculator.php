<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the input values
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $operator = $_POST["operator"];

    // Perform the calculation based on the operator
    $result = 0;

    switch ($operator) {
        case '+':
            $result = $number1 + $number2;
            break;
        case '-':
            $result = $number1 - $number2;
            break;
        case '*':
            $result = $number1 * $number2;
            break;
        case '/':
            if ($number2 != 0) {
                $result = $number1 / $number2;
            } else {
                echo "Error: Division by zero is not allowed.";
                exit;
            }
            break;
        default:
            echo "Error: Invalid operator.";
            exit;
    }

    // Display the result
    echo "Result: " . $result;
}
?>
