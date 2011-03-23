<?
echo "<br>ls<br>";
echo `ls`;

echo "<br>cwd<br>";
echo getcwd();

echo "<br>proc<br>";
$descriptorspec = array( 0 => array("pipe", "r"), 1 => array("pipe", "w"));

$cwd = '/tmp';
$env = array('some_option' => 'aeiou');

$process = proc_open('php', $descriptorspec, $pipes, $cwd, $env);

if (is_resource($process)) {
  // $pipes now looks like this:
  // 0 => writeable handle connected to child stdin
  // 1 => readable handle connected to child stdout
  // Any error output will be appended to /tmp/error-output.txt

  fwrite($pipes[0], '<?php print_r($_ENV); ?>');
  fclose($pipes[0]);

  echo stream_get_contents($pipes[1]);
  fclose($pipes[1]);

  // It is important that you close any pipes before calling
  // proc_close in order to avoid a deadlock
  $return_value = proc_close($process);

  echo "command returned $return_value\n";
}
