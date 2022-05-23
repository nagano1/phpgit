<?php

$rootDir = getcwd();
$git = "git";
$personalDir = "$rootDir/personal_gits";
$sharedDir = "$rootDir/shareds_gits";
$packageName = "mine";





if (!file_exists($personalDir)) {
    mkdir($personalDir, 0777, false);
}
if (!file_exists($sharedDir)) {
    mkdir($sharedDir, 0777, false);
}



$dir = "$sharedDir/$packageName";
if (!file_exists($dir)) {
    mkdir("$dir", 0777, false);
}

chdir($dir);

$output = null;
$retval = null;
$common_args = "--no-color";

$git_args = escapeshellarg("init"). " " . escapeshellarg(".");
$exec_cmd = escapeshellcmd("$git $git_args");

exec($exec_cmd, $output, $retval);

$ary = array('a'=>"Taro26", 'b'=>"John", 'c'=>"Nikita", 'd'=>"Jiro", 'e'=>"Saburo" );
$ary["cmd"] = $exec_cmd;
$ary["post"] = $_POST;
$original_string = "original";
$ary["sha256"] = hash('sha256', $original_string);
$ary["message"] = "Returned with status $retval and output:\n<br/>";

$json = json_encode($ary);

print($json);

?>
