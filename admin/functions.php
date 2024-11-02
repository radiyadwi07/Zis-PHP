<?php
function dbConnect()
{
	$db = new mysqli("localhost", "root", "", "db_zis");
	return $db;
}
