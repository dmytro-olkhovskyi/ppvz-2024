<?php

$test = isset($_POST['test_data']) ? $_POST['test_data'] : '';

if ($test) {
    echo "<h2>{$test}</h2>";
}