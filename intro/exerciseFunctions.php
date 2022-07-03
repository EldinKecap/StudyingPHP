<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    120min
    <?php
    // function calcVat($price,$vat)
    // {
    //     $calculatedPrice = $price + ($price * $vat);
    //     return $calculatedPrice;
    // }
    // echo "Total Price is ".calcVat(100,0.17);
    // function leapYear ($year){
    //     if($year % 400 == 0 || $year % 4 == 0){
    //         echo "This year is a leap year";
    //     }else{
    //         echo "This year is not a leap year";
    //     }
    // }
    // leapYear(2001);
    // $num1 = 10;
    // $num2 = 50;
    // function add($num1,$num2)
    // {
    //     return $num1 + $num2;
    // }    
    // function substrsct($num1,$num2)
    // {
    //     return $num1 - $num2;
    // }    
    // function multiply($num1,$num2)
    // {
    //     return $num1 * $num2;
    // }    
    // function divide($num1,$num2)
    // {
    //     return $num1 / $num2;
    // }
    // echo "Addition".add(1,2)."<br>";
    // echo "Substraction".substrsct(1,2)."<br>";
    // echo "Multiplication".multiply(1,2)."<br>";
    // echo "Division".divide(1,2)."<br>";
    // function swapNumbers(&$num1,&$num2){
    //     $temp = $num1;
    //     $num1 = $num2;
    //     $num2 = $temp;
    // }
    // $number = 123;
    // $X = 23423;
    // swapNumbers($X,$number);
    // echo "X var".$X."Number var ".$number;
    // $num = 92;
    // function evenOrNot($num){
    //     if($num%2==0){
    //         echo "is even";
    //     }else{
    //         echo "in not";
    //     }
    // }
    // evenOrNot($num);
    $num = 667;
    function isPrime($num){
        if($num == 1){
            return false;
    }else{
        for( $i=2 ; $i < $num / 2 ; $i++ ){
            if( $num % $i == 0 ){
                return false;
            }
        }
        return 1;
    }
}

if(isPrime($num)) {
    echo "is prime";
}else{
    echo "is not";
}
    ?>
</body>
</html>