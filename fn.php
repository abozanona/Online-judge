<?php
/*
البالوع رام الله 8.5 مقر جوال الرئيسي 26/5
*/
$userID=0;
$questionID=0;
$submissionID=0;


$uploadedText="#include<iostream>
using namespace std;
int main(){
int x;
cin>>x;
cout<<5/2;}";


//to compile and save result in submissions file
exec("echo \"$uploadedText\" | sudo g++ -x c++ -o ./submissions/$submissionID.out - || echo $?",$compilation);
if(empty($compilation))
	echo "No compilation error";
else
	echo "Compilation error";
echo "<br>";
//to execute the .out file and save in outputs
exec("./submissions/$submissionID.out  < ./input/$userID.in || echo $?",$execution);


print_r($execution);
if(empty($execution))
	echo "No runtime error";
else
	echo "runtime error";
?>
