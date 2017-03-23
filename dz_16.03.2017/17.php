<?php

// 17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным. Текущий месяц должен храниться в переменной $month.


	$arr = array(
			"01" => "январь",
			"02" => "февраль",
			"03" => "март",
			"04" => "апрель",
			"05" => "май",
			"06" => "июнь",
			"07" => "июль",
			"08" => "август",
			"09" => "сентябрь",
			"10" => "октябрь",
			"11" => "ноябрь",
			"12" => "декабрь");

	$month = date('m');  // функция даты и времени с параметром m (месяц), тоесть переменной присваивается текщий месяц 03 (тоесть по ключу 03, который в массиве можно вывести условие)
	echo "Текущий месяц - " . $month . "</br>";

	foreach ($arr as $key => $value) {

		if ($key == $month) { // если ключ равен 03 - наш текущий месяц

			echo "<b>$value</b></br>"; // выводим его и выделяем жирным

		} else {
			echo "$value <br>"; // иначе - выводим месяцы не жирным
		}
	}





?>