<?php
$koneksi = new mysqli("localhost", "root", "", "db_zis");
if (mysqli_connect_errno()) {
	trigger_error("Koneksi ke Database gagal!");
}
