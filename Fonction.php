<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction</title>
</head>
<body>
    <?php
        Function tableaux($param1,$param2){
    ?>
        <table border=1>
            <tr>
                <td><?=$param1?></td>
                <td>age</td>
            </tr>
            <tr>
                <td>simon</td>
                <td>briaux</td>
                <td>18</td>
            </tr>
        </table>
    <?php
        } 
    ?>
        
    <?php
        Function moy($n1,$n2,$n3,$n4,$n5,$n6){
    ?>
        
        <table border=1>
            <tr>
                <td><?=$moy1="$n1";?></td>
                <td><?=$moy2="$n2";?></td>
                <td><?=$moy3="$n3";?></td>
            </tr>
            <tr>
                <td><?=$moy4="$n4";?></td>
                <td><?=$moy5="$n5";?></td>
                <td><?=$moy6="$n6";?></td>
            </tr>
            <tr>
                    <?php
                        $tot = $moy1 + $moy2 + $moy3 + $moy4 + $moy5 + $moy6;
                        $result = $tot / 6;
                    ?>
                <td>moy=></td>
                <td><?php echo $result ;?></td>
                <td><=moy</td>
            </tr>
        </table>
    <?php
        } 
    ?>

</body>
</html>