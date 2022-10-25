<?php
$firstNum = 70;
$secondNum = 80;
$thirdNum = 50;
//if condition static
if($firstNum > $secondNum && $firstNum > $thirdNum){
    echo "First number is Big";
}elseif($secondNum > $firstNum && $secondNum > $thirdNum){
    echo "Second number is Big";
}else{
    echo "Third number is Big";
}
echo '<br>';


//if condition dinamic with function:
function getBigNum($one, $two, $three){
    $firstNum = $one;
    $secondNum = $two;
    $thirdNum = $three;
    //if condition static
    if($firstNum > $secondNum && $firstNum > $thirdNum){
        echo " $firstNum First number is Big";
    }elseif($secondNum > $firstNum && $secondNum > $thirdNum){
        echo " $secondNum Second number is Big";
    }else{
        echo " $thirdNum Third number is Big";
    }
}
getBigNum(40, 50, 30);


//4 conditions dinamic if, elseif, else with function:
    function getbigNumber($one, $two, $three, $four){
        $firstNum = $one;
        $secondNum = $two;
        $thirdNum = $three;
        $fourthNum = $four;
        //if condition static
        if($firstNum > $secondNum && $firstNum > $thirdNum && $firstNum > $fourthNum){
            echo " $firstNum First number is Big";
        }elseif($secondNum > $firstNum && $secondNum > $thirdNum && $secondNum > $fourthNum){
            echo " $secondNum Second number is Big";
        }elseif($thirdNum > $firstNum && $thirdNum > $secondNum && $thirdNum > $fourthNum){
            echo " $thirdNum Third number is Big";
        }else{
            echo "$fourthNum Fourth number is Big";
        }
    }
    getbigNumber(40, 50, 30, 50);
    echo '<br>';

    //Cheack Alpabath, numaric special value system :
   function valueCheck($value){
    $value = $value;
    if(ctype_alpha($value)){
        echo "This is Alpabath";
    }elseif(is_numeric($value)){
        echo "This is Numaric value";
    }else{
        echo "This is special cheracter";
    }

   }
   valueCheck('parvej');//Alpabath value print
   echo '<br>';
   valueCheck(123433);//Numaric value print
   echo '<br>';
   valueCheck('#%%$#$%%$');//Special value print
   echo '<br>';



//Posative, nagative, Nutral and Odd and Even Number Check:
$number = 51;
if($number > 0){
    if($number % 2 == 0){//Apply Nasted if, elseif and else condition:
        echo "This is Posative and Even Number";
    }else{
        echo "This is Posative and Odd Number";
    }
}elseif($number < 0){
    echo "This is Negative Number ";
}else{
    echo "This is Nutral Number";
}
echo '<br>';




//Dinamic Posative, nagative, Nutral and Odd and Even Number Check:
function numberCheck($number){
    $number = $number;
if($number > 0){
    if($number % 2 == 0){//Apply Nasted if, elseif and else condition:
        echo "This is Posative and Even Number";
    }else{
        echo "This is Posative and Odd Number";
    }
}elseif($number < 0){
    echo "This is Negative Number ";
}else{
    echo "This is Nutral Number";
}
}
numberCheck(-67);
echo '<br>';



//Authentication static system:
$email = 'pj.pavaz45@gmail.com';
$password = '1122';
if($email == 'pj.parvaz45@gmail.com'){
    if($password == '1122'){
        echo "Welcome ! Your login successful";
    }else{
        echo "Your password is Incorrect";
    }
}else{
    echo "Your email is incorrect";
}
echo '<br>';



//Dynamic Interested calculation system:

function interestCalculation($loan = 50000,$rate = 10, $period = 1 ){
    $loan = $loan;
    $interest_rate = $rate / 100;// 10 percent
    $period  = $period * 12;// Year
    $interestTotal = $interest_rate * $loan;
    $loanAndInterest = $loan + $interestTotal;
    $perMonthPay =  $loanAndInterest / $period;
    return round($perMonthPay) ;
}
interestCalculation();
echo '<br>';



////Interested calculation and eligibal system:
function getLoan($income, $expense, $perMonthPay){
    $income = $income;
    $expense = $expense;
    $credit = $income - $expense;
    if($credit > $perMonthPay){
        echo "He is eligibal for loan";
    }else{
        echo "he is not eligibal for loan";
    }
}
getLoan(100000, 50000, interestCalculation(60000, 10, 1));//It's call is call back function. Call back function is when a function call another functions pass a argument
echo '<br>';


//Short Hand If...Else (Ternary Operator)
// Ternary Operator use to a simple condition operation;
$userName = 'md.parvej123';
echo $userName == 'md.parvej123' ? 'This is correct user name.' : 'This is incorrect user name ';// This way write to Ternary Operator;
echo '<br>';




//Array:
$names = ['parvej', 'raju', 'jahid', 'hafizul', 'Shamim', 'kobir'];//first types of array
print_r($names);
echo '<br>';

$names2 = array('parvej', 'raju', 'jahid', 'hafizul', 'Shamim', 'kobir');//differnet types of array
print_r($names2);
echo '<br>';


//Indexing arrays
echo $names[0];
echo '<br>';
echo $names[1];
echo '<br>';
echo $names[2];
echo '<br>';

//Associative Arrays
$age = ['parvej' => 24, 'raju' => 23, 'jahid' => 32, 'hafizul' => 22, 'Shamim' => 34, 'kobir' => 21];
echo $age['parvej'];
echo '<br>';
echo $age['kobir'];
echo '<br>';










?>