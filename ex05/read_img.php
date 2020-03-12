<?php
$file = '../img/42.png';
if (file_exists($file)) {
	header("content-Type: image/png");
	readfile($file);
}
?>
