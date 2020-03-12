<?php
if ($_GET['action'] === 'set')
{
	echo "set\n";
	if ($_GET['name'] && $_GET['value'])
		setcookie($_GET['name'], $_GET['value'], time() + (60 * 30));
}
else if ($_GET['action'] === 'get')
{
	$name = $_GET['name'];
	if ($_GET['name'] && $_COOKIE[$name])
		echo $_COOKIE[$name]."\n";
}
else if ($_GET['action'] === 'del')
{
	if ($_GET['name'])
		setcookie($_GET['name'], '', time() - (60 * 30));
}
?>
