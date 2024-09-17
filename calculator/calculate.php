<?php
session_start();

// Function to safely evaluate mathematical expressions
function evaluateExpression($expression) {
    // Remove any characters that are not numbers, operators, or parentheses
    $expression = preg_replace('/[^0-9+\-*/().]/', '', $expression);

    // Ensure expression is not empty
    if (empty($expression)) {
        return 'Error';
    }

    // Safe evaluation using eval()
    try {
        $result = eval('return ' . $expression . ';');
        if ($result === false) {
            return 'Error';
        }
        return $result;
    } catch (Exception $e) {
        return 'Error';
    }
}

// Initialize result if not set
if (!isset($_SESSION['result'])) {
    $_SESSION['result'] = '';
}

// Handle button actions
if (isset($_POST['btn'])) {
    $btn = $_POST['btn'];

    if ($btn === 'C') {
        // Clear the result
        $_SESSION['result'] = '';
    } elseif ($btn === '=') {
        // Evaluate the expression
        $_SESSION['result'] = evaluateExpression($_SESSION['result']);
    } else {
        // Append button value to result
        $_SESSION['result'] .= $btn;
    }
}

// Redirect back to the form page
header('Location: index.php');
exit();
?>
