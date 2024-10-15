<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // $number = 5;
        // $sum = 0;
        // $sumC = 0;
        // $sumL = 0;
///////////////////////////////////////////////////////////////////
        // for($star = 0; $star <= $number; $star++){
        //     $sum += $star;
        // } 
        // echo "Tổng số là: $sum";

        // for($star = 0; $star <= $number; $star++){
        //     if($star % 2 ==0){
        //         $sumC += $star;
        //     } else{
        //         $sumL += $star;

        //         }
        // } 
        // echo "Tổng số Chẵn là: $sumC <br>";
        // echo "Tổng số Lẻ là: $sumL";
///////////////////////////////////////////////////////////////////
        // $i = 0;
        // while($i < 10) {
        //     echo $i + 1;
        //     $i++;
        // }

        // $i = 0;
        // while($i < 10) {
        //     if($i % 2 == 0){
        //         $sumC += $i;
        //     } else{
        //         $sumL += $i;
        
        //     }
        //     $i++;
        // }

        // echo "Tổng số Chẵn là: $sumC <br>";
        // echo "Tổng số Lẻ là: $sumL";
///////////////////////////////////////////////////////////////////
        // $i = 0;
        // do{
        //     echo $i + 1 . "<br>";//khi dùng dấu chấm thì phải cách 2 bên 
        //     //còn dấu phẩy không cần cách phía trước
        //     $i++;
        // }while($i<10);


    $persons = array("Marry" => "Famel", "Seven" => "Famel");
    foreach($persons as $key => $value){
        echo "Tên: $key => $value" . "<br>";
    }

    ?>
</body>
</html>