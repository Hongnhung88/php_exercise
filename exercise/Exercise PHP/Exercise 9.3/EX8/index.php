<!DOCTYPE html>
<html lang="en">
<head>
    <title> Kiểm tra số nguyên tố</title>
</head>
<style>
.green{
    background-color: #66ff33;
}
.box{
    height: 40px;
    width: 40px;
}
</style>
<body>
    <table border="1">
    <?php
    function isPrimeNumber($number){
        if($number < 2){
            return false;
        }
        for($i = 2; $i < $number; $i++){
            if($number%$i == 0){
                return false;
            }
        }
        return true;
    }
    $count = 0;
        for($i = 0; $i< 10; $i++){
    ?>
        <tr>
        <?php
            for($j = 0; $j < 10; $j++ ){
                $count++;
                ?>
                <td class="box <?php if(isPrimeNumber($count)) echo 'green' ?>" ><?php echo $count; ?></td>
            <?php } ?>
        </tr>
    <?php } ?>
    </table>
</body>
</html>