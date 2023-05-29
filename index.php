<?php
//1.	Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
<?php
function  check(){
  $numberCheck=23;
 $surplus=$numberCheck %2;
 if($surplus==0){
   echo 'là số chẵn';
 
 }
 else {
   echo 'là số lẻ';
 }
 }
 check();
 ?>
 //2.	Viết chương trình PHP để tính tổng của các số từ 1 đến n.
 <?php
 function  total(){
  $sum = 0;  
  for($x=1; $x <= 20; $x++)  
  {  
    $sum +=$x;  
  }  
  echo "Tổng dãy số từ 1 đến 20 là $sum"."<br>";
}
total();
?>
//3.	Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
<?php
function  printTheMultiplicationTable(){
  for($i = 1; $i < 10; $i ++) {
    echo "<td>";
    for($j = 1; $j <= 10; $j ++) {
        echo "$i x $j = " . ($i * $j);
        echo "<br>";
    }
    echo "</td>";
}
}
printTheMultiplicationTable();
?>
//4.	Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
<?php
function  checkStringContainsSpecificWord(){
 
  $word = "mèo";
  $mystring = "Có một chú mèo con";
   

  if(strpos($mystring, $word) !== false){
      echo "Word Found!";
  } else{
      echo "Word Not Found!";
  }
  
}
checkStringContainsSpecificWord();
?>
//5.	Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
<?php
function  FindLargestAndSmallestValueInArray(){
 
  $array1 = array(360,310,310,330,313,375,456,111,256);   
 
  $greatestValue = max($array1);   
  $smallValue = min($array1);   
  echo "Giá trị lớn nhất: ".$greatestValue ."<br>";  
  echo "Giá trị nhỏ nhất: ".$smallValue."<br>";
  
}
FindLargestAndSmallestValueInArray();
?>
//6.	Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
<?php
function  sortArrayInAscendingOrder(){
  $numbers = array(4, 6, 2, 22, 11);
  sort($numbers);
    
  foreach( $numbers as $n) {
      echo "$n <br>";
  }
  
}
sortArrayInAscendingOrder();
?>
//7.	Viết chương trình PHP để tính giai thừa của một số nguyên dương.
<?php
function  factorialOfPositiveInteger(){
  $n = 7;  
        $x = 1;
	    for($i=1; $i <= $n-1; $i++)  
		{  
		 $x*=($i+1);   
		}  
		echo "Giai thừa của $n = $x"."<br>";
  
}
factorialOfPositiveInteger();
?>
//8.	Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
<?php
function check_prime($n)
{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0){
            return false;
        }
    }
    return true;
}
function show_prime($a, $b){
    for ($i = $a; $i <= $b; $i++){
        if(check_prime($i))
            echo $i, '<br>';
    }
}
show_prime(25, 60);
?>
//9.	Viết chương trình PHP để tính tổng của các số trong một mảng.
<?php
function sumNumberInArray()
{
  $prime_numbers = array(2, 3, 5, 7);
  echo array_sum($prime_numbers);
}
sumNumberInArray();
?>
//10.	Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
<?php
function fibonacci($n) {
  if ($n < 0) {
      return - 1;
  } else if ($n == 0 || $n == 1) {
      return $n;
  } else {
      return fibonacci ( $n - 1 ) + fibonacci ( $n - 2 );
  }
}

echo ("10 số đầu tiên của dãy số fibonacci: ");
for($i = 0; $i < 10; $i ++) {
  echo (fibonacci ( $i ) . " ");
}
?>
//11.	Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
<?php
function checkNumberIsAnArmstrongNumber()
{
    
         
        $n=153;
        $r;
        $sum=0;
        $TemporaryVariable;  
        
        
        $TemporaryVariable=$n;  
        while( $n > 0)  
        {  
        $r=$n%10;  
        $sum=$sum+($r*$r*$r);  
        $n=$n/10;  
        }  
        if($TemporaryVariable==$sum)  
        echo("So da cho la so Armstrong ");  
        else  
        echo("So da cho khong phai la so Armstrong");  
  
        
}
checkNumberIsAnArmstrongNumber();
?>
//12.Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
<?php
function insertElementIntoArrayAtAnyPosition()
{
    $array1 = array( '1','2','3','4','5' );  
    echo 'Mảng ban đầu: '."<br>";  
    foreach ($array1 as $x)   
    {
        echo "$x ";
    }  
    echo "<br>";
    $element = '3';  
    array_splice( $array1, 3, 0, $element );   
    echo "mảng sau khi chèn là: "."<br>";  
    foreach ($array1 as $x)   
    {
        echo "$x ";
    }  
  
        
}
insertElementIntoArrayAtAnyPosition();
?>

//13.Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
<?php
function removeDuplicateElementsInArray()
{
    $array =  array( '1','mai','3','4','5','mai' );
    $result = array_unique($array);
    var_dump($result);
  
        
}
removeDuplicateElementsInArray();
?>
//14.Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
<?php
function findPositionElementInArray()
{
    $array=array("hoa","mai","lam");
    var_dump( $array ); 
    echo $array[0];  
}
findPositionElementInArray();
?>

//15.Viết chương trình PHP để đảo ngược một chuỗi.
<?php
function reverseString($string){
 
  return strrev($string);
}
echo reverseString('nam');
?>

//16.Viết chương trình PHP để tính số lượng phần tử trong một mảng.
<?php
function calculateTheNumberOfElementsInArray(){
 
  $list = array(2, 3, 5, 7, 11, 13, 17, 19);
  echo count($list);
}
calculateTheNumberOfElementsInArray();
?>

//17.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
<?php
        function checkIfStringIsPalindromeString($string)   
		{  
		  if ($string == strrev($string))  
			  return 1;  
		  else  
			  return 0;  
		}  
		echo checkIfStringIsPalindromeString('maiminh');
       ?>
