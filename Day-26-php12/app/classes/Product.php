<?php


namespace App\classes;


class Product
{
    public $product;
    public $allProducts;
    public $products = [];
    public $category_id;
    public $brand_id;
    public $name;
    public $price;
    public $description;
    public $image;
    public $imagePath;
    public $file;
    public $filePath;
    public $fileContent;

    public $array;
    public $subArray;
    public $finalArray = [];

    public $imageName;
    public $imageDirectory;

    public function __construct($post = null, $file = null)
    {
        if ($post)
        {
            $this->category_id = $post['category_id'];
            $this->brand_id = $post['brand_id'];
            $this->name = $post['name'];
            $this->price = $post['price'];
            $this->description = $post['description'];
        }
        if ($file)
        {
            $this->image = $file['image'];
        }
    }

    public function saveProductInfo()
    {
        $this->imageDirectory = $this->uploadImage();
        $this->filePath = 'db/db.txt';
        $this->file = fopen($this->filePath, 'a');
        $this->fileContent = "$this->category_id,$this->brand_id, $this->name, $this->price, $this->description, $this->imageDirectory$";
        fwrite($this->file, $this->fileContent);
        fclose($this->file);
        return 'Data Saved Successfully';
    }

    public function uploadImage()
    {
        $this->imageName = rand(99,999999).time().$this->image['name'];
        $this->imageDirectory = 'assets/img/upload/'.$this->imageName;
        move_uploaded_file($this->image['tmp_name'], $this->imageDirectory);
        return $this->imageDirectory;
    }

    public function getAllProducts()
    {
        $this->filePath = 'db/db.txt';
        $this->fileContent = file_get_contents($this->filePath);
        $this->array = explode('$', $this->fileContent);
        foreach ($this->array as $key => $value)
        {
            $this->subArray = explode(', ', $value);
            if ($this->subArray[0])
            {
                $this->finalArray[$key]['category_id'] = $this->subArray[0];
                $this->finalArray[$key]['brand_id'] = $this->subArray[0];
                $this->finalArray[$key]['name'] = $this->subArray[1];
                $this->finalArray[$key]['price'] = $this->subArray[2];
                $this->finalArray[$key]['description'] = $this->subArray[3];
                $this->finalArray[$key]['image'] = $this->subArray[4];
            }
        }
        return $this->finalArray;
    }

    public function getCategoryWiseProduct($categoryId)
    {
        $this->allProducts = $this->getAllProducts();

        foreach ($this->allProducts as $product)

        {
            if ($product['category_id'] == $categoryId)
            {
                array_push($this->products, $product);
            }
        }
        return $this->products;
    }
    public function getBrandWiseProduct($brandId)
    {
        $this->allProducts = $this->getAllProducts();

        foreach ($this->allProducts as $product)

        {
            if ($product['brand_id'] == $brandId)
            {
                array_push($this->products, $product);
            }
        }
        return $this->products;
    }
}