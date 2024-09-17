<?php
session_start();


if (!isset($_SESSION['result'])) {
    $_SESSION['result'] = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="calculator">
        <form action="calculate.php" method="post">
            <input type="text" name="result" id="result" value="<?php echo htmlspecialchars($_SESSION['result']); ?>" readonly>

            <div class="buttons">
                <button type="submit" name="btn" value="1">1</button>
                <button type="submit" name="btn" value="2">2</button>
                <button type="submit" name="btn" value="3">3</button>
                <button type="submit" name="btn" value="+">+</button>
                <button type="submit" name="btn" value="4">4</button>
                <button type="submit" name="btn" value="5">5</button>
                <button type="submit" name="btn" value="6">6</button>
                <button type="submit" name="btn" value="-">-</button>
                <button type="submit" name="btn" value="7">7</button>
                <button type="submit" name="btn" value="8">8</button>
                <button type="submit" name="btn" value="9">9</button>
                <button type="submit" name="btn" value="*">×</button>
                <button type="submit" name="btn" value="0">0</button>
                <button type="submit" name="btn" value=".">.</button>
                <button type="submit" name="btn" value="C">C</button>
                <button type="submit" name="btn" value="/">÷</button>
                <button type="submit" name="btn" value="=">=</button>
            </div>
        </form>
    </div>
</body>
</html>
