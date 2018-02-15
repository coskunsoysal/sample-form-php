<?php

for($i= 0; $i <count($_POST['gender']);$i++){
    $gender = $_POST['gender'][$i];
    $firstname = $_POST['firstname'][$i];
    $lastname = $_POST['lastname'][$i];
    $email = $_POST['email'][$i];

	$fp = fopen("formdata.txt", "a");
	echo $savestring = $gender . "," . $firstname . "," . $lastname . "," . $email ."\n";
	fwrite($fp, $savestring);
	fclose($fp);
    
    echo "Data Saved Successfully";
}
?>
