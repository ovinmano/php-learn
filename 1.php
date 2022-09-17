<!DOCTYPE html>
<html lang="en">
<head>
    <title>php learn</title>
</head>
<body>
    <?php
    $c="hello world";
    $v=10;
    $u=10.9;
    $a="hai";
    $b="iam learning php";
    echo "<br>I love coding ".$a." ".$b ;
    Echo '<br>' .'first='.$a.'<br> last='.$b.'<br>';

    //var_dump = type...?

    Echo var_dump($v);
    Echo var_dump($u);
    Echo var_dump($a);
    echo'<br> <br>';

// ------------------php array

    $e=array(1,2,3,4,5);
    echo 'INDEX ARRAY VALUE='.$e[0].$e[1].$e[2];//op=123 display
    echo'<br>';
    echo var_dump($e);//op= array
    echo'<br>';


// ------------------php objects
    class car {
    function haii(){
        echo 'model=bmw';
    }
    }
    $d=new car();
    $d->haii();
    var_dump($d);
    echo'<br> <br>';
//-------------------conditional statement
    // 1.) if statement

    $f=date('H');
    if($f<10){
        echo 'have a good day';
    }
    else{
        echo 'have a good nice day';
    }
    echo'<br>';

    //-------------------------- 2.) else if 

    $g=date('H');
    if($g<10){
        echo 'good morning';
    }
    elseif($g<20){
        echo 'good afternoon';
    }
    elseif($g<22){
        echo 'good evening';
    }
    else{
        echo'good night';
    }
    echo'<br>';
    // -----------------3.)nested if else
    $h=date('H');
    
    if($h<20){   //true next line move....,false display 81th line else
        if($h<10){ //time true display if...,suppose false display else
        echo'iam eating breakfast';
        }
        else{
            echo'iam eating lunch';
        }
    }
    else{
        echo'iam eating dinner';
    }
    echo'<br>';

    // -------------4.)switch statement

    $color='green';
    switch($color){
        case 'green':
            echo'fav color green';
        break;
        case 'red':
            echo 'fav color is red';
        break;
        default:
        echo'your fav color is neither';
    }
    echo'<br><br>';

//-----------php string function
    //1.string reverse method
    echo strrev('manoj kumar');
    echo'<br>';
    
    // 2.stringspn
    echo strspn('hello world','khlleo');//op=5
    echo'<br>';
    //3.strcspn
    echo strcspn('hello world','l');//op=2 "l" letter index 2 one value display
    echo'<br>';
    //4.strstr
    echo strstr('hello world','World');//op= empty because 'W' was capital
    echo'<br>';
    //5.stristr
    echo stristr('hello world','World');//op=world ,because stristr not a case sensitive to use(upper,lowercase)
    echo'<br>';
    //6.strtoupper
    echo strtoupper('hello world');//op=HELLO WORLD;
    echo'<br>';
    //7.strtolower
    echo strtolower('Hello World');//op=hello world;
    echo'<br>';
    //8.strtr
    echo strtr('Hilla Warld','ia','eo');//op=Hello World;
    echo'<br>';
    echo'<br>';


//--------------------------php loops
    //--------------1.)while loop
    
    $k=1;
    while ($k <= 5) {
        echo $k.'<br>';
        $k++;
    } //op=12345
    echo'<br>';

    //-----------------2.)do while

    $no=1;
    do {
        echo $no.'<br>';
    $no++;
    }
    while ($no <= 5);//op=12345
    echo'<br>';

    // ----------------3.)for loop

    for ($r=1; $r <=5; $r++) { 
        echo $r.'<br>';
    }
    echo'<br>';

    // -------------4.)forEach loop

    $hai =array(1,2,3,4,5);
    foreach ($hai as $value) {
        echo $value;
    }

    echo'<br>';
    echo'<br>';

// -------------USER DEFINED FUNCTION 
    //function name not a case sensitive


    /*function add($i,$j){
        return $i+2;
    }
    echo add(1,2)   */           //op=3;
    

   /* function ad($i,$j){
        return $i+$j;
    }
    echo ad(1,2)  */             //op=3;

    //-------------DEFAULT ARGUMENTS

   /* function add($i,$j=2){
        return $i+$j;
    }
    echo add(1)*/
    
    //-----string df args

    function add($i,$j='kumar'){
        return "$i $j";
    }
    echo ADD('manoj');      //op=manoj kumar

    /*function add($i,$j='kumar'){
       echo "$i $j";
    }
     add('manoj');*/      //op=manoj kumar

     echo'<br>';
     echo'<br>';
//---------------type declaration strict mode
    // function addit(int $no1,int $no2){
    //     return $no1+$no2 ;
    // }
    // echo addit(2.5,3.5); //op=5 avoid wrong value using strict mode declare

    /*declare(strict_types=1);
    function addit(int $no1,int $no2){
        return $no1+$no2 ;
    }
    echo addit(2.5,3.5);
    */
    // op= strict_types declaration must be the very first statement in the script 
    //so create new file strict.php


//----------------------------------------------php operator

    //------------------array aperator

    $a1=array("a"=>"blue", "b"=>"red");
    $a2=array("c"=>"green", "d"=>"brown");
    print_r($a1+$a2);       //op=Array ( [a] => blue [b] => red [c] => green [d] => brown )
    
    var_dump($a1==$a2);   //op=bool(false)
    var_dump($a1===$a2);   //op=bool(false) key and value same and then same type so true, but not same so false..
    var_dump($a1!=$a2);   //op=bool(true)
    var_dump($a1!==$a2);   //op=bool(true) any one contion true so display true..
    var_dump($a1<>$a2);   //--not equality(inequality) //op=bool(true)

    // ----------------conditional assignment op
    echo'<br>';
    echo'<br>';
    //1.)ternary

    echo (1 < 2)?"true":"false";//op=true
    echo (1 > 2)?"true":"false";//op=false
    echo'<br>';
    //2.)null coalescing op
    //php 7 new op
    $name1="manoj";
    echo $name1=$name1??"kumar";  //op=manoj
    echo'<br>';
    
    ?>
    
</body>
</html>