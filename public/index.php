<?
//print_r($_SERVER);
echo "<br>cwd<br>";
echo getcwd();


//print_R($x=stat('index.php'));

print_r(posix_getpwuid($x['uid']));
echo 'ook';
echo "mem ".memory_get_usage()."<br>";

$mult=1024;
$x = str_repeat('x',$mult);
$y = str_repeat($oneK,$mult);
echo "mem ".memory_get_usage()."<br>";

ini_set('memory_limit','1000M');
$x = $y<1;
echo $x;
echo "mem ".memory_get_usage()."<br>";
echo 'ook';
