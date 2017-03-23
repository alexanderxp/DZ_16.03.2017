<?php

// 13. Вывести таблицу умножения

//----------- while-------------------------

$i = 1;    
echo "<table><tr>";   
 while( $i <= 10 ) {       
 	$j = 1;      

 while( $j <= 10 ) {          
 	echo "<td>".($i*$j)."</td>";        
 	$j++;  
 }       

 if ($i != 10) 

 	echo "</tr><tr>";       
 $i++;  
}   

 echo "</tr></table>" ;

//----------- do while-------------------------


$i = 1;    
echo "<table><tr>";    
do {       

$j = 1;           

do {          

echo "<td>" . ($i*$j) . "</td>";           
$j++;       

} while( $j <= 10 );       

if ($i != 10) 

echo "</tr><tr>";       
$i++;    

} while ($i <= 10);   

echo "</tr><table>" ;

//--------------- for ----------------------------

 echo "<table><tr>";    

 for ($i = 1; $i <= 10; $i++) {

 	 for ($j = 1; $j <= 10; $j++)          
 	    echo "<td>" . ($i*$j) . "</td>";     

 	     if ($i != 10) echo "</tr><tr>";    

 	 };   

echo "</tr></table>";

//--------------------- for each -------------------------

$nums = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10');    

 echo "<table><tr>";   

foreach($nums as $i) {      

	foreach($nums as $j)          
		 echo "<td>" . ($i*$j) . "</td>";      

		 if ($i != 10) echo "</tr><tr>";   

	     };   

echo "</tr></table>";


?>