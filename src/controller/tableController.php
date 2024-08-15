<?php

require_once '../database/dbAccess.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $data = loadData();

    for ($x = 0; $x < count($data); $x++) {
        echo
        "<tr id='row$x'>
        <th>" . $x + 1 . "</th>"
            . $data[$x] .
            "<th>" . $x + 1 . "</th>
        <td>
            <button onclick='setEditable(\"row$x\")'>
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" class=\"size-5\" width=\"12\" height=\"12\">
                    <path d=\"m2.695 14.762-1.262 3.155a.5.5 0 0 0 .65.65l3.155-1.262a4 4 0 0 0 1.343-.886L17.5 5.501a2.121 2.121 0 0 0-3-3L3.58 13.419a4 4 0 0 0-.885 1.343Z\" />
                </svg>        
            </button>
        </td>
        </tr>";
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
