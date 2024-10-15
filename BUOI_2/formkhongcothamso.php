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

        function sum(){
            $hsa = $_POST['hsa']; //Khi dùng $_POST['name']
            $hsb = $_POST['hsb'];
            $sum = $hsa + $hsb;
            return $sum;
        }

        $kq = sum();
    ?>
    <form action="formkhongcothamso.php" method="POST">
        <label>
            Hệ số A
        </label>
        <input type="text" name="hsa">  
        <!-- Cần đặt tên là name -->
        <label>
            Hệ số B
        </label>
        <input type="text" name="hsb">
        <button type="submit">Submit</button>
    </form>
    <div class="result"><?php echo $kq?></div>
    
</body>
</html>