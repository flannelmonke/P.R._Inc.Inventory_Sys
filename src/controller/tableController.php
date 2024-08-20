<?php

require_once '../database/dbAccess.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $data = loadData();

    for ($x = 0; $x < count($data); $x++) {
        echo
        "<tr data-row-id='row_$x' id='row$x'>
        <th>" . $x + 1 . "</th>"
            . $data[$x] .
            "<th>" . $x + 1 . "</th>
        </tr>";
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

if ($_SERVER['REQUEST_METHOD'] === 'PATCH') {
    // Read the raw input data
    $input = file_get_contents('php://input');

    // Decode the JSON data into a PHP associative array
    $data = json_decode($input, true);

    $products = [];

    // Check if JSON decoding was successful
    if (json_last_error() === JSON_ERROR_NONE) {
        // Process the data
        // Example: Loop through the changes and print them (you can replace this with your actual processing logic)
        foreach ($data as $rowId => $rowData) {
            $temp = new Product(
                $rowData['product_id'],
                $rowData['product_name'],
                $rowData['manufacturer'],
                $rowData['model_compatibility'],
                $rowData['material'],
                (float)$rowData['length'],
                (float)$rowData['width'],
                (float)$rowData['height'],
                (float)$rowData['weight'],
                $rowData['color'],
                $rowData['part_description'],
                (float)$rowData['price'],
                (int)$rowData['stock'],
                (int)$rowData['supplierID']
            );
            $products[] = $temp;
        }
        echo updateProducts($products);
        // Respond with a success message
        http_response_code(200); // OK status

        // echo json_encode(["status" => "success", "message" => "Data processed successfully."]);
    } else {
        // Respond with an error message if JSON decoding failed
        http_response_code(400); // Bad request status
        echo json_encode(["status" => "error", "message" => "Invalid JSON data."]);
    }
}
