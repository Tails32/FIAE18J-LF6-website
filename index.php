<?php
#include_once "header.php";
if(!empty($_GET["page"]) && file_exists($_GET["page"].".php")) {
	include_once $_GET["page"].".php";
} else {
	include_once "default.php";
}
#include_once "footer.php";
?>