<?php
    //$myFile = "http://renownestates.com/cache/feedSubscribers.txt";
 /*   $orig = file_get_contents( "C:\Users\anant\Desktop\data2015-01.txt" ); // get the contents, and echo it out.
    //$fh = fopen($myFile, 'r');
    
    //$file = 'code.ino';
	//$orig = file_get_contents($file);
	$a = htmlentities($orig);

	echo '<code>';
	echo '<pre>';
	echo $a;

	echo '</pre>';
	echo '</code>';*/

$cmd = 'C:\Users\anant\Desktop\data2015-01.txt';
echo "<pre>".shell_exec($cmd)."</pre>";

    ?> 