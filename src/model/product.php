<?php


class Product
{

    private string $product_id;
    private string $product_name;
    private string $manufacturer;
    private string $model_compatibility;
    private string $material;
    private float $length;
    private float $width;
    private float $height;
    private float $weight;
    private string $color;
    private string $part_description;
    private float $price;
    private int $stock;
    private int $supplierID;

    /**
     * @param string $product_id
     * @param string $product_name
     * @param string $manufacturer
     * @param string $model_compatibility
     * @param string $material
     * @param float $length
     * @param float $width
     * @param float $height
     * @param float $weight
     * @param string $color
     * @param string $part_description
     * @param float $price
     * @param int $stock
     * @param int $supplierID
     */
    public function __construct($product_id, $product_name, $manufacturer, $model_compatibility, $material, $length, $width, $height, $weight, $color, $part_description, $price, $stock, $supplierID)
    {
        $this->setProductId($product_id);
        $this->setProductName($product_name);
        $this->setManufacturer($manufacturer);
        $this->setModelCompatibility($model_compatibility);
        $this->setMaterial($material);
        $this->setLength($length);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setWeight($weight);
        $this->setColor($color);
        $this->setPartDescription($part_description);
        $this->setPrice($price);
        $this->setStock($stock);
        $this->setSupplierID($supplierID);
    }

    public function getSupplierID()
    {
        return $this->supplierID;
    }

    public function setSupplierID($supplierID)
    {
        if (is_null($supplierID)) {
            $this->supplierID = 0;
        } else {
            $this->supplierID = $supplierID;
        }
    }

    public function getProductId()
    {
        return $this->product_id;
    }

    public function setProductId($product_id)
    {
        if (is_null($product_id)) {
            $this->product_id = '';
        } else {
            $this->product_id = $product_id;
        }
    }

    public function getProductName()
    {
        return $this->product_name;
    }

    public function setProductName($product_name)
    {
        if (is_null($product_name)) {
            $this->product_name = '';
        } else {
            $this->product_name = $product_name;
        }
    }

    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    public function setManufacturer($manufacturer)
    {
        if (is_null($manufacturer)) {
            $this->manufacturer = '';
        } else {
            $this->manufacturer = $manufacturer;
        }
    }

    public function getModelCompatibility()
    {
        return $this->model_compatibility;
    }

    public function setModelCompatibility($model_compatibility)
    {
        if (is_null($model_compatibility)) {
            $this->model_compatibility = '';
        } else {
            $this->model_compatibility = $model_compatibility;
        }
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function setMaterial($material)
    {
        if (is_null($material)) {
            $this->material = '';
        } else {
            $this->material = $material;
        }
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setLength($length)
    {
        if (is_null($length)) {
            $this->length = 0;
        } else {
            $this->length = $length;
        }
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        if (is_null($width)) {
            $this->width = 0;
        } else {
            $this->width = $width;
        }
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        if (is_null($height)) {
            $this->height = 0;
        } else {
            $this->height = $height;
        }
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        if (is_null($weight)) {
            $this->weight = 0;
        } else {
            $this->weight = $weight;
        }
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        if (is_null($color)) {
            $this->color = '';
        } else {
            $this->color = $color;
        }
    }

    public function getPartDescription()
    {
        return $this->part_description;
    }

    public function setPartDescription($part_description)
    {
        if (is_null($part_description)) {
            $this->part_description = '';
        } else {
            $this->part_description = $part_description;
        }
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        if (is_null($price)) {
            $this->price = 0;
        } else {
            $this->price = $price;
        }
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function setStock($stock)
    {
        if (is_null($stock)) {
            $this->stock = 0;
        } else {
            $this->stock = $stock;
        }
    }

    public function __toString()
    {
        return
            "<td>
                <input data-column-name='product_id' class='fields w-full p-2 border-none resize-x max-w-xs' type='text' value='$this->product_id'>" .
            "</td>
            <td>
                <input data-column-name='product_name' class='fields w-full p-2 border-none resize-x max-w-xs' type='text' value='$this->product_name'>" .
            "</td>
            <td>
                <input data-column-name='manufacturer' class='fields w-full p-2 border-none resize-x max-w-xs' type='text' value='$this->manufacturer' name=''>" .
            "</td>
            <td>
                <input data-column-name='model_compatibility' class='fields w-full p-2 border-none resize-x max-w-xs' type='text' value='$this->model_compatibility'>" .
            "</td>
            <td>
                <input data-column-name='material' class='fields w-full p-2 border-none resize-x max-w-xs' type='text' value='$this->material'>" .
            "</td>
            <td>
                <input data-column-name='length' class='fields w-full p-2 border-none resize-x max-w-xs' type='number' value='$this->length'" .
            "</td>
            <td>
                <input data-column-name='width' class='fields w-full p-2 border-none resize-x max-w-xs' type='number' value='$this->width'" .
            "</td>
            <td>
                <input data-column-name='height' class='fields w-full p-2 border-none resize-x max-w-xs' type='number' value='$this->height'>" .
            "</td>
            <td>
                <input data-column-name='weight' class='fields w-full p-2 border-none resize-x max-w-xs' type='number' value='$this->weight'>" .
            "</td>
            <td>
                <input data-column-name='color' class='fields w-full p-2 border-none resize-x max-w-xs' type='text' value='$this->color'>" .
            "</td>
            <td>
                <input data-column-name='part_description' class='fields w-full p-2 border-none resize-x max-w-xs' type='text' value='$this->part_description'>" .
            "</td>
            <td>
                <input data-column-name='price' class='fields w-full p-2 border-none resize-x max-w-xs' type='number' value='$this->price'" .
            "</td>
            <td>
                <input data-column-name='stock' class='fields w-full p-2 border-none resize-x max-w-xs' type='number' value='$this->stock'>" .
            "</td>" .
            "<td>
                <input data-column-name='supplierID' class='fields w-1 border-none' type='number' value='$this->supplierID'>" .
            "</td>";
    }
}
