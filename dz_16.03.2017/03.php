<?php

//3. Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.

$arr = array( 26, 17, 136, 12, 79, 15);

$result = 0;
//В строке $result = 0 я зануляю переменную $result, если этого не сделать - в цикле возникнет ошибка в строке $result = $result + $value ( Undefined variable: result in C:\xampp\htdocs\test\index.php on line 11), так как при первом проходе цикла переменная $result не будет определена.

foreach ($arr as $value){

$value = pow($value, 2);
//при первом проходе в переменной $result будет 0, в $value – 1 (первый элемент массива), тогда в $result запишется 0+1 = 1.
//echo "value = " . $value . "<br>";
$result = $result + $value;
//echo "Промежуточный результат = " . $result . "<br>";
}

echo "Конечный результат " . $result . "<br>";

?>