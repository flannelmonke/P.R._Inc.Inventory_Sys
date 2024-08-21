<?php

require_once '../database/dbAccess.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $data = loadData();

    for ($x = 0; $x < count($data); $x++) {
        echo
        "<tr data-row-id='row_$x' id='row$x'>
            <th>" . $x + 1 . "</th>"
            . $data[$x] .
            "<td>
                <button 
                    type='button'  
                    class='w-4 h-4'
                    onclick='showDeleteModal(\"row$x\")'
                    hx-target='#deleteResult'
                    >
                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='currentColor' class='size-5 w-full h-full'>
                        <path fill-rule='evenodd' d='M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z' clip-rule='evenodd' />
                    </svg>
                </button>
            </td>
            <th>" . $x + 1 . "</th>
        </tr>";
    }
}

// onclick='deleteRow(\"row$x\")'

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

if ($_SERVER['REQUEST_METHOD'] === "DELETE") {
    $product_id = $_GET['product_id'];

    echo deleteRow($product_id);
}
