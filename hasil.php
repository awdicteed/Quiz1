<!DOCTYPE html>
<html lang="en">
<head>
	<title>BMI Anda</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
		<?php
	if ($_POST['hitung']) { 
    $berat = $_POST['berat'];
    $tinggi = $_POST['tinggi'];

    function bmi($berat,$tinggi) {
        $bmi = $berat/($tinggi*$tinggi);
        return $bmi;
    }   

    $bmi = bmi($berat,$tinggi); //<--- this is critical

    if ($bmi <= 18.5) {
        $output = "UNDERWEIGHT";

        } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
        $output = "NORMAL WEIGHT";

        } else if ($bmi > 24.9 AND $bmi<=29.9) {
        $output = "OVERWEIGHT";

        } else if ($bmi > 30.0) {
        $output = "OBESE";
    }
    echo "Your BMI value is  " . $bmi . "<br>  and you are : "; 
    echo "$output";
}
?>
</body>
</html>
