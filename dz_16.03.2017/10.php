<?php

// 10. Циклы while и for.   Выведите столбец четных чисел в промежутке от нуля до 100.



// Вывожу циклом  for  :

for ($i = 0; $i <= 100 ; $i++){

		if (!($i % 2) && $i != 0) {
			echo $i . "<br>";
		}

}

// теперь вывожу циклом  while:


  $i = 0;

  while ($i <= 100) {  
  	if (!($i ++% 2) && $i != 0)continue;//  continue; ставлю чтоб продолжалось выполнение кода
  	// всунул  $i++  и  $i % 2   в   одну запись $i ++% 2
    
    echo $i . "<br>";
    }

// теперь вывожу циклом Do while:

    $i = 0;
  Do {if (!($i ++% 2) && $i != 0)continue; 


     echo $i . "<br>"; 
     
    }

    while ($i <= 100)  // ;  - можно после Do While не ставить


?>
