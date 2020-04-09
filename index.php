<?php


Положение указателя текущей позиции в файле

int feof(int $a)



$a = fopen("file.txt", "r");
while (!feof($a)){
    $s = fgets($a);
//    обработка данных переменной $s
}

fclose($a);


?>
