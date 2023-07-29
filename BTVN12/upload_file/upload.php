<?php
class ImageUpload{
    public $file;

    public function getName($file){
        return $file['name'];
    }
    public function getType($file){
        return $file['type'];
    }
    public function moveFile($file){
        move_uploaded_file($file['tmp_name'], './upload/' . $file['name']);
    }
}
?>