//18.Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
<?php
function countTheNumberOfOccurrencesOfElementInArray()   
{  
$array = array('mai','lan','mai','mai','hoa','mai');
echo '<pre>';

print_r(array_count_values($array));
}  
echo  countTheNumberOfOccurrencesOfElementInArray();
?>

//19.Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
<?php
function sortArrayInDescendingOrder()   
{  
$number = array(4, 6, 2, 22, 11);
rsort($number);

foreach( $number as $n) {
echo "$n <br>";
}  
}
echo   sortArrayInDescendingOrder()   ;
?>
//20.Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
        // thêm một phần tử vào đầu
        <?php
        function addAnElementToTheBeginningOfAnArray()   
		{  
      
      $array = array("mai", "hoa", "linh");
       
     
      array_unshift( $array , "bình ");
      print_r( $array );
      
  }
		echo  addAnElementToTheBeginningOfAnArray()  ;
       ?>
          // thêm một phần tử vào cuối   
             
       <?php
       function addAnElementToTheEndOfAnArray()   
   {  
     
     $array = array("mai", "hoa", "linh");
      
    
     array_push( $array , "bình ");
     print_r( $array );
     
 }
   echo  addAnElementToTheEndOfAnArray()    ;
      ?>
//21.Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
<?php
function findSecondLargest($arr) {

rsort($arr);

return $arr[1];
}

$numbers = array(1, 3, 5, 2, 4);
$secondLargest = findSecondLargest($numbers);
echo "Số lớn thứ hai trong mảng là: " . $secondLargest;
?>

//22.Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
    //tìm ước số chung lớn nhất 
    <?php
    $a = 30;
    $b = 40;
   
   function findTheGreatestCommonDivisorOfTwoPositiveIntegers($a, $b) {
   if ($b == 0) return $a;
   return findTheGreatestCommonDivisorOfTwoPositiveIntegers($b, $a % $b);
  }
  echo ("USCLN của $a và $b là: " . findTheGreatestCommonDivisorOfTwoPositiveIntegers($a, $b)) . "<br>";
      ?>
    //tìm bội số chung nhỏ nhất
    <?php
     $a = 30;
     $b = 40;
    
    function findTheLeastCommonMultipleOfTwoPositiveIntegers($a, $b) {
      return ($a * $b);
   }
   echo ("BCNN của $a và $b là: " . findTheLeastCommonMultipleOfTwoPositiveIntegers($a, $b)) . "<br>";
       ?>
//23.Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
<?php

    
function checkIfNumberIsPerfectOrNot()
{

  $n=28;
  if($n<2) return false;

 
      $sum = 1;
      $sq = sqrt($n); 
   
 
      for($i = 2; $i <= $sq; $i++){
          if($n%$i == 0) {
              $sum = $sum + ($i + ($n/$i)); 
          }
      }
       
      return $sum==$n?true:false;
  }


       
      if(checkIfNumberIsPerfectOrNot()) echo'số hoàn hảo';
      else echo 'không phải số hoàn hảo';
  

checkIfNumberIsPerfectOrNot();
   ?>


//24.Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
<?php
$array = array(1, 5, 2, 8, 3, 9, 7); 
$max_odd = -1; 
foreach ($array as $num) {

if ($num % 2 == 1 && $num > $max_odd) {
$max_odd = $num; 
}
}
if ($max_odd != -1) {
echo "Số lẻ lớn nhất trong mảng là: " . $max_odd;
} else {
echo "Không có số lẻ trong mảng";
}
?>

//25.Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
   
<?php
function checkIfNumberIsPrimeOrNot($n)
    {
        for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0){
         return false;
    }
    }
        return true;
    }
    $n = 201;
    if(checkIfNumberIsPrimeOrNot($n))
        echo "{$n} là số nguyên tố";
    else
        echo "{$n} không là số nguyên tố";

?>

//26.Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function  FindLargesttValueInArray(){
 
  $array1 = array(360,310,310,330,313,375,456,111,256);   
 
  $greatestValue = max($array1);   
 
  echo "Giá trị lớn nhất: ".$greatestValue ."<br>";  
 
  
}
FindLargestValueInArray();
//27.Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
<?php
$numbers = array(-5, 3, -10, -1, 8, -2);
$maxNegative = null;
foreach ($numbers as $number) {
if ($number < 0) {
if ($maxNegative === null || $number > $maxNegative) {
$maxNegative = $number;
}
}
}
if ($maxNegative === null) {
echo 'Không có số âm trong mảng';
} else {
echo 'Số âm lớn nhất trong mảng là: ' . $maxNegative;
}
?>

//28.Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
<?php
function sumOfOddNumbers(){

    $i;
    $s=0;
    $n=9;
    for($i = 1;$i <= $n;$i++){
        if($i % 2 != 0){
            $s = $s + $i;
        }
    }
    echo 'tổng bình phương số lẻ là '.$s;
}


sumOfOddNumbers();
?>


//29.Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
<?php
function isPerfectSquare($number){
   $root = sqrt($number);
   return ($root * $root == $number);
   }
   function findPerfectSquares($start, $end){
   for($i=$start; $i<=$end; $i++){
   if(isPerfectSquare($i)){
   echo $i . " is a perfect square.
   ";
   }
   }
   }
   $start = 1;
   $end = 100;
   findPerfectSquares($start, $end);
   ?>

//30.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
<?php
function checkStringIsSubstringOfAnotherString(){
   $str = 'hoa mai nở';
   $sub = 'mai';

   if (strpos($str, $sub) !== false) {
   echo 'có chứa ';
   } else {
   echo 'không chứa ';
   }
   }
   checkStringIsSubstringOfAnotherString()
  ?>

?>
