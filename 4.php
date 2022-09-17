<?php
// ----------------php static method and properties
//------parent class static
class car{
    static function getname(){
        return "BMW";
    }
    function __construct(){
        echo "CAR NAME=".self::getname();
    }
}
$obj=new car();    //op=CAR NAME=BMW

//-----child class static
class car{
    static function getname(){
        return "BMW";
    }
}
    class audi extends car{
    function __construct(){
        echo "CAR NAME=".self::getname();
    }
}
$obj=new audi();    //op=CAR NAME=BMW

//---------------static properties
class car{
    public static $name="AUDI";
    function __construct(){
        echo "CAR NAME=".self::$name;
    }
}
$obj=new car(); //op=CAR NAME=AUDI


class car{
    public static $name="AUDI";
}
class audi extends car{
    function __construct(){
        echo "CAR NAME=".parent::$name;
    }
}
$obj=new audi(); //op=CAR NAME=AUDI


//---------------------php last opp concept access modifiers
// 3 type access 1.public, 2. protected, 3. private

// 1.public
//accessing all classes
class car{
    public $name;
    function __construct(){
        $this->name="AUDI";
    }
    function display(){
        echo $this->name;
    }
}
$obj=new car();
$obj->display();    //op=AUDI


// 2.protected
//accessing inside classes,sub class..outside class not access
//its created already inside class so no error 
class car{
    protected $name;
    function __construct(){
        $this->name="AUDI";
    }
    function display(){
        echo $this->name;
    }
}
$obj=new car();
$obj->display();    //op=AUDI

// 3.private
//accessing for inside classes only ,....sub class and outside class not access.
//its created already inside class so no error 
class car{
    private $name;
    function __construct(){
        $this->name="AUDI";
    }
    function display(){
        echo $this->name;
    }
}
$obj=new car();
$obj->display();    //op=AUDI

//-------------------------php call back function
//user defind 

$s1="MANOJ";
$s2="KUMAR";
function fname($s1){
    echo $s1." ";
}
function lname($s2){
    echo $s2."<br>";
}
function display($arg1,$arg2){
    $arg1($arg2);//fname=manoj;   lname=kumar
}
display("fname",$s1);
display("lname",$s2);  //op=MANOJ KUMAR


//php inbuild method
function call($a){
    return strlen($a);
}
$a=array("hai","hello","welcome");
print_r(array_map("call",$a)); //op=Array ( [0] => 3 [1] => 5 [2] => 7 )

// call back anonymous function 
// dont use funtion name...only use f() keyword
//php inbuild method function name delete... function copy and paste
$a=array("hai","hello","welcome");
print_r(array_map(function($a){
    return strlen($a);  //op=Array ( [0] => 3 [1] => 5 [2] => 7 )
},$a));


// ------------php exception handling
function divide($a,$b){
    if ($b==0) {
        throw new exception("DIVIDE BY ZERO");
    }
    else {
        echo "result=".($a/$b);
    }
}
try{
    divide(2,0);
}
catch(exception $obj){
    echo $obj;
    echo "DIVIDE BY ZERO";
}
//op=Exception: DIVIDE BY ZERO in C:\xampp\htdocs\php learn\5.php:5 Stack trace: #0
//  C:\xampp\htdocs\php learn\5.php(12): divide(2, 0) #1 {main}
// op=DIVIDE BY ZERO


// inbuild
function divide($a,$b){
    if ($b==0) {
        throw new exception("DIVIDE BY ZERO");
    }
    else {
        echo "result=".($a/$b);
    }
}
try{
    divide(2,7);
}
catch(exception $obj){
    $c=$obj->getCode();
    $m=$obj->getMessage();
    $f=$obj->getFile();
    $l=$obj->getLine();
    echo "The Error is occur in the file".$f."at line".$l."message=".$m."code=".$c;
    
}
try{
    divide(2,0);
}
catch(exception $obj){
    $c=$obj->getCode();
    $m=$obj->getMessage();
    $f=$obj->getFile();
    $l=$obj->getLine();
    echo "The Error is occur in the file".$f."at line".$l."message=".$m."code=".$c;
    
}
//exception finally statement
finally{
    echo"PROCESS IS EXECUTED";
}
//op=result=0.28571428571429
//op=The Error is occur in the fileC:\xampp\htdocs\php learn\5.phpat 
//    line26message=DIVIDE BY ZEROcode=0
//op=PROCESS IS EXECUTED


//exception in oop concept
class myexception extends Exception{

}
class test{
    function divide($a,$b){
        if ($b==0) {
           throw new myexception("DIVIDE BY ZERO");
        }
        else {
            echo"RESULT=".($a/$b)."<br>";
        }
    }
}
$obj=new test();
try{
    $obj->divide(2,5);
    $obj->divide(2,0);
    
}
catch(myexception $obj1){
    echo"DIVIDE BY ZERO<br>";
}
finally{
    echo "PROCESS IS EXECUTED";
}
// op=RESULT=0.4
// op=DIVIDE BY ZERO
// PROCESS IS EXECUTED

?>