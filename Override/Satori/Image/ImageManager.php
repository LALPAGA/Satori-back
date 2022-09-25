<?php

namespace App\Override\Satori\Image;

abstract class ImageManager {
    protected string $img_dir_path;
    protected string $img_dir_url;
    private string $extension = '.jpg';

    public function uploadImage(Imaged $object, array $file) {
        $file_name = $this->img_dir_path.'/'.$object->getId().$this->extension;

        return move_uploaded_file($file['tmp_name'], $file_name);
    }

    public function getUrl(Imaged $object): string
    {
        if(!$this->getPath($object))
            return '';

        return $this->img_dir_url.'/'.$object->getId().$this->extension;
    }

    public function getPath(Imaged $object): string
    {
        $path = $this->img_dir_path.'/'.$object->getId().$this->extension;

        if(!file_exists($path))
            return '';

        return $path;
    }
}