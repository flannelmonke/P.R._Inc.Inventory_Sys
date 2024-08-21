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

    $sql = "INSERT INTO Products VALUES ('" . $product->getProductId() . "','" . $product->getProductName() . "','" . $product->getManufacturer() . "','" . $product->getModelCompatibility() . "','" . $product->getMaterial() . "'," . $product->getLength() . "," . $product->getWidth() . "," . $product->getHeight() . "," . $product->getWeight() . ",'" . $product->getColor() . "','" . $product->getPartDescription() . "'," . $product->getPrice() . "," . $product->getStock() . "," . $product->getSupplierID() . ")";

    if ($conn->query($sql) == TRUE) {
        return "Product Added!";
    } else {
        return "Sorry bro, product was not added successfully<br>
        We totally got a error: " . $conn->error;
    }
}

/**
 * @return String
 * @param Array $product
 */
function updateProducts($products): string
{
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    for ($i = 0; $i < count($products); $i++) {
        $sql = "UPDATE Products SET 
            Product_name = '" . $products[$i]->getProductName() . "',
            Manufacturer = '" . $products[$i]->getManufacturer() . "',
            Model_Compatibility = '" . $products[$i]->getModelCompatibility() . "',
            Material = '" . $products[$i]->getMaterial() . "',
            length = " . $products[$i]->getLength() . ",
            width = " . $products[$i]->getWidth() . ",
            height = " . $products[$i]->getHeight() . ",
            weight = " . $products[$i]->getWeight() . ",
            color = '" . $products[$i]->getColor() . "',
            part_description = '" . $products[$i]->getPartDescription() . "',
            price = " . $products[$i]->getPrice() . ",
            stock = " . $products[$i]->getStock() . ",
            SupplierID = " . $products[$i]->getSupplierID() . "
            WHERE Product_id = '" . $products[$i]->getProductId() . "'";

        if ($conn->query($sql) == TRUE) {
            continue;
        } else {
            return "Sorry bro, product was not updated successfully<br>
                We totally got a error: " . $conn->error;
        }
    }
    return "All items saved!";
}

/**
 * @return String
 * @param String $product_id 
 */
function deleteRow($product_id): string
{
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM Products WHERE Product_id = '$product_id'";

    if ($conn->query($sql) == TRUE) {
        return "Product with ID $product_id has been deleted successfully.";
    } else {
        return "Sorry bro, product was not deleted successfully<br>
        We totally got a error: " . $conn->error;
    }
}
