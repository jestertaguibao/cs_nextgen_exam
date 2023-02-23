<html>
    <head>
        Q1
    </head>    

    <body>
        <br>

    <?php

        $inputs = array(3, 2, 5);
        $sum_output=0;
        $product_output=1;
        
        foreach($inputs as $value){
            $sum_output=$sum_output+$value;
            $product_output *= $value; 
        }
        $ifOdd;
        $checkIfOdd=$product_output%2;

        if($checkIfOdd==1){
            $ifOdd="ODD";
        }else{
            $ifOdd="EVEN";
        }
        echo "The sum is:" . $sum_output;
        echo "<br>";
        echo "The product is:" . $product_output . " and the output is " . $ifOdd;
    
    ?>

    </body>


<html>