<?php
// DWITE Round 1 Question 1 submission by Jonathan Libby
// 31/10/2012

// OUT FILE OPEN
 $out = fopen("OUT1.txt","w");

// IN (DATA) FILE OPEN & READ
$dataFile = fopen("DATA1.txt","r");
while(!feof($dataFile)) {
$data = fgetc($dataFile);
echo pile($data);
$pile = pile($data);
fwrite($out,$pile);
}

 
function pile($num) {
switch($num) {
	case 1:
	return "
*
"; 	
	break;
	case 2:
		return "
*
**
*";
		break;
	case 3:
		return "
*
**
***
**
*";
		break;
	case 4:
		return "
*
**
***
****
***
**
*";
		break;
	case 5:
		return "
*
**
***
****
*****
****
***
**
*";
		break;
	case 6:
		return "
*
**
***
****
*****
******
*****
****
***
**
*";
		break;
	case 7:
		return "
*
**
***
****
*****
******
*******
******
*****
****
***
**
*";
		break;
	case 8:
		return "
*
**
***
****
*****
******
*******
********
*******
******
*****
****
***
**
*";
		break;
	case 9:
		return "
*
**
***
****
*****
******
*******
********
*********
********
*******
******
*****
****	
***
**
*";
		break;
	case 10:
		return "
*
**
***
****
*****
******
*******
********
*********
**********
*********
********
*******
******
*****
****
***
**
*";
		break;
}
}

// FILE CLOSES
fclose($dataFile);
fclose($out);

?>