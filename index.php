<?php

$rdir = '/';

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
<style>
    body {
        font-family: 'Courier New', Courier, monospace;
    }
</style>
<body>
    <table>
        <thead>
            <td>name</td>
        </thead>
        <tbody>
            <?php
                $scandir = scnDir($rdir);
                foreach ($scandir as $key => $vread) {
             ?>
             <tr>
                <td>
                    <?php
                        $cekdir = $rdir.$vread;
                        if (is_dir($cekdir)) {
                           echo "DIR_  ".$vread;
                        } else {
                            echo $vread;
                        }
                    ?>
                </td>
             </tr>
             <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>