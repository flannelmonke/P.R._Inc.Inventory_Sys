<?php

    class Product{
        private $product_id;
        private $product_name;
        private $manufacturer;
        private $model_compatibility;
        private $material;
        private $length;
        private $width;
        private $height;
        private $weight;
        private $color;
        private $part_description;
        private $price;
        private $stock;

        public function __construct($product_id, $product_name, $manufacturer, $model_compatibility, $material, $length, $width, $height, $weight, $color, $part_description, $price, $stock) {
            $this->product_id = $product_id;
            $this->product_name = $product_name;
            $this->manufacturer = $manufacturer;
            $this->model_compatibility = $model_compatibility;
            $this->material = $material;
            $this->length = $length;
            $this->width = $width;
            $this->height = $height;
            $this->weight = $weight;
            $this->color = $color;
            $this->part_description = $part_description;
            $this->price = $price;
            $this->stock = $stock;
        }

        public function getProductId() {
            return $this->product_id;
        }

        public function setProductId($product_id) {
            $this->product_id = $product_id;
        }

        public function getProductName() {
            return $this->product_name;
        }

        public function setProductName($product_name) {
            $this->product_name = $product_name;
        }

        public function getManufacturer() {
            return $this->manufacturer;
        }

        public function setManufacturer($manufacturer) {
            $this->manufacturer = $manufacturer;
        }

        public function getModelCompatibility() {
            return $this->model_compatibility;
        }

        public function setModelCompatibility($model_compatibility) {
            $this->model_compatibility = $model_compatibility;
        }

        public function getMaterial() {
            return $this->material;
        }

        public function setMaterial($material) {
            $this->material = $material;
        }

        public function getLength() {
            return $this->length;
        }

        public function setLength($length) {
            $this->length = $length;
        }

        public function getWidth() {
            return $this->width;
        }

        public function setWidth($width) {
            $this->width = $width;
        }

        public function getHeight() {
            return $this->height;
        }

        public function setHeight($height) {
            $this->height = $height;
        }

        public function getWeight() {
            return $this->weight;
        }

        public function setWeight($weight) {
            $this->weight = $weight;
        }

        public function getColor() {
            return $this->color;
        }

        public function setColor($color) {
            $this->color = $color;
        }

        public function getPartDescription() {
            return $this->part_description;
        }

        public function setPartDescription($part_description) {
            $this->part_description = $part_description;
        }

        public function getPrice() {
            return $this->price;
        }

        public function setPrice($price) {
            $this->price = $price;
        }

        public function getStock() {
            return $this->stock;
        }

        public function setStock($stock) {
            $this->stock = $stock;
        }
    }

?>