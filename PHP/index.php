<?php
    if ($_POST) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $op = $_POST['op'];

        if ($op == '+') $result = $a + $b;
        if ($op == '-') $result = $a - $b;
        if ($op == '*') $result = $a * $b;
        if ($op == '/') $result = $a / $b;

        echo "Результат: $result";
    }
?>

<form method="post">
    <input type="number" name="a" required>
    <select name="op">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
</select>