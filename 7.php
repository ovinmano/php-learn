<?php
//-----------------php filters

//1.)string

$s="<h1>HELLO WORLD!</h1>";
$sa=filter_var($s,FILTER_SANITIZE_STRING);
echo $sa."<br>";
// op=HELLO WORLD!

//2.)intiger

$i=100;
if (!(filter_var($i,FILTER_VALIDATE_INT)===false)) {
    echo "IT IS VALID INTIGER"."<br>";
}
else {
    echo "NOT VALID"."<br>";
}
// op=IT IS VALID INTIGER

//----------IP address
$ip="127.0.0.1";
if (!(filter_var($ip,FILTER_VALIDATE_IP)===false)) {
    echo "IT IS VALID IP ADDRESS"."<br>";
}
else {
    echo "NOT VALID ADDRESS"."<br>";
}
// op=IT IS VALID IP ADDRESS


//-------Email address
$email="manojrabeal@gmail.com";
$newEmail=filter_var($email,FILTER_SANITIZE_EMAIL);
if (filter_var($newEmail,FILTER_VALIDATE_EMAIL)===false) {

    echo "$newEmail IS NOT VALID EMAIL ADDRESS"."<br>";
}
else{
    echo"$newEmail IS VALID"."<br>";
}
// op=manojrabeal@gmail.com IS VALID
//suppose @-delete, .com-delete = manojrabealgmail.com IS NOT VALID EMAIL ADDRESS

//-------------ipv6
$ipv="2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
if (filter_var($ipv,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6)) {
   echo "VALID IPV6"."<br>";
}
else {
    echo "NOT VALID IPV6"."<br>";
}
// op=VALID IPV6

//-----int value checkup filter
$int=125;
$min=100;
$max=200;
if (filter_var($int,FILTER_VALIDATE_INT,array("options"=>array("min_range"=>$min,"max_range"=>$max)))) {
    echo"WITHIN A RANGE"."<br>";
}
else {
    echo "NOT WITHIN A RANGE"."<br>";
}
// op=WITHIN A RANGE
//suppose int var la 12 kudutha op=NOT WITHIN A RANGE
//100-200 ,so 12 was lessthen 100 .so display else 

//------------url
$url="https://githup.com/ovinmano";
$surl=filter_var($url,FILTER_SANITIZE_URL);
if (filter_var($surl,FILTER_VALIDATE_URL)) {
    echo strtoupper("valid url")."<br>";
}
else{
    echo "not valid url";
}

//---------------------filter array
$data=array("EMAIL1"=>"abc@gamil.com","EMAIL2"=>"pqrs@gmail.com");
$mydata=filter_var_array($data,FILTER_VALIDATE_EMAIL);
echo var_dump($mydata);
// op=array(2) { ["EMAIL1"]=> string(13) "abc@gamil.com" ["EMAIL2"]=> string(14) "pqrs@gmail.com" }
?>