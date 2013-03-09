<?php

// Create $content variable
$content = 'abcdefghijklmnopqrstuvwxyz';
$increment = 1;

// Count characters in $content variable
$char_count = strlen($content);

// Write variable values to screen
echo "This is the string $content: ";
echo "$char_count charcters in the string";


// Split the $content variable into indidual array items
$content_array = str_split($content);

// Write variable output to screen

for ($i=1; $i<$content_array; $i++)
  {
  echo "The number is " . $i . "<br />";
  }
  
foreach ($content_array as $key => $value) {
	$increment++;
	echo "The number is $i &amp; the increment is $increment";
}

?>