<?php
session_start();


function evaluateExpression($expression) {
    
    $expression = preg_replace('/[^0-9+\-*/().]/', '', $expression);

    
    if (empty($expression)) {
        return 'Error';
    }

    
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


if (!isset($_SESSION['result'])) {
    $_SESSION['result'] = '';
}


if (isset($_POST['btn'])) {
    $btn = $_POST['btn'];

    if ($btn === 'C') {
        
        $_SESSION['result'] = '';
    } elseif ($btn === '=') {
        
        $_SESSION['result'] = evaluateExpression($_SESSION['result']);
    } else {
        
        $_SESSION['result'] .= $btn;
    }
}


header('Location: index.php');
exit();
?>
