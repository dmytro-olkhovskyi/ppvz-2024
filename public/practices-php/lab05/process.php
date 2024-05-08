<?php

if (isset($_POST['name']) && $_POST['name']) {
    echo $_POST['name'] . ', hello from backend!';
} else {
    echo 'Name is empty!';
}