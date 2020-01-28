<?php
set_time_limit(0);
//$cmd = system('cmd.exe /c C:\Users\anant\Desktop\try.bat');
//$p = popen('cmd.exe /c C:\Users\anant\Desktop\try2.cmd', 'r');
//system('cmd /c C:\Users\anant\Desktop\try2.cmd');
//$cmd = 'C:\Users\anant\Desktop\data2015-01.txt';
//echo "<pre>".shell_exec($cmd)."</pre>";
//$orig = file_get_contents( "C:\Users\anant\Desktop\data2015-01.txt" ); // get the contents, and echo it out.
//$cmd = system('cmd.exe /c C:\Users\anant\Desktop\example1.bat');
//$var1 = "domain.com"; //this is domain
$var1 = $_SESSION["fromYear"];   //this is username
$var2 = $_SESSION["fromMonth"];   //this is username
$var3 = $_SESSION["randomNumber"];   //this is username

//$var1 = '2015';   //this is username
//$var2 = '05';
//$var3 = '2115';

/*$bat_file = 'C:\"Program Files (x86)"\Altova\RaptorXMLXBRLServer2020\bin\RaptorXMLXBRL.exe script C:\Users\anant\Downloads\SECDB-master\scripts\feed_tools.py & C:\"Program Files (x86)"\Altova\RaptorXMLXBRLServer2020\bin\RaptorXMLXBRL.exe script C:\Users\anant\Downloads\SECDB-master\scripts\download_feeds.py & C:\"Program Files (x86)"\Altova\RaptorXMLXBRLServer2020\bin\RaptorXMLXBRL.exe script C:\Users\anant\Downloads\SECDB-master\scripts\build_secdb.py --create-tables --log=C:\Users\anant\Downloads\SECDB-master\logs\log-'.$var1.'-'.$var2.'_'.$var3.'.txt C:\Users\anant\Downloads\SECDB-master\feeds\xbrlrss-'.$var1.'-'.$var2.'.xml & C:\Users\anant\Downloads\SECDB-master\scripts\testos.py ';*/
$bat_file = 'C:\"Program Files (x86)"\Altova\RaptorXMLXBRLServer2020\bin\RaptorXMLXBRL.exe script C:\Users\anant\Downloads\SECDB-master\scripts\feed_tools.py & C:\"Program Files (x86)"\Altova\RaptorXMLXBRLServer2020\bin\RaptorXMLXBRL.exe script C:\Users\anant\Downloads\SECDB-master\scripts\download_feeds.py & C:\"Program Files (x86)"\Altova\RaptorXMLXBRLServer2020\bin\RaptorXMLXBRL.exe script C:\Users\anant\Downloads\SECDB-master\scripts\build_secdb.py --log=C:\Users\anant\Downloads\SECDB-master\logs\log-'.$var1.'-'.$var2.'_'.$var3.'.txt --create-tables C:\Users\anant\Downloads\SECDB-master\feeds\xbrlrss-'.$var1.'-'.$var2.'.xml & C:\Users\anant\Downloads\SECDB-master\scripts\testos.py ';


//$bat_file = 'C:\Users\anant\Desktop\try.bat '.escapeshellarg($var1)." ".escapeshellarg($var2);
//$bat_file = 'C:\Users\anant\Downloads\SECDB-master\hello.bat '.escapeshellarg($var1)." ".escapeshellarg($var2);

/*$bat_file = $raptor_home.'\bin\RaptorXMLXBRL.exe script '.$python_home.' \scripts\build_secdb.py --create-tables --log= '.$python_home.'\logs\log-2015-05.txt feeds\xbrlrss-2015-05.xml';*/

//Step-1

/*$bat_file = $raptor_home.'\bin\RaptorXMLXBRL.exe script '.$python_home.'\scripts\feed_tools.py';
echo $bat_file;
$cmd = system($bat_file);

echo "\nDone with step-1, Starting Step-2 .....\n";

//Step-1

$bat_file = $raptor_home.'\bin\RaptorXMLXBRL.exe script '.$python_home.'\scripts\download_feeds.py';
echo $bat_file;
$cmd = system($bat_file);

echo "\nDone with step-2, Starting Step-3 .....\n";
*/

/*$bat_file1 = $raptor_home.'\bin\RaptorXMLXBRL.exe script '.$python_home.'\scripts\feed_tools.py && '.$raptor_home.'\bin\RaptorXMLXBRL.exe script '.$python_home.'\scripts\download_feeds.py && '.$raptor_home.'\bin\RaptorXMLXBRL.exe script '.$python_home.'\scripts\download_filings.py feeds\xbrlrss-'.$var1.'-'.$var2.'.xml';

echo $bat_file1;
$cmd = system($bat_file1);*/
//$raptor_home = 'C:\"Program Files (x86)"\Altova\RaptorXMLXBRLServer2020';
//$python_home =  'C:\Users\anant\Downloads\SECDB-master';

/*$bat_file = $raptor_home.'\bin\RaptorXMLXBRL.exe script '.$python_home.'\scripts\build_secdb.py --create-tables --log=C:\Users\anant\Downloads\SECDB-master\logs\log-'.$var1.'-'.$var2.'_'.$var3.'.txt C:\Users\anant\Downloads\SECDB-master\feeds\xbrlrss-'.$var1.'-'.$var2.'_'.$var3.'.xml & '.$raptor_home.'\bin\RaptorXMLXBRL.exe script '.$python_home.'\scripts\testos.py';*/




/*$bat_file = 'C:\"Program Files (x86)"\Altova\RaptorXMLXBRLServer2020\bin\RaptorXMLXBRL.exe script C:\Users\anant\Downloads\SECDB-master\scripts\build_secdb.py  --create-tables --log=C:\Users\anant\Downloads\SECDB-master\logs\log-'.$var1.'-'.$var2.'..txt C:\Users\anant\Downloads\SECDB-master\feeds\xbrlrss-'.$var1.'-'.$var2.'.xml';*/

//echo $bat_file;

$cmd = system($bat_file);
//--create-tables 
//echo "\nlog create2 .....\n";
//header("Refresh:5");
?>

