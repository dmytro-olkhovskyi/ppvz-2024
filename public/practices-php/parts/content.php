<p>The Content</p>

<?php

    // print_r($_GET);
    if (isset($_GET["task"])) {
        include_once("./parts/{$_GET["task"]}.php");
    } else {
        ?>
        <p>Task ID is not provided!</p>
        <?php
    }

?>