<?php 
$output = shell_exec('cd ../ && git pull 2>&1');
echo "<h2>$output</h2>";
?>
