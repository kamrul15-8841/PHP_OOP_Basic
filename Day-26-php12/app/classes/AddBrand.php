<?php


namespace App\classes;


class AddBrand
{
    public $brand_id, $name, $file, $fileContent, $filePath, $array, $subArray, $finalArray;

    public function __construct($post = null)
    {
        if ($post)
        {
            $this->brand_id = $post['brand_id'];
            $this->name = $post['brand_name'];
        }
    }

    public function saveProductInfo()
    {
        $this->filePath = 'db/brand.txt';
        $this->file = fopen($this->filePath, 'a');
        $this->fileContent = "$this->brand_id, $this->name$";
        fwrite($this->file, $this->fileContent);
        fclose($this->file);
        return 'Data Saved Successfully';
    }

    public function getAllBrand()
    {
        $this->filePath = 'db/brand.txt';
        $this->fileContent = file_get_contents($this->filePath);
        $this->array = explode('$', $this->fileContent);
        foreach ($this->array as $key => $value) {
            $this->subArray = explode(', ', $value);
            if ($this->subArray[0]) {
                $this->finalArray[$key]['brand_id'] = $this->subArray[0];
                $this->finalArray[$key]['brand_name'] = $this->subArray[1];
            }
        }
        return $this->finalArray;
    }

}