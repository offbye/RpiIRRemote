<?php
$cmd = $_POST['cmd'];
if(!$cmd){
$cmd = $_GET['cmd'];
}
$device = $_POST['device'];
if(!$device){
$device = $_GET['device'];
}
if($cmd && $device){
$cmdline = "irsend SEND_ONCE ".$device."  ".$cmd ;
echo($cmdline);
$output = shell_exec($cmdline);
echo($output);
}
?>