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
    public function __construct($product_id, $product_name, $manufacturer, $model_compatibility, $material, $length, $width, $height, $weight, $color, $part_description, $price, $stock)
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
            "<td>" .
            $this->product_id .
            "</td>
                <td>" .
            $this->product_name .
            "</td>
                <td>" .
            $this->manufacturer .
            "</td>
                <td>" .
            $this->model_compatibility .
            "</td>
                <td>" .
            $this->material .
            "</td>
                <td>" .
            $this->length .
            "</td>
                <td>" .
            $this->width .
            "</td>
                <td>" .
            $this->height .
            "</td>
                <td>" .
            $this->weight .
            "</td>
                <td>" .
            $this->color .
            "</td>
                <td>" .
            $this->part_description .
            "</td>
                <td>" .
            $this->price .
            "</td>
                <td>" .
            $this->stock .
            "</td>";
    }
}
