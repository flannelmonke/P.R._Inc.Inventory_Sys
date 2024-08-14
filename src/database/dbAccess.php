<?php

require_once '../../config.php';
require_once '../model/product.php';
// Create connection


/**
 * @return Product[]
 */
function loadData(): array
{
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM products";

    $query_result = $conn->query($sql);

    $result = [];
    if ($query_result->num_rows > 0) {

        while ($row = $query_result->fetch_assoc()) {
            $temp = new Product($row['Product_id'], $row['Product_name'], $row['Manufacturer'], $row['Model_Compatibility'], $row['Material'], $row['length'], $row['width'], $row['height'], $row['weight'], $row['color'], $row['part_description'], $row['price'], $row['stock'], $row['SupplierID']);
            $result[] = $temp;
        }
    } else {
        echo "0 results";
    }
    $conn->close();

    return $result;
}

function addProduct(Product $product): string
{
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $placeholder = $product->getProductName();;

    $sql = "INSERT INTO Products VALUES ('" . $product->getProductId() . "','" . $product->getProductName() . "','" . $product->getManufacturer() . "','" . $product->getModelCompatibility() . "','" . $product->getMaterial() . "'," . $product->getLength() . "," . $product->getWidth() . "," . $product->getHeight() . "," . $product->getWeight() . ",'" . $product->getColor() . "','" . $product->getPartDescription() . "'," . $product->getPrice() . "," . $product->getStock() . "," . $product->getSupplierID() . ")";

    if ($conn->query($sql) == TRUE) {
        return "Product Added!";
    } else {
        return "Sorry bro, product was not added successfully<br>
        We totally got a error: " . $conn->error;
    }
}
