//Nathaniel D. Smith

<html>
<body>
<form method='post' action='area.php' >
<h2>Area Calculator</h2>
<p>Length: <input type='text' name='len' /></p>
<p>Width: <input type='text' name='wdth' /></p>
<p><input type='submit' value='Calculate Area' />
   <input type='reset' value='Clear' /></p>


</form>
</body>
</html>

PHP script: area.php
<?php

/* This program calculates area of a rectangle
   It reads values from an array of variables passed to the current script via the HTTP POST method.
*/

// read length
  $length = $_POST['len'];
// read width
 $width = $_POST['wdth'];
/*Validate the input amnd then calc the area
 length must be nonneg
 width must be nonneg
*/

if ($length <0){
        echo "invalid length!\n";
} elseif ($width <0){:wq
:
        echo "Invalid width!\n";
} else{

// calculate the area
  $area = $length*$width;

// display result
  echo "Area of the rectangle is $area <br />\n";
  echo "Area of the rectangle is ".$area."\n";

}//end if else if
?>
