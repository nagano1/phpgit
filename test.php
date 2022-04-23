<?php
$rootDir = getcwd();
$git = "git";
$personalDir = "$rootDir/personal_gits";
$sharedDir = "$rootDir/shareds_gits";

if (!file_exists($personalDir)) {
    mkdir($personalDir, 0777, false);
}
if (!file_exists($sharedDir)) {
    mkdir($sharedDir, 0777, false);
}



$packageName = "mine";
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

print("$exec_cmd");
exec($exec_cmd, $output, $retval);
echo "Returned with status $retval and output:\n<br/>";

print_r($output);

?>
