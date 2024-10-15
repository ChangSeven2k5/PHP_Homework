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

        function check($hsa){
            //Được khai báo
            if($hsa % 2 == 0){
                return ("Đây là số chẵn");
            } else {
                return ("Đây là số lẻ");

            }
        }
        $a = $_POST['hsa']; 
        // $b = $_POST['hsb'];
        $kq = check($a);
        //Tham trị
    ?>
    <form action="check.php" method="POST">
        <label>
            Hệ số A
        </label>
        <input type="text" name="hsa" value = "<?php echo $a?>">  
        <!-- Cần đặt tên là name -->
        <button type="submit">Submit</button>
    </form>
    <div class="result"><?php echo "Result: $kq"?></div>
    
</body>
</html>