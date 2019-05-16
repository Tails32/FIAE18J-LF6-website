<?php
include_once "header.php";
if(!empty($_GET["p"]) && file_exists($_GET["p"].".php")) {
	include_once $_GET["p"].".php";
} else {
	include_once "default.php";
}
include_once "footer.php";
?>