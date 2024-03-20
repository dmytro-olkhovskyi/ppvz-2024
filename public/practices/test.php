<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid gray;
        }
    </style>
</head>
<body>
    <?php
        $value = 10;
        
        // var_dump($value);

        // print_r($value);
        // $str = print_r($value, true);

        // error_log(print_r($str, true)); 

        echo 'Value: ' . $value . '<br>';
        echo "Value: {$value}";
    ?>

    <hr>

    <p>Value: <?= $value ?></p>
    <p>Value: <?php echo $value ?></p>

    <hr>

    <table>
        <tbody>

            <?php
                // $counter = 1;
                for ($i = 0; $i < 3; $i++) {
                    echo '<tr>';
                    for ($j = 1; $j < 4; $j++) {
                        $val = $i*3 + $j;
                        echo "<td>{$val}</td>";
                        // $counter++;
                    }
                    echo '</tr>';
                }
            ?>

            <!-- 
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
            </tr>
            <tr>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            </tr>
            <tr>
                <td>7</td>
                <td>8</td>
                <td>9</td>
            </tr>
            -->
        </tbody>
    </table>
    
</body>
</html>