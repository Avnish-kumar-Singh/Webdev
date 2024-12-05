<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div class="container">
        Hii.. This is  me Avnish...<br>
        PHP is openSource scripting language.<br>
        It is used for executing program on server as a backend language.<br>
        <?php
          echo "Hello...."."<br>";
          //hii..
        $var1=20;
        $var2=40;
        echo $var1."<br>";
        echo $var2."<br>";

        echo "Sum is:".($var1+$var2);

        
          //**Arithmetic Operator
          echo "The value of var1 + var2 is:"."<br>";
          echo $var1 + $var2."<br>";
          echo $var1 - $var2."<br>";
          echo $var1 * $var2."<br>";
          echo $var1 / $var2."<br>";
          
          
          //**Assignment Operator
          $newVar=$var1;
          $newVar+=1;
          echo "The value of new value is:";
          echo $newVar."<br>";
          $newVar-=1;
          echo "The value of new value is:";
          echo $newVar."<br>";
          $newVar*=2;
          echo "The value of new value is:";
          echo $newVar."<br>";
          $newVar/=2;
          echo "The value of new value is:";
          echo $newVar."<br>";



          //**Comparsion Operator
          echo"<h4> This is comparsion Operator</h4><br>";
          echo "The value of 1==4 is"."<br>";
          echo var_dump(1==4)."<br>";

          echo "The value of 1>=4 is"."<br>";
          echo var_dump(1>=4)."<br>";

          echo "The value of 1<=4 is"."<br>";
          echo var_dump(1<=4)."<br>";

          echo "The value of 1!=4 is"."<br>";
          echo var_dump(1!=4)."<br>";

          //Increment/Decrement Operator

          //echo $var1++."<br>";
          //echo $var1."<br>";
          //echo $var1--."<br>";
          echo $var1."<br>";
          echo ++$var1."<br>";
          echo $var1."<br>";
          echo --$var1."<br>";
          echo $var1."<br>";

          //Logical Operator

          // and (&&)
          // or  (||)
          // xor
          // !

          $var3= (true) and (true);
          echo "<br>";
          echo var_dump($var3);
          $var4= (false) and (true);
          echo "<br>";
          echo var_dump($var4);
          $var5= (false) and (false);
          echo "<br>";
          echo var_dump($var5);

          // OR
          $var6= (true)or(false);
          echo "<br>";
          echo var_dump($var6);

          //Xor
          $var7= (false)Xor(false);
          echo "<br>";
          echo var_dump($var7);
          
        
        ?>
    </div>
</body>
</html>