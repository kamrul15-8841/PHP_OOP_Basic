<?php


namespace App\classes;


class AddCategory
{
    public $category_id, $name, $file, $fileContent, $filePath, $array, $subArray, $finalArray;

    public function __construct($post = null)
    {
        if ($post) {
            $this->category_id = $post['category_id'];
            $this->name = $post['name'];
        }
    }

    public function saveProductInfo()
    {
        $this->filePath = 'db/category.txt';
        $this->file = fopen($this->filePath, 'a');
        $this->fileContent = "$this->category_id, $this->name$";
        fwrite($this->file, $this->fileContent);
        fclose($this->file);
        return 'Data Saved Successfully';
    }

    public function getAllCategory()
    {
        $this->filePath = 'db/category.txt';
        $this->fileContent = file_get_contents($this->filePath);
        $this->array = explode('$', $this->fileContent);
        foreach ($this->array as $key => $value) {
            $this->subArray = explode(', ', $value);
            if ($this->subArray[0]) {
                $this->finalArray[$key]['category_id'] = $this->subArray[0];
                $this->finalArray[$key]['name'] = $this->subArray[1];
            }
        }
        return $this->finalArray;
    }
}