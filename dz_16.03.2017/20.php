<?php

// 20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5.
/*
x
xx
xxx
xxxx
xxxxx
*/

	$a = 20;

	for ($i = 1; $i <= $a; $i++) {

		 echo str_repeat("X", $i) . "<br>";

		// str_repeat — Возвращает повторяющуюся строку. Первый параметр - возвращаемая строка, второй параматр -количество раз (подставляем в количество раз нашу переменную из условия, которая увеличивается на единицу с каждым разом i++ пока не достигнет 20 ($i <= $a))
	}




?>