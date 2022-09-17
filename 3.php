<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>php learn</title>
</head>
<body>
    <?php
    //php any one class using posible... more class not working

    // constructor  (__ using double underscore)

    //----------default constructor 
    class person{
        public $name;
        public $age;
        function __construct(){
            $this->name="manoj";
            $this->age=21;
        }
        function get(){
           echo $this->name."<br>";
           echo $this->age;
        }
    }
        $man=new person();
        $man->get();          //op=manoj 21
        

//    //--------parameter constructor
   class person{
    public $name;
    public $age;
    function __construct($n,$a){
        $this->name=$n;
        $this->age=$a;
    }
    function get(){
       echo "NAME=".$this->name."   AGE=".$this->age."<br>";
    }
}
    $obj1=new person("manoj",21);
    $obj1->get();  

    $obj2=new person("kumar",22);
    $obj2->get();  

    $obj3=new person("ovin",25);
    $obj3->get(); 

        // op=NAME=manoj AGE=21
        // NAME=kumar AGE=22
        // NAME=ovin AGE=25
    
//------------destructor

class person{
    public $name;
    public $age;
    function __construct($n,$a){
        $this->name=$n;
        $this->age=$a;
    }
    function get(){
       echo "NAME=".$this->name."   AGE=".$this->age."<br>";
    }
    function __destruct(){
        echo "<br>{$this->name} {$this->age} IS DESTORYED";
    }
}
    $obj1=new person("manoj",21);
    $obj1->get();  

    $obj2=new person("kumar",22);
    $obj2->get();  

    $obj3=new person("ovin",25);
    $obj3->get(); 

    //op=
    // NAME=manoj AGE=21
    // NAME=kumar AGE=22
    // NAME=ovin AGE=25

    // ovin 25 IS DESTORYED
    // kumar 22 IS DESTORYED
    // manoj 21 IS DESTORYED
    
    //----------------php inheritance
    class fruits{
        public $name;
        public $color;
        function __construct($n,$c){
           $this->name=$n;
           $this->color=$c;
        }
        function get(){
            echo "the fruit name is{$this->name} and the color is {$this->color}";
        }
    }
        class strawberry extends fruits{
            function child(){
            echo "<br> the fruits is berry";
        }}
    
    $obj=new strawberry("STRAWBERRY","RED");
    $obj->get();
    $obj->child();

//-----------method overriding
class fruits{
    public $name;
    public $color;
    public $weight;
    function __construct($n,$c){
        $this->name=$n;
        $this->color=$c;
    }
    function get(){
        echo "The Fruit name is ={$this->name} , And the Color is ={$this->color},";
    }
}
class strawberry extends fruits{
    function __construct($n,$c,$w){
        parent::__construct($n,$c);
        $this->weight=$w;
    }
    function get(){
        echo parent:: get(). " The Fruit weight is ={$this->weight}KG...!";
    }
}
$obj=new strawberry("STRAWBERRY","RED",10);
$obj->get();

// op=The Fruit name is =STRAWBERRY , And the Color is =RED, The Fruit weight is =10KG...!


//-------------------php oops constant
//outside class
class person{
    const a="manojkumar";
}
echo person::a;

//inside class

class person{
    const a="manojkumar";
    function display(){
        echo self::a;
    }
}
$obj=new person();
$obj->display();



//---------------php abstract class and methods
abstract class person{
    abstract function display();
    }
class childA extends person{
    function display(){
    echo "childA";
}
}
$obj=new childA();
$obj->display();       //op=childA



//---------------php abstract class and methods
// -------more then child class
abstract class person{
    abstract function display();
    }
class childA extends person{
    function display(){
       echo "childA";
    }
}
class childB extends person{
    function display(){
       echo "childB";
    }
}
$obj=new childA();
$obj->display();       //op=childA
$obj1=new childB();
$obj1->display();   //op=childB

//---------------php abstract class and methods
//------------abs parameter 
abstract class person{
    abstract function display($s);
    }
class childA extends person{
    function display($s){
       echo "$s <br>";
    }
}
class childB extends person{
    function display($s,$s2="B"){
       echo "$s $s2<br>";
    }
}
$obj=new childA();
$obj->display("child A");     
$obj1=new childB();
$obj1->display("child");  
//op=child A
   //child B 


//-------------------php traits opp concept
trait message1{
    function msg1(){
        echo "HELLO!<br>";
    }
}
class welcome1{
    use message1;
}
class welcome2{
    use message1;
}
$obj1=new welcome1();
$obj1->msg1();
$obj2=new welcome2();
$obj2->msg1();

// op=HELLO!
   // HELLO!
                              
//-------------------php traits opp concept
// ------------multiple inheritance
trait message1{
    function msg1(){
        echo "HELLO!<br>";
    }
}
trait message2{
    function msg2(){
        echo "HOW ARE U!<br>";
    }
}
class welcome1{
    use message1;
}
class welcome2{
    use message1,message2;
}
$obj1=new welcome1();
$obj1->msg1();
$obj2=new welcome2();
$obj2->msg1();
$obj2->msg2();

// op=HELLO!
//    HELLO!
//    HOW ARE U!

                              
    ?>
    
</body>
</html>