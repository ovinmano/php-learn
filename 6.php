<?php

//---------------------php file handling
// 1.)read 

$myfile=fopen("file.txt","r")or die("UNALE TO OPEN MY FILE");
echo fread($myfile,filesize("file.txt"));
fclose($myfile);
// op=UNALE TO OPEN MY FILE(error) because file not create

//----file create and read

$myfile=fopen("file.txt","r")or die("UNALE TO OPEN MY FILE");
echo fread($myfile,filesize("file.txt"));
fclose($myfile);
//op=HTML=HYPERTEXT MARKUP LANGUAGE CSS=CASCADING STYLE SHEET

//-----fgets method(show on 1st line)

$myfile=fopen("file.txt","r")or die("UNALE TO OPEN MY FILE");
echo fgets($myfile);
fclose($myfile);
// op=HTML=HYPERTEXT MARKUP LANGUAGE


//-----feof(end of file)using while end of the file display

$myfile=fopen("file.txt","r")or die("UNALE TO OPEN MY FILE");
while (!(feof($myfile))) {
   echo fgets($myfile)."<br>";
}
fclose($myfile);
// op=HTML=HYPERTEXT MARKUP LANGUAGE
//    CSS=CASCADING STYLE SHEET

// fgetc(1sr letter diplay)
$myfile=fopen("file.txt","r")or die("UNALE TO OPEN MY FILE");
echo fgetc($myfile)."<br>";
fclose($myfile);
//    op=H 


//fgetc-using while loop

$myfile=fopen("file.txt","r")or die("UNALE TO OPEN MY FILE");
while (!(feof($myfile))) {
   echo fgetc($myfile)."<br>";
}
fclose($myfile);
/* op=
H
T
M
L
=
H
Y
P
E
R
T
E
X
T

M
A
R
K
U
P
*/
//2.write
// old data delete and create new data 
$myfile=fopen("file.txt","w")or die("UNALE TO OPEN MY FILE");
$text1="ABC\n";
fwrite($myfile,$text1);
fclose($myfile);
// op=browser blank and check file display =ABC

// --------------3.) a+
//old data not delete and additional data add...
$myfile=fopen("file.txt","a+")or die("UNALE TO OPEN MY FILE");
$text1="MANOJ\n";
fwrite($myfile,$text1);
fclose($myfile);
// op=browser blank and check file display =ABC  MANOJ

//multiple data
$myfile=fopen("file.txt","a+")or die("UNALE TO OPEN MY FILE");
$text1="MANOJ\n";
$text2="KUMAR\n";
fwrite($myfile,$text1);
fwrite($myfile,$text2);
fclose($myfile);
/*op=
ABC
MANOJ
KUMAR*/

//4.)----------------- x+
//x+ (already created in file.txt so ,showing on error throw)
$myfile=fopen("file.txt","x+")or die("UNALE TO OPEN MY FILE");
$text1="MANOJ\n";
$text2="KUMAR\n";
fwrite($myfile,$text1);
fwrite($myfile,$text2);
fclose($myfile);
// op=UNALE TO OPEN MY FILE(error)

// autometic file creation
$myfile=fopen("newfile.txt","x+")or die("UNALE TO OPEN MY FILE");
$text1="MANOJ\n";
$text2="KUMAR\n";
fwrite($myfile,$text1);
fwrite($myfile,$text2);
fclose($myfile);

// op=ctrl+b check adding new file ,..and file data = MANOJ  KUMAR 
//browser 2 times refresh error show file was exits



?>