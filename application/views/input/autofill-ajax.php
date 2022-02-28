<?php
$nik = $_GET['nik'];
$sql = $this->db->query("SELECT * FROM penduduk WHERE nik='$nik'")->result_array();
