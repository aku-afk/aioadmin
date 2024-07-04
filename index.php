<?php

function scnDir($dst) {
    $res = scandir($dst);
    return $res;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAPE-PAPE</title>
</head>
<body>
    <table>
        <thead>
            <td>name</td>
        </thead>
        <tbody>
            <?php
                $scandir = scnDir('/');
                foreach ($scandir as $key => $value) {
             ?>
             <tr>
                <td>
                    <?php echo $value; ?>
                </td>
             </tr>
             <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>