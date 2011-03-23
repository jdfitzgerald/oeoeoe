<?
//print_r($_SERVER);
//echo "<br>cwd<br>";
//echo getcwd();


//print_R($x=stat('index.php'));

//print_r(posix_getpwuid($x['uid']));
echo 'ook';
echo "mem ".memory_get_usage()."<br>";

$mult = 1024;
$size = 8192;
$x = str_repeat('x',$size);
$y = '';
for($i=0;$i<$mult;$i++)
  $y .= str_repeat($y,$size);


echo "mem ".memory_get_usage()."<br>";

ini_set('memory_limit','1000M');
$x = $y<1;
echo $x;
echo "mem ".memory_get_usage()."<br>";
echo 'ook';
