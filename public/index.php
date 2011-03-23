<?
//print_r($_SERVER);
//echo "<br>cwd<br>";
//echo getcwd();


//print_R($x=stat('index.php'));

//print_r(posix_getpwuid($x['uid']));
echo 'ook';

echo "mem ".memory_get_usage()."<br>";
$mult = 129;
$size = 1024;
$x = str_repeat('x',$size);
$y = '';
for($i=0;$i<$mult;$i++)
  $y .= str_repeat($x,$size);


echo "mem ".memory_get_usage()."<br>";
//ini_set('memory_limit','1000M');
$x = $y<1;
echo $x;
echo "mem ".memory_get_usage()."<br>";
echo "mem peak ".memory_get_peak_usage()."<br>";
echo 'ook';
