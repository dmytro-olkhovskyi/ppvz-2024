<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with form</title>
</head>
<body>
    <?php
        function myFunc(string $arg): void {
            echo "$arg";
        }


        if (isset($_GET['value']) && filter_var($_GET['value'], FILTER_VALIDATE_INT)) {
            $val = $_GET['value'];
        } else {
            $val = '';
        }
    ?>

    <h1>Form</h1>
    <form action="">
        <label for="string">
            Int value: 
            <input name="value" id="string" type="text" value="<?= $val ?>">
        </label>    
        <input type="submit">
        <input type="reset">
    </form>
    <hr>
    <h2>Result:</h2>
    <?php
        // print_r($_GET);
        if ($val) {
            echo "<p>Value: {$val}</p>";
        } else {
            echo "<p>No value!</p>";
        }
    ?>

    <h2>Function: </h2>
    <?php
        myFunc($val);
    ?>
</body>
</html>