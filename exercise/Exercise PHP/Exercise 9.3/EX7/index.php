<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vẽ bàn cờ vua</title>
</head>
<style>
.black{
    background-color: #333333;
}
.box{
    height: 40px;
    width: 40px;
}
</style>
<body>
    <table border="1">
    <?php
    $count = 0;
    $check = 1;
        for($i = 0; $i< 8; $i++){
            if($check == 1){
                $check = 0;
            }else{
                $check = 1;
            }
    ?>
        <tr>
        <?php
            for($j = 0; $j < 8; $j++ ){
                $count++;
                ?>
                <td class="box <?php if($count%2==$check) echo 'black' ?>" ></td>
                <?php
            }
        ?>
        </tr>
    <?php
        }
    ?>
        
    </table>
</body>
</html>