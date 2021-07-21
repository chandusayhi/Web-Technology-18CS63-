<!-- PHP Functions -->
<!DOCTYPE html>
<html>
<head><title>php-functions()</title></head>
<body>

<!-- function syntax -->
<?php
function writeMsg() {
  echo "Hello world! ";
}
writeMsg();		 #calling a function
echo nl2br("\n--This is output of function sytanx---"); #nl2br() --newline break
?>

<!-- function with one parameter -->
<h3> States of India </h3>
<?php
function countryName($fname) {
  echo "$fname, India.<br>";
}

countryName("Karnataka");
countryName("Himachal Pradesh");
countryName("West Bengal");
echo "---This is output of calling one variable---";
?>

<!-- Function with two parameter -->
<h3> States, and their capital cities of India</h3>
<?php
function capName($fname, $capcity) {
  echo "$fname India. Capital is $capcity <br>";
  
}

capName("Karnataka","Bengaluru"); #calling ()
capName("Himachal Pradesh","Shimla");
capName("West Bengal","Kolkata");
echo "----This is output of calling two variable---";
?>

</body>
</html>
