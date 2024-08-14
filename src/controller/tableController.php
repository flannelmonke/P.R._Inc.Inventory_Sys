<?php

require_once '../database/dbAccess.php';

$data = loadData();

for ($x = 0; $x < count($data); $x++) {
    echo "<tr><th>" . $x . "</th>" . $data[$x] . "<th>" . $x . "</th></tr>";
}
