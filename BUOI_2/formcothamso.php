<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    
</style>
<body>
    <!-- Cần để tính toán trước khi chạy -->
<?php
        error_reporting(0); //bỏ qua mặc định lỗi

        function sum($hsa, $hsb){
            //Được khai báo
            $sum = $hsa + $hsb;
            return $sum;
        }
        $a = $_POST['hsa']; 
        $b = $_POST['hsb'];
        $kq = sum($a, $b);
        //Tham trị
    ?>
    <form action="formcothamso.php" method="POST">
        <label>
            Hệ số A
        </label>
        <input type="text" name="hsa" value = "<?php echo $a?>">  
        <!-- Cần đặt tên là name -->
        <label>
            Hệ số B
        </label>
        <input type="text" name="hsb" value = "<?php echo $b?>">
        <button type="submit">Submit</button>
    </form>
    <div class="result"><?php echo "Result: $kq"?></div>
    
</body>
</html>