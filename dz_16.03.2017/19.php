<?php

// 19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.

	$arr = array(
			"01" => "Понедельник",
			"02" => "Вторник",
			"03" => "Среда",
			"04" => "Четверг",
			"05" => "Пятница",
			"06" => "Суббота",
			"07" => "Воскресенье"
	);

  $day = date ("N"); // функция даты и времени с параметром N (день), тоесть переменной присваивается текщий день 0день (тоесть по ключу 0день, который в массиве можно вывести условие)
 echo "Текущий день" . $day . "</br>";

	foreach ($arr as $key => $value) {

		if ($key == $day) { 
		// если ключ равен переменной $day то
        // Интресно , что можно для обозначения "или" использовать    or    или знак    ||

			echo "<i>$value</i></br>"; // выводим его и выделяем курсивом

		} else {
			echo "$value <br>"; // иначе - выводим месяцы не курсивом
		}
	}





?>