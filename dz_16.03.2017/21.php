<?php

// 21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5.
/*
1
22
333
4444
55555
*/

	$a = 9;

	for ($i = 1; $i <= $a; $i++) {

		 echo str_repeat($i, $i) . "<br>";

		// str_repeat — Возвращает повторяющуюся строку. Первый параметр - возвращаемая строка (переменная), в первый параметр подставляем переменную из условия - получаем с каждой итерацией цикла переменную , увеличивающуюся на 1 
		// Функция выполняется и выводится пока не достигнет 20ти раз
	}




?>