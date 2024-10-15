<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       .box-1 {
        width: 50px;
        height: 50px;
        background-color: red;
        display: inline-block;
        margin: 2px;
       }

       .box-2 {
        width: 50px;
        height: 50px;
        background-color: gray;
        display: inline-block;
        margin: 2px;
       }
    </style>
</head>
<body>

    <?php
        $number = 5;
        // for($star = 0; $star <= $number; $star++){
        //     echo "Số: $star";
        // }

        for($star = 0; $star <= $number; $star++){
            if($star % 2 ==0){
                for($i = 0; $i <= $number; $i++){
                    echo "<div class='box-1'></div>" ;
                }
               
            } else{
                for($i = 0; $i <= $number; $i++){
                    echo "<div class='box-2'></div>" ;
                }
            }
           
            echo "</br>";
        }
    ?>
</body>
</html>