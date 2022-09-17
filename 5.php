<?php
// ---------------------php json

//-----------json encode

$a=array("no1"=>25,"no2"=>45,"no3"=>95); //key value pairs = associative array
echo json_encode($a);    
//op={"no1":25,"no2":45,"no3":95}

$s=array("no1","no3","no4");//index array convert to json array
echo json_encode($s)."<br>";
// op=["no1","no3","no4"]



//------------json decode

$jsonObj='
{
    "no1":25,
    "no2":45,
    "no3":95
}
';
$obj=json_decode($jsonObj);
echo $obj->no1."<br>"; //op=25
echo $obj->no2."<br>"; //op=45
echo $obj->no3."<br>"; //op=95

//associative array
$jsonObj='
{
    "no1":25,
    "no2":45,
    "no3":95
}
';
$obj=json_decode($jsonObj,true);
foreach ($obj as $key => $value) {
   echo "key=".$key." "."value=".$value."<br>";
}
//op=key=no1 value=25
//   key=no2 value=45
//   key=no3 value=95



//----------------------------php cookies

//1.) create cookie browser retriew
$key="NAME";
$value="MANOJ";
setcookie($key,$value,time()+3600,"/");
if (!isset($_COOKIE[$key])) {
    echo "COOKIE IS NOT SET";
}
else {
    echo "COOKIE IS VALUE=".$_COOKIE[$key];
}
//op=COOKIE IS VALUE=MANOJ

//2.delete cookie (-3600)
$key="NAME";
$value="MANOJ";
setcookie($key,$value,time()-3600,"/");
if (!isset($_COOKIE[$key])) {
    echo "COOKIE IS NOT SET"."<br>";
}
else {
    echo "COOKIE IS VALUE=".$_COOKIE[$key]."<br>";
}
// op=COOKIE IS NOT SET

//3.cookie enable checkup
$key="NAME";
$value="MANOJ";
setcookie($key,$value,time()-(86400*30),"/"); //86400=1 day, multiple 30 days
if (count($_COOKIE)>0) {
    echo "COOKIE IS ENABLED";
}
else {
    echo "COOKIE IS NOT ENABLED";
}
// op=COOKIE IS NOT ENABLED
?>