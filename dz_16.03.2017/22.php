<?php

// 22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.
/*
xx
xxxx
xxxxxx
xxxxxxxx
xxxxxxxxxx
*/

	$a = 5;

	for ($i = 1; $i <= $a; $i++) {

		 echo str_repeat("XX", $i) . "<br>";

		// str_repeat — Возвращает повторяющуюся строку. Первый параметр - возвращаемая строка (переменная), в первый параметр подставляем переменную из условия - получаем с каждой итерацией цикла переменную , увеличивающуюся на 1 
		// Функция выполняется и выводится пока не достигнет 20ти раз
	}

//--------------- while -----------------------------
$a = 5;
$i = 1;

	while ($i <= $a){
          
          echo str_repeat("XX", $i) . "<br>";
          $i++;
	}




?>