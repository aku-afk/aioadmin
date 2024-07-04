<?php

$gtdr = $_GET['gotodir'];

function glink($cek) {
    if ($cek == null) {
        $res = '/';
    } else {
        $res = $cek.'/';
    }
    return $res;
}

$rdir = glink($gtdr);

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
                        $cekdir = $rdir.$vread.'/';
                        $uricekdir = urlencode($cekdir);

                        if (is_dir($cekdir)) {
                           echo "<a href='?gotodir=".$uricekdir."'>".$vread."</a>";
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