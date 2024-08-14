<?php

require_once '../database/dbAccess.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $data = loadData();

    for ($x = 0; $x < count($data); $x++) {
        echo "<tr><th>" . $x . "</th>" . $data[$x] . "<th>" . $x . "</th></tr>";
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['serial_number'])) {
        $temp = new Product(
            $_POST['serial_number'],
            $_POST['prod_name'],
            $_POST['manufacturer'],
            $_POST['model_comp'],
            $_POST['material'],
            (float)$_POST['length'],
            (float)$_POST['width'],
            (float)$_POST['height'],
            (float)$_POST['weight'],
            $_POST['color'],
            $_POST['description'],
            (float)$_POST['price'],
            (int)$_POST['stock'],
            (int)$_POST['supplierID']
        );
        echo addProduct($temp);
    } else {
        echo 'Come on dude at least put it in the serial number<br>
        literally the only one I require you to add';
    }
}
